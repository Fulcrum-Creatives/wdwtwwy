<?php
$wdwtwwy_posts_per_page = ( get_field( 'wdwtwwy_posts_per_page', 'option' ) ? get_field( 'wdwtwwy_posts_per_page', 'option' ) : '-1' );
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$list_query = new WP_Query(array(
    'post_type'         => 'care',
    'posts_per_page'	=> $wdwtwwy_posts_per_page,
    'paged'           	=> $paged
));
if (have_posts()) : while ($list_query->have_posts()) : $list_query->the_post();
	$wdwtwwy_care = ( get_field( 'wdwtwwy_care' ) ? get_field( 'wdwtwwy_care' ) : '' );
?>
	<div class="list__item">
		<a href="<?php the_permalink(); ?>"><?php echo $wdwtwwy_care; ?></a>
	</div>
<?php endwhile; endif; wp_reset_postdata(); ?>