<?php

session_start();

if (!isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}

require '../function.php';


if (isset($_POST["register"])) {

	if (registrasi($_POST) > 0) {
		echo "<script>
			  alert('user baru berhasil ditambahkan');
			  </script>";
		header("Location: index.php");
	} else {
		echo mysqli_error($koneksi);
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Halaman Daftar Admin</title>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>

<body>
	<div class="form">
		<form action="" method="POST">
			<h1 align="center">Daftar Akun Admin</h1>

			<label for="nama">Nama Lengkap</label>
			<input type="text" name="nama" id="nama" required="" class="forminput" placeholder="Masukan Nama Lengkap Anda" autocomplete="off" value="<?php echo @$_SESSION['nama']; ?>">

			<label for="username">Username</label>
			<input type="text" name="username" id="username" required="" class="forminput" placeholder="Masukan username Anda" autocomplete="off" value="<?php echo @$_SESSION['username']; ?>">

			<label for="password">Password</label>
			<input type="password" name="password" id="password" required="" class="forminput" placeholder="Masukan password Anda" autocomplete="off" value="<?php echo @$_SESSION['password']; ?>">
			<label for="password2">Konfirmasi Password</label>
			<input type="password" name="password2" id="password2" required="" class="forminput" placeholder="Masukan password yang sama" autocomplete="off" value="<?php echo @$_SESSION['password2']; ?>">

			<label for="jk">Jenis Kelamin</label>
			<select name="jk" id="jk" class="forminput" value="<?php echo @$_SESSION['jk']; ?>">
				<option disabled="disabled" selected="selected">Pilih Jenis Kelamin</option>
				<option>L</option>
				<option>P</option>
			</select>

			<label for="nohp">Nomor Handphone</label>
			<input type="text" name="nohp" id="nohp" required="" class="forminput" placeholder="Masukan Nomor Handphone" autocomplete="off" value="<?php echo @$_SESSION['nohp']; ?>">

			<input type="submit" name="register" value="Daftar" class="tombolsubmit">
		</form>
	</div>
</body>

</html>