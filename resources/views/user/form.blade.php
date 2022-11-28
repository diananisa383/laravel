@extends("blank")

@section('konten')

<h3>Input Data</h3>
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

    <form method="post" action="{{route("user_simpan")}}">
      @csrf
      @method("post")
      <input type="hidden" name="id" value="">

      <div class="form-group">
        <label>Name </label>
        <input type="text" name="name" value="" class="form-control" placeholder="Name" required="">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="" class="form-control" placeholder="Email" required="">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" value="" class="form-control" placeholder="Password" required="">
      </div>

      <div class="form-group">
        <label>Level</label>
        <textarea name="level" rows="3" class="form-control" placeholder="level" required=""></textarea>
      </div>
      
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan </button>
      </div>
    </form>
  {{-- @endforeach --}}
@endsection