<?php

function camaleon_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface &$form_state, $form_id = NULL) {

  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  $form['custom'] = array(
    '#type'          => 'details',
    '#title'         => t('Camaleon settings'),
    '#open' => TRUE,
  );

  $form['custom']['width'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Width'),
    '#default_value' => theme_get_setting('width'),
    '#description'   => t("Place this text in the widget spot on your site."),
  );
  $form['custom']['full_width'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Full Width'),
    '#default_value' => theme_get_setting('full_width'),
    '#description'   => t("Place this text in the widget spot on your site."),
  );
}