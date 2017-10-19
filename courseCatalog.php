<?php
	require_once ('config.php');
	
	$id = $_GET["id"];
	$str = "SELECT * FROM BOOK WHERE ID=".$id;
	$result = mysql_query($str);
	if($row=mysql_fetch_array($result)){
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD Xhtml 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书详情</title>
<link href="style/css.css" rel="stylesheet" type="text/css" />
<link href="style/transfer.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.js" type="text/javascript"></script>
</head>
<body>
<div id="contain">
  <div id="header">
    <div class="logo">
      <h1><a href="index.php" class="en"></a><a href="index.php">书城</a></h1>
    </div>
    
  </div>
  <div class="clear"> </div>
  <div class="i_nav mauto clearfix" id="com_mainmenu" editok="online">
    <div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
        <li class="navline"> <a href="index.php" class="nava">首页</a> </li>
        <li class="navline"> <a href="transfer.php?keyword=儿童图书" class="nava">儿童图书</a> </li>
<li class="navline"> <a href="transfer.php?keyword=小学图书" class="nava">小学图书</a> </li>
<li class="navline"> <a href="transfer.php?keyword=中学教材" class="nava">中学教材</a> </li>
<li class="navline"> <a href="transfer.php?keyword=课外读物" class="nava">课外读物</a> </li>
<li class="navline"> <a href="transfer.php?keyword=青春励志" class="nava">青春励志</a> </li>
    <li class="navline"><a href="message.php" class="nava">留言板</a></li>
		
      </ul>
    </div>
  </div>
  <div class="banner">
    <div class="i_banner">
      <div id="banner_bg"></div>
      <!--标题背景-->
      <div id="banner_info"></div>
      <!--标题-->
      <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
      </ul>
       <div id="banner_list"> <a href="#" target="_blank"><img src="images/10.jpg" /></a> <a href="#" target="_blank"><img src="images/9.jpg" /></a> <a href="#" target="_blank"><img src="images/11.jpg" /></a> </div>
      <script type="text/javascript">// <![CDATA[ 
var t = n = 0, count; 
$(document).ready(function(){ 
count=$("#banner_list a").length; 
$("#banner_list a:not(:first-child)").hide(); 
$("#banner_info").php($("#banner_list a:first-child").find("img").attr('alt')); 
$("#banner_info").click(function(){window.open($("#banner_list a:first-child").attr('href'), "_blank")}); 
$(".banner li").click(function() { 
var i = $(this).text() - 1;//获取Li元素内的值，即1，2，3，4 
n = i; 
if (i >= count) return; 
$("#banner_info").php($("#banner_list a").eq(i).find("img").attr('alt')); 
$("#banner_info").unbind().click(function(){window.open($("#banner_list a").eq(i).attr('href'), "_blank")}) 
$("#banner_list a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000); 
$(this).css({"background":"rgb(204, 51, 0)",'color':'#fff'}).siblings().css({"background":"#666",'color':'#fff'}); 
}); 
t = setInterval("showAuto()", 3000); 
$(".banner").hover(function(){clearInterval(t)}, function(){t = setInterval("showAuto()", 3000);}); 
}) 
function showAuto() 
{ 
n = n >=(count - 1) ? 0 : ++n; 
$(".banner li").eq(n).trigger('click'); 
} 
// ]]></script>
    </div>
    <div class="i_login">
      <div class="i_news01">
        <div class="title01">
          <h3>
		  <?php
			if($_SESSION["user"]==""){
				echo "用户登录";
			}else{
				echo "用户信息";
			}
		  ?>

		</h3>
         </div>
        <div class="i_news01_l" id="com_nmdlls_menu_40" editok="online">
		<?php if($_SESSION["user"]==""){ ?>
          <div class="mail">
            <form id="login" method="post" action="logins.php">
              <fieldset id="inputs">
              <input name="username" id="username" type="text" placeholder="Username" >
              <input name="password" id="password" type="password" placeholder="Password" >
              </fieldset>
              <fieldset id="actions">
              <input type="submit" id="submit" value="登录">
              </fieldset>
            </form>
			<input type="submit" id="submit" onclick="window.open('register.php')" value="注册">
          </div>
		<?php }else{ ?>
			<div style="padding:20px;">
			Hello，<?php echo $_SESSION["user"] ?>,<a href="logout.php">注销</a><br/><br/>
			<a href="item.php">我的订单</a><br/><br/>
			<a href="cart.php">我的购物车</a><br/>
			</div>
		 <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="i_content" style="">
  <div class="i_border" style="height:auto;">
   <div class="t_left">
   	<h2><?php echo $row["name"];?></h2>
	<h2>价格:￥<?php echo $row["price"];?></h2>
	<h2>作者：<?php echo $row["author"];?></h2>
	<p>类型：<?php echo $row["type"];?></p>
	<p>字数：<?php echo $row["word"];?></p>
	<p>包装方式：<?php echo $row["packing"];?></p>
	<p>出版社：<?php echo $row["press"];?></p>
	<p>出版时间：<?php echo $row["date"];?></p>
	<p>版次：<?php echo $row["rev"];?></p>
	<p>介绍：<?php echo $row["content"];?></p>
	
	<p></p>
   </div>
   <div class="t_right">
   	<img src="<?php echo $row["images"];?>" style="width:300px;" />
	<input type="button" value="加入购物车" id="submit" onclick="window.location.href='addCart.php?id=<?php echo $row["id"];?>'" />
   </div>
   <div style="clear:both"></div>
  </div>
</div>
<div class="i_footer"></div>
</div>
</body>
</html>
