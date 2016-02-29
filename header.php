<?php get_template_part( 'template-parts/head' ); ?>
<header id="header" class="header" role="banner">
  <div class="content__wrapper">
    <div id="header__logo" class="header__logo">
      <?php 
        if ( is_front_page() || is_home() ) :
          get_template_part( 'template-parts/partials/logo' ); 
        else:
          get_template_part( 'template-parts/partials/sublogo' ); 
        endif;
      ?>
    </div>
  </div>
</header>
<main id="main" class="main" role="main">