<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>EXOTIC :: RENTALS</title>
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" type="text/css" rel="stylesheet">
</head>
<body>
<section class="header-block">
	<div class="container">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="logo">
    	  <a href="<?php _e(site_url());?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsive"></a>	
	     </div>         
         <div class="menu">
          <div class="col-lg-9 col-md-9 col-sm-12">
        	<nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand visible-xs" href="#">Menu</a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <?php wp_nav_menu(array('menu' => 'header_menu', 'menu_class' => 'nav navbar-nav')); ?>
                </div><!-- /.navbar-collapse -->             
            </nav>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 cal">
            	<h1><?php echo get_option('phone'); ?></h1>
            </div>
         </div>
       </div>
    </div> 
    <div class="head-line">EXOTIC</div>   
</section><!-- header-block -->