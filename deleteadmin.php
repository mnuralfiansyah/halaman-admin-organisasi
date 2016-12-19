<?php

$id=$_GET['id'];



require_once 'koneksi/init.php';
require_once 'koneksi/session.php';
require_once 'koneksi/koneksi.php';


$email=$_SESSION['email'];


$email= mysqli_real_escape_string ($link, $email);
	  
	  $query ="SELECT * FROM admin WHERE email='$email'";
	  $result = mysqli_query ($link, $query);
	  $result1 = mysqli_num_rows($result);
	  
	  
	  //
	  $query ="SELECT * FROM admin WHERE jabatan='Administrator' && email='$email'";
	  $result = mysqli_query ($link, $query);
	  $result1 = mysqli_num_rows($result);
	  

		  if ($result1 ==0)
		  {
			  header('location: user.php');
			  return false;
		  }
	

	  
	  
	  

if($email!='')
{
 
	  global $link;
	  
	  $id = mysqli_real_escape_string($link, $id);
	  $query ="SELECT * FROM admin WHERE id_admin='$id'";
	  $sql = mysqli_query ($link, $query);

	  
	  while ($data =  mysqli_fetch_array($sql))
	  {
		  $emailadmin=$data['email'];
	  }
	  
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
													 $tanggal = date('d/m/Y');
													 $jam= date('h:i:s');
	  
	
		$query1="INSERT INTO aktifitasadmin VALUES ('','$email','Telah Menghapus email $emailadmin Pada $hari, $tanggal $jam')";
		$sql1= mysqli_query($link, $query1);
		
			if($sql1)
			{  
				$id = mysqli_real_escape_string($link, $id);
	  
				$query ="DELETE FROM admin WHERE id_admin='$id'";
				$sql = mysqli_query ($link, $query);
	  
	  
				if($sql)
				{
					//header ('location:user.php'); //Pesan jika proses simpan sukses
					$eror="Admin Berhasil dihapus"; $buton=2;
				}		
		
			}
			else
			{
		
				//echo 'Gagal menghapus ' ;		//Pesan jika proses simpan gagal
				$eror="Gagal Menghapus"; $buton=1;
		
		
			}
	if ($eror!='')
		{
		 ?>
				<form id="form" method="POST" action="user.php">
				<input type="hidden" value="<?php echo "$eror";?>" name="eror">
				<input type="hidden" value="<?php echo "$buton";?>" name="buton">
				<input type="submit" value="">
				</form>

				<script>
					document.getElementById("form").submit();
				</script>
		 
		 <?php
		}
	
}
?>	 	  