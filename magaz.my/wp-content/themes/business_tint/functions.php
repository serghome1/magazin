<?php

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div class="block">',
    'after_widget' => '</div>',
 'before_title' => '<div class="label">',
        'after_title' => '</div>',
    ));

function mdv_recent_posts($no_posts = 5, $before = '<li>', $after = '</li>', $hide_pass_post = true, $skip_posts = 0, $show_excerpts = false, $include_pages = false) {
    global $wpdb;
	$time_difference = get_settings('gmt_offset');
	$now = gmdate("Y-m-d H:i:s",time());
    $request = "SELECT ID, post_title, post_excerpt FROM $wpdb->posts WHERE post_status = 'publish' ";
	if($hide_pass_post) $request .= "AND post_password ='' ";
	if($include_pages) $request .= "AND (post_type='post' OR post_type='page') ";
	else $request .= "AND post_type='post' ";
	$request .= "AND post_date_gmt < '$now' ORDER BY post_date DESC LIMIT $skip_posts, $no_posts";
    $posts = $wpdb->get_results($request);
	$output = '';
    if($posts) {
		foreach ($posts as $post) {
			$post_title = stripslashes($post->post_title);
			$permalink = get_permalink($post->ID);
			$output .= $before . '<a href="' . $permalink . '" rel="bookmark" title="Постоянная ссылка: ' . htmlspecialchars($post_title, ENT_COMPAT) . '">' . $post_title . '</a>';
			if($show_excerpts) {
				$post_excerpt = stripslashes($post->post_excerpt);
				$output.= '<br />' . $post_excerpt;
			}
			$output .= $after;
		}
	} else {
		$output .= $before . "Не найдено" . $after;
	}
    echo $output;
}
?>
<?php

error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');



?>