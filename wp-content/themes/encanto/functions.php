<?php 
	add_theme_support('post-thumbnails');

	// habilitando e criando um menu
	function register_my_menus(){
		register_nav_menus(
			array(
				'header-menu' => __('Menu do header')
			)
		);
	}

	add_action('init', 'register_my_menus');

	add_action( 'admin_init', 'hide_editor' );

	function hide_editor() {
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		if( !isset( $post_id ) ) return;
		$homepgname = get_the_title($post_id);
		remove_post_type_support('page', 'editor');
		$template_file = get_post_meta($post_id, '_wp_page_template', true);
	}