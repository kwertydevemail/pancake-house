

<?php include 'src/includes/header.php';?>
<?php
    if(is_max()):
        $content = array(
            'static' => array(
                'search-title' => 'What are you looking for?',
                'search_placeholder' => 'Search for products or locations',
                'product-content-title' => 'Products ',
                'store-title-desktop' => 'Store Locations',
                'store-title-mobile' => 'Store Locations',
                'search-label' => 'Search',
                'search-placeholder' => 'Type a store name or location',
                'price-label' => '₱ ',
                'no-result-msg-dt' => 'We could not find the item you were searching for.<br/>Try using another keyword or browse our product catalog.',
                'no-result-msg-mb' => 'We could not find the item you were searching<br/> for.Try using another keyword or browse our<br/> product catalog.'
            ),
            'buttons' => array(
                'add-cart' => 'Order Now',
                'search' => 'Search',
                'view_store' => 'View Store Locations',
                'view_product' => 'View Products',
            ),
            'images' => array(
                'no-result-dt' => 'max/max-no-result-dt.png',
                'no-result-mb' => 'max/max-no-result-mb.png'
            ),
        );

        $dropdown_sort = [
            [
                'selectValue' => 'A-Z', 
            ],
            [
                'selectValue' => 'Z-A', 
            ],
            [
                'selectValue' => 'Delivery', 
            ],
            [
                'selectValue' => 'Dine-in', 
            ],
            [
                'selectValue' => 'Take-out', 
            ],
            [
                'selectValue' => 'Curbside®', 
            ],
        ];

        $store_list = [
            [
                'search' => 'Antique - Robinsons Place Antique',
                'filter' => '["Dine-in","Take Out","Delivery", "Pick up", "Curbside"]',
                'store' => 'Antique - Robinsons Place Antique',
                'time' => '9:00 AM - 8:00 PM',
                'filterLabel' => 'Dine-in, Take Out, Delivery, Pick up, Curbside®',
                'contact' => [
                                [
                                    'telLink' => 'tel:(036) 641-0050',
                                    'telLabel' => '(036) 641-0050'
                                ],
                                [
                                    'telLink' => 'tel:+639174338276',
                                    'telLabel' => '+639174338276'
                                ]
                ]
            ],
            [
                'search' => 'Bataan - Balanga',
                'filter' => '["Dine-in","Take Out","Delivery", "Pick up", "Curbside"]',
                'store' => 'Bataan - Balanga',
                'time' => '10:00 AM - 7:00 PM',
                'filterLabel' => 'Dine-in, Take Out, Delivery, Pick up, Curbside®',
                'contact' => [
                                [
                                    'telLink' => 'tel:(047) 237-7777',
                                    'telLabel' => '(047) 237-7777'
                                ],
                                [
                                    'telLink' => 'tel:+63956-490-9090',
                                    'telLabel' => '+63956-490-9090'
                                ]
                ]
            ],
            [
                'search' => 'Bataan - Vista Mall',
                'filter' => '["Take Out", "Pick up", "Curbside", "Delivery"]',
                'store' => 'Bataan - Vista Mall',
                'time' => '10:00 AM - 7:00 PM',
                'filterLabel' => 'Take Out, Pick up, Curbside®, Delivery',
                'contact' => [
                                [
                                    'telLink' => 'tel:09063144656',
                                    'telLabel' => '09063144656'
                                ],
                                [
                                    'telLink' => 'tel:047-633-9394',
                                    'telLabel' => '047-633-9394'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Lemery',
                'filter' => '["Dine-in", "Take Out", "Delivery", "Curbside"]',
                'store' => 'Batangas - Lemery',
                'time' => '9:00 AM - 5:00 PM',
                'filterLabel' => 'Dine-in, Take Out, Delivery, Curbside®',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977-801-7690',
                                    'telLabel' => '+63977-801-7690'
                                ],
                                [
                                    'telLink' => 'tel:+63 919 003-4360',
                                    'telLabel' => '+63 919 003-4360'
                                ],
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Lipa',
                'filter' => '["Dine-in","Take out","Delivery", "Curbside"]',
                'store' => 'Batangas - Lipa',
                'time' => '9:00 AM - 8:00 PM',
                'filterLabel' => 'Dine-in, Take out, Delivery, Curbside®',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 723-2222',
                                    'telLabel' => '(043) 723-2222'
                                ],
                                [
                                    'telLink' => 'tel:(043) 784-1664 TO 65',
                                    'telLabel' => '(043) 784-1664 TO 65'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Lipa Town Center',
                'filter' => '["Take Out", "Curbside", "Delivery"]',
                'store' => 'Batangas - Lipa Town Center',
                'time' => '9:00 AM - 8:00 PM',
                'filterLabel' => 'Take Out, Curbside®, Delivery',
                'contact' => [
                                [
                                    'telLink' => 'tel:+639173253803',
                                    'telLabel' => '+639173253803'
                                ],
                                [
                                    'telLink' => 'tel:(043)723-2222',
                                    'telLabel' => '(043)723-2222'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - SM Batangas',
                'filter' => '["Take Out","Delivery"]',
                'store' => 'Batangas - SM Batangas',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take Out, Delivery',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 723-2222',
                                    'telLabel' => '(043) 723-2222'
                                ],
                                [
                                    'telLink' => 'tel:(043) 724-8887',
                                    'telLabel' => '(043) 724-8887'
                                ],
                                [
                                    'telLink' => 'tel:(043) 783-2480',
                                    'telLabel' => '(043) 783-2480'
                                ],
                                [
                                    'telLink' => 'tel:09476334354',
                                    'telLabel' => '09476334354'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Sto.Tomas',
                'filter' => '["Dine-in", "Take Out","Delivery","Curbside"]',
                'store' => 'Batangas - Sto.Tomas',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Dine-in, Take Out, Delivery, Curbside®',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 723-2222',
                                    'telLabel' => '(043) 723-2222'
                                ],
                                [
                                    'telLink' => 'tel:(043) 740-0547',
                                    'telLabel' => '(043) 740-0547'
                                ]
                ]
            ],
            [
                'search' => 'Batangas City',
                'filter' => '["Dine-in", "Take out","Delivery","Curbside"]',
                'store' => 'Batangas City',
                'time' => '9:00 AM - 07:00 PM',
                'filterLabel' => 'Dine-in, Take out, Delivery, Curbside®',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 723-2222',
                                    'telLabel' => '(043) 723-2222'
                                ],
                                [
                                    'telLink' => 'tel:(043) 740-0547',
                                    'telLabel' => '(043) 740-0547'
                                ]
                ]
            ],
            [
                'search' => 'Benguet - Porta Vaga Mall Session Road',
                'filter' => '["Take out","Delivery"]',
                'store' => 'Benguet - Porta Vaga Mall Session Road',
                'time' => '9:00 AM - 8:00 PM',
                'filterLabel' => 'Take Out, Delivery',
                'contact' => [
                                [
                                    'telLink' => 'tel:(074) 442-9999',
                                    'telLabel' => '(074) 442-9999'
                                ],
                                [
                                    'telLink' => 'tel:(074)619-0575',
                                    'telLabel' => '(074)619-0575'
                                ]
                ]
            ],
        ];

        $products = [
            [
                'name' => 'Sinigang Na Hipon',
                'price' => '1,035.00',
                'img_link' => 'max-promo-product-1.svg',
            ],
            [
                'name' => 'Sinigang na Tiyan ng Bangus sa Miso',
                'price' => '1,035.00',
                'img_link' => 'max-promo-product-2.svg',
            ],
            [
                'name' => 'SInigang Na Baboy',
                'price' => '1,035.00',
                'img_link' => 'max-promo-product-3.svg',
            ],
            [
                'name' => 'Chicken Pancit Canton',
                'price' => '1,035.00',
                'img_link' => 'max-promo-product-4.svg',
            ],
            [
                'name' => 'Sizzling Tofu',
                'price' => '1,035.00',
                'img_link' => 'max-promo-product-5.svg',
            ],
            [
                'name' => 'Fresh Lumpiang Ubod',
                'price' => '1,035.00',
                'img_link' => 'max-promo-product-6.svg',
            ],
            [
                'name' => 'Chicken Lumpiang Shanghai Platter',
                'price' => '1,035.00',
                'img_link' => 'max-promo-product-7.svg',
            ],
            [
                'name' => 'Sizzling Tofu',
                'price' => '1,035.00',
                'img_link' => 'max-promo-product-8.svg',
            ],
            [
                'name' => 'Sizzling Tofu',
                'price' => '1,035.00',
                'img_link' => 'max-promo-product-8.svg',
            ],
            [
                'name' => 'Sizzling Tofu',
                'price' => '1,035.00',
                'img_link' => 'max-promo-product-8.svg',
            ],
            [
                'name' => 'Sizzling Tofu',
                'price' => '1,035.00',
                'img_link' => 'max-promo-product-8.svg',
            ],
            [
                'name' => 'Sizzling Tofu',
                'price' => '1,035.00',
                'img_link' => 'max-promo-product-8.svg',
            ],
        ];
    endif;
?>
<div class="main-wrapper">
    <section class="c-search">

        <div class="o-container search">
            <div class="c-search-container">
                <h3 class="o-header-title"><?= $content['static']['search-title']; ?></h3>
                <div class="group-input">
                    <div class="group-input-content">
                        <input type="text" placeholder="<?= $content['static']['search_placeholder']; ?>" id="input-search">
                    </div>
                    <button class="o-button">
                        <span class=" [ u-dn-mb u-dn-tb u-db-dt] "><?= $content['buttons']['search']; ?></span>
                        <i class="ic-max-search-white [ u-dn-dt u-db-mb ]"></i>
                    </button>
                </div>
                <span class="text-result"></span>
            </div>
        </div>

        <div id="product-list" class="o-container product-list">
            <div class="c-product-content [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r ]">
                <div class="c-product-content_panel for-standard [ u-df-mb-fd-c ] active" data-target-layout="default">
                    <div class="product-header">
                        <h3 class="h3 title [ u-dnc-mb u-dbc-tb ]"><?= $content['static']['product-content-title']; ?></h3>
                        <h3 class="h3 title [ u-dnc-tb u-dbc-mb ]"><?= $content['static']['product-content-title']; ?></h3>
                        <div class="o-divider"></div>
                    </div>

                        <form action="" class="hidden">
                            <div class="o-form-group">
                                <label for=""><?= $content['static']['search-label']; ?></label>
                                <div class="o-form-group_standard">
                                    <input id="product-search" type="text" name="search" class="o-form-group_input" placeholder="<?= $content['static']['search-placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" data-search="product">
                                </div>
                            </div>
                        </form>

                    <div class="c-product-content_panel--detail">
                        <?php
                            $dataType = 'fried_chicken';
                            $dataItem = $products;
                            include "src/includes/c-explore-cards.php"
                        ?>
                    </div>

                    <div class="c-store-list-paginate [ u-df-mb u-df-mb-jc-c u-df-mb-w ]">
                            <form action="#" class="store-list-paginate">
                                <div class="o-form-group o-form-dropdown for-product-page">
                                    <div class="o-form-dropdown_input u-dn-mb [ u-dn-tb u-dn-dt ]">
                                        <input type="hidden" name="page_main" data-listen="input" autocomplete="off" readonly data-catcher-field="store-placeholder">
                                        <input type="text" name="page" class="o-form-group_input" data-listen="input" autocomplete="off" readonly value="Page 1 of 2" data-page="product-getter">
                                        <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                            <li class="[ u-df-mb ] li-lg" data-select-value="Page 1 of 2" data-select-main="1">
                                                <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                    <h5 class="h5">1</h5>
                                                </div>
                                            </li>
                                            <li class="[ u-df-mb ] li-lg" data-select-value="Page 2 of 2" data-select-main="2">
                                                <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                    <h5 class="h5">2</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        <div class="c-paginate-nav [ u-df-mb ]" data-catcher="paginate-holder-product">
                            <a href="javascript:void(0)" class="c-paginate-nav_carets" data-paginate-product="prev"><i class="<?php if(is_ph()):?>ic-caret-left-mb<?php endif;?><?php if(is_max()):?>ic-max-caret-left-mb<?php endif;?>"></i></a>
                            <div class="[ u-df-mb ]" data-catcher="paginate-product-pages">
                            </div>
                            <a href="javascript:void(0)" class="c-paginate-nav_carets" data-paginate-product="next"><i class="<?php if(is_ph()):?>ic-caret-right-mb<?php endif;?><?php if(is_max()):?>ic-max-caret-right-mb<?php endif;?>"></i></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div id="store-list" class="o-container store-list">
            <div class="c-standard-layout c-store-list">
                <div class="c-standard-layout-content c-store-list-stores">
                    <div class="c-standard-layout-content_display [ u-df-mb u-df-mb-w ]">
                        <div class="c-store-list-stores_header">
                            <h3 class="h3 c-ordernow-title [ u-dnc-mb u-dbc-tb ]"><?= $content['static']['store-title-desktop']; ?></h3>
                            <h3 class="h3 c-ordernow-title [ u-dnc-tb u-dbc-mb ]"><?= $content['static']['store-title-mobile']; ?></h3>
                            <div class="o-divider [ u-dnc-mb u-dbc-tb ]"></div>
                        </div>
                        <form action="" class="hidden">
                            <div class="o-form-group">
                                <label for=""><?= $content['static']['search-label']; ?></label>
                                <div class="o-form-group_standard">
                                    <input id="store-search" type="text" name="search" class="o-form-group_input" placeholder="<?= $content['static']['search-placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" data-search="store">
                                </div>
                            </div>

                            <div class="o-form-group o-form-dropdown">
                                <div class="o-form-dropdown_input">
                                    <input type="text" name="sort" class="o-form-group_input" placeholder="A-Z" data-listen="input" autocomplete="off" readonly data-required-validate="true">
                                    <ul class="[ u-df-mb u-df-mb-fd-c ] for-address-dropdown">
                                        <?php foreach($dropdown_sort as $key => $value): ?>
                                            <li class="[ u-df-mb ]" data-select-value="<?= $value['selectValue'] ?>">
                                                <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                    <h5 class="h5"><?= $value['selectValue'] ?></h5>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </form>

                        <div id="store-list-item" class="c-store-list-stores_contacts" data-catcher="store-list">
                            <?php foreach($store_list as $key => $value): ?>
                                <div id="store-panel" class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                                    data-catcher-search="<?= $value['search'] ?>"
                                    data-store-filter=' <?= $value['filter'] ?>'>
                                    <div class="c-store-list-stores_contacts--item__content">
                                        <h4 class="h4"><?= $value['store'] ?></h4>
                                        <ul class="store-legend [ u-df-mb ]">
                                            <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                                <i class="<?php if(is_ph()):?>ic-clock<?php endif;?><?php if(is_max()):?>ic-max-clock<?php endif;?>"></i>
                                                <span><?= $value['time'] ?></span>
                                            </li>
                                            <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                                <i class="<?php if(is_ph()):?>ic-pizza<?php endif;?><?php if(is_max()):?>ic-max-spoon-fork<?php endif;?>"></i>
                                                <span><?= $value['filterLabel'] ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                        <?php foreach($value['contact'] as $key => $val): ?>
                                            <a href="<?= $val['telLink'] ?>" class="contact-panel_card">
                                                <div class="contact-panel_card--detail">
                                                    <h5 class="h5"><?= $val['telLabel'] ?></h5>
                                                </div>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="o-divider"></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="c-store-list-paginate [ u-df-mb u-df-mb-jc-c u-df-mb-w ]">
                            <form action="#" class="store-list-paginate">
                                <div class="o-form-group o-form-dropdown for-store-page">
                                    <div class="o-form-dropdown_input">
                                        <input type="hidden" name="page_main" data-listen="input" autocomplete="off" readonly data-catcher-field="store-placeholder">
                                        <input type="text" name="page" class="o-form-group_input" data-listen="input" autocomplete="off" readonly value="Page 1 of 2" data-page="getter">
                                        <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                            <li class="[ u-df-mb ] li-lg" data-select-value="Page 1 of 2" data-select-main="1">
                                                <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                    <h5 class="h5">1</h5>
                                                </div>
                                            </li>
                                            <li class="[ u-df-mb ] li-lg" data-select-value="Page 2 of 2" data-select-main="2">
                                                <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                    <h5 class="h5">2</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        <div class="c-paginate-nav [ u-df-mb ]" data-catcher="paginate-holder">
                            <a href="javascript:void(0)" class="c-paginate-nav_carets" data-paginate="prev"><i class="<?php if(is_ph()):?>ic-caret-left-mb<?php endif;?><?php if(is_max()):?>ic-max-caret-left-mb<?php endif;?>"></i></a>
                            <div class="[ u-df-mb ]" data-catcher="paginate-pages">
                            </div>
                            <a href="javascript:void(0)" class="c-paginate-nav_carets" data-paginate="next"><i class="<?php if(is_ph()):?>ic-caret-right-mb<?php endif;?><?php if(is_max()):?>ic-max-caret-right-mb<?php endif;?>"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="o-container no-results">
            <div class="c-no-results">
                <h2 class="o-header-title">Sorry, no results found. </h2>
                <img class="u-dn-mb u-db-dt" src="dist/images/<?= $content['images']['no-result-dt']; ?>" alt="no-result">
                <img class="u-dn-dt u-db-mb" src="dist/images/<?= $content['images']['no-result-mb']; ?>" alt="no-result">
                <p class="u-dn-mb u-db-dt"><?= $content['static']['no-result-msg-dt']; ?></p>
                <p class="u-dn-dt u-db-mb"><?= $content['static']['no-result-msg-mb']; ?></p>

                <div class="button-group">
                    <div class="for-desktop">
                        <button class="o-button o-button-lg o-button-trans o-button-bordered">
                            <span><?= $content['buttons']['view_store']; ?></span>
                        </button>
                        <button class="o-button o-button-lg o-button-trans o-button-bordered">
                            <span><?= $content['buttons']['view_product']; ?></span>
                        </button>
                    </div>                       

                    <div class="for-mobile">
                        <button class="o-button o-button-lg o-button-trans o-button-bordered">
                            <span><?= $content['buttons']['view_product']; ?></span>
                        </button>
                        <button class="o-button o-button-lg o-button-trans o-button-bordered">
                            <span><?= $content['buttons']['view_store']; ?></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'src/includes/footer.php';?>
</div>