<?php
/*
Author: karissa
URL: http://karissademi.com


*/

// Sidebars & Widgetizes Areas
function pictorial_child_register_sidebars() {
    register_sidebar(array(
    	'id' => 'sidebar_login',
    	'name' => 'Login Sidebar',
    	'description' => 'Use for login pages.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
}
	
add_action("widgets_init", "pictorial_child_register_sidebars");