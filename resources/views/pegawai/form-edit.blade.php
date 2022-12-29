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

    <form method="post" action="{{route("update_pegawai", ['id' => $id])}}">
      @csrf
      @method("put")
      <input type="hidden" name="id" value="">

      <div class="form-group">
        <label>Nama </label>
        <input type="text" name="nama" value="" class="form-control" placeholder="nama" required="">
      </div>

      <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" value="" class="form-control" placeholder="alamat" required="">
      </div>

      <div class="form-group">
        <label>No Telepon</label>
        <input type="text" name="no_telepon" value="" class="form-control" placeholder="no_telepon" required="">
      </div>

      <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="text"name="jenis_kelamin" value="" class="form-control" placeholder="jenis_kelamin" required="">
      </div>
      <div class="form-group">
        <label>Jabatan</label>
        <input type="text"name="jabatan" value="" class="form-control" placeholder="jabatan" required="">
      </div>
      
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update </button>
      </div>
    </form>
  {{-- @endforeach --}}
@endsection