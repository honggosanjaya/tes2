<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function matdos()
    {
        return $this->belongsTo(Dosen::class,'id_dosen');
    }
    public function matmah()
    {
        return $this->belongsTo(Mahasiswa::class,'id_mahasiswa');
    }
}
