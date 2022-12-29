@extends("blank")

@section("konten")

   Nama: <td>{{ $pegawai->nama }} </td><br>
   Alamat:<td> {{ $pegawai->alamat }}</td><br>
  No Telepon:<td> {{ $pegawai->no_telepon }}</td> <br>
  Jenis Kelamin: <td> {{ $pegawai->jenis_kelamin }}</td><br>
   Jabatan: <td>{{ $pegawai->jabatan }} </td><br>
    
@endsection