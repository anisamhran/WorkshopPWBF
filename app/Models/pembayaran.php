<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{

    public function kontrak(){
        return $this->hasOne(transaksi_kontrak::class);
    }

    public function dokumen(){
        return $this->hasOne(documentModel::class);
    }

    use HasFactory;

}
