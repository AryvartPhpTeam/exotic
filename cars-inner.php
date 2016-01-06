<?php /*Template Name: Cars-inner */
get_header();
?>
<section class="banner-block-img">
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
	<div class="lompo1">
	<img src="<?php echo get_template_directory();?>/images/lompo.png" class="img-responsive lampo">
	<h3>Lamborghini Aventador</h3><br>
	<P> Model: Aventador LP700-4 Exotic Car <br><br>
	<strong>Rates</strong><br></P><br>
	<p>Daily: $4799</p><p>Weekly: $3300</p><p>Monthly: $14,300</p>
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
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
	ext ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
	type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
	remaining essentially unchanged.</p>
	<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
	publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
    <div class="col-xs-12 col-sm-6 col-ms-6 col-lg-6">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox4"> 
            <img src="<?php echo get_template_directory();?>/images/lamborghini-aventador_001.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-ms-6 col-lg-6">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox2"> 
            <img src="<?php echo get_template_directory();?>/images/lamborghini-aventador_002.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-ms-6 col-lg-6">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox2"> 
            <img src="<?php echo get_template_directory();?>/images/lamborghini-aventador_003.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-ms-6 col-lg-6">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox3"> 
            <img src="<?php echo get_template_directory();?>/images/lamborghini-aventador_004.jpg" alt="...">
        </a>
    </div>
	<div class="col-xs-12 col-sm-12 col-ms-12 col-lg-12 text-center">
	<div class="exotic2">
	<div class="car-title-box">Lamborghini Aventador More car Models</div>
	</div></div>
</div>

<div id="lightbox4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <?php if(class_exits('Dynmic_Fectured_image')){
            global $dynamic_feactured_image;
            $feactured_image = $dynamic_feactured_image->get_feactured_image[31];
            foreach ($feactured_image as $res) {
             
             ?>
            <div class="modal-body">
                <img src="<?php _e($res['full']); ?>" class="img-responsive" alt="" />
            </div>
            <?php }
            }?>
        </div>
    </div>
</div>

<div class="col-lg-6 col-md-6 col=sm-6 col-xs-12">
<iframe width="100%" height="460" src="https://www.youtube.com/embed/Rmu4D7xocQU" frameborder="0" allowfullscreen></iframe>
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
    ?>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox6"> 
            <img src="<?php echo get_template_directory();?>/images/img/1.jpg" alt="...">
        </a>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox7"> 
            <img src="<?php echo get_template_directory();?>/images/img/2.jpg" alt="...">
        </a>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox8"> 
            <img src="<?php echo get_template_directory();?>/images/img/3.jpg" alt="...">
        </a>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox9"> 
            <img src="<?php echo get_template_directory_uri(); ?>/images/img/4.jpg" alt="...">
        </a>
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