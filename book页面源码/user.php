
<title>个人中心页</title>

<?php include('head_static.php') ?>
<link rel="stylesheet" href="src/css/mod_activity_list.css" />
<link rel="stylesheet" href="src/css/view.css" />
<link rel="stylesheet" href="src/css/activity_view.css" />
<style>
.mod_focus .focus_avatar{ width:180px; height:180px; position:absolute; top:50%; left:50%; margin-top:-90px;  margin-left:-90px; }
.mod_focus .item_avatar{ border:3px solid #f60; box-shadow:0 0 10px #666; }
.mod_focus h4{ font-size: 20px; font-weight:400; margin: 1rem 0; text-align: center; }
.mod_view_card .nav li{ border-bottom:1px solid #e1e1e1; }
.mod_view_card .nav li:last-child{ border-bottom:none; }
</style>
</head>
<body class="bc_grey">
<?php include('head.php') ?>
<div class="am-cf mod_focus">
	<div class="focus_image" style="background-image: url(pics/bg_user.jpg);"></div>
	<div class="focus_avatar">
		<div class="item_avatar item_avatar_174_174">
			<a href="" title="用户名" style="background-image: url(pics/user1.jpg);" ></a>
		</div>
		<h4>ALICK</h4>
	</div>
</div>

<div class="am-cf wrap am-margin-top-xl">
	<div class="am-fl wrap_view_side">
		<div class="mod_box mod_view_card">
			<ul class="nav">				
				<li><a href="" /><span>个人信息</span></li>
				<li><a href="" /><span>收藏</span></li>
				<li><a href="" /><span>购物车</span></li>
				<li><a href="" /><span>购买记录</span></li>
				<li><a href="" /><span>评价系统</span></li>
				<li><a href="" /><span>物流信息</span></li>
				<li><a href="" /><span>退出账号</span></li>
			</ul>
		</div>
	</div>
	<div class="am-fr wrap_view_main">
		<div class="mod_box mod_view_info">
			<div class="hd">
				<h5>ALICK</h5>
			</div>
			<div class="bd">
				
				<p><span>性别：</span>男</p>
				<p><span>简介：</span>自我介绍是向别人展示你自己的一个重要手段，自我介绍好不好，甚至直接关系到你给别人的第一印象的好坏及以后交往的顺利与否。同时，也是认识自我的手段。</p>
				<p><span>兴趣：</span>LOL，DOTA</p>
				
			</div>
		</div>
	</div>
</div>

<?php include('foot_cont.php') ?>
<?php include('foot_static.php') ?>

<script type="text/javascript">
	$("#head_nav_user").addClass('active');
	$("#foot_nav_user").addClass('active');
</script>
</body>
</html>