<?php
require_once 'koneksi/init.php';
require_once 'koneksi/sesion.php';

	  global $link;
	  $email=$_SESSION['email'];
	  
	  $email = mysqli_real_escape_string($link, $email);
	  
	  $query ="SELECT * FROM admin WHERE email='$email'";
	  $sql = mysqli_query ($link, $query);
	  $data =  mysqli_fetch_array($sql);
		  $jabatan=$data['jabatan'];
		  $nama=$data['nama'];
		  $fotoprofil=$data['foto'];
		  $email=$data['email'];
		  $password=$data['password'];
		  $id_admin=$data['id_admin'];
?>