<?php

function my_wp_scripts()
{
    // CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('photoswipe', sprintf('%s/assets/plugins/photoswipe-v4.1.3/photoswipe.css', get_template_directory_uri()));
    wp_enqueue_style('photoswipe-skin', sprintf('%s/assets/plugins/photoswipe-v4.1.3/default-skin/default-skin.css', get_template_directory_uri()));
    wp_enqueue_style('style', sprintf('%s/assets/css/styles.min.css', get_template_directory_uri()));

    // JavaScript
    wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/releases/v5.15.4/js/all.js', null, false, true);
    wp_enqueue_script('photoswipe', sprintf('%s/assets/plugins/photoswipe-v4.1.3/photoswipe.min.js', get_template_directory_uri()), null, false, true);
    wp_enqueue_script('photoswipe-ui', sprintf('%s/assets/plugins/photoswipe-v4.1.3/photoswipe-ui-default.min.js', get_template_directory_uri()), null, false, true);
    wp_enqueue_script('script', sprintf('%s/assets/js/scripts.min.js', get_template_directory_uri()), array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'my_wp_scripts');
