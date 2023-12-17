<!-- Dila Ayu Prastita
121140075
Pemrograman Web RC -->

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uaspemweb";

    $conn  = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	echo "Connection failed!";
}

