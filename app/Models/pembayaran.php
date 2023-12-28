<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{

    protected $fillable = [
        'transaksi_kontrak_id',
        'tgl_pembayaran',
        'status',
        'lunas',
        // 'nomor_hp',
        // 'email',
        // 'kebutuhan',
        // 'tgl_mulai_kontrak',
        // 'tgl_akhir_kontrak',
        // 'foto_ktp',
        // 'users_id',
        // 'pekerja_id',
    ];
    
    protected $table = 'pembayaran';

    public function kontrak(){
        return $this->hasOne(transaksi_kontrak::class);
    }

    public function dokumen(){
        return $this->hasOne(documentModel::class);
    }

    use HasFactory;

}
