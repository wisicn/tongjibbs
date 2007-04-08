function guestlogin()
{
document.form1.id.value="guest";
document.form1.passwd.value="guest";
before_submit();
document.form1.submit();
}
function register()
{
top.location.href="bbsreg0.html";
}

/* ==========================================
根据web/wForum选择 自动登录不同的界面

注：调用此函数的地方应保证有 id='wf'的东西在

TODO:提交前先判断一下提交表单的合理性
*/
function before_submit()
{
  is_wforum=document.getElementById('wf').checked;
  
  u_id=document.getElementById('id').value;
  u_passwd=document.getElementById('passwd').value;
  
  haserror=false;
  einfo='';

  
  if(u_id=='')
  {
    haserror=true;
    einfo+='<br/>　请输入用户名';
  }
  if(u_passwd=='')
  {
    haserror=true;
    einfo+='<br/>　请输入密码';
  }
  if(haserror)
  {
    ediv=document.getElementById('errorinfo');
    ediv.innerHTML="<div style=\"float:right;\"><a href=\"#\" title=\"hide\" onclick=\"toggle_hide_id('errorinfo');return false;\">"
      +"隐藏</a></div>"
      +'错误信息:<b>'+einfo+'</b>';
    ediv.style.display='block';
    return false;
  }
  
  f=document.getElementById('form1');
  if(is_wforum)
    f.action='wForum/logon.php';
  else
    f.action='bbslogin.php';
  return true;
}

function toggle_hide_id(i)
{
  var o=document.getElementById(i);
  if(o.style.display=='none') o.style.display='';
  else o.style.display='none';
}
/* ==================================================
根据web/wForum选择自动进入不同界面的版面

要进入版面的链接除了href='xxxxx'外，还加了 onclick="return goboard('xxxx')
这样实际上javascript处理的跳转的地方，href的地址被忽略了。

实现了根据选择进入不面界面的版面
*/
function goboard(bd)
{
  o=document.getElementById('wf');
  if(!o)is_wforum=false;
  else 
  is_wforum=o.checked;
  if(is_wforum)
    path="wForum/frames.php?target=board.php%3Fname=";
  else
    path='frames.html?mainurl=/bbsdoc.php?board=';
  top.location.href=path+bd;

  return false;//false to ignore the origin link uri.
}

