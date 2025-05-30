<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PekerjaModel extends Model
{
    use HasFactory;
    protected $table = 'pekerja';
    // use SoftDeletes;    
    // protected $dates = ['deleted_at']; 

    public function kategori_pekerja(){
        return $this->belongsTo(KategoriPekerjaModel::class, 'kategoripekerja_id');
    }

    public function kota(){
        return $this->belongsTo(KotaModel::class);
    }

    public function kontrak(){
        return $this->hasMany(transaksi_kontrak::class);
    }
}
