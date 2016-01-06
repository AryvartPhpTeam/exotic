<section class="footer-block" style="margin-top:0px;">
	<div class="footer-overlay">
	<div class="container">
    	<div class="footer">
        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 vertical-border">
            	<div class="fot-h">
                <h3>exotic auto rentals</h3>
                </div>
                <div class="fot-cnt">
                 <p><?php echo get_option('address'); ?></br><?php echo get_option('city'); ?></p>
                 <ul class="list-unstyled">
                   <li>P. <?php echo get_option('telephone1'); ?></li>
                   <li>P. 24Hr <?php echo get_option('telephone2'); ?></li>
                   <li>F.<?php echo get_option('fax'); ?></li>
                   <li><a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a></li>
                   <li><a href="<?php echo get_option('website'); ?>"><?php echo get_option('website'); ?></a></li>
                 </ul>
                </div>
            </div> 
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 vertical-border">
            	<div class="fot-h">
                <h3>customer service</h3>
                </div>
                <div class="fot-cnt">
                 <?php wp_nav_menu(array('menu' => 'footer_customer', 'menu_class' => 'list-unstyled')); ?>
                </div>
            </div> 
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 vertical-border">
            	<div class="fot-h">
                <h3>information</h3>
                </div>
                <div class="fot-cnt">                
                  <?php wp_nav_menu(array('menu' => 'footer_information', 'menu_class' => 'list-unstyled')); ?>
                </div>
            </div> 
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="fot-h">
                <h3 style="border-right: 2px;">stay connected</h3>
                </div>
                <div class="fot-cnt01">  
                <div class="input-group">
                  <input type="text" class="form-control ft" placeholder="e-mail">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">sign up</button>
                  </span>
                </div><!-- /input-group -->              
                 <ul class="list-inline martop20">
                   <li><a href="<?php echo get_option('facebook'); ?>" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                   <li><a href="<?php echo get_option('instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                   <li><a href="<?php echo get_option('twitter'); ?>" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                   <li><a href="<?php echo get_option('pinterest'); ?>" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
                 </ul>
                </div>
            </div>            
        </div><!-- footer -->
    </div>
    </div>
</section>
<section class="footer-bottom">	
	<p>Copyright &copy; <?php _e(date("Y")); ?> EXOTIC. All rights reserved.</p>	
</section>
</body>
<?php
wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script type="text/javascript">
//$('.carousel').carousel({
 // interval: 1700
//})
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-datetimepicker.min.js"></script>
 <script type="text/javascript">
        $(function () {
          $('#datetimepicker1').datetimepicker({
              pickTime: false
            });
          $('#datetimepicker2').datetimepicker({
              pickTime: false
            });
            $('#datetimepicker3').datetimepicker({
                pickDate: false
            });             
            $('#datetimepicker4').datetimepicker({
                pickDate: false
            });
        });
    </script>
</html>
