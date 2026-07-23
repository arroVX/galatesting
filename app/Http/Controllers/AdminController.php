<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // === AUTHENTICATION ===
    public function showLogin()
    {
        if (session('is_admin')) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('login');
    }

    public function authenticate(Request $request)
    {
        $password = $request->input('password');
        // Simple hardcoded password for demo/admin gate
        if ($password === 'galaksi123') {
            session(['is_admin' => true]);
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('error', 'Password salah!');
    }

    public function logout()
    {
        session()->forget('is_admin');
        return redirect()->route('login');
    }

    private function checkAuth()
    {
        if (!session('is_admin')) {
            abort(redirect()->route('login'));
        }
    }

    // === DASHBOARD ===
    public function dashboard()
    {
        $this->checkAuth();
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('products'));
    }

    // === PRODUCT CRUD ===
    public function createProduct()
    {
        $this->checkAuth();
        return view('admin.product-form');
    }

    public function storeProduct(Request $request)
    {
        $this->checkAuth();

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imageUrl = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . Str::slug($request->input('name')) . '.' . $file->getClientOriginalExtension();
            // Store directly in public/images for simplicity in this project
            $file->move(public_path('images/merch'), $filename);
            $imageUrl = asset('images/merch/' . $filename);
        }

        Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
            'image_url' => $imageUrl,
            'description' => $request->input('description', 'Official Galaksi XII Merchandise'),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function editProduct($id)
    {
        $this->checkAuth();
        $product = Product::findOrFail($id);
        return view('admin.product-form', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $this->checkAuth();
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . Str::slug($request->input('name')) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/merch'), $filename);
            $product->image_url = asset('images/merch/' . $filename);
        }

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->description = $request->input('description', 'Official Galaksi XII Merchandise');
        $product->save();

        return redirect()->route('admin.dashboard')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroyProduct($id)
    {
        $this->checkAuth();
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Produk berhasil dihapus!');
    }
}
