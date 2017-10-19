<?php
	require_once ('config.php');
	require_once ('filter.php');
?>
<?php
	
	
	$id = $_GET["id"];  //获得商品的id
	$userid = $_SESSION["id"];//获得用户的id
	
	$str = "INSERT INTO CART(USER_ID,BOOK_ID,goods_num) VALUES('".$userid."','".$id."',1)"; //执行插入购物车的sql语句
		
	$result = mysql_query($str);//执行sql语句
	
	
	if($result>=1){  //获得执行sql的结果进行判断
		echo "<script type='text/javascript'>alert('添加成功');window.location.href='cart.php';</script>";
	}else{
		echo "<script type='text/javascript'>alert('添加失败');window.location.href='courseCatalog.php?id=".$id."';</script>";
	}
	
	
	
?>