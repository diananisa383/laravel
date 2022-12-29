@extends("blank")

@section("konten")

  Nama Pegawai:  <h1>{{ $divisi->nama_pegawai}}</h1>
   Divisi: {{ $divisi->divisi }} <br>
    Gaji:{{ $divisi->gaji}} <br>
  Lama Bekerja:  {{ $divisi->lama_bekerja}} <br>
    
@endsection