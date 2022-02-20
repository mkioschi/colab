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
function filter_content_lightbox($the_content) {
    if ((is_page() || is_single()) && !is_admin() && isset($the_content) && !empty($the_content)) {

        // Cria o objeto DOM.
        $html = new simple_html_dom();

        // Carrega o HTML à partir da variável $the_content.
        $html->load($the_content);

        // Busca todos as imagens.
        $figures = $html->find('.wp-block-image');

        // Inicializa o índice de figuras.
        $figure_index = 0;

        // Percorre cada imagem.
        foreach($figures as $figure) {
            if ($figure->getAttribute('itemprop') == 'associatedMedia') continue;

            // Adiciona a classe .photoswipe-lightbox na tag <a> e as dimensões da imagem.
            $a = $figure->find('a')[0];

            if ($a) {
                // Classes CSS.
                $a_css_classes = $a->getAttribute('class');

                $a->setAttribute('class', $a_css_classes . ' photoswipe-lightbox');

                // Dimensões da imagem.
                $image_url = $a->getAttribute('href');

                $image_sizes = getimagesize(getAbsolutePath($image_url));

                $a->setAttribute('data-size', $image_sizes[0] . 'x' . $image_sizes[1]);

                // Adiciona o atributo data-index
                $a->setAttribute('data-index', $figure_index);
            }

            // Incrementa ao índice.
            $figure_index++;
        }

        // Sobescreve a variável $the_content com o novo conteúdo.
        $the_content = $html->save();

        // Limpa a memória!
        $html->clear();

        unset($html);
    }

    return $the_content;
}

add_filter('the_content', 'filter_content_lightbox');
