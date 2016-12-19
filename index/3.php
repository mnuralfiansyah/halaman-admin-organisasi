<?php
 $hari = date('l');
 
 if ($hari=='Monday')
 {
	 $hari = "Senin";
 }
 else if ($hari=='Tuesday')
 {
	 $hari = "Selasa";
 }
 else if ($hari=='Wednesday')
 {
	 $hari = "Rabu";
 }
 else if ($hari=='Thursday')
 {
	 $hari = "Kamis";
 }
 else if ($hari=='friday')
 {
	 $hari = "Jum'at";
 }
 else if ($hari=='Saturday')
 {
	 $hari = "Sabtu";
 }
 else if ($hari=='Sunday')
 {
	 $hari = "Minggu";
 }
 
 $jam= date('h:i:s');
 $tanggal = date('d/m/Y');
 echo "$hari dan $jam $tanggal";
?>