<?php

function vendorAutoLoad($className)
{
    if (file_exists(get_template_directory() . "/inc/vendor/" . str_replace("\\", "/", $className) . ".php")) {
        require_once get_template_directory() . "/inc/vendor/" . str_replace("\\", "/", $className) . ".php";
    }
}

spl_autoload_register('vendorAutoLoad');

/**
 * Enqueue Scripts
 */
require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Classes CSS personalizadas na tag <body>
 */
require get_template_directory() . '/inc/body-classes.php';

/**
 * Remove Admin Bar
 */
require get_template_directory() . '/inc/remove-admin-bar.php';

/**
 * Register Menus
 */
register_nav_menus(array(
    'header-nav-1' => __('Menu Desktop Cabeçalho 1'),
    'header-nav-2' => __('Menu Desktop Cabeçalho 2'),
    'general-nav' => __('Menu Geral')
));