<?php 
session_start();

if ( !isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}

require '../function.php';

$ambildtkonsul = query("SELECT * FROM konsul");
$ambildtadm = query("SELECT * FROM user");
$ambildtpsikolog = query("SELECT * FROM psikolog");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>BIRO PSIKOLOGI PUTRA TUNGGAL</title>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
	<div class="container">
		
		<div class="headerdas">
			<h1 class="judulb">Biro Psikologi Putra Tunggal</h1>
			<h1 class="judulb">Admin Dashboard </h1>

		</div>

		<div class="conten">
			<h1>Selamat Datang Admin  <?=@$_SESSION["namaadm"];?> </h1>

			<a href="logout.php" class="lgt">Logout</a>


			<h2>Daftar Janji Konsultasi</h2>

			<div class="table-wrapper">
				<table class="fl-table">
					<thead>
					<tr>
						<th>Nomor</th>
						<th>Aksi</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>NO HP</th>
						<th>Alamat</th>
						<th>Konsultasi</th>
						<th>Tanggal Konsul</th>
					</tr>
					</thead>



				<?php $i = 1; ?>
				<?php foreach ($ambildtkonsul as $row): ?>

				<tr class="isi">
					<td><?php echo $i; ?></td>
					<td>
						<a href="editkonsul.php?id=<?php echo $row["id"]; ?>" class="edit">EDIT |</a>
						<a href="hapus.php?id=<?php echo $row["id"] ?>" onclick = "return confirm('Anda Yakin Ingin Menghapus ini?');" class="hapus">HAPUS</a> 
					</td>
					<td><?php echo $row["nama"] ?></td>
					<td><?php echo $row["jk"] ?></td>
					<td><?php echo $row["nohp"] ?></td>
					<td><?php echo $row["alamat"] ?></td>
					<td><?php echo $row["konsul"] ?></td>
					<td><?php echo $row["tgl"] ?></td>
				</tr>

				<?php $i++; ?>
				<?php endforeach; ?>

			</table>
			<!–-divtablewrape-–>
			</div>
		
		<h2>Daftar Admin</h2>

			<div class="table-wrap">

				<table class="fl-table">
				<thead>
				<tr>
					<th>Nomor</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Jenis Kelamin</th>
					<th>NO HP</th>
				</tr>
				</thead>



			<?php $i = 1; ?>
			<?php foreach ($ambildtadm as $row): ?>

			<tr class="isi">
				<td><?php echo $i; ?></td>
				<td><?php echo $row["nama"] ?></td>
				<td><?php echo $row["username"] ?></td>
				<td><?php echo $row["jk"] ?></td>
				<td><?php echo $row["nohp"] ?></td>
			</tr>

			<?php $i++; ?>
			<?php endforeach; ?>

			</table>
			<a href="daftar.php" class="adm">Tambah Admin</a>
			<!–-divtablewrape-–>
		</div>


		<h2>Daftar Psikolog</h2>

			<div class="table-wrapper">

				<table class="fl-table">
				<thead>
				<tr>
					<th>Nomor</th>
					<th>Aksi</th>
					<th>Foto</th>
					<th>Nama</th>
					<th>Jabatan</th>
				</tr>
				</thead>



			<?php $i = 1; ?>
			<?php foreach ($ambildtpsikolog as $row): ?>

			<tr class="isi">
				<td><?php echo $i; ?></td>
				<td>
						<a href="editpsikolog.php?id=<?php echo $row["id"]; ?>" class="edit">EDIT |</a>
						<a href="hapuspsikolog.php?id=<?php echo $row["id"] ?>" onclick = "return confirm('Anda Yakin Ingin Menghapus ini?');" class="hapus">HAPUS</a> 
				</td>
				<td> <img src="../img/foto/<?php echo $row["foto"]; ?>" width="80" height="80" ></td>
				<td><?php echo $row["nama"] ?></td>
				<td><?php echo $row["jabatan"] ?></td>
			</tr>

			<?php $i++; ?>
			<?php endforeach; ?>

			</table>
			<a href="daftarpsikolog.php" class="adm">Tambah Psikolog</a>
			<!–-divtablewrape-–>
		</div>

		<!–-divconten-–>
		</div> 

		<div class="footer">
			<p class="copy"> Copyright@ 2020. Kelompok 8</p>
		</div>


	</div>



</body>
</html>