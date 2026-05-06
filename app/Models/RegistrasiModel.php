<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrasiModel extends Model
{
    protected $table = 'registrasi'; 

    protected $fillable = ['nis', 'username', 'kelas', 'password'];
}
