<?php

function wpdevs_customizer($wp_customize)
{
    // 1 Copyrihgt Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Settings'
        )
    );
    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright X - All Rights Reserved',
            'sanitize_callback' => 'sanitize_text_field' /* https://divpusher.com/blog/wordpress-customizer-sanitization-examples/#text */
        )
    );
    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => 'Copyright Information',
            'description' => 'Please, type your copyright here',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );
}
add_action('customize_register', 'wpdevs_customizer');
