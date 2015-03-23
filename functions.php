<?php
/* Required Files
===============================================================================*/
include( get_template_directory() .'/includes/constant-variables.php' );

/* Content Width
===============================================================================*/
if ( ! isset( $content_width ) ) {
    $content_width = 1000;
}

/* Theme Support and Registers
===============================================================================*/
function theme_support() {
    /**
     * Automatic Feed Support
     */
    add_theme_support( 'automatic-feed-links' );
    /**
     * Title Tage Support
     */    
    add_theme_support( 'title-tag' );
    /**
     * Post Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'care-large', 650, 650, true );
    add_image_size( 'care-large@2', 1300, 1300, true );

    add_image_size( 'care-thumb', 423, 423, true );
    add_image_size( 'care-thumb@2', 846, 846, true );

    /**
     * Post Formats
     */
    $post_formats_args = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
    // add_theme_support( 'post-formats', $post_formats_args );
    /**
     * HTML5 Support
     */
    $html5_args = array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' );
    add_theme_support( 'html5', $html5_args );
    /**
     * Custom Background
     */
    $custom_background_args = array(
        'default-color'          => '',
        'default-image'          => '',
        'default-repeat'         => '',
        'default-position-x'     => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => ''
    );
    add_theme_support( 'custom-background', $custom_background_args );
    /**
     * Custom Header
     */
    $custom_header_args = array(
        'default-image'          => '',
        'random-default'         => false,
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    );
    add_theme_support( 'custom-header', $custom_header_args );
    /**
     * Register Nav Menus
     */
    register_nav_menus( array(
        'primary' => __( 'Primary', DOMAIN ),
    ) );
}
add_action( 'after_setup_theme', 'theme_support' );

/* Editor Styles
===============================================================================*/
if( file_exists( 'editor-style.css' ) ) {
    add_editor_style( 'editor-style.css' );
}

/*  Load JavaScript
===============================================================================*/
function load_javascript() {
    /**
     * jQuery
     */
    wp_enqueue_script('jquery');
    /**
     * main.js
     */
    wp_register_script( 'main.min.js', THEME_URL . 'js/main.min.js', false, '1.0', true );
    wp_enqueue_script( 'main.min.js' );
    /**
     * Picturefill
     */
    wp_register_script( 'picturefill', THEME_URL . 'js/picturefill.js', false, '1.0', false );
    wp_enqueue_script( 'picturefill' );
    /**
     * Comment Thread
     */
    if( is_singular() ) {
        if( get_option('thread_comments'))  {
            //wp_enqueue_script('comment-reply');
        }
    }
}
add_action( 'wp_enqueue_scripts', 'load_javascript' );

/* IE Conditional JavaScript
===============================================================================*/
function load_ie() {
  ob_start();?>
<!--[if (lt IE 9) & (!IEMobile)]><script src="<?php echo get_template_directory_uri(); ?>/js/ie.min.js"></script><![endif]-->
  <?php
  echo ob_get_clean();
}
add_action( 'wp_head', 'load_ie',10 );

/* Custom Comments Layout
===============================================================================*/
/**
 * Custom Comments Template
 * @param  string $comment
 * @param  array $args
 * @param  int $depth
 * @global strins  $GLOBALS['comment']
 * @global int $user_ID
 */
function custom_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    global $user_ID; 
    ob_start(); ?>
    <li id="comment-<?php comment_ID() ?>" <?php comment_class( 'comment-wrapper' ) ?> itemscope itemtype="http://schema.org/Comment">
      <?php if( $user_ID ) : if( current_user_can('administrator') ) : ?>
            <div class="comment-edit">
              <?php edit_comment_link( __( 'Edit', DOMAIN ),'','' ) ?>
            </div>
            <div class="comment-approval">
              <p>
                <?php 
                  if ( $comment->comment_approved == '0' ) 
                  _e( 'Your comment is awaiting moderation.', '' ) 
                ?>
              </p>
          </div>
      <?php endif; endif; ?>
    <article class="comment-container">
        <header class="comment-header comment-meta">
          <?php echo '<span itemprop="image">' . get_avatar( $comment, $size='50' ) . '</span>'; ?>
          <?php get_template_part( 'template-parts/comments/comment-meta/meta', 'author'); ?>
          <?php get_template_part( 'template-parts/comments/comment-meta/meta', 'date' ); ?>
        </header>
        <section class="comment-body" itemprop="comment">
            <?php comment_text(); ?>
        </section>
        <footer class="comment-footer">
            <p class="comment-reply">
                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </p>
        </footer>
    </article>
<?php echo ob_get_clean();
}

/* Sidebar Widget Area
===============================================================================*/
function register_custom_sidebars() {
    if( ! function_exists( register_sidebar() ) ) {
        register_sidebar( array(
            'name'          => __( 'Primary', DOMAIN ),
            'id'            => 'primary',
            'description'   => '',
            'class'         => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>'
        ));
        register_sidebar( array(
            'name'          => __( 'Left Sidebar', DOMAIN ),
            'id'            => 'sidebar-left',
            'description'   => '',
            'class'         => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>'
        ));
        register_sidebar( array(
            'name'          => __( 'Right Sidebar', DOMAIN ),
            'id'            => 'sidebar-right',
            'description'   => '',
            'class'         => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>'
        ));
    }
}
add_action( 'widgets_init', 'register_custom_sidebars' );
/* Add placeholer feild for gravity forms
===============================================================================*/
add_action("gform_field_standard_settings", "my_standard_settings", 10, 2);
function my_standard_settings($position, $form_id){
    if($position == 25){ ?>  
        <li class="admin_label_setting field_setting" style="display: list-item; ">
            <label for="field_placeholder">Placeholder Text
                <a href="javascript:void(0);" class="tooltip tooltip_form_field_placeholder" tooltip="&lt;h6&gt;Placeholder&lt;/h6&gt;Enter the placeholder/default text for this field.">(?)</a>
            </label>
            <input type="text" id="field_placeholder" class="fieldwidth-3" size="35" onkeyup="SetFieldProperty('placeholder', this.value);">
        </li>
        <?php 
    }
}
add_action("gform_editor_js", "my_gform_editor_js");
function my_gform_editor_js(){ ?>
<script>
  jQuery(document).bind("gform_load_field_settings", function(event, field, form){
    jQuery("#field_placeholder").val(field["placeholder"]);
  });
</script>
<?php
}
add_action('gform_enqueue_scripts',"my_gform_enqueue_scripts", 10, 2);
function my_gform_enqueue_scripts($form, $is_ajax=false){?>
    <script>
        jQuery(function(){
            <?php
            foreach($form['fields'] as $i=>$field){
                if(isset($field['placeholder']) && !empty($field['placeholder'])){      
                    ?>        
                    jQuery('#input_<?php echo $form['id']?>_<?php echo $field['id']?>').attr('placeholder','<?php echo $field['placeholder']?>');       
                    <?php
                }
            }
            ?>
        });
    </script>
<?php
}