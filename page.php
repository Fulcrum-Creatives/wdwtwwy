<?php get_header(); ?>
<main id="main" itemprop="mainContentOfPage" role="main">
    <div class="body__content">
    	<?php 
    	if (have_posts()) : while (have_posts()) : the_post();
    		the_content();
        endwhile; endif; wp_reset_postdata();
        ?>  
    </div>
</main>
<?php get_footer(); ?>