<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"C:\wamp64\www\mbook\public/../application/index\view\book\booktype.html";i:1511165615;}*/ ?>
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
  <div data-role="header"> <a href="../index/index" data-ajax="false" data-role="button" data-icon="home">首页</a>
    <h1>图书分类</h1>
  </div>
  <div data-role="content">
    <div data-role="collapsible-set">
    	<?php if(is_array($bb) || $bb instanceof \think\Collection || $bb instanceof \think\Paginator): $i = 0; $__LIST__ = $bb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?> <!--读取大类-->
			<div data-role="collapsible" data-collapsed="true">
			  	<h1><?php echo $b['b_name']; ?></h1>
 				<ul data-role="listview"  data-inset="false">
  					<?php if(is_array($ss) || $ss instanceof \think\Collection || $ss instanceof \think\Paginator): if( count($ss)==0 ) : echo "" ;else: foreach($ss as $key=>$s): ?> <!--读取小类-->
    					<?php if($b['b_id'] == $s['b_id']): ?> <!--条件判断-->
				    		<li><a data-ajax="false" href="booklist?sid=<?php echo $s['s_id']; ?>"><span><?php echo $s['s_name']; ?></span></a></li>
     					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  </div>
  <div data-role="footer">
    <h1>机电书店</h1>
  </div>
</div>
</body>
</html>
