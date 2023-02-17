<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiSekolah extends Model
{
    use HasFactory;
    protected $table = 'visi_sekolah';
    protected $guarded = ['id'];
}
