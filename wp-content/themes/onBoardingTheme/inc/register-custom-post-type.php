<?php
function guardsman_custom_post_type_faq(){
  register_post_type( 'FAQs', 
      array(
          'rewrite' => array('slug' => 'faqs'),
          'labels' => array(
          'name' => 'FAQs',
          'all_items' => 'All FAQs',
          'singular_name' => 'FAQ',
          'add_new_item' => 'Add New FAQ',
          'edit_item' => 'Edit FAQ'
          ),
          'menu-icon' => 'dashicons-clipboard',
          'public' => true,
          'has-archive' => true,
          'supports' => array(
              'title', 'editor'
          )
      )
  );
}
?>