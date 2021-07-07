<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Go Tech Web Solutions</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="free boostrap, bootstrap template, freebies, free theme, free website, free portfolio theme, portfolio, personal, cv">
    <meta name="author" content="Jenn, ThemeForces.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">
    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/img-modal.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
    <!-- Start Navigation -->
    <header>
        <nav class="header container-header">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#home" class="page-scroll"><img src="img/logo-small.png" alt="Go Tech Web Solutions"></a>
                </div>
                <div class="nav-list">
                    <div class="hamburger"><div class="bar"></div></div>
                    <ul class="ul">
                        <li><a href="#home" class="page-scroll">Home</a></li>
                        <li><a href="#meet-us" class="page-scroll">Overview</a></li>
                        <li><a href="#services" class="page-scroll">Services</a></li>
                        <li><a href="#works" class="page-scroll">Portfolio</a></li>
                        <li><a href="#about-us" class="page-scroll">About Us</a></li>
                        <li><a href="#contact" class="page-scroll">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Navigation -->

    <!-- Home Section -->
    <div id="home">
        <div class="container text-center">
            <!-- Navigation -->
            <!-- <nav id="menu" data-toggle="offcanvas" data-target=".navmenu">
                <span class="fa fa-bars"></span>
            </nav> -->

            <div class="content">
                <h4>We've got the special power</h4>
                <hr>
                <div class="header-text btn">
                    <h1><span id="head-title"></span></h1>
                </div>
            </div>

            <a href="#meet-us" class="down-btn page-scroll">
                <span class="fa fa-angle-down"></span>
            </a>
        </div>
    </div>
    <script>
    $(document).keyup(function(e) {
        if (e.key === "Escape") { // escape key maps to keycode `27`
        modal.style.display = 'none';
        }
        else if (e.key === "ArrowRight") {
            $('.next').click();
        }
        else if(e.key === "ArrowLeft"){
            $('.prev').click();
        }
    });
    </script>