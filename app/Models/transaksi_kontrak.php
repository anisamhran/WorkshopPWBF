<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_kontrak extends Model
{
    

    protected $fillable = [     
        'kebutuhan',
        'tgl_mulai_kontrak',
        'tgl_akhir_kontrak',
        'users_id',
        'pekerja_id',
        'status',
    ];
    
    public function pembayaran()
    {
        return $this->hasOne(pembayaran::class);
    }
    public function users()
    {
        return $this->hasMany(User::class, 'users_id');
    }

   
    protected $table = 'transaksi_kontrak';

    use HasFactory;
}
