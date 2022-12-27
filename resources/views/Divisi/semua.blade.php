@extends("blank")

@section("konten")

    <h1>Semua Data Divisi</h1>
    <a href="{{route('buat_divisi')}}"><button type="button" class="btn btn-dark">add data </button> </a>
    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">Divisi</th>
            <th scope="col">Gaji</th>
            <th scope="col">Lama Bekerja</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $divisi)
          <tr>
            <th scope="row">{{$divisi->id}}</th>
            <td>{{ $divisi->nama }}</td>
            <td>{{ $divisi->divisi }}</td>
            <td>{{ $divisi->gaji }}</td>
            <td>{{ $divisi->lama_bekerja }}</td>
            <td>
              <a href="{{ route('ubah_divisi', ['id' => $divisi->id]) }}" class="btn btn-primary">Edit</button></a>
              <a href="{{ route('tampil_divisi', ['id' => $divisi->id]) }}" class="btn btn-info">Show</button></a>
              <form action="{{ route('hapus_divisi', ['id' => $divisi->id]) }}" method="post">
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