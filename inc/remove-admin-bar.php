<?php

function remove_admin_bar()
{
    // Remove a barra de admin para todos usuários, exceto para administradores
    //if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
    //}
}

add_action('after_setup_theme', 'remove_admin_bar');
