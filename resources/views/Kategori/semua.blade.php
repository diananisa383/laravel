@extends("blank")

@section("konten")

    <h1>Semua Data Kategori</h1>
    <a href="{{route('buat_kategori')}}"><button type="button" class="btn btn-dark">add data </button> </a>
    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Kode Dokumen</th>
            <th scope="col">Kategori Dokumen</th>
            <th scope="col">Uraian Dokumen</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data as $kategori)
          <tr>
            <th scope="row">{{$kategori->id}}</th>
            <td>{{ $kategori->kode }}</td>
            <td>{{ $kategori->kategori }}</td>
            <td>{{ $kategori->uraian }}</td>
     
            <td>
              <a href="{{ route('ubah_kategori', ['id' => $kategori->id]) }}" class="btn btn-primary">Edit</button></a>
              <a href="{{ route('tampil_kategori', ['id' => $kategori->id]) }}" class="btn btn-info">Show</button></a>
              <form action="{{ route('hapus_kategori', ['id' => $kategori->id]) }}" method="post">
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