<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kandidat extends Model
{
    protected $fillable = [
        'id',
        'nomor_urut',
        'nama',
        'visi',
        'isivisi',
        'misi',
        'isimisi',
        'foto1',
        'foto2',
    ];
}
