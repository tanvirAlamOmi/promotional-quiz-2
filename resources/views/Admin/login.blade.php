<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('img\main-logo.webp')}}" rel="icon">
  <title>Login-Delicious</title>
  
  <link href="{{asset('Admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('Admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('Admin/css/ruang-admin.min.css')}}" rel="stylesheet">
  <style>
    .login-img {
    width: 15%;
    height: 100%;
    }
  </style>
</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                  <img src="{{asset('img\main-logo.webp')}}" class="login-img" alt="main-logo">
                    <h1 class="h4 text-gray-900 mb-4" style="font-weight:bold;">Login</h1>
                  </div>
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  {{-- status code start --}}
                  @if (session('status'))
                      <div class="mb-4 font-medium text-sm text-green-600">
                          {{ session('status') }}
                      </div>
                  @endif
                  {{-- status code end --}}

                  <form class="user"  method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group row pl-3">
                      <div class="custom-control custom-checkbox small col-6" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                      <div class="custom-control custom-checkbox small col-6 text-right" style="line-height: 1.5rem;">
                        <a href="{{url('/forgot-password')}}"> Forgot Password </a>
                      </div>
                    </div>
                    <div class="form-group" style="text-align: -webkit-center;">
                      <button type="submit" class="btn btn-primary btn-block" style="width: 25%;">Login</button> 
                    </div>
                    <hr> 
                  </form> 
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  
    <script src="{{asset('Admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('Admin/js/ruang-admin.min.js')}}"></script>

</body>

</html>