<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$qry = mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
	$conn = mysqli_fetch_array($qry);
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah Data</title>
 </head>
 <body>
 	<form method="post">
 		<input type="number" name="id" value="<?php echo $users['id'] ?>">
 		<br>
 		<input type="text" name="username" value="<?php echo $users['username'] ?>">
 		<br>
 		<input type="password" name="password" value="<?php echo $users['password'] ?>">
 		<br>
 		<select name="level">
 			<option>Admin</option>
 			<option>User</option>
 			<option>Guest</option>
 		</select>
 		<br>	
 		<input type="text" name="fullname" value="<?php echo $users['fullname'] ?>">
 		<br>
 		<input type="submit" name="edit" value="Edit">
 	</form>
 	<?php 
 		if (isset($_POST['edit'])) {
 			$id = $_POST['id'];
 			$username = $_POST['username'];
 			$password = $_POST['password'];
 			$level = $_POST['level'];
 			$fullname = $_POST['fullname'];
 			$tambah = mysqli_query($conn, "UPDATE users SET id='$id',username='$username',password='$password',level='$level',fullname='$fullname' WHERE id='$id'");
 		if ($tambah) {
 			?>
 			<script type="text/javascript">
 				alert('Tamabah Data Berhasil');
 				document.location.href="index.php";
 			</script>
 			<?php
 		}
 		else{
 			echo "Ooops Gagal";
 		}
 		}
 	 ?>
 </body>
</html>