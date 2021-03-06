<?php get_header(); ?>

<main id="the-main">
    <section class="cover">
        <div class="gradient"></div>

        <div id="video-wrapper">
            <video poster="<?php echo get_template_directory_uri() . "/assets/img/home-1.jpg" ?>" id="video" playsinline autoplay muted loop>
                <?php if (DEVICE_TYPE == 'computer'): ?>
                    <source src="<?php echo get_template_directory_uri() . "/assets/videos/background/desktop.webm" ?>" type="video/webm">
                    <source src="<?php echo get_template_directory_uri() . "/assets/videos/background/desktop.mp4" ?>" type="video/mp4">
                <?php else: ?>
                    <source src="<?php echo get_template_directory_uri() . "/assets/videos/background/mobile.webm" ?>" type="video/webm">
                    <source src="<?php echo get_template_directory_uri() . "/assets/videos/background/mobile.mp4" ?>" type="video/mp4">
                <?php endif; ?>
            </video>
        </div>

        <div class="mask mask-bottom">
            <img class="d-lg-none" src="<?php echo get_template_directory_uri() . "/assets/img/mask-light-mobile-bottom.svg" ?>">
            <img class="d-none d-lg-block" src="<?php echo get_template_directory_uri() . "/assets/img/mask-light-desktop-bottom.svg" ?>">
        </div>
    </section>

    <?php get_template_part('index', 'historia'); ?>

    <?php get_template_part('index', 'video'); ?>

    <?php get_template_part('index', 'proposito'); ?>

    <?php get_template_part('index', 'slogan'); ?>

    <?php get_template_part('index', 'galeria'); ?>

</main>

<?php get_footer(); ?>
