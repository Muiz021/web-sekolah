<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiDanMisi extends Model
{
    use HasFactory;
    protected $table = 'visi_dan_misi';
    protected $guarded = ['id'];
}
