<!-- Dila Ayu Prastita
121140075
Pemrograman Web RC -->

<?php 

if (isset($_POST['name']) &&
	isset($_POST['nim'])) {

	include "database.php";

	$name = $_POST['name'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $aggre = $_POST['aggree'];


	if (empty($name)) {
		header("Location: form.php?ms=Name is required");
	    exit;
    } else if (empty($nim)) {
		header("Location: form.php?ms=Nim is required");
	    exit; 
    } else if (empty($prodi)) {
		header("Location: form.php?ms=Prodi is required");
	    exit; 
    } else if (empty($email)) {
		header("Location: form.php?ms=Email is required");
	    exit; 
    } else if (empty($gender)) {
		header("Location: form.php?ms=Gender is required");
	    exit; 
	}else {
		if (isset($_POST['aggree'])) {
			$aggree = "Ya, ini benar data diri saya";
		}else {
			$aggree = "Tidak, bukan data diri saya";
		}
        $sql = "INSERT INTO user_data(name, nim, prodi, email, gender, aggree)
                VALUES('$name', '$nim', '$prodi', '$email', '$gender', '$aggree')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
        	$ms = "Successfully created";
        	header("Location:form.php?ms=$ms");
	        exit;
        }else {
        	$ms = "Unknown error occurred";
        	header("Location: form.php?ms=$ms");
	        exit;
        }
	}

}else {
	header("Location: form.php");
	exit;
}