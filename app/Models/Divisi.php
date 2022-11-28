<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $table = "divisi";

    public function pegawai ()
    {
        return $this -> belongToMany(Pegawai::class,"pegawai_id");
    }
    
}