<!-- Dila Ayu Prastita
121140075
Pemrograman Web RC -->

<?php 

if (isset($_GET['id'])) {
	include "database.php";
	$id = $_GET['id'];

	$sql = "DELETE FROM user_data 
	        WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		$ms = "successfully deleted";
		header("Location:read.php?ms=$ms");
	    exit;
	}else {
		$ms = "Unknown error occurred";
		header("Location:read.php?ms=$ms");
	    exit;
	}
}else {
	header("Location:read.php");
	exit;
}