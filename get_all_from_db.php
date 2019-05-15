<?php

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	mysqli_query($polaczenie,"SET NAMES 'utf8'");
	
	$confirmation = "'Czy na pewno chcesz usunąć daną ofertę?'";
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{

		$wynik = mysqli_query($polaczenie,"SELECT * FROM oferta") or die('Błąd połączenia z bazą danych. Skontaktuj się z administratorem.'); 
	
		if(mysqli_num_rows($wynik) > 0) { 

			echo '<div class="container">'; 
			while($r = mysqli_fetch_assoc($wynik)) {

				$vis = $r["widoczne"];
				$visRes ="";				
				if ($vis == 1){
					$visRes ="Tak";
				} else { $visRes ="Nie"; }
				
				echo '<div class="row element-row">

						<div class="col-xl-12 single-element">
			
							<div class="row">
							
								<div class="col-md-4">
								
									<img class="overview-img" src="web-img/300x300/img'.$r["img"].'.jpg" alt="obrazek oferty specjalnej" width=200 height=200/>
								
								</div>

								<div class="col-md-8">	
								
									<div class="row">
									
										<div class="col-sm-12 element-title">
										
										<h4>'.$r["id"].': '.$r["nazwa"].'</h4>	
										
										</div>
																		
									</div>

									<div class="row">
									
										<div class="col-sm-12 element-description">
										
										<p><em>'.$r["info"].'</em></p>	
										
										</div>
																		
									</div>

									<div class="row">
									
										<div class="col-sm-12 element-code">
										
										<p>Kod promocji: <b>'.$r["kod"].'</b></p>	
										
										</div>
																		
									</div>

									<div class="row">
									
										<div class="col-md-2 col-6 offset-md-7 element-edit-button">
										
										<form action="edit.php" method="post" id="editForm" name="form-edit">
											<input type="hidden" name="id" value="'.$r["id"].'" required/>
											<input type="submit" value="EDYTUJ" class="edit-button"/>
										</form>
										
										</div>
									
										<div class="col-md-2 col-6  element-delete-button">
										
										<form action="delete_from_db.php" method="post" id="deleteForm" name="form-delete" onsubmit="return confirm('.$confirmation.');">
											<input type="hidden" name="id" value="'.$r["id"].'" required/>
											<input type="submit" value="USUŃ" class="delete-button"/>
										</form>
										</div>
																												
									</div>										
								
								</div>								

							</div>
		
						</div>
				
				</div>'; 
			} 
			echo "</div>"; 
		} 
		else{	
			
			echo '
				<div class="container">
					<div class="row element-row">

						<div class="col-xl-12 empty-element">
										
							<b>Nie posiadasz obiecnie żadnych ofert specjalnych.</b> 
							<br/><br/>
							<a href="create.php" style="color:#007f00;">Utwórz ofertę</a> 			
										
						</div>				

					</div>
				</div>
			';
			
		}
		
		
		
		
	}
	$polaczenie->close();
?>









