<?php function site_features()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menu('headermenu','Header Menu');
    register_nav_menu('secondaryheadermenu','Secondary Header Menu');
    // register_nav_menus( array('primary-menu'=>'Top Menu'));
}
    add_action('after_setup_theme','site_features');
    // disable gutenberg for posts
    add_filter('use_block_editor_for_post', '__return_false', 10);                          
    // disable gutenberg for post types
    add_filter('use_block_editor_for_post_type', '__return_false', 10);

    // this is for svg enable?
    function cc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml'; 
        return $mimes;
      }
      add_filter('upload_mimes', 'cc_mime_types');
?>