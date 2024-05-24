<?php 

include '../koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_daftar WHERE id = '$id'";
$hapus = mysqli_query($koneksi, $sql);

if ($hapus) {
	header("location: ../datauser.php");
}else{
echo "bakekok bunda";
} 
 ?>
