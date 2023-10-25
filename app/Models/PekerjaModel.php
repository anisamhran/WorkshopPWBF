<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaModel extends Model
{
    use HasFactory;

    public function kategori_pekerja(){
        return $this->belongsTo(KategoriPekerjaModel::class);
    }

    public function kota(){
        return $this->belongsTo(KotaModel::class);
    }

    public function kontrak(){
        return $this->hasMany(transaksi_kontrak::class);
    }
}
