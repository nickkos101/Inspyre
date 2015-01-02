<?php

$prefix = 'YOUR_PREFIX_';
global $meta_boxes;
$meta_boxes = array();

$meta_boxes[] = array(
    'id' => 'services',
    'title' => 'Service Info',
    'pages' => array('services'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
       array(
        'name' => 'First Icon Name:',
        'id' => 'first-icon',
        'type' => 'text',
        ),
       array(
        'name' => 'First Icon Label:',
        'id' => 'first-icon-lbl',
        'type' => 'text',
        ),
       array(
        'name' => 'Second Icon Name:',
        'id' => 'second-icon',
        'type' => 'text',
        ),
       array(
        'name' => 'Second Icon Label:',
        'id' => 'second-icon-lbl',
        'type' => 'text',
        ),
       array(
        'name' => 'Third Icon Name:',
        'id' => 'third-icon',
        'type' => 'text',
        ),
       array(
        'name' => 'Third Icon Label:',
        'id' => 'third-icon-lbl',
        'type' => 'text',
        ),
       array(
        'name' => 'Fourth Icon Name:',
        'id' => 'fourth-icon',
        'type' => 'text',
        ),
       array(
        'name' => 'Fourth Icon Label:',
        'id' => 'fourth-icon-lbl',
        'type' => 'text',
        ),
       ),
    );

$meta_boxes[] = array(
    'id' => 'pages',
    'title' => 'Databank Overwrites',
    'pages' => array('services'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
       array(
        'name' => 'Slogan:',
        'id' => 'slogan',
        'type' => 'text',
        ),
       ),
    );


/* * ******************* META BOX REGISTERING ********************** */

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes() {
    global $meta_boxes;

    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if (class_exists('RW_Meta_Box')) {
        foreach ($meta_boxes as $meta_box) {
            new RW_Meta_Box($meta_box);
        }
    }
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action('admin_init', 'YOUR_PREFIX_register_meta_boxes');
?>