<?php
$theme_options = apply_filters( 'et_mobile_theme_options', array(
	'logo' => array(
		'type' => 'upload',
		'title' => 'Logo'
	),
	'webpage_icon_small' => array(
		'type' => 'upload',
		'title' => 'Webpage Icon ( 57x57px )',
		'description' => 'This icon represents your web application or webpage on iOS. <a href="http://developer.apple.com/library/IOS/#documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html" target="_blank">More info</a>'
	),
	'webpage_icon_big' => array(
		'type' => 'upload',
		'title' => 'Webpage Icon ( 114x114px )',
		'description' => '114x114px icon for iPhone4'
	),
	'splash_image' => array(
		'type' => 'upload',
		'title' => 'Startup Image ( 320x460px )',
		'description' => 'Image that is displayed while your web application launches on IOS. <a href="http://developer.apple.com/library/IOS/#documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html" target="_blank">More info</a>'
	),
	'activate_ipad' => array(
		'type' => 'enable_disable',
		'title' => 'Activate HandHeld theme on iPad',
		'std' => 'disable'
	),
	'et_section2' => array(
		'type' => 'heading',
		'title' => 'Homepage settings'
	),
	'home_intro_page' => array(
		'type' => 'select',
		'what_to_select' => 'pages',
		'title' => 'Home intro page'
	),
	'home_blog_categories' => array(
		'type' => 'checkboxes',
		'what_to_select' => 'categories',
		'title' => 'Select Blog categories'
	),
	'home_project_categories' => array(
		'type' => 'checkboxes',
		'what_to_select' => 'categories',
		'title' => 'Select Project categories'
	),
	'home_blog_posts_num' => array(
		'type' => 'text',
		'std' => '3',
		'title' => 'Number of blog posts to show on page load',
		'small_input' => true
	),
	'home_blog_posts_add_num' => array(
		'type' => 'text',
		'std' => '5',
		'title' => 'Number of blog posts to add each time the user clicks "Load More"',
		'small_input' => true
	),
	'home_projects_posts_num' => array(
		'type' => 'text',
		'std' => '6',
		'title' => 'Number of recent work posts to show on page load',
		'small_input' => true
	),
	'home_projects_posts_add_num' => array(
		'type' => 'text',
		'std' => '6',
		'title' => 'Number of recent work posts to add each time the user clicks "Load More"',
		'small_input' => true
	),
	'home_front_page' => array(
		'type' => 'select',
		'what_to_select' => 'pages',
		'can_be_empty' => true,
		'title' => 'Select Front page',
		'description' => 'You can select a static frontpage here. If you want the homepage content generated by default, don\'t select a front page'
	),
	'bg_color' => array(
		'type' => 'text',
		'title' => 'Background color',
		'small_input' => true,
		'description' => 'ex: <code>14c943</code>'
	),
	'home_welcome_section' => array(
		'type' => 'enable_disable',
		'title' => 'Show Intro page on homepage'
	),
	'home_recentposts_section' => array(
		'type' => 'enable_disable',
		'title' => 'Show Recent Posts section on homepage'
	),
	'home_recentwork_section' => array(
		'type' => 'enable_disable',
		'title' => 'Show Recent Work section on homepage'
	),
	'single_post_comments' => array(
		'type' => 'enable_disable',
		'title' => 'Show comments on single post view'
	),
	'single_page_comments' => array(
		'type' => 'enable_disable',
		'title' => 'Show comments on single page view'
	)
) );