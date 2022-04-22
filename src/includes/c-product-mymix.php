<?php
    $content = array(
        'static' => array(
            'header_title' => 'My Mix',
            'content_display' => 'All our bestsellers in one! Choose your pizza, pasta, and wings. Comes with garlic bread.',
            'content_note' => 'Note: Image shown is actual MyMix serving (12" pizza slice, two pieces wingette 
                                and drumette, pasta, and garlic bread). Serving sizes in image upon 
                                flavor selection are for visualization purposes only.',
            'header_title_2' => 'Make this mix yours!',

            'process_1' => 'Choose your pizza slice.',
            'process_1_placeholder' => 'Choose your pizza slice.',
            'process_2' => 'Choose your wings.',
            'process_2_placeholder' => 'Choose your wings',
            'process_3' => 'Choose your pasta.',
            'process_3_placeholder' => 'Choose your pasta',
            'process_4' => 'Choose your add-ons.',
            'process_4_placeholder' => 'Choose your add-ons',
            'process_5' => 'Choose how many.',
            'summary_label' => 'Order Summary',
            'summary_review' => 'Review your order before adding to cart',
            'summary_subtext' => 'My Mix',
            'total_label' => 'Total',
            'total' => '0.00',
        ),
        'buttons' => array(
            'add_to_cart' => 'ADD TO CART',
        ),
        'images' => array(
            'my_mix_img' => 'My Mix.png',
        ),
    );
    $product_list_1 = [
        [
            'value' => 'Pepperoni - 12&quot;',
            'price' => '499',
            'img_link' => 'dist/images/product/pizza-1.png',
            'name' => 'Pepperoni'
        ],
        [
            'value' => 'Hawaiian - 12&quot;',
            'price' => '499',
            'img_link' => 'dist/images/product/pizza-2.png',
            'name' => 'Hawaiian'
        ],
    ];
    $product_list_2 = [
        [
            'value' => 'Garlic Paremesan',
            'price' => '0',
            'img_link' => 'dist/images/product/Garlic Parmesan.png',
            'name' => 'Garlic Parmesan'
        ],
        [
            'value' => 'Hot Chix',
            'price' => '0',
            'img_link' => 'dist/images/product/Hot Chix.png',
            'name' => 'Hot Chix'
        ],
    ];
    $product_list_3 = [
        [
            'value' => 'Chicken Alfredo',
            'price' => '0',
            'img_link' => 'dist/images/product/Chicken Alfredo.png',
            'name' => 'Chicken Alfredo'
        ],
        [
            'value' => 'Charlie Chan®',
            'price' => '0',
            'img_link' => 'dist/images/product/Charlie Chan.png',
            'name' => 'Charlie Chan®'
        ],
    ];
    $product_list_4 = [
        [
            'value' => 'Chili Flakes',
            'price' => '5',
            'img_link' => 'dist/images/product/Chili Flakes_.png',
            'name' => 'Chili Flakes',
            'size' => 'Sachet',
            'added_price' => 'Add P 5.00'
        ],
        [
            'value' => 'Hot Sauce',
            'price' => '5',
            'img_link' => 'dist/images/product/Hot Sauce.png',
            'name' => 'Hot Sauce',
            'size' => 'Sachet',
            'added_price' => 'Add P 5.00'
        ],
        [
            'value' => 'Ketchup',
            'price' => '5',
            'img_link' => 'dist/images/product/Ketchup.png',
            'name' => 'Ketchup',
            'size' => 'Sachet',
            'added_price' => 'Add P 5.00'
        ],
        [
            'value' => 'Chili Oil',
            'price' => '10',
            'img_link' => 'dist/images/product/Chili Oil.png',
            'name' => 'Chili Oil',
            'size' => '1oz Cup',
            'added_price' => 'Add P 10.00'
        ],
        [
            'value' => 'Lime',
            'price' => '20',
            'img_link' => 'dist/images/product/Lime.png',
            'name' => 'Lime',
            'size' => '1 Piece',
            'added_price' => 'Add P 20.00'
        ],
        [
            'value' => 'Parmesan Cheese',
            'price' => '35',
            'img_link' => 'dist/images/product/Parmesan Cheese.png',
            'name' => 'Parmesan Cheese',
            'size' => '0.5oz Cup',
            'added_price' => 'Add P 35.00'
        ],
        [
            'value' => 'Hot Wings Sauce',
            'price' => '50',
            'img_link' => 'dist/images/product/Hot Chix Condi.png',
            'name' => 'Hot Wings Sauce',
            'size' => '0.5oz Cup',
            'added_price' => 'Add P 50.00'
        ],
        [
            'value' => 'Garlic Ranch',
            'price' => '50',
            'img_link' => 'dist/images/product/Garlic Ranch.png',
            'name' => 'Garlic Ranch',
            'size' => '0.5oz Cup',
            'added_price' => 'Add P 50.00'
        ],
        [
            'value' => 'Hot Sauce Bottle',
            'price' => '100',
            'img_link' => 'dist/images/product/Red Pepper Sauce.png',
            'name' => 'Hot Sauce Bottle',
            'size' => '150 mL',
            'added_price' => 'Add P 100.00'
        ],
    ];
?>

<section class="c-my-mix">
    <div class="o-container">
        <div class="c-my-mix-content [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r ]">
            <h3 class="o-header-title-slant"><?= $content['static']['header_title']; ?></h3>
            <div class="c-my-mix-content_display">
                <p><?= $content['static']['content_display']; ?> </p>
                <figure>
                    <img src="dist/images/<?= $content['images']['my_mix_img']; ?>" alt="<?= $breadcrumbs[1] ?>" id="thumb" data-large-img-url="dist/images/<?= $content['images']['my_mix_img']; ?>">
                </figure>
                <p class="italize">
                    <?= $content['static']['content_note']; ?>
                </p>
            </div>
            <div class="c-my-mix-content_form">
                <h3 class="o-header-title"><?= $content['static']['header_title_2']; ?></h3>
                
                <div class="c-my-mix-content_form--details">
                    <form action="" class="o-form-timeline" validation="true" data-form-catcher="addedToCartModal" data-order-summary="order">
                        <div class="o-form-group o-form-dropdown">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                            <label for=""><?= $content['static']['process_1']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="pizza1" class="o-form-group_input" placeholder="<?= $content['static']['process_1_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($product_list_1 as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value['value'] ?>" data-price-value="<?= $value['price'] ?>">
                                            <figure>
                                                <img src="<?= $value['img_link'] ?>" alt="">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value['name'] ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="Pepperoni - 12&quot;" data-price-value="499">
                                        <figure>
                                            <img src="dist/images/product/pizza-1.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Pepperoni</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Hawaiian - 12&quot;" data-price-value="499">
                                        <figure>
                                            <img src="dist/images/product/pizza-2.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Hawaiian</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="o-form-group o-form-dropdown">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                            <label for=""><?= $content['static']['process_2']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="wings1" class="o-form-group_input" placeholder="<?= $content['static']['process_2_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($product_list_2 as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value['value'] ?>" data-price-value="<?= $value['price'] ?>">
                                            <figure>
                                                <img src="<?= $value['img_link'] ?>" alt="">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value['name'] ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="Garlic Paremesan" data-price-value="0">
                                        <figure>
                                            <img src="dist/images/product/Garlic Parmesan.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Garlic Parmesan</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Hot Chix" data-price-value="0">
                                        <figure>
                                            <img src="dist/images/product/Hot Chix.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Hot Chix</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="o-form-group o-form-dropdown">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                            <label for=""><?= $content['static']['process_3']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="pasta1" class="o-form-group_input" placeholder="<?= $content['static']['process_3_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($product_list_3 as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value['value'] ?>" data-price-value="<?= $value['price'] ?>">
                                            <figure>
                                                <img src="<?= $value['img_link'] ?>" alt="">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value['name'] ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="Chicken Alfredo" data-price-value="0">
                                        <figure>
                                            <img src="dist/images/product/Chicken Alfredo.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Chicken Alfredo</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Charlie Chan®" data-price-value="0">
                                        <figure>
                                            <img src="dist/images/product/Charlie Chan.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Charlie Chan®</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="o-form-group o-form-dropdown">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">4</span>
                            <label for=""><?= $content['static']['process_4']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="text" name="addons" class="o-form-group_input" placeholder="<?= $content['static']['process_4_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($product_list_4 as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value['value'] ?>" data-price-value="<?= $value['price'] ?>">
                                            <figure>
                                                <img src="<?= $value['img_link'] ?>" alt="">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value['name'] ?></h5>
                                                <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                    <span><?= $value['size'] ?></span>
                                                    <span><?= $value['added_price'] ?></span>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <li class="[ u-df-mb ]" data-select-value="No Add-ons" data-price-value="0">
                                        <figure>
                                            <img src="dist/images/product/addons-9.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">No Add-ons</h5>
                                        </div>
                                    </li>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="Chili Flakes" data-price-value="5">
                                        <figure>
                                            <img src="dist/images/product/Chili Flakes_.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Chili Flakes</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>Sachet</span>
                                                <span>Add P 5.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Hot Sauce" data-price-value="5">
                                        <figure>
                                            <img src="dist/images/product/Hot Sauce.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Hot Sauce</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>Sachet</span>
                                                <span>Add P 5.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Ketchup" data-price-value="5">
                                        <figure>
                                            <img src="dist/images/product/Ketchup.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Ketchup</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>Sachet</span>
                                                <span>Add P 5.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Chili Oil" data-price-value="10">
                                        <figure>
                                            <img src="dist/images/product/Chili Oil.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Chili Oil</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>1oz Cup</span>
                                                <span>Add P 10.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Lime" data-price-value="20">
                                        <figure>
                                            <img src="dist/images/product/Lime.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Lime</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>1 Piece</span>
                                                <span>Add P 20.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Parmesan Cheese" data-price-value="35">
                                        <figure>
                                            <img src="dist/images/product/Parmesan Cheese.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Parmesan Cheese</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>0.5oz Cup</span>
                                                <span>Add P 35.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Hot Wings Sauce" data-price-value="50">
                                        <figure>
                                            <img src="dist/images/product/Hot Chix Condi.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Hot Wings Sauce</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>0.5oz Cup</span>
                                                <span>Add P 50.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Garlic Ranch" data-price-value="50">
                                        <figure>
                                            <img src="dist/images/product/Garlic Ranch.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Garlic Ranch</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>0.5oz Cup</span>
                                                <span>Add P 50.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Hot Sauce Bottle" data-price-value="100">
                                        <figure>
                                            <img src="dist/images/product/Red Pepper Sauce.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Hot Sauce Bottle</h5>
                                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                                <span>150 mL</span>
                                                <span>Add P 100.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="No Add-ons" data-price-value="0">
                                        <figure>
                                            <img src="dist/images/product/addons-9.png" alt="">
                                        </figure>
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">No Add-ons</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                
                        <div class="o-form-group last-padding">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">5</span>
                            <label for=""><?= $content['static']['process_5']; ?></label>
                            <div class="o-form-operator [ u-df-mb ]">
                                <button type="button" class="o-button ic-only" data-trigger-operator="sub">
                                    <i class="ic-minus"></i>
                                </button>
                                <input type="text" name="orderCount" class="o-form-group_input" value="1" data-listen="input" autocomplete="off"  onkeypress="return isNumberKey(event)">
                                <button type="button" class="o-button ic-only" data-trigger-operator="add">
                                    <i class="ic-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="order-summary" data-summary="order">
                            <h3 class="h3"><?= $content['static']['summary_label']; ?></h3>
                            <p><?= $content['static']['summary_review']; ?></p> 
                            <h5 class="h5"><?= $content['static']['summary_subtext']; ?></h5>
                            <ul class="order-summary-list">
                                <li data-catcher="pizza1"></li>
                                <li data-catcher="wings0" class="order-summary-list_title"></li>
                                <li class="item-indent" data-catcher="wings1"></li>
                                <li data-catcher="pasta1"></li>
                                <li data-catcher="addons"></li>
                            </ul>
                            <div class="order-summary-total [ u-df-mb u-df-mb-jc-sb u-df-mb-ai-c ]">
                                <h5 class="h5"><?= $content['static']['total_label']; ?></h5>
                                <span>P<span data-catcher="total"><?= $content['static']['total']; ?></span></span>
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