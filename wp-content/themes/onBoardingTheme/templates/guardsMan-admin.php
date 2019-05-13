<h1>GuardsMan Theme Options</h1>
<?php settings_errors(); ?>
<?php 
	
	$picture = esc_attr( get_option( 'profile_picture' ) );
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	$fullName = $firstName . ' ' . $lastName;
	$description = esc_attr( get_option( 'user_description' ) );
	
?>
<div class="sunset-sidebar-preview">
	<div class="sunset-sidebar">
		<div class="image-container">
			<div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $picture; ?>);width: 300px; height: 200px; background-size: contain;background-repeat: no-repeat;"></div>
		</div>
	</div>
</div>

<form method="post" action="options.php" class="sunset-general-form">
	<?php settings_fields( 'guardsMan-settings-group' ); ?>
	<?php do_settings_sections( 'guardsMan' ); ?>
	<?php submit_button(); ?>
</form>