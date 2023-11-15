<?php

namespace Database\Seeders;

use App\Models\KategoriPekerjaModel;
use Illuminate\Database\Seeder;

class KategoriPekerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriPekerjaModel::create([
            'id' => 1,
            'nama_kategori' => 'Babysitter',
        ]);

        KategoriPekerjaModel::create([
            'id' => 2,
            'nama_kategori' => 'ART',
        ]);
    }
}