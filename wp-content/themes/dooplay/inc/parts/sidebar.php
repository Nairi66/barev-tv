<div id="arch-menu" class="sidebar">
<div class="sidemenu">
<h2><?php _e('Browse','mtms'); ?></h2>
<?php if ( is_tax() ) { ?>
<ul class="main_links">
<li><a href="<?php echo esc_url( home_url() ); ?>"><i class="icon-home"></i> <?php _e('Home','mtms'); ?></a></li>
<?php if($url = get_option('dt_movies_slug','movies')) { ?><li><a href="<?php echo esc_url( home_url() ) .'/'. $url .'/'; ?>"><i class="icon-video-camera"></i> <?php _e('Movies','mtms'); ?></a></li><?php } ?>
<?php if($url = get_option('dt_tvshows_slug','tvshows')) { ?><li><a href="<?php echo esc_url( home_url() ) .'/'. $url .'/'; ?>"><i class="icon-tv"></i> <?php _e('TV Shows','mtms'); ?></a></li><?php } ?>
<?php if($d = get_option('dt_trending_page')) { ?><li><a <?php dt_acp(sanitize_title( __('Trending','mtms')) ); ?> href="<?php echo $d; ?>"><i class="icon-fire"></i> <?php _e('Trending','mtms'); ?></a></li><?php } ?>
<?php if($d = get_option('dt_rating_page')) { ?><li><a <?php dt_acp(sanitize_title( __('Ratings','mtms')) ); ?> href="<?php echo $d; ?>"><i class="icon-star2"></i> <?php _e('Ratings','mtms'); ?></a></li><?php } ?>
</ul>
<?php } else { ?>
<ul class="main_links">
<li><a <?php if ( is_home() ) { echo 'class="active"'; } ?> href="<?php echo esc_url( home_url() ); ?>"><i class="icon-home"></i> <?php _e('Home','mtms'); ?></a></li>
<?php if($url = get_option('dt_movies_slug','movies')) { ?><li><a <?php dt_acpt('movies'); ?> href="<?php echo esc_url( home_url() ) .'/'. $url .'/'; ?>"><i class="icon-video-camera"></i> <?php _e('Movies','mtms'); ?></a></li><?php } ?>
<?php if($url = get_option('dt_tvshows_slug','tvshows')) { ?><li><a <?php dt_acpt('tvshows'); ?> href="<?php echo esc_url( home_url() ) .'/'. $url .'/'; ?>"><i class="icon-tv"></i> <?php _e('TV Shows','mtms'); ?></a></li><?php } ?>
<?php if($d = get_option('dt_trending_page')) { ?><li><a <?php dt_acp(sanitize_title( __('Trending','mtms')) ); ?> href="<?php echo $d; ?>"><i class="icon-fire"></i> <?php _e('Trending','mtms'); ?></a></li><?php } ?>
<?php if($d = get_option('dt_rating_page')) { ?><li><a <?php dt_acp(sanitize_title( __('Ratings','mtms')) ); ?> href="<?php echo $d; ?>"><i class="icon-star2"></i> <?php _e('Ratings','mtms'); ?></a></li><?php } ?>
</ul>
<?php } ?>
</div>
<div class="sidemenu">
<h2><?php _e('Genres','mtms'); ?></h2>
<ul class="genres scrolling">
<?php li_generos(); ?>
</ul>
</div>
<div class="sidemenu">
<h2><?php _e('Release Year','mtms'); ?></h2>
<ul class="year scrolling">
<?php dt_show_year(); ?>
</ul>
</div>



<div class="estadisticas">
</div>
</div>