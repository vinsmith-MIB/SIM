<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kota;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kota::create([
            'nama_kota' => 'Surabaya',
            'ongkir' => 15000, // Ongkir untuk Surabaya
            'kota_seo' => 'surabaya'
        ]);

        Kota::create([
            'nama_kota' => 'Malang',
            'ongkir' => 20000, // Ongkir untuk Malang
            'kota_seo' => 'malang'
        ]);

        Kota::create([
            'nama_kota' => 'Sidoarjo',
            'ongkir' => 12000, // Ongkir untuk Sidoarjo
            'kota_seo' => 'sidoarjo'
        ]);

        Kota::create([
            'nama_kota' => 'Jember',
            'ongkir' => 25000, // Ongkir untuk Jember
            'kota_seo' => 'jember'
        ]);

        Kota::create([
            'nama_kota' => 'Batu',
            'ongkir' => 18000, // Ongkir untuk Batu
            'kota_seo' => 'batu'
        ]);

        Kota::create([
            'nama_kota' => 'Probolinggo',
            'ongkir' => 22000, // Ongkir untuk Probolinggo
            'kota_seo' => 'probolinggo'
        ]);

        Kota::create([
            'nama_kota' => 'Mojokerto',
            'ongkir' => 17000, // Ongkir untuk Mojokerto
            'kota_seo' => 'mojokerto'
        ]);

        Kota::create([
            'nama_kota' => 'Blitar',
            'ongkir' => 23000, // Ongkir untuk Blitar
            'kota_seo' => 'blitar'
        ]);

        Kota::create([
            'nama_kota' => 'Kediri',
            'ongkir' => 19000, // Ongkir untuk Kediri
            'kota_seo' => 'kediri'
        ]);

        Kota::create([
            'nama_kota' => 'Pasuruan',
            'ongkir' => 21000, // Ongkir untuk Pasuruan
            'kota_seo' => 'pasuruan'
        ]);

        Kota::create([
            'nama_kota' => 'Lumajang',
            'ongkir' => 24000, // Ongkir untuk Lumajang
            'kota_seo' => 'lumajang'
        ]);

        Kota::create([
            'nama_kota' => 'Trenggalek',
            'ongkir' => 26000, // Ongkir untuk Trenggalek
            'kota_seo' => 'trenggalek'
        ]);

        Kota::create([
            'nama_kota' => 'Probolinggo',
            'ongkir' => 22000, // Ongkir untuk Probolinggo
            'kota_seo' => 'probolinggo'
        ]);

        Kota::create([
            'nama_kota' => 'Banyuwangi',
            'ongkir' => 28000, // Ongkir untuk Banyuwangi
            'kota_seo' => 'banyuwangi'
        ]);

        Kota::create([
            'nama_kota' => 'Tuban',
            'ongkir' => 19000, // Ongkir untuk Tuban
            'kota_seo' => 'tuban'
        ]);

        // Lanjutkan menambahkan kota-kota lain di Jawa Timur sesuai dengan kebutuhan.
    }
}
