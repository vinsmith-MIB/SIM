<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['nama_kategori' => 'T-Shirts', 'kategori_seo' => 't-shirts'],
            ['nama_kategori' => 'Jeans', 'kategori_seo' => 'jeans'],
            ['nama_kategori' => 'Jackets', 'kategori_seo' => 'jackets'],
            ['nama_kategori' => 'Shoes', 'kategori_seo' => 'shoes'],
            ['nama_kategori' => 'Accessories', 'kategori_seo' => 'accessories'],
            ['nama_kategori' => 'Sweaters', 'kategori_seo' => 'sweaters'],
            ['nama_kategori' => 'Dresses', 'kategori_seo' => 'dresses'],
            ['nama_kategori' => 'Hats', 'kategori_seo' => 'hats'],
        ];

        foreach ($categories as $category) {
            Kategori::create($category);
        }
    }
}
