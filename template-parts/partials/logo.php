<?php
$wdwtwwy_logo         = dfw_get_field( 'wdwtwwy_logo', true );
$wdwtwwy_logo_tagline = dfw_get_field( 'wdwtwwy_logo_tagline', true );
$wdwtwwy_tagline_url  = dfw_get_field( 'wdwtwwy_tagline_url', true );
$logo_srcset_value    = wp_get_attachment_image_srcset( $wdwtwwy_logo['ID'], 'tablet' );
$logo_srcset          = $logo_srcset_value ? ' srcset="' . esc_attr( $logo_srcset_value ) . '"' : '';
?>
<h1>
  <a href="<?php echo home_url(); ?>">
    <img src="<?php echo $wdwtwwy_logo['url']; ?>" <?php echo $logo_srcset; ?> atl="<?php echo $wdwtwwy_logo['alt']; ?>" />
  </a>
  <span class="ir">
    <?php echo bloginfo('name'); ?>
  </span>
</h1>
<h2 class="header__tagline avenir-bold">
  <a href="<?php echo $wdwtwwy_tagline_url; ?>">
    <?php echo $wdwtwwy_logo_tagline; ?>
  </a>
</h2>