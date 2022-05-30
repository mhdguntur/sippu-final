<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Produk;
use App\Models\Pelayanan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'guntur@email.com',
            'nama' => 'Guntur dermawan',
            'nik' => 12122,
            'password' => bcrypt('password'),
            'roles' => 'Masyarakat',
            'status' => 'Belum Diverifikasi',
            'nama_usaha' => 'Usaha Makanan',
            'kelurahan' => 'Kelurahan',
            'no_telp' => 121212,
            'npwp' => 123456,
            'no_iumk' => 1324,
            'no_siup' => 1212,
            'no_tdp' => 122112,
            'tgl_mulai' => Carbon::parse('2022-05-15'),
            'sektor_usaha' => 'Kuliner',
            'sentra' => 'Tidak',
            'id_sentra' => 12122,
            'alamat' => 'Jakarta',
            'usaha_utama' => 'Usaha',
            'produk_hasil' => 'Nasi Goreng',
            'tenaga_tetap' => 150,
            'tenaga_tidak_tetap' => 200,
            'tenaga_tidak_bayar' => 120,
            'kapasitas_produksi' => 500,
            'harga_satuan' => 10000,
            'omzet' => 400000,
            'modal_sendiri' => 1000000,
            'modal_luar' => 1200000,
            'laporan_keuangan' => 'Ya',
            'jangkauan_pemasaran' => 'Daerah',
            'pemasaran_online' => 'Online',
        ]);
        User::create([
            'nama' => 'Pemerintah',
            'email' => 'pemerintah@email.gov',
            'roles' => 'Pemerintah',
            'password' => bcrypt('password')
        ]);

        Produk::factory(20)->create();
        $this->call(PelayananSeeder::class);
    }
}
