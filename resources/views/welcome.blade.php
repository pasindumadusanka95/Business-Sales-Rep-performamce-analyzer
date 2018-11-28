<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::to('/')}}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{URL::to('/')}}/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Laravel
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

  <body class="landing-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
      <div class="container">
        <div class="dropdown button-dropdown">
          <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
            <span class="button-bar"></span>
            <span class="button-bar"></span>
            <span class="button-bar"></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-header">Dropdown header</a>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">One more separated link</a>
          </div>
        </div>
        <div class="navbar-translate">

          <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar top-bar"></span>
            <span class="navbar-toggler-bar middle-bar"></span>
            <span class="navbar-toggler-bar bottom-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{URL::to('/')}}/assets/img/blurred-image-1.jpg">
          <ul class="navbar-nav">
            @if (Auth::user()!=null)
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                @if (Auth::user()->id==1)
                <a class="dropdown-item" href="{{ route('salesRep') }}">
                  {{ __('My Profile') }}
                </a>
                @endif
                @if (Auth::user()->id==2)
                <a class="dropdown-item" href="{{ route('skprofile') }}">
                  {{ __('My Profile') }}
                </a>
                @endif
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endif

            @if (Route::has('login'))

            @auth
            <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
            @else
            <li class="nav-item active"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <!--li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li-->
            @endauth

            @endif

          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
      <div class="page-header page-header-large">
        <div class="page-header-image" data-parallax="true" style="background-image: url('{{URL::to('/')}}/assets/img/bgimg.jpg');">
        </div>
        <div class="content-center">
          <div class="container">
            <h1 class="title">Business & Sales Rep Performance Analyzer</h1>

          </div>
          <img class="rounded-circle img-fluid img-raised" style="width: 200px;height: 190px;margin: 0 auto; background-color: rgba(255, 255, 255, 0.5);"
            src="{{URL::to('/')}}/assets/img/now-logo.png" alt="">
        </div>

      </div>



      <div class="section section-about-us">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">Pulasthi Rathnayaka Distributors</h2>
              <h5 class="description">We are a stationary item distributing agency located in Kandy. We deliver all
                types of stationary to most of the bookshops in the surrounding area. Our well trained Sales
                Representatives will provide you with the best service. Our services are fast, affordable and your
                satisfaction is guaranteed! </h5>
            </div>
          </div>
          <!--div class="separator separator-primary"></div>
        <div class="section-story-overview">
          <div class="row">
            <div class="col-md-6">
              <div class="image-container image-left" style="background-image: url('{{URL::to('/')}}/assets/img/login.jpg')">
                <!-- First image on the left side >
                <p class="blockquote blockquote-primary">"Over the span of the satellite record, Arctic sea ice has been declining significantly, while sea ice in the Antarctichas increased very slightly"
                  <br>
                  <br>
                  <small>-NOAA</small>
                </p>
              </div>
              <!-- Second image on the left side of the article >
              <div class="image-container" style="background-image: url('{{URL::to('/')}}/assets/img/bg3.jpg')"></div>
            </div>
            <div class="col-md-5">
              <!-- First image on the right side, above the article >
              <div class="image-container image-right" style="background-image: url('{{URL::to('/')}}/assets/img/bg1.jpg')"></div>
              <h3>So what does the new record for the lowest level of winter ice actually mean</h3>
              <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
              </p>
              <p>
                For a start, it does not automatically follow that a record amount of ice will melt this summer. More important for determining the size of the annual thaw is the state of the weather as the midnight sun approaches and temperatures rise. But over the more than 30 years of satellite records, scientists have observed a clear pattern of decline, decade-by-decade.
              </p>
              <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
              </p>
            </div>
          </div>
        </div-->
        </div>
      </div>


      <div class="section section-team text-center">
        <div class="container">
          <h2 class="title">Here is our team</h2>
          <div class="team">
            <div class="row">
              <div class="col-md-2" style="margin: 0 auto">
                <div class="team-player">
                  <img src="{{URL::to('/')}}/assets/img/sas.jpeg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                  <h4 class="title">Sasanka</h4>
                  <p class="category text-primary">Owner</p>
                </div>
              </div>
              <div class="col-md-2" style="margin: 0 auto">
                <div class="team-player">
                  <img src="{{URL::to('/')}}/assets/img/ryan.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                  <h4 class="title">Pasindu</h4>
                  <p class="category text-primary">Admin</p>
                </div>
              </div>
              <div class="col-md-2" style="margin: 0 auto">
                <div class="team-player">
                  <img src="{{URL::to('/')}}/assets/img/eva.jpeg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                  <h4 class="title">Aathmika</h4>
                  <p class="category text-primary">Stock Keeper</p>
                </div>
              </div>
              <div class="col-md-2" style="margin: 0 auto">
                  <div class="team-player">
                    <img src="{{URL::to('/')}}/assets/img/me2.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                    <h4 class="title">Chamodya</h4>
                    <p class="category text-primary">Sales Rep</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-contact-us text-center">
        <div class="container">
          <h2 class="title">Want to get in touch?</h2>
          <p class="description">Your feedback is very important to us.</p>
          <div class="row">
            <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">

            <form method="POST" action="{{route('feedback')}}">
                @csrf
              <div class="input-group input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons users_circle-08"></i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="Your Name..." required>
              </div>
              <div class="input-group input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons ui-1_email-85"></i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="Your Email..." required>
              </div>
              <div class="textarea-container">
                <textarea class="form-control" name="message" rows="4" cols="80" placeholder="Type a message..." required></textarea>
              </div>
              <div class="send-button">
                <button type="submit" class="btn btn-primary btn-round btn-block btn-lg">Send Message</button>
              </div>
            </form>

            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-default">
        <div class="container">
          <nav>
            <ul>
              <li>
                Pulasthi Rathnayaka Distributors
                <br>
                No: 68/B, Daskara, Muruthagahamula, Gampola.
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>
          </div>
        </div>
        <!--div class="text-center">
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                <i class="fab fa-facebook-square"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                <i class="fab fa-google-plus"></i>
            </a>
        </div-->
      </footer>
    </div>
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