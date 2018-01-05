<?php
/**
 * Template Name: User Registration
 */

get_header(); ?>

<div id="primary" class="content-area user_registration_form_main">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			the_content();
			// Include the page content template.
			//get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) {
			//	comments_template();
			//}

			// End of the loop.
		endwhile;
		?>
		<div class="user_registration_form">
			<h4>Create an account</h4>
			<form action="#" method="post" class="">
				<div class="row">
					<div class="col-xs-12 user_name">
						<label>First Name <font color="red">*</font></label>
						<input name="your-name" value="" size="40" placeholder="Enter your name" type="text"/>
					</div>
					<div class="col-xs-12 user_name">
						<label>Last Name <font color="red">*</font></label>
						<input name="your-name" value="" size="40" placeholder="Enter your name" type="text"/>
					</div>
					<div class="col-xs-12 phone_number">
						<label>Phone Number <font color="red">*</font></label>
						<input name="your-phone-number" size="40" class="your-phone-number" placeholder="Enter your phone no" type="text"/>
					</div>
					<div class="col-xs-12 user_email">
						<label>Email Address <font color="red">*</font></label>
						<input name="your-email" value="" size="40" class="your-email" placeholder="Enter your email address" type="email"/>
					</div>
					<div class="col-xs-12 user_password">
						<label>Password <font color="red">*</font></label>
						<input name="password" value="" size="40" class="user_password" placeholder="Choose a password" type="password"/>
					</div>
					<div class="col-xs-12 address_info">
						<label>Address 1 <font color="red">*</font></label>
						<textarea class="address_info" row="2"></textarea>
					</div>
					<div class="col-xs-12 address_info">
						<label>Address 2 <font color="red">*</font></label>
						<textarea class="address_info" row="2"></textarea>
					</div>
					<div class="col-xs-12">
						<label for="accept-policy" class="accept_policy_label"><input id="accept-policy" type="checkbox"/><span class="checkmark"></span> By signing up, I agree to NWRS <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
					</div>
					<div class="col-xs-12">
						<input id="submit_form" value="SIGN UP" type="submit"/>
					</div>
				</div>
			</form>
			
			<div class="divider_with_text"><span>OR SIGNUP WITH</span></div>
			
			<div class="more_signup_option">
				<a class="signup_with_fb" href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
				<a class="signup_with_google" href="#"><i class="fa fa-google-plus-square"></i> Google+</a>
			</div>
			
			<div class="already_member">Already have an account? <a href="#">LOGIN</a></div>
			
		</div>
	
	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
