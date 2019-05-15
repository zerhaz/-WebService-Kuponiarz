<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>

<!DOCTYPE html>
<html lang="pl">

<?php

require( dirname( __FILE__ ) . '/head.php' );

?>

<body>
	<div id="main-container">
		<?php require( dirname( __FILE__ ) . '/header.php' );?>
		
		<div class="row element-row">

			<div class="col-xl-12 single-element center">
			
			<h2>SUKCES!</h2>
			
			<p>Zlecone żądanie zostało zakończone pozytywnie.</p>
			
			<div class="add-button-container"><a href="service.php" class="add-button a-button">POWRÓT</a></div>
				
			</div>
				
		</div>
	</div>
	
	
	<?php require( dirname( __FILE__ ) . '/footer.php' );?>
	
	<?php require( dirname( __FILE__ ) . '/load_javascript.php' );?>
	
</body>

</html>