<?php include 'src/includes/header.php';?>

<?php 
    if(is_ph()):
        $content = array(
            'static' => array(
                'header-title' => 'Review Order Tray',
                'breadcrumbs-review' => 'Review Order Tray',
                'order-egift-label' => 'Enter your egift code below:',
                'egift-placeholder' => 'Type eGift code here',
                'egift-error-msg' => 'Sorry, the eGift code you entered is invalid. Please check and try again.',
                'egift-info' => 'Using eGift means you agree to the',
                'egift-term' => 'Terms and Conditions.',
                'subtotal-label' => 'Subtotal',
                'subtotal-price' => 'P 2,374.00',
                'total-discount-label' => 'Total Discount',
                'total-label' => 'Total',
                'total-price' => 'P 2,374.00',
                'instructions-title' => 'Special Instructions',
                'instructions-textarea' => 'Type in any special insructions e.g. leave at the lobby!',
            ),
            'images' => array(
                'home-img' => 'ic_home.svg'
            ),
            'buttons' => array(
                'redeem' => 'REDEEM',
                'add-items' => 'ADD MORE ITEMS',
                'proceed-checkout' => 'PROCEED TO CHECKOUT',
            )
        );
    endif;

    if(is_max()):
        $content = array(
            'static' => array(
                'header-title' => 'Review Order Tray',
                'breadcrumbs-review' => 'Review Order Tray',
                'order-egift-label' => 'Enter your eGift code below:',
                'egift-placeholder' => 'Type eGift code here',
                'egift-error-msg' => 'Sorry, the eGift code you entered is invalid. Please check and try again.',
                'egift-info' => 'Using eGift means you agree to the',
                'egift-term' => 'Terms and Conditions.',
                'subtotal-label' => 'Subtotal',
                'subtotal-price' => '₱ 2,374.00',
                'total-discount-label' => 'Total Discount',
                'total-label' => 'Total',
                'total-price' => '₱ 2,374.00',
                'instructions-title' => 'Special Instructions',
                'instructions-textarea' => 'Type in any special insructions e.g. Leave at the lobby!',
            ),
            'images' => array(
                'home-img' => 'ic-max-home-red.svg'
            ),
            'buttons' => array(
                'redeem' => 'Redeem',
                'add-items' => 'Add More Items',
                'proceed-checkout' => 'Proceed to Checkout',
                'back' => 'Back to Home'
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

<div class="main-wrapper">
    <section class="c-review-order c-standard-layout <?= is_max() ? 'c-standard-layout-max c-standard-layout-max--delivery' : null; ?>">
        <div class="c-breadcrumbs">
            <div class="o-container">
             
                <?php if(is_ph()):?>
                    <ul class="[ u-df-mb ]">
                        <li><a href="/"><img src="dist/images/<?= $content['images']['home-img']; ?>" alt=""></a></li>
                        <li><a href="/"><?= $content['static']['breadcrumbs-review']; ?></a></li>
                    </ul>
                <?php endif;?>

                <?php if(is_max()):?>
                    <ul class="[ u-df-mb ]">
                        <li><a href="/"><img src="dist/images/<?= $content['images']['home-img']; ?>" alt=""></a></li>
                        <li><a href="/"><?= $content['static']['breadcrumbs-review']; ?></a></li>
                    </ul>

                    <a href="/">
                        <i class="ic-max-arrow-left"></i>
                        <span><?= $content['buttons']['back']; ?></span>
                    </a>

                <?php endif;?>

            </div>
        </div>
        <div class="o-container">
            <form class="c-review-order__content js-review-order" validation="true">
                <h3 class="o-header-title-slant"><?= $content['static']['header-title']; ?></h3>

                <?php if(is_ph()):?>
                
                <div class="order-item">
                    <figure class="order-item__image [ u-dnc-mb u-dbc-tb ]">
                        <img src="dist/images/review-order1.png" alt="">
                    </figure>
                    <div class="order-item__list">
                        <figure class="order-item__image [ u-dnc-tb u-dbc-mb ]">
                            <img src="dist/images/review-order1.png" alt="">
                        </figure>
                        <div class="first-row">
                            <h6 class="title">2 Pizzas for P499</h6>
                            <div class="o-form-group button-price">
                                <div class="o-form-operator [ u-df-mb ]">
                                    <button type="button" class="o-button ic-only" data-trigger-operator="sub">
                                        <i class="ic-minus"></i>
                                    </button>
                                    <input type="number" name="orderCount" class="o-form-group_input" value="1" data-listen="input" data-required-validate="true" autocomplete="off">
                                    <button type="button" class="o-button ic-only" data-trigger-operator="add">
                                        <i class="ic-plus"></i>
                                    </button>
                                </div>
                                <input type="hidden" name="price" value="549.00">
                                <div class="price">P <h6 class="js-price">549.00</h6></div>
                            </div>
                        </div>
                        <div class="second-row">
                            <ul class="order-summary-list">
                                <li class="body-1"><span>Hawaiian - 9” Double</span></li>
                                <li class="body-1"><span>Cheese - 9” Double</span></li>
                                <li class="body-1 body-1--bold">
                                    <button class="o-button o-button-white" data-trigger="remove-order"><span>REMOVE</span></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                

                <div class="order-item">
                    <figure class="order-item__image [ u-dnc-mb u-dbc-tb ]">
                        <img src="dist/images/review-order2.png" alt="">
                    </figure>
                    <div class="order-item__list">
                        <figure class="order-item__image [ u-dnc-tb u-dbc-mb ]">
                            <img src="dist/images/review-order2.png" alt="">
                        </figure>
                        <div class="first-row">
                            <h6 class="title">Squad Stuff L</h6>
                            <div class="o-form-group button-price">
                                <div class="o-form-operator [ u-df-mb ]">
                                    <button type="button" class="o-button ic-only" data-trigger-operator="sub">
                                        <i class="ic-minus"></i>
                                    </button>
                                    <input type="number" name="orderCount" class="o-form-group_input" value="1" data-listen="input" data-required-validate="true" autocomplete="off">
                                    <button type="button" class="o-button ic-only" data-trigger-operator="add">
                                        <i class="ic-plus"></i>
                                    </button>
                                </div>
                                <input type="hidden" name="price" value="1,050.00">
                                <div class="price">P <h6 class="js-price">1,050.00</h6></div>
                            </div>
                        </div>
                        <div class="second-row">
                            <ul class="order-summary-list">
                                <li class="body-1"><span>Pepperoni - 12” Medium</span></li>
                                <li class="body-1"><span>Chicken Alfredo - Large</span></li>
                                <li class="body-1"><span>Wings - 1/2-pound</span></li>
                                <li class="body-1 item-indent"><span>Sweet Soy</span></li>
                                <li class="body-1 item-indent"><span>Hot Chix</span></li>
                                <li class="body-1 item-indent"><span>Garlic Parmesan</span></li>
                                <li class="body-1 item-indent"><span>Garlic Parmesan</span></li>
                                <li class="body-1"><span>Mountain Dew</span></li>
                                <li class="body-1 body-1--bold">
                                    <button class="o-button o-button-white" data-trigger="remove-order"><span>REMOVE</span></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                

                <div class="order-item">
                    <figure class="order-item__image [ u-dnc-mb u-dbc-tb ]">
                        <img src="dist/images/review-order3.png" alt="">
                    </figure>
                    <div class="order-item__list">
                        <figure class="order-item__image [ u-dnc-tb u-dbc-mb ]">
                            <img src="dist/images/review-order3.png" alt="">
                        </figure>
                        <div class="first-row">
                            <h6 class="title">Four Seasons Original</h6>
                            <div class="o-form-group button-price">
                                <div class="o-form-operator [ u-df-mb ]">
                                    <button type="button" class="o-button ic-only" data-trigger-operator="sub">
                                        <i class="ic-minus"></i>
                                    </button>
                                    <input type="number" name="orderCount" class="o-form-group_input" value="1" data-listen="input" data-required-validate="true" autocomplete="off">
                                    <button type="button" class="o-button ic-only" data-trigger-operator="add">
                                        <i class="ic-plus"></i>
                                    </button>
                                </div>
                                <input type="hidden" name="price" value="665.00">
                                <div class="price">P <h6 class="js-price">665.00</h6></div>
                            </div>
                        </div>
                        <div class="second-row">
                            <ul class="order-summary-list">
                                <li class="body-1">
                                    <span>Four Seasons Original - 12” Medium</span>
                                    <span>P 630.00</span>
                                </li>
                                <li class="body-1 item-indent">
                                    <span>Square Cut</span>
                                </li>
                                <li class="body-1">
                                    <span>Hot Sauce Sachet</span> 
                                    <span>P 35.00</span>
                                </li>
                                <li class="body-1 body-1--bold">
                                    <button class="o-button o-button-white" data-trigger="remove-order"><span>REMOVE</span></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endif;?>

                <?php if(is_max()):?>
                    <?php foreach($orders as $k => $v): ?>
                        <div class="order-item">             
                            <div class="figure_icon">
                                <i class="ic-remove-order [ u-dnc-mb u-dbc-tb ]" data-trigger="remove-order"></i>
                                <figure class="order-item__image [ u-dnc-mb u-dbc-tb ]">
                                    <img src="dist/images/product/<?= $v['img_url'] ?>" alt="">
                                </figure>
                            </div>
                            <div class="order-item__list">

                                <div class="figure_icon">
                                    <div class="figure_with_title">
                                        <figure class="order-item__image [ u-dnc-tb u-dbc-mb ]">
                                            <img src="dist/images/product/<?= $v['img_url'] ?>" alt="">
                                        </figure>
                                        <h6 class="title [ u-dnc-tb u-dbc-mb ]"><?= $v['name'] ?></h6>
                                    </div>
                                    <i class="ic-remove-order-right [ u-dnc-tb u-dbc-mb ]" data-trigger="remove-order"></i>
                                </div>

                                <div class="first-row">
                                    <h6 class="title [ u-dnc-mb u-dbc-tb ]"><?= $v['name'] ?></h6>
                                    <div class="o-form-group button-price for-desktop">
                                        <div class="o-form-operator [ u-df-mb ]">
                                            <button type="button" class="o-button ic-only" data-trigger-operator="sub">
                                                <i class="ic-minus"></i>
                                            </button>
                                            <input type="number" name="orderCount" class="o-form-group_input" value="1" data-listen="input" data-required-validate="true" autocomplete="off">
                                            <button type="button" class="o-button ic-only" data-trigger-operator="add">
                                                <i class="ic-plus"></i>
                                            </button>
                                        </div>
                                        <input type="hidden" name="price" value="<?= $v['total'] ?>">
                                        <div class="price"><h6 class="js-price"><?= $v['total'] ?></h6></div>
                                    </div>
                                </div>

                                <?php if(count($v['list_order']) > 0):?>
                                    <div class="divider"></div>
                                    <div class="second-row">
                                        <ul class="order-summary-list">
                                            <?php foreach($v['list_order'] as $a => $b): ?>
                                                <li class="body-1">
                                                    <span><?= $b['name'] ?></span>
                                                    <span class="item-price"><?= $b['price'] ?></span>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif;?>

                                <div class="first-row for-mobile">
                                    <div class="divider"></div>
                                    <div class="o-form-group button-price spacing">
                                        <div class="o-form-operator [ u-df-mb ]">
                                            <button type="button" class="o-button ic-only" data-trigger-operator="sub">
                                                <i class="ic-minus"></i>
                                            </button>
                                            <input type="number" name="orderCount" class="o-form-group_input" value="1" data-listen="input" data-required-validate="true" autocomplete="off">
                                            <button type="button" class="o-button ic-only" data-trigger-operator="add">
                                                <i class="ic-plus"></i>
                                            </button>
                                        </div>
                                        <input type="hidden" name="price" value="<?= $v['total'] ?>">
                                        <div class="price"><h6 class="js-price"><?= $v['total'] ?></h6></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif;?>




                <?php if(is_ph()):?>
                    <div class="order-egift">
                        <h6><?= $content['static']['order-egift-label']; ?></h6>
                        <div class="order-egift__fields">
                            <div class="order-egift__fields-field">
                                <input class="js-egift" type="text" placeholder="<?= $content['static']['egift-placeholder']; ?>">
                                <div class="order-egift__error js-egifterror">
                                    <?= $content['static']['egift-error-msg']; ?>
                                </div>
                            </div>
                            <button class="js-egiftredeem"><?= $content['buttons']['redeem']; ?></button>
                        </div>
                        <div class="order-egift__error js-egifterror">
                            <?= $content['static']['egift-error-msg']; ?>
                        </div>
                        <p><?= $content['static']['egift-info']; ?> <a href=""><?= $content['static']['egift-term']; ?></a></p>
                        <div class="order-egift__subtotal">
                            <div class="order-egift__subtotal-left">
                                <h5><?= $content['static']['subtotal-label']; ?></h5>
                            </div>
                            <div class="order-egift__subtotal-right">
                                <p><?= $content['static']['subtotal-price']; ?></p>
                            </div>
                        </div>
                        <div class="order-egift__total js-totalegift">
                            <div class="order-egift__total-left">
                                <h5><?= $content['static']['total-discount-label']; ?></h5> 
                            </div>
                            <div class="order-egift__total-right">
                                <p class="js-totalpegift"></p>
                            </div>
                        </div>
                        <div class="order-egift__items js-egiftitems"></div>
                    </div>  
                <?php endif;?>


                <?php if(is_max()):?>
                    <div class="order-egift">
                        <div class="left">
                            <h6><?= $content['static']['order-egift-label']; ?></h6>
                            <div class="order-egift__fields">
                                <div class="order-egift__fields-field">
                                    <input class="js-egift" type="text" placeholder="<?= $content['static']['egift-placeholder']; ?>">
                                    <div class="order-egift__error js-egifterror">
                                        <?= $content['static']['egift-error-msg']; ?>
                                    </div>
                                </div>
                                <button class="js-egiftredeem"><?= $content['buttons']['redeem']; ?></button>
                            </div>
                            <div class="order-egift__error js-egifterror">
                                <?= $content['static']['egift-error-msg']; ?>
                            </div>
                            <p><?= $content['static']['egift-info']; ?> <a href=""><?= $content['static']['egift-term']; ?></a></p>
                        </div>

                        <div class="right">
                            <div class="order-egift__subtotal">
                                <div class="order-egift__subtotal-left">
                                    <h5><?= $content['static']['subtotal-label']; ?></h5>
                                </div>
                                <div class="order-egift__subtotal-right">
                                    <p><?= $content['static']['subtotal-price']; ?></p>
                                </div>
                            </div>
                            <div class="order-egift__items js-egiftitems js-maxRmBtn"></div>
                            <div class="order-egift__total js-totalegift">
                                <div class="order-egift__total-left">
                                    <h5><?= $content['static']['total-discount-label']; ?></h5> 
                                </div>
                                <div class="order-egift__total-right">
                                    <p class="js-totalpegift"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>














                
            
                <div class="order-total">
                    <div class="order-total__title">
                        <h6><?= $content['static']['total-label']; ?></h6>
                        <div class="price"><h6 class="js-total"><?= $content['static']['total-price']; ?></h6></div>
                        
                    </div>
                    <div class="order-total__instructions">
                        <div class="instructions">
                            <p class="overline instructions__title"><?= $content['static']['instructions-title']; ?></p>
                            <textarea class="body-1 instructions__textarea" name="" placeholder="<?= $content['static']['instructions-textarea']; ?>"></textarea>
                            <div class="instructions__buttons">
                                <button type="button" class="o-button o-button-lg o-button-white o-button-bordered">
                                    <span><?= $content['buttons']['add-items']; ?></span>
                                </button>
                                <button class="o-button o-button-lg <?php if(is_max()):?>o-button-active<?php endif;?>" type="submit">
                                    <span><?= $content['buttons']['proceed-checkout']; ?></span>
                                    <?php if(is_max()):?><i class="ic-check"></i><?php endif;?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section> 
    <?php include 'src/includes/footer.php';?>
</div>