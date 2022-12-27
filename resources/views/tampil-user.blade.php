@extends("blank")


@section("konten")

<h1>Semua Data User</h1>
<a href="{{route('user_input')}}"><button type="button" class="btn btn-dark">add data </button> </a>
<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Creat at</th>
            <th scope="col">Updated</th>
             <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_user as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>
                

                <a href="{{route("user_edit",["id"=> $user->id])}}" class="btn btn-primary">edit</a>
                <a href="{{route("user_show",["id"=> $user->id])}}" class="btn btn-info">show</a>
                <form action="{{route("user_hapus",["id"=> $user->id])}}"method="post">
                    @csrf

                    @method("delete")
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection