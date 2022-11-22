<?php 

session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

    //ini memanggil file function untuk koneksi
include '../function.php';

$id=$_GET["id"];

$data= query("SELECT * FROM konsul WHERE id = $id")[0];



//membuat kondisi ketika tombol button simpan di tekan
if (isset($_POST["edit"])) {

    if (ubah($_POST) > 0) {
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
    <title>Halaman Daftar</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
    <div class="form">
        <form action="" method="POST">
            <h1 align="center">Daftar Akun</h1>

            <!--manggil id-->
            <input type="hidden" name="id" value="<?php echo $data["id"] ?>">

            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" required="" class="forminput" value="<?php echo $data["nama"] ?>" autocomplete="off">

            <label for="jk">Jenis Kelamin</label>
            <select name="jk" id="jk" class="forminput">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L"<?php if ($data["jk"] == "L") {echo "selected"; }?> >L</option>
                <option value="P"<?php if ($data["jk"] == "P") {echo "selected"; }?> >P</option>
            </select>

            <label for="nohp">Nomor Handphone</label>
            <input type="text" name="nohp" id="nohp" required="" class="forminput" value="<?php echo $data["nohp"] ?>" autocomplete="off">

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" required="" class="forminput" value="<?php echo $data["alamat"] ?>" autocomplete="off">

            <label for="konsul">Daftar Konsultasi</label>
            <select name="konsul" id="konsul" class="forminput" >
                <option value="">Pilih Jenis Konsultasi</option>

                <option value="Psikologi" <?php if ($data["konsul"] == "Psikologi") {echo "selected"; }?> >Psikologi
                </option>

                <option value="Keluarga" <?php if ($data["konsul"] == "Keluarga") {echo "selected"; }?> >Keluarga
                </option>

                <option value="Tes Psikologi" <?php if ($data["konsul"] == "Tes Psikologi") {echo "selected"; }?> >Tes Psikologi
                </option>

                <option value="Tes Model Belajar yang Tepat" <?php if ($data["konsul"] == "Tes Model Belajar yang Tepat") {echo "selected"; }?> >Tes Model Belajar yang Tepat
                </option>

                <option value="Tes Penjurusan Sekolah" <?php if ($data["konsul"] == "Tes Penjurusan Sekolah") {echo "selected"; }?> >Tes Penjurusan Sekolah
                </option>

                <option value="Tes Penerimaan Pegawai/Psikotes" <?php if ($data["konsul"] == "Tes Penerimaan Pegawai/Psikotes") {echo "selected"; }?> >Tes Penerimaan Pegawai/Psikotes
                </option>

                <option value="Analisis Jabatan" <?php if ($data["konsul"] == "Analisis Jabatan") {echo "selected"; }?> >Analisis Jabatan
                </option>

                <option value="Terapi anak berkebutuhan khusus" <?php if ($data["konsul"] == "Terapi anak berkebutuhan khusus") {echo "selected"; }?> >Terapi anak berkebutuhan khusus
                </option>

            </select>

            <label>Tanggal Konsul:</label>
            <input type="date" name="tgl" id="tgl" value="<?php echo $data["tgl"] ?>" />

            <input type="submit" name="edit" value="edit" class="tomboledit">
            <input type="button" name="kembali" value="Kembali" class="tombol2" onclick="history.back()">
        </form>
    </div>
</body>
</html>