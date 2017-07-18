<?php 
/*
 Template Name: Default Template-New
 */
 get_header(); ?>
 

<?php get_sidebar('user'); ?>


<div class="col-sm-10 bg-cont">
<div class="no-gutter">


 <?php 
 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="header-page">
<img src="">
         <div class="alignright"><?php the_title(); ?></div>
          </div>
    <div class="spacer10"> </div>
      <div class="container">
         <?php the_content(); ?>
    </div>
  </div>
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

<?php endif; ?>
<?php
 
 ?>
 </div>

 <?php get_footer(); ?>

</div>





