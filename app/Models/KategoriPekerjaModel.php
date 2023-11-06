<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriPekerjaModel extends Model
{
    use HasFactory;
    protected $table = 'kategori_pekerja';
    use SoftDeletes;    
    protected $dates = ['deleted_at']; 
}
