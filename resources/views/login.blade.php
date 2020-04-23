<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login - Gullas College of Medicine</title>
  <link rel="icon" href="img/favicon.png" type="image/png">
  
  <link rel="stylesheet" href="{{ asset('vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/themify-icons/themify-icons.css') }}">

</head>
<body>

  <!--================ Banner Section start =================-->
  <section class="hero-banner text-center">
    <div class="container">
      <br>
      <h3><b>Administrator Login</b></h3>
      <small><i>Only authorized personnel are allowed to access this page.</i></small>
      <hr>
      <form action="{{ route('login') }}" method="POST">
      @csrf

        @if(!empty($error))
        <div class="alert alert-danger" role="alert">
          {{$error}}
        </div>
        @endif
        <input type="password" class="form-control" name="password" placeholder="Enter secret key..." style="width:50%; margin-left:25%" required>
        <hr>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </section>
  <!--================ Banner Section end =================-->

</body>
</html>