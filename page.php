<?php get_header(); ?>

<?php if (have_posts()): the_post(); ?>
    <main id="the-main">
        <article>
            <header id="the-title" class="<?php if (has_post_thumbnail()) echo "with-cover"; ?>" style="background-image: url('<?php the_post_thumbnail_url( 'large' ) ?>')">
                <div class="gradient"></div>

                <div class="container">
                    <div class="wrap">
                        <h1>
                            <?php the_title(); ?>
                            <?php if (has_excerpt()):?>
                                <br>
                                <div class="line-brush d-none d-lg-block">
                                    <?php if (has_post_thumbnail()):?>
                                        <img src="<?php echo get_template_directory_uri() . "/assets/img/title-trace-white-reverse.svg" ?>" alt="">
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri() . "/assets/img/title-trace-orange-reverse.svg" ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </h1>

                        <?php if (has_excerpt()):?>
                            <div class="excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if (has_post_thumbnail()):?>
                    <div class="mask mask-bottom">
                        <img class="d-lg-none" src="<?php echo get_template_directory_uri() . "/assets/img/mask-light-mobile-bottom.svg" ?>">
                        <img class="d-none d-lg-block" src="<?php echo get_template_directory_uri() . "/assets/img/mask-light-desktop-bottom.svg" ?>">
                    </div>
                <?php endif; ?>
            </header>

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
    </main>
<?php endif; ?>

<?php get_footer(); ?>
