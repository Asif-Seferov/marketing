
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Markedia - Marketing Blog Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href=" {{ asset('assets/front/images/favicon.ico') }} " type="image/x-icon" />
    <link rel="apple-touch-icon" href=" {{ asset('asstes/front/images/apple-touch-icon.png') }} ">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> 
    
    <!-- Bootstrap core CSS -->
    <link href=" {{ asset('assets/front/css/bootstrap.css') }} " rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href=" {{ asset('assets/front/css/font-awesome.min.css') }} " rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=" {{asset('assets/front/style.css')}} " rel="stylesheet">

    <!-- Animate styles for this template -->
    <link href=" {{ asset('assets/front/css/animate.css') }} " rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href=" {{ asset('assets/front/css/responsive.css') }} " rel="stylesheet">

    <!-- Colors for this template -->
    <link href=" {{ asset('assets/front/css/colors.css') }} " rel="stylesheet">

    <!-- Version Marketing CSS for this template -->
    <link href=" {{ asset('assets/front/css/version/marketing.css') }} " rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        @include('layouts.header')

        @if(route('index'))
            <section id="cta" class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 align-self-center">
                            <h2>A digital marketing blog</h2>
                            <p class="lead"> Aenean ut hendrerit nibh. Duis non nibh id tortor consequat cursus at mattis felis. Praesent sed lectus et neque auctor dapibus in non velit. Donec faucibus odio semper risus rhoncus rutrum. Integer et ornare mauris.</p>
                            <a href="#" class="btn btn-primary">Try for free</a>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="newsletter-widget text-center align-self-center">
                                <h3>Subscribe Today!</h3>
                                <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                <form class="form-inline" method="post">
                                    <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                                    <input type="submit" value="Subscribe" class="btn btn-default btn-block" />
                                </form>         
                            </div><!-- end newsletter -->
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <section class="section lb">
            @yield('content')
        </section>

        @include('layouts.footer')

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src=" {{ asset('assets/front/js/jquery.min.js') }} "></script>
    <script src=" {{ asset('assets/front/js/tether.min.js') }} "></script>
    <script src=" {{ asset('assets/front/js/bootstrap.min.js') }} "></script>
    <script src=" {{ asset('assets/front/js/animate.js') }} "></script>
    <script src=" {{ asset('assets/front/js/custom.js') }} "></script>

</body>
</html>