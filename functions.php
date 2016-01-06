<?php

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

function hkdc_post_money_field($post) {
     echo '<input type="text"  name="money" value="' . get_post_meta( $post->ID, 'money', true ) . '">';
}
function hkdc_post_money_meta_box() {
    add_meta_box('money', 'Rent per day', 'hkdc_post_money_field', 'cars', 'normal', 'default');
}
add_action('add_meta_boxes', 'hkdc_post_money_meta_box');
add_action('save_post','save_post_money_meta');
function save_post_money_meta($post_id, $post)
{
    if(isset($_POST['money']))
    update_post_meta($post_id, 'money', $_POST['money']);
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
