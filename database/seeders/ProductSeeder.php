<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Gantungan Kunci',
            'description' => 'Gantungan kunci logam eksklusif Galaksi XII bermotif dadu & bola 8.',
            'price' => 15000,
            'image_url' => '/images/keychain.jpg',
            'category' => 'Accessories'
        ]);

        Product::create([
            'name' => 'Tumbler',
            'description' => 'Tumbler stainless steel matte ramah lingkungan eksklusif Galaksi XII.',
            'price' => 55000,
            'image_url' => '/images/tumbler.jpg',
            'category' => 'Drinkware'
        ]);

        Product::create([
            'name' => 'Totebag',
            'description' => 'Totebag kanvas tebal estetis dengan sablon eksklusif Galaksi XII.',
            'price' => 45000,
            'image_url' => '/images/totebag.jpg',
            'category' => 'Bags'
        ]);

        Product::create([
            'name' => 'Topi',
            'description' => 'Topi baseball beige stylish bertema Galaksi untuk melengkapi gaya Anda.',
            'price' => 65000,
            'image_url' => '/images/cap.jpg',
            'category' => 'Apparel'
        ]);

        Product::create([
            'name' => 'Kipas Tangan',
            'description' => 'Kipas tangan lipat ukiran bermotif tradisional eksklusif Galaksi XII.',
            'price' => 25000,
            'image_url' => '/images/fan.jpg',
            'category' => 'Accessories'
        ]);

        Product::create([
            'name' => 'Cermin',
            'description' => 'Cermin saku vintage ukiran emas elegan, sangat anggun dibawa ke mana saja.',
            'price' => 15000,
            'image_url' => '/images/mirror.jpg',
            'category' => 'Accessories'
        ]);

        Product::create([
            'name' => 'Sticker Pack UV',
            'description' => 'Set stiker tahan air dan sinar UV edisi All City, cocok untuk laptop atau helm.',
            'price' => 20000,
            'image_url' => '/images/sticker.jpg',
            'category' => 'Accessories'
        ]);

        Product::create([
            'name' => 'Notebook + Bolpoin',
            'description' => 'Buku catatan jurnal kulit sintetis premium dilengkapi pita penanda & bolpoin.',
            'price' => 35000,
            'image_url' => '/images/notebook.jpg',
            'category' => 'Stationery'
        ]);
    }
}
