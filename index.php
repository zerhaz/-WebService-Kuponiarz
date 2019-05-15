<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: service.php');
		exit();
	}

?>

<!DOCTYPE html>
<html lang="pl">

<?php

require( dirname( __FILE__ ) . '/head.php' );

?>

<body>

<section>

	<div id="login-container" class="container">
	
		<div class="row">
		
			<div id="login-logo" class="col-xs-12">

				<a href="index.php"><img src="web-img/main-logo.png" alt="logo" width=300 /></a>
			
			</div>

		</div>
		
		<div class="row">
		
			<div id="login-title" class="col-xs-12 center">

				<b>PANEL ZARZĄDZANIA APLIKACJĄ MOBILNĄ</b>
			
			</div>

		</div>
	
		<div class="row">
		
			<div id="login-form" class="col-xs-12">

				<form action="login.php" method="post">
				
					Login: <br /> <input type="text" name="login" /> <br />
				
					Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
					<div class="add-button-container"><input type="submit" value="Zaloguj się" class="add-button"/></div>
				
				</form>
				
				<?php
					if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
				?>
			
			</div>

		</div>

	</div>

</section>


	<?php require( dirname( __FILE__ ) . '/footer.php' );?>
	
	<?php require( dirname( __FILE__ ) . '/load_javascript.php' );?>

</body>

</html>