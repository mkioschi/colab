<?php

function infoconews_setup()
{
    /*
     * Baseado no thema twentynineteen
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    /*
     * Habilita o resumo nas páginas
     */
    add_post_type_support('page', 'excerpt');

    /*
     * Post Thumbnails
     */
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'infoconews_setup');
