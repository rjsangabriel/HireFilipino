
<?php
/* enqueue styles and scripts */
	// smart jquery inclusion

function jpen_enqueue_assets() {
	
  
  /* boostrap resources from theme files */
  wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
  wp_enqueue_style( 'sidebar-css' , get_template_directory_uri() . '/css/simple-sidebar.css' );
  /* theme's primary style.css file */
  wp_enqueue_style( 'main-css' , get_stylesheet_uri() );
  /* Font Awesome */
  wp_enqueue_style( 'font-awesome' , get_template_directory_uri() .'/vendor/font-awesome/css/font-awesome.min.css' );
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800', false );
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic', false );
  /*transition*/
  wp_enqueue_style( 'w3.css', 'https://www.w3schools.com/w3css/4/w3.css', false );

 

  /*conditional resources for IE 9 */
  wp_enqueue_script( 'simple-blog-html5', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js' , array('jquery'), '3.7.0' );
  wp_script_add_data( 'simple-blog-html5', 'conditional', 'lt IE 9' );
  wp_enqueue_script( 'simple-blog-respondjs', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js' , array('jquery'), '1.4.2' );
  wp_script_add_data( 'simple-blog-respondjs', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts' , 'jpen_enqueue_assets' );



if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {


/*deregister*/
   wp_deregister_script('jquery');
   wp_deregister_script('jquery-easing');
   wp_deregister_script('bootstrap-js');
   wp_deregister_script('scroll-reveal');
   wp_deregister_script('magnific-popup');
   wp_deregister_script('theme-js');

   
   /*register*/
   

   wp_register_script('jquery', get_template_directory_uri() . "/vendor/jquery/jquery.min.js", false);
   wp_register_script('jquery-easing', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js", false);
   wp_register_script('bootstrap-js', get_template_directory_uri() . "/vendor/bootstrap/js/bootstrap.min.js", false);
   wp_register_script('scroll-reveal', get_template_directory_uri() . "/vendor/scrollreveal/scrollreveal.min.js", false);
   wp_register_script('magnific-popup', get_template_directory_uri() . "/vendor/magnific-popup/jquery.magnific-popup.min.js", false);
   wp_register_script('theme-js', get_template_directory_uri() . "/js/creative.js", false);

   
   /*Enqueue*/
   wp_enqueue_script('jquery');
   wp_enqueue_script('jquery-easing');
   wp_enqueue_script('bootstrap-js');
   wp_enqueue_script('scroll-reveal');
   wp_enqueue_script('magnific-popup');
   wp_enqueue_script('theme-js');
}

/* header */

register_nav_menus( array( primary => Homemenu ) );


/*theme support*/
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' ); 

/*widget areas*/
/*footer*/
function footer_widget_area() {
  register_sidebar( array(
    'name'          => 'footer Widget Area 1',
    'id'            => 'footer-sidebar-widget1',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="section-heading">',
    'after_title'   => '</h2>',
    ));
	
	register_sidebar( array(
    'name'          => 'footer Widget Area 2',
    'id'            => 'footer-sidebar-widget2',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
    ));
	
	register_sidebar( array(
    'name'          => 'footer Widget Area 3',
    'id'            => 'footer-sidebar-widget3',
    'before_widget' => '<h5>',
    'after_widget'  => '</h5>',
    'before_title'  => '<h2 class="section-heading">',
    'after_title'   => '</h2>',
    ));
}
add_action( 'widgets_init' , 'footer_widget_area' );



/*sidebar*/
function sidebar_widget_area() {
  register_sidebar( array(
    'name'          => 'sidebar Widget Area 1',
    'id'            => 'sidebar-widget1',
    'before_widget' => '<div class="menu-list">',
    'after_widget'  => '</div>',
    'before_title'  => '<div style="background-color: #540F54; color: white; padding: 1px;"><strong><center><h4>',
    'after_title'   => '</h4></strong></center></div>',
    ));
  

}
add_action( 'widgets_init' , 'sidebar_widget_area' );

/*disable wp adminbar*/

show_admin_bar(false);

/*field editor*/

add_filter('job_bm_filter_job_input_fields',  'job_bm_filter_job_input_fields_remove' );  
function job_bm_filter_job_input_fields_remove($input_fields){
    // unset/remove any meta fileds
    unset($input_fields['meta_fields']['job_info']['meta_fields']['job_bm_featured']);
    return $input_fields;
  }
  
  function job_bm_filters_salary_type_extra($salary_type){

    $salary_type_new = array('fixed'=>'Fixed','min-max'=>'Min - Max',);
    $salary_type = array_merge($salary_type,$salary_type_new);

    return $salary_type;

    }
add_filter('job_bm_filters_salary_type','job_bm_filters_salary_type_extra');

/**
* Removes or edits the 'Protected:' part from posts titles
*/
 
add_filter( 'protected_title_format', 'remove_protected_text' );
function remove_protected_text() {
return __('%s');
}

?>







