<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listw extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode', 'nama', 'urut',
    ];
}
