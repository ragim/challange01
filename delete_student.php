<?php 
	include "db.php";
	$id = $_GET ['id'];
	$delete_query = "DELETE FROM registration WHERE id='$id'";
	$conn->query($delete_query);
	header('Location: admin_page.php');
?>