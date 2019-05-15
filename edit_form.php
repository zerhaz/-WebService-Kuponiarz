<?php


	$offer_id = $_POST['id'];

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	mysqli_query($polaczenie,"SET NAMES 'utf8'");
	
	$confirmation = "'Czy na pewno chcesz edytować daną ofertę?'";
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		
		if($offer_id) {
			
			$pobierz = mysqli_query($polaczenie,"SELECT * FROM oferta WHERE id='$offer_id'") or die('Błąd połączenia z bazą danych. Skontaktuj się z administratorem.');
			
			if(mysqli_num_rows($pobierz) > 0) {
				
				$r = mysqli_fetch_row($pobierz);
				
				$old_name = $r[1];
				$old_desc = $r[2];
				$old_code = $r[3];


	
				echo '
					<div class="container">
					<div class="row cleaner-mobile">
					
						<div class="row">
							<div class="col-xl-12 sub-title">
								
								<h3>Edytowanie oferty specjalnej</h3>		
											
							</div>				

						</div>

						<div class="col-xl-12 single-element">
						
										
							<form action="edit_in_db.php" method="post" id="editForm" name="form-edit" onsubmit="return confirm('.$confirmation.');"> 
							
							<div class="row add-form-container">
								<div class="col-md-7 offset-md-1">
								
									<b>Tytuł oferty:</b><br /> 
									<input class="text-title" type="text" name="text_title" value="'.$old_name.'" maxlength="30" required/><br />
									<em>Maks. znaków: 30</em><br />				
									<br /><b>Opis:</b><br />
									<textarea class="text-area" name="description" form="editForm" maxlength="160" required>'.$old_desc.'</textarea>
									<em>Maks. znaków: 160</em><br />				
								
								</div>	
								
								<div class="col-md-4 mobile-sep">
									<b>Kod promocji:</b><br /> 
									<input type="text" name="promo_code" class="text-code" value="'.$old_code.'" maxlength="8" required/><br />
									<em>Maks. znaków: 8</em><br />	
									
									<br />
									<b>Obrazek:</b><br />
									<select name="selected_img">
										<option value="" disabled selected hidden>WYBIERZ </option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
									<br /> <br /> 
									<input type="hidden" name="id" value="'.$offer_id.'" required/>
									<div class="add-button-container"><input type="submit" value="EDYTUJ" class="add-button"/></div> 
								</div>
								
							</div>	
							</form>
							
										
						</div>		

						
				';



						require( dirname( __FILE__ ) . '/image_gallery.php' );



				echo '</div></div>';
				
			}
					
					} else {
						$polaczenie->close();
						header('Location: error.php');
		}
	}
	$polaczenie->close();
?>





