 <?php
 
if (!empty($_FILES['img']['name']))
{	
	$file_max_weight = 20000; //limit the maximum size of file allowed (20Mb)
	$ok_ext = array('jpg','png','gif','jpeg','JPG','JPEG'); // allow only these types of files
	$destination = 'profil/'; // where our files will be stored

	// PHP sets a global variable $_FILES['file'] which containes all information on the file
	// The $_FILES['file'] is also an array, so to have the file name we're supposed to write $_FILES['file']['name']
	// To shorten that I added the following line. With that I could just do $file['name']
	$file = $_FILES['img'];


	$filename = explode(".", $file["name"]); 


	$file_name = $file['name']; // file original name

	$file_name_no_ext = isset($filename[0]) ? $filename[0] : null; // File name without the extension

	$file_extension = $filename[count($filename)-1];

	$file_weight = $file['size'];

	$file_type = $file['type'];



	// If there is no error
	if( $file['error'] == 0 )
	{
		// check if the extension is accepted
		if( in_array($file_extension, $ok_ext))
		{	

			// check if the size is not beyond expected size

					// rename the file
					$fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;


					// and move it to the destination folder
					if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) )
					{
						require_once "koneksi/init.php";
						require_once "koneksi/koneksi.php";
						require_once "koneksi/session.php"; 
						 require_once "koneksi/hari.php"; 
						 
							 $emailadmin=$_POST['email'];
							 $passwordadmin=$_POST['password'];
							 $namaadmin=$_POST['nama'];
							 $emailadmin=$_POST['email'];
							 $jabatanadmin=$_POST['jabatan'];
							 $fotoadmin=$_FILES['img']['name'];
							 
							 if (!empty(trim($emailadmin)) && !empty(trim($passwordadmin)))
							 {
																	
																  
																  $emailadmin = mysqli_real_escape_string ($link, $emailadmin);
																  
																  $query ="SELECT * FROM admin WHERE email='$emailadmin'";
																  
																  if ($result = mysqli_query($link, $query))
																  {
																					  if (mysqli_num_rows($result)==0) 
																					  {
																								 $emailadmin= mysqli_real_escape_string ($link, $emailadmin);
																								 $passwordadmin= mysqli_real_escape_string ($link, $passwordadmin);
																								 
																								 $passwordadmin = password_hash ($passwordadmin, PASSWORD_DEFAULT); 
																								 $tanggal = date('dmyHmsu');
																								 
																								 $query = "INSERT INTO admin (id_admin, nama, password, email, jabatan, foto, fotoasli) VALUES ('','$namaadmin', '$passwordadmin', '$emailadmin','$jabatanadmin','$fileNewName','$fotoadmin')";
																								 
																								 
																								 $sql = mysqli_query ($link, $query);
																											
																											if($sql)																					
																													 {
																															$tanggal1 = tanggal();
																				
																															$query1="INSERT INTO aktifitasadmin VALUES ('','$email','Telah menambah $emailadmin dengan nama $namaadmin dengan Jabatan $jabatanadmin pada $tanggal1')";
																															$sql1= mysqli_query($link, $query1);
																															
																																if($sql1)
																																{
																																	header ('location: user.php?eror=Berhasil');
																																}

																			
																														//
																														 
																													 } 
																													 
																													 else
																													 {
																														 
																														 echo "gagal memasukkan ke query";
																														 
																													 }
																								 
																						  
																					  }  
																					  
																					  else
																						  
																					  {
																						  echo "Sudah Ada";
																							  
																					  }
																	  
																	  
																	  
																	  
																  }	  
																	  else
																  {
																	 echo "gagal 3";
																  }
							 }else
							 {
								 echo "tidak boleh kosong";
							 }
					}else
					{
						echo "tidak boleh kosong 1";
					}	
		}else
		{
			echo "tidak boleh kosong3";
		}			
	}else
	{
		echo "tidak boleh kosong4";
	}
}else
{
	echo "tidak boleh kosong5";
}	
 ?>