<?php
/**
 * The sidebarss for our theme
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

   <div class="no-gutter">
   <div class="col-sm-2">
<div class="nav-side-menu">
    <div class="brand"><a href="/my-profile/"><img src="/wp-content/themes/hirefilipino/img/logo-header.png"></a></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li class="active">
                  <a href="/my-profile/">
                  <i class="fa fa-user fa-lg"></i> <?php global $current_user;
      get_currentuserinfo();
      echo $current_user->user_firstname . "'s";
?> Profile
                  </a>
                </li>
                
                <li  data-toggle="collapse" data-target="#products" class="collapsed">
                  <a href="#"><i class="fa fa-pencil fa-lg"></i> Submit a Post <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                
                    <li><?php 
 global $current_user; 
 if ( user_can( $current_user, "employer" ) ){
	 echo "<a href='/my-profile/job-submit/'>Job Posting</a>";
 }
 else{
 echo "<a href='/my-profile/project-management/submit-project/'>New Project Report</a>";
 } 
?></li>
                    <li><a href="/submit-blog/">Suggest a Blog</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i>Services<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li><a href="/my-profile/job-listings/">Job Listings</a></li>
                  <li><a href="/my-profile/project-management/">Project Reports</a></li>
                  <li><a href="/posts/">Blogs</a></li>
                </ul>
    
                <li data-toggle="collapse" data-target="#groups" class="collapsed">
                <a href="#"><i class="fa fa-users fa-lg"></i>User Groups<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="groups">
                  <li><a href="/my-profile/groups/administrator-group/">Administrators</a></li>
                  <li><a href="/my-profile/groups/virtual-staff-group/">Virtual Workers</a></li>
                  <li><a href="/my-profile/groups/employer-group/">Employers</a></li>
                </ul>
                
                <li data-toggle="collapse" data-target="#options" class="collapsed">
                  <a href="#"><i class="fa fa-cogs fa-lg"></i> Options <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="options">
                  <li><a href="/pm_profile/?user_id=1">Edit Profile</a></li>
                  <li><a href="" id="pm-change-password" onclick="return false;">Change Password</a></li>
                  <li>Submit a Feedback</li>  
                </ul>

                 <li>
                  <a href="/wp-login.php?action=logout&redirect_to=http%3A%2F%2Flocalhost%2Fpm_login__trashed%2F&_wpnonce=e360d231f9">
                  <i class="fa fa-power-off fa-lg"></i>Log Out
                  </a>
                </li>
               
            </ul>

                 <div class="spacer10"></div>
                Philippine Standard Time:<Br>
                <iframe src="http://free.timeanddate.com/clock/i5s20k68/n145/fn12/fs12/fc9ff/tc000/pa8/tt0/tw1/th2/tb4" frameborder="0" width="177" height="40"></iframe>
<br><br>
                 New York Time (EST):<Br>
                <iframe src="http://free.timeanddate.com/clock/i5s20k68/n179/fn12/fs12/fc9ff/tc000/pa8/tt0/tw1/th2/tb4" frameborder="0" width="177" height="40"></iframe>

<br><br>    
                London Time:<Br>
                <iframe src="http://free.timeanddate.com/clock/i5s20k68/n136/fn12/fs12/fc9ff/tc000/pa8/tt0/tw1/th2/tb4" frameborder="0" width="177" height="40"></iframe>

                
</div>
                                        


         
        </div>
       </div>
