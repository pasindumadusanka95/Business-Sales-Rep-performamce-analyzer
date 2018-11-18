<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Stock keeper View</title>
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,shrink-to-fit=no" name="viewport">
    <base href="https://demos.creative-tim.com/now-ui-kit-angular/">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/now-ui-kit-angular">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200|Open+Sans+Condensed:700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js">
    </script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NKDMSK6"></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','_gaq');

        _gaq('create', 'UA-46172202-1', 'auto');


        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '111649226022273');</script><!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NKDMSK6');</script><!-- End Google Tag Manager -->
    <link href="styles.7df5ac5d94657a0eb375.bundle.css" rel="stylesheet">
    <style></style>
</head>

<body class="sidebar-collapse profile-page">
<!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
                                                        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
<app-root _nghost-c0="" ng-version="5.2.2">
    <app-navbar _ngcontent-c0="" _nghost-c1="">
        <nav _ngcontent-c1="" class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent"
             color-on-scroll="500">
            <div _ngcontent-c1="" class="container">
                <div _ngcontent-c1="" class="dropdown button-dropdown">
                    <div _ngcontent-c1="" ngbdropdown="" class="dropdown">
                        <a _ngcontent-c1="" aria-haspopup="true" class="dropdown-toggle dropdown-toggle"
                           ngbdropdowntoggle="" aria-expanded="false">
                            <span _ngcontent-c1="" class="button-bar"></span>
                            <span _ngcontent-c1="" class="button-bar"></span>
                            <span _ngcontent-c1="" class="button-bar"></span>
                        </a>
                        <div _ngcontent-c1="" ngbdropdownmenu="" class="dropdown-menu">
                            <a _ngcontent-c1="" class="dropdown-header">Dropdown header</a>
                            <a _ngcontent-c1="" class="dropdown-item" href="#">Action</a>
                            <a _ngcontent-c1="" class="dropdown-item" href="#">Another action</a>
                            <a _ngcontent-c1="" class="dropdown-item" href="#">Something else here</a>
                            <div _ngcontent-c1="" class="dropdown-divider"></div>
                            <a _ngcontent-c1="" class="dropdown-item" href="#">Separated link</a>
                            <div _ngcontent-c1="" class="dropdown-divider"></div>
                            <a _ngcontent-c1="" class="dropdown-item" href="#">One more separated link</a>
                        </div>
                    </div>
                </div>
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
    </app-navbar>
    <app-profile _nghost-c2="">
        <div _ngcontent-c2="" class="wrapper">
            <div _ngcontent-c2="" class="page-header page-header-small" filter-color="orange">
                <div _ngcontent-c2="" class="page-header-image rellax-header" data-rellax-speed="-8" style="background-image: url({{'assets/img/bg.jpg'}}); transform: translate3d(0px, 0px, 0px);">
                </div>
                <div _ngcontent-c2="" class="container">
                    <div _ngcontent-c2="" class="content-center">
                        <div _ngcontent-c2="" class="photo-container">
                            <img _ngcontent-c2="" alt="" src="assets/img/ryan.jpg">
                        </div>
                        <h3 _ngcontent-c2="" class="title">Ryan Scheinder</h3>
                        <p _ngcontent-c2="" class="category">Stock Keeper</p>

                    </div>
                </div>
            </div>
            <div _ngcontent-c2="" class="section">
                <div _ngcontent-c2="" class="container">
                    <h3 _ngcontent-c2="" class="title">About me</h3>
                    <h5 _ngcontent-c2="" class="description">An artist of considerable range, Ryan — the name taken
                        by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his
                        own music, giving it a warm, intimate feel with a solid groove structure. An artist of
                        considerable range.</h5>
                    <div _ngcontent-c2="" class="row">
                        <div _ngcontent-c2="" class="col-md-12">
                            <h4 _ngcontent-c2="" class="title text-center">My Performance</h4>
                            <ngb-tabset _ngcontent-c2="" class="nav nav-pills nav-pills-primary  nav-pills-just-icons justify-content-center tab-space"
                                        type="pills">
                                <ul role="tablist" class="nav nav-pills justify-content-center">
                                    <!---->
                                    <li class="nav-item">
                                        <a class="nav-link active" href="" role="tab" id="ngb-tab-0" aria-controls="ngb-tab-0-panel"
                                           aria-expanded="true" aria-disabled="false">
                                            <!---->
                                            <i _ngcontent-c2="" class="now-ui-icons design_image"></i>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="" role="tab" id="ngb-tab-1" aria-expanded="false"
                                           aria-disabled="false">
                                            <!---->
                                            <i _ngcontent-c2="" class="now-ui-icons location_world"></i>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="" role="tab" id="ngb-tab-2" aria-expanded="false"
                                           aria-disabled="false">
                                            <!---->
                                            <i _ngcontent-c2="" class="now-ui-icons sport_user-run"></i>

                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!---->
                                    <!---->
                                    <div role="tabpanel" class="tab-pane active" aria-labelledby="ngb-tab-0" id="ngb-tab-0-panel"
                                         aria-expanded="true">
                                        <!---->

                                    </div>

                                    <!---->

                                    <!---->

                                </div>
                            </ngb-tabset>
                        </div>
                    </div>
                </div>
            </div>
            <footer _ngcontent-c2="" class="footer footer-default">
                <div _ngcontent-c2="" class="container">

                    <div _ngcontent-c2="" class="copyright">
                        ©
                        2018

                    </div>
                </div>
            </footer>
        </div>
    </app-profile>