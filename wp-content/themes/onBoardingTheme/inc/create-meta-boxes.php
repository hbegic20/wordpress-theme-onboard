<?php

//CREATE meta box with update save and update
add_action('add_meta_boxes', 'add_stage_meta');
add_action( 'save_post', 'guardsman_save_stage_metaData');

function add_stage_meta()
{
    global $post;

    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'page-landing.php' || $pageTemplate == 'page-faq-list.php'  )
        {
            add_meta_box(
                'stage_meta', // $id
                'Stage information', // $title
                'display_stage_information', // $callback
                'page', // $page
                'normal', // $context
                'high'); // $priority
        }
    }
}

function display_stage_information($post)
{
	wp_nonce_field( basename( __FILE__), 'guardsman_stage-meta-box_nonce' );
	$guardsman_stored_meta = get_post_meta( $post->ID );
	?>
	<h4>Workflow item inside</h4>
	<label for="title">Stage</label><br />
	<input type="text" id="title" name="title" value="<?php if ( ! empty ( $guardsman_stored_meta['title'] ) ) {
					echo esc_attr( $guardsman_stored_meta['title'][0] );
				} ?>" size="30" />  <br /> 
	<?php

}

function guardsman_save_stage_metaData($post_id){
	$is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'guardsman_workflow-items-meta-box_nonce' ] ) && wp_verify_nonce( $_POST[ 'guardsman_workflow-items-meta-box_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
	}

	/* Title */
    if ( isset( $_POST[ 'title' ] ) ) {
    	update_post_meta( $post_id, 'title', sanitize_text_field( $_POST[ 'title' ] ) );
	}
}
?>