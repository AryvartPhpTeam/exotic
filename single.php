<?php
/**
 * The Template for displaying all single posts
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
    if ( has_post_thumbnail( $posts_page->ID ) ) {
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts_page->ID ), 'single-post-thumbnail' ); 
    }
 $car_details = get_post_meta($posts_page->ID, 'car_details', true);
 
$images = miu_get_images($posts_page->ID,800,600); 

$terms = wp_get_post_terms($posts_page->ID, 'carmodels', array("fields" => "all") );
  foreach ( $terms as $term ) {
       $term_id = $term->term_id;
       $term_name = $term->name;
       
   $cat_logo = z_taxonomy_image_url($term->term_id);
  }
  
?>
<section class="banner-block-img" style="background:url('<?php _e($image[0]); ?>') no-repeat scroll 0 0 / 100% auto; ">
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
	<div class="lompo1">
            <?php if(!empty($cat_logo)) { ?>
	<img src="<?php _e($cat_logo); ?>" class="img-responsive lampo">
            <?php } ?>
	<h3><?php the_title(); ?></h3>
	<P> Model:<?php _e($car_details['model']); ?> <br>
	<strong>Rates</strong><br>
	Daily: <?php _e($car_details['rent_daily']); ?><br>Weekly: <?php _e($car_details['rent_weekly']); ?><br>Monthly: <?php _e($car_details['rent_monthly']); ?></p>
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
            <p><?php _e($desc); ?></p>
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
    if(isset($images))
    {
        $n=1;
        foreach ($images as $image)
        {
            ?>
    <div class="col-xs-12 col-sm-6 col-ms-6 col-lg-6">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox<?php _e($n); ?>"> 
            <img src="<?php _e($image); ?>" alt="...">
        </a>
    </div>
    <div id="lightbox<?php _e($n); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?php _e($image); ?>" class="img-responsive" alt="" />
            </div>
        </div>
    </div>
</div>
    <?php
    $n++;
        }
    }
    ?>
    
    
   
	<div class="col-xs-12 col-sm-12 col-ms-12 col-lg-12 text-center">
	<div class="exotic2">
	<div class="car-title-box"><?php _e($term_name); ?> More car Models</div>
	</div></div>
</div>

  <div class="col-lg-6 col-md-6 col sm-6 col-xs-12">
    <?php if(isset($car_details['video_url'])) { ?>
<iframe width="100%" height="460" src="<?php _e($car_details['video_url']); ?>" frameborder="0" allowfullscreen></iframe>
    <?php } ?>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cars-lampo">
     <?php
        
        $car_result = get_posts(array('post_type' => 'post_cars',  'posts_per_page' => 4 ,'tax_query' => array(
        array(
            'taxonomy' => 'car_models',
            'terms' => $term_id,
            'field' => 'id',
        )
    ))); 
        $n=1;
        foreach($car_result as $res){
                                  
         $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($res->ID), 'thumbnail_name');
         $car_details = get_post_meta($res->ID, 'car_details', true);
        ?>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightboxm<?php _e($n); ?>"> 
            <img src="<?php _e($thumb[0]); ?>" alt="...">
        </a>
</div>

<div id="lightboxm<?php _e($n); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?php _e($thumb[0]); ?>" class="img-responsive" alt="" />
            </div>
        </div>
    </div>
</div>
    
  <?php  
  $n++;
        } ?>
</div>
</div>

</section>



<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
