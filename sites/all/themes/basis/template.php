<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Basis theme.
 */
 
 function aventura_preprocess_html(&$variables) {
 	drupal_add_js(drupal_get_path('theme', 'basis') .'/js/basis.js');
   drupal_add_js(drupal_get_path('theme', 'basis') .'/js/responsive-tables.js');
   drupal_add_css(drupal_get_path('theme', 'basis') .'/css/responsive-tables.css');
 }
 
