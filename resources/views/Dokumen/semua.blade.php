@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $dokumen)
  
    Nama Dokumen : {{ $dokumen->nama }} <br>
    Jenis Dokumen:{{ $dokumen->jenis }} <br>
        <a href="{{ route('ubah_dokumen', ['id' => $dokumen->id]) }}">Ubah</a>
        <a href="{{ route('tampil_dokumen', ['id' => $dokumen->id]) }}">Tampil</a>

        <form action="{{ route('hapus_dokumen', ['id' => $dokumen->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection