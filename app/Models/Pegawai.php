<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawai";

    public function user ()
    {
        return $this -> belongsTo(User::class,"user_id");
    }
    public function divisi ()
    {
        return $this -> hasOne(Divisi::class,"divisi_id");
    }
    public function dokumen ()
    {
        return $this -> hasMany(Dokumen::class,"dokumen_id");
    }
}