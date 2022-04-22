

<?php include 'src/includes/header.php';?>
<?php
    if(is_ph()):
        $content = array(
            'static' => array(
                'store-title-desktop' => 'OPEN STORES',
                'store-title-mobile' => 'Available Stores',
                'sort-label' => 'Sort',
                'search-label' => 'Search',
                'search-placeholder' => 'Type number here',
                'breadcrumb-1' => 'Store List',
                'hotline-title' => 'WANT TO ORDER THROUGH OUR HOTLINES?'
            ),
            'buttons' => array(
                'back' => 'Back to Homepage'
            ),
            'images' => array(
                'home-img' => 'ic_home.svg'
            ),
        );
    endif;

    if(is_max()):
        $content = array(
            'static' => array(
                'store-title-desktop' => 'Open Stores',
                'store-title-mobile' => 'Open Stores',
                'sort-label' => 'Sort',
                'search-label' => 'Search',
                'search-placeholder' => 'Type a store name or location',
                'breadcrumb-1' => 'Store List',
                'hotline-title' => 'Want to order through our hotlines?'
            ),
            'buttons' => array(
                'back' => 'Back to Home'
            ),
            'images' => array(
                'home-img' => 'ic-max-home-red.svg'
            ),
        );
    endif;

    if(is_ph()):
        $hotlines = [
            [
                'telLink' => 'tel:(02) 8-789-9999',
                'name' => 'metro manila',
                'telLabel' => '(02) 8-789-9999'
            ],
            [
                'telLink' => 'tel:(074) 4442-9999',
                'name' => 'baguio',
                'telLabel' => '(074) 4442-9999'
            ],
            [
                'telLink' => 'tel:(046) 416-9999',
                'name' => 'cavite',
                'telLabel' => '(046) 416-9999'
            ],
            [
                'telLink' => 'tel:(049) 502-9999',
                'name' => 'laguna',
                'telLabel' => '(049) 502-9999'
            ],
            [
                'telLink' => 'tel:(043) 723-2222',
                'name' => 'batangas',
                'telLabel' => '(043) 723-2222'
            ],
            [
                'telLink' => 'tel:(032) 254-1111',
                'name' => 'cebu',
                'telLabel' => '(032) 254-1111'
            ],
        ];
    endif;

    if(is_max()):
        $hotlines = [
            [
                'telLink' => 'tel:(+632) 888-79000',
                'telLabel' => '(+632) 888-79000'
            ],
            [
                'telLink' => 'tel:(+63918) 8073591',
                'telLabel' => '(+63918) 8073591'
            ],
            [
                'telLink' => 'tel:(+63918) 8073590',
                'telLabel' => '(+63918) 8073590'
            ],
            [
                'telLink' => 'tel:(+63918) 8038306',
                'telLabel' => '(+63918) 8038306'
            ]
        ];
    endif;

    if(is_ph()):
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
                'selectValue' => 'Curbside', 
            ],
        ];
    endif;

    if(is_max()):
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
    endif;
    
    if(is_ph()):
        $store_list = [
            [
                'search' => 'Albay -  Gregorian Mall, Legazpi',
                'filter' => '["Dine-in","Take out","Delivery"]',
                'store' => 'Albay -  Gregorian Mall, Legazpi',
                'time' => '9:00 AM - 8:00 PM',
                'filterLabel' => 'Dine-in, Take out, Delivery',
                'contact' => [
                                [
                                    'telLink' => 'tel:(052) 284-3377',
                                    'telLabel' => '(052) 284-3377'
                                ]
                ]
            ],
            [
                'search' => 'Bacolod -  Ayala Capital Central',
                'filter' => '["Dine-in","Take out"]',
                'store' => 'Bacolod -  Ayala Capital Central',
                'time' => '12:00 PM - 9:00 PM',
                'filterLabel' => 'Dine-in, Take out',
                'contact' => [
                                [
                                    'telLink' => 'tel:(034) 700-0999',
                                    'telLabel' => '(034) 700-0999'
                                ]
                ]
            ],
            [
                'search' => 'Baguio -  Baguio City Hall',
                'filter' => '["Dine-in","Take out"]',
                'store' => 'Baguio -  Baguio City Hall',
                'time' => '10:00 AM - 7:00 PM',
                'filterLabel' => 'Dine-in, Take out',
                'contact' => [
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Baguio -  Baguio-Ayala Land Technohub',
                'filter' => '["Dine-in","Take out","Delivery"]',
                'store' => 'Baguio -  Baguio-Ayala Land Technohub',
                'time' => '9:00 AM - 5:00 PM',
                'filterLabel' => 'Dine-in, Take out, Delivery',
                'contact' => [
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Lipa Highway',
                'filter' => '["Dine-in","Take out","Delivery"]',
                'store' => 'Batangas - Lipa Highway',
                'time' => '9:00 AM - 8:00 PM',
                'filterLabel' => 'Dine-in, Take out, Delivery',
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
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Lipa Town Center',
                'filter' => '["Dine-in","Take out","Delivery"]',
                'store' => 'Batangas - Lipa Town Center',
                'time' => '9:00 AM - 8:00 PM',
                'filterLabel' => 'Dine-in, Take out, Delivery',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 404-2081',
                                    'telLabel' => '(043) 404-2081'
                                ],
                                [
                                    'telLink' => 'tel:+6391 7541-7885',
                                    'telLabel' => '+6391 7541-7885'
                                ],
                                [
                                    'telLink' => 'tel:+63919 003-4360',
                                    'telLabel' => '+63919 003-4360'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
            [
                'search' => 'Batangas - Pallocan West, Batangas City',
                'filter' => '["Take out","Delivery","Curbside"]',
                'store' => 'Batangas - Pallocan West, Batangas City',
                'time' => '9:00 AM - 10:00 PM',
                'filterLabel' => 'Take out, Delivery, Curbside',
                'contact' => [
                                [
                                    'telLink' => 'tel:(043) 727-5975',
                                    'telLabel' => '(043) 727-5975'
                                ],
                                [
                                    'telLink' => 'tel:+63977 801-7690',
                                    'telLabel' => '+63977 801-7690'
                                ],
                                [
                                    'telLink' => 'tel:(074) 661-2536',
                                    'telLabel' => '(074) 661-2536'
                                ]
                ]
            ],
        ];
    endif;

    if(is_max()):
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
    endif;
?>
<div class="main-wrapper">
    <section class="c-standard-layout c-store-list">
        <div class="c-breadcrumbs">
            <div class="o-container">
                <ul class="[ u-df-mb ]">
                    <li><a href="/"><img src="dist/images/<?= $content['images']['home-img']; ?>" alt=""></a></li>
                    <li><a href="/"><?= $content['static']['breadcrumb-1']; ?></a></li>
                </ul>
                <button class="o-button ic-front o-button-white" data-tigger-back="promos-layout">
                    <i class="ic-back-arrow"></i>
                    <span><?= $content['buttons']['back']; ?></span>
                </button>
            </div>
        </div>
        <div class="o-container">
            <div class="c-standard-layout-content c-store-list-hotline">
                <div class="c-standard-layout-content_display [ u-df-mb ]">
                    <h3 class="h3 c-ordernow-title"><?= $content['static']['hotline-title']; ?></h3>
                </div>
                <div class="c-store-list-hotline_panel [ u-df-mb u-df-mb-w u-df-mb-fd-c u-df-tb-fd-r ]">
                    <?php foreach($hotlines as $key => $value): ?>
                        <a href="<?= $value['telLink'] ?>" class="c-store-list-hotline_panel--card">
                            <div class="c-store-list-hotline_panel--card__detail">
                                <?php if(is_ph()):?><h5 class="h5"><?= $value['name'] ?></h6><?php endif;?>
                                <span><?= $value['telLabel'] ?></span>
                            </div>
                        </a>
                    <?php endforeach; ?>

                    <!-- <a href="tel:(02) 8-789-9999" class="c-store-list-hotline_panel--card">
                        <div class="c-store-list-hotline_panel--card__detail">
                            <h5 class="h5">metro manila</h6>
                            <span>(02) 8-789-9999</span>
                        </div>
                    </a>
                    <a href="tel:(074) 4442-9999" class="c-store-list-hotline_panel--card">
                        <div class="c-store-list-hotline_panel--card__detail">
                            <h5 class="h5">baguio</h6>
                            <span>(074) 4442-9999</span>
                        </div>
                    </a>
                    <a href="tel:(046) 416-9999" class="c-store-list-hotline_panel--card">
                        <div class="c-store-list-hotline_panel--card__detail">
                            <h5 class="h5">cavite</h6>
                            <span>(046) 416-9999</span>
                        </div>
                    </a>
                    <a href="tel:(049) 502-9999" class="c-store-list-hotline_panel--card">
                        <div class="c-store-list-hotline_panel--card__detail">
                            <h5 class="h5">laguna</h6>
                            <span>(049) 502-9999</span>
                        </div>
                    </a>
                    <a href="tel:(043) 723-2222" class="c-store-list-hotline_panel--card">
                        <div class="c-store-list-hotline_panel--card__detail">
                            <h5 class="h5">batangas</h6>
                            <span>(043) 723-2222</span>
                        </div>
                    </a>
                    <a href="tel:(032) 254-1111" class="c-store-list-hotline_panel--card">
                        <div class="c-store-list-hotline_panel--card__detail">
                            <h5 class="h5">cebu</h6>
                            <span>(032) 254-1111</span>
                        </div>
                    </a> -->
                </div>
            </div>
            <div class="c-standard-layout-content c-store-list-stores">
                <div class="c-standard-layout-content_display [ u-df-mb u-df-mb-w ]">
                    <div class="c-store-list-stores_header">
                        <h3 class="h3 c-ordernow-title [ u-dnc-mb u-dbc-tb ]"><?= $content['static']['store-title-desktop']; ?></h3>
                        <h3 class="h3 c-ordernow-title [ u-dnc-tb u-dbc-mb ]"><?= $content['static']['store-title-mobile']; ?></h3>
                        <div class="o-divider [ u-dnc-mb u-dbc-tb ]"></div>
                    </div>
                    <form action="" class="[ u-df-mb u-df-mb-fd-c u-df-tb-fd-r ]">
                        <div class="o-form-group">
                            <label for=""><?= $content['static']['search-label']; ?></label>
                            <div class="o-form-group_standard">
                                <input type="text" name="search" class="o-form-group_input" placeholder="<?= $content['static']['search-placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" data-search="store">
                            </div>
                        </div>
                        <div class="o-form-group o-form-dropdown">
                            <label for=""><?= $content['static']['sort-label']; ?></label>
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

                                    <!-- <li class="[ u-df-mb ]" data-select-value="A-Z">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">A-Z</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Z-A">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Z-A</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Delivery">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Delivery</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Dine-in">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Dine-in</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Take-out">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Take-out</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Curbside">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">
                                                Curbside
                                                <span></span>
                                            </h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </form>
                    <div class="c-store-list-stores_contacts" data-catcher="store-list">

                        <?php foreach($store_list as $key => $value): ?>
                            <div 
                                class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                                data-catcher-search="<?= $value['search'] ?>"
                                data-store-filter=' <?= $value['filter'] ?>'
                            >
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

                        <!-- <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Albay -  Gregorian Mall, Legazpi"
                            data-store-filter='["Dine-in","Take out","Delivery"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Albay -  Gregorian Mall, Legazpi</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 8:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Dine-in, Take out, Delivery</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(052) 284-3377" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(052) 284-3377</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]" 
                            data-catcher-search="Bacolod -  Ayala Capital Central"
                            data-store-filter='["Dine-in","Take out"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Bacolod -  Ayala Capital Central</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>12:00 PM - 9:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Dine-in, Take out</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(034) 700-0999" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(034) 700-0999</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]" 
                            data-catcher-search="Baguio -  Baguio City Hall"
                            data-store-filter='["Dine-in","Take out"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Baguio -  Baguio City Hall</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>10:00 AM - 7:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Dine-in, Take out</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]" 
                            data-catcher-search="Baguio -  Baguio-Ayala Land Technohub"
                            data-store-filter='["Dine-in","Take out","Delivery"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Baguio -  Baguio-Ayala Land Technohub</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 5:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Dine-in, Take out, Delivery</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Lipa Highway"
                            data-store-filter='["Dine-in","Take out","Delivery"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Lipa Highway</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 8:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Dine-in, Take out, Delivery</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977-801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977-801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:+63 919 003-4360" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63 919 003-4360</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Lipa Town Center"
                            data-store-filter='["Dine-in","Take out","Delivery"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Lipa Town Center</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 8:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Dine-in, Take out, Delivery</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 404-2081" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 404-2081</h5>
                                    </div>
                                </a>
                                <a href="tel:+6391 7541-7885" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+6391 7541-7885</h5>
                                    </div>
                                </a>
                                <a href="tel:+63919 003-4360" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63919 003-4360</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div>
                        <div 
                            class="c-store-list-stores_contacts--item [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]"
                            data-catcher-search="Batangas - Pallocan West, Batangas City"
                            data-store-filter='["Take out","Delivery","Curbside"]'
                        >
                            <div class="c-store-list-stores_contacts--item__content">
                                <h4 class="h4">Batangas - Pallocan West, Batangas City</h4>
                                <ul class="store-legend [ u-df-mb ]">
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-clock"></i>
                                        <span>9:00 AM - 10:00 PM</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                                        <i class="ic-pizza"></i>
                                        <span>Take out, Delivery, Curbside <span class="text-registered">®</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-panel [ u-df-mb u-df-mb-w ]">
                                <a href="tel:(043) 727-5975" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(043) 727-5975</h5>
                                    </div>
                                </a>
                                <a href="tel:+63977 801-7690" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">+63977 801-7690</h5>
                                    </div>
                                </a>
                                <a href="tel:(074) 661-2536" class="contact-panel_card">
                                    <div class="contact-panel_card--detail">
                                        <h5 class="h5">(074) 661-2536</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="o-divider"></div>
                        </div> -->
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
    </section>
    <?php include 'src/includes/footer.php';?>
</div>