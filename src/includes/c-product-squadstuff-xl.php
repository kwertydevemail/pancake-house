<?php
    $content = array(
        'static' => array(
                'header_title' => 'Squad Stuff XL',
                'content_display' => 'Squad Stuff XL includes a 15" NY-Style Original 
                                        Crust Classic Pizza, two 1/2-pound wings (choose up 
                                        to four flavors), two large pastas and one 1.5L soda. 
                                        Good for 5 to 7 people.',
                'detail_content' => 'Add P140 to upgrade to Signature or Legendary pizza.<br>
                                        er DTI Fair Trade Permit No. FTEB-109188 Series of 2020 ',

                'right_header_title' => 'Make this bundle yours!',

                'process_1' => 'Choose your pizza.',
                'process_1_placeholder' => 'Choose your pizza.',

                'process_2' => 'Choose four (4) wings flavors.',
                'process_2_placeholder' => 'Choose your wings.',

                'process_3' => 'Choose two (2) pastas.',
                'process_3_placeholder' => 'Choose your pasta',

                'process_4' => 'Choose your drink.',
                'process_4_placeholder' => 'Choose your drink',

                'summary_title' => 'Order Summary',
                'review_text' => 'Review your order before adding to cart',
                'order_title' => 'Squad Stuff XL',
                'total_label' => 'Total',
                'total_price' => '100.00',
        ),
        'buttons' => array(
            'add_to_cart' => 'ADD TO CART',
        ),
        'images' => array(
            'bundle_img_sm' => 'Bundle XL.png',
            'bundle_img_lg' => 'Bundle XL.png',
        ),
    );
    $process_2_products = [
        [
            'value' => 'Garlic Parmesan',
            'price_value' => '',
            'img_link' => 'dist/images/product/Garlic Parmesan.png',
            'name' => 'Garlic Parmesan'
        ],
        [
            'value' => 'Hot Chix',
            'price_value' => '',
            'img_link' => 'dist/images/product/Hot Chix.png',
            'name' => 'Hot Chix'
        ],
        [
            'value' => 'Sriracha',
            'price_value' => '',
            'img_link' => 'dist/images/product/Sriracha.png',
            'name' => 'Sriracha'
        ],
        [
            'value' => 'Sweet Soy',
            'price_value' => '',
            'img_link' => 'dist/images/product/Sweet Soy.png',
            'name' => 'Sweet Soy'
        ]
    ];
    $process_3_products = [
        [
            'value' => 'Chicken Alfredo',
            'price_value' => '',
            'img_link' => 'dist/images/product/Chicken Alfredo.png',
            'name' => 'Chicken Alfredo'
        ],
        [
            'value' => 'Charlie Chan®',
            'price_value' => '',
            'img_link' => 'dist/images/product/Charlie Chan.png',
            'name' => 'Charlie Chan®'
        ],
        [
            'value' => 'Spaghetti and Meatballs',
            'price_value' => '',
            'img_link' => 'dist/images/product/spaghetti and meatballs.png',
            'name' => 'Spaghetti and Meatballs'
        ]
    ];
    $process_4_products = [
        [
            'value' => 'Mountain Dew',
            'price_value' => '',
            'img_link' => 'dist/images/product/Mountain Dew.png',
            'name' => 'Mountain Dew'
        ],
        [
            'value' => 'Pepsi',
            'price_value' => '',
            'img_link' => 'dist/images/product/Pepsi.png',
            'name' => 'Pepsi'
        ]
    ];
?>
<section class="c-bundle-xl">
    <div class="o-container">
        <div class="c-bundle-xl-content [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r ]">
            <h3 class="o-header-title-slant"><?= $content['static']['header_title']; ?></h3>
            <div class="c-bundle-xl-content_display">
                <p>
                    <?= $content['static']['content_display']; ?>
                </p>
                <figure>
                    <img src="dist/images/<?= $content['images']['bundle_img_sm']; ?>" alt="<?= $breadcrumbs[1] ?>" id="thumb" data-large-img-url="dist/images/<?= $content['images']['bundle_img_lg']; ?>">
                </figure>
                <p class="italize">
                    <?= $content['static']['detail_content']; ?> 
                </p>
            </div>
            <div class="c-bundle-xl-content_form">
                <h3 class="o-header-title"><?= $content['static']['right_header_title']; ?></h3> 
                <span></span>
                <div class="c-bundle-xl-content_form--details">
                    <form action="" class="o-form-timeline" validation="true" data-form-catcher="addedToCartModal" data-order-summary="order">
                    <div class="o-form-group o-form-dropdown">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                            <label for=""><?= $content['static']['process_1']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="pizza1" class="o-form-group_input" placeholder="<?= $content['static']['process_1_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <li class="[ u-df-mb ]" data-select-value="Pepperoni - 15&quot;" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/pizza-1.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Pepperoni</h5>
                                            <div class="o-form-dropdown_input--item__subdetail-single [ u-df-mb ]">
                                                <span>Add P 0.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Hawaiian - 15&quot;" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/pizza-2.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Hawaiian</h5>
                                            <div class="o-form-dropdown_input--item__subdetail-single [ u-df-mb ]">
                                                <span>Add P 0.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Patty Melt - 15&quot;" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/pizza-3.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Patty Melt</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>Upgrade</span>
                                                <span>Add P 90.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Roasted Garlic & Shrimp - 15&quot;" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/pizza-4.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Roasted Garlic & Shrimp</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>Upgrade</span>
                                                <span>Add P 90.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="#4 Cheese - 15&quot;" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/pizza-5.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">#4 Cheese</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>Upgrade</span>
                                                <span>Add P 90.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Manhattan Meatlovers - 15&quot;" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/pizza-6.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Manhattan Meatlovers</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>Upgrade</span>
                                                <span>Add P 90.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BBQ Chicken - 15&quot;" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/pizza-7.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BBQ Chicken</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>Upgrade</span>
                                                <span>Add P 90.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Garden Special - 15&quot;" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/pizza-8.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Garden Special</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>Upgrade</span>
                                                <span>Add P 90.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="New York's Finest - 15&quot;" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/pizza-9.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">New York's Finest</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>Upgrade</span>
                                                <span>Add P 90.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Four Seasons Original - 15&quot;" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/pizza-10.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Four Seasons Original</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>Upgrade</span>
                                                <span>Add P 90.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Four Seasons All Meat - 15&quot;" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/pizza-11.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Four Seasons All Meat</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>Upgrade</span>
                                                <span>Add P 90.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="o-form-group o-form-dropdown c-bundle-xl-content_form--details__multi custom-padding-bottom">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                            <label for=""><?= $content['static']['process_2']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings1" class="o-form-group_input" placeholder="<?= $content['static']['process_2_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($process_2_products as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value['value'] ?>" data-price-value="<?= $value['price_value'] ?>">
                                            <figure>
                                                <img src="<?= $value['img_link'] ?>" alt="">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value['name'] ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="Garlic Parmesan" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Garlic Parmesan.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Garlic Parmesan</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Hot Chix" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Hot Chix.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Hot Chix</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Sriracha" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Sriracha.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Sriracha</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Sweet Soy" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Sweet Soy.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Sweet Soy</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings2" class="o-form-group_input" placeholder="<?= $content['static']['process_2_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($process_2_products as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value['value'] ?>" data-price-value="<?= $value['price_value'] ?>">
                                            <figure>
                                                <img src="<?= $value['img_link'] ?>" alt="">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value['name'] ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="Garlic Parmesan" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Garlic Parmesan.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Garlic Parmesan</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Hot Chix" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Hot Chix.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Hot Chix</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Sriracha" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Sriracha.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Sriracha</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Sweet Soy" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Sweet Soy.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Sweet Soy</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings3" class="o-form-group_input" placeholder="<?= $content['static']['process_2_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($process_2_products as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value['value'] ?>" data-price-value="<?= $value['price_value'] ?>">
                                            <figure>
                                                <img src="<?= $value['img_link'] ?>" alt="">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value['name'] ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="Garlic Parmesan" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Garlic Parmesan.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Garlic Parmesan</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Hot Chix" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Hot Chix.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Hot Chix</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Sriracha" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Sriracha.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Sriracha</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Sweet Soy" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Sweet Soy.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Sweet Soy</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings4" class="o-form-group_input" placeholder="<?= $content['static']['process_2_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($process_2_products as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value['value'] ?>" data-price-value="<?= $value['price_value'] ?>">
                                            <figure>
                                                <img src="<?= $value['img_link'] ?>" alt="">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value['name'] ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="Garlic Parmesan" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Garlic Parmesan.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Garlic Parmesan</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Hot Chix" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Hot Chix.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Hot Chix</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Sriracha" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Sriracha.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Sriracha</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Sweet Soy" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Sweet Soy.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Sweet Soy</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>

                        <div class="o-form-group o-form-dropdown c-bundle-xl-content_form--details__multi custom-padding-bottom">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                            <label for=""><?= $content['static']['process_3']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="pasta1" class="o-form-group_input" placeholder="<?= $content['static']['process_3_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($process_3_products as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value['value'] ?>" data-price-value="<?= $value['price_value'] ?>">
                                            <figure>
                                                <img src="<?= $value['img_link'] ?>" alt="">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value['name'] ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="Chicken Alfredo" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Chicken Alfredo.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Chicken Alfredo</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Charlie Chan®" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Charlie Chan.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Charlie Chan®</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Spaghetti and Meatballs" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/spaghetti and meatballs.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Spaghetti and Meatballs</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="pasta2" class="o-form-group_input" placeholder="<?= $content['static']['process_3_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($process_3_products as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value['value'] ?>" data-price-value="<?= $value['price_value'] ?>">
                                            <figure>
                                                <img src="<?= $value['img_link'] ?>" alt="">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value['name'] ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="Chicken Alfredo" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Chicken Alfredo.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Chicken Alfredo</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Charlie Chan®" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Charlie Chan.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Charlie Chan®</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Spaghetti and Meatballs" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/spaghetti and meatballs.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Spaghetti and Meatballs</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        
                        <div class="o-form-group o-form-dropdown last-padding">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">4</span>
                            <label for=""><?= $content['static']['process_4']; ?></label>
                            <div class="o-form-dropdown_input last-margin">
                                <input type="text" name="drinks1" class="o-form-group_input" placeholder="<?= $content['static']['process_4_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($process_4_products as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value['value'] ?>" data-price-value="<?= $value['price_value'] ?>">
                                            <figure>
                                                <img src="<?= $value['img_link'] ?>" alt="">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value['name'] ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="Mountain Dew" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Mountain Dew.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Mountain Dew</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Pepsi" data-price-value="">
                                        <figure>
                                            <img src="dist/images/product/Pepsi.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Pepsi</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        
                        <div class="order-summary" data-summary="order">
                            <h3 class="h3"><?= $content['static']['summary_title']; ?></h3>
                            <p><?= $content['static']['review_text']; ?></p> 
                            <h5 class="h5"><?= $content['static']['order_title']; ?></h5>
                            <ul class="order-summary-list">
                                <li data-catcher="pizza1"></li>
                                <li data-catcher="wings0" class="order-summary-list_title"></li>
                                <li class="item-indent" data-catcher="wings1"></li>
                                <li class="item-indent" data-catcher="wings2"></li>
                                <li class="item-indent" data-catcher="wings3"></li>
                                <li class="item-indent" data-catcher="wings4"></li>
                                <li data-catcher="pasta1"></li>
                                <li data-catcher="pasta2"></li>
                                <li data-catcher="drinks1"></li>
                            </ul>
                            <div class="order-summary-total [ u-df-mb u-df-mb-jc-sb u-df-mb-ai-c ]">
                                <h5 class="h5"><?= $content['static']['total_label']; ?></h5>
                                 <!-- <span>P<span data-catcher="total">0.00</span></span> -->
                                 <span>P<span><?= $content['static']['total_price']; ?></span></span>
                            </div>
                            <button type="submit" class="o-button o-button-lg" disabled>
                                <span><?= $content['buttons']['add_to_cart']; ?></span>
                                <i class="ic-cart"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>