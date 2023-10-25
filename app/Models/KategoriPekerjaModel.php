<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPekerjaModel extends Model
{
    use HasFactory;

    public function pekerja(){
        return $this->hasMany(PekerjaModel::class);
    }
}
