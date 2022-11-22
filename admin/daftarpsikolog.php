<?php 

session_start();

if ( !isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}

require '../function.php';


if (isset($_POST["register"])) {
	
	
	if (simpanpsikolog($_POST) > 0 ) {
		echo "
			 <script> 
				alert('Data Baru Berhasil Di Tambah');
				document.location.href = 'index.php';
			 </script>";
	}	else {
		echo mysqli_error($koneksi);
		echo "<script>
			  alert('Gagal ditambahkan');
			  </script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Daftar Psikolog</title>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
	<div class="form">
		<form action="" method="POST" enctype="multipart/form-data">
		<h1 align="center">Daftar Psikolog</h1>

		<label for="foto">Foto</label>
		<input type="file" name="foto" id="foto" required="" class="forminput" autocomplete="off">

		<label for="nama">Nama</label>
		<input type="text" name="nama" id="nama" required="" class="forminput" placeholder="Masukan nama Anda" autocomplete="off">

		<label for="jabatan">Jabatan</label>
		<input type="text" name="jabatan" id="jabatan" required="" class="forminput" placeholder="Masukan jabatan Anda" autocomplete="off">

		<input type="submit" name="register" value="Daftar" class="tombolsubmit">
	</form>
	</div>
</body>
</html>