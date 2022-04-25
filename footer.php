<footer id="the-footer">
    <div class="container">
        <div class="content row">
            <div class="col-logo col-12 col-lg-7">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() . "/assets/img/logo-white.png" ?>" alt="Logo">
                </div>

                <ul class="enderecos row">
                    <li class="col col-lg-6">
                        <h3>Altônia - PR</h3>
                        <p><span><i class="fas fa-map-marker-alt"></i></span> Rod. PR 496 km 25</p>
                        <p><span><i class="fas fa-phone"></i></span> (44) 99764-1987</p>
                    </li>

                    <li class="col col-lg-6">
                        <h3>Xambrê - PR</h3>
                        <p><span><i class="fas fa-map-marker-alt"></i></span> Estrada Cascata KM 16</p>
                        <p><span><i class="fas fa-phone"></i></span> (44) 98402-1697</p>
                    </li>
                </ul>
            </div>

            <div class="col-selos col-12 col-lg-5">
                <ul class="selos">
                    <li>
                        <img src="<?php echo get_template_directory_uri() . "/assets/img/footer-pecuaria.svg" ?>" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri() . "/assets/img/footer-ilpf.svg" ?>" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri() . "/assets/img/footer-agricultura.svg" ?>" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copy">
        <p>&copy 2022. Fazenda Colaboradores do Brasil.<br class="d-lg-none"> Todos Direitos Reservados</p>
    </div>
</footer>

</div> <!-- #the-wrap -->
<?php get_template_part('template-parts/photoswipe', 'element'); ?>
<?php wp_footer(); ?>
</body>
</html>
