<?php 
/*
Template Name: Homepage
*/
get_header(); 
?>
<?php 
if (have_posts()) : while (have_posts()) : the_post(); 
	$wdwtwwy_contact_link_text = ( get_field( 'wdwtwwy_contact_link_text', 'option' ) ? get_field( 'wdwtwwy_contact_link_text', 'option' ) : '' );
?>
	<div class="intro">
		<?php the_content(); ?>
	</div>
	<div class="contact__link">
		<?php echo $wdwtwwy_contact_link_text; ?>
		<a href="<?php echo home_url(); ?>/contact"></a>
	</div>
<?php endwhile; endif; wp_reset_postdata(); ?>
<?php get_footer(); ?>