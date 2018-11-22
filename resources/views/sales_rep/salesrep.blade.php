<head>
  <meta charset="utf-8">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>SalesRep View</title>
  <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,shrink-to-fit=no" name="viewport">
  <base href="https://demos.creative-tim.com/now-ui-kit-angular/">

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200|Open+Sans+Condensed:700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <link href="styles.7df5ac5d94657a0eb375.bundle.css" rel="stylesheet">

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


<body class="sidebar-collapse profile-page">
  <app-root _nghost-c0="" ng-version="5.2.2">
    <app-navbar _ngcontent-c0="" _nghost-c1="">
      <nav _ngcontent-c1="" class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent" color-on-scroll="500">
        <div _ngcontent-c1="" class="container">
          <div _ngcontent-c1="" class="collapse navbar-collapse" data-color="orange" data-nav-image="assets/img/blurred-image-1.jpg">
            <ul _ngcontent-c1="" class="navbar-nav ml-auto">
              <li _ngcontent-c1="" class="nav-item">
                <a _ngcontent-c1="" class="nav-link" href="https://www.creative-tim.com/product/now-ui-kit-angular"
                  target="_blank">
                  <p _ngcontent-c1="">My Performance</p>
                </a>
              </li>
              <li _ngcontent-c1="" class="nav-item">
                <a _ngcontent-c1="" class="nav-link" href="/now-ui-kit-angular/documentation">
                  <p _ngcontent-c1="">My Sales</p>
                </a>
              </li>
              <li _ngcontent-c1="" class="nav-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
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
    </app-navbar>
    <app-profile _nghost-c2="">
      <div _ngcontent-c2="" class="wrapper">
        <div _ngcontent-c2="" class="page-header page-header-small" filter-color="orange">
          <div _ngcontent-c2="" class="page-header-image rellax-header" data-rellax-speed="-8" style="background-image: url(&quot;assets/img/bg5.jpg&quot;); transform: translate3d(0px, 0px, 0px);">
          </div>
          <div _ngcontent-c2="" class="container">
            <div _ngcontent-c2="" class="content-center">
              <div _ngcontent-c2="" class="photo-container">
                <img _ngcontent-c2="" alt="" src="assets/img/ryan.jpg">
              </div>
              <h3 _ngcontent-c2="" class="title">Ryan Scheinder</h3>
              <p _ngcontent-c2="" class="category">Photographer</p>
              <div _ngcontent-c2="" class="content">
                <div _ngcontent-c2="" class="social-description">
                  <h2 _ngcontent-c2="">26</h2>
                  <p _ngcontent-c2="">Sales Done</p>
                </div>
                <div _ngcontent-c2="" class="social-description">
                  <h2 _ngcontent-c2="">26</h2>
                  <p _ngcontent-c2="">Hours Worked</p>
                </div>
                <div _ngcontent-c2="" class="social-description">
                  <h2 _ngcontent-c2="">48</h2>
                  <p _ngcontent-c2="">Distance Travelled</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-4 mr-auto ml-auto">
            <div class="nav-tabs-navigation">

              <ul class="nav nav-tabs">
                <li class="nav-item tab-panes">
                  <a class="nav-link" id="nav1" onclick="setView('nav1','nav2','perform','edit_profile')">My
                    Performance</a>
                </li>
                <li class="nav-item tab-panes" onclick="setView('nav2','nav1','edit_profile','perform')">
                  <a class="nav-link" id="nav2">Add Sale</a>
                </li>

            </div>
          </div>

          <!-- Tab panes -->
          <div class="container text-center">
            <div class="tab-paness" id="perform">
              <p>Here is information about home.</p>
            </div>

            <div class="tab-panes" id="edit_profile">
              <div class="row">
                <div class="col-md-8  mr-auto ml-auto">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">New Sale</h4>
                      <p class="card-category">Add Sale Details</p>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('addSale') }}">
                        <div class="row-sales">
                            <div class="form-group bmd-form-group-date">
                                <label class="bmd-label-floating">Date of Sale</label>
                          <input class="date form-control {{ $errors->has('dateOfSale') ? ' is-invalid' : '' }}" type="text" id="dateOfSale" name="dateOfSale" placeholder="Eg: MM-DD-YYYY" required>
                            </div>
                   

                          <script type="text/javascript">

                            $('.date').datepicker({

                              format: 'mm-dd-yyyy',
                              orientation: "left",
                              todayHighlight:true

                            });

                          </script>
                        </div>

                        <div class="row-sales">

                          <div class="form-group bmd-form-group-long">
                            <label class="bmd-label-floating">Shop Name</label>
                            <input type="text" class="form-control {{ $errors->has('shop_name') ? ' is-invalid' : '' }}" id="shop_name" name="shop_name" placeholder="Eg: Sandasi Bookshop" required>
                          </div>


                          <div class="form-group bmd-form-group-long">
                            <label class="bmd-label-floating">Shop address</label>
                            <input type="text" class="form-control {{ $errors->has('shop_address') ? ' is-invalid' : '' }}" id="shop_address" name="shop_address" placeholder="Eg: No. 155 Galle Road, Moratuwa" required>
                          </div>

                        </div>
                        <div class="row-sales">
                          <div class="col-sales">
                            <div class="form-group bmd-form-group-short">
                              <label class="bmd-label-floating">Stock Type</label>
                              <input type="text" class="form-control {{ $errors->has('stock_type') ? ' is-invalid' : '' }}" id="stock_type" name="stock_type" placeholder="Eg: Stationary : Books" required>
                            </div>


                            <div class="form-group bmd-form-group-short">
                              <label class="bmd-label-floating">Quantity</label>
                              <input type="text" class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}" id="quantity" name="quantity" placeholder="Eg: 20pcs" required>
                            </div>
                          </div>
                        </div>
                        <div class="row-sales">
                          <div class="col-sales">
                            <div class="form-group bmd-form-group-short">
                              <label class="bmd-label-floating">Unit Price</label>
                              <input type="text" class="form-control {{ $errors->has('unit_price') ? ' is-invalid' : '' }}" id="unit_price" name="unit_price" placeholder="Eg: Rs 80" required>
                            </div>




                            <div class="form-group bmd-form-group-short">
                              <label class="bmd-label-floating">Discount</label>
                              <input type="text" class="form-control {{ $errors->has('discount') ? ' is-invalid' : '' }}" id="discount" name="discount" placeholder="Eg: Rs 2500" required>
                            </div>
                          </div>
                        </div>

                        <div class="col-sales">
                          <div class="form-group bmd-form-group-long">
                            <label class="bmd-label-floating">Total Price</label>
                            <input type="text" class="form-control {{ $errors->has('total_price') ? ' is-invalid' : '' }}" id="total_price" name="total_price" placeholder="Eg: Rs 25000" required>
                          </div>
                        </div>
                        <div class="col-sales">
                          <div class="form-group bmd-form-group-long">
                            <label class="bmd-label-floating">Receipt Number</label>
                            <input type="text" class="form-control {{ $errors->has('receiptNo') ? ' is-invalid' : '' }}" id="receiptNo" name="receiptNo" placeholder="Eg: 1502" required>
                          </div>
                        </div>
                    </div>
                    <div class="row-sales">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Remarks</label>
                          <div class="form-group bmd-form-group-long">
                            <label class="bmd-label-floating"> Put other details about the sale, if any...</label>
                            <textarea class="form-control" id="remarks" name="remarks" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right-sales">Submit</button>
                    <div class="clearfix"></div>
                    </form>
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>
        <footer _ngcontent-c2="" class="footer footer-default">
          <div _ngcontent-c2="" class="container">
            <nav _ngcontent-c2="">
              <ul _ngcontent-c2="">
                <li _ngcontent-c2="">
                  <a _ngcontent-c2="" href="https://www.creative-tim.com">
                    Creative Tim
                  </a>
                </li>
                <li _ngcontent-c2="">
                  <a _ngcontent-c2="" href="https://www.creative-tim.com/about-us">
                    About Us
                  </a>
                </li>
                <li _ngcontent-c2="">
                  <a _ngcontent-c2="" href="http://blog.creative-tim.com">
                    Blog
                  </a>
                </li>
                <li _ngcontent-c2="">
                  <a _ngcontent-c2="" href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                    MIT License
                  </a>
                </li>
              </ul>
            </nav>
            <div _ngcontent-c2="" class="copyright">
              ©
              2018, Designed by
              <a _ngcontent-c2="" href="https://www.invisionapp.com" target="_blank">Invision</a>.
              Coded
              by
              <a _ngcontent-c2="" href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </div>
          </div>
        </footer>
      </div>
    </app-profile>
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