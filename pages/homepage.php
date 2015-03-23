<?php 
/*
Template Name: Homepage
*/
get_header(); 
$wdwtwwy_contact_link_text = ( get_field( 'wdwtwwy_contact_link_text', 'option' ) ? get_field( 'wdwtwwy_contact_link_text', 'option' ) : '' );
?>
<main id="main" itemprop="mainContentOfPage" role="main">
	<div class="body__content">
		<div class="intro">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
		<div class="contact__link">
			<?php echo $wdwtwwy_contact_link_text; ?>
			<a href="<?php echo home_url(); ?>/contact"></a>
		</div>
		<div class="gallery">
			<div class="view__toggle">
				<div id="view__picture" class="view__choose view__picture active">
					<?php _e( 'Photo View', DOMAIN ); ?>
				</div>
				<div id="view__list" class="view__choose view__list">
					<?php _e( 'List View', DOMAIN ); ?>
				</div>
			</div>
			<div class="view__full">
				<?php get_template_part( 'template-parts/fppicture' ); ?>
			</div>
			<div class="view__mobile">
				<?php get_template_part( 'template-parts/fplist' ); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>