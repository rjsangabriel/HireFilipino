<?php


/**
 * This is the Search
 *
 * 
 */

get_header(); ?> 
<?php get_sidebar(); ?>  
<div class="bg-post">
<div class="container">
<div class="col-lg-9 col-lg-offset-1">
<div class="home-header">
&nbsp;
</div>

     <!-- Loop start -->   
        <?php 

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="col-lg-12 box">
  <div class="col-md-11">
       <h3><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></h3>
  
       <strong>Date posted:</strong> <?php the_time( 'M j y' ); ?>
       <strong>Category:</strong> <?php the_category( ', ' ); ?>      <p>By <?php the_author_posts_link(); ?></p>
    
    <div class="entry clear">
      <?php the_excerpt(); ?>
                 </footer>
                <a class="btn btn-primary" href="<?php the_permalink(); ?>">Show More <i class="fa fa-angle-right"></i></a>
            </div>
            </div>
            <div class="col-md-1">
            <h5>
            <strong>PostID:<?php the_ID(); ?></strong>
            <strong>Responses:</strong><br>
            <strong>Viewed:</strong>
            </h5>

            </div>
    </div>
  </div>
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
</div>

  <div class="navigation index">
     <div class="alignleft"><?php next_posts_link( '&larr; Older' ); ?></div>
     <div class="alignright"><?php previous_posts_link( 'Newer &rarr;' ); ?></div>
  </div>

  </div>
  </div>
  </div>
<?php else : ?>
<?php endif; ?>

<!-- Loop End -->


  <?php get_footer(); ?>