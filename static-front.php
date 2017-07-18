<?php 
/*
 Template Name: HomePage
 */
 get_header(); ?>
 
           <!-- Carousel
================================================== -->
<div class="overlay container">
<div class="col-sm-12">
<div class="col-sm-3 lsb-container">
 HIRE-TALENTS <br>
 <p>Hire world class <span style="color:#FFFF00">Filipino</span> talents, click here to view our offered fields</p>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modal1">Learn More</button>
</div>
<div class="col-sm-3 lsb-container">
How Does it work?<br>
<p>Click here to know how we connect you to your Virtual <span style="color:#FFFF00">Filipino</span> worker</p>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modal1">Learn More</button>
</div>
<div class="col-sm-3 lsb-container">
Let us help you<br>
<p>Read our blogs, it will help you do your job efficiently</p>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modal1">Read Blogs</button>
</div>
<div class="col-sm-3 lsb-container">
About us <br>
<p>Get to know the people behind Hire<span style="color:#FFFF00">Filipino</span> or send us a feedback.</p>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modal1">Learn More</button>
</div>


</div>
</div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li> 
    </ol>
    <div class="carousel-inner">

            <div class="item active">
        <img class="img-responsive" src="/wp-content/themes/hirefilipino/img/carousel6.jpg" alt="Image3" >
        <div class="carousel-caption">
        <div class="w3-animate-right">
          Celebrating the <br><span style="color:#ffff00">Filipino</span> Ingenuity <br>
          <br>
          <p class="sub-title">Hire<span style="color:#ffff00">Filipino</span> utilizes the great ingeneuity know all over the globe as the best.</p>
          </div>
        </div>
      </div>

      <div class="item">
        <img class="img-responsive" src="/wp-content/themes/hirefilipino/img/carousel2.jpg" alt="Image2" >
       <!-- <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Ichigo!</p>
        </div> -->
      </div>
    
      <div class="item">
        <img class="img-responsive" src="/wp-content/themes/hirefilipino/img/carousel3.jpg" alt="Image3" >
      <!--  <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>-->
      </div>
      
            <div class="item">
        <img class="img-responsive" src="/wp-content/themes/hirefilipino/img/carousel4.jpg" alt="Image3" >
  <!--      <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div> -->
      </div>
      
            <div class="item">
        <img class="img-responsive" src="/wp-content/themes/hirefilipino/img/carousel5.jpg" alt="Image3" >
    <!--    <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div> -->
      </div>
      
            <div class="item">
        <img class="img-responsive" src="/wp-content/themes/hirefilipino/img/carousel1.jpg" alt="Image1">
       <div class="carousel-caption">
                <img src="/wp-content/themes/hirefilipino/img/logo-bg.png">
                <img src="/wp-content/themes/hirefilipino/img/tagline.png">
          </div> 
      </div>
      
      
      <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="sr-only">Next</span>
      </a>
    </div>

    
  </div>
  
  

  
   <!-- Modal -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-md">
    
        <!-- Login Modal -->
      <div class="modal-content">
            <div class="modal-header">
        
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title alignright"><b>Login your account</b></h4>
          </div>
        <div class="modal-body">
        <p>Login with your HireFilipino account</p>
        <?php echo do_shortcode("[PM_Login]"); ?>
        Dont have an account? Register here
        &nbsp;
        </div>
      </div>
      
    </div>
</div>


<!-- /.carousel -->

    <!--

    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">How do we connect the <span style="color:#ffff00">Filipino</span> to the world and to your Employer?</h2>
                    <hr class="light">
                    <div class="col-lg-3">
                    <i class="fa fa-credit-card" style="font-size:65px"></i>
                    <h3>Subscribe</h3>
                    <p class="text-faded">We offer you flexible access depending on your budjet. May you be will be using our website for a short while or extended time, we got you covered!</p>
                    </div>
                    <div class="col-lg-3">
                    <i class="fa fa-bullhorn" style="font-size:65px"></i>
                    <h3>Post Your Ad</h3>
                    <p class="text-faded">Your Job Ads will be seen by hundreds and thousands of skilled <span style="color:#ffff00">Filipino</span> workers with great qualities and qualifications. </p>
                    </div>
                    <div class="col-lg-3">
                    <i class="fa fa-group" style="font-size:65px"></i>
                    <h3>Hire your Virtual <span style="color:#ffff00">Filipino</span> Worker</h3>
                    <p class="text-faded">Hire the right <span style="color:#ffff00">Filipino</span> virtual assistant for your Job, Communicate using our website or use your our communication tool.</p>
                    </div>
                    <div class="col-lg-3">
                    <i class="fa fa-id-card-o" style="font-size:65px"></i>
                    <h3>Track</h3>
                    <p class="text-faded">Already hired a <span style="color:#ffff00">Filipino</span>?, Track his progress using our website or Pay his hardwork by his Milestones.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark">
        <div class="container-fluid">
        <div class="col-lg-12">
        <h2>Get to know our latest blogs:</h2>
        <h5>By <span style="color:#ffff00">Filipino</span>, For <span style="color:#ffff00">Filipinoes</span> and Truly <span style="color:#ffff00">Filipino</span>. Our blogs will enrich and support our Filipino workers do their job more efficiently by giving them Tips, Guides and General Knowhows.</h5>
        </div>
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="/wp-content/themes/hirefilipino/img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Blog Title
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="/wp-content/themes/hirefilipino/img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Blog Title
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="/wp-content/themes/hirefilipino/img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Blog Title
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="/wp-content/themes/hirefilipino/img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Blog Title
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="/wp-content/themes/hirefilipino/img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Blog Title
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="/wp-content/themes/hirefilipino/img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Blog Title
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> -->
<?php get_footer(); ?>
