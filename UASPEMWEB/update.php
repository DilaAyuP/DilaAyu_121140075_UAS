<!-- Dila Ayu Prastita
121140075
Pemrograman Web RC -->

<?php 
    if (isset($_GET['id'])) {
    	$id = $_GET['id'];

    	$fakeTok = "562random";
        include "read2.php";

        if (mysqli_num_rows($result) > 0) {
        	$user = mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>update</title>
    <link rel="stylesheet" href="clientside.css">
</head>
<body>
	<form action="update2.php" method="post">
		<fieldset>
			<legend>Edit:</legend>
			<br />
			<mark>
				<?php if (isset($_GET['ms'])) {
					echo $_GET['ms'];
				} ?>
			</mark>
			<div>
                <label for="name"> Nama Lengkap : </label><br>
                <input type="text"  id="name" name="name" required><br>
                <span class="error" id="namaError"></span><br>
                
                <label for="nim"> NIM : </label><br>
                <input type="text"  id="nim" name="nim" required><br>
                <span class="error" id="nimError"></span><br>
                
                <label for="prodi"> Program Studi : </label><br>
                <input type="text"  id="prodi" name="prodi"><br><br>
                
                <label for="email"> Email : </label><br>
                <input type="email" id="email" name="email" required><br><br>
                
                <label> Jenis Kelamin : </label><br>
                <input type="radio" id="laki" name="gender" value="Laki-Laki"> Laki-Laki <br>
                <input type="radio" id="perempuan"  name="gender" value="Perempuan"> Perempuan <br><br>
                

                <label for="aggree">Saya mengisi data diri di atas dengan benar adanya:</label><br>
                <input type="checkbox" id="aggree" name="aggree"> Ya, ini benar data diri saya<br>
                <input type="checkbox" id="aggree" name="aggree"> Tidak, bukan data diri saya<br>
                <br> <br>

                <button><a href="create.php" >Buat</a></button>
                <button><a href="read.php">Lihat</a> </button>
		</fieldset>
	</form>
</body>
</html>

<?php 
	}else {
	    header("Location: read.php");
	    exit;
	} 

}else {
    header("Location: read.php");
    exit;
} 
?>