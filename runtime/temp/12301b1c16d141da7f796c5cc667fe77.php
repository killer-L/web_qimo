<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"C:\wamp64\www\mbook\public/../application/index\view\book\booklist.html";i:1511471074;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>图书分类</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/mbook/public/static/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/mbook/public/static/JQM/jquery-1.11.1.min.js"></script>
<script src="/mbook/public/static/JQM/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
<div data-role="page">
  <div data-role="header" >
    <a data-ajax="false" href="../index/index" data-role="button" data-icon="home">首页</a>
    <h1>图书列表</h1>
  </div>
  <div data-role="content">
     <ul data-role="listview"  data-inset="true" >
        <?php if(is_array($blist) || $blist instanceof \think\Collection || $blist instanceof \think\Paginator): $i = 0; $__LIST__ = $blist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bdata): $mod = ($i % 2 );++$i;?>
             <li>
                <a data-ajax="false" href="book?book_id=<?php echo $bdata['book_id']; ?>">
                    <img src="/mbook/public/static/images/<?php echo $bdata['book_img']; ?>"  />
                    <span><?php echo $bdata['book_name']; ?></span><br/>
                    <span>原价：￥<?php echo round($bdata['book_oldprice'],2); ?></span><br/>
                    <span  style="color:#F09">折后价：￥<?php echo round($bdata['book_newprice'],2); ?></span>
                </a>
             </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
     </ul>
  </div>
  <div data-role="footer" data-theme="b">
    <h1>机电书店</h1>
  </div>
</div>
</body>
</html>
