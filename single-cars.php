<?php get_header();?>

<section class="banner-block-img">
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
    <?php
    $money=get_post_meta( $post->ID, 'money', true );
    $weekly=get_post_meta( $post->ID, 'weekly', true );
    $monthly=get_post_meta( $post->ID, 'monthly', true );
    ?>
  <div class="lompo1">
  <img src="images/lompo.png" class="img-responsive lampo">
  <h3>Lamborghini Aventador</h3><br>
  <P> Model: Aventador LP700-4 Exotic Car <br><br>
  <strong>Rates</strong><br></P><br>
  <p>Daily: $<?php _e($money); ?></p><p>Weekly: $<?php _e($weekly); ?></p><p>Monthly: $<?php _e($monthly); ?></p>
  <div class="exotic1">
  <a href="#" class="btn btn-default">reservation</a>
  </div>
  </div>
  </div>
  </div>
  </div>
</section><!-- banner-block-->
<section class="feature">
  <div class="container">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    
  <div class="car-info">
  <p></p>
  </div>
  </div>
  </div>
</section>
<section>
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="car_models">
<h3>Car Models</h3>
</div>
</div>

<div class="col-lg-6 col-md-6 col=sm-6 col-xs-12">
  <?php 
                     if( class_exists('Dynamic_Featured_Image') ) {
                     global $dynamic_featured_image;
                     $featured_images = $dynamic_featured_image->get_featured_images(37);
                     foreach($featured_images as $dyanamic_featured){
                      
  
                  ?>
    <div class="col-xs-12 col-sm-6 col-ms-6 col-lg-6">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox4"> 
            <img src="<?php _e($dyanamic_featured['full'])?>" alt="...">
        </a>
    </div>
    <?php }}?>
    <div id="lightbox6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="images/img/1.1.jpg" class="img-responsive" alt="" />
            </div>
        </div>
    </div>
</div>
  <div class="col-xs-12 col-sm-12 col-ms-12 col-lg-12 text-center">
  <div class="exotic2">
  <div class="car-title-box">Lamborghini Aventador More car Models</div>
  </div></div>
</div>



<div class="col-lg-6 col-md-6 col=sm-6 col-xs-12">
<iframe width="100%" height="460" src="https://www.youtube.com/embed/Rmu4D7xocQU" frameborder="0" allowfullscreen></iframe>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cars-lampo">

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox6"> 
            <img src="images/img/1.1.jpg" alt="...">
        </a>
</div>

<div id="lightbox6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="images/img/1.1.jpg" class="img-responsive" alt="" />
            </div>
        </div>
    </div>
</div>
<div id="lightbox7" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="images/img/2.1.jpg" class="img-responsive" alt="" />
            </div>
        </div>
    </div>
</div>
<div id="lightbox8" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="images/img/3.1.jpg" class="img-responsive" alt="" />
            </div>
        </div>
    </div>
</div>
<div id="lightbox9" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="images/img/4.1.jpg" class="img-responsive" alt="" />
            </div>
        </div>
    </div>
</div>
<div id="lightbox6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img/1.1.jpg" class="img-responsive" alt="" />
            </div>
        </div>
    </div>
</div>
<div id="lightbox7" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img/2.1.jpg" class="img-responsive" alt="" />
            </div>
        </div>
    </div>
</div>
<div id="lightbox8" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img/3.1.jpg" class="img-responsive" alt="" />
            </div>
        </div>
    </div>
</div>
<div id="lightbox9" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img/4.1.jpg" class="img-responsive" alt="" />
            </div>
        </div>
    </div>
</div>

</div>
</div>



</section>
<?php get_footer();?>