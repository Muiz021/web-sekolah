<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilKepalaSekolah extends Model
{
    use HasFactory;

    protected $table = 'profil_kepala_sekolah';
    protected $guarded = ['id'];
}
