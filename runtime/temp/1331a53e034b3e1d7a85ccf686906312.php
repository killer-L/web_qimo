<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"C:\wamp64\www\mbook\public/../application/index\view\user\login.html";i:1511792400;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户登录</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/mbook/public/static/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/mbook/public/static/JQM/jquery-1.11.1.min.js"></script>
<script src="/mbook/public/static/JQM/jquery.mobile-1.4.5.min.js"></script>

</head>

<body>
<div data-role="page" id="page1">
  <div data-role="header"> 
    <a href="../Index/index.html" data-ajax="false" data-role="button" data-icon="home">首页</a>
    <a href="../user/reg.html" data-role="button" data-icon="info">注册</a>
    <h3 id="reg"> 用户登录 </h3>
  </div>
  <div data-role="content">
    <form name="RegForm" method="post" action="logindo" data-ajax="false">
      <div data-role="fieldcontain">
        <label for="username"> 用户名 </label>
        <input name="username" id="username"  value="" type="text" required>
      </div>
      <div data-role="fieldcontain">
        <label for="password"> 密码 </label>
        <input name="password" id="password" placeholder="" value="" type="password" required>
      </div>
      <div >
        <input data-inline="true" type="submit" name="submit" value="登录"  />
        <a data-inline="true"  data-role="button"  href="#"> 取消 </a> 
      </div>
       <div >
       忘记密码？ <a href="fogetpsw">点击找回密码</a>
      </div>
    </form>
  </div>
</div>

</body>
</html>
