@extends("blank")

@section("konten")

    <h1>{{ $kategori->kode}}</h1>
    {{ $kategori->kategori }} 
    {{ $kategori->uraian }} 
    
@endsection