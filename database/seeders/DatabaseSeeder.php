<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Produk::create([
            'nama_produk' => 'Produk Pertama',
            'keterangan' => 'Ini produk pertama ya ges ya',
            'harga' => 120000,
            'jumlah' => 10
        ]);

        Produk::create([
            'nama_produk' => 'Produk Kedua',
            'keterangan' => 'Ini produk kedua ya ges ya',
            'harga' => 123000,
            'jumlah' => 12
        ]);
    }
}
