<div class="header" id="header">
	<div class="wrap">
		<div class="am-fl logo">
			<a href="index.php" title="Homepage"></a>
		</div>
		
		<div class="nav">
			<ul class="amz-header-nav am-collapse">
				<li id="head_nav_activity"><a href="book.php"><span>热卖书籍</span></a></li>
				<li id="head_nav_activity"><a href="book.php"><span>新书上市</span></a></li>
				<li id="head_nav_activity"><a href="book.php"><span>推荐书籍</span></a></li>
				<li id="head_nav_activity"><a href="book.php"><span>打折书籍</span></a></li>
				<li id="head_nav_activity"><a href="category.php"><span>书籍分类</span></a></li>

				
			</ul>
		</div>
<div class="searchtext">
	<input type="text" name="11" value="" style="border:2px solid #FF6347"  >

</div>

<div class="btn1">
	<a  class="am-btn am-btn-white am-round" data-am-modal="{target: '#modal-sign', closeViaDimmer: 0, width: 110}">搜索</a>
</div>


		<div class="btn">

			<a href="javascript:void(0);" class="am-btn am-btn-white am-round" data-am-modal="{target: '#modal-sign', closeViaDimmer: 0, width: 480}">注册/登录</a>
		</div>
	</div>
</div>

<div class="am-modal" tabindex="-1" id="modal-sign">
	<div class="am-modal-dialog" data-am-tabs>
		<div id="modal-sign-in" class="am-tab-panel">
			<div class="am-modal-hd">登录
	    		<a href="javascript: void(0)" class="am-close" data-am-modal-close>&times;</a>
			</div>
			<div class="am-modal-bd">
				
				
				<form>
					<div class="am-form-group am-form-group-lg">
						<input type="email" id="user_email" name="user[email]" placeholder="邮箱" class="am-form-field am-round">
					</div>
					<div class="am-form-group am-form-group-lg">
						<input type="password" id="user_password" name="user[password]" placeholder="密码" class="am-form-field am-round" autocomplete="off">
					</div>
					<div class="checkbox checkbox-success clearfix">
						<input type="hidden" value="0" name="user[remember_me]">
						<input type="checkbox" id="user_remember_me" name="user[remember_me]" checked="checked" value="1">
						<label for="user_remember_me">记住我的登录状态</label>
						<a href="/users/password/new" class="am-fr">忘记密码？</a>
					</div>
					<button type="submit" class="am-btn am-btn-orange am-btn-block am-btn-lg am-round am-margin-vertical" name="commit" onclick="window.open('user.php')">登录</button>
				</form>
				<a href="javascript:void(0)" onclick="$('#modal-sign-up').show(); $('#modal-sign-in').hide();" class="am-btn am-btn-default am-btn-block am-btn-lg am-round am-margin-vertical">新用户注册</a>
			</div>
		</div>
		<div id="modal-sign-up" style="display: none;">
			<div class="am-modal-hd">注册
	    		<a href="javascript: void(0)" class="am-close" data-am-modal-close>&times;</a>
			</div>
			<div class="am-modal-bd">
				<form>
					<div class="am-form-group am-form-group-lg">
						<input type="text" placeholder="昵称" class="am-form-field am-round" />
					</div>
					<div class="am-form-group am-form-group-lg">
						<input type="text" placeholder="账号" class="am-form-field am-round" />
					</div>
					<div class="am-form-group am-form-group-lg">
						<input type="text" placeholder="密码" class="am-form-field am-round" />
					</div>
					<div class="am-form-group am-form-group-lg">
						<input type="text" placeholder="重复密码" class="am-form-field am-round" />
					</div>
					<button type="submit" class="am-btn am-btn-orange am-btn-block am-btn-lg am-round am-margin-vertical" name="commit">注册</button>
				</form>
				<a href="javascript:void(0)" onclick="$('#modal-sign-up').hide(); $('#modal-sign-in').show();" class="am-btn am-btn-default am-btn-block am-btn-lg  am-round am-marign-vertical">已有账号？直接登录</a>
			</div>
		</div>
	</div>
</div>