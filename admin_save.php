<?php 

include 'koneksi.php';


if (isset($_POST['simpan'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = mysqli_query($koneksi, "SELECT * FROM tb_daftar WHERE username");

	if(mysqli_num_rows($sql)>0){
		$save = "INSERT INTO tb_daftar SET username='$username', password='$password'";
		mysqli_query($koneksi, $save);
	}else{
		echo "<script>alert('maaf username telah di gunakan')</script>";
	}
	
}

 ?>