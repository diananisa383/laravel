@extends("blank")

@section("konten")

    <h1>{{ $kategori->kode}}</h1><br>
   Kategori: {{ $kategori->kategori }} <br>
    Uraian : {{ $kategori->uraian }} <br>
    
@endsection