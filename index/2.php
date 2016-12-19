<?php


print "$_FILES['img[1]']['name']";
/*
function multiple(array $_files, $top= TRUE)
{
	$file=array();
	foreach($_files as $name => $file)
	{
		if ($top) $sub_name = $file['name']; 
		else $sub_name = $name;
		
		if (is_array($sub_name))
		{
			foreach(array($sub_name) as $key )
			{
				$file['name']['$key'] = array
				(
					'name' =>$file['name'][$key],
					'type' =>$file['type'][$key],
					'tmp_name' =>$file['tmp_name'][$key],
					'error' =>$file['error'][$key],
					'size' =>$file['size'][$key]
				);
				
				$files[$name] =multiple($file[$name], FALSE);
			}
		} else
				{
					$files['name']=$file;
				}
	}		
		return $files;
	}
//var_dump ($_FILES);

echo $_FILES['img']; //*/
?>