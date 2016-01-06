<?php /*Template Name: Cars */
get_header();
?>
<section class="cars-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="cars">
        <h2>Cars Available to Rent</h2>
        <hr class="car-line">
        <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
        <input type="text" class="form-control cr-box" placeholder="CAR NAME">
        </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
        <input type="text" class="form-control cr-box" placeholder="CATEGORIES">
        </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
        <input type="text" class="form-control cr-box" placeholder="">
        </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
        <div class="clearfix"></div>
        </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12 exotic3 text-center">
        <a href="" class="btn btn-default">search available cars</a>
        </div>
        
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>

<div class="container">
<div class="row cars-model cars-model1">
	<?php 
      $paged = $paged ? $paged : 1;
      $posts_per_page = 3;
      $offset = ($paged - 1) * $posts_per_page;
      $query =  query_posts( array( 'posts_per_page' => 3, 'offset'=> $offset, 'post_type' => 'cars', 'category' => 'carcategory') );
             while ( have_posts() ) : the_post();

                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            	$money=get_post_meta( $post->ID, 'money', true );

            ?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="cars-box">

<h2><?php _e($post->post_title);?></h2>
<hr class="ht-border"> 
<img src="<?php _e($image[0]);?>" class="img-responsive text-center"> 
<span>$<?php _e($money); ?>A DAY</span><span class="exotic1 res"><a href="" class="btn btn-default">RESERVATION</a></span>
<p><?php _e($post->post_content);?></p>
<p class="re-mo"><a href="<?php _e(get_permalink($post->ID));?>">Read More</a></p>
</div>
</div>
<?php endwhile;?>

</div>
</div>

</section>
<section class="page-na">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="page-nation">
<ul>
	<?php
global $wp_query;
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => $paged,
	'total' => $wp_query->max_num_pages
) );
?>
</ul>
</div>
</div>
</div>
</div>
</section>
<section class="car-rental">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 get">
<h2>GET STARTED NOW AND IMPROVE YOUR CAR RENTAL</h2>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 exo1">
<a href="" class="btn btn-default">READ MORE</a>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 exo2">
<a href="" class="btn btn-default">RESERVATION</a>
</div>
</div>
</div>
</section>

<?php
get_footer();
?>