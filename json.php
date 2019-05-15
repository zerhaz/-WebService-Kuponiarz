<?php

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	mysqli_query($polaczenie,"SET NAMES 'utf8'");
	
	

	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{

		$wynik = mysqli_query($polaczenie,"SELECT * FROM oferta") or die('Błąd połączenia z bazą danych. Skontaktuj się z administratorem.'); 
		
		$numberOfJsonObjects = 0;
	
		while ($row = mysqli_fetch_assoc($wynik)) {
			$numberOfJsonObjects++;
			$data[] = $row;
		}
		//echo '<pre>'; print_r($data); echo '</pre>';
		
		
		echo '{"kupony":[';
		for($i = 0; $i<$numberOfJsonObjects; $i++) {
			if($i!=0){ echo ',';}
			echo json_encode($data[$i]);
		}
		echo ']}';
				
		
		$polaczenie->close();
	}
	
?>