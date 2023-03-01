<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function mahmat()
    {
        return $this->hasMany(Matkul::class,'id_mahasiswa','id');
    }
}
