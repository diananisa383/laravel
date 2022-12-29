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

    <form method="post" action="{{route("update_divisi", ['id' => $id])}}">
      @csrf
      @method("put")
      <input type="hidden" name="id" value="">

      <div class="form-group">
        <label>Nama Pegawai </label>
        <input type="text" name="nama_pegawai" value="" class="form-control" placeholder="nama_pegawai" required="">
      </div>

      <div class="form-group">
        <label>Divisi</label>
        <input type="text" name="divisi" value="" class="form-control" placeholder="divisi" required="">
      </div>

      <div class="form-group">
        <label>Gaji</label>
        <input type="text" name="gaji" value="" class="form-control" placeholder="gaji" required="">
      </div>

      <div class="form-group">
        <label>Lama Bekerja</label>
        <input type="text"name="lama bekerja" value="" class="form-control" placeholder="lama bekerja" required="">
      </div>
    
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update </button>
      </div>
    </form>
  {{-- @endforeach --}}
@endsection

{{-- @extends("blank")

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


@endsection --}}