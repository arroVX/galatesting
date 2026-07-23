<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Http;

class ProductStoreService
{
    private static function getFirebaseUrl()
    {
        return 'https://galaksi-xii-default-rtdb.asia-southeast1.firebasedatabase.app/products.json';
    }

    private static function getLocalStoragePath()
    {
        $dir = is_writable('/tmp') ? '/tmp' : storage_path('app');
        if (!is_dir($dir)) {
            @mkdir($dir, 0777, true);
        }
        return $dir . '/products_data.json';
    }

    public static function loadSavedProducts()
    {
        // 1. Try fetching from Cloud Firebase Realtime Database (100% Permanent Cloud Store)
        try {
            $response = Http::withoutVerifying()->timeout(5)->get(self::getFirebaseUrl());
            if ($response->successful()) {
                $data = $response->json();
                if (is_array($data) && count($data) > 0) {
                    $products = array_values($data);
                    @file_put_contents(self::getLocalStoragePath(), json_encode($products));
                    return $products;
                }
            }
        } catch (\Throwable $e) {
            // Fallback
        }

        // 2. Fallback to local /tmp file cache
        $path = self::getLocalStoragePath();
        if (file_exists($path)) {
            $json = file_get_contents($path);
            $data = json_decode($json, true);
            if (is_array($data) && count($data) > 0) {
                return $data;
            }
        }
        return null;
    }

    public static function saveAllProductsFromDb()
    {
        try {
            $products = Product::all()->toArray();
            
            // Save to local file cache
            @file_put_contents(self::getLocalStoragePath(), json_encode($products, JSON_PRETTY_PRINT));

            // Sync to Cloud Firebase Realtime Database for permanent storage across serverless restarts
            Http::withoutVerifying()->timeout(5)->put(self::getFirebaseUrl(), $products);
        } catch (\Throwable $e) {
            // Ignore
        }
    }

    public static function ensureDatabasePopulated()
    {
        try {
            $count = Product::count();
            if ($count === 0) {
                \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
                $saved = self::loadSavedProducts();
                if ($saved && count($saved) > 0) {
                    foreach ($saved as $p) {
                        unset($p['created_at'], $p['updated_at']);
                        Product::create($p);
                    }
                } else {
                    \Illuminate\Support\Facades\Artisan::call('db:seed', ['--force' => true]);
                }
            }
        } catch (\Throwable $e) {
            try {
                \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
                $saved = self::loadSavedProducts();
                if ($saved && count($saved) > 0) {
                    foreach ($saved as $p) {
                        unset($p['created_at'], $p['updated_at']);
                        Product::create($p);
                    }
                } else {
                    \Illuminate\Support\Facades\Artisan::call('db:seed', ['--force' => true]);
                }
            } catch (\Throwable $ex) {
                // Ignore
            }
        }
    }
}
