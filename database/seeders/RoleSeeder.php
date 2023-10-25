<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        RoleModel::truncate();

        Schema::enableForeignKeyConstraints();

        $data = [
            'admin', 'customer', 'manajer'
        ];

        foreach($data as $value){
            RoleModel::insert([
                'name' =>$value
            ]);
        }
       
    }
}
