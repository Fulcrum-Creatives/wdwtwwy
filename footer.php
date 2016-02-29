<?php
$wdwtwwy_company_name      = dfw_get_field( 'wdwtwwy_company_name', true );
$wdwtwwy_twitter           = dfw_get_field( 'wdwtwwy_twitter', true );
$wdwtwwy_instagram         = dfw_get_field( 'wdwtwwy_instagram', true );
$wdwtwwy_main_site_url     = dfw_get_field( 'wdwtwwy_main_site_url', true );
$wdwtwwy_url_display_text  = dfw_get_field( 'wdwtwwy_url_display_text', true );
$wdwtwwy_co_address        = dfw_get_field( 'wdwtwwy_co_address', true );
$wdwtwwy_co_apt_suite      = dfw_get_field( 'wdwtwwy_co_apt_suite', true );
$wdwtwwy_co_city_state_zip = dfw_get_field( 'wdwtwwy_co_city_state_zip', true );
$wdwtwwy_co_phone_number   = dfw_get_field( 'wdwtwwy_co_phone_number', true );
$wdwtwwy_footer_text       = dfw_get_field( 'wdwtwwy_footer_text', true );
?>
</main>
<footer id="footer" class="footer" role="contentinfo">
  <div class="content__wrapper">
    <div class="left-col">
      <?php _e('<span class="leader">A Project of</span>'); 
      echo '</br><span class="co-name">' . $wdwtwwy_company_name . '</span>'; ?>
      <ul class="social-links">
        <li class="icon-twitter"><a href="<?php echo $wdwtwwy_twitter; ?>"></a></li>
        <li class="icon-instagram"><a href="<?php echo $wdwtwwy_instagram; ?>"></a></li>
      </ul>
      <div class="fc-url">
        <a href="<?php echo $wdwtwwy_main_site_url; ?>"><?php echo $wdwtwwy_url_display_text; ?></a>
      </div>
      <div class="address">
        <?php echo $wdwtwwy_co_address ; ?></br>
        <?php echo $wdwtwwy_co_apt_suite; ?></br>
        <?php echo $wdwtwwy_co_city_state_zip; ?></br>
        <?php echo $wdwtwwy_co_phone_number; ?>
      </div>
      <div class="copyright" itemprop="copyrightHolder">
           &copy; <span itemprop="copyrightYear"><?php echo date('Y'); ?></span> <?php echo $wdwtwwy_company_name; ?>
        </div>
    </div>
    <div class="right-col">
      <?php echo $wdwtwwy_footer_text; ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>