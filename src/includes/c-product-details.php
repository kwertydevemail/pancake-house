<?php
    if(is_max()):
    $content = array(
        'static' => array(
            'content_text' => 'The original classic Fried Chicken that made Max\'s a Filipino institution. Golden fried to perfection, with a unique blend of secret spices, talagang Sarap-to-the-Bones®.',
            'content_note' => 'Note: Image shown is large serving',
            'header_title' => 'Options',
            'select_label' => '',
            'process_1' => 'Do you want your chicken chopped?',
            'process_1_placeholder' => '',
            'process_2' => 'Choose your size',
            'process_2_placeholder' => '',
            'process_3' => 'Choose your add-ons',
            'process_3_details' => '',
            'process_3_placeholder' => 'Select add on',
            'process_4' => 'How many would you like to order?',
            'process_5' => '',
            'summary_label' => 'Order Summary',
            'review_label' => 'Review your order before adding to cart',
            'total_label' => 'Total',
            'total_price' => '0.00',
        ),
        'buttons' => array(
            'add_to_cart' => 'ADD TO CART'
        ),
        'images' => array(
            'product_detail_1' => IMG.'max/product.png',
            'product_detail_2' => IMG.'max/product.png',
            'checklist' => IMG.'ic-max-checklist.svg',
        ),
    );
    if(isset($_GET['type']) && $_GET['type'] == 'bundle'):
        $content = array(
            'static' => array(
                'content_text' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Nunc dapibus aenean aliquam pellentesque rem aperiam.',
                'content_note' => 'Available for a limited time only from January 2 to July 3, 2022. Promo is valid for delivery, take-out, Curbside® pick-up, drive-thru, and dine-in',
                'content_bundle' => 'This bundle includes:',
                'content_bundle_list' => array('1 Regular Whole Fried Chicken','1 Large Java Rice','4 Regular Buko Pandan','Choice of 3 Side Dishes','Choice of 1 Liter Beverage'),
                'header_title' => 'Options',
                'select_label' => '',
                'process_1' => 'Do you want your chicken chopped?',
                'process_1_placeholder' => '',
                'process_2' => 'Choose your size',
                'process_2_placeholder' => '',
                'process_3' => 'Choice of beverage',
                'process_3_details' => '',
                'process_3_placeholder' => 'Select add on',
                'process_4' => 'How many would you like to order?',
                'process_5' => 'Choose your 3 side dishes',
                'process_5_details' => '',
                'process_5_placeholder' => 'Select side dish',
                'summary_label' => 'Order Summary',
                'review_label' => 'Review your order before adding to cart',
                'total_label' => 'Total',
                'total_price' => '0.00',
                'save' => 'Save ₱ 281',
                'sale' => false,
            ),
            'buttons' => array(
                'add_to_cart' => 'ADD TO CART'
            ),
            'images' => array(
                'product_detail_1' => IMG.'max/product.png',
                'product_detail_2' => IMG.'max/product.png',
                'checklist' => IMG.'ic-max-checklist.svg',
            ),
        );
    elseif(isset($_GET['type']) && $_GET['type'] == 'promo'):
        $content = array(
            'static' => array(
                'content_text' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Nunc dapibus aenean aliquam pellentesque rem aperiam.',
                'content_note' => 'Available for a limited time only from January 2 to July 3, 2022. Promo is valid for delivery, take-out, Curbside® pick-up, drive-thru, and dine-in',
                'content_note_1' => 'Note: Image shown is large serving',
                'content_bundle' => 'This bundle includes:',
                'content_bundle_list' => array('1 Regular Whole Fried Chicken','1 Large Java Rice','4 Regular Buko Pandan','Choice of 3 Side Dishes','Choice of 1 Liter Beverage'),
                'header_title' => 'Options',
                'select_label' => '',
                'process_1' => 'Do you want your chicken chopped?',
                'process_1_placeholder' => '',
                'process_2' => 'Choose your size',
                'process_2_placeholder' => '',
                'process_3' => 'Choose your add-ons',
                'process_3_details' => '',
                'process_3_placeholder' => 'Select add on',
                'process_4' => 'How many would you like to order?',
                'process_5' => '',
                'process_5_placeholder' => 'Select side dish',
                'summary_label' => 'Order Summary',
                'review_label' => 'Review your order before adding to cart',
                'total_label' => 'Total',
                'total_price' => '0.00',
                'save' => 'Save ₱ 76',
                'sale' => 'On Sale',
            ),
            'buttons' => array(
                'add_to_cart' => 'ADD TO CART'
            ),
            'images' => array(
                'product_detail_1' => IMG.'max/product.png',
                'product_detail_2' => IMG.'max/product.png',
                'checklist' => IMG.'ic-max-checklist.svg',
            ),
        );
    endif;
    $addOnsMenu = [
        [
            'name' => 'No Add-ons',
            'inches' => '',
            'size' => '',
            'price' => 0,
            'img_url' => IMG.'product/no-addon.svg',
        ],
        [
            'name' => 'Chicken Pancit Canton',
            'inches' => 'Regular',
            'size' => 'PHP 321.00',
            'price' => 5,
            'img_url' => IMG.'product/max-addon-1.png',
        ],
        [
            'name' => 'All Beef Kare-Kare',
            'inches' => '',
            'size' => 'PHP 919.00',
            'price' => 5,
            'img_url' => IMG.'product/max-addon-2.png',
        ],
        [
            'name' => 'Sizzling Tofu',
            'inches' => 'Whole',
            'size' => 'PHP 344.00',
            'price' => 10,
            'img_url' => IMG.'product/max-addon-3.png',
        ],
        [
            'name' => 'Condiment Trio',
            'inches' => '',
            'size' => 'PHP 149.00',
            'price' => 20,
            'img_url' => IMG.'product/max-addon-4.png',
        ]
    ];

    $pizzaSize = [
        [
            'name' => 'Chopped',
            'inches' => '',
            'price' => 0,
            'goodFor' => '',
            'status' => ''
        ],
        [
            'name' => 'Not Chopped',
            'inches' => '',
            'price' => 0,
            'goodFor' => '',
            'status' => ''
        ],
    ];

    $pizzaCuts = [
        [
            'name' => 'Spring',
            'inches' => '',
            'price' => 525,
            'goodFor' => '',
            'status' => ''
        ],
        [
            'name' => 'Regular',
            'inches' => '',
            'price' => 575,
            'goodFor' => '',
            'status' => ''
        ],
        [
            'name' => 'Family',
            'inches' => '',
            'price' => 689,
            'goodFor' => '',
            'status' => ''
        ],
    ];
    endif;

    if(is_yc()):
        $content = array(
            'static' => array(
                'content_text' => 'Juicy shrimps, onions, and garlic on a bed of white wine sauce.',
                'content_note' => 'Note: This product may not be available in our branches in Cebu, Davao, CDO, 
                                    Baguio, and Naga due to the entry limitation of pork products in these areas.',
    
                'header_title' => 'Make this pizza yours!',
                'select_label' => 'Select your options',
                'process_1' => 'Choose you size',
                'process_1_placeholder' => 'Select your first pizza',
                'process_2' => 'Choose your add-ons',
                'process_2_details' => 'Each pizza comes with free hot sauce and chili flakes',
                'process_2_placeholder' => 'Choose your add-ons',
                'process_3' => 'Choose your pizza cut',
                'process_3_placeholder' => 'Select your first pizza',
                'process_4' => 'Choose how many',
                'summary_label' => 'Order Summary',
                'review_label' => 'Review your order before adding to cart',
                'total_label' => 'Total',
                'total_price' => '0.00',
            ),
            'buttons' => array(
                'add_to_cart' => 'ADD TO CART'
            ),
            'images' => array(
                'product_detail_1' => IMG.'product-detail-1.jpg',
                'product_detail_2' => IMG.'product-detail-1-hq.jpg',
            ),
        );
        $addOnsMenu = [
            [
                'name' => 'Chili Flakes',
                'inches' => 'Sachet',
                'size' => 'PHP 5.00',
                'price' => 5,
                'img_url' => IMG.'product/Chili Flakes_.png',
            ],
            [
                'name' => 'Ketchup',
                'inches' => 'Sachet',
                'size' => 'PHP 5.00',
                'price' => 5,
                'img_url' => IMG.'product/Ketchup.png',
            ],
            [
                'name' => 'Chili Oil',
                'inches' => 'Sachet',
                'size' => 'PHP 10.00',
                'price' => 10,
                'img_url' => IMG.'product/Chili Oil.png',
            ],
            [
                'name' => 'Lime',
                'inches' => '1 Piece',
                'size' => 'PHP 20.00',
                'price' => 20,
                'img_url' => IMG.'product/Lime.png',
            ],
            [
                'name' => 'Parmesan Cheese',
                'inches' => '0.5oz Cup',
                'size' => 'PHP 35.00',
                'price' => 35,
                'img_url' => IMG.'product/Parmesan Cheese.png',
            ],
            [
                'name' => 'Hot Wings Sauce',
                'inches' => '0.5oz Cup',
                'size' => 'PHP 50.00',
                'price' => 50,
                'img_url' => IMG.'product/Hot Chix Condi.png',
            ],
            [
                'name' => 'Garlic Ranch',
                'inches' => '0.5oz Cup',
                'size' => 'PHP 50.00',
                'price' => 50,
                'img_url' => IMG.'product/Garlic Ranch.png',
            ],
            [
                'name' => 'Hot Sauce Bottle',
                'inches' => '150mL',
                'size' => 'PHP 100.00',
                'price' => 100,
                'img_url' => IMG.'product/Red Pepper Sauce.png',
            ],
            [
                'name' => 'No Add-onsasd',
                'price' => -1,
                'img_url' => IMG.'product/addons-9.png',
            ],
        ];
    
        $pizzaSize = [
            [
                'name' => 'XLARGE',
                'inches' => '18”',
                'price' => 1050,
                'goodFor' => 'Good for 8-10 people',
                'status' => 'disabled'
            ],
            [
                'name' => 'LARGE',
                'inches' => '15”',
                'price' => 840,
                'goodFor' => 'Good for 5-7 people',
                'status' => ''
            ],
            [
                'name' => 'MEDIUM',
                'inches' => '12”',
                'price' => 630,
                'goodFor' => 'Good for 3-4 people',
                'status' => ''
            ],
            [
                'name' => 'DOUBLE',
                'inches' => '9”',
                'price' => 420,
                'goodFor' => 'Good for 1-2 people',
                'status' => ''
            ],
        ];
    
        $pizzaCuts = [
            [
                'name' => 'Square',
                'price' => 0,
                'img_url' => 'ic-cuts-square.svg',
            ],
            [
                'name' => 'Regular',
                'price' => 0,
                'img_url' => 'ic-cuts-regular.svg',
            ],
        ];
        endif;

    if(is_ph()):
    $content = array(
        'static' => array(
            'content_text' => 'Pancakes filled with tempting chocolate bits served with peanut butter.',
            'content_note' => 'Note: Image shown is large serving',
            'header_title' => 'Options',
            'select_label' => '',
            'process_1' => 'Choose your pancake pieces',
            'process_1_placeholder' => 'Select your first pizza',
            'process_2' => 'Choose your add-ons',
            'process_2_details' => 'Each pizza comes with free hot sauce and chili flakes',
            'process_2_placeholder' => 'Choose your add-ons',
            'process_3' => 'Choose your pizza cut',
            'process_3_placeholder' => 'Select your first pizza',
            'process_4' => 'How many would you like to order?',
            'summary_label' => 'Order Summary',
            'review_label' => 'Review your order before adding to cart',
            'total_label' => 'Total',
            'total_price' => '0.00',
        ),
        'buttons' => array(
            'add_to_cart' => 'ADD TO CART'
        ),
        'images' => array(
            'product_detail_1' => IMG.'ph-product-detail-1.png',
            'product_detail_2' => IMG.'ph-product-detail-1.png',
        ),
    );
    $addOnsMenu = [
        [
            'name' => 'No Add-ons',
            'inches' => '',
            'size' => '',
            'price' => 0,
            'img_url' => IMG.'product/no-addon.svg',
        ],
        [
            'name' => 'Toast Bread',
            'inches' => '',
            'size' => 'PHP 160.80',
            'price' => 5,
            'img_url' => IMG.'product/ph-addon1.png',
        ],
        [
            'name' => 'Potato Sala',
            'inches' => '',
            'size' => 'PHP 160.80',
            'price' => 5,
            'img_url' => IMG.'product/ph-addon2.png',
        ],
        [
            'name' => 'Chili Oil',
            'inches' => '',
            'size' => 'PHP 10.00',
            'price' => 10,
            'img_url' => IMG.'product/ph-addon3.png',
        ],
        [
            'name' => 'Lime',
            'inches' => '',
            'size' => 'PHP 20.00',
            'price' => 20,
            'img_url' => IMG.'product/ph-addon4.png',
        ],
        
    ];

    $pizzaSize = [
        [
            'name' => '2PCS Chocolate Chips',
            'inches' => '',
            'price' => 250.80,
            'goodFor' => '',
            'status' => ''
        ],
        [
            'name' => '3PCS Chocolate Chips',
            'inches' => '',
            'price' => 280.80,
            'goodFor' => '',
            'status' => ''
        ],
        
    ];

    $pizzaCuts = [
        [
            'name' => 'Square',
            'price' => 0,
            'img_url' => 'ic-cuts-square.svg',
        ],
        [
            'name' => 'Regular',
            'price' => 0,
            'img_url' => 'ic-cuts-regular.svg',
        ],
    ];
    endif;
?>

<section class="c-default-details c-product-details">
    <div class="o-container">
    <?php if(is_ph()): ?><h3 class="o-header-title"><?= $breadcrumbs[1] ?>!</h3><?php endif; ?>
        <div class="c-default-details-content [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r ]">
            <div class="c-default-details-content-title">
                <?php if(is_yc()): ?><h3 class="o-header-title-slant"><?= $breadcrumbs[1] ?>!</h3><?php endif; ?>
                
                <?php if(is_max()): ?>
                    <?php if(isset($_GET['type']) && ($_GET['type'] == 'bundle')): ?>
                    <h3 class="o-header-title-slant has-bundle"><?= $breadcrumbs[1] ?>
                        <span class="o-header-title-slant-promo"><?= $content['static']['save']; ?></span>
                    </h3>
                    <?php elseif(isset($_GET['type']) && ($_GET['type'] == 'promo')): ?>
                    <h3 class="o-header-title-slant has-promo"><?= $breadcrumbs[1] ?>
                        <span class="o-header-title-slant-promo"><span><?= $content['static']['sale']; ?></span><?= $content['static']['save']; ?></span>
                    </h3>
                    <?php else: ?>
                    <h3 class="o-header-title-slant"><?= $breadcrumbs[1] ?></h3>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="c-default-details-content_display <?= (isset($_GET['type']) && $_GET['type'] == 'promo')? 'for-promo' : ''; ?> <?= (isset($_GET['type']) && $_GET['type'] == 'bundle')? 'for-bundles' : ''; ?>">
                <?php if(is_yc()): ?>
                    <p><?= $content['static']['content_text']; ?></p>
                <?php endif; ?>
                <figure>
                    <img src="<?= $content['images']['product_detail_1']; ?>" alt="<?= $breadcrumbs[1] ?>" id="thumb" data-large-img-url="<?= $content['images']['product_detail_2']; ?>">
                </figure>
                <?php if(isset($_GET['type']) && $_GET['type'] == 'promo'): ?>
                    <?php if(is_max()): ?>
                        <p class="italize">
                            <?= $content['static']['content_note_1']; ?>
                        </p>
                        <h3 class="o-header-title-slant has-promo-mobile"><?= $breadcrumbs[1] ?> <span class="o-header-title-slant-promo"><span><?= $content['static']['sale']; ?></span><?= $content['static']['save']; ?></span></h3>
                        <p><?= $content['static']['content_text']; ?></p>
                    <?php endif; ?>
                    <p><?= $content['static']['content_bundle']; ?></p>
                    <ul>
                    <?php foreach($content['static']['content_bundle_list'] as $value): ?>
                        <li><?= $value; ?></li>
                    <?php endforeach; ?>
                    </ul>
                    <p class="italize">
                        <?= $content['static']['content_note']; ?>
                    </p>
                    <?php if(is_ph()): ?>
                        <p><?= $content['static']['content_text']; ?></p>
                    <?php endif; ?>
                <?php elseif(isset($_GET['type']) && $_GET['type'] == 'bundle'): ?>
                    <?php if(is_max()): ?>
                        <h3 class="o-header-title-slant has-bundle-mobile"><?= $breadcrumbs[1] ?> <span class="o-header-title-slant-promo"><?= $content['static']['save']; ?></span></h3>
                        <p><?= $content['static']['content_text']; ?></p>
                    <?php endif; ?>
                    <p><?= $content['static']['content_bundle']; ?></p>
                    <ul>
                    <?php foreach($content['static']['content_bundle_list'] as $value): ?>
                        <li><?= $value; ?></li>
                    <?php endforeach; ?>
                    </ul>
                    <p class="italize">
                        <?= $content['static']['content_note']; ?>
                    </p>
                    <?php if(is_yc()): ?>
                        <p><?= $content['static']['content_text']; ?></p>
                    <?php endif; ?>
                <?php else: ?>
                    <p class="italize">
                        <?= $content['static']['content_note']; ?>
                    </p>
                    <?php if(is_ph()): ?>
                        <p><?= $content['static']['content_text']; ?></p>
                    <?php endif; ?>
                    <?php if(is_max()): ?>
                        <h3 class="o-header-title-slant"><?= $breadcrumbs[1] ?> <span class="o-header-title-slant-promo"></span></h3>
                        <p><?= $content['static']['content_text']; ?></p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="c-default-details-content_form">
                <h3 class="o-header-title"><?= $content['static']['header_title']; ?></h3>
                <?php if($content['static']['select_label'] != ''): ?><span><?= $content['static']['select_label']; ?> </span><?php endif; ?>
                <div class="c-default-details-content_form--details">
                    <form action="" class="o-form-timeline" data-form="standard" validation="true" data-form-catcher="addedToCartModal" data-order-summary="order">
                        <div class="o-form-timeline-inner">
                            <?php
                                if(is_max()):
                                    if(isset($_GET['fields']) && $_GET['fields'] == 'min'){
                                        fields(4, [], 1, $content['static']['process_4'], '', '');
                                    }elseif(isset($_GET['fields']) && $_GET['fields'] == 'max'){
                                        fields(5, $addOnsMenu, 1, $content['static']['process_5'], ['1st side','2nd side','3rd side'], $content['static']['process_5_placeholder']);
                                        fields(3, $addOnsMenu, 4, $content['static']['process_3'], '', $content['static']['process_3_placeholder']);
                                        fields(4, [], 5, $content['static']['process_4'], '', '');
                                    }else{
                                        fields(1, $pizzaSize, 1, $content['static']['process_1'], '', '');
                                        fields(2, $pizzaCuts, 2, $content['static']['process_2'], '', '');
                                        fields(3, $addOnsMenu, 3, $content['static']['process_3'], '', $content['static']['process_3_placeholder']);
                                        fields(4, [], 4, $content['static']['process_4'], '', '');
                                    }
                                endif;
                            ?>
                            
                            <?php if(is_yc()): ?>
                            <div class="o-form-group">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                                <label for=""><?= $content['static']['process_1']; ?></label>
                                <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                    <input type="hidden" name="size" class="o-form-group_input" placeholder="<?= $content['static']['process_1_placeholder']; ?>" autocomplete="off" data-required-validate="true" readonly>
                                    <?php foreach($pizzaSize as $k => $v): ?>
                                    <div class="o-form-panels_card">
                                        <div class="o-form-panels_card--detail <?= $v['status'] ?>" data-trigger-panel="size" data-panel-value="<?= $v['name'] ?>" data-panel-price="<?= $v['price'] ?>">
                                            <div class="o-form-panels_card--detail__title [ u-df-mb u-df-mb-jc-sb ]">
                                                <h3 class="h3"><?= $v['name'] ?></h3>
                                                <span><?= $v['inches'] ?></span>
                                            </div>
                                            <div class="o-form-panels_card--detail__body [ u-df-mb u-df-mb-fd-c ]">
                                                <h5 class="h5">P <?= number_format($v['price'], 2) ?></h5>
                                                <p class="italize"><?= $v['goodFor'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="o-form-group o-form-dropdown">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                                <label for=""><?= $content['static']['process_2']; ?></label>
                                <h5 class="h5"><?= $content['static']['process_2_details']; ?></h5>
                                <div class="o-form-dropdown_input">
                                    <input type="text" name="addons" class="o-form-group_input" placeholder="<?= $content['static']['process_2_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                    <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                        <?php foreach($addOnsMenu as $k => $v): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $v['name'] ?>" data-price-value="<?= $v['price'] ?>">
                                            <figure>
                                                <img src="dist/images/product/<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $v['name'] ?></h5>
                                                <?php if(isset($v['inches']) || isset($v['size'])): ?>
                                                <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                    <span><?= $v['inches'] ?></span>
                                                    <span><?= $v['size'] ?></span>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="o-form-group">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                                <label for=""><?= $content['static']['process_3']; ?></label>
                                <div class="o-form-panels for-pizza-panel [ u-df-mb u-df-mb-w ]">
                                    <input type="hidden" name="cut" class="o-form-group_input" placeholder="<?= $content['static']['process_3_placeholder']; ?>" autocomplete="off" data-required-validate="true" readonly>
                                    <?php foreach($pizzaCuts as $k => $v): ?>
                                        <div class="o-form-panels_card">
                                            <div class="o-form-panels_card--detail" data-trigger-panel="cut" data-panel-value="<?= $v['name'] ?>" data-panel-price="<?= $v['price'] ?>">
                                                <div class="o-form-panels_card--detail__title [ u-df-mb u-df-mb-ai-c ]">
                                                    <figure>
                                                        <img src="dist/images/<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                                                    </figure>
                                                    <h3 class="h3"><?= $v['name'] ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if($withAddress != '' && is_yc()): ?>
                            <div class="o-form-group">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">4</span>
                                <label for=""><?= $content['static']['process_4']; ?></label>
                                <div class="o-form-operator [ u-df-mb ]">
                                    <button type="button" class="o-button ic-only" data-trigger-operator="sub">
                                        <i class="ic-minus"></i>
                                    </button>
                                    <input type="text" name="orderCount" class="o-form-group_input" value="1" data-listen="input" autocomplete="off" readonly>
                                    <button type="button" class="o-button ic-only" data-trigger-operator="add">
                                        <i class="ic-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <?php endif; ?>


                            <?php if(is_ph()): ?>
                            <div class="o-form-group">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                                <label for=""><?= $content['static']['process_1']; ?></label>
                                <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                    <input type="hidden" name="size" class="o-form-group_input" placeholder="<?= $content['static']['process_1_placeholder']; ?>" autocomplete="off" data-required-validate="true" readonly>
                                    <?php foreach($pizzaSize as $k => $v): ?>
                                    <div class="o-form-panels_card">
                                        <div class="o-form-panels_card--detail <?= $v['status'] ?>" data-trigger-panel="size" data-panel-value="<?= $v['name'] ?>" data-panel-price="<?= $v['price'] ?>">
                                            <div class="o-form-panels_card--detail__title [ u-df-mb u-df-mb-jc-sb ]">
                                                <h3 class="h3"><?= $v['name'] ?></h3>
                                                <span><?= $v['inches'] ?></span>
                                            </div>
                                            <div class="o-form-panels_card--detail__body [ u-df-mb u-df-mb-fd-c ]">
                                                <h5 class="h5">P <?= number_format($v['price'], 2) ?></h5>
                                                <p class="italize"><?= $v['goodFor'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="o-form-group o-form-dropdown">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                                <label for=""><?= $content['static']['process_2']; ?></label>
                                <div class="o-form-dropdown_input">
                                    <input type="text" name="addons" class="o-form-group_input" placeholder="<?= $content['static']['process_2_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                    <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                        <?php foreach($addOnsMenu as $k => $v): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $v['name'] ?>" data-price-value="<?= $v['price'] ?>">
                                            <figure>
                                                <img src="<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $v['name'] ?></h5>
                                                <?php if(isset($v['inches']) || isset($v['size'])): ?>
                                                <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">

                                                    <span><?= $v['size'] ?></span>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            
                            <?php endif; ?>
                            <?php if(is_ph()): // if($withAddress != '' && is_ph()): ?>
                            <div class="o-form-group">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">4</span>
                                <label for=""><?= $content['static']['process_4']; ?></label>
                                <div class="o-form-operator [ u-df-mb ]">
                                    <button type="button" class="o-button ic-only" data-trigger-operator="sub">
                                        <i class="ic-minus"></i>
                                    </button>
                                    <input type="text" name="orderCount" class="o-form-group_input" value="1" data-listen="input" autocomplete="off" readonly>
                                    <button type="button" class="o-button ic-only" data-trigger-operator="add">
                                        <i class="ic-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="order-summary" data-summary="order">
                            <?php if(is_max()): ?>
                                <img class="order-summary-checklist" src="<?= $content['images']['checklist']; ?>" alt="">
                            <?php endif; ?>
                            <h3 class="h3"><?= $content['static']['summary_label']; ?></h3>
                            <p><?= $content['static']['review_label']; ?></p> 
                            <h5 class="h5"><?= $breadcrumbs[1] ?></h5>
                            <ul class="order-summary-list">
                                <li data-catcher="side1"></li>
                                <li data-catcher="side2"></li>
                                <li data-catcher="side3"></li>
                                <li data-catcher="size"></li>
                                <li data-catcher="chopped"></li>
                                <li data-catcher="addons"></li>
                                <li data-catcher="cut"></li>
                            </ul>
                            <div class="order-summary-total [ u-df-mb u-df-mb-jc-sb u-df-mb-ai-c ]">
                                <h5 class="h5"><?= $content['static']['total_label']; ?></h5>
                                <span>P<span data-catcher="total"><?= $content['static']['total_price']; ?></span></span>
                            </div>
                            <?php if(is_max()): ?>
                                    <?php if($signedIn): ?>
                                    <button type="submit" class="o-button o-button-lg" disabled>
                                        <span><?= $content['buttons']['add_to_cart']; ?></span>
                                        <i class="ic-cart"></i>
                                    </button>
                                    <?php else: ?>
                                        <button type="submit" class="o-button o-button-lg o-button-signin" disabled>
                                            <span>Sign in to order</span>
                                        </button>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <button type="submit" class="o-button o-button-lg" disabled>
                                        <span><?= $content['buttons']['add_to_cart']; ?></span>
                                        <i class="ic-cart"></i>
                                    </button>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>