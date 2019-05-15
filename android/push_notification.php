<?php 
	$msg_text = $_POST['msgTXT'];
	$title_text = $_POST['titleTXT'];
	
	function send_notification ($tokens, $message)
	{
		$url = 'https://fcm.googleapis.com/fcm/send';
		$fields = array(
			 'registration_ids' => $tokens,
			 'data' => $message
			);
		$headers = array(
			'Authorization:key = ', //TODO FCM autorization key
			'Content-Type: application/json'
			);
	   $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_POST, true);
       curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
       $result = curl_exec($ch);    
       if ($result === FALSE) {
           die('Curl failed: ' . curl_error($ch));
       }
       curl_close($ch);
       return $result;
	}
	
	$conn = mysqli_connect("localhost","login","password","db name"); //TODO database autorization (admin login, password, db name)
	$sql = " Select Token From app_users";
	$result = mysqli_query($conn,$sql);
	
	if($result) {
		$tokens = array();
		if(mysqli_num_rows($result) > 0 ){
			while ($row = mysqli_fetch_assoc($result)) {
				$tokens[] = $row["Token"];
			}
		} 
		mysqli_close($conn);
		$message = array("message" => $msg_text, "title" => $title_text, "data" => '{"my_custom_key": "my_custom_value","my_custom_key2": true}');
		$message_status = send_notification($tokens, $message);
		header('Location: ../success.php');
		
	} else {
		mysqli_close($conn);
		header('Location: ../error.php');	
	}	
	
 ?>