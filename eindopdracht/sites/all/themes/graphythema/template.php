<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*function user_block_view_alter(&$data, $block) {
	switch($block->delta) {
		case 'online' :
			$data['subject'] = 'Tell me: ' . $data['subject'];
			break;
	}
}

function letsthema_menu_tree__menu_primary_menu($variables) {

	$ul = '<ul class="menu">';
	$ul .= $variables['tree'];
	$ul .= '</ul>';

	return $ul;
}

function letsthema_menu_link__menu_primary_menu($variables) {
	$element = $variables['element'];

	$sub_menu = '';

	if ($element['#href'] == '<front>' && drupal_is_front_page()) {
		$element['#attributes']['class'][] = 'active-trail';
	}

	if(in_array('active-trail', $element['#attributes']['class'])) {
		$element['#attributes']['class'][] = 'active';
	}

	if ($element['#below']) {
		$sub_menu = drupal_render($element['#below']);
	}
	$output = l($element['#title'], $element['#href'], $element['#localized_options']);
	return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function letsthema_preprocess_search_block_form(&$vars) {
	$vars['search_form'] = str_replace('type="text"', 'type="search"', $vars['search_form']);
}

function letsthema_theme() {
	$items = array();
	$items['user_login'] = array(
		'render element' => 'form',
		'path' => drupal_get_path('theme', 'letsthema') . '/templates',
		'template' => 'user-login',
	);
	return $items;
}*/