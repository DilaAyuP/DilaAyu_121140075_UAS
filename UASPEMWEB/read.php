<!-- Dila Ayu Prastita
121140075
Pemrograman Web RC -->

<?php 
$fakeTok = "562random";
include "read2.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data dari Server</title>
	<style>
		table, tr, th, td {
			border: 1px solid #0b1b70;
			border-collapse: collapse;
			padding: 5px;

		}
		th {background: rgb(146, 203, 217)}
		table {
			margin: 10px;
			width: 100%;
		}
	</style>
	<link rel="stylesheet" href="clientside.css">
</head>
<body>
	<?php if(mysqli_num_rows($result)){ ?>
		<br />
		<mark>
			<?php if (isset($_GET['ms'])) {
				echo $_GET['ms'];
			} ?>
		</mark>
	<table>
        <tr>
            <th>#</th>
            <th>Nama Lengkap</th>
            <th>Nim</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Persetujuan</th>
        </tr>
		<?php 
            $i = 0;
            while ($user_data = mysqli_fetch_assoc($result)) {
            $i++;
		 ?>
		<tr>
           <td><?=$i?></td>
           <td><?=$user_data['name']?></td>
           <td><?=$user_data['nim']?></td>
           <td><?=$user_data['prodi']?></td>
           <td><?=$user_data['email']?></td>
           <td><?=$user_data['gender']?></td>
           <td><?=$user_data['aggree']?></td>
           <td>
           	   <a href="update.php?id=<?=$user_data['id']?>">Edit</a>
           	   <a href="delete.php?id=<?=$user_data['id']?>">Delete</a>
           </td>	
		</tr>
	<?php } ?>
	</table><br />
	<a href="form.php">Create</a>
<?php }else{ ?>
	<h1>Empty!</h1>
	<a href="form.php">Create</a>
<?php } ?>
</body>
</html>