@extends("blank")

@section("konten")

    <form action="{{ route("update_kategori", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Kode Dokumen : <input type="text" name="kode"> <br>
        Kategori Dokumen:<input type="text" name="kategori"> <br>
        uraian : <textarea name="uraian" id="" cols="30" rows="10"></textarea> <br>
        
        <button type="submit">Simpan</button>
    </form>


@endsection