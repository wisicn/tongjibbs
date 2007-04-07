<?php


//1 首页图片的url地址，相对目录的话要从index所在的目录算。根据同舟共济原来的习惯，建议使用700x350的尺寸
$img_src="index_pages/20070402-spring/spring-".(time()%8).'.jpg';

//2 鼠标放在图片上提示的内容
$link_tip='春游啦～～～'; //注：此字符串变量不可以有双引号。

//3a 图片链接到的地方，设为空或不设，则用link_board变量，链接到一个版面
//$link_to='http://code.google.com'; //注：此字符串变量不可以有双引号。

//3b 链接到的版面
$link_board='travel'; //注：此字符串变量不可以有双引号。



//e1 </head>之前要附加的内容，一般不要设，除非你知道你在干什么 :)
//$extra_head='';

//e2 显示在图片下方的额外HTML内容 (默认文字是居中的) 
//$extra_html_after_img='test ';

//e3 显示在页脚长横线上方的额外HTML内容
//$extra_html_before_footer='<div style="text-align:left;">2 test aa a BBBBBBBBBBa</div>';


?>
