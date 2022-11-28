<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingwebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\DivisiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/edit-user/{id}", [UserController::class,"formEdit"])->name("user_edit");
Route::put("/update-user/{id}", [UserController::class,"update"])->name("user_update");
Route::get("/tampil-semua-user",[UserController::class,"tampil"])->name("user_all");
Route::delete("/hapus-user/{id}",[UserController::class,"hapus"] )->name("user_hapus");
Route::get("/show-user/{id}",[UserController::class,"show"])->name("user_show");


Route::get("/login",[SecurityController::class,"formLogin"])->name("login");
Route::post("/proses-login",[SecurityController::class,"prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class,"logout"])->name("logout");

Route::get("pegawai/buat", [PegawaiController::class, 'buat'])->name("buat_pegawai");
    Route::post("pegawai/simpan", [PegawaiController::class, 'simpan'])->name("simpan_pegawai");
    Route::get("pegawai/tampil/{id}", [PegawaiController::class, 'tampil'])->name("tampil_pegawai");
    Route::get("pegawai/semua", [PegawaiController::class, 'semua'])->name("semua_pegawai");
    Route::get("pegawai/ubah/{id}", [PegawaiController::class, 'ubah'])->name("ubah_pegawai");
    Route::put("pegawai/update/{id}", [PegawaiController::class, 'update'])->name("update_pegawai");
    Route::delete("pegawai/hapus/{id}", [PegawaiController::class, 'hapus'])->name("hapus_pegawai");


    Route::get("kategori/buat", [KategoriController::class, 'buat'])->name("buat_kategori");
    Route::post("kategori/simpan", [KategoriController::class, 'simpan'])->name("simpan_kategori");
    Route::get("kategori/tampil/{id}", [KategoriController::class, 'tampil'])->name("tampil_kategori");
    Route::get("kategori/semua", [KategoriController::class, 'semua'])->name("semua_kategori");
    Route::get("kategori/ubah/{id}", [KategoriController::class, 'ubah'])->name("ubah_kategori");
    Route::put("kategori/update/{id}", [KategoriController::class, 'update'])->name("update_kategori");
    Route::delete("kategori/hapus/{id}", [KategoriController::class, 'hapus'])->name("hapus_kategori");

    Route::get("dokumen/buat", [DokumenController::class, 'buat'])->name("buat_dokumen");
    Route::post("dokumen/simpan", [DokumenController::class, 'simpan'])->name("simpan_dokumen");
    Route::get("dokumen/tampil/{id}", [DokumenController::class, 'tampil'])->name("tampil_dokumen");
    Route::get("dokumen/semua", [DokumenController::class, 'semua'])->name("semua_dokumen");
    Route::get("dokumen/ubah/{id}", [DokumenController::class, 'ubah'])->name("ubah_dokumen");
    Route::put("dokumen/update/{id}", [DokumenController::class, 'update'])->name("update_dokumen");
    Route::delete("dokumen/hapus/{id}", [DokumenController::class, 'hapus'])->name("hapus_dokumen");

    Route::get("divisi/buat", [DivisiController::class, 'buat'])->name("buat_divisi");
    Route::post("divisi/simpan", [DivisiController::class, 'simpan'])->name("simpan_divisi");
    Route::get("divisi/tampil/{id}", [DivisiController::class, 'tampil'])->name("tampil_divisi");
    Route::get("divisi/semua", [DivisiController::class, 'semua'])->name("semua_divisi");
    Route::get("divisi/ubah/{id}", [DivisiController::class, 'ubah'])->name("ubah_divisi");
    Route::put("divisi/update/{id}", [DivisiController::class, 'update'])->name("update_divisi");
    Route::delete("divisi/hapus/{id}", [DivisiController::class, 'hapus'])->name("hapus_divisi");
// Route::post("/user-update", [UserController::class, "update"])->name("user_update")->middleware('auth');

Route::middleware("auth")->group(function() {
    Route::get("/tampil-semua-user", [UserController::class,"tampil"])->name("user_all");
    Route::get("/input-user", [UserController::class,"formInput"])->name("user_input");
    Route::post("/simpan-user", [UserController::class,"simpan"])->name("user_simpan");
    // route atau halaman yang diproteksi
   });