<!doctype html>
<html lang="en">
  <head>
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MPNX1ZQ6BM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MPNX1ZQ6BM');
</script>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	
    <title>QCS - Domain Name Registration</title>
	
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
    <!-- Custom styles for this template -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
  </head>
  <body>
    <header>
		<nav class="navbar py-4 navbar-expand-md navbar-light bg-white">
			<div class="container">
				<a class="navbar-brand" href="index.html"><i class="fa fa-cloud fa-lg text-primary"></i> Quick Cloud Setup</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExample04">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Domain Registration<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Server Hosting</a>
								<div class="dropdown-menu" aria-labelledby="dropdown04">
								<a class="dropdown-item" href="#cloud">Cloud Hosting</a>
								<a class="dropdown-item" href="shared.html">Shared Web Hosting</a>
								<!-- <a class="dropdown-item" href="#">VPS Hosting</a> -->
								<!-- <a class="dropdown-item" href="#">Email Hosting</a> -->
								<a class="dropdown-item" href="dedicated.html">Dedicated Hosting</a>
								</div>
						</li>
						<li class="nav-item dropdown">
								<a class="nav-link" href="ssl.html" aria-haspopup="true" aria-expanded="false">SSL</a>	
								
							</li>
						<li class="nav-item">
							<a class="nav-link" href="contact1.html">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">About</a>
						</li>
						<!--<li class="nav-item">
							<a class="btn btn-outline-primary my-2 my-sm-0" href="#">Login</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-primary my-2 my-sm-0" href="#">Create Account</a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
    </header>
	
    <main role="main">
		<section id="slider">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Uncomment = show carousel line indicator at bottom-->
				 <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					

				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="carousel-bg" style="background-image: url('img/banner.jpg')">
							<div class="foredrop"></div>
							<div class="container">
								<div class="carousel-caption text-left">
									<h1>Domain Name Registration</h1>
									<p>Use the tool below to see if you are able to register your domain.</p>
									<p> Your domain extension can indicate the nature of your site or the location of your business</p>
									<p><a class="btn btn-lg btn-outline-light" href="#" role="button">Contact Us Now</a> </p>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>

	

		<!-- ======= FAQ Area Start ========= -->
		<div id="privacy">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
							 <div class="wrapper">
<br> <br>    


        <h2>Check Domain Name Availability</h2>
            <!--<div class="container"> -->
                <form action="" method="GET">
                    <input id="searchBar" class="searchbar" type="text" name="domain" placeholder="Search domain name..." value="<?php if(isset($_GET['domain'])){ echo $_GET['domain']; } ?>">
                    <button type="submit" id="btnSearch" class="btn-search"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <?php
                error_reporting(0);
                if(isset($_GET['domain'])){
                    $domain = $_GET['domain'];
                    if ( gethostbyname($domain) != $domain ) {
                        echo "<h3 class='fail'>Domain Already Registered!</h3>";
                    }
                    else {
                        echo "<h3 class='success'>Hurry, your domain is available!, you can register it.</h3>";
                    }
                }
            ?>
        </div>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
        <style type="text/css">
<!--            h2 {
                font-size: 26px;
                text-align: center;
            }


            h3 {font-size: 24px; }
            h3.success {
                color: #008000;
                text-align: center;
            }
            h3.fail {
                color: #ff0000;
                text-align: center;
            }

-->

            .container {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .searchbar {
                padding: 6px 10px;
                width: 400px;
                max-width: 100%;
                border: none;
                margin-top: 1px;
                margin-right: 8px;
                font-size: 1em;
                border-bottom: #333 solid 2px;
                transition: 0.3s;
            }
            .searchbar::placeholder {
                font-size: 1em;
            }
            .searchbar:focus {
                outline: none;
            }
            .btn-search {
                cursor: pointer;
                text-decoration: none !important;
                font-size: 1.5em;
                padding-top: 5px;
                padding-bottom: 5px;
                background-color: transparent;
                border: none;
                outline: none;
            }
        </style>
							
			
						</div>
					</div>
				</div>
			</div>
		</div>

		
		
		<!-- Featured 3 -->
		<div id="featured-3" class="mt-5 bg-light">
			<div class="container">
				<div class="col-12 bg-rocket m-auto py-5">
				<a href="contact1.html"><h3>Contact Us Now!</h3></a>
				<p class="mb-4">Let us register your a domain for you</p>
				<!--<form class="form-inline">
				  <label class="sr-only" for="inlineFormInput">Email</label>
				  <input type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="email@yourmail.com">

				  <label class="sr-only" for="inlineFormInputGroup">Message</label>
				  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
					<input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Message">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>-->
				<a href="https://domains.google/intl/en_ca/" target="_blank"><button type="submit" class="btn btn-primary">Register Your Domain With Google</button></a>
				</div>
			</div>
		</div>
		
    </main>
	
    <footer class="bg-dark py-4 text-muted">
        <div class="container">
		    <div class="row">
			
				<div class="col-md-3">
					<h3 class="widget-title">Company</h3>
					<ul class="list-unstyled">
						<li><a href="about.html">About</a></li>
						<!--<li><a href="#">Blog</a></li> -->
						<!-- <li><a href="#">Press</a></li> -->
						<!-- <li><a href="#">Legal</a></li> -->
						<!-- <li><a href="#">Careers</a></li> -->
						<!-- <li><a href="#">Sitemap</a></li> -->
					</ul>
					<h3 class="widget-title">Contacts</h3>
					<ul class="list-unstyled">
						<li><i class="fa fa-phone"></i> +1-647-954-5946</li>
						<li>Carrier Charges May Apply*</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3 class="widget-title">Products & Services Offered</h3>
					<ul class="list-unstyled">
						<li>Domain Name Registrastion </li>
						<li>Web Server Hosting</li>
						<li>VPS Hosting</li>
						<li>Dedicated Server</li>
						<li>Colocation Server</li>
						<li>Email Hosting</li>
						<li>Networking</li>
						<li>iOS Apps</li>
					</ul>
				</div>
				
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-4">
						<h3 class="widget-title">Help</h3>
						<ul class="list-unstyled">
							<li><a href="terms.html">Terms & Conditions</a></li>
							<li><a href="privacy.html">Privacy Policy</a></li>
							
						</ul>
						</div>
						<div class="col-md-8 text-right">
							<ul class="list-unstyled">
								<li class="list-inline-item"><a href="#"><span class="btn-social"><i class="fa fa-facebook"></i></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="btn-social"><i class="fa fa-twitter"></i></span></a></li>
								<!-- <li class="list-inline-item"><a href="#"><span class="btn-social"><i class="fa fa-google-plus"></i></span></a></li> -->
								<!-- <li class="list-inline-item"><a href="#"><span class="btn-social"><i class="fa fa-linkedin"></i></span></a></li> -->
								<li class="list-inline-item"><a href="#"><span class="btn-social"><i class="fa fa-instagram"></i></span></a></li>
							</ul>
							<!--  <a href="#" class="btn btn-sm btn-primary">We're Hiring</a> -->
						</div><!-- .col-md-6 -->
					</div><!-- .row -->
					<hr />
					
					<div class="row">
						<div class="col-md-12">
							<span class="region mr-2">Deploy :</span> 
								<div class="btn-group">
								<button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Globally</button>
								<!--
								<div class="dropdown-menu">
									
									<a class="dropdown-item"><b><u>Ensure to tell us where you would like to deploy:</u></b></a>
									<a class="dropdown-item">Canada</a>
									<a class="dropdown-item">United States</a>
									<a class="dropdown-item">United Kingdom</a>
									<a class="dropdown-item">Caribbean</a>
									<a class="dropdown-item">UAE</a>
									<a class="dropdown-item">South America</a>
									<a class="dropdown-item">Other Areas</a>
								-->



								</div>
							</div>
						</div>
					</div><!-- .row -->
				</div>
		    </div>
			<p class="copyright mt-3">
			&copy; 2021 <a href="https://quickcloudserver.com">QCS - Quick Cloud Setup</a>
			<a href="#" class="float-right">Back to top</a>
			</p>
		</div><!-- .container -->
		
    </footer>
	
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
	
  </body>
</html>