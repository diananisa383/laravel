@extends("blank")

@section("konten")

    <td>{{ $pegawai->nama }} </td>
   <td> {{ $pegawai->alamat }}</td>
  <td> {{ $pegawai->no_telepon }}</td> 
   <td> {{ $pegawai->jenis_kelamin }}</td>
   <td>{{ $pegawai->jabatan }} </td>
   <td>{{$pegawai->created_at}}</td>
    <td>{{$pegawai->updated_at}}</td> 
    
@endsection