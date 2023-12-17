<!-- Dila Ayu Prastita
121140075
Pemrograman Web RC -->

<?php 

if (isset($fakeTok) && $fakeTok = "562random") {
	include "database.php";

	$sql = "SELECT * FROM user_data ORDER BY id DESC";
	$result = mysqli_query($conn, $sql);
}else {
	echo "404!";
	exit;
}