<?php
/**
 * @file
 * nodes_from_old_site.features.inc
 */

/**
 * Implements hook_node_info().
 */
function nodes_from_old_site_node_info() {
  $items = array(
    'blog_archives' => array(
      'name' => t('Blog Archives'),
      'base' => 'node_content',
      'description' => t('Blog Posts from yon'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'how_to_guides' => array(
      'name' => t('How-To & Guides'),
      'base' => 'node_content',
      'description' => t('How-To\'s and Guides'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
