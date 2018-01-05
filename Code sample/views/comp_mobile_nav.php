<nav id="mobile_menu">
	<div id="close_menu_nav"><small>close</small>X</div>
	<div class="logo_white">Sharp Star</div>
	<a href="">Home</a>
	<a href="">Guides</a>
	<a href="">In-Running</a>
	<a href="">Soccer</a>
	<a href="">Basketball</a>
	<a href="">Contact Us</a>
</nav>
<nav id="mobile_accounts">
	<div id="close_account_nav"><small>close</small>X</div>
	<?php if ($header_login_form == true){ ?>
	<div class="form_login mobile">
		<form id="mobile_login">
			<input type="text" name="login" value="" placeholder="Username">
			<input type="password" name="password" value="" placeholder="Password">
			<input type="button" value="Sign In">
			<a href="" class="forgot_password">I forgot my password</a>
		</form>
	</div>
	<?php }else{ ?>
	<div class="user-info">
		<a>Welcome <span class="user">Tipsmaster</span></a>
		<a href="" class="balance">Available: £249.67</a>
		<a href=""><span class="icon_account"></span>My Account</a>
		<a href=""><span class="icon_settings_white"></span>Settings</a>
		<a href="" class="logout"><span class="icon_logout"></span>Logout</a>
	</div>
	<?php } ?>
</nav>