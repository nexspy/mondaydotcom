<?php
/**
 * @file
 * feature_time_logging.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_time_logging_node_info() {
  $items = array(
    'task' => array(
      'name' => t('Task'),
      'base' => 'node_content',
      'description' => t('A simple task that can be assigned to a user.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
