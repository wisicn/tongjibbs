<?php
/*

说明 见 index_pages/index.inc.php 文件

======================================================
todo: 

考虑index_pages页面文件可能有错误，容错性
css修改成方便改背景色的
xhtml验证
done (W3C CSS 校验通过)css 验证
美工美化
telnet教程的链接
fterm cterm下载的链接
【站长提示】和【推荐链接】以及其他要在首页的显示的内容

加入wFroum选择处理
点击版面会自动根据选择进入经典web或wForum的版面

进一步模块化，规范化，做到可方便切换themes

 ----------- by laolin(http://www.laolin.com)
*/

$index_pages='index_pages/';


require("www2-funcs.php");
require($index_pages."index.inc.php");

function link_board($eng,$chs)
{
  global $index_pages;
  $burl='frames.html?mainurl=/bbsdoc.php?board=';
  echo "<h2 class='dotmark'>";
  echo "<a href=\"{$burl}$eng\" onclick=\"return goboard('$eng');\">$chs</a></h2> \n";
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
<head>
<title>同济大学BBS·同舟共济站 Tongji BBS Welcome to  bbs.tongji.edu.cn</title>
<meta http-equiv="content-type" content="text/html; charset=gb2312" />
<meta name="author" content="老林(http://www.laolin.com)" />
<link href="<?php echo $index_pages ?>index-3.css" type="text/css" rel="stylesheet" />
<!--script src="index-3.js" type="text/javascript"></script-->
<script type="text/javascript">


function guestlogin()
{
document.form1.id.value="guest";
document.form1.submit();
}
function register()
{
top.location.href="bbsreg0.html";
}
        
function dosubmit(o)
{
//TODO:处理wForum选择
    return true;
}
function goboard()
{
 //TODO:处理wForum选择
}
</script>
<?php if(isset($extra_head)) echo $extra_head; ?>
</head>
<body  onload="document.form1.id.focus()">
<div id="wrapper">
  <div id="container">
  	
     <div id="mainimage">
     <!--在图片前后加个高350的div，使得图片未下载时，高度位置先空着 -->
     <div style="float:left;height:350px;width:1px;" /></div>
     <?php 
     if(isset($link_to) && $link_to!='')
       $urlto=$link_to;
     else
       $urlto='/frames.html?mainurl=/bbsdoc.php?board='.$link_board;
       ?>
       <a href="<?php echo $urlto;?>"><img src="<?php echo $img_src; ?>" alt="<?php echo $link_board;?> board" /></a>
     <div style="clear:both;"></div>
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
	    onclick="register()" />
  </form>
                
     </div><!-- mainform -->
  
     <div id="onlineinfo">目前在线人数<?php echo '['.bbs_getonlinenumber(),']('.bbs_getwwwguestnumber().' WWW GUEST)';?>
     </div><!-- onlineinfo -->

     <div id="maintip">
     	<b>【站长提示】：</b>
     	<h2 class='dotmark'>推荐使用<a href="#">TELNET</a>方式上站</h2>
     	<h2 class='dotmark'><a href="#">TELNET上站指南</a></h2>
     	<h2 class='dotmark'>推荐使用<a href="#">FTerm</a> <a href="#">CTerm</a></h2>
     	<br />
     	
     	<b>【推荐链接】：</b>
<?php
link_board("TJExpress","同济快讯" );
link_board("Job","求职中心" );
link_board("Secondhand","二手市场" );
link_board("PieBridge","鹊桥征友" );
link_board("Picture","贴图" );
link_board("ComputerTech","电脑医院" );
link_board("Undergraduate","本科生之家" );
?>
     	
     </div><!-- maintip -->
     
     <div id="footer">
<hr/>
&copy;1999-2007 同济大学BBS 同舟共济站 TongjiBBS,
All Rights Reserved<h1><a href="http://www.laolin.com" title="author:Laolin" target="_blank">A</a></h1>
<a onclick="" href="#" title="bbs AT mail dot tongji dot edu dot cn">::联系站务::</a>
<a title="同舟共济BBS" onclick="window.external.addFavorite('http://bbs.tongji.edu.cn','同济大学BBS 同舟共济站');return false" href="#">::加入收藏::</a>


 <a href="http://www.miibeian.gov.cn" target="_blank">沪ICP备05013949号</a>
     </div><!-- footer -->
     
     
		
  </div><!-- container -->
</div><!-- end of wrapper -->
</body>
</html>
