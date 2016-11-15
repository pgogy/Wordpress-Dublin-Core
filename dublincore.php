<?PHP

	/*

		Plugin Name: Dublin Core Metadata
		Plugin URI: http://www.pgogy.com/code/dublin-core-metadata
		Description: Add Dublin Core to an item within a blog post
		Version: 0.98
		Author: Pgogy
		Plugin URI: http://www.pgogy.com/code/groups/wordpress/dublin-core-metadata/
		Author URI: http://www.pgogy.com

	*/

	require_once("dublincore_ajax.php");
	require_once("dublincore_theme_functions.php");

	require_once("dublincore_admin.php");
	
	add_action('admin_init', 'register_dublincore' );
	add_action('admin_menu', 'dublincore_menu_option');
	add_action('admin_head', 'dublincore_postform');
	
	require_once("dublincore_post_create_alter.php");
	
	add_action("add_meta_boxes", "dublincore_add_menu" );
	add_action('save_post', 'save_dublincore');
	add_filter("the_content", "append_dublincore" );
	
	require_once("dublincore_feed_alter.php");
	
	add_filter("the_title_rss", "dublincore_feed_title" );
	add_filter("the_content_feed", "dublincore_feed_description" );
	add_action("atom_entry","dublincore_augment");
	add_action("rdf_item","dublincore_augment");
	add_action("rss2_item","dublincore_augment");
	add_action("rss_item","dublincore_augment");
	
?>