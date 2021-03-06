<?php

/*	Target Nations Taxonomy
 *	This taxonomy allows us to create relationships between our
 *	target nations and the content that is generated by staff and
 *	schools alike.
 */

function my_taxonomies_target_nations_taxo() {
	$labels = array(
		'name'              => _x( 'Target Nations', 'taxonomy general name', 'water-tower' ),
		'singular_name'     => _x( 'Target Nation', 'taxonomy singular name', 'water-tower' ),
		'search_items'      => __( 'Search Target Nations', 'water-tower' ),
		'all_items'         => __( 'All Target Nations', 'water-tower' ),
		'parent_item'       => __( 'Parent Target Nation', 'water-tower' ),
		'parent_item_colon' => __( 'Parent Target Nation:', 'water-tower' ),
		'edit_item'         => __( 'Edit Target Nation', 'water-tower' ),
		'update_item'       => __( 'Update Target Nation', 'water-tower' ),
		'add_new_item'      => __( 'Add New Target Nation', 'water-tower' ),
		'new_item_name'     => __( 'New Target Nation', 'water-tower' ),
		'menu_name'         => __( 'Target Nations', 'water-tower' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'rewrite' => array(
			'hierarchical' => true,
			'slug'		=> 'target-nation-blogs',
		),
	);
	register_taxonomy( 'target_nations_taxo', array( 'post' ), $args );
}
add_action( 'init', 'my_taxonomies_target_nations_taxo', 0 );

?>