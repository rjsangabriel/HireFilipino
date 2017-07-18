<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HireFilipino
 * @since 1.0
 * @version 1.0
 */
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Title -->
<?php
if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'theme_slug_render_title' );
}
?>
<!-- end -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
<?php wp_head(); ?>
</head>
<body>


<?php
 if( is_user_logged_in() ) { 
	echo " ";
} else { 
	echo " 
	<nav id='mainNav' class='navbar navbar-default navbar-fixed-top'>
        <div class='container-fluid'>
      
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
                    <span class='sr-only'>Toggle navigation</span> Menu <i class='fa fa-bars'></i>
                </button>
                <a class='navbar-brand' href='http://localhost/'><img src='/wp-content/themes/hirefilipino/img/logo-header.png'></a>              
				</div>

            <!-- Collect the nav links, forms, and other content for toggling -->
			
			            <div class='collapse navbar-collapse'>
                <ul class='nav navbar-nav navbar-right'>
                    <li>
                        <a data-toggle='modal' data-target='#login' href='#'><center><i class='glyphicon glyphicon-log-in'></i><br>Login</center></a>
                    </li>
                    <li>
                        <a href='#' ><center><i class='fa fa-pencil-square-o'></i><br>Register</center></a>
                    </li>
                    </ul>
            </div>
			";
 

?>
        </div>
        <!-- /.container-fluid -->  


         
    </nav>

   <?php } ?>

