<?php
ini_set("display_errors", 0);

error_reporting(E_ALL ^ E_NOTICE);

error_reporting(E_ALL ^ E_WARNING);

if (!isset ($_SESSION)) {
	ob_start();
	session_start();
}
 $hostname="localhost"; //mysql地址
 $basename="root"; //mysql用户名
 $basepass=""; //mysql密码
 $database="shucheng2"; //mysql数据库名称

 $conn=mysql_connect($hostname,$basename,$basepass)or die("error!"); //连接mysql              
 mysql_select_db($database,$conn); //选择mysql数据库
 mysql_query("set names 'utf8'");//mysql编码
  header("Content-type: text/html; charset=utf-8"); 


?>