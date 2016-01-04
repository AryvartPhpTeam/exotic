<?php /*Template Name: About us */
get_header();
?>
<section class="reservation">
  <div class="container">
    <div class="row">      
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="policies re-rental">
       <?php
                $post_id = 85;
                $queried_post = get_post($post_id);
         ?>
          <h2 class="poly"><?php echo $queried_post->post_title; ?></h2>
          <div class="separator"></div>
          <div class="age clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="policy">
            <p><?php echo $queried_post->post_content; ?></p>
          </div>
          <?php
                $post_id = 88;
                $queried_post = get_post($post_id);
                 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id), 'single-post-thumbnail' );
         ?>
          <h2 class="vation2"><?php echo $queried_post->post_title; ?></h2>
            <div class="separator2"></div>
            <div class="policy">
              <?php echo $queried_post->post_content; ?>
          </div>            
          </div><!-- left -->
          <div class="about-ex">
            <img src="<?php echo $image[0]; ?>" class="img-responsive img-thumbnail">
          </div>
        </div> <!-- age -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="car-rental">
<?php $post_id = 93;
                $queried_post = get_post($post_id); ?>
<div class="container">
<div class="row">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 get">
<h2><?php echo $queried_post->post_title; ?></h2>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 exo1">
<a href="<?php _e(get_permalink($post_id ));?>" class="btn btn-default">READ MORE</a>
</div>
</div>
</div>
</section>
<?php
get_footer();
?>