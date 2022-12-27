@extends("blank")

@section('konten')

<h3>Edit Data</h3>
  {{-- @foreach($data_user as $user) --}}

@if ($errors ->any () )
  <div>class= "alert alert-danger">
    <ul>
      @foreach ($errors -> all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

    <form method="post" action="{{route("update_kategori", ['id' => $id])}}">
      @csrf
      @method("post")
      <input type="hidden" name="id" value="">

      <div class="form-group">
        <label> Kode Dokumen </label>
        <input type="text" name="kode" value="" class="form-control" placeholder="kode" required="">
      </div>

      <div class="form-group">
        <label>Kategori Dokumen</label>
        <input type="text" name="kategori" value="" class="form-control" placeholder="kategori" required="">
      </div>

      <div class="form-group">
        <label>Uraian Dokumen</label>
        <input type="text" name="uraian" value="" class="form-control" placeholder="uraian" required="">
      </div>
      
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update </button>
      </div>
    </form>
  {{-- @endforeach --}}
@endsection

{{-- @extends("blank")

@section("konten")

    <form action="{{ route("update_kategori", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Kode Dokumen : <input type="text" name="kode"> <br>
        Kategori Dokumen:<input type="text" name="kategori"> <br>
        uraian : <textarea name="uraian" id="" cols="30" rows="10"></textarea> <br>
        
        <button type="submit">Simpan</button>
    </form>


@endsection --}}
