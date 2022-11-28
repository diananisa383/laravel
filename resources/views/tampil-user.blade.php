@extends("blank")


@section("konten")

<table class="table">

<a href="{{ route("user_input") }}" >Add data</a>
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Level</th>
            <th scope="col">Password</th>
            <th scope="col">Creat at</th>
            <th scope="col">Updated</th>
        

        </tr>
    </thead>
    <tbody>
        @foreach($data_user as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->level}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>
                

                <a href="{{route("user_edit",["id"=> $user->id])}}" class="btn btn-primary">edit</a>
                {{-- <form action="{{route("user_edit",["id"=> $user->id])}}"method="post">
                    @csrf

                    @method("get")
                    <button type="submit">Edit</button>
                
                </form --}}
                <a href="{{route("user_show",["id"=> $user->id])}}" class="btn btn-info">show</a>
                <form action="{{route("user_hapus",["id"=> $user->id])}}"method="post">
                    @csrf

                    @method("delete")
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
                {{-- <form action="{{route("user_show",["id"=> $user->id])}}"method="post">
                    @csrf

                    @method("get")
                    <button type="submit">show</button>
                </form> --}}

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection