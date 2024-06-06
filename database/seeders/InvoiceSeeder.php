<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;
use App\Models\User;
use App\Models\Produk;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil semua user dan produk dari database
        $users = User::all();
        $produks = Produk::all();

        // Lakukan iterasi untuk membuat data dummy invoice
        foreach ($users as $user) {
            foreach ($produks as $produk) {
                // Buat data dummy invoice dengan jumlah acak antara 1 hingga 10
                $jumlah = rand(1, 10);
                $total_amount = $jumlah * $produk->harga;

                Invoice::create([
                    'invoice_number' => 'INV-' . uniqid(), // Contoh pembuatan nomor invoice acak
                    'id_user' => $user->id,
                    'id_produk' => $produk->id,
                    'jumlah' => $jumlah,
                    'total_amount' => $total_amount,
                    'created_at' => now(), // Tanggal pembuatan invoice saat ini
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
