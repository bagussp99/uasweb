<?php 

session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

    //ini memanggil file function untuk koneksi
include '../function.php';


$id=$_GET["id"];

$data= query("SELECT * FROM psikolog WHERE id = $id")[0];



//membuat kondisi ketika tombol button simpan di tekan
if (isset($_POST["edit"])) {

    if (ubahpsikolog($_POST) > 0) {
        echo "

        <script>
            alert('data berhasil di edit');
            document.location.href = 'dashboard.php';
        </script>

        ";
    }
    else {
        echo "
        <script>
            alert('data gagal di edit');
            document.location.href = 'dashboard.php';
        </script>

        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Psikolog</title>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
	<div class="form">
		<form action="" method="POST" enctype="multipart/form-data">
		<h1 align="center">Edit Psikolog</h1>

		<input type="hidden" name="id" value="<?php echo $data["id"] ?>">
		<input type="hidden" name="gambarlama" value="<?php echo $data["foto"] ?>">
		<label for="foto">Foto</label>
		<br>
		<img src="../img/foto/<?php echo $data["foto"] ?>" height="100" width="100">
		<input type="file" name="foto" id="foto" class="forminput">

		<label for="nama">Nama</label>
		<input type="text" name="nama" id="nama" required="" class="forminput" value="<?php echo $data["nama"] ?>" autocomplete="off">

		<label for="jabatan">Jabatan</label>
		<input type="text" name="jabatan" id="jabatan" required="" class="forminput" value="<?php echo $data["jabatan"] ?>" autocomplete="off">

		<input type="submit" name="edit" value="Edit" class="tombolsubmit">
	</form>
	</div>
</body>
</html>