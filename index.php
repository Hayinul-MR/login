<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>login website hayinul</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>Web login<br/>by: Hayinul MR</h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Login dengan User yang benar</p>
 
		<form action="cekDB.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
		</form>
		
	</div>
 
 
</body>
