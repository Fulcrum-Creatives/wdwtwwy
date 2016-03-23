<?php 
$wdwtwwy_contact_button_url  = dfw_get_field( 'wdwtwwy_contact_button_url', true );
$wdwtwwy_contact_button_text = dfw_get_field( 'wdwtwwy_contact_button_text', true );
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $wdwtwwy_name      = dfw_get_field( 'wdwtwwy_name' );
    $wdwtwwy_care      = dfw_get_field( 'wdwtwwy_care' );
    $wdwtwwy_location  = dfw_get_field( 'wdwtwwy_location' );
    $wdwtwwy_thumbnail = dfw_get_field( 'wdwtwwy_thumbnail' );
    $srcset_value = wp_get_attachment_image_srcset( $wdwtwwy_thumbnail['ID'], 'tablet' );
    $srcset = $srcset_value ? ' srcset="' . esc_attr( $srcset_value ) . '"' : '';
    $prev_post = get_adjacent_post( false, '', true );
    $next_post = get_adjacent_post( false, '', false );
    ?>
    <div class="inner">
      <div class="content__wrapper care">

        <div class='col__left'>
          <div class="care__image">
            <img src="<?php echo $wdwtwwy_thumbnail['url']; ?>" <?php echo $srcset; ?> alt="<?php echo $wdwtwwy_thumbnail['alt'] ?>" />
          </div>
        </div>

        <div class="col__right">
          <?php if( $wdwtwwy_name ) : ?>
            <div class="care__name care__content">
              <span class="name__bold"><?php echo $wdwtwwy_name; ?></span><?php _e( ' cares about', 'fcwp' ); ?>
            </div>
          <?php 
          endif; 
          if( $wdwtwwy_care ) :
          ?>
            <div class="care__care care__content">
              <?php echo $wdwtwwy_care; ?>
            </div>
          <?php 
          endif; 
          if( $post->post_content != "") :
          ?>
            <div class="care__why care__content">
              <em><?php _e( 'Why: ', 'fcwp' ); ?></em><?php the_content(); ?>
            </div>
          <?php 
          endif;
          if( $wdwtwwy_location ) : 
          ?>
            <div class="care__where care__content">
              <em><?php _e( 'Where: ', 'fcwp' ); ?></em><?php echo $wdwtwwy_location; ?>
            </div>
          <?php endif; ?>
        </div>
        <div style="clear: both"></div>
        <a href="<?php echo $wdwtwwy_contact_button_url; ?>" class="button button__one avenir-bold">
          <?php echo $wdwtwwy_contact_button_text; ?>
        </a>
      </div>
      <?php
      if( !empty( $prev_post ) ) :
        $url = get_permalink( $prev_post->ID );
      ?>
        <div class="nav__posts prev">
          <span class="chevron">&lt;</span><span class="nav__pagi--text"><?php _e( 'Previous Care', 'fcwp' ); ?></span>
          <a href="<?php echo $url; ?>"></a>
        </div>
      <?php
      endif;
      if( !empty( $next_post ) ) :
        $name = get_post_meta( $next_post->ID, 'wdwtwwy_name', true );
        $care_about = get_post_meta( $next_post->ID, 'wdwtwwy_care', true );
        $url = get_permalink($next_post->ID);
        ?>
        <div class="nav__posts next">
          <span class="nav__pagi--text"><?php _e( 'Next Care', 'fcwp' ); ?></span><span class="chevron">&gt;</span>
          <a href="<?php echo $url; ?>"></a>
        </div>
      <?php endif; ?>
    </div>
    <?php
  endwhile; 
endif;