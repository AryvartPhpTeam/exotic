<?php get_header(); ?>
<section class="banner-block">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <?php $i=0; 
      $slider = get_posts(array('post_type' => 'slider'));
      foreach($slider as $res){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
      ?>
        <div class="item <?php if($i==0) {?>active <?php } ?>">
          <img src="<?php _e($image[0]); ?>" class="img-responsive"/>
        </div>
        <?php $i++; } ?>
        <!--<div class="item">
          <img src="images/banner02.jpg" class="img-responsive"/>
        </div>
        <div class="item">
          <img src="images/banner03.jpg" class="img-responsive"/>
        </div>
        <div class="item">
          <img src="images/banner04.jpg" class="img-responsive"/>
        </div>
        <div class="item">
          <img src="images/banner05.jpg" class="img-responsive"/>
        </div>-->
      </div>
     </div>
</section><!-- banner-block-->
<section class="feature">
	<div class="container">
    	<h1>Featured</h1>
        <?php 
      $car_cat = get_posts(array('post_type' => 'cars'));
      foreach($car_cat as $res){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
        $money=get_post_meta( $res->ID, 'money', true );
      ?>
     	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        	<div class="exotic">
             <h3><a href="<?php _e(get_permalink($res->ID));?>"><?php _e($res->post_title);?></a></h3>
             <h4>$<?php _e($money); ?> A day</h4>
             <a href="<?php _e(get_permalink(7));?>" class="btn btn-default">reservation</a>
             <div class="exo-int">
              <a href="<?php _e(get_permalink($res->ID));?>"><img src="<?php _e($image[0]); ?>"></a>
             </div>
            </div>
         </div>
         <?php } ?>
	</div>    
</section>
<?php get_footer(); ?>