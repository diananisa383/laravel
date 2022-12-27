@extends("blank")

@section("konten")

    <h1>Semua Data Dokumen</h1>
    <a href="{{route('buat_dokumen')}}"><button type="button" class="btn btn-dark">add data </button> </a>
    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Dokumen</th>
            <th scope="col">Jenis Dokumen</th>
            <th scope="col">File Dokumen</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data as $dokumen)
          <tr>
            <th scope="row">{{$dokumen->id}}</th>
            <td>{{ $dokumen->nama }}</td>
            <td>{{ $dokumen->jenis }}</td>
            <td>{{ $dokumen->file }}</td>
            <td>
              <a href="{{ route('ubah_dokumen', ['id' => $dokumen->id]) }}" class="btn btn-primary">Edit</button></a>
              <a href="{{ route('tampil_dokumen', ['id' => $dokumen->id]) }}" class="btn btn-info">Show</button></a>
              <a href="{{route('download_dokumen', ['file' => $dokumen->file])}}">Download</a>
              <form action="{{ route('hapus_dokumen', ['id' => $dokumen->id]) }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>

@endsection

{{-- <h4 class="my-5">Data</h4>
 
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
							<th>Keterangan</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($gambar as $g)
						<tr>
							<td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
							<td>{{$g->keterangan}}</td>
							<td><a class="btn btn-danger" href="/upload/hapus/{{ $g->id }}">HAPUS</a></td>
						</tr>
						@endforeach
					</tbody>
				</table> --}}