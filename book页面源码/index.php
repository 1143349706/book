
<title>首页</title>

<?php include('head_static.php') ?>

<link rel="stylesheet" href="src/css/mod_activity_list.css" />
<link rel="stylesheet" href="src/css/activity_list.css" />
</head>
<body>
<?php include('head.php') ?>
<br>
<div class="am-cf mod_focus">
	<div class="focus_image" style="background-image: url(pics/2.jpg);"></div>
</div>
<div class="am-cf wrap">
	<div class="wrap_side">
	
		<div class="activity_filter_group">
			<div class="activity_filter">
				<h6 class="hd">书籍种类</h6>
				<div class="bd">
					<label class="am-checkbox"><input type="checkbox" name="type" value="" data-am-ucheck />金典名著</label>
					<label class="am-checkbox"><input type="checkbox" name="type" value="" data-am-ucheck />社会科学</label>
					<label class="am-checkbox"><input type="checkbox" name="type" value="" data-am-ucheck />历史地理</label>
					<label class="am-checkbox"><input type="checkbox" name="type" value="" data-am-ucheck />文化教育</label>
					<label class="am-checkbox"><input type="checkbox" name="type" value="" data-am-ucheck />政治法律</label>
				
					<a class="view_more" onClick="$(this).next('.more_filter').toggle();$(this).toggle();"><span class="am-icon am-icon-plus-square-o" style="font-size: 120%; margin-right:8px;"></span>更多</a>
					<div class="more_filter">
						<label class="am-checkbox"><input type="checkbox" name="type" value="" data-am-ucheck />财经管理</label>
						<label class="am-checkbox"><input type="checkbox" name="type" value="" data-am-ucheck />进口图书</label>
					</div>
				</div>
			</div>

			<div class="activity_filter">
				<h6 class="hd">书籍价格</h6>
				<div class="bd">
					<label class="am-checkbox"><input type="checkbox" name="range" value="" data-am-ucheck />10-50</label>
					<label class="am-checkbox"><input type="checkbox" name="range" value="" data-am-ucheck />50-100</label>
					<label class="am-checkbox"><input type="checkbox" name="range" value="" data-am-ucheck />100-200</label>
					<label class="am-checkbox"><input type="checkbox" name="range" value="" data-am-ucheck />200-500</label>
					<label class="am-checkbox"><input type="checkbox" name="range" value="" data-am-ucheck />500-1000</label>
					
					
			
					
					
				</div>
			</div>

			<div class="activity_filter">
				<h6 class="hd">出版时间</h6>
				<div class="bd">
					<label class="am-checkbox"><input type="checkbox" name="date" value="" data-am-ucheck />1900年-1950年</label>
					<label class="am-checkbox"><input type="checkbox" name="date" value="" data-am-ucheck />1950年-2000年</label>
					<label class="am-checkbox"><input type="checkbox" name="date" value="" data-am-ucheck />2000年-2005年</label>
					<label class="am-checkbox"><input type="checkbox" name="date" value="" data-am-ucheck />2005年-2010年</label>
					<label class="am-checkbox"><input type="checkbox" name="date" value="" data-am-ucheck />2010年-2015年</label>
					<label class="am-checkbox"><input type="checkbox" name="date" value="" data-am-ucheck />近期</label>
				</div>
				</div>
			</div>

			<div class="activity_filter">
				<h6 class="hd">打折力度</h6>
				<div class="bd">
					<label class="am-checkbox"><input type="checkbox" name="date" value="" data-am-ucheck />1-2折</label>
					<label class="am-checkbox"><input type="checkbox" name="date" value="" data-am-ucheck />3-5折</label>
					<label class="am-checkbox"><input type="checkbox" name="date" value="" data-am-ucheck />6-7折</label>
					<label class="am-checkbox"><input type="checkbox" name="date" value="" data-am-ucheck />8-9折</label>
					<label class="am-checkbox"><input type="checkbox" name="date" value="" data-am-ucheck />不打折</label>
					
				</div>
				</div>
			


	</div>
	<div class="wrap_main">

		<div class="am-cf mod_activity_list">
			<ul>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
	<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book1.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book1.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book1.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book1.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book1.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
	<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book2.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book2.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book2.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book2.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book2.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
	<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book3.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book3.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book3.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book3.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
		<li class="item">
			<div class="item_image">
				<a href="book_view.php" target="_blank" style="background-image: url(pics/book3.jpg);"></a>
			</div>
			
			<div class="item_summery">
				<h6><a href="">八十天环游世界</a></h6>
			<p>Alick</p>
			</div>
			
			<div class="item_time"><b>热销中</b></div>
		</li>
	
	</ul>
		</div>
	</div>
</div>
<?php include('foot_cont.php') ?>
<?php include('foot_static.php') ?>

<script type="text/javascript">
	$("#head_nav_activity").addClass('active');
	$("#foot_nav_activity").addClass('active');
</script>
</body>
</html>