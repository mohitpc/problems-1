<?
/*
	The following are controls for viewing the template only.
*/
	$header_login_form = true;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include('comp_head.php');?>
	</head>
	<body class="en">
		<?php include("comp_mobile_nav.php"); ?>
		<section class="wrapper">
			<?php include("comp_header.php"); ?>
			<section class="content">
				<?php include("comp_asides.php"); ?>
				<section class="content_area">
					<article class="tabbed">
						<nav class='tabs'>
							<a href="">My Account</a>
							<a href="">Settings</a>
							<a href="" class="active">Favorites</a>
							<a href="">Account Statement</a>
						</nav>
						<section class="inner_content">
							<div class="left wide_60">
								<h3>Your Favorites</h3>
								<div class="favorites_editor">
									<div class="row_favs">
										<div class="editor_move"><div class="icon_move"></div></div>
										<div class="label_fav">Premier League</div>
										<div class="editor_remove">X</div>
									</div>
									<div class="row_favs">
										<div class="editor_move"><div class="icon_move"></div></div>
										<div class="label_fav">Premier League</div>
										<div class="editor_remove">X</div>
									</div>
									<div class="row_favs">
										<div class="editor_move"><div class="icon_move"></div></div>
										<div class="label_fav">Premier League</div>
										<div class="editor_remove">X</div>
									</div>
									<div class="row_favs">
										<div class="editor_move"><div class="icon_move"></div></div>
										<div class="label_fav">Premier League</div>
										<div class="editor_remove">X</div>
									</div>
									<div class="row_favs">
										<div class="editor_move"><div class="icon_move"></div></div>
										<div class="label_fav">Premier League</div>
										<div class="editor_remove">X</div>
									</div>
								</div>
							</div>
							<div class="right wide_40">
								<h3>Search &amp; add more</h3>
								<form class="update_account_form inline">
									<fieldset>
										<label for "current-password">Search Leagues or Teams</label>
										<input type="password" name="current-password">
									</fieldset>
									<input type="submit" value="Search" class="btn btn-form">
								</form>
							</div>
						</section>
					</article>
				</section>
			</section>
			<?php include("comp_footer.php"); ?>
		</section>
	</body>
</html>
