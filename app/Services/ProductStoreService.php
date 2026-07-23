<?php

namespace App\Services;

use App\Models\Product;

class ProductStoreService
{
    private static function getStoragePath()
    {
        $dir = is_writable('/tmp') ? '/tmp' : storage_path('app');
        if (!is_dir($dir)) {
            @mkdir($dir, 0777, true);
        }
        return $dir . '/products_data.json';
    }

    public static function loadSavedProducts()
    {
        $path = self::getStoragePath();
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
        $path = self::getStoragePath();
        try {
            $products = Product::all()->toArray();
            @file_put_contents($path, json_encode($products, JSON_PRETTY_PRINT));
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
                    self::saveAllProductsFromDb();
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
                    self::saveAllProductsFromDb();
                }
            } catch (\Throwable $ex) {
                // Ignore
            }
        }
    }
}
