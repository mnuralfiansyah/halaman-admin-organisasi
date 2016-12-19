<?php
$namafolder="gambar/"; //tempat menyimpan file
for($i=0; $i<count($_FILES['nama_file']); $i++) 
{
  if (!empty($_FILES["nama_file"]["tmp_name"][$i]))
  {
    $jenis_gambar=$_FILES['nama_file']['type'][$i];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    { 
      $gambar = $namafolder . basename($_FILES['nama_file']['name'][$i]); 
      if (move_uploaded_file($_FILES['nama_file']['tmp_name'][$i], $gambar)) 
	  {
		 //echo $_FILES['nama_file']['name'][$i]."<br>"; 
		 require_once 'koneksi/koneksi.php';
		 
		 $lukisan= $_FILES['nama_file']['name'][$i];
		 $sql="INSERT INTO foto VALUES ('','$lukisan')";
		 $sql=mysqli_query($link, $sql);
		 if ($sql)
		 {
			header ('location:dokumentasi.php');
		 }
		 else
		 {
			 echo "keslahan";
		 }
 
		} 
    } 
     else 
     {
 echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png<br />";
     }
   }
}
?>