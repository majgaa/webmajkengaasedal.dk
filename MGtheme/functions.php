<?php
function my_theme_styles() {
    // Enqueue the theme's main stylesheet
    wp_enqueue_style('my-theme-style', get_stylesheet_uri(), array(), '1.0');

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', array(), '5.3.1', 'all');

    // Enqueue fonts
    function my_theme_add_fonts() {
        wp_enqueue_style('my-adobe-fonts', 'https://use.typekit.net/aau6xzc.css');
    }
    add_action('wp_enqueue_scripts', 'my_theme_add_fonts');
    

}




 

add_action('wp_enqueue_scripts', 'my_theme_styles');

// Add custom scripts and stylesheets
function add_custom_scripts_and_styles() {
    // Enqueue custom JavaScript file - By calling it "true" we print it in the footer = good for pagespeed and load time
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/custom-script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_custom_scripts_and_styles');



