<?php
	require_once ('admin/config.php');

?>
<?php
	
	$realname = $_POST["realname"];  //获取留言板那些输入的信息的 到str之前都是
	$email = $_POST["email"];
	$qq = $_POST["qq"];
	$content = $_POST["content"];

	
	$str = "INSERT INTO MESSAGE(realname,email,qq,content) values('".$realname."','".$email."','".$qq."','".$content."')";//执行插入的mysql语句
		
	$result = mysql_query($str);//执行sql
	
	
	if($result>=1){
		echo "<script type='text/javascript'>alert('留言成功');window.location.href='message.php';</script>";
	}else{
		echo "<script type='text/javascript'>alert('留言成功');window.location.href='message.php';</script>";
	}
	
	
	
?>