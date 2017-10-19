<?php
	require_once ('config.php');
?>
<?php
	
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$str = "SELECT * FROM USER WHERE USERNAME='".$username."' AND PASSWORD='".$password."' AND TYPE=0";
	
	$result = mysql_query($str);
	if($row = mysql_fetch_array($result)){
		$_SESSION["user"] = $row["username"];
		$_SESSION["id"] = $row["id"];
		echo "<script type='text/javascript'>alert('登陆成功');window.location.href='item.php';</script>";
	}else{
		echo "<script type='text/javascript'>alert('登陆失败!');history.go(-1);</script>";
	}
	
	
	
?>