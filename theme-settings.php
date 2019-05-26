<?php

function camaleon_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface &$form_state, $form_id = NULL) {

  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  $form['layout'] = array(
    '#type'          => 'details',
    '#title'         => t('Layout settings'),
    '#open' => TRUE,
  );

  $form['layout']['fluid_width'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Fluid width'),
    '#default_value' => theme_get_setting('fluid_width'),
    '#description'   => t("A full container, spanning the entire width of the viewport."),
  );

  $form['ui'] = array(
    '#type'          => 'details',
    '#title'         => t('UI settings'),
    '#open' => TRUE,
  );

  $form['ui']['font_family'] = array(
    '#type'          => 'select',
    '#title'         => t('Font family'),
    '#options' => [
      'montserrat' => t('Montserrat'),
      'playfair' => t('Playfair display'),
      'raleway' => t('Raleway'),
      'roboto' => t('Roboto'),
    ],
    '#default_value' => theme_get_setting('font_family'),
    '#description'   => t("..."),
  );

  $form['ui']['font_size'] = array(
    '#type'          => 'select',
    '#title'         => t('Font size'),
    '#options' => [
      '14' => t('14'),
      '16' => t('16'),
      '18' => t('18'),
    ],
    '#default_value' => theme_get_setting('font_size'),
    '#description'   => t("..."),
  );

  $form['front'] = array(
    '#type'          => 'details',
    '#title'         => t('Front page settings'),
    '#open' => TRUE,
  );

  $form['front']['hero_enable'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Enable front page hero'),
    '#default_value' => theme_get_setting('hero_enable'),
    '#description'   => t("A big banner in front page."),
  );

  $form['front']['hero_title'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Text'),
    '#default_value' => theme_get_setting('hero_title'),
    '#description'   => t("A big title."),
  );

  $form['front']['hero_text'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Text'),
    '#default_value' => theme_get_setting('hero_text'),
    '#description'   => t("A big description."),
  );

  $form['front']['hero_link'] = array(
    '#type'          => 'url',
    '#title'         => t('Link'),
    '#default_value' => theme_get_setting('hero_link'),
    '#description'   => t("A big link."),
  );

}