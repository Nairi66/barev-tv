<?php 

// Movies Meta data
$dt_date = new DateTime(dt_get_meta('air_date'));
$name	= dt_get_meta('episode_name');
$serie = dt_get_meta('serie');
$ids = dt_get_meta('ids');
$temp = dt_get_meta('temporada');
$epis = dt_get_meta('episodio');
$poster = dt_get_meta('dt_poster');
$backdrop = dt_get_meta('dt_backdrop');
$dt_player = get_post_meta($post->ID, 'repeatable_fields', true);

if( isset( $_GET[ 'player' ] ) ) {  
	$tabp = $_GET[ 'player' ];  
	} else {
		$tabp = '';
	}
?>
<?php single_dt(); if (have_posts()) :while (have_posts()) : the_post(); /*set_dt_views(get_the_ID());*/ ?>
<div id="single">
<div class="content">
<?php get_template_part('inc/parts/single/listas/pag_episodes'); ?>
<div class="dt_player">
<?php  if ( $dt_player ) : ?>
<ul class="player_ul">
<?php $numerado = 1; { foreach ( $dt_player as $field ) { ?>
	<li><a <?php echo $tabp == 'option-'. $numerado .'' ? 'class="active"' : ''; ?> href="<?php the_permalink() ?>?player=option-<?php echo $numerado; ?>"><?php echo $field['name']; ?></a></li>
<?php $numerado++; } } ?> 
</ul>
<?php endif; ?>
<?php  if ( $dt_player ) : ?>
		<div class="content_player">
		<?php $numerado = 1; { foreach ( $dt_player as $field ) { if ( $_GET['player'] == "option-". $numerado ."") { ?>
			<?php if($field['select'] == 'iframe') {  ?>
			<div class="videobox">
				<div class="embed">
					<iframe src="<?php echo $field['url']; ?>" width="560" height="315" frameborder="0" allowfullscreen></iframe>
				</div>
			</div><?php } ?>
			<?php if($field['select'] == 'mp4') {  ?> <?php echo do_shortcode('[video src="' . $field['url'] .'" width="759px" autoplay="on"]'); ?>   <?php } ?>
		<?php } $numerado++; } } ?> 
		</div>
<?php endif; ?>
</div>
<div class="sbox">
	<div class="wp-content">
		<?php if($d = $name) {   echo '<h1>', $d, ' <span>', $dt_date->format(DT_TIME), '</span>','</h1>';  } ?>
		<?php the_content(); ?>
	</div>
	<div id="dt_galery_ep" class="galeria ggep">
		<?php dt_get_images("w780", $post->ID); ?>
	</div>
</div>
<div class="box_links">
<?php get_template_part('inc/parts/single/listas/links'); ?>
<?php get_template_part('inc/parts/form_send_link'); ?>
</div>
<?php links_social_single(); ?>
<?php get_template_part('inc/parts/comments'); ?> 
</div>
<?php endwhile; endif; ?>
<div class="sidebar">
	<?php if($widgets = dynamic_sidebar( 'sidebar-episodes' )) { $widgets; } else { echo '<a href="'. esc_url( home_url() ) .'/wp-admin/widgets.php">'. __('Add widgets','mtms') .'</a>'; } ?>
</div>
</div>
