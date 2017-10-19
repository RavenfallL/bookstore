<?php
	require_once ('config.php');
?>
<?php
	if($_SESSION["user"]!=null){
		
	}else{
		echo "<script type='text/javascript'>alert('请登陆');history.go(-1);</script>";
		exit;
	}
?>