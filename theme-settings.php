<?php

/**
 * Add theme settings.
 */
function compro_theme_form_system_theme_settings_alter(&$form, $form_state) {
  $form['compro_theme_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Compro theme settings'),
  );

  $form['compro_theme_settings']['compro_theme_disable_core_css'] = array(
    '#type' => 'checkbox',
    '#title' => t('Disable Drupal core CSS'),
    '#default_value' => theme_get_setting('compro_theme_disable_core_css'),
  );
}
