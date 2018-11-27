<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{URL::to('/')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{URL::to('/')}}/assets/img/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{URL::to('/')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{URL::to('/')}}/assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{URL::to('/')}}/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="dropdown button-dropdown">


      </div>
      <div class="navbar-translate">
         <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Home') }}
         </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{URL::to('/')}}/assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          
         <!-- <li class="nav-item">
            <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Register</a>
          </li>!-->
		  
		   @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                           <!-- <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>!-->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
         
         
       
        </ul>
      </div>
    </div>
  </nav>
  <main>
      @yield('log')
  </main>
   <!--   Core JS Files   -->
   <script src="{{URL::to('/')}}/assets/js/core/jquery.min.js" type="text/javascript"></script>
   <script src="{{URL::to('/')}}/assets/js/core/popper.min.js" type="text/javascript"></script>
   <script src="{{URL::to('/')}}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
   <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
   <script src="{{URL::to('/')}}/assets/js/plugins/bootstrap-switch.js"></script>
   <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
   <script src="{{URL::to('/')}}/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
   <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
   <script src="{{URL::to('/')}}/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
   <!--  Google Maps Plugin    -->
   <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
   <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
   <script src="{{URL::to('/')}}/assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
 </body>
 
 </html>
