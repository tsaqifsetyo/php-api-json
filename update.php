<!DOCTYPE html>
<html>
<head>
	<title>Tsaqif Setyo Abdulhaqqi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section id="input-form">
	<form action="edit.php" method="GET">
	<h1 class="judul">Ubah Data</h1>
        <form method="GET" action="index.php">
            <div class="form">
                <label>ID</label>
                <input type="text" name="id">
            </div>
            <div class="form">
                <label>USERNAME</label>
                <input type="text" name="username">
            </div>
            <div class="form">
                <label>PASSWORD</label>
                <input type="password" name="password">
			</div>
			<div class="form">
                <label>LEVEL</label>
                <input type="text" name="level">
            </div>
			<div class="form">
                <label>FULLNAME</label>
                <input type="text" name="fullname">
			</div>
			<div>
                <input type="submit" name="submit" value="SUBMIT" class="bg-blue">
            </div>
        </form>
         <?php
                if (isset($_POST['simpan'])) 
                {
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];
                    $fullname = $_POST['fullname'];
                    $tambah = mysqli_query($koneksi, "INSERT INTO users(id,username,password,level,fullname)VALUES('$id','$username','$password','$level','$fullname')");
                    if($tambah)
                    {
                        ?>
                        <script type="text/javascript">
                            alert('Tambah Berhasil ');
                            document.location.href="index.php";
                        </script>
                        <?php
                    }
                    else
                    {
                        echo "Tidak Berhasil";
                    }
                }
            ?>
    </section>
</body>
</html>
