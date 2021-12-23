<?php
$posts = get_posts([
    'numberposts' => 3,
    'category_name' => 'sem-categoria'
]);
?>

<section class="proposito">
    <div class="container">
        <div class="title-line-brush">
            <div class="wrap">
                <h1>Propósito</h1>
                <div class="line-brush">
                    <img src="<?php echo get_template_directory_uri() . "/assets/img/title-trace-orange.svg" ?>" alt="">
                </div>
            </div>
        </div>

        <ul class="row">
            <?php foreach ($posts as $post): setup_postdata($post); ?>
                <li class="col col-12 col-lg-4">
                    <a href="<?=get_the_permalink()?>">
                        <div class="image" style="background-image: url('<?=get_the_post_thumbnail_url()?>')"></div>
                        <p class="name">
                            <?=get_the_title()?>
                        </p>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>