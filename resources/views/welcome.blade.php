<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Laravel Dashboard</title>
  <!-- Favicon -->
  <link href="{{ asset('public/assets/img/brand/favicon.png') }}" rel="icon" type="text/css" />
 
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('public/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('public/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/css/argon.css') }}" rel="stylesheet">
  
  <!-- Argon CSS -->
 
</head>

<body class="bg-default">
  <div class="main-content">
 
    <!-- Header -->
    <div class="header bg-gradient-primary py-4 py-lg-5">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Welcome!</h1>
             
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-center text-muted mb-4">
                <small><h2>Sign in with credentials</h2></small>
              </div>
             
            </div>
            <div class="card-body">
              
               <form method="POST" action="{{ route('login') }}">

                 



                <div class="form-group mb-1">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                   <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    {{-- <input class="form-control" placeholder="Email" type="email" required=""> --}}
                  </div>
                </div>




<br>






                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>

                   <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    {{-- <input class="form-control" placeholder="Password" type="password"> --}}
                  </div>
                </div>








                <div class="custom-control custom-control-alternative custom-checkbox">

                  <input class="custom-control-input" type="checkbox" name="remember" id=" customCheckLogin" {{ old('remember') ? 'checked' : '' }}>


                  {{-- <input  type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }} --}}
                 
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>



                <div class="text-center">



                  <button type="submit" class="btn btn-primary my-4">{{ __('Login') }}</button>

                  <a href="{{ url('/redirect') }}" class="btn btn-primary">Login With Google</a>

                   @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                  {{-- <button type="button" class="btn btn-primary my-4">Sign in</button> --}}
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            

            @yield('content')
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2019 <a href="https://www.linkedin.com/in/dharam-veer-8785b1b1/?originalSubdomain=in" class="font-weight-bold ml-1" target="_blank">By DHARAM VEER</a>
          </div>
        </div>
        
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  
  
  
   <script src="{{ asset('public/assets/vendor/jquery/dist/jquery.min.js') }}" type="text/js"></script>
   <script src="{{ asset('public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="text/js"></script>
   <script src="{{ asset('public/assets/js/argon.js') }}" type="text/js"></script>
 
 
  <!-- Argon JS -->
 
</body>

</html>