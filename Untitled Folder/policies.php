<?php /*Template Name: Policies */
get_header();
?>
<section class="reservation">
  <div class="container">
    <div class="row">      
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="policies re-rental">
          <h2 class="poly">Car Rental Policies</h2>
          <div class="separator"></div>
          <div class="age clearfix">
          	<?php
                $post_id = 54;
                $queried_post = get_post($post_id);
         	?>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <h2 class="vation2"><?php echo $queried_post->post_title; ?></h2>
            <div class="separator2"></div>
             
            <div class="policy">
            
              <?php echo $queried_post->post_content?>
            
          </div>
          <?php
                $post_id = 56;
                $queried_post = get_post($post_id);
         	?>
          <h2 class="vation2"><?php echo $queried_post->post_title; ?></h2>
          <div class="separator2"></div>
            <div class="policy">
            <p><?php echo $queried_post->post_content?></p>
          </div>
           <?php
                $post_id = 58;
                $queried_post = get_post($post_id);
         	?>
          <h2 class="vation2"><?php echo $queried_post->post_title; ?></h2>
          <div class="separator2"></div>
            <div class="policy">
            <p><?php echo $queried_post->post_content?></p>
          </div>
           <?php
                $post_id = 60;
                $queried_post = get_post($post_id);
         	?>
          <h2 class="vation2"><?php echo $queried_post->post_title; ?></h2>
            <div class="separator2"></div>
            <div class="policy">
              
          
              <?php echo $queried_post->post_content?>
               
          </div>
           <?php
                $post_id = 62;
                $queried_post = get_post($post_id);
         	?>
          <h2 class="vation2"><?php echo $queried_post->post_title; ?></h2>
          <div class="separator2"></div>
            <div class="policy">
            <p><?php echo $queried_post->post_content?></p>
          </div>
           <?php
                $post_id = 64;
                $queried_post = get_post($post_id);
         	?>
          <h2 class="vation2"><?php echo $queried_post->post_title; ?></h2>
            <div class="separator2"></div>
            <div class="policy">
             
            <ul class="list-unstyled">
              <?php echo $queried_post->post_content?>
             
            </ul>
          </div>
           <?php
                $post_id = 66;
                $queried_post = get_post($post_id);
         	?>
          <h2 class="vation2"><?php echo $queried_post->post_title; ?></h2>
          <div class="separator2"></div>
            <div class="policy">
            <p><?php echo $queried_post->post_content?></p>
          </div>
           <?php
                $post_id = 68;
                $queried_post = get_post($post_id);
         	?>
          <h2 class="vation2"><?php echo $queried_post->post_title; ?></h2>
          <div class="separator2"></div>
            <div class="policy">
            <p><?php echo $queried_post->post_content?></p>
          </div> 
           <?php
                $post_id = 70;
                $queried_post = get_post($post_id);
         	?>   
           <h2 class="vation2"><?php echo $queried_post->post_title; ?></h2>
          <div class="separator2"></div>
            <div class="policy">
            <p><?php echo $queried_post->post_content?></p>
          </div>
          </div><!-- left -->
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
<a href="" class="btn btn-default">READ MORE</a>
</div>
</div>
</div>
</section>
<?php
get_footer();
?>