<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = "dokumen";

    public function pegawai ()
    {
        return $this -> belongsToMany(Pegawai::class,"pegawai_id");
    }
    public function kategori ()
    {
        return $this -> hasMany(Kategori::class,"kategori_id");
    }
}