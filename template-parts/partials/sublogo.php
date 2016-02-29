<?php
$wdwtwwy_sub_page_logo = dfw_get_field( 'wdwtwwy_sub_page_logo', true );
$sublogo_srcset_value  = wp_get_attachment_image_srcset( $wdwtwwy_sub_page_logo['ID'], 'tablet' );
$sublogo_srcset        = $sublogo_srcset_value ? ' srcset="' . esc_attr( $sublogo_srcset_value ) . '"' : '';
$wdwtwwy_sub_page_tagline_one = dfw_get_field( 'wdwtwwy_sub_page_tagline_one', true );
$wdwtwwy_sub_page_tagline_two = dfw_get_field( 'wdwtwwy_sub_page_tagline_two', true );
?>
<div class="sub__full">
  <div class="logo">
    <h1>
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo $wdwtwwy_sub_page_logo['url']; ?>" <?php echo $sublogo_srcset; ?> atl="<?php echo $wdwtwwy_sub_page_logo['alt']; ?>" />
      </a>
    </h1>
  </div>
  <div class="tagline">
    <span class="tagline__left">
      <?php echo $wdwtwwy_sub_page_tagline_one; ?>
    </span>
    <span class="tagline__right">
      <?php echo $wdwtwwy_sub_page_tagline_two; ?>
    </span>
  </div>
</div>
<div class="sub__mobile header__logo">
  <?php get_template_part( 'template-parts/partials/logo' ); ?>
</div>