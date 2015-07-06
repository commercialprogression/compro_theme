<?php

/**
 * Add theme settings.
 */
function stiff_drink_form_system_theme_settings_alter(&$form, $form_state) {
  $form['stiff_drink_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Stiff drink settings'),
  );

  $form['stiff_drink_settings']['stiff_drink_disable_core_css'] = array(
    '#type' => 'checkbox',
    '#title' => t('Disable Drupal core CSS'),
    '#default_value' => theme_get_setting('stiff_drink_disable_core_css'),
  );
}