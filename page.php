<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php
  $posts_page = get_page( get_option( 'page_for_posts' ));
   $title =  $posts_page->post_title ;
   $desc = $posts_page->post_content;

   ?>
<section class="reservation">
  <div class="container">
    <div class="row">      
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="policies re-rental">
          <h2 class="poly"><?php _e($title); ?></h2>
          <div class="separator"></div>
          <div class="age clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="policy">
            <p><?php
    _e($desc); ?></p>
          </div>
         
        </div> <!-- age -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="car-rental">
<div class="container">
<div class="row">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 get">
<h2>GET STARTED NOW AND IMPROVE YOUR CAR RENTAL</h2>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 exo1">
<a class="btn btn-default" href="">READ MORE</a>
</div>
</div>
</div>
</section>
<?php
//get_sidebar();
get_footer();