<?php /*Template Name: Contact */
get_header();
?>
<section class="banner-contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="cont-in text-center">
        <?php
            $post_id = 65;
                $queried_post = get_post($post_id);
            ?>
          <h1><?php echo $queried_post->post_title; ?></h1>
          <p><?php echo $queried_post->post_content; ?></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="con-loction text-center"> <img src="<?php echo get_template_directory_uri(); ?>/images/loction-icon.png">
          <p><?php echo get_option('address'); ?><br>
            <?php echo get_option('city'); ?></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="con-loction1 text-center"> <img src="<?php echo get_template_directory_uri(); ?>/images/message-icon.png">
          <p><?php echo get_option('email'); ?></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="con-loction2 text-center"> <img src="<?php echo get_template_directory_uri(); ?>/images/call-icon.png">
          <p><?php echo get_option('telephone1'); ?> - <?php echo get_option('telephone2'); ?>  - (24 Hr)<br>
            - <?php echo get_option('fax'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner-block-->
<section class="contact-map">
<div class="map">
<iframe src="<?php echo get_option('map-link');  ?>"  width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="container">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="clearfix"></div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="drop-message">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<h2>DROP A MESSAGE</h2>
<h4>Drop Us a Message</h4>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php _e(do_shortcode('[contact-form-7 id="76" title="contact"]')); ?>
</div>
</div>
</div>
</div>
</section>
<?php
get_footer();
?>



                