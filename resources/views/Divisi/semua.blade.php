@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $divisi)
  
    Nama Pegawai : {{ $divisi->nama }} <br>
    Jabatan:{{ $divisi->jabatan }} <br>
    Gaji:{{ $divisi->gaji }} <br>
    Lama Bekerja:{{ $divisi->lama_bekerja }} <br>

        <a href="{{ route('ubah_divisi', ['id' => $divisi->id]) }}">Ubah</a>
        <a href="{{ route('tampil_divisi', ['id' => $divisi->id]) }}">Tampil</a>

        <form action="{{ route('hapus_divisi', ['id' => $divisi->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection