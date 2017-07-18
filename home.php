<?php 
/**
* Blog Template
*/
 get_header(); ?>
 <div class="bg-blog">

             <div class="blog-header">
             <div class="container">
             	<div class="spacer10">&nbsp;</div>
                    <img src="/wp-content/themes/hirefilipino/img/logo-bg.png" width="250">
                    <p>Blogs for <span style="color: #FFFF00">Filipinos</span>; by <span style="color: #FFFF00">Filipinos</span></p></h1>
                    <ol class="breadcrumb">
                    <li>Categories:</li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Online</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Guides</a></li>
                </ol>
                </div>
                </div>
                
               
      
       
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    		
            <div class="container">
            <div class="col-lg-12 box">
            <div class="col-md-5">
                <a href="<?php the_permalink(); ?>">
                    <img class="img-responsive img-hover" <?php the_post_thumbnail();?>
                </a></a>
            </div>
            <div class="col-md-6">
                <h3>
                    <strong><?php the_title(); ?></strong>
                </h3>
                <p>By <?php the_author_posts_link(); ?>, <?php the_time( 'M j y' ); ?></p>
                </p>
                <p><?php the_excerpt(); ?></p>
                <footer class="post-footer">
      			 <div class="blog-comments"><i class="fa fa-comments"></i>&nbsp;<?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
   				 </footer>
                <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
            </div>   
        </div>




  </div>
 <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="container">

     <div class="alignleft col-lg-6"><a class="btn btn-primary" <?php next_posts_link( '&larr; Older' ); ?> </a></a></div>
     <div class="alignright col-lg-6"><a class="btn btn-primary" <?php previous_posts_link( 'Newer &rarr;' ); ?>  </a></a></div>
     <div class="home-header">
&nbsp;
</div>
    
  </div>
</div>

<?php else : ?>
<?php endif; ?>




  <?php get_footer(); ?>
