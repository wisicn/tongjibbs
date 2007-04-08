<?php
if(time()%3==0)
{
$img_src='http://news.tongji.edu.cn/UploadFile/IMG_7544.JPG';
$link_tip='中银同济认同卡的办理 
(photo copy from news.tongji.edu.cn)';
$link_to='http://bbs.tongji.edu.cn/bbscon.php?bid=19&id=47199';
}
else
{
//1 首页图片的url地址，相对目录的话要从index所在的目录算。根据同舟共济原来的习惯，建议使用700x350的尺寸
$img_src="index_pages/20070402-spring/spring-".(time()%8).'.jpg';

//2 鼠标放在图片上提示的内容
$link_tip='春游啦～～～'; //注：此字符串变量不可以有双引号。

//3a 图片链接到的地方，设为空或不设，则用link_board变量，链接到一个版面
//$link_to='http://code.google.com'; //注：此字符串变量不可以有双引号。

//3b 链接到的版面
$link_board='travel'; //注：此字符串变量不可以有双引号。
}

//4 首页提示的内容
// 这是一个数组，数组的每一项表示一组提示（通常是一行）
//
// 注意PHP定义数组的语法是这样子的,注意key不要相同。
//    $page_tips=array('key1'=>'value1','key2'=>'value2','key3'=>'value3','key4'=>'value4');
//
// 数组的下标(key)表示提示的“标题”，就是行首四个加组的字。
// 数组的值(value)表示提示的“内容”的HTML。
//
//注意：为了统一样式起见，应尽量使用css定义的 h2.dotmark 的CSS样式，参考以下示例。
//另外链接到版面的文字链接可以使用 专门定义的PHP 函数 lind_board('eng_boardname','中文提示（可以为中文版名或随便啥）')，参考以下示例
//当然PHP的内置函数和KBS的内置函数这里也可以用。
$page_tips=array(
'【站长提示】'=>
	'<h2 class="dotmark">推荐使用<a href="#">TELNET</a>方式上站</h2>
	<h2 class="dotmark"><a href="#">TELNET上站指南</a></h2>
	<h2 class="dotmark">推荐使用<a href="#">FTerm</a> <a href="#">CTerm</a></h2>
	',

'【推荐链接】'=>
	link_board("TJExpress","同济生活" ).
	link_board("Job","求职中心" ).
	link_board("Secondhand","二手市场" ).
	link_board("PieBridge","鹊桥征友" ).
	link_board("Picture","贴图" ).
	link_board("ComputerTech","电脑医院" ).
	link_board("Undergraduate","本科生之家" )
);


//e1 </head>之前要附加的内容，一般不要设，除非你知道你在干什么 :)
//$extra_head='';

//e2 显示在图片下方的额外HTML内容 (默认文字是居中的) 
//$extra_html_after_img='test ';

//e3 显示在页脚长横线上方的额外HTML内容
//$extra_html_before_footer='<div style="text-align:left;">2 test aa a BBBBBBBBBBa</div>';


?>
