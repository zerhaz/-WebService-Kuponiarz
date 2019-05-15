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
		
		
		<section>

			<div id="login-container" class="container">
			
				<div class="row">
				
					<div id="login-form" class="col-xs-12">

						<form action="../android/push_notification.php" name="login-form" method="post" onsubmit="return confirm('Czy na pewno chcesz wysłać powiadomienie PUSH?');">
						
							<b>Tytuł wiadomości:</b> <br /><input class="push-text" type="text" name="titleTXT" maxlength="20" required/><br />
							<em>Maks. 20 znaków</em><br />
						
							<div style="height: 40px;"></div>
						
							<b>Treść wiadomości:</b> <br /><input class="push-text" type="text" name="msgTXT" maxlength="35" required/><br />
							<em>Maks. 35 znaków</em><br />
						
							<div class="add-button-container"><input type="submit" value="Wyślij" class="add-button"/></div>
						
						</form>
						
					
					</div>

				</div>

			</div>

		</section>
		
		
		
		
		
		
		
		
	</div>
	
	
	<?php require( dirname( __FILE__ ) . '/footer.php' );?>
	
	<?php require( dirname( __FILE__ ) . '/load_javascript.php' );?>
	
</body>

</html>