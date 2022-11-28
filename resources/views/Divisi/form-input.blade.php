@extends("blank")

@section("konten")

    <form action="{{ route("simpan_divisi") }}" method="post">
        @csrf

        Nama Pegawai : <input type="text" name="nama"> <br>
        Jabatan:<input type="text" name="jabatan"> <br>
        Gaji:<input type="text" name="gaji"> <br>
        Lama Bekerja:<input type="text" name="lama_bekerja"> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection