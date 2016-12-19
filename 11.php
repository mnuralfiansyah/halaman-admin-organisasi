<?php
$namafolder="dokumentasi/";

//echo count($_FILES['img']['tmp_name']);
echo $img_name;


for ($i=0;$i<count($_FILES['img']['tmp_name']);$i++)
{
	

	//Fungsi untuk meng-upload gambar
		function UploadImage($img_name)
	{
		for ($i=$i;$i<count($_FILES['img']['tmp_name']);$i++)
			{		
				
				header("Content-type: image/jpeg");

				//direktori gambar
				$vdir_upload = "gambar/";
				$vfile_upload = $vdir_upload . $img_name;
				
				
				//Simpan gambar dalam ukuran sebenarnya

				move_uploaded_file($_FILES["img"]["tmp_name"][$i], $vfile_upload);

				/*
				//identitas file asli
				$im_src = imagecreatefromjpeg($vfile_upload);
				$src_width = imageSX($im_src);
				$src_height = imageSY($im_src);



				//Simpan dalam versi medium 320 pixel
				//set ukuran gambar hasil perubahan
				$dst_width = 720;
				$dst_height = 540;

				//proses perubahan ukuran
				$im = imagecreatetruecolor($dst_width,$dst_height);
				imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

				//Simpan gambar
				$k=$i+1;
				imagejpeg($im,$vdir_upload . "$k.jpg");
				

				imagedestroy($im_src);
				imagedestroy($im);
				
				*/
			} ///////
	}//
				
				//Upload Gambar
				UploadImage($_FILES["img"]["name"][$i]);
				

	
		///
}
		
		//*/
?>