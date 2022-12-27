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

    <form method="post" action="{{route("simpan_divisi")}}">
      @csrf
      @method("post")
      <input type="hidden" name="id" value="">

      <div class="form-group">
        <label>Nama Pegawai </label>
        <input type="text" name="nama" value="" class="form-control" placeholder="nama" required="">
      </div>

      <div class="form-group">
        <label>Jabatan</label>
        <input type="text" name="jabatan" value="" class="form-control" placeholder="jabatan" required="">
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
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan </button>
      </div>
    </form>
  {{-- @endforeach --}}
@endsection

{{-- @extends("blank")

@section("konten")

    <form action="{{ route("simpan_divisi") }}" method="post">
        @csrf

        Nama Pegawai : <input type="text" name="nama"> <br>
        Jabatan:<input type="text" name="jabatan"> <br>
        Gaji:<input type="text" name="gaji"> <br>
        Lama Bekerja:<input type="text" name="lama_bekerja"> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection --}}