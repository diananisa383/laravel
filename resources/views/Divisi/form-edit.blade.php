@extends("blank")

@section("konten")

    <form action="{{ route("update_divisi", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama Pegawai : <input type="text" name="nama"> <br>
        Jabatan:<input type="text" name="jabatan"> <br>
        Gaji:<input type="text" name="gaji"> <br>
        Lama Bekerja:<input type="text" name="lama_bekerja"> <br>
        <button type="submit">Simpan</button>
    </form>


@endsection