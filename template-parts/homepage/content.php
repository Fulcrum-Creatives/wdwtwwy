<?php
$wdwtwwy_contact_button_text = dfw_get_field( 'wdwtwwy_contact_button_text', true );
$wdwtwwy_contact_button_url  = dfw_get_field( 'wdwtwwy_contact_button_url', true );
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    ?>
    <div class="content__wrapper">
      <div class="intro-text">
      <?php
      the_content();
      ?>
      </div>
      <a href="<?php echo $wdwtwwy_contact_button_url; ?>" class="button button__one avenir-bold">
        <?php echo $wdwtwwy_contact_button_text; ?>
      </a>
    </div>
    <?php
  endwhile; 
endif;
wp_reset_postdata();
?>