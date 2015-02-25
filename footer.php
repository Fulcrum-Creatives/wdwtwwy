</div> <!-- /.content-container -->
<?php
$wdwtwwy_company_name = ( get_field( 'wdwtwwy_company_name', 'option' ) ? get_field( 'wdwtwwy_company_name', 'option' ) : '' );
$wdwtwwy_twitter = ( get_field( 'wdwtwwy_twitter', 'option' ) ? get_field( 'wdwtwwy_twitter', 'option' ) : '' );
$wdwtwwy_instagram = ( get_field( 'wdwtwwy_instagram', 'option' ) ? get_field( 'wdwtwwy_instagram', 'option' ) : '' );
$wdwtwwy_main_site_url = ( get_field( 'wdwtwwy_main_site_url', 'option' ) ? get_field( 'wdwtwwy_main_site_url', 'option' ) : '' );
$wdwtwwy_url_display_text = ( get_field( 'wdwtwwy_url_display_text', 'option' ) ? get_field( 'wdwtwwy_url_display_text', 'option' ) : '' );
$wdwtwwy_co_address = ( get_field( 'wdwtwwy_co_address', 'option' ) ? get_field( 'wdwtwwy_co_address', 'option' ) : '' );
$wdwtwwy_co_apt_suite = ( get_field( 'wdwtwwy_co_apt_suite', 'option' ) ? get_field( 'wdwtwwy_co_apt_suite', 'option' ) : '' );
$wdwtwwy_co_city_state_zip = ( get_field( 'wdwtwwy_co_city_state_zip', 'option' ) ? get_field( 'wdwtwwy_co_city_state_zip', 'option' ) : '' );
$wdwtwwy_co_phone_number = ( get_field( 'wdwtwwy_co_phone_number', 'option' ) ? get_field( 'wdwtwwy_co_phone_number', 'option' ) : '' );
$wdwtwwy_footer_text = ( get_field( 'wdwtwwy_footer_text', 'option' ) ? get_field( 'wdwtwwy_footer_text', 'option' ) : '' );
?>
<footer itemscope itemtype="http://schema.org/WPFooter" class="body__footer" role="contentinfo">
	<div class="body__content">
		<div class="left-col">
			<?php _e('<span class="leader">A Project of</span>'); 
			echo '</br><span class="co-name">' . $wdwtwwy_company_name . '</span>'; ?>
			<ul class="social-links">
				<li class="icon-diamond"><a href="<?php ?>"></a></li>
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
		       &copy; <span itemprop="copyrightYear"><?php echo date('Y'); ?></span> <?php bloginfo( 'name' ); ?>
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