<?php

if (!function_exists('getAbsolutePath')) {
    function getAbsolutePath($mediaUrl) {
        $mediaUrlExploded = explode('wp-content', $mediaUrl);

        return WP_CONTENT_DIR . $mediaUrlExploded[1];
    }
}

/*
 * Depende da classe Simple HTML DOM.
 * Url: https://simplehtmldom.sourceforge.io/
 */
function filter_content_gallery($the_content) {
    if ((is_page() || is_single()) && !is_admin() && isset($the_content) && !empty($the_content)) {

        // Cria o objeto DOM.
        $html = new simple_html_dom();

        // Carrega o HTML à partir da variável $the_content.
        $html->load($the_content);

        // Busca todos as galerias.
        $galleries = $html->find('.wp-block-gallery');

        // Percorre cada galeria.
        foreach($galleries as $gallery) {

            // Adiciona a classe css .photoswipe-gallery a cada bloco.
            $gallery_css_classes = $gallery->getAttribute('class');

            $gallery->setAttribute('class', $gallery_css_classes . ' photoswipe-gallery');

            // Adiciona atributos do Schema.org no bloco.
            $gallery->setAttribute('itemscope', '');
            $gallery->setAttribute('itemtype', 'http://schema.org/ImageGallery');

            // Busca todos os items <figure> da galeria.
            $figures = $gallery->find('figure');

            // Inicializa o índice de figuras.
            $figure_index = 0;

            // Percorre cada item <figure>.
            foreach($figures as $figure) {

                // Adiciona atributos do Schema.org na <figure>.
                $figure->setAttribute('itemprop', 'associatedMedia');
                $figure->setAttribute('itemscope', '');
                $figure->setAttribute('itemtype', 'http://schema.org/ImageObject');

                // Adiciona atributos do Schema.org no <a> e as dimensões da imagem.
                $a = $figure->find('a')[0];

                if ($a) {
                    $a->setAttribute('itemprop', 'contentUrl');
                    $a->setAttribute('data-index', $figure_index);

                    // Dimensões da imagem.
                    $image_url = $a->getAttribute('href');

                    $image_sizes = getimagesize(getAbsolutePath($image_url));

                    $a->setAttribute('data-size', $image_sizes[0] . 'x' . $image_sizes[1]);
                }

                // Adiciona atributos do Schema.org no <figcaption>.
                $figcaption = $figure->find('figcaption')[0];

                if ($figcaption) {
                    $figcaption->setAttribute('itemprop', 'caption description');
                }

                //Incrementa ao índice.
                $figure_index++;
            }
        }

        // Sobescreve a variável $the_content com o novo conteúdo.
        $the_content = $html->save();

        // Limpa a memória!
        $html->clear();

        unset($html);
    }

    return $the_content;
}

add_filter('the_content', 'filter_content_gallery');
