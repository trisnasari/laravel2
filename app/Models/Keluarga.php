<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'nama', 'no_kk', 'alamat', 'dusun','RT','ekonomi'
    ];
}
