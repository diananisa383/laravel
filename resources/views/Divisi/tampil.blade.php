@extends("blank")

@section("konten")

    <h1>{{ $divisi->nama}}</h1>
    {{ $divisi->jabatan }} 
    {{ $divisi->gaji}}
    {{ $divisi->lama_bekerja}}
    
@endsection