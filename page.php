<?php get_header(); ?>

<main id="the-main">
    <?php if (have_posts()): the_post(); ?>
        <article>
            <header id="the-title">
                <div class="container">
                    <div class="wrap">
                        <h1>
                            <?php the_title(); ?>
                            <br>
                            <div class="line-brush">
                                <img src="<?php echo get_template_directory_uri() . "/assets/img/title-trace-orange-reverse.svg" ?>" alt="">
                            </div>
                        </h1>
                    </div>
                </div>
            </header>

            <?php if (has_post_thumbnail()):?>
                <div id="the-cover" style="background-image: url('<?php the_post_thumbnail_url( 'large' ) ?>')">
                    <div class="mask mask-top">
                        <img class="d-lg-none" src="<?php echo get_template_directory_uri() . "/assets/img/mask-light-mobile-top.svg" ?>">
                        <img class="d-none d-lg-block" src="<?php echo get_template_directory_uri() . "/assets/img/mask-light-desktop-top.svg" ?>">
                    </div>

                    <div class="mask mask-bottom">
                        <img class="d-lg-none" src="<?php echo get_template_directory_uri() . "/assets/img/mask-light-mobile-bottom.svg" ?>">
                        <img class="d-none d-lg-block" src="<?php echo get_template_directory_uri() . "/assets/img/mask-light-desktop-bottom.svg" ?>">
                    </div>
                </div>
            <?php endif; ?>

            <div class="container">
                <div id="the-content">
                    <?php the_content(); ?>
                </div>
            </div>

            <div id="frase">
                <div class="container">
                    <h2>UMA SEMENTE QUE CARREGA UMA BOA NOTÍCIA</h2>
                </div>
            </div>
        </article>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
