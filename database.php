<?php 
 
$koneksi = mysqli_connect("localhost","login","123","login");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
