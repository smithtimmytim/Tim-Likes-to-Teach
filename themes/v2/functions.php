<?php 

// Featured Images

add_theme_support ('post-thumbnails');

add_image_size('post-art');

//jQuery Insert From Google
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

function my_connection_types() {
  p2p_register_connection_type( array(
    'name' => 'courses_to_videos',
    'from' => 'courses',
    'to' => 'course-videos',
    'sortable' => 'any'
  ) );
}
add_action( 'p2p_init', 'my_connection_types' );

?>