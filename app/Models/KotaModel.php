<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KotaModel extends Model
{
    use HasFactory;

    protected $table = 'kota';

    // use SoftDeletes;    
    // protected $dates = ['deleted_at']; 

    public function provinsi(){
        return $this->belongsTo(ProvinsiModel::class,'provinsi_id', 'id' );
    }

    public function pekerja(){
        return $this->hasMany(PekerjaModel::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}
