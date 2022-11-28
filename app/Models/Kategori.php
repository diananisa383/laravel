<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";

    public function dokumen ()
    {
        return $this -> belongsToMany(Dokumen::class,"dokumen_id");
    }
}