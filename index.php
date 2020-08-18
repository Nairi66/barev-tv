<?php
	include 'session.php';
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: reg_log/login.php");
	}

?>
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
<?php include_once 'assets/header.php'; ?>

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