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
		
		<?php require( dirname( __FILE__ ) . '/get_all_from_db.php' );?>
	</div>
	
	
	<?php require( dirname( __FILE__ ) . '/footer.php' );?>
	
	<?php require( dirname( __FILE__ ) . '/load_javascript.php' );?>
	
</body>

</html>