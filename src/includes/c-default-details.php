<?php
    $content = array(
        'static' => array(
            'default-details-1' => 'Get a 12” 2-in-1 Classic or Signature NY-Style Original Crust pizza, half pound wings, 
                                      and 1.5L Mountain Dew for only P899!',
            'default-details-2' => 'Promo is available from January 18 to April 10, 2021. Promo is valid for dine-in, take-out, 
                                      Curbside® pick-up, drive-thru and delivery.',
            'default-details-3' => 'Price varies on GrabFood, LalaFood, and Foodpanda. Per DTI Fair Trade Permit No. FTEB-108747 
                                      Series of 2020',
            'header-title' => 'Make this offer yours!',
            'select-option-label' => 'Select your options',
            'subtext' => 'Each pizza comes with free hot sauce and chili flakes',
            'process-label-1' => 'Select the flavor of the first pizza',
            'process-label-2' => 'Select the flavor of the second pizza',
            'process-label-3' => 'Select four (4) wings flavors',
            'process-label-4' => 'Select a beverage',
            'process-label-5' => 'How many orders?',
            'process-placeholder-1' => 'Select your first pizza',
            'process-placeholder-2' => 'Select your second pizza',
            'process-placeholder-3' => 'Select a flavor',
            'process-placeholder-4' => 'Select a beverage',
            'order-summary' => 'Order Summary',
            'review-text' => 'Review your order before adding to cart',
            'total-label' => 'Total',
            'price-label' => '0.00',
        ),
        'buttons' => array(
            'add-cart' => 'ADD TO CART'
        ),
        'images' => array(
            'default-img' => 'default-detail-1.jpg',
        )
    );

    $pizzaMenu = [
        [
            'name' => 'Pepperoni',
            'inches' => '12”',
            'size' => 'Medium',
            'price' => 499,
            'img_url' => 'pizza-1.png',
        ],
        [
            'name' => 'Hawaiian',
            'inches' => '12”',
            'size' => 'Medium',
            'price' => 499,
            'img_url' => 'pizza-2.png',
        ],
        [
            'name' => 'Patty Melt',
            'inches' => '12”',
            'size' => 'Medium',
            'price' => 499,
            'img_url' => 'pizza-8.png',
        ],
        [
            'name' => 'Roasted Garlic & Shrimp',
            'inches' => '12”',
            'size' => 'Medium',
            'price' => 499,
            'img_url' => 'pizza-6.png',
        ],
        [
            'name' => '#4 Cheese',
            'inches' => '12”',
            'size' => 'Medium',
            'price' => 499,
            'img_url' => 'pizza-7.png',
        ],
        [
            'name' => 'Manhattan Meatlovers',
            'inches' => '12”',
            'size' => 'Medium',
            'price' => 499,
            'img_url' => 'pizza-5.png',
        ],
        [
            'name' => 'BBQ Chicken',
            'inches' => '12”',
            'size' => 'Medium',
            'price' => 499,
            'img_url' => 'pizza-3.png',
        ],
        [
            'name' => 'Garden Special',
            'inches' => '12”',
            'size' => 'Medium',
            'price' => 499,
            'img_url' => 'pizza-4.png',
        ],
    ];

    $wingsFlavor = [
        [
            'name' => 'Garlic Parmesan',
            'img_url' => 'Garlic Parmesan.png',
            'price' => 0,
        ],
        [
            'name' => 'Hot Chix',
            'img_url' => 'Hot Chix.png',
            'price' => 0,
        ],
        [
            'name' => 'Sriracha',
            'img_url' => 'Sriracha.png',
            'price' => 0,
        ],
        [
            'name' => 'Sweet Soy',
            'img_url' => 'Sweet Soy.png',
            'price' => 0,
        ],

    ];

    $beverages = [
        [
            'name' => 'Mountain Dew',
            'price' => 0,
        ],
        [
            'name' => 'Coca Cola',
            'price' => 0,
        ],
        [
            'name' => 'Sprite',
            'price' => 0,
        ],
    ];
?>

<section class="c-default-details">
    <div class="o-container">
        <div class="c-default-details-content [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r ]">
            <h3 class="o-header-title-slant"><?= $breadcrumbs[1] ?>!</h3>
            <div class="c-default-details-content_display">
                <p>
                    <?= $content['static']['default-details-1']; ?>
                </p>
                <figure>
                    <img src="dist/images/<?= $content['images']['default-img']; ?>" alt="<?= $breadcrumbs[1] ?>">
                </figure>
                <p>
                    <?= $content['static']['default-details-2']; ?>
                </p>
                <p> 
                    <?= $content['static']['default-details-3']; ?>
                </p>
            </div>
            <div class="c-default-details-content_form">
                <h3 class="o-header-title"><?= $content['static']['header-title']; ?></h3>
                <span><?= $content['static']['select-option-label']; ?> </span>
                <div class="c-default-details-content_form--details">
                    <p class="line-subtext"><?= $content['static']['subtext']; ?></p>
                    <form action="" class="o-form-timeline" validation="true" data-form-catcher="addedToCartModal" data-order-summary="order">
                        <input type="hidden" name="product_price" class="o-form-group_input" placeholder="<?= $content['static']['process-placeholder-1']; ?>"  readonly value="0">
                        <input type="hidden" name="product_id" class="o-form-group_input" placeholder="<?= $content['static']['process-placeholder-1']; ?>"  readonly value="0">
                        <input type="hidden" name="product_option" class="o-form-group_input" placeholder="<?= $content['static']['process-placeholder-1']; ?>"  readonly value="0">
                        <div class="o-form-group o-form-dropdown">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                            <label for=""><?= $content['static']['process-label-1']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="pizza1" class="o-form-group_input" placeholder="<?= $content['static']['process-placeholder-1']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($pizzaMenu as $k => $v): ?>
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
                        <div class="o-form-group o-form-dropdown">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                            <label for=""><?= $content['static']['process-label-2']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="pizza2" class="o-form-group_input" placeholder="<?= $content['static']['process-placeholder-2']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($pizzaMenu as $k => $v): ?>
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
                        <div class="o-form-group o-form-dropdown c-default-details-content_form--details__multi">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                            <label for=""><?= $content['static']['process-label-3']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings1" class="o-form-group_input" placeholder="<?= $content['static']['process-placeholder-3']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($wingsFlavor as $k => $v): ?>
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
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings2" class="o-form-group_input" placeholder="<?= $content['static']['process-placeholder-3']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($wingsFlavor as $k => $v): ?>
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
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings3" class="o-form-group_input" placeholder="<?= $content['static']['process-placeholder-3']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($wingsFlavor as $k => $v): ?>
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
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings4" class="o-form-group_input" placeholder="<?= $content['static']['process-placeholder-3']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($wingsFlavor as $k => $v): ?>
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
                        <div class="o-form-group o-form-dropdown">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">4</span>
                            <label for=""><?= $content['static']['process-label-4']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="beverages" class="o-form-group_input" placeholder="<?= $content['static']['process-placeholder-4']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($beverages as $k => $v): ?>
                                    <li class="[ u-df-mb ]" data-select-value="<?= $v['name'] ?>" data-price-value="<?= $v['price'] ?>">
                                        <?php if(isset($v['img_url'])): ?>
                                        <figure>
                                            <img src="dist/images/product/<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                                        </figure>
                                        <?php endif; ?>
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
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">5</span>
                            <label for=""><?= $content['static']['process-label-5']; ?></label>
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
                        <div class="order-summary" data-summary="order">
                            <h3 class="h3"><?= $content['static']['order-summary']; ?></h3>
                            <p><?= $content['static']['review-text']; ?></p> 
                            <h5 class="h5"><?= $breadcrumbs[1] ?></h5>
                            <ul class="order-summary-list"></ul>
                            <div class="order-summary-total [ u-df-mb u-df-mb-jc-sb u-df-mb-ai-c ]">
                                <h5 class="h5"><?= $content['static']['total-label']; ?></h5>
                                <span>P<span data-catcher="total"><?= $content['static']['price-label']; ?></span></span>
                            </div>
                            <button type="submit" class="o-button o-button-lg" disabled>
                                <span><?= $content['buttons']['add-cart']; ?></span>
                                <i class="ic-cart"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>