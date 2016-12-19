 <?php
								 require_once "koneksi/init.php";
								 require_once "koneksi/koneksi.php";
								 
								 global $link;
								 
								 $email=$_POST['email'];
								$password=$_POST['password'];
								$waktu=$_POST['waktu'];

								 
								 if (isset($_POST['email']) && ($_POST['password']) )
								 {
									//$email=$_POST['email'];
									//$password=$_POST['password'];
									
									 if (!empty(trim($email)) && !empty(trim($password)))
									 {
										 if (login_cek_nama ($email, $password) )
										 {
											if (cek_data ($email, $password))
											{
												session_start();
												$_SESSION['email'] = $email;
												//header ('location:index.php'); 
												
												$query = "INSERT INTO catatanlogin VALUES ('','$email','$waktu','','')";
												$sql = mysqli_query($link, $query);
												
												if($sql)
												{
														$_SESSION['waktu'] = $waktu;
														header ('location:index.php');		//Pesan jika proses simpan sukses														
												}
												else
												{	
														header ('location:login.php?eror=Gagal Login Ada Masalah pada sistem');		//Pesan jika proses simpan tidak sukses		
												}	
											}
											else
											{ 	
												header ('location:login.php?eror=password salah');		//Pesan jika proses simpan sukses
											}
										 }
										 else
										 {
											header ('location:login.php?eror=namanya belum terdaftar');
										 }			
									 }
									else
									 {
										header ('location:login.php?eror=tidak boleh kosong');
									 }
								 } 
								 else
								 {
									header ('location:login.php?eror=gak da isinya');
								 }
								  // */
 
 ?>