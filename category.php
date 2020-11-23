<?php
session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> G & R  Store - Category</title>
		
		<link rel="icon" href="img/logorg.png" type="image/png">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
		<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="vendors/nice-select/nice-select.css">
		<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
		
		
		
		
		
				
		
	</head>
	
	
<body>
<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php"><img src="img/logorg.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.php">Home<i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="category.php">Shop Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
                  
                </ul>
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                </ul>
							</li>
				
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact<i class="fa fa-phone" aria-hidden="true"></i></a></li>
            </ul>

            <ul class="nav-shop">
              
              
             
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="ti-shopping-cart"></span><span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in DT</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in DT</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in DT</div>
								</div>-->
								</div>
							</div>
							
						</div>
					</div>
				
				
			
		</div>
	</div>
</div>	
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
			
				<div id="get_category">
				<br/>
				</div>
				
				<br/>
				<div id="get_brand">
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				
				
				
				<div class="panel panel-info">
					<div class="panel-heading"><h4>Products</h4></div>
					<div class="panel-body">
						<div id="get_product">
							
						
					</div>
					
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved G&R Store <i class="fa fa-heart" aria-hidden="true"></i> 
</p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  
</body>
</html>
</body>
</html>

