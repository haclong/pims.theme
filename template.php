<?php

/**
 * Preprocesses the wrapping HTML.
 *
 * @param array &$variables
 *   Template variables.
 */
function pims_preprocess_html(&$vars) {
    global $user ;
    
    if($user->uid === 0)
    {
        drupal_add_css(
            path_to_theme() . '/css/pims-anonymous.css', 
            array('group' => CSS_THEME, 'every_page' => FALSE
            )
        ) ;
    }
    
    if($vars['is_front'])
    {
        drupal_add_css(
            path_to_theme() . '/css/pims-front.css', 
            array('group' => CSS_THEME, 'every_page' => FALSE
            )
        ) ;
    }
    
    // Setup IE meta tag to force IE rendering mode
    $meta_viewport = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'viewport',
            'content' =>  'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no',
        )
    );
  
    // Add header meta tag for IE to head
    drupal_add_html_head($meta_viewport, 'meta_viewport');
}

function pims_preprocess_page(&$vars) {
    global $user ;
    
    if($user->uid === 0)
    {
        $vars['theme_hook_suggestion'] = 'page__anonymous' ;
    } elseif($vars['is_front'])
    {
        $vars['theme_hook_suggestion'] = 'page__front' ;
    } else
    {
        $vars['theme_hook_suggestion'] = 'page__authenticated' ;
    }
}

function pims_preprocess_region(&$vars) {
    if($vars['is_front']) {
        $vars['classes_array'][] = 'tile-group' ;
        $vars['classes_array'][] = 'no-margin' ;
        $vars['classes_array'][] = 'no-padding' ;
    } else {
        $vars['classes_array'][] = 'place-left' ;
        $vars['classes_array'][] = 'cell' ;
    }
}

function pims_preprocess_block(&$vars) {
    if($vars['is_front'] && $vars['block']->region == 'front') {
        $vars['classes_array'][] = 'tile-large' ;
        $vars['classes_array'][] = 'block-front' ;
    }
}

function pims_preprocess_maintenance_page(&$vars) {
    drupal_add_css(
        path_to_theme() . '/css/pims-maintenance.css', 
        array('group' => CSS_THEME, 'every_page' => FALSE
        )
    ) ;
}

/**
 * Add line breaks to field
 */
//function pims_preprocess_field(&$vars, $hook) {
//    if(($vars['element']['#field_type'] == 'text_long' || $vars['element']['#field_type'] == 'text_with_summary')) {
//        $vars['items'][0]['#markup'] = "nl2br" . nl2br($vars['items'][0]['#markup']);
//    }
//}
