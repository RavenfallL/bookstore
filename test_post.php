<?php
	require_once ('config.php');
?>
<?php
$id =  $_POST["id"];
$goods_num =  $_POST["goods_num"];

$str = "UPDATE cart SET goods_num='".$goods_num."' WHERE ID=".$id;
		
$result = mysql_query($str);
?>