<?php 
/*
 Template Name: Login
 */
 get_header(); ?>
<body class="login-bg">
 

<div class="col-lg-4 col-lg-offset-4">
<div class="login-box">
<center>
<img src="/wp-content/themes/hirefilipino/img/logo-bg.png" width="250">
</center>    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry clear">
       <?php the_content(); ?>
    </div>
  </div>
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
<?php else : ?>
<?php endif; ?>
<p>by logging in, you agree to our terms and regulations that can be found <a href="#">here</a></p>
</div>
</div>

</body>

<!-- Loop End -->
