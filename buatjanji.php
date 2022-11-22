<!DOCTYPE html>
<?php 

//ini memanggil file function untuk koneksi
include 'function.php';

//membuat kondisi ketika tombol button simpan di tekan
if (isset($_POST["register"])) {

	if (simpan ($_POST) > 0) {
		echo "

		<script>
			alert('data berhasil di tambahkan');
			document.location.href = 'listjanji.php';
		</script>

		";
	}
	else {
		echo "
		<script>
			alert('data gagal di tambahkan');
			document.location.href = 'tambah.php';
		</script>

		";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buat Janji Pertemuan</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
    <div class="form">
        <form action="" method="POST">
        <h1 align="center">Buat Janji Pertemuan</h1>

        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" required="" class="forminput" placeholder="Masukan Nama Lengkap Anda" autocomplete="off">

        <label for="jk">Jenis Kelamin</label>
        <select name="jk" id="jk" class="forminput">
            <option disabled="disabled" selected="selected">Pilih Jenis Kelamin</option>
            <option>L</option>
            <option>P</option>
        </select>

        <label for="nohp">Nomor Handphone</label>
        <input type="text" name="nohp" id="nohp" required="" class="forminput" placeholder="Masukan Nomor Handphone" autocomplete="off">

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" required="" class="forminput" placeholder="Masukan Alamat Anda" autocomplete="off">

        <label for="konsul">Daftar Konsultasi</label>
        <select name="konsul" id="konsul" class="forminput">
            <option disabled="disabled" selected="selected">Pilih Jenis Konsultasi</option>
            <option>Psikologi</option>
            <option>Keluarga</option>
            <option>Tes Psikologi</option>
            <option>Tes Model Belajar yang Tepat</option>
            <option>Tes Penjurusan Sekolah</option>
            <option>Tes Penerimaan Pegawai/Psikotes</option>
            <option>Analisis Jabatan</option>
            <option>Terapi anak berkebutuhan khusus</option>
        </select>

        <label>Tanggal Konsul:</label>
        <input type="date" name="tgl" />

        <input type="submit" name="register" value="Daftar" class="tombolsubmit">
    </form>
    </div>
</body>
</html>