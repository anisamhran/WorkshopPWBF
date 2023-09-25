<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documentModel extends Model
{
   public function dokumenpembayaran(){
        return $this->belongsTo(pembayaran::class);  
   }
}
