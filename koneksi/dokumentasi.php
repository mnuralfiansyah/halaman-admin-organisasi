<?php

error_reporting(0);


 
	  global $link;
	  $jenis='tarbiyah';
	  $jenis_dokumentasi = $jenis;
	  
	  $jenis = mysqli_real_escape_string($link, $jenis);
	  
	  $query ="SELECT * FROM dokumentasi WHERE jenis='$jenis' limit 5";
	  $sql = mysqli_query ($link, $query);
	  
	  
	  $i=1;
	  while ($data =  mysqli_fetch_array($sql))
	  {
		  
		  $tarbiyah_foto[$i] =$data['foto1'];
		  $tarbiyah_judul[$i] =$data['judul'];
		  $tarbiyah_keterangan[$i] =$data['keterangan'];
			$i++;
	  }
	  
	  
 
?>