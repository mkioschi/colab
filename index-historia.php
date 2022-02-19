<section class="historia">
    <div class="container">
        <div class="row">
            <div class="col-title col col-12 col-lg-6">
                <div class="title-line-brush">
                    <div class="wrap">
                        <h1>Semear para <br> transformar</h1>
                        <div class="line-brush">
                            <img src="<?php echo get_template_directory_uri() . "/assets/img/title-trace-orange.svg" ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-text col col-12 col-lg-6">
                <p><?php echo get_the_excerpt(get_page_by_path('historia'))?></p>
                <a href="<?php echo get_page_link(get_page_by_path('historia')->ID) ?>" class="more btn-default">Saiba Mais</a>
            </div>
        </div>
    </div>
</section>