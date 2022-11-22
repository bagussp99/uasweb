<?php 

$koneksi = mysqli_connect("localhost","root","","db_psikolog");

function query($query){
	global $koneksi;
	$res = mysqli_query($koneksi, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($res)){
		$rows[] = $row;
	}
	return $rows;
}

function simpan($data){
	global $koneksi;

	$nama = htmlspecialchars($data["nama"]);  
	$jk = htmlspecialchars($data["jk"]);
	$nohp = htmlspecialchars($data["nohp"]);
	$alamat = htmlspecialchars($data["alamat"]); 
	$konsul = htmlspecialchars($data["konsul"]); 
	$tgl = htmlspecialchars($data["tgl"]); 
	

	$query = "INSERT INTO konsul values ('id','$nama','$jk','$nohp','$alamat', '$konsul', '$tgl')";

	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
}

function hapus($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM konsul where id = $id");


	return mysqli_affected_rows($koneksi);
}

function ubah($data){
	global $koneksi;
	$id = $data["id"];
	$Nama = htmlspecialchars($data["nama"]);  
	$Jk = htmlspecialchars($data["jk"]);
	$Nohp = htmlspecialchars($data["nohp"]);
	$Alamat = htmlspecialchars($data["alamat"]); 
	$Konsul = htmlspecialchars($data["konsul"]); 
	$Tgl = htmlspecialchars($data["tgl"]); 

	$query = "UPDATE konsul SET nama = '$Nama', jk = '$Jk', nohp = '$Nohp', alamat = '$Alamat', konsul = '$Konsul', tgl = '$Tgl' WHERE id = $id ";

	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}
 
//Untuk Registrasi

function registrasi($data) {
	global $koneksi;

	$nama = htmlspecialchars($data["nama"]);
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
	$jk = htmlspecialchars($data["jk"]);
	$nohp = htmlspecialchars($data["nohp"]);

	//cek userneme udah ada blm
	$result = mysqli_query($koneksi, "SELECT username From user WHERE username = '$username'");

	if( mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar')
			  </script>";

			  return false;
	}



	//cek konfirmasi passwrd
	if ( $password !== $password2 ) {
		echo "<script> 
				alert('konfirmasi password tidak sesuai!');
			  </script>";
		return false;

	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);



	// tambah user ke database	
	mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama', '$username', '$password', '$jk', '$nohp')");

	return mysqli_affected_rows($koneksi);
}



//Simpan Psikolog
function simpanpsikolog($data){
	global $koneksi;

	//upload gambar
	$foto = upload();
	if (!$foto) {
		return false;
	}


	$nama = htmlspecialchars($data["nama"]);  
	$jabatan = htmlspecialchars($data["jabatan"]);
	 
	

	$query = "INSERT INTO psikolog values ('','$foto','$nama','$jabatan')";

	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
}



function upload(){
	$namafile =$_FILES['foto']['name'];
	$ukuranfile =$_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpname = $_FILES['foto']['tmp_name'];

	// cek gambar upload
	if ($error === 4) {
		echo "<script> 
				alert('pilih foto terlebih dahulu');
			  </script>";
			return false;
	}

	// cek yang di upload gambar atau bukan
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensigambar = explode('.', $namafile);
	$ekstensigambar = strtolower(end($ekstensigambar));
	if (!in_array($ekstensigambar, $ekstensiGambarValid)) {
		echo "<script> 
				alert('Yang Anda Upload Bukan Gambar');
			  </script>";
			return false;
	}

	//cek ukuran gambar
	if ($ukuranfile > 3000000) {
		echo "<script> 
				alert('Ukuran Gambar Terlalu Besar');
			  </script>";
			return false;
	}

	//nama baru
	$namaneu = uniqid();
	$namaneu .= '.';
	$namaneu .= $ekstensigambar;
	//lolos pengecekan
	move_uploaded_file($tmpname , "../img/foto/".$namaneu);
	return $namaneu;

}



function hapuspsikolog($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM psikolog where id = $id");


	return mysqli_affected_rows($koneksi);
}


function ubahpsikolog($data){
	global $koneksi;
	$id = $data["id"];
	$gambarlama = htmlspecialchars($data["gambarlama"]); 
	// cek ganti gambar tidak
	if ($_FILES['foto']['error'] === 4 ) {
		$foto = $gambarlama;
	} else {
		$foto = upload();
	}

	$Nama = htmlspecialchars($data["nama"]);  
	$Jabatan = htmlspecialchars($data["jabatan"]);

	$query = "UPDATE psikolog SET foto = '$foto', nama = '$Nama', jabatan = '$Jabatan' WHERE id = $id ";

	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}



 ?>
