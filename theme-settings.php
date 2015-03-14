<?php

/**
 * Add theme settings.
 */
function stiff_drink_form_system_theme_settings_alter(&$form, $form_state) {
  $form['stiff_drink_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Stiff drink settings'),
  );
  
  $form['stiff_drink_settings']['stiff_drink_browsersync'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable BrowserSync'),
    '#default_value' => theme_get_setting('stiff_drink_browsersync'),
  );

  $form['stiff_drink_settings']['stiff_drink_browsersync_version'] = array(
    '#type' => 'textfield',
    '#title' => t('BrowserSync version'),
    '#default_value' => theme_get_setting('stiff_drink_browsersync_version'),
    '#description' => t('Enter browsersync version e.g. 2.2.4'),
    '#states' => array(
      'visible' => array(
        'input[name="stiff_drink_browsersync"]' => array('checked' => true),
      ),
      'required' => array(
        'input[name="stiff_drink_browsersync"]' => array('checked' => true),
      ),
    ),
  );
}