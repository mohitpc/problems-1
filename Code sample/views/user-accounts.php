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
							<a href="" class="active">My Account</a>
							<a href="">Settings</a>
							<a href="">Favorites</a>
							<a href="">Account Statement</a>
						</nav>
						<section class="inner_content">
							<div class="left wide_60">
								<h3>Update Password</h3>
								<form class="update_account_form">
									<fieldset>
										<label for "current-password">Current password</label>
										<input type="password" name="current-password">
									</fieldset>
									<fieldset>
										<label for "new-password">New password</label>
										<input type="password" name="new-password">
									</fieldset>
									<fieldset>
										<label for "confirm-password">Confirm password</label>
										<input type="password" name="confirm-password">
									</fieldset>
									<input type="submit" value="Update" class="btn btn-form">
								</form>
							</div>
							<div class="right wide_40">
								<h3>Account Information</h3>
								<table cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td>Account created on:</td>
										<td>22nd February 2016</td>
									</tr>
									<tr>
										<td>Last Login on:</td>
										<td>06/03/2016 18:53</td>
									</tr>
									<tr>
										<td>From:</td>
										<td>IP &amp; Location Information</td>
									</tr>
								</table>
							</div>
						</section>
					</article>
				</section>
			</section>
			<?php include("comp_footer.php"); ?>
		</section>
	</body>
</html>
