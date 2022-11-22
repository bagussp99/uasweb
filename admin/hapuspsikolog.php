<?php 

session_start();

if ( !isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}

include '../function.php';

$id = $_GET["id"];


if (hapuspsikolog ($id)) {
	echo "

		<script>
			alert('Data Berhasil di Hapus');
			document.location.href = 'dashboard.php';
		</script>

		";
}else {

	echo "

		<script>
			alert('Data Gagal di Hapus');
			document.location.href = 'dashboard.php';
		</script>

		";
}

 ?>