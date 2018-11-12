<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'id' => 'sidebar-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="widget_title">',
		'after_title' => '</h2>',
	));
}

// function my_enqueue_scripts()
// {
// </head>タグ前に出力する
// wp_enqueue_scripts('jquery');
// wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), false, false);
// }
// add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// function imagepassshort($arg) {
// 	$content = str_replace('"images/', '"' . get_bloginfo('template_directroy') . '/images/', $arg);
// 	return $content;
// }
// add_action('the_content', 'imagepassshort');