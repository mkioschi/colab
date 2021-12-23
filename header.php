<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="the-wrap">
<header id="the-header">
    <div class="container">
        <div class="content">

            <div class="col-logo">
                <a href="<?php echo get_site_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri() . "/assets/img/logo-white.png" ?>" alt="Logo">
                </a>

                <a href="#" class="toogle-menu">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="col-menu">
                <nav class="menu">
                    <ul>
                        <li><a href="#" class="transition">Início</a></li>
                        <li><a href="#" class="transition">História</a></li>
                        <li><a href="#" class="transition">Nosso Negócio</a></li>
                        <li><a href="#" class="transition">Colaboradores</a></li>
                        <li><a href="#" class="transition">Contato</a></li>
                        <li class="social-links">
                            <a href="#" class="transition"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="transition"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
