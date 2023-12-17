<!-- Dila Ayu Prastita
121140075
Pemrograman Web RC -->

<?php 

if (isset($_POST['name']) &&
	isset($_POST['nim'])&&
    isset($_POST['id'])) {

	include "database.php";

	$name = $_POST['name'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $aggre = $_POST['aggree'];
	$id = $_POST['id'];

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
			$aggree = "Ya, ini data diri saya";
		}else {
			$aggree = "Tidak, bukan data diri saya";
		}

        $sql = "UPDATE user_data
                SET name='$name', nim='$nim', prodi='$prodi', email='$email', 'gender='$gender', aggree='$aggree'
                WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
        	$ms = "Successfully Updated";
        	header("Location: update.php?ms=$ms&id=$id");
	        exit;
        }else {
        	$ms = "Unknown error occurred";
        	header("Location: update.php?ms=$ms&id=$id");
	        exit;
        }

	}
}else {
	header("Location: read.php");
	exit;
}