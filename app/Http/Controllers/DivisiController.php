<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;

class DivisiController extends Controller
{
    public function buat()
    {
        return view("divisi.form-input");
    }

    public function simpan(Request $request)
    {
        $divisi = new Divisi ();
        $divisi->nama = $request->get("nama");
        $divisi->jabatan = $request->get("jabatan");
        $divisi->gaji = $request->get("gaji");
        $divisi->lama_bekerja = $request->get("lama_bekerja");

        $divisi->save();

        return redirect(route("tampil_divisi", ['id' => $divisi->id]));
    }

    public function tampil($id)
    {
        $divisi = Divisi::find($id);

        return view("divisi.tampil")->with("divisi", $divisi);
    }

    public function semua()
    {
        $data = Divisi::all();
        return view("divisi.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("divisi.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $divisi = Divisi::find($id);
        $divisi->nama = $request->get("nama");
        $divisi->jabatan = $request->get("jabatan");
        $divisi->gaji = $request->get("gaji");
        $divisi->lama_bekerja = $request->get("lama_bekerja");

        $divisi->save();
        
        return redirect(route("tampil_divisi", ['id' => $divisi->id]));
    }

    public function hapus($id)
    {
        Divisi::destroy($id);
        return redirect(route('semua_divisi'));
    }
}