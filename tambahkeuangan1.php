<?php
require_once 'koneksi/sesion.php';
require_once 'koneksi/session.php';
require_once 'koneksi/koneksi.php';


if (!empty($_POST['jenis']))
{	
	$jenis=$_POST['jenis'];
	$nominal=$_POST['nominal'];
	$keterangan=$_POST['keterangan'];
	$tanggal=$_POST['tanggal'];

	if (!eregi("[0-9]",$nominal)) 
	{ 
		header ('location:tambahkeuangan.php?eror=Harus Masukkan Angka');
	} 
	else
	{
		if ($jenis==1) { $pemasukkan=$nominal; $pengeluaran=0; } else { $pengeluaran=$nominal; $pemasukkan=0; }
		$sql="INSERT INTO keuangan VALUES ('','$tanggal','$pemasukkan','$pengeluaran','$keterangan')";
		$sql=mysqli_query($link, $sql);
			if ($sql)
			{	
				require_once 'koneksi/hari.php';
				$day = $hari.', '.$tanggal.' '.$bulan.' '.$tahun.' '.$jam ;
		
				if ($pemasukkan!=0 and $pengeluaran==0) 
					{
						$aktifitas='Telah Menambah Data Pemasukkan Sebesar '.$pemasukkan.' pada ' .$day ;
					} 
					else
					{ 
						$aktifitas='Telah Menambah Data Pengeluaran Sebesar '.$pengeluaran.' pada ' .$day ;
					}
					
						$sql1="INSERT INTO aktifitasadmin VALUES ('','$email','$aktifitas')";
						$sql1=mysqli_query($link, $sql1);
						if ($sql1)
						{
						header ('location:keuangan.php?eror=Berhasil Update Keuangan');
						}
						else
						{
							header ('location:tambahkeuangan.php?eror=gagal masukkan log aktifitas');
						}
			}
			else
			{
				header ('location:tambahkeuangan.php?eror=gagal masuk database');
			}
	}
}
else
{
	header ('location:tambahkeuangan.php?eror=Status Harus Diisi');
}	
?>