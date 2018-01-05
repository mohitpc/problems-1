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
							<a href="" class="active">Settings</a>
							<a href="">Favorites</a>
							<a href="">Account Statement</a>
						</nav>
						<section class="inner_content">
							<div class="left wide_60">
								<h3>Update Password</h3>
								<form class="update_account_form">
									<fieldset>
										<label for "language">Preferred Language</label>
										<select name="language">
											<option>English</option>
											<option>Traditional Chinese</option>
											<option>Simplified Chinese</option>
										</select>
									</fieldset>
									<fieldset>
										<label for "timezone">Timezone</label>
										<select name="timezone">
											<option>GST</option>
											<option>EST</option>
											<option>AST</option>
										</select>
									</fieldset>
									<fieldset>
										<label for "Currency">Currency</label>
										<select name="Currency">
											<option>£ Pounds Sterling</option>
											<option>$ US Dollar</option>
											<option>€ Euro</option>
										</select>
									</fieldset>
									<input type="submit" value="Update" class="btn btn-form">
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
