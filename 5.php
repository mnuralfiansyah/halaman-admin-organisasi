<?php

require_once 'koneksi/init.php';
require_once 'koneksi/session.php';

$waktu=$_SESSION['waktu'];
$email=$_SESSION['email'];
echo "$waktu dan $email";
?>