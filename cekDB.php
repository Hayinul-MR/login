<?php

session_start();

include 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
if($cek > 0){

$_SESSION ['username'] = $username;
$_SESSION ['status'] = "login";
header ("location: biodata.php");

}
else{
header("location: error.php");
}
?>
