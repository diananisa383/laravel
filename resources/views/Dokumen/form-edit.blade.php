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

  <form action="{{url('update_dokumen')}}" method="post" enctype="multipart/form-data">

		@csrf

    <div class="form-group">
      <label> Nama Dokumen </label>
      <input type="text" name="nama" value="" class="form-control" placeholder="nama" required="">
    </div>

    <div class="form-group">
      <label>Jenis Dokumen</label>
      <input type="text" name="jenis" value="" class="form-control" placeholder="jenis" required="">
    </div>

    <div class="form-group text-right">
      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update </button>
    </div>
  </form>


    {{-- <form method="post" action="{{route("update_dokumen", ['id' => $id])}}">
      @csrf
      @method("post")
      <input type="hidden" name="id" value="">

      <div class="form-group">
        <label> Nama Dokumen </label>
        <input type="text" name="nama" value="" class="form-control" placeholder="nama" required="">
      </div>

      <div class="form-group">
        <label>Jenis Dokumen</label>
        <input type="text" name="jenis" value="" class="form-control" placeholder="jenis" required="">
      </div>

      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update </button>
      </div>
    </form> --}}
  {{-- @endforeach --}}
@endsection

{{-- @extends("blank")

@section("konten")

    <form action="{{ route("update_dokumen", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama Dokumen : <input type="text" name="nama"> <br>
        Jenis Dokumen:<input type="text" name="jenis"> <br>
        
        <button type="submit">Simpan</button>
    </form>


@endsection --}}