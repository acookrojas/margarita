<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * {{ THEME NAME }} theme.
 */
 //Wrapper classes for view modes
 /*function THEME_preprocess_node(&$variables) {
   // Add view-mode class to nodes
   $variables['classes_array'][] = drupal_html_class('entity-view-mode--' . $variables['view_mode']);
 }*/

 function margarita_preprocess_html(&$variables) {
    drupal_add_css('https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700', array('group' => CSS_THEME));
 }
