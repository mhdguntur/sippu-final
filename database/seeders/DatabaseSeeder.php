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
            'nama' => 'UPT. PLUT RIAU KUMKM',
            'email' => 'pemerintah@email.gov',
            'roles' => 'Pemerintah',
            'password' => bcrypt('@PlutRiaujay4')
        ]);

    }
}
