@extends("blank")

@section("konten")

    <h1>{{ $dokumen->nama}}</h1>
    {{ $dokumen->jenis }} <br>
    {{ $dokumen->file }} <br>
    
@endsection