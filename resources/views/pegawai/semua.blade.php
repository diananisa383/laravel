@extends("blank")

@section("konten")

    <h1>Semua Data Pegawai</h1>
   <a href="{{route('buat_pegawai')}}"><button type="button" class="btn btn-dark">add data </button> </a>
   <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jabatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data as $pegawai)
          <tr>
            <th scope="row">{{$pegawai->id}}</th>
            <td>{{ $pegawai->nama }}</td>
            <td>{{ $pegawai->alamat }}</td>
            <td>{{ $pegawai->no_telepon }}</td>
            <td>{{ $pegawai->jenis_kelamin }}</td>
            <td>{{ $pegawai->jabatan }}</td>
            <td>
                <a href="{{ route('ubah_pegawai', ['id' => $pegawai->id]) }}" class="btn btn-primary">Edit</button></a>
                <a href="{{ route('tampil_pegawai', ['id' => $pegawai->id]) }}" class="btn btn-info">Show</button></a>
                <form action="{{ route('hapus_pegawai', ['id' => $pegawai->id]) }}" method="post">
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