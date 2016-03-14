

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$email=$_POST['email'];
$user_password = $_POST['password'];
$date = date('Y/m/d');
include 'db.php';
$insert_query = "INSERT INTO registration (user_name, user_surname, user_email, user_reg_date, user_last_log, user_password) VALUES ( '$ad', '$soyad', '$email','$date','$date','$user_password');";
if($conn->query($insert_query))
	{echo "Tebrikler siz registrasiyadan ugurla kecdiniz!<br>";
		echo "<a href = 'admin_page.php'>Hesabima kec</a><br>";
}
else 
	echo "Xeta bash verdi<br>";
	echo "<a href = 'index.php'>Login sehifesine qayit</a>";
	
 ?>