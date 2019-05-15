<?php

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	mysqli_query($polaczenie,"SET NAMES 'utf8'");
	
	$offer_id = $_POST['id'];
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{		
		if($offer_id > 0){
			
			$delete = mysqli_query($polaczenie,"DELETE FROM oferta WHERE id='$offer_id'");
						
			
			if($delete) {
				
				$pobierz = mysqli_query($polaczenie,"SELECT * FROM oferta") or die('B³¹d po³¹czenia z baz¹ danych. Skontaktuj siê z administratorem.'); 
				
				if(mysqli_num_rows($pobierz) > 0) {
					
					while($r = mysqli_fetch_assoc($pobierz)) {
					
						$old_id = $r["id"];
						if($old_id > $offer_id) {
							
							
							$new_id = $old_id - 1;
							$edituj_id = mysqli_query($polaczenie,"UPDATE oferta SET id='$new_id' WHERE id='$old_id'");
							
						}				
					}
				}
				
				$polaczenie->close();
				header('Location: success.php');
			}
		}
		else {
			$polaczenie->close();
			header('Location: error.php');
		}
		


		
	}
	$polaczenie->close();
?>