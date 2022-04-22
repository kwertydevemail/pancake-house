<?php
    $content = array(
        'static' => array(
                'p_subtext_1' => 'A uniquely Yellow Cab pasta – Chicken strips, shiitake mushrooms, and roasted peanuts in a spicy oriental sauce.',
                'p_content_1' => 'Bestsellers',
                'p_content_2' => 'Spicy',
                'p_note_1' => 'Note: Image shown is large serving',
                'p_note_2' => 'Note: This product may not be available in our branches in Cebu, Davao, CDO, 
                                Baguio, and Naga due to the entry limitation of pork products in these areas.',
                'p_header_title' => 'Make this pasta yours!',
                'p_process_1' => 'Choose your size',
                'p_process_2' => 'Choose your add-ons',
                'p_process_2_placeholder' => 'Choose your add-ons',
                'p_process_3' => 'How many orders?',

                'w_subtext_1' => 'Expertly fried wingettes and drumettes – Crispy on the outside and juicy on the inside.',
                'w_subtext_2' => 'Choose up to four flavors per order: Sweet and tangy Sriracha, lip-smacking Sweet Soy, buttery Garlic Parmesan, or original Hot Chix 🌶️',
                'w_note_1' => 'Note: Image shown is 1-Pound Hot Chix',

                'w_header_title' => 'Make these wings yours!',
                'w_process_1_tb' => 'Choose your size',
                'w_process_1_mb' => 'Choose a size',
                'w_process_2'=> 'Choose your flavor',
                'w_process_2_placeholder'=> 'Choose a flavor',
                'w_process_2_not_available' => 'Not available',
                'w_process_3' => 'How many orders?',

                'db_legend_1' => 'Bestseller',
                'db_process_1' => 'Choose a flavor',
                'db_process_1_placeholder' => 'Choose your flavor',
                'db_process_2' => 'Choose how many',
        ),
        'buttons' => array(
            'add_to_cart' => 'ADD TO CART',
        ),
        'images' => array(
            'p_img_sm' => 'pasta-1.png',
            'p_img_lg' => 'pasta-1-hq.png',
            'w_img_sm' => 'wings-1.png',
            'w_img_lg' => 'wings-1-hq.png',
        ),
    );
    $addOnsMenu = [
        [
            'name' => 'Chili Flakes',
            'inches' => 'Sachet',
            'size' => 'P 5.00',
            'price' => 5,
            'img_url' => 'Chili Flakes_.png',
        ],
        [
            'name' => 'Hot Sauce',
            'inches' => 'Sachet',
            'size' => 'P 5.00',
            'price' => 5,
            'img_url' => 'Hot Sauce.png',
        ],
        [
            'name' => 'Ketchup',
            'inches' => 'Sachet',
            'size' => 'P 5.00',
            'price' => 5,
            'img_url' => 'Ketchup.png',
        ],
        [
            'name' => 'Chili Oil',
            'inches' => 'Sachet',
            'size' => 'P 10.00',
            'price' => 10,
            'img_url' => 'Chili Oil.png',
        ],
        [
            'name' => 'Lime',
            'inches' => '1 Piece',
            'size' => 'P 20.00',
            'price' => 20,
            'img_url' => 'Lime.png',
        ],
        [
            'name' => 'Parmesan Cheese',
            'inches' => '0.5oz Cup',
            'size' => 'P 35.00',
            'price' => 35,
            'img_url' => 'Parmesan Cheese.png',
        ],
        [
            'name' => 'Hot Chix',
            'inches' => '0.5oz Cup',
            'size' => 'P 50.00',
            'price' => 50,
            'img_url' => 'Hot Chix Condi.png',
        ],
        [
            'name' => 'Garlic Ranch',
            'inches' => '0.5oz Cup',
            'size' => 'P 50.00',
            'price' => 50,
            'img_url' => 'Garlic Ranch.png',
        ],
        [
            'name' => 'Hot Sauce Bottle',
            'inches' => '150mL',
            'size' => 'P 100.00',
            'price' => 100,
            'img_url' => 'Red Pepper Sauce.png',
        ],
        [
            'name' => 'No Add-ons',
            'price' => -1,
            'img_url' => 'addons-9.png',
        ],
    ];

    $pizzaSize = [
        [
            'name' => 'XLARGE',
            'inches' => '18”',
            'price' => 1050,
            'goodFor' => 'Good for 8-10 people',
        ],
        [
            'name' => 'LARGE',
            'inches' => '15”',
            'price' => 840,
            'goodFor' => 'Good for 5-7 people',
        ],
        [
            'name' => 'MEDIUM',
            'inches' => '12”',
            'price' => 630,
            'goodFor' => 'Good for 3-4 people',
        ],
        [
            'name' => 'DOUBLE',
            'inches' => '9”',
            'price' => 420,
            'goodFor' => 'Good for 1-2 people',
        ],
    ];

    $pastaSize = [
        [
            'name' => 'LARGE',
            'price' => 380,
            'status' => 'disabled'
        ],
        [
            'name' => 'REGULAR',
            'price' => 210,
            'status' => ''
        ],
    ];

    $wingsSize = [
        [
            'name' => '1-pound wings',
            'price' => 785,
            'status' => 'disabled'
        ],
        [
            'name' => '1/2-POUND WINGS',
            'price' => 450,
            'status' => ''
        ],
    ];

    $wingsFlavor = [
        [
            'name' => 'Garlic Parmesan',
            'img_url' => 'Garlic Parmesan.png',
            'price' => 0,
            'status' => 'disabled'
        ],
        [
            'name' => 'Hot Chix',
            'img_url' => 'Hot Chix.png',
            'price' => 0,
            'status' => ''
        ],
        [
            'name' => 'Sriracha',
            'img_url' => 'Sriracha.png',
            'price' => 0,
            'status' => ''
        ],
        [
            'name' => 'Sweet Soy',
            'img_url' => 'Sweet Soy.png',
            'price' => 0,
            'status' => ''
        ],

    ];

    $desertBeveragesDetail = [
        'Ice Cream' => [
            'title' => '7 great flavors to choose from!',
            'title_m' => 'Make this ice cream yours!',
            'des' => 'Premium ice cream especially made for Yellow Cab.',
            'img_url' => 'desert-1.png',
            'img_url_hq' => 'dessert-1-hq.png',
            'flavor' => [
                [
                    'name' => 'Chunky Cheese',
                    'img_url' => 'ice-cream-add-1.png',
                    'price' => 0,
                    'status' => 'disabled'
                ],
                [
                    'name' => 'Creamy Avocado',
                    'img_url' => 'ice-cream-add-2.png',
                    'price' => 0,
                    'status' => ''
                ],
                [
                    'name' => 'Cookies & Cream',
                    'img_url' => 'ice-cream-add-3.png',
                    'price' => 0,
                    'status' => ''
                ],
                [
                    'name' => 'Strawberry Fields',
                    'img_url' => 'ice-cream-add-4.png',
                    'price' => 0,
                    'status' => ''
                ],
                [
                    'name' => 'Vanilla Bean',
                    'img_url' => 'ice-cream-add-5.png',
                    'price' => 0,
                    'status' => ''
                ],
                [
                    'name' => 'Dark Chocolate',
                    'img_url' => 'ice-cream-add-6.png',
                    'price' => 0,
                    'status' => ''
                ],
                [
                    'name' => 'Nutty Pistachio',
                    'img_url' => 'ice-cream-add-7.png',
                    'price' => 0,
                    'status' => ''
                ],
            ],
            'has_option' => true,
            'has_legend' => false,
            'subtitle' => '',
        ],
        'Soda 1.5 L' => [
            'title' => 'Make this beverage yours!',
            'title_m' => 'Make this beverage yours!',
            'des' => 'Enjoy 1.5L Mountain Dew or 1.5L Pepsi with friends!',
            'img_url' => 'desert-2.png',
            'img_url_hq' => 'dessert-2-hq.png',
            'flavor' => [
                [
                    'name' => 'Mountain Dew',
                    'img_url' => 'soda-1.png',
                    'price' => 0,
                    'status' => 'disabled'
                ],
                [
                    'name' => 'Pepsi',
                    'img_url' => 'soda-2.png',
                    'price' => 0,
                    'status' => ''
                ],
            ],
            'has_option' => true,
            'has_legend' => false,
            'subtitle' => '',
        ],
        'Sola Iced Tea' => [
            'title' => 'Make this beverage yours!',
            'title_m' => 'Make this beverage yours!',
            'des' => 'Enjoy a refreshing Sola Iced Tea in Raspberry or Lemon!',
            'img_url' => 'desert-3.png',
            'img_url_hq' => 'desert-3.png',
            'flavor' => [
                [
                    'name' => 'Raspberry',
                    'img_url' => 'sola-2.png',
                    'price' => 0,
                    'status' => 'disabled'
                ],
                [
                    'name' => 'Lemon',
                    'img_url' => 'desert-3.png',
                    'price' => 0,
                    'status' => ''
                ],
            ],
            'has_option' => true,
            'has_legend' => false,
            'subtitle' => '',
        ],
        'House Blend Iced Tea' => [
            'title' => 'Make this beverage yours!',
            'title_m' => 'Make this beverage yours!',
            'des' => '',
            'img_url' => 'desert-4.png',
            'img_url_hq' => 'dessert-4-hq.png',
            'flavor' => [
                [
                    'name' => 'Raspberry',
                    'img_url' => 'sola-1.png',
                    'price' => 0,
                    'status' => 'disabled'
                ],
                [
                    'name' => 'Lemon',
                    'img_url' => 'sola-2.png',
                    'price' => 0,
                    'status' => ''
                ],
            ],
            'has_option' => false,
            'has_legend' => true,
            'subtitle' => 'Enjoy your meals with our original House Blend Iced Tea!',
        ],
    ];

    $title = strpos($breadcrumbs[1], '®') !== false ? str_replace('®', '',$breadcrumbs[1]).'<i class="upper-substr">®</i>' : $breadcrumbs[1];
?>

<section class="c-default-details c-product-details c-standard-details">
    <div class="o-container">
        <div class="c-default-details-content [ u-df-mb u-df-mb-fd-c u-df-mb-ai-s u-df-tb-fd-r ]">
            <h3 class="o-header-title-slant"><?= $title ?></h3>

            <!-- for pasta -->
            <?php if($type == 'pasta'): ?>
            <div class="c-default-details-content_display">
                <p><?= $content['static']['p_subtext_1']; ?></p>
                <ul class="legends [ u-df-mb ]">
                    <li><span class="ic-bestsellers"><?= $content['static']['p_content_1']; ?></span></li>
                    <li><span class="ic-spicy"><?= $content['static']['p_content_2']; ?></span></li>
                </ul>
                <figure>
                    <img src="dist/images/product/<?= $content['images']['p_img_sm']; ?>" alt="<?= $breadcrumbs[1] ?>" id="thumb" data-large-img-url="dist/images/product/<?= $content['images']['p_img_lg']; ?>">
                </figure>
                <p class="italize [ u-dnc-mb u-dbc-tb ]"><?= $content['static']['p_note_1']; ?></p>
                <p class="italize [ u-dbc-mb u-dnc-tb ]">
                    <?= $content['static']['p_note_2']; ?>
                </p>
            </div>
            <div class="c-default-details-content_form">
                <h3 class="o-header-title"><?= $content['static']['p_header_title']; ?></h3>
                <div class="c-default-details-content_form--details">
                    <form action="" class="o-form-timeline" data-form="standard" validation="true" data-form-catcher="addedToCartModal">
                        <div class="o-form-group">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                            <label for=""><?= $content['static']['p_process_1']; ?></label>
                            <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                <input type="hidden" name="size" class="o-form-group_input" placeholder="Select your first pizza" autocomplete="off" data-required-validate="true" readonly>
                                <?php foreach($pastaSize as $k => $v): ?>
                                <div class="o-form-panels_card">
                                    <div class="o-form-panels_card--detail <?= $v['status'] ?>" data-trigger-panel="size" data-panel-value="<?= $v['name'] ?>" data-panel-price="<?= $v['price'] ?>">
                                        <div class="o-form-panels_card--detail__title [ u-df-mb u-df-mb-jc-sb ]">
                                            <h3 class="h3"><?= $v['name'] ?></h3>
                                        </div>
                                        <div class="o-form-panels_card--detail__body [ u-df-mb u-df-mb-fd-c ]">
                                            <h5 class="h5">P <?= number_format($v['price'], 2) ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="o-form-group o-form-dropdown">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                            <label for=""><?= $content['static']['p_process_2']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="addons" class="o-form-group_input" placeholder="<?= $content['static']['p_process_2_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
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
                        <?php if($withAddress != ''): ?>
                        <div class="o-form-group">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                            <label for=""><?= $content['static']['p_process_3']; ?></label>
                            <div class="o-form-operator [ u-df-mb ]">
                                <button type="button" class="o-button ic-only" data-trigger-operator="sub">
                                    <i class="ic-minus"></i>
                                </button>
                                <input type="text" name="orderCount" class="o-form-group_input" value="1" data-listen="input" autocomplete="off" onkeypress="return isNumberKey(event)">
                                <button type="button" class="o-button ic-only" data-trigger-operator="add">
                                    <i class="ic-plus"></i>
                                </button>
                            </div>
                        </div>
                        <?php endif; ?>
                        <button type="submit" class="o-button o-button-lg" disabled>
                            <span><?= $content['buttons']['add_to_cart']; ?></span>
                            <i class="ic-cart"></i>
                        </button>
                    </form> 
                </div>
            </div>


            <!-- for wings -->
            <?php elseif($type == 'chicken'): ?>
            <div class="c-default-details-content_display">
                <p><?= $content['static']['w_subtext_1']; ?></p>
                <p><?= $content['static']['w_subtext_2']; ?></p>
                <figure>
                    <img src="dist/images/product/<?= $content['images']['w_img_sm']; ?>" alt="<?= $breadcrumbs[1] ?>" id="thumb" data-large-img-url="dist/images/product/<?= $content['images']['w_img_lg']; ?>">
                </figure>
                <p class="italize"><?= $content['static']['w_note_1']; ?></p>
            </div>
            <div class="c-default-details-content_form">
                <h3 class="o-header-title"><?= $content['static']['w_header_title']; ?></h3>
                <div class="c-default-details-content_form--details">
                    <form action="" class="o-form-timeline" data-form="standard" validation="true" data-form-catcher="addedToCartModal">
                        <div class="o-form-group">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                            <label for="" class="[ u-dnc-mb u-dbc-tb ]"><?= $content['static']['w_process_1_tb']; ?></label>
                            <label for="" class="[ u-dnc-tb u-dbc-mb ]"><?= $content['static']['w_process_1_mb']; ?></label>
                            <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                <input type="hidden" name="size" class="o-form-group_input" placeholder="Select your first pizza" autocomplete="off" data-required-validate="true" readonly>
                                <?php foreach($wingsSize as $k => $v): ?>
                                <div class="o-form-panels_card">
                                    <div class="o-form-panels_card--detail <?= $v['status'] ?>" data-trigger-panel="size" data-panel-value="<?= $v['name'] ?>" data-panel-price="<?= $v['price'] ?>">
                                        <div class="o-form-panels_card--detail__title [ u-df-mb u-df-mb-jc-sb ]">
                                            <h3 class="h3"><?= $v['name'] ?></h3>
                                        </div>
                                        <div class="o-form-panels_card--detail__body [ u-df-mb u-df-mb-fd-c ]">
                                            <h5 class="h5">P <?= number_format($v['price'], 2) ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="o-form-group o-form-dropdown c-default-details-content_form--details__multi">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                            <label for=""><?= $content['static']['w_process_2']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings1" class="o-form-group_input" placeholder="<?= $content['static']['w_process_2_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($wingsFlavor as $k => $v): ?>
                                    <li class="[ u-df-mb ] <?= $v['status'] ?>" data-select-value="<?= $v['name'] ?>" data-price-value="<?= $v['price'] ?>">
                                        <figure>
                                            <img src="dist/images/product/<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5"><?= $v['name'] ?></h5>
                                            <?php if($v['status'] === 'disabled'): ?>
                                            <p class="italize"><?= $content['static']['w_process_2_not_available']; ?></p>
                                            <?php endif; ?>
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
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings2" class="o-form-group_input" placeholder="Choose a flavor" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($wingsFlavor as $k => $v): ?>
                                    <li class="[ u-df-mb ] <?= $v['status'] ?>" data-select-value="<?= $v['name'] ?>" data-price-value="<?= $v['price'] ?>">
                                        <figure>
                                            <img src="dist/images/product/<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5"><?= $v['name'] ?></h5>
                                            <?php if($v['status'] === 'disabled'): ?>
                                            <p class="italize"><?= $content['static']['w_process_2_not_available']; ?></p>
                                            <?php endif; ?>
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
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings3" class="o-form-group_input" placeholder="Choose a flavor" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($wingsFlavor as $k => $v): ?>
                                    <li class="[ u-df-mb ] <?= $v['status'] ?>" data-select-value="<?= $v['name'] ?>" data-price-value="<?= $v['price'] ?>">
                                        <figure>
                                            <img src="dist/images/product/<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5"><?= $v['name'] ?></h5>
                                            <?php if($v['status'] === 'disabled'): ?>
                                            <p class="italize"><?= $content['static']['w_process_2_not_available']; ?></p>
                                            <?php endif; ?>
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
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings4" class="o-form-group_input" placeholder="Choose a flavor" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($wingsFlavor as $k => $v): ?>
                                    <li class="[ u-df-mb ] <?= $v['status'] ?>" data-select-value="<?= $v['name'] ?>" data-price-value="<?= $v['price'] ?>">
                                        <figure>
                                            <img src="dist/images/product/<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5"><?= $v['name'] ?></h5>
                                            <?php if($v['status'] === 'disabled'): ?>
                                            <p class="italize"><?= $content['static']['w_process_2_not_available']; ?></p>
                                            <?php endif; ?>
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
                        <?php if($withAddress != ''): ?>
                        <div class="o-form-group">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                            <label for=""><?= $content['static']['w_process_3']; ?></label>
                            <div class="o-form-operator [ u-df-mb ]">
                                <button type="button" class="o-button ic-only" data-trigger-operator="sub">
                                    <i class="ic-minus"></i>
                                </button>
                                <input type="text" name="orderCount" class="o-form-group_input" value="1" data-listen="input" autocomplete="off" onkeypress="return isNumberKey(event)" >
                                <button type="button" class="o-button ic-only" data-trigger-operator="add">
                                    <i class="ic-plus"></i>
                                </button>
                            </div>
                        </div>
                        <?php endif; ?>
                        <button type="submit" class="o-button o-button-lg" disabled>
                            <span><?= $content['buttons']['add_to_cart']; ?></span>
                            <i class="ic-cart"></i>
                        </button>
                    </form>
                </div>
            </div>


            <!-- for desert and beverages -->
            <?php elseif($type == 'desserts-beverages'): ?>
            <div class="c-default-details-content_display">
                <?php if($desertBeveragesDetail[$_GET['name']]['des']): ?>
                <p><?= $desertBeveragesDetail[$_GET['name']]['des'] ?></p>
                <?php endif;?>
                
                <?php if($desertBeveragesDetail[$_GET['name']]['has_legend']): ?>
                <ul class="legends [ u-df-mb ]">
                    <li><span class="ic-bestsellers"><?= $content['static']['db_legend_1']; ?></span></li>
                </ul>
                <?php endif;?>

                <figure>
                    <img src="dist/images/product/<?= $desertBeveragesDetail[$_GET['name']]['img_url'] ?>" alt="<?= $breadcrumbs[1] ?>" id="thumb" data-large-img-url="dist/images/product/<?= $desertBeveragesDetail[$_GET['name']]['img_url_hq'] ?>">
                </figure>
            </div>
            <div class="c-default-details-content_form for-beverages-form <?= !$desertBeveragesDetail[$_GET['name']]['has_option'] ? 'for-no-option' : ''?>">
                <h3 class="o-header-title [ u-dnc-mb u-dbc-tb ]"><?= $desertBeveragesDetail[$_GET['name']]['title'] ?></h3>
                <h3 class="o-header-title [ u-dnc-tb u-dbc-mb ]"><?= $desertBeveragesDetail[$_GET['name']]['title_m'] ?></h3>

                <?php if($desertBeveragesDetail[$_GET['name']]['subtitle']): ?>
                <span><?= $desertBeveragesDetail[$_GET['name']]['subtitle'] ?></span>
                <?php endif;?>

                <div class="c-default-details-content_form--details <?= !$desertBeveragesDetail[$_GET['name']]['has_option'] ? 'no-option' : ''?>">
                
                    <form action="" class="o-form-timeline" data-form="standard" validation="true" data-form-catcher="addedToCartModal">
                        <?php if($desertBeveragesDetail[$_GET['name']]['has_option'] ): ?>
                        <div class="o-form-group o-form-dropdown force-tail">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                            <label for=""><?= $content['static']['db_process_1']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="addons" class="o-form-group_input" placeholder="<?= $content['static']['db_process_1_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($desertBeveragesDetail[$_GET['name']]['flavor'] as $k => $v): ?>
                                    <li class="[ u-df-mb ] <?= $v['status'] ?>" data-select-value="<?= $v['name'] ?>" data-price-value="<?= $v['price'] ?>">
                                        <figure>
                                            <img src="dist/images/product/<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5"><?= $v['name'] ?></h5>
                                            <?php if($v['status'] === 'disabled'): ?>
                                            <p class="italize">Not available</p>
                                            <?php endif; ?>
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
                        <?php if($withAddress != ''): ?>
                        <div class="o-form-group">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                            <label for=""><?= $content['static']['db_process_2']; ?></label>
                            <div class="o-form-operator [ u-df-mb ]">
                                <button type="button" class="o-button ic-only" data-trigger-operator="sub">
                                    <i class="ic-minus"></i>
                                </button>
                                <input type="text" name="orderCount" class="o-form-group_input" value="1" data-listen="input" autocomplete="off" onkeypress="return isNumberKey(event)">
                                <button type="button" class="o-button ic-only" data-trigger-operator="add">
                                    <i class="ic-plus"></i>
                                </button>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
                        
                        <?php if(!$desertBeveragesDetail[$_GET['name']]['has_option'] ): ?>
                        <button class="o-button o-button-lg">
                            <span><?= $content['buttons']['add_to_cart']; ?></span>
                            <i class="ic-cart"></i>
                        </button>
                        <?php elseif($desertBeveragesDetail[$_GET['name']]['has_option'] ): ?>
                            <button type="submit" class="o-button o-button-lg" disabled> 
                            <span><?= $content['buttons']['add_to_cart']; ?></span>
                            <i class="ic-cart"></i>
                        </button>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>