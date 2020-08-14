<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="theme-color" content="#FFFFFF">
<?php if($favicon = get_option('dt_favicon')) { ?>
<link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon" />
<?php } ?>
	<?php get_template_part('inc/seo'); ?>
	<?php wp_head(); ?>
	<?php echo get_option('dt_header_code'); ?>
</head>
<body <?php body_class(); ?>>
<?php if(is_single()) { global $user_ID; if( $user_ID ) : if( current_user_can('level_10') ) : ?>
<div class="dtloadpage">
	<div class="dtloadbox">
		<span><?php _e('Generating data..','mtms'); ?></span>
		<p><?php _e('Please wait, not close this page to complete the upload','mtms'); ?></p>
	</div>
</div>
<?php endif; endif; } ?>

<div id="fondo_dt" class="fondo_dt"></div>
<div id="dt_contenedor">
<header class="main">
	<div class="hbox">
		<div class="logo"><a href="<?php echo esc_url( home_url() ); ?>/"><img src="<?php if($logo = get_option('dt_logo')) { echo $logo; } else { echo get_template_directory_uri(). '/assets/img/dooplay.png'; } ?>"></a></div>
		<div class="search">
			<form method="get" id="searchform" action="<?php echo esc_url( home_url() ); ?>">
				<input type="text" placeholder="<?php _e('Search...','mtms'); ?>" name="s" id="s" value="<?php echo $_GET['s'] ?>">
				<button type="submit" id=""><span class="icon-search2"></span></button>
			</form>
		</div>
		<ul class="dt_sm">
		<li><a class="iconn nav-advc"></a></li>
		</ul>
		<?php if (is_user_logged_in()) { ?>
		<div class="dt_user">
			<a href="<?php echo get_option('dt_account_page'); ?>">
				<div class="dt_user_data"><?php username_show(); ?></div>
				<div class="dt_gravatar"><?php email_avatar_perfil(); ?></div>
			</a>
		</div>
		<?php } else { if(get_option('dt_register_user')=='true') { ?>
		<div class="dt_user">
			<div class="loguser">
				<a href="<?php echo get_option('dt_account_page') .'?action=log-in'; ?>"><?php _e('Log in','mtms'); ?></a>
				<a href="<?php echo get_option('dt_account_page') .'?action=sign-in'; ?>"><?php _e('Sign up','mtms'); ?></a>
			</div>
		</div>
		<?php } } ?>
		<div class="right">
			<ul>
			<?php if ( is_tax() ) { ?>
				<?php if($url = get_option('dt_movies_slug','movies')) { ?><li><a href="<?php echo esc_url( home_url() ) .'/'. $url .'/'; ?>"><?php _e('Movies','mtms'); ?></a></li><?php } ?>
				<?php if($url = get_option('dt_tvshows_slug','tvshows')) { ?><li><a href="<?php echo esc_url( home_url() ) .'/'. $url .'/'; ?>"><?php _e('TVShows','mtms'); ?></a></li><?php } ?>
			<?php } else { ?>
				<?php if($url = get_option('dt_movies_slug','movies')) { ?><li><a <?php dt_acpt('movies'); ?> href="<?php echo esc_url( home_url() ) .'/'. $url .'/'; ?>"><?php _e('Movies','mtms'); ?></a></li><?php } ?>
				<?php if($url = get_option('dt_tvshows_slug','tvshows')) { ?><li><a <?php dt_acpt('tvshows'); ?> href="<?php echo esc_url( home_url() ) .'/'. $url .'/'; ?>"><?php _e('TVShows','mtms'); ?></a></li><?php } ?>
			<?php } ?>
			</ul>
		</div>
	</div>
</header>
<div id="advc-menu" class="dt_mega_menu">
<?php  /* Menu footer */
	wp_nav_menu( array(
		'theme_location'  => 'submenu',
		'container'       => 'div',
		'container_id'    => 'submenu',
		'container_class' => 'box',
		'menu_class'      => 'dt_menu_footer',
		'menu_id'         => 'submenu_dt',
		'fallback_cb'     => false,
	) ); 
?>
</div>
<header class="responsive">
	<div class="nav"><a class="aresp nav-resp"></a></div>
	<div class="search"><a class="aresp search-resp"></a></div>
	<div class="logo"><a href="<?php echo esc_url( home_url() ); ?>/"><img src="<?php if($logo = get_option('dt_logo')) { echo $logo; } else { echo get_template_directory_uri(). '/assets/img/dooplay.png'; } ?>" alt=""></a></div>
</header>

<form method="get" id="form-search-resp" class="form-resp-ab" action="<?php echo esc_url( home_url() ); ?>">
	<input type="text" placeholder="<?php _e('Search...','mtms'); ?>" name="s" id="s" value="<?php echo $_GET['s'] ?>">
	<button type="submit" id=""><span class="icon-search3"></span></button>
</form>
<div id="contenedor">
<?php if(is_single()) { menu_resp_no_home();  } ?>