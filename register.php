<!--#Include file="conn.php"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD Xhtml 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ע��</title>
<link href="style/css.css" rel="stylesheet" type="text/css" />
<link href="style/register.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery-1.js" type="text/javascript"></script>
</head>
<body>
<div id="contain">
  <div id="header">
    <div class="logo">
      <h1><a href="index.php" class="en"></a><a href="index.php">���</a></h1>
    </div>

  </div>
  <div class="clear"> </div>
  <div class="i_nav mauto clearfix" id="com_mainmenu" editok="online">
    <div id="smoothmenu1" class="ddsmoothmenu">
         <ul>
        <li class="navline"> <a href="index.php" class="navactive">��ҳ</a> </li>
        <li class="navline"> <a href="transfer.php?keyword=��ͯͼ��" class="nava">��ͯͼ��</a> </li>
<li class="navline"> <a href="transfer.php?keyword=Сѧͼ��" class="nava">Сѧͼ��</a> </li>
<li class="navline"> <a href="transfer.php?keyword=��ѧ�̲�" class="nava">��ѧ�̲�</a> </li>
<li class="navline"> <a href="transfer.php?keyword=�������" class="nava">�������</a> </li>
<li class="navline"> <a href="transfer.php?keyword=�ഺ��־" class="nava">�ഺ��־</a> </li>
		<li class="navline"><a href="message.php" class="nava">���԰�</a></li>
      </ul>
    </div>
  </div>
  <div class="banner">
    <div class="i_banner">
      <div id="banner_bg"></div>
      <!--���ⱳ��-->
      <div id="banner_info"></div>
      <!--����-->
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
$("#banner_info").html($("#banner_list a:first-child").find("img").attr('alt')); 
$("#banner_info").click(function(){window.open($("#banner_list a:first-child").attr('href'), "_blank")}); 
$(".banner li").click(function() { 
var i = $(this).text() - 1;//��ȡLiԪ���ڵ�ֵ����1��2��3��4 
n = i; 
if (i >= count) return; 
$("#banner_info").html($("#banner_list a").eq(i).find("img").attr('alt')); 
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
  </div>
  <div class="i_content">
      <div id="formbox">
        <form id="formpersonal" method="post" action="registers.php">
          <div class="form">
            <h3>ע��</h3>
            <div class="item"> <span class="label"><span class="red">*</span>�û�����</span>
              <div class="fl">
                <input type="text" id="u" name="username" class="text" tabindex="4"/>
                
              </div>
            </div>
            <!--item end-->
            <div id="o-password">
              <div class="item"> <span class="label"><span class="red">*</span>�������룺</span>
                <div class="fl">
                  <input type="password" id="password" name="password" class="text" tabindex="2"/>
                  
                </div>
              </div>
              <!--item end-->
              <div class="item"> <span class="label"><span class="red">*</span>ȷ�����룺</span>
                <div class="fl">
                  <input type="password" id="password" name="checkPwd" class="text" tabindex="3"/>
                 
                </div>
              </div>
              <!--item end-->
            </div>
            <!--o-password end-->
		
            <div class="item"> <span class="label">&nbsp;</span>
              <input type="submit" class="yellow_button" value="�ύע����Ϣ" tabindex="8"/>
            </div>
            <!--item end-->
          </div>
        </form>
      </div>
      <!--formbox end-->
  </div>
  <div class="i_footer"></div>
</div>
<script type="text/javascript" src="js/Validate.js"></script>
<script type="text/javascript" src="js/Validate.form.js"></script>
</body>
</html>
