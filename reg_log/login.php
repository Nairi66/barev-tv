<?php
	include 'functions.php';
	include 'db.php';

if (!isset($_SESSION['username'])) {
		// header('location: login.php');
	}else{ 
		header('location: /');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Barev Films | Մուտք</title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<?php include_once '../assets/header.php'; ?>
	<center><h2><b>Barev Films | Մուտք</b></h2></center>

	<div class="container">
		<form method="post">
		  <div class="form-group col-sm-7">
		    <label for="username">Username*</label>
		    <input type="text" placeholder="Մուտքանուն" name="log_user" maxlength="8" class="form-control" id="username">
		  </div>
		  <div class="form-group first col-sm-7" style="display: none;">
		    <label for="pswd1">Password*</label>
		    <input type="password" placeholder="Գաղտնաբառ" name="log_pswd" id="pswd1" class="form-control">
		  </div>
		  <hr>
		  <div class="form-group col-sm-7" id="stat">
		  	
		  </div>	
		<div class="form-group col-sm-7" id="last">
		    <input type="submit" name="login" id="sub" class="col-sm-4 btn btn-success" value="Submit"></input>
		</div>
		<script type="text/javascript">
		// $("#sub").prop('disabled', true);
		// $inpShow = setTimeout(function (){
			$('input').on('input', function(){
		   		if ($('#username').val().length > 7) {
					$(".first").show(500);
					if ($('#pswd1').val().length > 7) {
						$(".second").show(500);
					}else{
						$(".second").hide(500);
					}
				}else{
					$(".first").hide(500);
				}
				
		    });
		    $('input').on('input', function(){
		    	if ($('#username').val().length > 0 && $('#pswd1').val().length > 0) {
		    		func_alert('', '')
		    	}else{
		    		func_alert('Խնդրում ենք լրացնել բոլոր դաշտերը։', 'danger')
		    	}
		    })	
		   
		   function func_alert($text, $spec){
		   		$('#stat').html("<div id='alert' class='col-sm-5 alert alert-" + $spec + "'>" + $text + "</div>")
		   }
		// },1000)
	</script>
</body>
</html>