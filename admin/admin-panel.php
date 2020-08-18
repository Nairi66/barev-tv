<?php 
	include_once '../session.php';
	include '../reg_log/db.php';
	if ($_SESSION['username'] == 'q8XG!P7>aZ?zp=3') {
		
	}else {
		header('location: /barevtv');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Barev </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<?php include_once '../assets/header.php'; ?>
	<h1>Insert Films</h1>
	<center><form method="post" action="insert_films.php" enctype="multipart/form-data"> 
		  <div class="form-group col-sm-7">
		    <label for="title">Ընտրեք Վերնագիր։ </label>
		    <input type="text" placeholder="Վերնագիր" name="title" class="form-control" id="title">
		  </div>
		  <div class="form-group first col-sm-7">
		    <label for="desc">Նկարագրություն։ </label>
		    <input type="text" placeholder="Կարճ նկարագրություն" name="desc" id="desc" class="form-control">
		  </div>
		  <div class="form-group first col-sm-7">
		    <label for="desc">Վերբեռնվող ֆայլը։ </label>
		    <input type="file" name="file" id="upload" class="form-control">
		  </div>
		  <hr>
		<div class="form-group col-sm-7" id="last">
		    <input type="submit" name="login" id="sub" class="col-sm-4 btn btn-success" value="Submit"></input>
		</div>
	</form>
	</center>
	<h1>Insert Serials or Anime</h1>
	<center>
		<form method="post" action="insert_serials.php" enctype="multipart/form-data"> 
		  <div class="form-group col-sm-7">
		    <label for="title">Ընտրեք Վերնագիր։ </label>
		    <input type="text" placeholder="Վերնագիր" name="title" class="form-control" id="title">
		  </div>
		  <div class="form-group first col-sm-7">
		    <label for="desc">Նկարագրություն։ </label>
		    <input type="text" placeholder="Կարճ նկարագրություն" name="desc" id="desc" class="form-control">
		  </div>
		  <div class="form-group first col-sm-7">
		    <label for="desc">Վերբեռնվող ֆայլը։ </label>
		    <input type="file" name="file" id="upload" class="form-control">
		  </div>
		  <hr>
		<div class="form-group col-sm-7" id="last">
		    <input type="submit" name="login" id="sub" class="col-sm-4 btn btn-success" value="Submit"></input>
		</div>
	</form>
	</center>
	
</body>
</html>