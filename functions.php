<?php 

include 'autocracy/autocracy.php';

add_theme_support('post-thumbnails');

	//Custom Post Types
function inspyre_create_post_type() {
	register_post_type('services', array(
		'labels' => array(
			'name' => __('Services'),
			'singular_name' => __('service')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'services'),
		'supports' => array('title','editor','thumbnail'),
		'taxonomies' => array('category'), 
		)
	);
}
add_action('init', 'inspyre_create_post_type');

function remove_img_attr ($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );

?>