<?php
$wdwtwwy_contact_button_text = dfw_get_field( 'wdwtwwy_contact_button_text', true );
$wdwtwwy_contact_button_url  = dfw_get_field( 'wdwtwwy_contact_button_url', true );
?>
<div class="view__full">
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
      $wdwtwwy_name      = dfw_get_field( 'wdwtwwy_name' );
      $wdwtwwy_care      = dfw_get_field( 'wdwtwwy_care' );
      $wdwtwwy_location  = dfw_get_field( 'wdwtwwy_location' );
      $wdwtwwy_listing_thumbnail = dfw_get_field( 'wdwtwwy_listing_thumbnail' );
      $srcset_value = wp_get_attachment_image_srcset( $wdwtwwy_listing_thumbnail['ID'], 'mobile' );
      $srcset = $srcset_value ? ' srcset="' . esc_attr( $srcset_value ) . '"' : '';
      ?>
      <div class="gallery__item three-col">
        <div class="thumbnail">
          <img src="<?php echo $wdwtwwy_listing_thumbnail['url']; ?>" <?php echo $srcset; ?> alt="<?php echo $wdwtwwy_listing_thumbnail['alt'] ?>" />
        </div>
        <div class="overlay">
          <div class="name">
            <?php echo $wdwtwwy_name; ?>
          </div>
          <div class="cares-text">
            <?php _e( '<em>cares about</em>', 'fcwp' ); ?>
          </div>
          <div class="care">
            <?php echo $wdwtwwy_care; ?>
          </div>
          <a href="<?php the_permalink(); ?>"></a>
        </div>
      </div>
    <?php
    endwhile; 
  endif;
  wp_reset_postdata();
  $wp_query = null;
  $wp_query = $tmp_query;
  ?>
  <div class="gallery__item three-col link">
    <div class="thumbnail">
      <img src="<?php bloginfo('template_url'); ?>/images/spacer.png" alt="" />
    </div>
    <div class="overlay">
      <?php echo $wdwtwwy_contact_button_text; ?>
      <a href="<?php echo $wdwtwwy_contact_button_url; ?>"></a>
    </div>
  </div>
</div>