@extends("blank")

@section("konten")

    <form action="{{ route("simpan_pegawai") }}" method="post">
        @csrf

        Nama : <input type="text" name="nama"> <br>
        Alamat : <textarea name="alamat" id="" cols="30" rows="10"></textarea> <br>
        No Telepon:<input type="text" name="no_telepon"> <br>
        Jenis Kelamin :<input type="text" name="jenis_kelamin"> <br>
        Jabatan :<input type="text" name="jabatan"> <br>
        <button type="submit">Simpan</button>
    </form>


@endsection