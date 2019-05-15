<?php

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	mysqli_query($polaczenie,"SET NAMES 'utf8'");
	
	$text_title = $_POST['text_title'];
	$description = $_POST['description'];
	$promo_code = $_POST['promo_code'];
	$selected_img = $_POST['selected_img'];
	
	$row_nums = 0;
	$new_id = 0;
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{

		if($text_title and $description and $promo_code and $selected_img){
			
			$pobierz = mysqli_query($polaczenie,"SELECT * FROM oferta") or die('Błąd połączenia z bazą danych. Skontaktuj się z administratorem.');
					
			if(mysqli_num_rows($pobierz) > 0) {				
				$row_nums = mysqli_num_rows($pobierz);				
			}
			
			$new_id = $row_nums + 1;
			
			$insert = mysqli_query($polaczenie, "INSERT INTO oferta SET id='$new_id', nazwa='$text_title', info='$description', kod='$promo_code', img='$selected_img'"); 
			 
			 if($insert) {
				$polaczenie->close();
				header('Location: success.php');
			 } else {
				$polaczenie->close();
				header('Location: error.php');
			 }
			 
			
		} else {
			$polaczenie->close();
			header('Location: error.php');
		}
				
	}
	$polaczenie->close();
?>