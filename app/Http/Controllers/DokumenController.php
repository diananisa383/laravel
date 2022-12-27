<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class DokumenController extends Controller
{
    public function buat()
    {
        return view("dokumen.form-input");
    }

    public function simpan(Request $request)
    {
        $dokumen = new Dokumen ();
        $dokumen->nama = $request->get("nama");
        $dokumen->jenis = $request->get("jenis");
        $dokumen->file = $request->get("file");

           $dokumen->save();
        return redirect(route("tampil_dokumen", ['id' => $dokumen->id])->with('success','Data Imported Successfully.'));
    }

    public function tampil($id)
    {
        $dokumen = Dokumen::find($id);

        return view("dokumen.tampil")->with("dokumen", $dokumen);
    }

    public function semua()
    {
        $data = Dokumen :: all();
        return view("dokumen.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("dokumen.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $dokumen = Dokumen::find($id);
        $dokumen->nama = $request->get("nama");
        $dokumen->jenis = $request->get("jenis");
        $dokumen->file = $request->get("file");
        $filename=time().'.'.$dokumen->getClientOriginalExtension();
       
                    $request->file->move('assets',$filename);
       
                    $dokumen->file=$filename;

        $dokumen->save();
        
        return redirect(route("tampil_dokumen", ['id' => $dokumen->id]));
    }

    public function hapus($id)
    {
        Dokumen::destroy($id);
        return redirect(route('semua_dokumen'));
    }
    // 
// public function uploadpage()
// {
    
//     return view('product');

// }

   public function download(Request $request,$file)
{

    
return response()->download(public_path('assets/'.$file));
}



}
