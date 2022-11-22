<?php 
session_start();


//cek cookie
if (isset($_COOKIE['login']) ) {
	if ( $_COOKIE['login'] == 'true') {
		$_SESSION['login'] == true;
	}

//tendang yg udah login ke dashboard
if (isset($_SESSION["login"])) {
	header("Location: dashboard.php");
	exit;
}

require '../function.php';

if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];
	

	$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

	//cek username
	if (mysqli_num_rows($result) === 1) {
		
		//cek passwrd
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ){

		//set sesion
			$_SESSION["login"] = true;
			$_SESSION["namaadm"]= $row["nama"];

			//set cookie
			if (isset($_POST['remember'])) {
				//buat cookie
				setcookie('login','true',time() + 60 );

			}


			header("Location: dashboard.php ");
			exit;

		}

	}

	$error = true;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>

	<link rel="stylesheet" type="text/css" href="../CSS/style.css">


</head>
<body>
	<div class="form">
		<form action="" method="POST">
		<h1 align="center">Login Admin</h1>


<?php if(isset($error)) : ?>
		<p style="color: red; font-style: italic;">Username / Password Salah</p>
<?php endif; ?>


		<label for="username">Username</label>
		<input type="text" name="username" id="username" required="" class="forminput" placeholder="Masukan username Anda" autocomplete="off">

		<label for="password">Password</label>
		<input type="password" name="password" id="password" required="" class="forminput" placeholder="Masukan password Anda" autocomplete="off">

		<input type="checkbox" name="remember" id="remember">
		<label for="remember">remember me</label>

		<input type="submit" name="login" value="Login" class="tombolsubmit">
	</form>
	</div>
</body>
</html>