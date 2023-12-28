<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',     
        'email',
        'password',
    ];

    protected $attributes = [
        'role_id' => '2'
    ];

    protected $table = 'users';


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function kota(){
        return $this->belongsTo(KotaModel::class);
    }

    public function kontrak(){
        return $this->hasMany(transaksi_kontrak::class,'users_id');
    }
    public function message(){
        return $this->hasMany(ContactModel::class);
    }

    public function role(){
        return $this->belongsTo(RoleModel::class);
    }
}
