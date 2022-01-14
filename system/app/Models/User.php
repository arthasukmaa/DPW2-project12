<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserDetails;
use App\Models\Produk;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "user";

    function detail(){
         return $this->hasOne(UserDetails::class, 'id_user') ;
    }

    function produk(){
        return $this->hasMany(Produk::class, 'id_user');
    }

    function getJenisKelaminStringAttribute(){
        return ($this->jenis_kelamin == 1) ? "Laki - Laki" : "Perempuan";
    }

    function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    function setUsernameAttribute ($value){
        $this->attributes['username'] = strtolower($value);
    }
}
