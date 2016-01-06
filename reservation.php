<?php /*Template Name: Reservation */
get_header();
?>
<section class="reservation">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="reser">
          <h2 class="vation">reservation</h2>
          <div class="separator2"></div>
          <div class="row martop20">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <select class="form-control" name="car model" id="type">
                <option class="selected">----Car Models----</option>
                 <?php $car_result = get_posts(array('post_type' => 'cars',  'posts_per_page' => -1 )); 
                             foreach($car_result as $res){
                               ?> 
                                <option value="<?php _e($res->ID); ?>"><?php _e($res->post_title); ?></option>
                  <?php  } ?>
               </select>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div id="datetimepicker1" class="input-append">
                  <input data-format="yyyy-MM-dd" type="text" name="pickup_date" placeholder="Pickup Date"></input>
                  <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                    </i>
                  </span>
                </div>                
              <!-- <input type="text" class="form-control"> -->
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div id="datetimepicker2" class="input-append">
                  <input data-format="yyyy-MM-dd" type="text" name="return_date" placeholder="Return Date"></input>
                  <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                    </i>
                  </span>
                </div> 
              <!-- <input type="text" placeholder="Return Date" class="form-control"> -->
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <div id="datetimepicker3" class="input-append">
                  <input data-format="hh:mm:ss" type="text" name="pickup_time" placeholder="Pickup Time"></input>
                  <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                    </i>
                  </span>
                </div>
             <!--  <input type="text" placeholder="Pickup Time" class="form-control"> -->
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div id="datetimepicker4" class="input-append">
                  <input data-format="hh:mm:ss" type="text" name="return_time" placeholder="Return Time"></input>
                  <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                    </i>
                  </span>
                </div>
              <!-- <input type="text" placeholder="Return Time" class="form-control"> -->
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="firstname" placeholder="First Name" class="form-control">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="lastname" placeholder="Last Name" class="form-control">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="email" placeholder="Email Address" class="form-control">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="phone" placeholder="Phone Number" class="form-control">
              </div> 
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 exotic1" style="margin-bottom: 20px;">
              <a href="" class="btn btn-default">Submit Reservation Request</a>
              </div>
             </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="re-rental">
        <?php
             $post_id = 98;
                $queried_post = get_post($post_id);
            ?>
          <h2 class="vation"><?php echo $queried_post->post_title; ?></h2>
          <div class="separator2"></div>
          <div class="re-car">
          <ul class="list-unstyled">
            <?php echo $queried_post->post_content; ?>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
<div class="container">
<div class="row cars-model1">
  <div class="feature marbtm30">
    <h1>cars available</h1>
    <div class="separator"></div>
  </div>
  <?php 
      $car_cat = get_posts(array('post_type' => 'cars'));
       foreach($car_cat as $res){
         $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
         $money=get_post_meta( $res->ID, 'money', true );
      ?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="cars-box re-cars">
<h2><?php _e($res->post_title);?></h2>
<hr class="ht-border"> 
<img src="<?php _e($image[0]); ?>" class="img-responsive text-center"> 
<span>$<?php _e($money); ?> A DAY</span><span class="exotic1 res"><a href="<?php _e(get_permalink(7));?>" class="btn btn-default">RESERVATION</a></span>
<p><?php _e($res->post_content);?></p>
<p class="re-mo"><a href="<?php _e(get_permalink($res->ID));?>">Read More</a></p>
</div>
</div>
<?php } ?>

</div>
</div>
</div>
</section>
<section class="car-rental">
<?php
	$post_id = 93;
    $queried_post = get_post($post_id); ?>
<div class="container">
<div class="row">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 get">
<h2><?php echo $queried_post->post_title; ?></h2>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 exo1">
<a href="" class="btn btn-default">READ MORE</a>
</div>
</div>
</div>
</section>
<?php
get_footer();
?>