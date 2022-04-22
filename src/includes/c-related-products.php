<?php
  $content = array(
    'static' => array(
        'header-title' => 'Related Products',
    ),
    'buttons' => array(
        'add-to-cart' => 'Order Now'
    )
  );
if(is_max()):
$products = [
    [
        'php_src' => 'product-mymix.php',
        'img' => 'max/related-1.png',
        'name' => 'Crispy Pata',
        'price' => '₱ 1,035.00',
        'discount' => '',
    ],
    [
        'php_src' => 'product-mymix.php',
        'img' => 'max/related-2.png',
        'name' => 'Chicken Lumpiang Shanghai',
        'price' => '₱ 199.00',
        'discount' => '₱ 275.00',
    ],
    [
        'php_src' => 'product-mymix.php',
        'img' => 'max/related-3.png',
        'name' => 'All Beef Kare-Kare',
        'price' => '₱ 919.00',
        'discount' => '',
    ],
    [
        'php_src' => 'product-mymix.php',
        'img' => 'max/related-4.png',
        'name' => 'Sizzling Tofu',
        'price' => '₱ 344.00',
        'discount' => '',
    ],
];
endif;
if(is_ph()):
    $content = array(
        'static' => array(
            'header-title' => 'Best Paired With',
        ),
        'buttons' => array(
            'add-to-cart' => 'Add to Cart'
        )
      );
    $products = [
        [
            'php_src' => 'product-mymix.php',
            'img' => 'ph/ph-related-1.png',
            'name' => 'Chocolate Marble Pancakes',
            'price' => '₱ 250.80',
            'discount' => '',
        ],
        [
            'php_src' => 'product-mymix.php',
            'img' => 'ph/ph-related-2.png',
            'name' => 'Caramel Banana Walnut',
            'price' => '₱ 256.80',
            'discount' => '₱ 275.00',
        ],
        [
            'php_src' => 'product-mymix.php',
            'img' => 'ph/ph-related-3.png',
            'name' => 'Classic Pancake',
            'price' => '₱ 214.80',
            'discount' => '',
        ],
        [
            'php_src' => 'product-mymix.php',
            'img' => 'ph/ph-related-4.png',
            'name' => 'Classic Country Medley',
            'price' => '₱ 372.00',
            'discount' => '',
        ],
    ];
    endif;
if(is_yc()):
$products = [
    [
        'php_src' => 'product-mymix.php',
        'img' => 'rel1.png',
        'name' => '2 Pizzas for 499',
        'price' => 'starts at P499.00',
        'discount' => '',
    ],
    [
        'php_src' => 'product-mymix.php',
        'img' => 'rel2.png',
        'name' => '2-in-1 Welcome to ‘21',
        'price' => 'starts at P499.00',
        'discount' => '',
    ],
    [
        'php_src' => 'product-mymix.php',
        'img' => 'rel3.png',
        'name' => '3 Pizzas for P699',
        'price' => 'starts at P699.00',
        'discount' => '',
    ],
    [
        'php_src' => 'product-mymix.php',
        'img' => 'rel4.png',
        'name' => 'World Pizza Day',
        'price' => 'starts at P499.00',
        'discount' => '',
    ],
    [
        'php_src' => 'product-mymix.php',
        'img' => 'rel4.png',
        'name' => 'World Pizza Day',
        'price' => 'starts at P499.00',
        'discount' => '',
    ],
    [
        'php_src' => 'product-mymix.php',
        'img' => 'rel4.png',
        'name' => 'World Pizza Day',
        'price' => 'starts at P499.00',
        'discount' => '',
    ],
    [
        'php_src' => 'product-mymix.php',
        'img' => 'rel4.png',
        'name' => 'World Pizza Day',
        'price' => 'starts at P499.00',
        'discount' => '',
    ],
    [
        'php_src' => 'product-mymix.php',
        'img' => 'rel4.png',
        'name' => 'World Pizza Day',
        'price' => 'starts at P499.00',
        'discount' => '',
    ],
];
endif;
?>
<section class="c-related-products">
    <div class="o-container">
        <div class="c-related-products__content">
            <h3 class="o-header-title-slant"><?= $content['static']['header-title']; ?></h3>
            <?php if(is_yc()): ?>
            <div class="slider-buttons">
                <button class="slider-buttons__prev"><i class="ic-slider-prev"></i></button>
                <button class="slider-buttons__next"><i class="ic-slider-next"></i></button>
            </div>
            <?php endif; ?>
            <div class="products-carousel c-explore-cards">
                <?php foreach($products as $key => $value): ?>
                    <a href="<?= $value['php_src'] ?>" class="c-explore-cards-card pointer-hand">
                        <div class="c-explore-cards-card_item [ u-df-mb u-df-mb-fd-c ]">
                            <figure>
                                <img src="<?= IMG.$value['img'] ?>" alt="">
                            </figure>
                            <div class="c-explore-cards-card_item--detail [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                                <h6 class="h6"><?= $value['name'] ?></h6>
                                <span><?= $value['price'] ?><?php if($value['discount'] != ''): ?> <span><?= $value['discount']; ?></span><?php endif; ?></span>
                                <button class="o-button pointer-hand">
                                    <span><?= $content['buttons']['add-to-cart']; ?></span>
                                    <i class="ic-cart"></i>
                                </button>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>