<form name="loginform" id="loginform" action="<?php echo esc_url( home_url() .'/wp-login.php' ); ?>" method="post">
	<fieldset>
		<label for="log"><?php _e('Username','mtms'); ?></label>
		<input type="text" name="log" id="user_login" value="<?php echo $_POST['user_name']; ?>" required/ >
	</fieldset>

	<fieldset>
		<label for="pwd"><?php _e('Password','mtms'); ?></label>
		<input type="password" name="pwd" id="user_pass" value="<?php echo $_POST['dt_password']; ?>" required />
	</fieldset>
	<fieldset>
		<label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" checked="checked" /> <?php _e('Stay logged in','mtms'); ?></label>
	</fieldset>
	
	<fieldset>
		<input name="wp-submit" type="submit" id="wp-submit" class="submit button" value="<?php _e('Log in','mtms'); ?>" />
		<span>Don't you have an account yet? <a href="<?php echo get_option('dt_account_page') .'?action=sign-in'; ?>">Sign up here</a></span>
		<span><a href="">I forgot my password</a></span>
	</fieldset>
	<input type="hidden" name="redirect_to" value="<?php echo get_option('dt_account_page'); ?>" />
</form>