<header>
	<div class="main">
		<a href="/#/" class="site_logo"><img src="../../assets/siteimages/logo/logo.png"/></a>
		<div class="accounts">
			<?php if (@$header_login_form == true){ ?>
			<div class="form_login">
				<form id="desktop_login">
					<input type="text" name="login" value="" placeholder="Username">
					<input type="password" name="password" value="" placeholder="Password">
					<input type="button" value="Sign In">
				</form>
			</div>
			<?php }else{ ?>
			<div class="user-info">
				<ul>
					<li>Welcome <span class="user">Tipsmaster</span></li>
					<li><a href="" class="balance">Available: £249.67</a></li>
					<li><a href=""><span class="icon_account"></span>My Account</a></li>
					<li><a href=""><span class="icon_settings_white"></span>Settings</a></li>
					<li><a href="" class="logout"><span class="icon_logout"></span>Logout</a></li>
				</ul>
			</div>
			<?php }?>
		</div>
	</div>
	<nav id="menu_area">
		<ul id="menu">
			<li><a href="http://staging.technocratshorizons.com/zeede/app/views/home.php" title="Home" alt="Home" class="active">Home</a></li>
			<li><a href="http://staging.technocratshorizons.com/zeede/app/views/guides.php" title="Guides" alt="Guides">Guides</a></li>
			<li class="right search">
				<form>
					<fieldset>
						<input type="text" name="site_search" id="site_search" placeholder="Search">
						<input type="button" value="Search">
					</fieldset>
				</form>
			</li>
			<li class="right dropmenu" id="dropdown_languages">
				<span class="icon_flag gb"></span>English<span class="icon_dropdown_down"></span>
				<ul class="languages">
					<li><a href="" title="Change language to English"><span class="icon_flag gb"></span>English</a></li>
					<li><a href="" title="Change language to Simplified Chinese" class="font-chinese"><span class="icon_flag cn"></span>简体中文</a></li>
					<li><a href="" title="Change language to Traditional Chinese" class="font-chinese"><span class="icon_flag tw"></span>繁體中文</a></li>
				</ul>
			</li>
			<li class="right dropmenu" id="dropdown_timezone">
				08/03/2016  19:53<span class="icon_dropdown_down"></span>
				<ul class="timezone">
					<li><div class="info">Not seeing the correct timezone?<BR><small>You can go to your settings and change the timezone:</small></div></li>
					<li><a href="" title="Change timezone in settings"><span class="icon_settings_gray"></span>Go to Settings</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<div class="mobile">
		<div id="mobile-nav-menu" class="icon_mobile_header menu"></div>
		<a href="/" class="logo mobile">Sharp Star</a>
		<div id="mobile-nav-account" class="icon_mobile_header account"></div>
		<div id="mobile-nav-search" class="icon_mobile_header search"></div>
		<div class="search_area">
			<form>
				<input type="search" placeholder="Search here...">
				<input type="submit" value="Search">
			</form>
		</div>
	</div>
</header>