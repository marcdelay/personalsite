<?php

declare(strict_types=1);

/**
 * @file
 * Theme settings form for marcdelaycom theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function marcdelaycom_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['marcdelaycom'] = [
    '#type' => 'details',
    '#title' => t('marcdelaycom'),
    '#open' => TRUE,
  ];

  $form['marcdelaycom']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
