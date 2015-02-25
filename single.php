<?php get_header(); ?>
<main id="main" itemprop="mainContentOfPage" role="main">
	<div class="body__content">
    <?php get_template_part( 'template-parts/content/content', 'single-post' ); echo "\n" ?>
    <?php comment_form(); ?>
    <?php comments_template(); ?>
    </div>
</main>
<?php get_footer(); ?>