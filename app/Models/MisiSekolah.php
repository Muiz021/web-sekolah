<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MisiSekolah extends Model
{
    use HasFactory;

    protected $table = 'misi_sekolah';
    protected $guarded = ['id'];
}
