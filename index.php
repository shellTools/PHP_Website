<?php

session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}

?>


}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#1 [Brand] Knockoff Shop</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
  </head>

  <body>
  <div class="wait overlay">
  	<div class="loader"></div>
  </div>
  	<div class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container-fluid">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
  					<span class="sr-only">navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a href="#" class="navbar-brand">#1 [Brand] Knockoff Shop</a>
  			</div>
  		<div class="collapse navbar-collapse " id="collapse">

		<nav class="nav">
  			<ul class="nav navbar-nav">
  				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li class="nav-item dropdown">
	   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		 Shop
	   </a>
	   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		 <a class="dropdown-item" href="#">Accessories</a>
		  <div class="dropdown-divider"></div>
		 <a class="dropdown-item" href="#">Bags</a>
		 <div class="dropdown-divider"></div>
		 <a class="dropdown-item" href="#">Clothing</a>
	   </div>
	 	</li>
		</nav>

  		<form class="navbar-form navbar-left">
			<img src="../public/img/sup_logo_lg.png" alt="..." class="img-thumbnail">
  		 </form>
  			<ul class="nav navbar-nav navbar-right">
  				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
  					<div class="dropdown-menu" style="width:400px;">
  						<div class="panel panel-success">
  							<div class="panel-heading">
  								<div class="row">
  									<div class="col-md-3">Sl.No</div>
  									<div class="col-md-3">Product Image</div>
  									<div class="col-md-3">Product Name</div>
  									<div class="col-md-3">Price in $.</div>
  								</div>
  							</div>
  							<div class="panel-body">
  								<div id="cart_product">
  								<!--<div class="row">
  									<div class="col-md-3">Sl.No</div>
  									<div class="col-md-3">Product Image</div>
  									<div class="col-md-3">Product Name</div>
  									<div class="col-md-3">Price in $.</div>
  								</div>-->
  								</div>
  							</div>
  							<div class="panel-footer"></div>
  						</div>
  					</div>
  				</li>
  				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
  					<ul class="dropdown-menu">
  						<div style="width:300px;">
  							<div class="panel panel-primary">
  								<div class="panel-heading">Login</div>
  								<div class="panel-heading">
  									<form onsubmit="return false" id="login">
  										<label for="email">Email</label>
  										<input type="email" class="form-control" name="email" id="email" required/>
  										<label for="email">Password</label>
  										<input type="password" class="form-control" name="password" id="password" required/>
  										<p><br/></p>
  										<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
  									</form>
  								</div>
  								<div class="panel-footer" id="e_msg"></div>
  							</div>
  						</div>
  					</ul>
  				</li>
  			</ul>
  		</div>
  	</div>
  </div>
  	<p><br/></p>
  	<p><br/></p>
  	<p><br/></p>
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-md-1"></div>
  			<div class="col-md-2 col-xs-12">
  				<div id="get_category">
  				</div>

  				<div id="get_brand">
  				</div>

  			</div>
  			<div class="col-md-8 col-xs-12">
  				<div class="row">
  					<div class="col-md-12 col-xs-12" id="product_msg">
  					</div>
  				</div>
  				<div class="panel panel-info">
  					<div class="panel-heading">Out Products</div>
  					<div class="panel-body">
  						<div id="get_product">
  							<!--Here we get product jquery Ajax Request-->
  						</div>
  						<!--<div class="col-md-4">
  							<div class="panel panel-info">
  								<div class="panel-heading">Samsung Galaxy</div>
  								<div class="panel-body">
  									<img src="product_images/images.JPG"/>
  								</div>
  								<div class="panel-heading">$.500.00
  									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
  								</div>
  							</div>
  						</div> -->
  					</div>
					<div class="copyright">
           				<p>copyright &copy; 2019 #1 [brand] Knockoffs</p>
         			</div>
  			</div>
  			<div class="col-md-1"></div>
  		</div>
