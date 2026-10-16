<?php
function sterling_legal_child_enqueue_styles() {
    wp_enqueue_style(
        'sterling-legal-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'sterling-legal-child-style',
        get_stylesheet_uri(),
        array('sterling-legal-parent-style'),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'sterling_legal_child_enqueue_styles');