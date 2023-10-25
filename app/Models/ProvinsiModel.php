<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProvinsiModel extends Model
{
    use HasFactory;

    protected $table = 'provinsi';
    use SoftDeletes;    
    protected $dates = ['deleted_at']; 

    public function kota(){
        return $this->hasMany(KotaModel::class, 'id', 'provinsi_id');
    }
}
