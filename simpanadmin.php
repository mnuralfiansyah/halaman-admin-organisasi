<?php
require_once 'koneksi/session.php';
require_once 'koneksi/koneksi.php';
require_once 'koneksi/hari.php';

$id=$_POST['id']; 
$namaadmin=$_POST['nama']; 
$jabatanadmin=$_POST['jabatan']; 
$emailadmin=$_POST['email'];
$passwordlama=$_POST['passwordlama']; 
$passwordadmin=$_POST['password']; 
$passwordadmin1=$_POST['password1']; 
//$foto=$_POST['foto']; echo "$foto";



global $link;
	  
	  $id = mysqli_real_escape_string($link, $id);
	  $query ="SELECT * FROM admin WHERE id_admin='$id'";
	  $sql = mysqli_query ($link, $query);

	  
	  while ($data =  mysqli_fetch_array($sql))
	  {
		 
		  $passwordtes=$data['password'];
		
	
	  }














if (($passwordadmin!='')&&($passwordlama!='')&&($passwordadmin1!=''))
	{
							$emailadmin= mysqli_real_escape_string ($link, $emailadmin);
							$passwordlama= mysqli_real_escape_string ($link, $passwordlama);
								
								$query = "SELECT password FROM admin WHERE email='$emailadmin'";
								$result = mysqli_query ($link, $query);
								$hash = mysqli_fetch_assoc($result)['password'];
								
								if (password_verify($passwordlama, $hash))
							{

																						if ($passwordadmin==$passwordadmin1)
																						{
																							
																								global $link;
																								
																								$passwordadmin = password_hash ($passwordadmin, PASSWORD_DEFAULT);
																								
																								$query = "UPDATE admin SET nama='$namaadmin', password='$passwordadmin', jabatan='$jabatanadmin',  email='$emailadmin' WHERE id_admin='$id'";
																								$sql = mysqli_query($link, $query);
																								
																								//jika query update sukses
																								if($sql)
																																												{
																																
																										
																										$query1="INSERT INTO aktifitasadmin VALUES ('','$email','Telah mengedit data $emailadmin pada $hari, $tanggal $jam')";
																										$sql1= mysqli_query($link, $query1);
																										
																										if($sql1)
																										{
																											//header ('location:user.php');		//Pesan jika proses simpan sukses
																											$eror="Berhasil Edit"; $buton='1';
																										} else{  $eror="gagal admin"; $buton='2';}
																										
																									} else{  $eror='Gagal menyimpan data' ; $buton='2';}
																							
																							
																							
																						} else{  $eror="password  baru tidak sama tidak sama"; $buton='2';}
																						
																						
																						
																						
																						
							}  else{ $eror = "pasword lama dan baru tidak sama"; $buton='2';}
							

}
else if (($passwordadmin=='')&&($passwordlama=='')&&($passwordadmin1==''))
{
				
				
				
				
	 global $link;
	
	$query = "UPDATE admin SET nama='$namaadmin', jabatan='$jabatanadmin',  email='$emailadmin' WHERE id_admin='$id'";
	$sql = mysqli_query($link, $query);

												
	//jika query update sukses
	if($sql)
	{
		$query1="INSERT INTO aktifitasadmin VALUES ('','$email','Telah mengubah data $emailadmin pada $tanggal')";
		$sql1= mysqli_query($link, $query1);
																										
		if($sql1)
		{
			//header ('location:user.php');		//Pesan jika proses simpan sukses
			$eror="Berhasil Edit"; $buton='1';
		} else{  $eror = "gagal admin"; $buton='2';}
		
	} else{  $eror ='Gagal menyimpan data' ; $buton='2';}
		
	
} else{ $eror="Harus diisi Semua Passwordnya"; $buton='2';}



 
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
?>