<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
    </style>

</head>
<body class="bg-gradient">
@if ($errors ->any () )
  <div>class= "alert alert-danger">
    <ul>
      @foreach ($errors -> all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <div class="">
                <p class=" fw-bold text-center text-dark">Register Web Arsip</p>
              </div>
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
        <input type="password" name="password" value="" class="form-control" placeholder="Password" required="">
      </div>

     
      
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan </button>
      </div>
    </form>
  </div>
</div>
</div>
<div
class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
<!-- Copyright -->
<div class="text-white mb-3 mb-md-0">
  Copyright © 2020. All rights reserved.
</div>
<!-- Copyright -->

<!-- Right -->
<div>
  <a href="#!" class="text-white me-4">
    <i class="fab fa-facebook-f"></i>
  </a>
  <a href="#!" class="text-white me-4">
    <i class="fab fa-twitter"></i>
  </a>
  <a href="#!" class="text-white me-4">
    <i class="fab fa-google"></i>
  </a>
  <a href="#!" class="text-white">
    <i class="fab fa-linkedin-in"></i>
  </a>
</div>
<!-- Right -->
</div>
</section>

<!-- Bootstrap core JavaScript-->
<script src="/sb-admin/vendor/jquery/jquery.min.js"></script>
<script src="/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/sb-admin/js/sb-admin-2.min.js"></script>

</body>

</html>