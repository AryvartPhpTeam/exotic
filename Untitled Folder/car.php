<?php
/* Template Name: Service Template */
get_header();
?>
<?php

  $posts_page = get_page( get_option( 'page_for_posts' ));
   $title =  $posts_page->post_title ;
   $desc = $posts_page->post_content;
    if ( has_post_thumbnail( $posts_page->ID ) ) {
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts_page->ID ), 'single-post-thumbnail' ); 
    }

?>
<div class="service-bg" style="background: rgba(0, 0, 0, 0) url(<?php _e($image[0]); ?>) no-repeat scroll 0 0 / cover ;">
		<div class="ser-cover">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1><?php _e($title); ?></h1>
					<p><?php _e($desc); ?></p>
					
                                   
					</div>
				</div>			
			</div>
		</div>
	</div><!-- service-bg-block-->
        <?php wp_get_attachment_metadata( $attachment_id, $unfiltered ); ?>
	<div class="hospice-block">
		<div class="container">
			<div class="row">
                            <?php $service_result = get_posts(array('post_type' => 'post_services', 'posts_per_page' => -1)); 
                              foreach($service_result as $res){
                                 $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($res->ID), 'thumbnail_name');
                            ?>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="hospice-detail">
                                            <img src="<?php _e($thumb[0]); ?>" class="img-responsive" alt="We care about every patient">					
						<h4><a href="<?php echo get_permalink($res->ID); ?>"> <?php _e($res->post_title);?></a></h4>
						<p> <?php _e(wp_trim_words($res->post_content,25));?></p>
						<a href="<?php echo get_permalink($res->ID); ?>" class="btn btn-default">Read More</a>
					</div>
				</div>
				<?php
                            }
                            ?>
			</div>
		</div>
	</div>
	<div class="h-services patients">
		<div class="container">
			<div class="row">
					<h1>Levels of Care For <b>Patients</b></h1>
					<p class="health">We care about you &amp; your family's health</p>
				
                                        <?php

$args = array(
   // 'type' => 'post_services',
	'orderby'                  => 'name',
	'order'                    => 'ASC',
	'taxonomy'                 => 'service_categories',
         'hide_empty'               => 0
); 

$categories = get_categories( $args );

foreach($categories as $category) { 

    ?>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="service-one">
						<div class="icon-ser" data-animation="animated bounceInDown">
							<div class="icon-ser01"  style="background: transparent url(<?php echo z_taxonomy_image_url($category->term_id); ?>) no-repeat scroll 56% 56%;"></div>							
						</div>
						<div class="ser-detail"><?php if (function_exists('z_taxonomy_image')) z_taxonomy_image(); ?>
							<h3><a href="#"><?php _e($category->name); ?></a></h3>
							<p><?php _e($category->description); ?></p>
						</div>
					</div>
 </div>
<?php
}
?>
			</div>
		</div>
	</div><!-- services-block-->
<?php
get_footer();