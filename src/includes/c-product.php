<?php

    if(is_ph()):
        $content = array(
            'static' => array(
                'product-content-title' => 'Explore Promos',
                'panel-detail-title-1' => 'PROMO DETAILS',
                'panel-detail-title-3' => 'NY-STYLE ORIGINAL CRUST PIZZA',
                'panel-detail-title-4' => 'Pasta',
                'panel-detail-title-5' => 'Group Bundles',
                'panel-detail-title-6' => 'Chicken',
                'panel-detail-title-7' => 'Solos',
                'panel-detail-title-8' => 'Desserts & Beverages',
                'legend-label' => 'Legend:',
                'legend-1' => 'Specialty of the House',
                'price-label' => 'Total Price: P',
                'empty-layout' => 'Empty No Layout'
            ),
            'buttons' => array(
                'add-cart' => 'Add to Cart',
                'back-to-promos' => 'Back to Promos'
            ),
            'images' => array(
                'banner-desktop' => 'pizza-hero-1.png',
                'banner-mobile' => 'pizza-hero-1-mb.png'
            ),
            'link' => array(
                'sign-up' => 'https://customer.maxsgroupinc.com/subscription/home/dkk4os'
            ),
            'dynamic' => array(
            ),
        );
        $groupBundles = [
            [
                'php_src' => 'order-select.php',
                'img' => 'product-detail-squadstuff-l.jpg',
                'name' => 'Squad Stuff L',
                'price' => 'starts at P100',
            ],
            [
                'php_src' => 'order-select.php',
                'img' => 'product-detail-squadstuff-xl.jpg',
                'name' => 'Squad Stuff XL',
                'price' => 'starts at P100',
            ],
            [
                'php_src' => 'order-select.php',
                'img' => 'product-detail-squadstuff-xxl.jpg',
                'name' => 'Squad Stuff XXL',
                'price' => 'starts at P100',
            ],
        ];

        $solos = [
            [
                'php_src' => 'order-select.php',
                'img' => 'product-detail-mymix.jpg',
                'name' => 'My Mix',
                'price' => 'starts at P100',
            ]
        ];
        
        $category = [
            [
                'name' => 'Promos',
                'layout' => 'default'
            ],
            [
                'name' => 'Bestsellers',
                'layout' => 'empty'
            ],
            [
                'name' => 'NY-Style Original Crust',
                'layout' => 'pizza'
            ],
            [
                'name' => 'NY-Style Thin Crust',
                'layout' => 'empty'
            ],
            [
                'name' => 'Dear Darla',
                'layout' => 'empty'
            ],
            [
                'name' => 'Chicken',
                'layout' => 'chicken'
            ],
            [
                'name' => 'Pasta',
                'layout' => 'pasta'
            ],
            [
                'name' => 'Group Bundles',
                'layout' => 'group-bundles'
            ],
            [
                'name' => 'Party Trays',
                'layout' => 'empty'
            ],
            [
                'name' => 'Solos',
                'layout' => 'solos'
            ],
            [
                'name' => 'Desserts & Beverages',
                'layout' => 'desserts-beverages'
            ],
            [
                'name' => 'Ready-To-Cook',
                'layout' => 'empty'
            ],
        ];
        $products = [
            [
                'category' => 'Promos',
                'layout' => 'default',
                'title' => '2 Pizzas for P499',
                'price' => '499.00',
                'short_des' => 'Get two pizzas for only P499! Choose from our 9" pizzas',
                'long_des' => [
                    'Get two pizzas for only P499! Choose from Pepperoni, Hawaiian, Garden Special, 
                    BBQ Chicken, or Manhattan Meatlovers for your first 9" pizza, and get a 9" Cheese 
                    pizza with your order!',
                    'Add P50 to choose the flavor of your second 9" pizza or get a 1.5L Mountain Dew/Pepsi 
                    soda with your order!',
                    'Exclusively available in NY-Style Original Crust. Promo is available from January 1 
                    to December 31, 2021 only. Promo is valid for dine-in, take-out, Curbside® pick-up, 
                    drive-thru and delivery.',
                    'Per DTI Fair Trade Permit No. FTEB-108644 Series of 2020',
                ],
                'img_link' => 'promo-1.jpg',
                'img_link_detail' => 'promo-detail-1.jpg'
            ],
            [
                'category' => 'Promos',
                'layout' => 'default',
                'title' => '2-in-1 Welcome to ‘21',
                'price' => '899.00',
                'short_des' => 'Get a 2-in-1 Original Crust, pizza, wings, and soda!',
                'long_des' => [
                    'Get two pizzas for only P499! Choose from Pepperoni, Hawaiian, Garden Special, 
                    BBQ Chicken, or Manhattan Meatlovers for your first 9" pizza, and get a 9" Cheese 
                    pizza with your order!',
                    'Add P50 to choose the flavor of your second 9" pizza or get a 1.5L Mountain Dew/Pepsi 
                    soda with your order!',
                    'Exclusively available in NY-Style Original Crust. Promo is available from January 1 
                    to December 31, 2021 only. Promo is valid for dine-in, take-out, Curbside® pick-up, 
                    drive-thru and delivery.',
                    'Per DTI Fair Trade Permit No. FTEB-108644 Series of 2020',
                ],
                'img_link' => 'promo-2.jpg',
                'img_link_detail' => 'promo-detail-1.jpg'
            ],
            [
                'category' => 'Promos',
                'layout' => 'default',
                'title' => '3 Pizzas for P699',
                'price' => '499.00',
                'short_des' => 'Get 3 9” NY-Style Original Crust Pizzas for only 699',
                'long_des' => [
                    'Get two pizzas for only P499! Choose from Pepperoni, Hawaiian, Garden Special, 
                    BBQ Chicken, or Manhattan Meatlovers for your first 9" pizza, and get a 9" Cheese 
                    pizza with your order!',
                    'Add P50 to choose the flavor of your second 9" pizza or get a 1.5L Mountain Dew/Pepsi 
                    soda with your order!',
                    'Exclusively available in NY-Style Original Crust. Promo is available from January 1 
                    to December 31, 2021 only. Promo is valid for dine-in, take-out, Curbside® pick-up, 
                    drive-thru and delivery.',
                    'Per DTI Fair Trade Permit No. FTEB-108644 Series of 2020',
                ],
                'img_link' => 'promo-3.jpg',
                'img_link_detail' => 'promo-detail-1.jpg'
            ],
            [
                'category' => 'Promos',
                'layout' => 'default',
                'title' => 'World Pizza Day',
                'price' => '499.00',
                'short_des' => 'Buy 1 get 1 on all 12” pizzas',
                'long_des' => [
                    'Get two pizzas for only P499! Choose from Pepperoni, Hawaiian, Garden Special, 
                    BBQ Chicken, or Manhattan Meatlovers for your first 9" pizza, and get a 9" Cheese 
                    pizza with your order!',
                    'Add P50 to choose the flavor of your second 9" pizza or get a 1.5L Mountain Dew/Pepsi 
                    soda with your order!',
                    'Exclusively available in NY-Style Original Crust. Promo is available from January 1 
                    to December 31, 2021 only. Promo is valid for dine-in, take-out, Curbside® pick-up, 
                    drive-thru and delivery.',
                    'Per DTI Fair Trade Permit No. FTEB-108644 Series of 2020',
                ],
                'img_link' => 'promo-4.jpg',
                'img_link_detail' => 'promo-detail-1.jpg'
            ],
        ];
    endif;

    if(is_yc()):
        $content = array(
            'static' => array(
                'product-content-title' => 'Explore Promos',
                'panel-detail-title-1' => 'PROMO DETAILS',
                'panel-detail-title-3' => 'NY-STYLE ORIGINAL CRUST PIZZA',
                'panel-detail-title-4' => 'Pasta',
                'panel-detail-title-5' => 'Group Bundles',
                'panel-detail-title-6' => 'Chicken',
                'panel-detail-title-7' => 'Solos',
                'panel-detail-title-8' => 'Desserts & Beverages',
                'legend-label' => 'Legend:',
                'legend-1' => 'Bestsellers',
                'legend-2' => 'Spicy',
                'legend-3' => 'New',
                'legend-4' => 'Limited',
                'price-label' => 'Total Price: P',
                'empty-layout' => 'Empty No Layout'
            ),
            'buttons' => array(
                'add-cart' => 'Add to Cart',
                'back-to-promos' => 'Back to Promos'
            ),
            'images' => array(
                'banner-desktop' => 'pizza-hero-1.png',
                'banner-mobile' => 'pizza-hero-1-mb.png'
            ),
            'link' => array(
                'sign-up' => 'https://customer.maxsgroupinc.com/subscription/home/dkk4os'
            ),
            'dynamic' => array(
            ),
        );
        $groupBundles = [
            [
                'php_src' => 'order-select.php',
                'img' => 'product-detail-squadstuff-l.jpg',
                'name' => 'Squad Stuff L',
                'price' => 'starts at P100',
            ],
            [
                'php_src' => 'order-select.php',
                'img' => 'product-detail-squadstuff-xl.jpg',
                'name' => 'Squad Stuff XL',
                'price' => 'starts at P100',
            ],
            [
                'php_src' => 'order-select.php',
                'img' => 'product-detail-squadstuff-xxl.jpg',
                'name' => 'Squad Stuff XXL',
                'price' => 'starts at P100',
            ],
        ];

        $solos = [
            [
                'php_src' => 'order-select.php',
                'img' => 'product-detail-mymix.jpg',
                'name' => 'My Mix',
                'price' => 'starts at P100',
            ]
        ];
        
        $category = [
            [
                'name' => 'Promos',
                'layout' => 'default'
            ],
            [
                'name' => 'Bestsellers',
                'layout' => 'empty'
            ],
            [
                'name' => 'NY-Style Original Crust',
                'layout' => 'pizza'
            ],
            [
                'name' => 'NY-Style Thin Crust',
                'layout' => 'empty'
            ],
            [
                'name' => 'Dear Darla',
                'layout' => 'empty'
            ],
            [
                'name' => 'Chicken',
                'layout' => 'chicken'
            ],
            [
                'name' => 'Pasta',
                'layout' => 'pasta'
            ],
            [
                'name' => 'Group Bundles',
                'layout' => 'group-bundles'
            ],
            [
                'name' => 'Party Trays',
                'layout' => 'empty'
            ],
            [
                'name' => 'Solos',
                'layout' => 'solos'
            ],
            [
                'name' => 'Desserts & Beverages',
                'layout' => 'desserts-beverages'
            ],
            [
                'name' => 'Ready-To-Cook',
                'layout' => 'empty'
            ],
        ];
        $products = [
            [
                'category' => 'Promos',
                'layout' => 'default',
                'title' => '2 Pizzas for P499',
                'price' => '499.00',
                'short_des' => 'Get two pizzas for only P499! Choose from our 9" pizzas',
                'long_des' => [
                    'Get two pizzas for only P499! Choose from Pepperoni, Hawaiian, Garden Special, 
                    BBQ Chicken, or Manhattan Meatlovers for your first 9" pizza, and get a 9" Cheese 
                    pizza with your order!',
                    'Add P50 to choose the flavor of your second 9" pizza or get a 1.5L Mountain Dew/Pepsi 
                    soda with your order!',
                    'Exclusively available in NY-Style Original Crust. Promo is available from January 1 
                    to December 31, 2021 only. Promo is valid for dine-in, take-out, Curbside® pick-up, 
                    drive-thru and delivery.',
                    'Per DTI Fair Trade Permit No. FTEB-108644 Series of 2020',
                ],
                'img_link' => 'promo-1.jpg',
                'img_link_detail' => 'promo-detail-1.jpg'
            ],
            [
                'category' => 'Promos',
                'layout' => 'default',
                'title' => '2-in-1 Welcome to ‘21',
                'price' => '899.00',
                'short_des' => 'Get a 2-in-1 Original Crust, pizza, wings, and soda!',
                'long_des' => [
                    'Get two pizzas for only P499! Choose from Pepperoni, Hawaiian, Garden Special, 
                    BBQ Chicken, or Manhattan Meatlovers for your first 9" pizza, and get a 9" Cheese 
                    pizza with your order!',
                    'Add P50 to choose the flavor of your second 9" pizza or get a 1.5L Mountain Dew/Pepsi 
                    soda with your order!',
                    'Exclusively available in NY-Style Original Crust. Promo is available from January 1 
                    to December 31, 2021 only. Promo is valid for dine-in, take-out, Curbside® pick-up, 
                    drive-thru and delivery.',
                    'Per DTI Fair Trade Permit No. FTEB-108644 Series of 2020',
                ],
                'img_link' => 'promo-2.jpg',
                'img_link_detail' => 'promo-detail-1.jpg'
            ],
            [
                'category' => 'Promos',
                'layout' => 'default',
                'title' => '3 Pizzas for P699',
                'price' => '499.00',
                'short_des' => 'Get 3 9” NY-Style Original Crust Pizzas for only 699',
                'long_des' => [
                    'Get two pizzas for only P499! Choose from Pepperoni, Hawaiian, Garden Special, 
                    BBQ Chicken, or Manhattan Meatlovers for your first 9" pizza, and get a 9" Cheese 
                    pizza with your order!',
                    'Add P50 to choose the flavor of your second 9" pizza or get a 1.5L Mountain Dew/Pepsi 
                    soda with your order!',
                    'Exclusively available in NY-Style Original Crust. Promo is available from January 1 
                    to December 31, 2021 only. Promo is valid for dine-in, take-out, Curbside® pick-up, 
                    drive-thru and delivery.',
                    'Per DTI Fair Trade Permit No. FTEB-108644 Series of 2020',
                ],
                'img_link' => 'promo-3.jpg',
                'img_link_detail' => 'promo-detail-1.jpg'
            ],
            [
                'category' => 'Promos',
                'layout' => 'default',
                'title' => 'World Pizza Day',
                'price' => '499.00',
                'short_des' => 'Buy 1 get 1 on all 12” pizzas',
                'long_des' => [
                    'Get two pizzas for only P499! Choose from Pepperoni, Hawaiian, Garden Special, 
                    BBQ Chicken, or Manhattan Meatlovers for your first 9" pizza, and get a 9" Cheese 
                    pizza with your order!',
                    'Add P50 to choose the flavor of your second 9" pizza or get a 1.5L Mountain Dew/Pepsi 
                    soda with your order!',
                    'Exclusively available in NY-Style Original Crust. Promo is available from January 1 
                    to December 31, 2021 only. Promo is valid for dine-in, take-out, Curbside® pick-up, 
                    drive-thru and delivery.',
                    'Per DTI Fair Trade Permit No. FTEB-108644 Series of 2020',
                ],
                'img_link' => 'promo-4.jpg',
                'img_link_detail' => 'promo-detail-1.jpg'
            ],
        ];
    endif;

    if(is_max()):
        $content = array(
            'static' => array(
                'product-content-title' => 'Promos & Buddles',
                'panel-detail-title-1' => 'PROMO DETAILS',
                'panel-detail-title-2' => 'Bestsellers',
                'panel-detail-title-3' => 'Max’s Fried Chicken®',
                'panel-detail-title-4' => 'Pancit, Lumpia, & Rice',
                'panel-detail-title-5' => 'Max’s Merienda',
                'panel-detail-title-6' => 'Group Sets',
                'panel-detail-title-7' => 'Desserts & Beverages',
                'panel-detail-title-8' => 'Max’s Merienda',
                'panel-detail-title-9' => 'Yellow Cab',
                'legend-label' => 'Legend:',
                'legend-1' => 'Bestsellers',
                'legend-2' => 'Spicy',
                'legend-3' => 'New',
                'legend-4' => 'Limited',
                'price-label' => '₱ ',
                'empty-layout' => 'Empty No Layout'
            ),
            'buttons' => array(
                'add-cart' => 'Order Now',
                'back-to-promos' => 'Back to Promos'
            ),
            'images' => array(
                'banner-desktop' => 'pizza-hero-1.png',
                'banner-mobile' => 'pizza-hero-1-mb.png'
            ),
            'link' => array(
                'sign-up' => 'https://customer.maxsgroupinc.com/subscription/home/dkk4os'
            ),
            'dynamic' => array(
            ),
        );
        $groupBundles = [
            [
                'name' => 'Sinigang Na Hipon',
                'price' => '1,035.00',
                'img' => 'product/max-promo-product-1.svg',
            ],
            [
                'name' => 'Sinigang Na Hipon',
                'price' => '1,035.00',
                'img' => 'product/max-promo-product-1.svg',
            ],
            [
                'name' => 'Sinigang Na Hipon',
                'price' => '1,035.00',
                'img' => 'product/max-promo-product-1.svg',
            ],
        ];

        $solos = [
            [
                'php_src' => 'order-select.php',
                'name' => 'Sinigang Na Hipon',
                'price' => '1,035.00',
                'img' => 'product/max-promo-product-1.svg',
            ]
        ];
        $category = [
            [
                'name' => 'Promos',
                'layout' => 'default'
            ],
            [
                'name' => 'Bestsellers',
                'layout' => 'bestseller'
            ],
            [
                'name' => 'Max’s Fried Chicken®',
                'layout' => 'pizza'
            ],
            [
                'name' => 'Solo Meals',
                'layout' => 'empty'
            ],
            [
                'name' => 'Ruby’s Favorites',
                'layout' => 'empty'
            ],
            [
                'name' => 'Group Sets',
                'layout' => 'chicken'
            ],
            [
                'name' => 'Pancit, Lumpia, & Rice',
                'layout' => 'pasta'
            ],
            [
                'name' => 'Max’s Merienda',
                'layout' => 'group-bundles'
            ],
            [
                'name' => 'Max’s Corner Bakery',
                'layout' => 'empty'
            ],
            [
                'name' => 'Desserts & Beverages',
                'layout' => 'solos'
            ],
            [
                'name' => 'Yellow Cab',
                'layout' => 'yellow-cab'
            ],
            [
                'name' => 'Ready-To-Cook',
                'layout' => 'empty'
            ],
        ];
        $promos = [
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
        ];

        $yellowCab = [
            [
                'php_src' => 'product-mymix.php',
                'img' => 'product-detail-mymix.jpg',
                'name' => 'My Mix',
                'price' => 'starts at P100',
            ]
        ];
    endif;


    $pizza = [
        [
            'name' => 'Pepperoni',
            'price' => '315.00',
            'img_link' => 'pizza-1.png',
        ],
        [
            'name' => 'Hawaiian',
            'price' => '315.00',
            'img_link' => 'pizza-2.png',
        ],
        [
            'name' => 'BBQ Chicken',
            'price' => '735.00',
            'img_link' => 'pizza-3.png',
        ],
        [
            'name' => 'Garden Special',
            'price' => '315.00',
            'img_link' => 'pizza-4.png',
        ],
        [
            'name' => 'Garden Special',
            'price' => '315.00',
            'img_link' => 'pizza-5.png',
        ],
        [
            'name' => 'Roasted Garlic & Shrimp',
            'price' => '315.00',
            'img_link' => 'pizza-6.png',
        ],
        [
            'name' => '#4 Cheese',
            'price' => '315.00',
            'img_link' => 'pizza-7.png',
        ],
        [
            'name' => 'Patty Melt',
            'price' => '315.00',
            'img_link' => 'pizza-8.png',
        ],
        [
            'name' => 'Four Seasons All Meat',
            'price' => '315.00',
            'img_link' => 'pizza-9.png',
        ],
        [
            'name' => 'Four Seasons Original',
            'price' => '315.00',
            'img_link' => 'pizza-10.png',
        ],
        [
            'name' => 'New York’s Finest',
            'price' => '315.00',
            'img_link' => 'pizza-11.png',
        ],
    ];

    $pasta = [
        [
            'name' => 'Charlie Chan®',
            'price' => '315.00',
            'img_link' => 'pasta-1.png',
        ],
    ];

    $chicken = [
        [
            'name' => 'Wings',
            'price' => '315.00',
            'img_link' => 'wings-1.png',
        ],
    ];

    $desertsBeverages = [
        [
            'name' => 'Ice Cream',
            'price' => '315.00',
            'img_link' => 'desert-1.png',
        ],
        [
            'name' => 'Soda 1.5 L',
            'price' => '315.00',
            'img_link' => 'desert-2.png',
        ],
        [
            'name' => 'Sola Iced Tea',
            'price' => '315.00',
            'img_link' => 'desert-3.png',
        ],
        [
            'name' => 'House Blend Iced Tea',
            'price' => '315.00',
            'img_link' => 'desert-4.png',
        ],
    ];

    $fried_chicken = [
        [
            'name' => 'Whole Fried Chicken',
            'price' => '1,035.00',
            'img_link' => 'max-fried-chicken-1.svg',
            'price_strike' => '1,000.00'
        ],
        [
            'name' => 'Crispy Pata',
            'price' => '1,035.00',
            'img_link' => 'max-crispy-pata.svg',
        ],
        [
            'name' => 'Chicken Pancit Canton',
            'price' => '1,035.00',
            'img_link' => 'max-pancit-canton.svg',
        ],
        [
            'name' => 'Chicken Pancit Canton',
            'price' => '1,035.00',
            'img_link' => 'max-lumpia.svg',
        ],
        [
            'name' => 'Sizzling Tofu',
            'price' => '1,035.00',
            'img_link' => 'max-tofu.svg',
        ],
        [
            'name' => 'Fresh Lumpiang Ubod',
            'price' => '1,035.00',
            'img_link' => 'max-lumpiang-ubod.svg',
        ],
    ];
?>

<section id="product" class="c-product <?= is_max() ? 'js-max' : null; ?>">
    <div class="o-container">
        
        <div class="c-product-content [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r ]">
            <ul class="js-tabSidebar c-product-content_nav [ u-df-mb u-df-mb-fd-r u-df-tb-fd-c ]">
                <?php foreach($category as $key => $value): ?>
                <li class="<?= $key == 0 ? 'active' : '' ?>" data-trigger-layout="<?= $value['layout'] ?>"><?= $value['name'] ?></li>
                
                <?php endforeach;?>
            </ul>
            <div class="c-product-content_panel <?php if(is_yc()):?>for-default<?php endif;?><?php if(is_max() || is_ph()):?>for-standard [ u-df-mb-fd-c ]<?php endif;?> active" data-target-layout="default">

                <?php if(is_max()):?>
                    <div class="c-product-content_panel--legend [ u-df-mb u-df-mb-fd-c u-df-dt-fd-r u-df-dt-ai-e ]">
                        <h3 class="h3 <?php if(is_yc() || is_max()):?>o-header-title-slant<?php endif;?>"><?= $content['static']['product-content-title']; ?></h3>
                    </div>
                    <div class="c-product-content_panel--detail">
                        <?php
                            $dataType = 'fried_chicken';
                            $dataItem = $promos;
                            include "c-explore-cards.php"
                        ?>
                    </div>
                <?php endif;?>
            
                <?php if(is_yc()):?>
                <div class="c-product-content_panel--list active" data-catcher="promos-layout">
                    <h3 class="h3"><?= $content['static']['product-content-title']; ?></h3>
                    <ul class="explore-list [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-dt-fd-c u-df-mb-w ]">
                        <?php foreach($products as $key => $value): ?>
                        <li class="pointer-hand [ u-df-mb ]" >
                            <figure data-tigger-back="detail-layout" data-back="figure">
                                <img src="dist/images/product/<?= $value['img_link'] ?>" alt="">
                            </figure>
                            <div class="explore-list-detail [ u-df-mb u-df-mb-fd-c u-df-mb-ai-s ]">
                                <h5 class="h5">
                                    <a href="javascript:void(0)" class="pointer-hand" data-tigger-back="detail-layout"><?= $value['title'] ?></a>
                                </h5>
                                <span>P<?= $value['price'] ?></span>
                                <p><?= $value['short_des'] ?></p>
                                <a href="default-order.php" class="o-button pointer-hand">
                                    <span><?= $content['buttons']['add-cart']; ?></span>
                                    <i class="ic-cart"></i>
                                </a>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="c-product-content_panel--detail " data-catcher="detail-layout">
                    <button class="o-button ic-front o-button-white" data-tigger-back="promos-layout">
                        <i class="ic-back-arrow"></i>
                        <span><?= $content['buttons']['back-to-promos']; ?></span>
                    </button>
                    <h3 class="h3"><?= $content['static']['panel-detail-title-1']; ?></h3>
                    <div class="category-content [ u-df-mb u-df-mb-w ]">
                        <div class="category-content-titles">
                            <h4 class="h4"><?= $products[0]['title'] ?></h4>
                            <span><?= $content['static']['price-label']; ?><span><?= $products[0]['price']?></span></span>
                        </div>
                        <div class="category-content-ctas">
                            <a href="default-order.php" class="o-button pointer-hand">
                                <span><?= $content['buttons']['add-cart']; ?></span>
                                <i class="ic-cart"></i>
                            </a>
                        </div>
                        <div class="category-content-details">
                            <figure>
                                <img src="dist/images/product/<?= $products[0]['img_link_detail']?>" alt="">
                            </figure>
                            <div class="category-content-details_descriptions">
                                <?php foreach($products[0]['long_des'] as $key => $value): ?>
                                <p><?= $value ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>
            </div>
            <div class="c-product-content_panel for-standard [ u-df-mb-fd-c ]" data-target-layout="pizza">
                <div class="c-product-content_panel--legend [ u-df-mb u-df-mb-fd-c u-df-dt-fd-r u-df-dt-ai-e ]">
                    <h3 class="h3 <?php if(is_yc() || is_max()):?>o-header-title-slant<?php endif;?>"><?= $content['static']['panel-detail-title-3']; ?></h3>
                    <?php if(is_yc()):?>
                        <div class="c-product-content_panel--legend__content [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-dt-jc-fe ]">
                            <h6 class="h6"><?= $content['static']['legend-label']; ?></h6>
                            <ul class="[ u-df-mb u-df-mb-w ]">
                                <li><span class="ic-bestsellers"><?= $content['static']['legend-1']; ?></span></li>
                                <li><span class="ic-spicy"><?= $content['static']['legend-2']; ?></span></li>
                                <li><span class="ic-new"><?= $content['static']['legend-3']; ?></span></li>
                                <li><span class="ic-limited"><?= $content['static']['legend-4']; ?></span></li>
                            </ul>
                        </div>
                    <?php endif;?>
                    <?php if(is_ph()):?>
                        <div class="c-product-content_panel--legend__content [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-dt-jc-fe ]">
                            <h6 class="h6"><?= $content['static']['legend-label']; ?></h6>
                            <ul class="[ u-df-mb u-df-mb-w ]">
                                <li><span class="ph-specialty"><?= $content['static']['legend-1']; ?></span></li>
                            </ul>
                        </div>
                    <?php endif;?>
                </div>
                <div class="c-product-content_panel--detail">
                    <?php
                        if(is_ph()):
                            $dataType = 'pizza';
                            $dataItem = $pizza;
                        endif;

                        if(is_max()):
                            $dataType = 'fried_chicken';
                            $dataItem = $fried_chicken;
                        endif;
                        include "c-explore-cards.php"
                    ?>
                </div>
            </div>

            <div class="c-product-content_panel for-standard [ u-df-mb-fd-c ]" data-target-layout="bestseller">
                <div class="c-product-content_panel--legend [ u-df-mb u-df-mb-fd-c u-df-dt-fd-r u-df-dt-ai-e ]">
                    <h3 class="h3 o-header-title-slant"><?= $content['static']['panel-detail-title-2']; ?></h3>
                </div>
                <div class="c-product-content_panel--detail">
                    <?php
                        if(is_ph()):
                            $dataType = 'pizza';
                            $dataItem = $pizza;
                        endif;

                        if(is_max()):
                            $dataType = 'fried_chicken';
                            $dataItem = $fried_chicken;
                        endif;

                        include "c-explore-cards.php"
                    ?>
                </div>
            </div>

            <div class="c-product-content_panel for-standard for-other-item [ u-df-mb-fd-c ]" data-target-layout="pasta">
                <div class="c-product-content_panel--legend [ u-df-mb u-df-mb-fd-c u-df-dt-fd-r u-df-dt-ai-e ]">
                    <h3 class="h3 <?php if(is_yc() || is_max()):?>o-header-title-slant<?php endif;?>"><?= $content['static']['panel-detail-title-4']; ?></h3>
                </div>
                <div class="c-product-content_panel--detail">
                    <?php
                        if(is_ph()):
                            $dataType = 'fried_chicken';
                            $dataItem = $pasta;
                        endif;

                        if(is_max()):
                            $dataType = 'fried_chicken';
                            $dataItem = $fried_chicken;
                        endif;
                        include "c-explore-cards.php"
                    ?>
                </div>
            </div>

            <div class="c-product-content_panel for-standard for-other-item [ u-df-mb-fd-c ]" data-target-layout="group-bundles">
                <div class="c-product-content_panel--legend [ u-df-mb u-df-mb-fd-c u-df-dt-fd-r u-df-dt-ai-e ]">
                    <h3 class="h3 <?php if(is_yc() || is_max()):?>o-header-title-slant<?php endif;?>"><?= $content['static']['panel-detail-title-5']; ?></h3>
                </div>
                <div class="c-product-content_panel--detail">
                    <div class="c-explore-cards [ u-df-mb u-df-mb-w ]">
                        <?php foreach($groupBundles as $key => $value): ?>
                            <a href="<?= $value['php_src'] ?>" class="c-explore-cards-card pointer-hand">
                                <div class="c-explore-cards-card_item [ u-df-mb u-df-mb-fd-c ]">
                                    <figure>
                                        <img src="dist/images/<?= $value['img'] ?>" alt="">
                                    </figure>
                                    <div class="c-explore-cards-card_item--detail [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                                        <h6 class="h6"><?= $value['name'] ?></h6>
                                        <span><?= $value['price'] ?></span>
                                        <button class="o-button pointer-hand">
                                            <span><?= $content['buttons']['add-cart']; ?></span>
                                            <i class="ic-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <div class="c-product-content_panel for-standard for-other-item [ u-df-mb-fd-c ]" data-target-layout="chicken">
                <div class="c-product-content_panel--legend [ u-df-mb u-df-mb-fd-c u-df-dt-fd-r u-df-dt-ai-e ]">
                    <h3 class="h3 <?php if(is_yc() || is_max()):?>o-header-title-slant<?php endif;?>"><?= $content['static']['panel-detail-title-6']; ?></h3>
                </div>
                <div class="c-product-content_panel--detail">
                    <?php
                        $dataType = 'chicken';
                        $dataItem = $chicken;
                        include "c-explore-cards.php"
                    ?>
                </div>
            </div>

            <div class="c-product-content_panel for-standard for-other-item [ u-df-mb-fd-c ]" data-target-layout="solos">
                <div class="c-product-content_panel--legend [ u-df-mb u-df-mb-fd-c u-df-dt-fd-r u-df-dt-ai-e ]">
                    <h3 class="h3 <?php if(is_yc() || is_max()):?>o-header-title-slant<?php endif;?>"><?= $content['static']['panel-detail-title-7']; ?></h3>
                </div>
                <div class="c-product-content_panel--detail">
                    <div class="c-explore-cards [ u-df-mb u-df-mb-w ]">
                        <?php foreach($solos as $key => $value): ?>
                            <a href="<?= $value['php_src'] ?>" class="c-explore-cards-card pointer-hand">  
                                <div class="c-explore-cards-card_item [ u-df-mb u-df-mb-fd-c ]">
                                    <figure>
                                        <img src="dist/images/<?= $value['img'] ?>" alt="">
                                    </figure>
                                    <div class="c-explore-cards-card_item--detail [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                                        <h6 class="h6"><?= $value['name'] ?></h6>
                                        <span><?= $value['price'] ?></span>
                                        <button class="o-button pointer-hand">
                                            <span><?= $content['buttons']['add-cart']; ?></span>
                                            <i class="ic-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="c-product-content_panel for-standard for-other-item [ u-df-mb-fd-c ]" data-target-layout="yellow-cab">
                <div class="c-product-content_panel--legend [ u-df-mb u-df-mb-fd-c u-df-dt-fd-r u-df-dt-ai-e ]">
                    <h3 class="h3 <?php if(is_yc() || is_max()):?>o-header-title-slant<?php endif;?>"><?= $content['static']['panel-detail-title-9']; ?></h3>
                </div>
                <div class="c-product-content_panel--detail">
                    <div class="c-explore-cards [ u-df-mb u-df-mb-w ]">
                        <?php foreach($yellowCab as $key => $value): ?>
                            <a href="<?= $value['php_src'] ?>" class="c-explore-cards-card pointer-hand">  
                                <div class="c-explore-cards-card_item [ u-df-mb u-df-mb-fd-c ]">
                                    <figure>
                                        <img src="dist/images/<?= $value['img'] ?>" alt="">
                                    </figure>
                                    <div class="c-explore-cards-card_item--detail [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                                        <h6 class="h6"><?= $value['name'] ?></h6>
                                        <span><?= $value['price'] ?></span>
                                        <button class="o-button pointer-hand">
                                            <span><?= $content['buttons']['add-cart']; ?></span>
                                            <i class="ic-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
           
            <div class="c-product-content_panel for-standard for-other-item [ u-df-mb-fd-c ]" data-target-layout="desserts-beverages">
                <div class="c-product-content_panel--legend [ u-df-mb u-df-mb-fd-c u-df-dt-fd-r u-df-dt-ai-e ]">
                    <h3 class="h3 <?php if(is_yc() || is_max()):?>o-header-title-slant<?php endif;?>"><?= $content['static']['panel-detail-title-8']; ?></h3>
                </div>
                <div class="c-product-content_panel--detail">
                    <?php
                        $dataType = 'desserts-beverages';
                        $dataItem = $desertsBeverages;
                        include "c-explore-cards.php"
                    ?>
                </div>
            </div>

            
            <div class="c-product-content_panel for-empty " data-target-layout="empty"><?= $content['static']['empty-layout']; ?></div>
                        
        </div>
    </div>
</section>

