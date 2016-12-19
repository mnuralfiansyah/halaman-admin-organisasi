<?php

require_once 'koneksi/koneksi.php';
 
	  global $link;
	  
	  $query ="SELECT admin.nama, aktifitasadmin.aktifitas FROM aktifitasadmin, admin WHERE admin.email=aktifitasadmin.email";
	  $sql = mysqli_query ($link, $query);

	  
	  while ($data =  mysqli_fetch_array($sql))
	  {
		
		$nama=$data['nama'];
		$aktifitas=$data['aktifitas'];
		
		echo "$nama $aktifitas <br>";
	  } 
	  
	  
	  
	  echo "<br><br><br><br><br><br>";
	  
	  $query1 ="SELECT admin.nama, catatanlogin.waktulogin, catatanlogin.waktulogout FROM catatanlogin, admin WHERE  admin.email=catatanlogin.email";
	  $sql1 = mysqli_query ($link, $query1);

	  
	  while ($data =  mysqli_fetch_array($sql1))
	  {
		
		$nama=$data['nama'];
		$waktulogin=$data['waktulogin'];
		$waktulogout=$data['waktulogout'];
		
		echo "$nama $waktulogin $waktulogout <br>";
	  }
	  
?>