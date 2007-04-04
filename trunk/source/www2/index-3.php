<?php
/*
todo: 
显示在线人数（现在是静态的假的）

xhtml验证
css 验证
美工美化
telnet教程的链接
fterm cterm下载的链接
【站长提示】和【推荐链接】以及其他要在首页的显示的内容

加入wFroum选择处理
点击版面会自动根据选择进入经典web或wForum的版面

进一步模块化，规范化，做到可方便切换themes

 ----------- by laolin(http://www.laolin.com)
*/
$themsDir='index_pages/20070402-spring/';
$imgSrc=$themsDir."spring-".(time()%8).'.jpg';
$imgLinkBoard='travel';

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
<head>
<title>同济大学BBS·同舟共济站 Tongji BBS Welcome to  bbs.tongji.edu.cn</title>
<meta http-equiv="content-type" content="text/html; charset=gb2312" />
<link href="<?php echo $themsDir; ?>index.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $themsDir;?>index.js" type="text/javascript"></script>


</head>
<body>
<div id="wrapper">
  <div id="container">
  	
     <div id="mainimage">
       <a href="/frames.html?mainurl=/bbsdoc.php?board=<?php echo $imgLinkBoard;?>">
     		 <img src="<?php echo $imgSrc; ?>" alt="<?php echo $imgLinkBoard;?> board" /></a>
     </div><!-- mainimage -->
     
     <div>
     </div>
     
     <div id="mainform">

 	<form id="form1" name="form1" action="/bbslogin.php" method="post"
 	 onsubmit="return dosubmit(this)">
	  用户名：<input type="text" name="id" id="id" class="u"
	  onmouseover="this.focus()" onfocus="this.select()" 
	  onkeydown="if(event.keyCode==13)event.keyCode=9" />
	  密码：<input type="password" name="passwd" id="passwd" class="p"  
	   maxlength="39" />
    <input type="radio" class="r" id="we" name="webselect2"
     value="0"  checked="checked" /><label for="we">经典web</label>
    <input type="radio" class="r" id="wf" name="webselect2" disabled="disabled"
     value="1" /><label for="wf" title="对不起，wForum正在调试中">wForum</label>
	  <input type="hidden" value="/wForum/frames.php" name="comeurl" />
	  <input type="submit" name="logon" class="b" id="logon" value="登录" />
	  <input type="button" name="guest" id="guest" value="匿名"  class="b"
	  onclick="guestlogin()" /> 
	  <input type="button" name="submit2" value="注册" class="b"
	   onclick="javascript:window.location='/bbsreg1.html'" />
  </form>
                
     </div><!-- mainform -->
     
     
     <div id="onlineinfo">目前在线人数[568](438 WWW GUEST)
     </div><!-- onlineinfo -->

     <div id="maintip">
     	<b>【站长提示】：</b>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		推荐使用<a href="#">TELNET</a>方式上站
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#">TELNET上站指南</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		推荐使用<a href="#">FTerm</a> <a href="#">CTerm</a>
     	<br />
     	
     	<b>【推荐链接】：</b>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#" onclick="return goboard('');">同济快讯</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#"  onclick="return goboard('');">求职中心</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#"  onclick="return goboard('');">二手市场</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#"  onclick="return goboard('');">鹊桥征友</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#"  onclick="return goboard('');">贴图</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#"  onclick="return goboard('');">电脑医院</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#"  onclick="return goboard('');">本科生之家</a>
     	
     	
     	
     </div><!-- maintip -->
     
     <div id="footer">
<hr/>
&copy1999-2007 同济大学BBS 同舟共济站 TongjiBBS,
All Rights Reserved<h1><a href="http://www.laolin.com" title="author:Laolin" target="_blank">A</a></h1>
<a onclick="" href="#" title="bbs AT mail dot tongji dot edu dot cn">::联系站务::</a>
<a title="同舟共济BBS" onclick="window.external.addFavorite('http://bbs.tongji.edu.cn','同济大学BBS 同舟共济站');return false" href="#">::加入收藏::</a>


 <a href="http://www.miibeian.gov.cn" target="_blank">沪ICP备05013949号</a>
     </div><!-- footer -->
     
     
		
	</div><!-- container -->
</div><!-- wrapper -->
</body>
</html>
