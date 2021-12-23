<?php get_header(); ?>

<?php if (have_posts()): the_post(); ?>
    <main id="the-main">
        <div class="container">
            <div class="title title-line-brush">
                <div class="wrap">
                    <h1><?php the_title(); ?></h1>
                    <div class="line-brush">
                        <img src="<?php echo get_template_directory_uri() . "/assets/img/title-trace-orange-reverse.svg" ?>" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="cover" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
            <div class="mask mask-top">
                <img class="d-lg-none" src="<?php echo get_template_directory_uri() . "/assets/img/mask-light-mobile-top.svg" ?>">
                <img class="d-none d-lg-block" src="<?php echo get_template_directory_uri() . "/assets/img/mask-light-desktop-top.svg" ?>">
            </div>
            <div class="mask mask-bottom">
                <img class="d-lg-none" src="<?php echo get_template_directory_uri() . "/assets/img/mask-light-mobile-bottom.svg" ?>">
                <img class="d-none d-lg-block" src="<?php echo get_template_directory_uri() . "/assets/img/mask-light-desktop-bottom.svg" ?>">
            </div>
        </div>

        <div class="container">
            <div id="the-content" class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </main>
<?php endif; ?>

<?php get_footer(); ?>
