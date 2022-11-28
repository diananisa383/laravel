@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $kategori)
    Kode Dokumen :{{ $kategori->kode}} <br>
    Kategori Dokumen: {{ $kategori->kategori }} <br>
    uraian :{{ $kategori->uraian }} <br>
       
        <a href="{{ route('ubah_kategori', ['id' => $kategori->id]) }}">Ubah</a>
        <a href="{{ route('tampil_kategori', ['id' => $kategori->id]) }}">Tampil</a>

        <form action="{{ route('hapus_pegawai', ['id' => $kategori->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection