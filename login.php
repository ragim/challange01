<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

	include "db.php";
	 $email = $_POST ['email'];
	 $password = $_POST ['password'];

	 $get_user_pass_query = "SELECT user_password FROM registration WHERE user_email='$email';";

	 if($conn->query($get_user_pass_query))
		{
		$response = $conn->query($get_user_pass_query);
		//echo $response;
		}
	$result = $response->fetch_array();
	$db_password = $result['user_password'];
	if($password == $db_password)
		{
			echo "You are logined";
			$date = date('Y/m/d');
			$update_date_query = "UPDATE registration SET user_last_log='$date' WHERE user_email='$email';";
			$conn->query($update_date_query);
			$_SESSION["email"] = $email;
			header('Location: admin_page.php');
		}
	else echo "wrong password or email";

?>