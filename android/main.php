<?php

	require( dirname( __FILE__ ) . '/head.php' );
	require( dirname( __FILE__ ) . '../../load_javascript.php' );

	require_once "../connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	mysqli_query($polaczenie,"SET NAMES 'utf8'");
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$wynik = mysqli_query($polaczenie,"SELECT * FROM oferta") or die('Błąd połączenia z bazą danych. Spróbuj ponownie'); 
		
		if(mysqli_num_rows($wynik) > 0) {
			
		
			echo '
			<!DOCTYPE html>
			<html lang="pl">
			
				<body>
					<section>


						<div class="container">
				
							<div class="row element-row">
			
			';	
			
			while($r = mysqli_fetch_assoc($wynik)) {
				
				
				echo '
				
								<div class="col-xs-12 single-element">
								
									<h4>'.$r["nazwa"].'</h4>
									<img src="../web-img/300x300/img'.$r["img"].'.jpg" alt="Obrazek" class="android-img" />
									<p>KOD: <b>'.$r["kod"].'</b></p>
									<button class="accordion"><em>SZCZEGÓŁY</em></button>
									<div class="panel">
									  <p>'.$r["info"].'</p>
									</div>
								
								
								</div>
				';					

			}
							
			echo '				
							</div>
							

						</div>
						
					<script>
						var acc = document.getElementsByClassName("accordion");
						var i;

						for (i = 0; i < acc.length; i++) {
						  acc[i].addEventListener("click", function() {
							this.classList.toggle("active");
							var panel = this.nextElementSibling;
							if (panel.style.maxHeight){
							  panel.style.maxHeight = null;
							} else {
							  panel.style.maxHeight = panel.scrollHeight + "px";
							} 
						  });
						}
					</script>

					</section>
				</body>
			</html>
			';
		
		}
	}
	$polaczenie->close();
?>



	
		

