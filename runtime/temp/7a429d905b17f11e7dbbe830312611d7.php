<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"C:\wamp64\www\mbook\public/../application/index\view\index\index.html";i:1511791076;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>书店首页</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/mbook/public/static/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/mbook/public/static/JQM/jquery-1.11.1.min.js"></script>
<script src="/mbook/public/static/JQM/jquery.mobile-1.4.5.min.js"></script>


<style>
body {
  margin: 0 auto;
  text-align:center;
  padding:0;
}
div, ul, li, dl, dt, dd, h1, h2, h3, h4, p {
  margin:0;
  padding:0;
  list-style:none;
}
a {
  text-decoration:none;
}

.ui-bar-f
{
background-color:#FF6;
border:#FF0 1px solid;
}
.ui-bar-f .ui-btn
{
background-color:#FC0;
}
.ui-bar-f .ui-btn:hover
{
background-color:#FC9;
}
.ui-body-f
{
background-color:#FFC;
}
.ui-body-f .ui-btn
{
  background-color:#FC0;
}
.ui-body-f .ui-btn:hover
{
  background-color:#FC0;
}

</style>

</head>

<body>
<div data-role="page">
  <div data-role="header" data-theme="f">
    <h1>欢迎访问我的书店</h1>
    <a href="../user/login.html" data-role="button" data-icon="info">登陆</a>
  </div>
  <div data-role="content" data-theme="f">
    <div data-role="collapsible" data-collapsed="false">
      <h1 >今日特价</h1>
      <div>
         <a href='#' data-ajax="false"> <img src="/mbook/public/static/images/<?php echo $tejiabook['book_img']; ?>" /> <br/>
        <?php echo $tejiabook['book_name']; ?><br/>
        <span>￥<?php echo $tejiabook['book_newprice']; ?></span> </a>
      </div>
    </div>
    <div data-role="collapsible" data-collapsed="false">
      <h1>快捷工具</h1>
      <div class="ui-grid-b">
        <div class="ui-block-a"> <a href="../book/booktype"  data-ajax="false"> <img  src="/mbook/public/static/images/neTool01.jpg" /><br/>
          <span>图书分类</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-b"> <a href="#"> <img  src="/mbook/public/static/images/neTool02.jpg"  /><br/>
          <span>联系我们</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-c"> <a href="../user/reg" data-ajax="false"> <img  src="/mbook/public/static/images/neTool03.jpg" alt="yhzc" /><br/>
          <span>用户注册</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-a"> <a href="#"> <img  src="/mbook/public/static/images/neTool04.jpg" alt="sdgg" /><br/>
          <span>书店公告</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-b"> <a href="#"> <img  src="/mbook/public/static/images/neTool05.jpg" alt="bzzx" /><br/>
          <span>帮助中心</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-c"> <a href="#"> <img  src="/mbook/public/static/images/neTool06.jpg" alt="yjfk" /><br/>
          <span>意见反馈</span><br/>
          <br/>
          </a> </div>
      </div>
    </div>
  </div>
  <div data-role="footer" data-theme="f">
    <h1>机电书店</h1>
  </div>
</div>
</body>
</html>
