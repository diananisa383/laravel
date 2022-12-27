@extends("blank")

@section('konten')

<h3>Input Data</h3>
  {{-- @foreach($data_user as $user) --}}

      @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
              @endif
      @if ($errors ->any () )
        <div>class= "alert alert-danger">
          <ul>
            @foreach ($errors -> all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

    <form method="post" action="{{route("simpan_dokumen")}}"enctype="multipart/form-data">
      @csrf
      @method("post")
      <input type="hidden" name="id" value="">

      <div class="form-group">
        <label> Nama Dokumen </label>
        <input type="text" name="nama" value="" class="form-control" placeholder="nama" required="">
      </div>

      <div class="form-group">
        <bel>Jenis Dokumen</bel>
        <input type="text" name="jenis" value="" class="form-control" placeholder="jenis" required="">
      </div>

      <div>
        <p>Upload</p>
        <input type="file" name="file" class="form-control">
      </div>

      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan </button>
      </div>
    </form>
				
  {{-- @endforeach --}}
@endsection

{{-- @extends("blank")

@section("konten")

    <form action="{{ route("simpan_dokumen") }}" method="post">
        @csrf

        Nama Dokumen : <input type="text" name="nama"> <br>
        Jenis Dokumen:<input type="text" name="jenis"> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection --}}

