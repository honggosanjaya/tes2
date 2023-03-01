<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function dosmat()
    {
        return $this->hasMany(Matkul::class,'id_dosen','id');
    }
}
