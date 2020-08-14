
<div class="form_dt_user">
	<header>
		<div class="logo">
			<a href="<?php echo esc_url( home_url() ); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dooplay.png" alt=""></a>
		</div>
		<h1><?php  _e('Sign up, it\'s free..','mtms'); ?></h1>
	</header>
	<?php do_action ('dt_register_form'); ?>
	
	<?php if($_GET['form'] == 'send') { /* none */ } else { get_template_part('pages/sections/register-form'); } ?>

</div>