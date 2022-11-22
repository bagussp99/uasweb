<?php 

require 'function.php';

$ambildtpsikolog = query("SELECT * FROM psikolog");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Psikolog</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<div class="container">
		
		<div class="header">
			<img alt="logo" src="img/logo.png" height="100" width="100" align="right" />
			<h1 class="judul"> Psikolog</h1>
			<ul>
				<li><a href="index.html"><img alt="logo" src="img/icon/browser.png" width="15" /> Home</a></li>
				<li><a href="psikolog.php"><img alt="logo" src="img/icon/consulting.png" width="15" /> Psikolog</a></li>
				<li><a href="tentangkami.html"> <img alt="logo" src="img/icon/question.png" width="15" />Tentang Kami</a></li>
				<li><a href="kontak.html"> <img alt="logo" src="img/icon/contact.png" width="15" />Kontak</a></li>
				<li><a href="buatjanji.php"><img alt="logo" src="img/icon/register.png" width="15" />Buat Janji</a></li>
				<li><a href="listjanji.php"><img alt="logo" src="img/icon/list.png" width="15" /> List Daftar Janji</a></li>
			</ul>
		</div>

		<div class="hl"></div>

		<div class="conten">
			<h3 align="center">Daftar Psikolog</h3>
	<table align="center" border="0">
		<?php foreach ($ambildtpsikolog as $row):  ?>
	<tr>
		<td><img src="img/foto/<?php echo $row["foto"]; ?>" height="200" width="200" > </td>
		<td> Nama : <?php echo $row["nama"] ?>
		<br>
			Pekerjaan Sebagai : <?php echo $row["jabatan"] ?></td>
	</tr>
		<?php endforeach; ?>
	</table>
		</div>

		<div class="footer">
			<p class="copy"> Copyright@ 2020. Kelompok 8</p>
		</div>


	</div>



</body>
</html>