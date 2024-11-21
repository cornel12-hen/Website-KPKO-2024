<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    protected $fillable = [
        'id',
        'username',
        'token',
        'kelas',
        'name',
        'remember_token'
    ];

    public function getAuthPassword()
    {
        return $this->token;
    }
}
