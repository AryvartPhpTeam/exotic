<?php
include( get_template_directory() . '/includes/listtable.php');
register_nav_menus( array(
	'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
	'footer_menu' => 'My Custom Footer Menu',
	) );
add_theme_support( 'post-thumbnails' );
add_action('admin_init', 'my_general_section');  
function my_general_section() {  
    add_settings_section(  
        'my_settings_section', // Section ID 
        'My Options Title', // Section Title
        'my_section_options_callback', // Callback
        'general' // What Page?  This makes the section show up on the General Settings Page
    );

    add_settings_field( // Option 1
        'address', // Option ID
        'Address', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_section', // Name of our section
        array( // The $args
            'address' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 2
        'city', // Option ID
        'City', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'city' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 3
        'telephone1', // Option ID
        'Telephone1', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'telephone1' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 4
        'telephone2', // Option ID
        'Telephone2', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'telephone2' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 5
        'fax', // Option ID
        'Fax', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'fax' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 6
        'email', // Option ID
        'Email', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'email' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 7
        'website', // Option ID
        'Website', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'website' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 8
        'facebook', // Option ID
        'Facebook url', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'facebook' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 9
        'instagram', // Option ID
        'Instagram url', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'instagram' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 10
        'twitter', // Option ID
        'Twitter url', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'twitter' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 11
        'pinterest', // Option ID
        'Pinterest url', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'pinterest' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 12
        'phone', // Option ID
        'Header phone no', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'phone' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 13
        'map-link', // Option ID
        'Map URL', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'map-link' // Should match Option ID
        )  
    ); 

    register_setting('general','address', 'esc_attr');
    register_setting('general','city', 'esc_attr');
    register_setting('general','telephone1', 'esc_attr');
    register_setting('general','telephone2', 'esc_attr');
    register_setting('general','fax', 'esc_attr');
    register_setting('general','email', 'esc_attr');
    register_setting('general','website', 'esc_attr');
    register_setting('general','facebook', 'esc_attr');
    register_setting('general','instagram', 'esc_attr');
    register_setting('general','twitter', 'esc_attr');
    register_setting('general','pinterest', 'esc_attr');
    register_setting('general','phone', 'esc_attr');
    register_setting('general','map-link', 'esc_attr');
    
}

function my_section_options_callback() { // Section Callback
    echo '<p>A little message on editing info</p>';  
}

function my_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" class="regular-text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}

add_action('init', 'cars_register');
function cars_register() {
    $args = array(
                'labels' =>array(
                        'name' => 'Cars',
                        'add_new_item' => 'Add New cars',
                       ),
                'public' => true,
                'capability_type' => 'post',
                'supports' => array('title','editor','author','comments','thumbnail')
    );
    register_post_type( 'cars' , $args );
}


function slider_option() {
    $args = array(
        'public' => true,
        'post_type'=> 'slider',
        'label'  => __( 'slider', 'textdomain' ),
        'supports'           => array( 'title', 'editor','author','comments','thumbnail')
    );
    register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_option' );



function myplugin_add_meta_box() {
            add_meta_box('post_car_details', __('Car Details', 'myplugin_textdomain'), 'myplugin_meta_box_callback', 'cars');
        }

        add_action('add_meta_boxes', 'myplugin_add_meta_box');
        add_action('save_post', 'save');

        function myplugin_meta_box_callback($post) {

            $car_details = get_post_meta($post->ID, 'car_details', true);
            // print_r( $car_details );
            ?>
            <div class="wrap">
                <h1>Car Details</h1>
             
                    <table class="form-table">
                        <tbody>

                            <tr>
                                <th scope="row"><label for="blogname">Featured Inner page Image</label></th>
                                <td>
                                    <?php if (isset($car_details['featured_image'])) { ?>
                                    <img src="<?php echo $car_details['featured_image']; ?>" width="150" height="150"/> <br />
                                   <?php } ?>
                            <input type="file" class="regular-text"  id="blogname" name="featured_image">
                                </td>
                            </tr>
                            
                            <tr>
                                <th scope="row"><label for="blogname">Make</label></th>
                                <td><input type="text" class="regular-text" value="<?php echo isset($car_details['make']) ? $car_details['make'] : ''; ?>" id="blogname" name="car_details[make]"></td>
                            </tr>

                            <tr>
                                <th scope="row"><label for="blogname">Model Year</label></th>
                                <td><input type="text" class="regular-text" value="<?php echo isset($car_details['model_year']) ? $car_details['model_year'] : ''; ?>" id="blogname" name="car_details[model_year]"></td>
                            </tr>   
                            <tr>
                                <th scope="row"><label for="blogname">Car Type</label></th>
                                <td><input type="text" class="regular-text" value="<?php echo isset($car_details['car_type']) ? $car_details['car_type'] : ''; ?>" id="blogname" name="car_details[car_type]"></td>
                            </tr>   
                            <tr>
                                <th scope="row"><label for="blogname"><h1>Car Rental Prices</h1></label></th>
                                <td></td>
                            </tr>   
                            <tr>
                                <th scope="row"><label for="blogname">Daily</label></th>
                                <td><input type="text" class="regular-text" value="<?php echo isset($car_details['rent_daily']) ? $car_details['rent_daily'] : ''; ?>" id="blogname" name="car_details[rent_daily]"></td>
                            </tr>  
                            <tr>
                                <th scope="row"><label for="blogname">Weekly</label></th>
                                <td><input type="text" class="regular-text" value="<?php echo isset($car_details['rent_weekly']) ? $car_details['rent_weekly'] : ''; ?>" id="blogname" name="car_details[rent_weekly]"></td>
                            </tr> 
                            <tr>
                                <th scope="row"><label for="blogname">Monthly</label></th>
                                <td><input type="text" class="regular-text" value="<?php echo isset($car_details['rent_monthly']) ? $car_details['rent_monthly'] : ''; ?>" id="blogname" name="car_details[rent_monthly]"></td>
                            </tr> 
                            <tr>
                                <th scope="row"><label for="blogname">Rental Mileage </label></th>
                                <td><input type="text" class="regular-text" value="<?php echo isset($car_details['rent_mileage']) ? $car_details['rent_mileage'] : ''; ?>" id="blogname" name="car_details[rent_mileage]"></td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="blogname">Video URL</label></th>
                                <td><input type="text" class="regular-text" value="<?php echo isset($car_details['video_url']) ? $car_details['video_url'] : ''; ?>" id="blogname" name="car_details[video_url]"></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php //echo submit_button(); ?>
               
                <?php
            }

            function save($post_id) {

                $uploadedfile = $_FILES['featured_image'];

        $upload_overrides = array('test_form' => false);

        $movefile = wp_handle_upload($uploadedfile, $upload_overrides);
        $car_details = get_post_meta($post_id, 'car_details', true);
        if ($movefile && !isset($movefile['error'])) {
                $_POST['car_details']['featured_image'] = $movefile['url'];
        }
        elseif (isset($car_details['featured_image'])) {
            $_POST['car_details']['featured_image'] = $car_details['featured_image'];
        } 
        
                // $_POST['additional_option']['author_quotes'] = nl2br($_POST['exotic_contact']['author_quotes']);
                update_post_meta($post_id, 'car_details', $_POST['car_details']);
            } 

if ( ! function_exists( 'my_pagination' ) ) :
    function my_pagination() {
        global $wp_query;

        $big = 999999999; // need an unlikely integer
        
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    }
endif;

add_action( 'init', 'create_book_tax' );

function create_book_tax() {
    register_taxonomy(
        'carmodels',
        'cars',
        array(
            'label' => __( 'Car models' ),
            //'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => true,
        )
    );
    register_taxonomy(
        'carcategory',
        'cars',
        array(
            'label' => __( 'Car category' ),
            //'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => true,
        )
    );
}
add_action('admin_menu', 'exotic_reservation');

function exotic_reservation() {
    add_menu_page('Reservation', 'Reservation', 'manage_options', 'exotic1', 'my_reservations1', '', 7);

}
function my_reservations1()
{
            ?>
<form method="post">
            <?php
            $endosersTable = new ReservationTable();
            $endosersTable->prepare_items();
            $endosersTable->display();
           
?>
</form>
<?php
}