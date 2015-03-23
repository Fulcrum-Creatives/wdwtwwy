<?php get_header(); ?>
<main id="main" itemprop="mainContentOfPage" role="main">
	<div class="body__content care">
	<?php 
	if (have_posts()) : while (have_posts()) : the_post(); 
		$wdwtwwy_thumbnail = ( get_field( 'wdwtwwy_thumbnail' ) ? get_field( 'wdwtwwy_thumbnail' ) : '' );
		$wdwtwwy_thumbnail_base = $wdwtwwy_thumbnail['sizes']['care-large'];
	    $wdwtwwy_thumbnail_retina = $wdwtwwy_thumbnail['sizes']['care-large@2'];
	    $wdwtwwy_name = ( get_field( 'wdwtwwy_name' ) ? get_field( 'wdwtwwy_name' ) : '' );
	    $wdwtwwy_care = ( get_field( 'wdwtwwy_care' ) ? get_field( 'wdwtwwy_care' ) : '' );
	    $wdwtwwy_location = ( get_field( 'wdwtwwy_location' ) ? get_field( 'wdwtwwy_location' ) : '' );
	?>
     	<div class='col__left'>
	     	<div class="care__image">
	     		<picture>
		            <!--[if IE 9]><video style="display: none;"><![endif]-->
		            <source srcset="<?php echo $wdwtwwy_thumbnail_retina ?>" media="(-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi)">
		            <img src="<?php echo $wdwtwwy_thumbnail_base ?>" alt="<?php echo $wdwtwwy_thumbnail['alt'] ?>" />
		            <!--[if IE 9]></video><![endif]-->
		        </picture>
		    </div>
     	</div>
     	<div class="col__right">
     		<div class="care__name care__content">
     			<span class="name__bold"><?php echo $wdwtwwy_name; ?></span><?php _e( ' cares about', DOMAIN ); ?>
     		</div>
     		<div class="care__care care__content">
     			<?php echo $wdwtwwy_care; ?>
     		</div>
     		<div class="care__why care__content">
     			<em><?php _e( 'Why: ', DOMAIN ); ?></em><?php the_content(); ?>
 			</div>
 			<div class="care__where care__content">
 				<em><?php _e( 'Where: ', DOMAIN ); ?></em><?php echo $wdwtwwy_location; ?>
 			</div>
     	</div>
     <?php
 		$prev_post = get_adjacent_post(false, '', true);
		if(!empty($prev_post)) {
			$url = get_permalink($prev_post->ID);
			?>
			<div class="nav__posts prev">
				<span class="chevron">&lt;</span><span class="nav__pagi--text"><?php _e( 'Previous Care', DOMAIN ); ?></span>
				<a href="<?php echo $url; ?>"></a>
			</div>
			<?php
		}
		?>
		<?php
		$next_post = get_adjacent_post(false, '', false);
		if(!empty($next_post)) {
			$name = get_post_meta( $next_post->ID, 'wdwtwwy_name', true );
			$care_about = get_post_meta( $next_post->ID, 'wdwtwwy_care', true );
			$url = get_permalink($next_post->ID);
			?>
			<div class="nav__posts next">
				<span class="nav__pagi--text"><?php _e( 'Next Care', DOMAIN ); ?></span><span class="chevron">&gt;</span>
				<a href="<?php echo $url; ?>"></a>
			</div>
			<?php
		}
		?>
    <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
</main>
<?php get_footer(); ?>