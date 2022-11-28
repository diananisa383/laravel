@extends("blank")

@section("konten")

    <form action="{{ route("simpan_dokumen") }}" method="post">
        @csrf

        Nama Dokumen : <input type="text" name="nama"> <br>
        Jenis Dokumen:<input type="text" name="jenis"> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection