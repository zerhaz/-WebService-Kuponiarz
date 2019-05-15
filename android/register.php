<?php 
	if (isset($_POST["Token"])) {
		
		   $_uv_Token=$_POST["Token"];
		   $conn = mysqli_connect("localhost","login","password","db name") or die("Error connecting"); //TODO database autorization (admin login, password, db name)
		   $q="INSERT INTO app_users (Token) VALUES ( '$_uv_Token') "
              ." ON DUPLICATE KEY UPDATE Token = '$_uv_Token';";
              
      mysqli_query($conn,$q) or die(mysqli_error($conn));
      mysqli_close($conn);
	}
 ?>