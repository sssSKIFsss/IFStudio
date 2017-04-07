<?php
/*
 * if-studio functions and definitions
*/

// фильтр рубрик
function HideCategory($query) {
	if ($query->is_feed || ($query->is_home && !(is_paged()))) {
		$query->set('cat','-12, -13, -15, -17, -18, -44');
	}
	return $query;
}
add_filter('pre_get_posts','HideCategory');
// фильтра рубрик - set-off


// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'accesspress-parallax' ),
	'secondary' => __('Secondary Menu', 'blogmenu'),
) );

register_sidebar( array(
	'name' => 'left-sidebar',
	'id' => 'sidebar-1',
	'before_widget' => '<div id="%1$s" class="%2$s widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>'
));
