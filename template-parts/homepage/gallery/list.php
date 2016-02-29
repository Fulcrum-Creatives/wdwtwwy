<div class="view__mobile list">
  <?php
  $paged         = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $gallery_query = new WP_Query( array(
    'post_type'    => 'care',
    'paged'        => $paged
  ) );
  $tmp_query     = $wp_query;
  $wp_query      = null;
  $wp_query      = $gallery_query;
  if (have_posts()) : 
    while ( $gallery_query->have_posts()) : 
      $gallery_query->the_post();
      $wdwtwwy_care      = dfw_get_field( 'wdwtwwy_care' );
      ?>
      <div class="list__item">
        <a href="<?php the_permalink(); ?>"><?php echo $wdwtwwy_care; ?></a>
      </div>
    <?php
    endwhile; 
  endif;
  wp_reset_postdata();
  $wp_query = null;
  $wp_query = $tmp_query;
  ?>
</div>