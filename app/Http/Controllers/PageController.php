<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function merchandise()
    {
        \App\Services\ProductStoreService::ensureDatabasePopulated();
        $products = Product::all();
        return view('merchandise', compact('products'));
    }

    public function kompetisi($sport = 'basket')
    {
        $validSports = [
            'basket' => 'Basketball',
            'futsal' => 'Futsal',
            'voli' => 'Volleyball'
        ];

        if (!array_key_exists($sport, $validSports)) {
            abort(404);
        }

        $sportName = $validSports[$sport];
        return view('kompetisi', compact('sport', 'sportName'));
    }

    public function productDetail($id)
    {
        try {
            $product = Product::find($id);
            if (!$product) {
                \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
                \Illuminate\Support\Facades\Artisan::call('db:seed', ['--force' => true]);
                $product = Product::find($id);
            }
        } catch (\Throwable $e) {
            try {
                \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
                \Illuminate\Support\Facades\Artisan::call('db:seed', ['--force' => true]);
                $product = Product::find($id);
            } catch (\Throwable $ex) {
                $product = null;
            }
        }

        if (!$product) {
            abort(404, 'Produk tidak ditemukan.');
        }

        return view('product-detail', compact('product'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        $qty = (int) $request->input('quantity', 1);
        if ($qty < 1) $qty = 1;

        if ($request->has('direct_checkout')) {
            $buyNowCart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => $qty,
                    "price" => $product->price,
                    "image_url" => $product->image_url,
                    "category" => $product->category
                ]
            ];
            session()->put('buy_now_cart', $buyNowCart);
            return redirect()->route('checkout', ['mode' => 'buynow']);
        }

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += $qty;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => $qty,
                "price" => $product->price,
                "image_url" => $product->image_url,
                "category" => $product->category
            ];
        }

        session()->put('cart', $cart);

        // Calculate totals for snackbar
        $totalPrice = 0;
        $totalItems = 0;
        foreach ($cart as $item) {
            $totalItems += $item['quantity'];
            $totalPrice += $item['price'] * $item['quantity'];
        }

        $message = 'Produk berhasil ditambahkan ke keranjang!';

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $message,
                'cartCount' => count($cart),
                'totalItems' => $totalItems,
                'totalPrice' => $totalPrice,
                'totalPriceFormatted' => 'Rp ' . number_format($totalPrice, 0, ',', '.'),
            ]);
        }

        return redirect()->back()->with('success', $message)
            ->with('cartCount', $totalItems)
            ->with('cartTotal', $totalPrice);
    }

    public function removeFromCart(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        // Recalculate totals
        $totalPrice = 0;
        $totalItems = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
            $totalItems += $item['quantity'];
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'totalPrice' => $totalPrice,
                'totalItems' => $totalItems,
                'cartCount' => count($cart),
            ]);
        }

        return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang!');
    }

    public function clearCart(Request $request)
    {
        session()->forget('cart');
        return response()->json(['success' => true]);
    }

    public function cart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function updateCart(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $action = $request->input('action');
            if($action === 'increase') {
                $cart[$id]['quantity']++;
            } elseif($action === 'decrease') {
                $cart[$id]['quantity']--;
                if($cart[$id]['quantity'] <= 0) {
                    unset($cart[$id]);
                }
            }
            session()->put('cart', $cart);
        }

        // Recalculate totals
        $totalPrice = 0;
        $totalItems = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
            $totalItems += $item['quantity'];
        }

        $itemData = isset($cart[$id]) ? $cart[$id] : null;

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'quantity' => $itemData ? $itemData['quantity'] : 0,
                'itemSubtotal' => $itemData ? $itemData['price'] * $itemData['quantity'] : 0,
                'totalPrice' => $totalPrice,
                'totalItems' => $totalItems,
                'cartCount' => count($cart),
                'removed' => !isset($cart[$id]),
            ]);
        }

        return redirect()->back();
    }

    public function checkout(Request $request)
    {
        $mode = $request->query('mode');
        if ($mode === 'buynow') {
            $cart = session()->get('buy_now_cart', []);
        } else {
            $cart = session()->get('cart', []);
        }
        return view('checkout', compact('cart', 'mode'));
    }

    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        session(['user_name' => explode('@', $request->email)[0]]);
        return redirect()->route('merchandise')->with('toast', 'Berhasil masuk!');
    }

    public function register()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|min:4|confirmed',
        ]);

        try {
            User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
            ]);
        } catch (\Exception $e) {
            // Fallback for demo
        }

        session(['user_name' => $validated['name']]);
        return redirect()->route('merchandise')->with('toast', 'Pendaftaran berhasil! Selamat datang.');
    }

    public function logout()
    {
        session()->forget('user_name');
        return redirect()->route('merchandise')->with('toast', 'Berhasil keluar!');
    }
}
