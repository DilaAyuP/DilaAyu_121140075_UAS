<!-- Dila Ayu Prastita
121140075
Pemrograman Web RC -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client-side Programming</title>
    <link rel="stylesheet" href="clientside.css">
</head>
<body>
    <header class="header">
        <div class="judul">
            <h1> UAS PEMROGRAMAN WEB </h1>
        </div>
    </header>

    <div class="content">
        <div class="kotak">
            <h1>Formulir Data</h1>

            <form action="create.php" method="post">
                <fieldset>
                    <legend>Create: </legend>
                    <br />
                    <mark>
                        <?php if (isset($_GET['ms'])) {
                            echo $_GET['ms'];
                        } ?>
                    </mark>

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
        </div>
    </div>
    <footer>
        &copy; Hak Cipta 2023 - Dila Ayu Prastita
    </footer>
</body>


    