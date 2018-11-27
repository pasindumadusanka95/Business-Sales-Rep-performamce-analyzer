<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sales Rep Performance Analyzer
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{URL::to('/')}}/assets-dash/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{URL::to('/')}}/assets-dash/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{URL::to('/')}}/assets-dash/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          Sales Rep Analyzer
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class = "nav-item {{(Helper::current_page("admin")? 'active ': '')}}">
            <a class="nav-link" href="{{url('/admin')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          {{--<li class = "nav-item {{(Helper::current_page("admin/user")? 'active ': '')}}">
            <a class="nav-link" href="{{url('/admin/user')}}">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>--}}
          <li class = "nav-item {{(Helper::current_page("admin/table")? 'active ': '')}}">
            <a class="nav-link" href="{{url('/admin/table')}}">
              <i class="material-icons">content_paste</i>
              <p>Detail Tables</p>
            </a>
          </li>
          <li class = "nav-item {{(Helper::current_page("admin/registration")? 'active ': '')}}">
            <a class="nav-link" href="{{url('/admin/registration')}}">
              <i class="material-icons">library_books</i>
              <p>Registration</p>
            </a>
          </li>
            <li class = "nav-item {{(Helper::current_page("admin/manageusers")? 'active ': '')}}">
                <a class="nav-link" href="{{url('/admin/manageusers')}}">
                    <i class="material-icons">peoples</i>
                    <p>Update Staff</p>
                </a>
            </li>
            <li class = "nav-item {{(Helper::current_page("admin/deleteusers")? 'active ': '')}}">
                <a class="nav-link" href="{{url('/admin/deleteusers')}}">
                    <i class="material-icons">peoples</i>
                    <p>delete Staff</p>
                </a>
            </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">
                @yield('name') <!--Page name ex: Dashboard,Registration.. !-->
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
                      <form class="navbar-form">
                          {{--<div class="input-group no-border">
                              <input type="text" value="" class="form-control" placeholder="Search...">
                              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                  <i class="material-icons">search</i>
                                  <div class="ripple-container"></div>
                              </button>
                          </div>--}}
                      </form>
                      <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link" href="/admin">
                                  <i class="material-icons">dashboard</i>
                                  <p class="d-lg-none d-md-block">
                                      Stats
                                  </p>
                              </a>
                          </li>
                          {{--<li class="nav-item dropdown">
                              <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="material-icons">notifications</i>
                                  <span class="notification">5</span>
                                  <p class="d-lg-none d-md-block">
                                      Some Actions
                                  </p>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                  <a class="dropdown-item" href="#">Another Notification</a>
                                  <a class="dropdown-item" href="#">Another One</a>
                              </div>
              </li>--}}
              <li class="nav-item">
                <a class="nav-link" href="admin/user">
                  <i class="material-icons">person</i> Admin
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
              <li _ngcontent-c1="" class="nav-item">
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <button type="button" class="btn btn-neutral">Sign Out</button>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            </ul>
          </div>
        </div>
      </nav>
     <div class="content">
         @yield('content')
     </div>
     {{-- <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by

          </div>
        </div>
      </footer>--}}
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{URL::to('/')}}/assets-dash/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="{{URL::to('/')}}/assets-dash/js/core/popper.min.js" type="text/javascript"></script>
  <script src="{{URL::to('/')}}/assets-dash/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="{{URL::to('/')}}/assets-dash/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{URL::to('/')}}/assets-dash/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{URL::to('/')}}/assets-dash/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{URL::to('/')}}/assets-dash/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{URL::to('/')}}/assets-dash/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
