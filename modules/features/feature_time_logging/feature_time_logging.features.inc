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
    'project' => array(
      'name' => t('Project'),
      'base' => 'node_content',
      'description' => t('Project content.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'task' => array(
      'name' => t('Task'),
      'base' => 'node_content',
      'description' => t('A simple task that can be assigned to a user.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'team' => array(
      'name' => t('Team'),
      'base' => 'node_content',
      'description' => t('Group of people.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'time_log' => array(
      'name' => t('Time Log'),
      'base' => 'node_content',
      'description' => t('Log time for any task.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
