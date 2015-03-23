<?php
$wdwtwwy_contact_link_text = ( get_field( 'wdwtwwy_contact_link_text', 'option' ) ? get_field( 'wdwtwwy_contact_link_text', 'option' ) : '' );
$wdwtwwy_posts_per_page = ( get_field( 'wdwtwwy_posts_per_page', 'option' ) ? get_field( 'wdwtwwy_posts_per_page', 'option' ) : '-1' );
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$gallery_query = new WP_Query(array(
    'post_type'         => 'care',
    'posts_per_page'	=> $wdwtwwy_posts_per_page,
    'paged'           	=> $paged
));
if (have_posts()) : while ($gallery_query->have_posts()) : $gallery_query->the_post();
	$wdwtwwy_name = ( get_field( 'wdwtwwy_name' ) ? get_field( 'wdwtwwy_name' ) : '' );
	$wdwtwwy_care = ( get_field( 'wdwtwwy_care' ) ? get_field( 'wdwtwwy_care' ) : '' );
	$wdwtwwy_thumbnail = ( get_field( 'wdwtwwy_thumbnail' ) ? get_field( 'wdwtwwy_thumbnail' ) : '' );
	$wdwtwwy_thumbnail_base = $wdwtwwy_thumbnail['sizes']['care-thumb'];
    $wdwtwwy_thumbnail_retina = $wdwtwwy_thumbnail['sizes']['care-thumb@2'];
?>
	<div class="gallery__item three-col">
		<div class="thumbnail">
			<picture>
	            <!--[if IE 9]><video style="display: none;"><![endif]-->
	            <source srcset="<?php echo $wdwtwwy_thumbnail_retina ?>" media="(-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi)">
	            <img src="<?php echo $wdwtwwy_thumbnail_base ?>" alt="<?php echo $wdwtwwy_thumbnail['alt'] ?>" />
	            <!--[if IE 9]></video><![endif]-->
	        </picture>
		</div>
		<div class="overlay">
			<div class="name">
				<?php echo $wdwtwwy_name; ?>
			</div>
			<div class="cares-text">
				<?php _e( '<em>cares about</em>', DOMAIN ); ?>
			</div>
			<div class="care">
				<?php echo $wdwtwwy_care; ?>
			</div>
			<a href="<?php the_permalink(); ?>"></a>
		</div>
	</div>
<?php endwhile; endif; wp_reset_postdata(); ?>
<div class="gallery__item three-col link">
	<div class="thumbnail">
		<img src="<?php bloginfo('template_url'); ?>/images/spacer.png" alt="" />
	</div>
	<div class="overlay">
		<?php echo $wdwtwwy_contact_link_text; ?>
		<a href="<?php echo home_url(); ?>/contact"></a>
	</div>
</div>