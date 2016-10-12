<?php

$style = theme_get_setting('style');

switch ($style) {
	case 1:
		drupal_add_css(drupal_get_path('theme', 'techtonic') . '/css/style1.css', array('group' => CSS_THEME, 'weight' => 100, 'type' => 'file'));
		break;
	case 2:
		drupal_add_css(drupal_get_path('theme', 'techtonic') . '/css/style2.css', array('group' => CSS_THEME, 'weight' => 100, 'type' => 'file'));
		break;
	case 3:
		drupal_add_css(drupal_get_path('theme', 'techtonic') . '/css/style3.css', array('group' => CSS_THEME, 'weight' => 100, 'type' => 'file'));
		break;
	case 4:
		drupal_add_css(drupal_get_path('theme', 'techtonic') . '/css/style4.css', array('group' => CSS_THEME, 'weight' => 100, 'type' => 'file'));
		break;
	case 5:
		drupal_add_css(drupal_get_path('theme', 'techtonic') . '/css/style5.css', array('group' => CSS_THEME, 'weight' => 100, 'type' => 'file'));
		break;
	default:
		drupal_add_css(drupal_get_path('theme', 'techtonic') . '/css/style1.css', array('group' => CSS_THEME, 'weight' => 100, 'type' => 'file'));

}

function techtonic_preprocess_page(&$variables) {
  $nodes = $variables['page']['content']['system_main']['nodes'];
  $i = 1;
  $len = count($nodes);
  foreach (array_keys($nodes) as $nid) {
    if ($i == 1) {
      $variables['page']['content']['system_main']['nodes'][$nid]['#node']->classes_array = array('first');
    }
    if ($i == $len - 1) {
      $variables['page']['content']['system_main']['nodes'][$nid]['#node']->classes_array = array('last');
    }
    $i++;
    /* So I don't get "Warning: Cannot use a scalar value as an array" */
    unset($nodes,$nid);
  }
}

function techtonic_preprocess_node(&$variables) {
  $node = $variables['node'];
  if (!empty($node->classes_array)) {
    $variables['classes_array'] = array_merge($variables['classes_array'], $node->classes_array);
  }
}