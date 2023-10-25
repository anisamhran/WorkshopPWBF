<?php

namespace Database\Seeders;

use App\Models\KotaModel;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KotaModel::create([
            'id' => 1,
            'nama_kota' => 'Solo',
            'provinsi_id' => 2,
        ]);

        KotaModel::create([
            'id' => 2,
            'nama_kota' => 'Demak',
            'provinsi_id' => 2,
        ]);

        KotaModel::create([
            'id' => 3,
            'nama_kota' => 'Surabaya',
            'provinsi_id' => 1,
        ]);

        KotaModel::create([
            'id' => 4,
            'nama_kota' => 'Malang',
            'provinsi_id' => 1,
        ]);

        KotaModel::create([
            'id' => 5,
            'nama_kota' => 'Bandung',
            'provinsi_id' => 3,
        ]);

        KotaModel::create([
            'id' => 6,
            'nama_kota' => 'Bogor',
            'provinsi_id' => 3,
        ]);
    }
}
