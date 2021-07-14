<?php $absoluteRoot = "/gotech"?>
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
    <link rel="stylesheet" type="text/css" href="css/quote-modal.css">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
    <!-- Start Navigation -->
    <header>
        <div class="upper-hdr">
            <div class="flex-upper">
                <div class="pull">
                    
                    <ul class="social-up">
                        <li><a href=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href=""><span class="fa fa-google-plus"></span></a></li>
                        <li><a href=""><span class="fa fa-twitter"></span></a></li>
                        <li><a href=""><span class="fa fa-youtube-play"></span></a></li>
                    </ul>
                    
                    <h3 class="para-brand">Go Tech Web Solutions<br>Website Design and Services</h3>
                </div>
                <h3 class="cNumber"><i class="fa fa-phone-square" style="color: white; font-size: 20px; transform: translateY(10%);"></i> (+63) 975-241-2350</h3>
            </div>
        </div>
        
        <nav class="header container-header">

            <div class="nav-bar">
                <div class="brand">
                    <a href="#home" class="page-scroll"><img src="<?php echo $absoluteRoot ?>/img/logo-small.png" alt="Go Tech Web Solutions"></a>
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
                        <li><a href="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter"><input class="btn send-btn" type="button" value="Get A Quote" /></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- MODAL 06 -->
    <div class="modal-1 fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content-1">
		      <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="fa fa-close"></span>
		        </button>
		      </div>
		      <div class="row-1 no-gutters">
			      <div class="col-md-6 d-flex orangeBg">
				      <div class="modal-body p-5 img d-flex color-1 text-center d-flex align-items-center">
				      	<div class="text w-100">
					      	<h2 class="colorWhite">Ready to make your company to step-up to the next level? Get a free quote now!</h2>
					      </div>
				      </div>
				    </div>
				    <div class="col-md-6 d-flex">
				      <div class="modal-body p-5 img d-flex align-items-center color-2">
				      	<div class="text w-100 py-0 py-md-5">
				      		<h3 class="mb-4 form-tt">Get A Free Quote</h3>
				      		<form action="php/quote.php" class="signup-form" method="POST">
					      		<div class="form-group mb-3">
					      			<label class="label" for="name">Full Name</label>
					      			<input type="text" class="form-control" placeholder="eg: John Doe" name="name" required>
					      		</div>
					      		<div class="form-group mb-3">
					      			<label class="label" for="email">Email Address</label>
					      			<input type="email" class="form-control" placeholder="eg: johndoe@gmail.com" name="email" required>
					      		</div>
                    <div class="form-group mb-3">
				            	<label class="label" for="companyName">Company Name</label>
				              <input type="text" class="form-control" name="cname"required>
				            </div>
				            <div class="form-group mb-3">
				            	<label class="label" for="password">Contact Number</label>
				              <input type="number" class="form-control" name="phone" required>
				            </div>
				            <div class="form-group d-md-flex">
				            	<div class="form-check w-100 text-left">
					            	<label class="custom-control fill-checkbox">
													<input type="checkbox" class="fill-control-input" required>
													<span class="fill-control-indicator"></span>
													<span class="fill-control-description">I agree to all terms and conditions</span>
												</label>
											</div>
				            </div>
				            <div class="form-group">
				            	<button type="submit" class="form-control btn-1 btn-primary rounded submit px-3 orangeBg1" name="submit">GET A QUOTE</button>
				            </div>
				          </form>
				      	</div>
				      </div>
				    </div>
				  </div>
		    </div>
		  </div>
		</div>
    <!-- End Navigation -->
