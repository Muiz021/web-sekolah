<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $table = 'ppdb_siswa';
    protected $guarded = ['id'];

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->antrian = self::max('antrian') + 1;
        });
    }

}
