<?php
	
	function alert($text, $spec){
		echo "<div class='form-group col-sm-7 ' style='position: absolute; z-index: 9;'><div id='alert' class='col-sm-5 alert alert-".$spec."'>$text</div></div>";
	}

	function checkFilms($title){
		include '../reg_log/db.php';
		
		$query = "SELECT * FROM `uploaded_serials` WHERE `film_title` = '$title'";
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result)>=1) {

		}else{
			return true;
		}
	}

	

	function insertFilm($title, $desc, $filename){
		include '../reg_log/db.php';
		$query = "INSERT INTO uploaded_serials (film_id, film_title, film_description, filename, date_added) VALUES ('','$title', '$desc', '$filename', NOW())";
		$result = mysqli_query($conn, $query);

		if(strlen($conn->error) == 0){
			alert('Ֆիլմը հաջողությամբ վերբեռնված է։','success');
			return true;
		}else{
			alert('Վերբեռնելու ընթացքում տեղի է ունեցել սխալ, խնրում ենք նորից փորձել։', 'danger');

		}
	}

	//Insert FIlm
	function Insert() {

		if (isset($_POST['login'])){
			if (!empty($_POST['title']) && !empty($_POST['desc'])) {
				include '../reg_log/db.php';


				$name = $_FILES['file']['name'];
				$tmp_name = $_FILES['file']['tmp_name'];
				//from POST
				$title = $_POST['title'];
				$desc = $_POST['desc'];
				$dest = 'uploaded_serials/'.$name;
				if (checkFilms($title)) {
					insertFilm($title, $desc, $name);
			 		move_uploaded_file($tmp_name, $dest);
					return true;
				}else{
					// alert('Տվյալ ֆիլմը արդեն կա բազայում։', 'danger');		
					echo 'fuck';
				}

			}else{

				// alert('Խնդրում ենք լրացնել բոլոր դաշտերը։', 'danger');

			}
		}
	}
	if (Insert()) {
		// header('location: admin-panel.php');
	}
