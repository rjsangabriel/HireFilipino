<?php 
/*
 Template Name: Profile 
 */
 get_header(); ?>
 

 <?php get_sidebar('user');?>
<div class="no-gutter">
<div class="col-sm-10">

 <?php 
 global $current_user; 
 if ( user_can( $current_user, "employer" ) ){ 
	 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          
      <div class="entry clear">
       <?php the_post_thumbnail(); ?>
       <?php the_content(); ?>
    </div>
  </div>
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

<?php endif; ?>
<?php
 }
 

 else{
 echo do_shortcode("[PM_Profile]"); 
 } 
?>

</div>

</div>

<?php wp_footer(); ?> 


<!-- Loop End -->
