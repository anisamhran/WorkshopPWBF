<?php

namespace Database\Seeders;

use App\Models\ProvinsiModel;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProvinsiModel::create([
            'id' => 1,
            'nama_provinsi' => 'Jawa Timur',
        ]);

        ProvinsiModel::create([
            'id' => 2,
            'nama_provinsi' => 'Jawa Tengah',
        ]);

        ProvinsiModel::create([
            'id' => 3,
            'nama_provinsi' => 'Jawa Barat',
        ]);
    }
}
