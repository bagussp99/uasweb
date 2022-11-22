<?php 

require 'function.php';

$ambildtkonsul = query("SELECT * FROM konsul");


?>


<!DOCTYPE html>
<html>
<head>
	<title>BIRO PSIKOLOGI PUTRA TUNGGAL</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<div class="container">
		
		<div class="header">
			<img alt="logo" src="img/logo.png" height="150" width="150" align="right" />
			<h1 class="judul"> Selamat Datang</h1>
			<h1 class="judulb"> Biro Psikologi Putra Tunggal</h1>
			<ul>
				<li><a href="index.html"><img alt="logo" src="img/icon/browser.png" width="15" /> Home</a></li>
				<li><a href="psikolog.php"><img alt="logo" src="img/icon/consulting.png" width="15" /> Psikolog</a></li>
				<li><a href="tentangkami.html"> <img alt="logo" src="img/icon/question.png" width="15" />Tentang Kami</a></li>
				<li><a href="kontak.html"> <img alt="logo" src="img/icon/contact.png" width="15" />Kontak</a></li>
				<li><a href="buatjanji.php"><img alt="logo" src="img/icon/register.png" width="15" />Buat Janji</a></li>
				<li><a href="listjanji.php"><img alt="logo" src="img/icon/list.png" width="15" /> List Daftar Janji</a></li>
			</ul>

		<div class="hero"></div>

		<div class="conten">
			
			<h2>Daftar Janji Konsultasi</h2>

			<div class="table-wrapper">
				<table class="fl-table">
					<thead>
					<tr>
						<th>Nomor</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Konsultasi</th>
						<th>Tanggal Konsul</th>
					</tr>
					</thead>



				<?php $i = 1; ?>
				<?php foreach ($ambildtkonsul as $row): ?>

				<tr class="isi">
					<td><?php echo $i; ?></td>
					<td><?php echo $row["nama"] ?></td>
					<td><?php echo $row["jk"] ?></td>
					<td><?php echo $row["konsul"] ?></td>
					<td><?php echo $row["tgl"] ?></td>
				</tr>

				<?php $i++; ?>
				<?php endforeach; ?>

			</table>
			<!–-divtablewrape-–>
			</div>
			
		</div>

		<div class="footer">
			<p class="copy"> Copyright@ 2020. Kelompok 8</p>
		</div>


	</div>



</body>
</html>