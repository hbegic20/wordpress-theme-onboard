<?php
//register widget zone

register_sidebar( array(
	'name' => 'Footer Area 1',
	'id' => 'footer-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
?>