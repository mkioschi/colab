<?php
$galeriaBaseUrl = get_template_directory_uri() . '/assets/img/galeria';

$items = [
    1 => [
        'small' => "$galeriaBaseUrl/small/item-1.jpg",
        'large' => "$galeriaBaseUrl/large/item-1.jpg",
        'size' => '1920x1280'
    ],
    2 => [
        'small' => "$galeriaBaseUrl/small/item-2.jpg",
        'large' => "$galeriaBaseUrl/large/item-2.jpg",
        'size' => '1920x1280'
    ],
    3 => [
        'small' => "$galeriaBaseUrl/small/item-3.jpg",
        'large' => "$galeriaBaseUrl/large/item-3.jpg",
        'size' => '1920x1280'
    ],
    4 => [
        'small' => "$galeriaBaseUrl/small/item-4.jpg",
        'large' => "$galeriaBaseUrl/large/item-4.jpg",
        'size' => '1920x1280'
    ],
    5 => [
        'small' => "$galeriaBaseUrl/small/item-5.jpg",
        'large' => "$galeriaBaseUrl/large/item-5.jpg",
        'size' => '1920x1280'
    ],
    6 => [
        'small' => "$galeriaBaseUrl/small/item-6.jpg",
        'large' => "$galeriaBaseUrl/large/item-6.jpg",
        'size' => '1920x1280'
    ],
    7 => [
        'small' => "$galeriaBaseUrl/small/item-7.jpg",
        'large' => "$galeriaBaseUrl/large/item-7.jpg",
        'size' => '1920x1280'
    ],
    8 => [
        'small' => "$galeriaBaseUrl/small/item-8.jpg",
        'large' => "$galeriaBaseUrl/large/item-8.jpg",
        'size' => '1920x1280'
    ],
    9 => [
        'small' => "$galeriaBaseUrl/small/item-9.jpg",
        'large' => "$galeriaBaseUrl/large/item-9.jpg",
        'size' => '1920x1280'
    ],
];
?>

<section class="galeria">
    <div class="container">
        <div class="galeria-wrap photoswipe-gallery" data-pswp-uid="1" itemscope itemtype="http://schema.org/ImageGallery">
            <div class="coluna coluna-left">
                <div class="linha linha-1">
                    <figure class="item item-1" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="<?php echo $items[1]['large'] ?>" itemprop="contentUrl" data-index="0" data-size="<?php echo $items[1]['size'] ?>">
                            <div class="content" itemprop="thumbnail" style="background-image: url('<?php echo $items[1]['small'] ?>')">Foto 1</div>
                        </a>
                    </figure>
                </div>
                <div class="linha linha-2">
                    <figure class="item item-1" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="<?php echo $items[2]['large'] ?>" itemprop="contentUrl" data-index="1" data-size="<?php echo $items[2]['size'] ?>">
                            <div class="content" itemprop="thumbnail" style="background-image: url('<?php echo $items[2]['small'] ?>')">Foto 2</div>
                        </a>
                    </figure>
                    <figure class="item item-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="<?php echo $items[3]['large'] ?>" itemprop="contentUrl" data-index="2" data-size="<?php echo $items[3]['size'] ?>">
                            <div class="content" itemprop="thumbnail" style="background-image: url('<?php echo $items[3]['small'] ?>')">Foto 3</div>
                        </a>
                    </figure>
                </div>
                <div class="linha linha-3">
                    <figure class="item item-1" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="<?php echo $items[4]['large'] ?>" itemprop="contentUrl" data-index="3" data-size="<?php echo $items[4]['size'] ?>">
                            <div class="content" itemprop="thumbnail" style="background-image: url('<?php echo $items[4]['small'] ?>')">Foto 4</div>
                        </a>
                    </figure>
                    <figure class="item item-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="<?php echo $items[5]['large'] ?>" itemprop="contentUrl" data-index="4" data-size="<?php echo $items[5]['size'] ?>">
                            <div class="content" itemprop="thumbnail" style="background-image: url('<?php echo $items[5]['small'] ?>')">Foto 5</div>
                        </a>
                    </figure>
                </div>
            </div>

            <div class="coluna coluna-right">
                <div class="linha linha-1">
                    <figure class="item item-1" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="<?php echo $items[6]['large'] ?>" itemprop="contentUrl" data-index="5" data-size="<?php echo $items[6]['size'] ?>">
                            <div class="content" itemprop="thumbnail" style="background-image: url('<?php echo $items[6]['small'] ?>')">Foto 6</div>
                        </a>
                    </figure>
                    <figure class="item item-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="<?php echo $items[7]['large'] ?>" itemprop="contentUrl" data-index="6" data-size="<?php echo $items[7]['size'] ?>">
                            <div class="content" itemprop="thumbnail" style="background-image: url('<?php echo $items[7]['small'] ?>')">Foto 7</div>
                        </a>
                    </figure>
                </div>
                <div class="linha linha-2">
                    <figure class="item item-1" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="<?php echo $items[8]['large'] ?>" itemprop="contentUrl" data-index="7" data-size="<?php echo $items[8]['size'] ?>">
                            <div class="content" itemprop="thumbnail" style="background-image: url('<?php echo $items[8]['small'] ?>')">Foto 8</div>
                        </a>
                    </figure>
                    <figure class="item item-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="<?php echo $items[9]['large'] ?>" itemprop="contentUrl" data-index="8" data-size="<?php echo $items[9]['size'] ?>">
                            <div class="content" itemprop="thumbnail" style="background-image: url('<?php echo $items[9]['small'] ?>')">Foto 9</div>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>