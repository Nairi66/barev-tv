<!DOCTYPE html>
<html>
<head>
	<title>Barev Films | Գլխավոր</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/css/slider.css">
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<meta charset="utf-8">
</head>
<body>
	<header id="main_header">
		<a style="text-decoration: none;" href="index.html"><img style="width: 50px; height: 50px; margin: 0;" src="assets/img/favicon.png"></a>
	</header>
	<div class="scrollup" style="transition: 0.3s ease;">
		<img class="scrolimg" src="assets/img/scrollup.png">
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="pos_nav" style="background-color: ">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Գլխավոր <span class="sr-only">(current)</span></a>
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
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>

	<!-- title -->
<div class="slider">
  <!-- slide -->
  <ul>
    <li class="active"></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
<!--   <ol>
    <li class="active"><i class="fa fa-circle-o"></i></li>
    <li><i class="fa fa-circle-o"></i></li>
    <li><i class="fa fa-circle-o"></i></li>
    <li><i class="fa fa-circle-o"></i></li>
    <li><i class="fa fa-circle-o"></i></li>
  </ol> -->
  <span class="controll active"></span>
  <span class="controll"></span>
</div>

	<section class="container" id="main_section">
		<hr>
		<ul class="list-group">
		  <li class="list-group-item" category='anime'>Նարուտո
			<li class="list-group-item " style="display: none;">
					 <h5 class="mt-0 mb-1 media my-4"><b>Նարուտո</b></h5>
				      <p>Նարուտո Մասաշի Քիշիմոտոյի ավարտված մանգան է, որի հիման վրա նկարահանվել է նաև համանուն անիմե։ Այն պատմում է դեռահաս նինջայի՝ Նարուտո Ուզումակիի պատմությունը, ով ձգտում է, որ շրջապատը ճանաչի ու ընդունի իրեն։ Նարուտոյի երազանքը Հոկագե դառնալն է՝ մարդ, ում ամբողջ գյուղն ընդունում է որպես առաջնորդ ու ուժեղագույն նինջա։</p>
				    <br><img src="assets/img/2.jpg" class="mr-3" alt="...">
				    <div class="media-body ">
				     
				    </div>
				  </li>			
			</li>
			
		  <li class="list-group-item">Ջոկեր
			<a href="joker.html"><li class="list-group-item" style="display: none;"><img width="70%" src="assets/img/5.jpg"></li></a>
		  </li>
		</ul>
		<hr>

	</section>
	<script type="text/javascript" src="assets/js/slider.js"></script>
	<script type="text/javascript" src="assets/js/js.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
</body>
</html>