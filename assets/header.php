	<head>
		<link rel="stylesheet" type="text/css" href="/barevtv/assets/css/style.css">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/barevtv/assets/css/slider.css">
		<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
		<meta charset="utf-8">
	</head>
	<style type="text/css">
		body{
			overflow-y: scroll;
		}
	</style>
	<header id="main_header">
		<center><a style="text-decoration: none;" href="/barevtv"><img style="width: 100px; height: 100px; margin: 0;" src="/barevtv/assets/img/favicon.png"></a></center>
	</header>
	<div class="scrollup" style="transition: 0.3s ease;">
		<img class="scrolimg" src="/barevtv/assets/img/scrollup.png">
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="pos_nav" style="background-color: ">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="/barevtv">Գլխավոր <span class="sr-only">(current)</span></a>
	      </li>
		
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Կատեգորիաներ
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Անիմե</a>
	          <a class="dropdown-item" href="#">Դրամա</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Կատագերգություն</a>
	        </div>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="#">Հետադարձ կապ</a>
	      </li>
	    </ul>
<!-- 	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form> -->
	    <div class="reg_log_out">
			<div class="reg_log" style="display: block">
			    <li class="nav-item" style="position: absolute; left: 82%;">
			       <a href="/barevtv/reg_log/login.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Մուտք</a> 
			    </li>
			    <li class="nav-item">
			    	<a href="/barevtv/reg_log/register.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Գրանցում</a> 
			    </li>
		    </div>
		    <div class="out">
		    	 <li class="nav-item" style="position: absolute; left: 82%;">
			       <a href="?logout" class="btn btn-outline-success my-2 my-sm-0" type="submit">Ելք</a> 
			    </li>
		    </div>
		</div>
	  </div>
	</nav>
	<script type="text/javascript" src="/barevtv/assets/js/slider.js"></script>
	<script type="text/javascript" src="/barevtv/assets/js/js.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
	<?php 
	// include_once('/barevtv');
	if (!isset($_SESSION['username'])) {
		// header('location: login.php');
	}else{ 
		?>
			<script>
				$('.reg_log').css('display', 'none')
				$('.out').css('display', 'block')
			</script>
		<?php
	}
	?>