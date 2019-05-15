
<?php

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	mysqli_query($polaczenie,"SET NAMES 'utf8'");

	$offer_id = $_POST['id'];
	$text_title = $_POST['text_title'];
	$description = $_POST['description'];
	$promo_code = $_POST['promo_code'];
	$selected_img = $_POST['selected_img'];
	

	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{		
		if($text_title and $description and $promo_code and $selected_img){
			
			$edytuj = mysqli_query($polaczenie,"UPDATE oferta SET nazwa='$text_title', info='$description', kod='$promo_code', img='$selected_img' WHERE id='$offer_id'") 
				or die('Błąd połączenia z bazą danych. Skontaktuj się z administratorem.'); 
				
			
				
			$polaczenie->close();
			header('Location: success.php');
			
		}
		else {
			$polaczenie->close();
			header('Location: error.php');
		}
		


		
	}
	$polaczenie->close();
?>