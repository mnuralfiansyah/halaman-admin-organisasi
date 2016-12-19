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
																																 $tanggal = date('d');
																																 $jam= date('h:i:s');
																																 
																																 
																																 // ini untuk  bulan
																																 
																																 $bulan = date('m');
																			 
																																 if ($bulan==1)
																																 {
																																	 $bulan = "Januari";
																																 }
																																 else if ($bulan==2)
																																 {
																																	 $bulan = "Febuari";
																																 }
																																 else if ($bulan==3)
																																 {
																																	 $bulan = "Maret";
																																 }
																																 else if ($bulan==4)
																																 {
																																	 $bulan = "April";
																																 }
																																 else if ($bulan==5)
																																 {
																																	 $bulan = "Mei";
																																 }
																																 else if ($bulan==6)
																																 {
																																	 $bulan = "Juni";
																																 }
																																 else if ($bulan==7)
																																 {
																																	 $bulan = "Juli";
																																 }
																																 else if ($bulan==8)
																																 {
																																	 $bulan = "Agustus";
																																 }
																																 else if ($bulan==9)
																																 {
																																	 $bulan = "Septemver";
																																 }
																																 else if ($bulan==10)
																																 {
																																	 $bulan = "Oktober";
																																 }
																																 else if ($bulan==11)
																																 {
																																	 $bulan = "November";
																																 }
																																 else if ($bulan==12)
																																 {
																																	 $bulan = "Desember";
																																 }
																																 
																																 $tahun = date('Y')
							?>																									 