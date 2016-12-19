<?php
if (!empty($_GET['eror']))
{
	$eror=$_GET['eror'];
	if (($eror=='Berhasil') or ($eror=='berhasil'))
	{ ?>
		<div class="alert alert-success">Berhasil</div>
<?php		
	}
	else
	{ ?>

		<div widt="10%" class="alert alert-danger"><?php echo $eror;?></div>
<?php		
	}
}


?>