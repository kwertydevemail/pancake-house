<?php
    if(is_ph()):
        $cs_content = array(
            'static' => array(
                'total_label' => 'Total',
                'total_price' => '₱ 875.00',
            ),
            'buttons' => array(
                'clear_cart' => 'CLEAR CART',
                'proceed_checkout' => 'proceed to checkout'
            ),
            'links' => array(
                'to_review_order' => '/review-order.php'
            )
        );
    endif;

    if(is_max()):
        $cs_content = array(
            'static' => array(
                'total_label' => 'Total',
                'total_price' => '₱ 875.00',
            ),
            'buttons' => array(
                'clear_cart' => 'CLEAR CART',
                'proceed_checkout' => 'Review and Update Cart'
            ),
            'links' => array(
                'to_review_order' => '/review-order.php'
            )
        );

        $orders = [
            [
                'name' => 'Whole Fried Chicken',
                'img_url' => 'max-fried-chicken-1.png',
                'total' => '₱ 818.00',
                'quantity' => '1',
                'list_order' => [
                    [
                        'name' => 'Chopped',
                        'price' => '-'
                    ],
                    [
                        'name' => 'Family',
                        'price' => '₱ 689.00'
                    ],
                    [
                        'name' => 'Condiment Trio',
                        'price' => '₱ 129.00'
                    ]
                ]
            ],
            [
                'name' => 'Standard Bundle',
                'img_url' => 'max-promo-product-6.png',
                'total' => '₱ 1,399.00',
                'quantity' => '1',
                'list_order' => [
                    [
                        'name' => 'Corn Sisig',
                        'price' => '-'
                    ],
                    [
                        'name' => 'Sweet & Spicy Tofu',
                        'price' => '-'
                    ],
                    [
                        'name' => 'Pancit Canton',
                        'price' => '-'
                    ],
                    [
                        'name' => '1L Iced Tea',
                        'price' => '-'
                    ]
                ]
            ],
            [
                'name' => 'Chicken Sisig Bowl',
                'img_url' => 'max-pancit-canton.png',
                'total' => '₱ 199.00',
                'quantity' => '1',
                'list_order' => []
            ]
        ];
    endif;
?>
<section class="cart-container" id="cart-side-nav">
    <div class="cart-content">
        <div class="cart-container--first-row">
            <a class="btn__clear-cart button" <?php if(is_ph()):?>href=""<?php endif;?> <?php if(is_max()):?>data-trigger="remove-order"<?php endif;?> ><?= $cs_content['buttons']['clear_cart']; ?></a>
            <button id="cart-side-close" class="close-cart">
                <i class="ic-close"></i>
            </button>
        </div>
        <div class="cart-container--cart-details" id="<?php if(is_max()):?>cart-detail<?php endif;?>">
            <?php if(is_ph()):?>
                <div class="product">
                    <div class="product-order">
                        <h6 class="h6">Garden Special</h6>
                        <div class="quantity">
                            <i class="ic-close"></i>
                            <span class="body-1 order-quantity">1</span>
                        </div>
                    </div>
                    <ul class="product-details">
                        <li class="body-1">Garden Special - 15” Large <span class="body-1">P 840.00</span></li>
                        <li class="body-1 indent">Regular Cut</li>
                        <li class="body-1">Parmesan Cheese <span class="body-1">P 35.00</li>
                        <li class="body-1 body-1--bold subtotal">Subtotal <span class="body-1 body-1--bold">P 875.00</span></li>
                    </ul>
                </div>
            <?php endif;?>

            <?php if(is_max()):?>

                <?php if(count($orders) === 0 || isset($_GET['cartempty'])):?>
                    <p class="empty-cart">Your cart is empty</p>
                <?php endif;?>

                <?php if(!isset($_GET['cartempty'])): foreach($orders as $k => $v): ?>
                    <div class="product">
                        <div class="product-order">
                            <div class="title">
                                <figure>
                                    <img src="dist/images/product/<?= $v['img_url'] ?>" alt="">
                                </figure>
                                <h6 class="h6"><?= $v['name'] ?></h6>
                            </div>

                            <div class="quantity">
                                <i class="ic-x"></i>
                                <span class="body-1 order-quantity"><?= $v['quantity'] ?></span>
                            </div>
                        </div>
                        <ul class="product-details">
                            <?php foreach($v['list_order'] as $a => $b): ?>
                                <li class="body-1"><?= $b['name'] ?> <span class="body-1"><?= $b['price'] ?></span></li>
                            <?php endforeach; ?>  
                            <li class="body-1 body-1--bold subtotal">Subtotal <span class="body-1 body-1--bold"><?= $v['total'] ?></span></li>
                        </ul>
                    </div>
                <?php endforeach; endif; ?>
            <?php endif;?>

        </div>
        <div class="cart-bottom">
            <div class="cart-total">
                <h5 class="title-1 title-1--bold"><?= $cs_content['static']['total_label']; ?></h5>
                <?php if(!isset($_GET['cartempty'])): ?>
                    <h5 class="title-1 title-1--bold"><?= $cs_content['static']['total_price']; ?></h5>
                <?php else: ?>
                    <h5 class="title-1 title-1--bold">₱ 0.00</h5>
                <?php endif; ?>
            </div>
            <a class="o-button o-button-lg cart-btn" href="<?= $cs_content['links']['to_review_order']; ?>">
                <span><?= $cs_content['buttons']['proceed_checkout']; ?></span>
               <i class="ic-check"></i>
            </a>
        </div>
    </div>
</section>