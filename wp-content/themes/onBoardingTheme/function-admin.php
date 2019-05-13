<?php

/*
	
@package sunsettheme
	
	========================
		ADMIN PAGE
	========================
*/

function guardsMan_add_admin_page() {
	
	//Generate Sunset Admin Page
	add_menu_page( 'GuardsMan Theme Options', 'GuardsMan', 'manage_options', 'guardsMan', 'guardsMan_theme_create_page', '', 110 );
	
	//Generate Sunset Admin Sub Pages
	add_submenu_page( 'guardsMan', 'GuardsMan Theme Options', 'General', 'manage_options', 'guardsMan', 'guardsMan_theme_create_page' );
}
add_action( 'admin_menu', 'guardsMan_add_admin_page' );

//Activate custom settings
	add_action( 'admin_init', 'guardsMan_custom_settings' );

function guardsMan_custom_settings() {
	register_setting( 'guardsMan-settings-group', 'profile_picture' );
	register_setting( 'guardsMan-settings-group', 'first_name' );
	register_setting( 'guardsMan-settings-group', 'last_name' );
	register_setting( 'guardsMan-settings-group', 'user_description' );
	register_setting( 'guardsMan-settings-group', 'twitter_handler', 'sunset_sanitize_twitter_handler' );
	register_setting( 'guardsMan-settings-group', 'facebook_handler' );
	register_setting( 'guardsMan-settings-group', 'gplus_handler' );
	
	add_settings_section( 'guardsMan_header_options', 'Header Option', 'guardsMan_header_options', 'guardsMan');
	add_settings_section( 'guardsMan_footer_options', 'Footer Option', 'guardsMan_footer_options', 'guardsMan');
	
	add_settings_field( 'sidebar-profile-picture', 'Profile Picture', 'sunset_sidebar_profile', 'guardsMan', 'guardsMan_footer_options');
	add_settings_field( 'sidebar-name', 'Full Name', 'sunset_sidebar_name', 'guardsMan', 'guardsMan_footer_options');
	add_settings_field( 'sidebar-description', 'Description', 'sunset_sidebar_description', 'guardsMan', 'guardsMan_footer_options');
	add_settings_field( 'sidebar-twitter', 'Twitter handler', 'sunset_sidebar_twitter', 'guardsMan', 'guardsMan_header_options');
	add_settings_field( 'sidebar-facebook', 'Facebook handler', 'sunset_sidebar_facebook', 'guardsMan', 'guardsMan_header_options');
	add_settings_field( 'sidebar-gplus', 'Google+ handler', 'sunset_sidebar_gplus', 'guardsMan', 'guardsMan_header_options');
}

function guardsMan_footer_options() {
	echo 'Customize your Sidebar Information';
}

function guardsMan_header_options() {
	echo 'Customize your Header Information';
}

function sunset_sidebar_profile() {
	$picture = esc_attr( get_option( 'profile_picture' ) );
	echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button"><input type="hidden" id="profile-picture" name="profile_picture" value="'.$picture.'" />';
}
function sunset_sidebar_name() {
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" /> <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
}
function sunset_sidebar_description() {
	$description = esc_attr( get_option( 'user_description' ) );
	echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description" /><p class="description">Write something smart.</p>';
}
function sunset_sidebar_twitter() {
	$twitter = esc_attr( get_option( 'twitter_handler' ) );
	echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler" /><p class="description">Input your Twitter username without the @ character.</p>';
}
function sunset_sidebar_facebook() {
	$facebook = esc_attr( get_option( 'facebook_handler' ) );
	echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook handler" />';
}
function sunset_sidebar_gplus() {
	$gplus = esc_attr( get_option( 'gplus_handler' ) );
	echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google+ handler" />';
}

//Sanitization settings
function sunset_sanitize_twitter_handler( $input ){
	$output = sanitize_text_field( $input );
	$output = str_replace('@', '', $output);
	return $output;
}

function guardsMan_theme_create_page() {
	require_once( get_template_directory() . '/templates/guardsMan-admin.php' );
}