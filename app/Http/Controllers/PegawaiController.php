<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function buat()
    {
        return view("pegawai.form-input");
    }

    public function simpan(Request $request)
    {
        $pegawai = new Pegawai();
        $pegawai->nama = $request->get("nama");
        $pegawai->alamat = $request->get("alamat");
        $pegawai->no_telepon = $request->get("no_telepon");
        $pegawai->jenis_kelamin = $request->get("jenis_kelamin");
        $pegawai->jabatan = $request->get("jabatan");
        $pegawai->save();

        return redirect(route("tampil_pegawai", ['id' => $pegawai->id]));
    }

    public function tampil($id)
    {
        $pegawai = Pegawai::find($id);

        return view("pegawai.tampil")->with("pegawai", $pegawai);
    }

    public function semua()
    {
        $data = Pegawai::all();
        return view("pegawai.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("pegawai.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->get("nama");
        $pegawai->alamat = $request->get("alamat");
        $pegawai->no_telepon = $request->get("no_telepon");
        $pegawai->jenis_kelamin = $request->get("jenis_kelamin");
        $pegawai->jabatan = $request->get("jabatan");
        $pegawai->save();
        
        return redirect(route("tampil_pegawai", ['id' => $pegawai->id]));
    }

    public function hapus($id)
    {
        Pegawai::destroy($id);
        return redirect(route('semua_pegawai'));
    }
}