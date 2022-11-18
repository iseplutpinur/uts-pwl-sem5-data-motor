<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Satuan;
use App\Models\Pegawai;
use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::beginTransaction();
        Satuan::insert([
            ['id' => 1, 'nama' => 'Buah'],
            ['id' => 2, 'nama' => 'Dus'],
            ['id' => 3, 'nama' => 'Roll'],
        ]);

        Barang::insert([
            ['id' => 1, 'satuan_id' => '1', 'kode' => 'A001', 'nama' => 'Priring', 'stok' => '11'],
            ['id' => 2, 'satuan_id' => '1', 'kode' => 'A002', 'nama' => 'Sendok', 'stok' => '12'],
            ['id' => 3, 'satuan_id' => '2', 'kode' => 'A003', 'nama' => 'Mie Instan', 'stok' => '13'],
            ['id' => 4, 'satuan_id' => '2', 'kode' => 'A004', 'nama' => 'Kopi', 'stok' => '14'],
            ['id' => 5, 'satuan_id' => '3', 'kode' => 'A005', 'nama' => 'Tisu', 'stok' => '15'],
        ]);
        DB::commit();
    }
}
