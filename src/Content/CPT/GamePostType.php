<?php
namespace JMichaelWard\BoardGameCollector\Content\CPT;

use WebDevStudios\OopsWP\Structure\Content\PostType;

/**
 * Class Game
 *
 * @package JMichaelWard\BoardGameCollector\Content\CPT;
 */
class GamePostType extends PostType {
	/**
	 * Register this post type.
	 */
	public function register() {
		register_post_type( 'bgc_game', $this->get_args() );
	}

	/**
	 * Labels for this post type.
	 *
	 * @return array
	 */
	public function get_labels() : array {
		return [
			'name'               => _x( 'Games', 'post type general name', 'bgc' ),
			'singular_name'      => _x( 'Game', 'post type singular name', 'bgc' ),
			'menu_name'          => _x( 'Games', 'admin menu', 'bgc' ),
			'name_admin_bar'     => _x( 'Game', 'add new on admin bar', 'bgc' ),
			'add_new'            => _x( 'Add New', 'bgc_game', 'bgc' ),
			'add_new_item'       => __( 'Add New Game', 'bgc' ),
			'new_item'           => __( 'New Game', 'bgc' ),
			'edit_item'          => __( 'Edit Game', 'bgc' ),
			'view_item'          => __( 'View Game', 'bgc' ),
			'all_items'          => __( 'All Games', 'bgc' ),
			'search_items'       => __( 'Search Games', 'bgc' ),
			'parent_item_colon'  => __( 'Parent Games:', 'bgc' ),
			'not_found'          => __( 'No games found', 'bgc' ),
			'not_found_in_trash' => __( 'No games found in Trash.', 'bgc' ),
		];
	}

	/**
	 * Arguments for post type registration.
	 *
	 * @return array
	 */
	public function get_args() : array {
		return [
			'label'                 => _x( 'Games', 'post type label', 'bgc' ),
			'labels'                => $this->get_labels(),
			'description'           => __( 'A post type for a board games collection', 'bgc' ),
			'public'                => true,
			'rewrite'               => [
				'slug' => 'games',
			],
			'capability_type'       => 'post',
			'has_archive'           => true,
			'hierarchical'          => false,
			'supports'              => [ 'title', 'editor', 'thumbnail' ],
			'show_in_rest'          => true,
			'rest_base'             => 'games',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
		];
	}
}
