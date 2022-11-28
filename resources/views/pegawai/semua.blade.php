@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $pegawai)
        Nama : {{ $pegawai->nama }} <br>
        Alamat: {{ $pegawai->alamat }} <br>
        No Telepon:{{ $pegawai->no_telepon }} <br>
        Jenis Kelamin :{{ $pegawai->jenis_kelamin }} <br>
        Jabatan :{{ $pegawai->jabatan }} <br>
        <a href="{{ route('ubah_pegawai', ['id' => $pegawai->id]) }}">Ubah</a>
        <a href="{{ route('tampil_pegawai', ['id' => $pegawai->id]) }}">Tampil</a>

        <form action="{{ route('hapus_pegawai', ['id' => $pegawai->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection