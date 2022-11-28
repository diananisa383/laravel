@extends("blank")

@section("konten")

    <form action="{{ route("update_dokumen", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama Dokumen : <input type="text" name="nama"> <br>
        Jenis Dokumen:<input type="text" name="jenis"> <br>
        
        <button type="submit">Simpan</button>
    </form>


@endsection