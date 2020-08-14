<?php global $user_login;
// In case of a login error.
if ( isset( $_GET['login'] ) && $_GET['login'] == 'failed' ) : ?>
		<div class="aa_error">
			<p><?php _e( 'FAILED: Try again!', 'mtms' ); ?></p>
		</div>
<?php endif; ?>
<div class="form_dt_user">
	<header>
		<div class="logo">
			<a href="<?php echo esc_url( home_url() ); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dooplay.png" alt=""></a>
		</div>
		<h1><?php _e('Log in','mtms'); ?></h1>
	</header>
	<?php get_template_part('pages/sections/login-form'); ?>
</div>