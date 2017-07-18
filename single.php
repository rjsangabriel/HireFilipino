<?php
/**
 * The template for displaying all single posts and attachments
 *
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
  <div class="container">
  
    <div class="col-lg-12">
    <div class="box">
    <center>
       <img class="img-responsive" <?php the_post_thumbnail();?>
        <h3><strong><?php the_title(); ?></strong></h3>
       <p>By <?php the_author_posts_link(); ?>, <?php the_time( 'M j y' ); ?></p>
       </center>
   
       <?php the_content(); ?>
    
    <?php
 			if ( is_singular() ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next:') . '</span> ' .
						'<span class="screen-reader-text">' .  '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous:') . '</span> ' .
						'<span class="screen-reader-text">' . '</span> ' .
						'%title',
				) );
			}
			

			// End of the loop.
		endwhile;
		?>
  </div>
    


<?php else : ?>
<?php endif; ?>
</div>

<!-- Loop End -->
<div class="container">
<div class="col-lg-8 col-lg-offset-1">
<div class="box">
<?php comment_form(); ?>
<?php comments_template(); ?>


</div>
</div>
</div>

</div>
<!-- .content-area -->

<?php get_footer(); ?>
