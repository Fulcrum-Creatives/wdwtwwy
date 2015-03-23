<?php
if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)){
    header('X-UA-Compatible: IE=edge,chrome=1');
}
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html itemscope itemtype="http://schema.org/WebPage <?php language_attributes(); ?> class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if IE 9 ]><html itemscope itemtype="http://schema.org/WebPage <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html itemscope itemtype="http://schema.org/WebPage" <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="icon" type="image/x-icon" />
<link href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" rel="apple-touch-icon" />
<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" media="screen" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php echo '<link rel="canonical" href="' . home_url() . '" />'; echo "\n" ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a href="#main" class="skip-nav assistive-text"><?php _e('Skip to main Content', DOMAIN); ?></a>
<?php
$wdwtwwy_header_image_1 = ( get_field( 'wdwtwwy_header_image_1', 'option' ) ? get_field( 'wdwtwwy_header_image_1', 'option' ) : '' );
$wdwtwwy_header_image_2 = ( get_field( 'wdwtwwy_header_image_2', 'option' ) ? get_field( 'wdwtwwy_header_image_2', 'option' ) : '' );
$wdwtwwy_tagline_1 = ( get_field( 'wdwtwwy_tagline_1', 'option' ) ? get_field( 'wdwtwwy_tagline_1', 'option' ) : '' );
$wdwtwwy_tagline_2 = ( get_field( 'wdwtwwy_tagline_2', 'option' ) ? get_field( 'wdwtwwy_tagline_2', 'option' ) : '' );
?>
<header class="site__header" itemscope itemtype="http://schema.org/WPHeader" role="banner">
    <div class="body__content">
        <?php if ( is_front_page() || is_home() ) : ?>
    		<div class="logo__main">
        		<h1>
                <a href="<?php echo home_url(); ?>">
                <img src="<?php echo $wdwtwwy_header_image_1['url']; ?>" alt="<?php echo $wdwtwwy_header_image_1['url']; ?>" />
                </a>
                </h1>
        	</div>
        	<div class="tagline__main">
        		<?php echo $wdwtwwy_tagline_2; ?>
        	</div>
        <?php else : ?>
        	<div class="sub__full">
	        	<div class="logo">
	        		<h1>
                    <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo $wdwtwwy_header_image_2['url']; ?>" alt="<?php echo $wdwtwwy_header_image_2['url']; ?>" />
                    </a>
                    </h1>
	        	</div>
	        	<div class="tagline">
	        		<span class="tagline__left">
	        			<?php echo $wdwtwwy_tagline_1; ?>
	        		</span>
	        		<span class="tagline__right">
	        			<?php echo $wdwtwwy_tagline_2; ?>
	        		</span>
	        	</div>
	        </div>
	        <div class="sub__mobile">
	        	<div class="logo__main">
                    <a href="<?php echo home_url(); ?>">
            		<img src="<?php echo $wdwtwwy_header_image_1['url']; ?>" alt="<?php echo $wdwtwwy_header_image_1['url']; ?>" />
                    </a>
            	</div>
            	<div class="tagline__main">
            		<?php echo $wdwtwwy_tagline_2; ?>
            	</div>
	        </div>
        <?php endif; ?>
    </div>
</header>