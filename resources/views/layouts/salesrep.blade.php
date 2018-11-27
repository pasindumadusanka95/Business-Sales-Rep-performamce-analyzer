<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Business Analyser
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{URL::asset('assets/css/now-ui-kit.css?v=1.2.0')}}" rel="stylesheet" />
  <link href="{{URL::to('/')}}/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <style>
        .bmd-form-group-long{
            width: 653px;
            padding: 10px;
            margin-bottom: 10px;
            display: inline-block;
        }
        .bmd-form-group-short{
            padding: 10px;
            margin: 10px,10px,10px,10px;
            width: 323px;
            position: relative;
            display: inline-block;
        }
        .bmd-form-group-date{
            padding: 10px;
            margin: 10px,10px,10px,10px;
            width: 200px;
            position: relative;
            display: inline-block;
            float: right;
        }
        .row-sales{
            height: auto;
        }
        .col-sales{
            width: auto;
            padding: 10px;
        }
        .pull-right-sales{
            padding: 15px;
            margin: 20px;
            width: 100px;
            height: auto;
            float: right;
            text-align: center;
        }
            </style>
</head>

<body class="profile-page sidebar-collapse">
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
        </div>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="" rel="tooltip" title="" data-placement="bottom" target="_blank">
          SALES REP ANALYSER
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{URL::asset('assets/img/blurred-image-1.jpg')}}">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.html"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank"> </a>
          </li>
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
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
                <div class="page-header-image" data-parallax="true" style="background-image:url('');">
                </div>
                <div class="container">
                  <div class="container">
                      <img class="rounded-circle img-fluid img-raised" style="width: 200px;height: 190px;margin: 0 auto; background-color: rgba(255, 255, 255, 0.5);" src="{{URL::to('/')}}/assets/img/now-logo.png" alt="">
                  </div>
                  <h3 class="title">{{ Auth::user()->name }}</h3>
                  <p class="category">Sales Rep</p>
                  <div class="content">
                    <div class="social-description">
                      <h2>{{ $srep->sales_per_month }}</h2>
                      <p>Sales</p>
                    </div>
                    <div class="social-description">
                      <h2>{{ $srep->net_sales }}</h2>
                      <p>Revenue</p>
                    </div>
                    <div class="social-description">
                      <h2>{{ $srep->total_items }}</h2>
                      <p>Items</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row justify-content-center">
                 @yield('heading')
              </div>
              <div class="container text-center">
                
    @yield('content')
              
              </div>
    <!--footer class="footer footer-default">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer-->
  </div>
  <!--   Core JS Files   -->
  <!--<script src="{{URL::asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>!-->
  <script src="{{URL::asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{URL::asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{URL::asset('assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{URL::asset('assets/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{URL::asset('assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript')}}"></script>
  <script>
        function setView(ac, inac, id1, id2) {
  
          var act = document.getElementById(ac)
          act.classList.add("active");
          var inact = document.getElementById(inac)
          inact.classList.remove("active");
          var x = document.getElementById(id1)
          x.style.visibility = 'visible';
          var y = document.getElementById(id2)
          y.style.visibility = 'hidden';
  
        }
      </script>
      
</body>

</html>