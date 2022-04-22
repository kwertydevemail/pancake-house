

<?php include 'src/includes/header.php';?>
<?php
    if(is_yc()):
        $content = array(
            'static' => array(
                'breadcrumbs-1' => 'Delivery Details',
                'header-title' => 'Order Now',
                'sub-header-title' => 'Delivery Details',
                'process-1' => 'Fill in the address with the street, barangay, subdivision, city/municipality.',
                'address-label' => 'delivery addresses',
                'address-def-value' => 'New Address',
                'address-placeholder' => 'Select an address from your list',
                'newaddress-label' => 'NEW ADDRESS',
                'newaddress-placeholder' => 'Complete with the street, barangay/ subdivision, city/municipality of your delivery address',
                'current-location-text' => 'Use your current address',
                'default-selected-address' => '22 Ana Maria, San Antonio, Quezon City, Second District NCR, National Capital Region, PHL ',
                'address-note' => 'Note: If the address you typed is not recognized by our system, 
                                    you may click USE CURRENT LOCATION or simply continue typing in your 
                                    correct address and proceed with ordering. A customer service 
                                    representative will assign your order to a store or call you if 
                                    your area is not serviceable.',
                'process-2' => 'Fill in the house/unit/floor number.',
                'process-2-placeholder-dt' => 'Complete with the house/unit/floor of your address',
                'process-2-placeholder-mb' => 'House/unit/floor of your address',
                'process-3' => 'Select who the order is for.',
                'process-4' => 'Select when you would like this order.',
                'process-5' => 'Select delivery date and time.',
                'process-5-subtext-1' => 'The selected delivery time must be at least 1 and 1/2 hours from the current time.',
                'process-5-subtext-2' => 'Today (February 24, 2021 Philippine local date & time) expected delivery 
                                            is within 40 minutes to 1 hour upon receipt of orders from the Yellow Cab 
                                            Pizza Co.® branch.',
                'error-msg' => 'Sorry, time is invalid. Please try again.',   
            ),
            'buttons' => array(
                'back-to-home' => 'Back to Homepage',
                'submit' => 'SUBMIT',
                'save-address' => 'SAVE ADDRESS',
                'for-self' => 'For myself',
                'for-someone' => 'A gift for someone',
                'deliver-now' => 'Deliver now',
                'deliver-later' => 'Deliver later',
                'proceed' => 'Proceed',
    
            ),
            'images' => array(
                'home-img' => 'ic_home.svg',
                'address-img' => 'ic-address.svg'
            )
        );
    endif;

    if(is_ph()):
        $content = array(
            'static' => array(
                'breadcrumbs-1' => 'Delivery Details',
                'header-title' => 'Order Now',
                'sub-header-title' => 'Delivery Details',
                'process-1' => 'Fill in the address with the street, barangay, subdivision, city/municipality.',
                'address-label' => 'delivery addresses',
                'address-def-value' => 'New Address',
                'address-placeholder' => 'Select an address from your list',
                'newaddress-label' => 'NEW ADDRESS',
                'newaddress-placeholder' => 'Complete with the street, barangay/ subdivision, city/municipality of your delivery address',
                'current-location-text' => 'Use your current address',
                'default-selected-address' => '22 Ana Maria, San Antonio, Quezon City, Second District NCR, National Capital Region, PHL ',
                'address-note' => 'Note: If the address you typed is not recognized by our system, 
                                    you may click USE CURRENT LOCATION or simply continue typing in your 
                                    correct address and proceed with ordering. A customer service 
                                    representative will assign your order to a store or call you if 
                                    your area is not serviceable.',
                'process-2' => 'Fill in the house/unit/floor number.',
                'process-2-placeholder-dt' => 'Complete with the house/unit/floor of your address',
                'process-2-placeholder-mb' => 'House/unit/floor of your address',
                'process-3' => 'Select who the order is for.',
                'process-4' => 'Select when you would like this order.',
                'process-5' => 'Select delivery date and time.',
                'process-5-subtext-1' => 'The selected delivery time must be at least 1 and 1/2 hours from the current time.',
                'process-5-subtext-2' => 'Today (February 24, 2021 Philippine local date & time) expected delivery 
                                            is within 40 minutes to 1 hour upon receipt of orders from the Yellow Cab 
                                            Pizza Co.® branch.',
                'error-msg' => 'Sorry, time is invalid. Please try again.',   
            ),
            'buttons' => array(
                'back-to-home' => 'Back to Homepage',
                'submit' => 'SUBMIT',
                'save-address' => 'SAVE ADDRESS',
                'for-self' => 'For myself',
                'for-someone' => 'A gift for someone',
                'deliver-now' => 'Deliver now',
                'deliver-later' => 'Deliver later',
                'proceed' => 'Proceed',
    
            ),
            'images' => array(
                'home-img' => 'ph-home-sm.svg',
                'address-img' => 'ic-address.svg'
            )
        );
    endif;

    if(is_max()):
        $content = array(
            'static' => array(
                'breadcrumbs-1' => 'Delivery Details',
                'header-title' => 'Order Now',
                'sub-header-title' => 'Delivery Details',
                'process-1' => 'Fill in the address with the street, barangay, subdivision, city/municipality.',
                'address-label' => 'delivery addresses',
                'address-def-value' => 'New Address',
                'address-placeholder' => 'Select an address from your list',
                'newaddress-label' => 'NEW ADDRESS',
                'newaddress-placeholder' => 'Complete with the street, barangay/ subdivision, city/municipality of your delivery address',
                'current-location-text' => 'Use your current address',
                'default-selected-address' => '22 Ana Maria, San Antonio, Quezon City, Second District NCR, National Capital Region, PHL ',
                'address-note' => 'Note: If the address you typed is not recognized by our system, 
                                    you may click USE CURRENT LOCATION or simply continue typing in your 
                                    correct address and proceed with ordering. A customer service 
                                    representative will assign your order to a store or call you if 
                                    your area is not serviceable.',
                'process-2' => 'Fill in the house/unit/floor number.',
                'process-2-placeholder-dt' => 'Complete with the house/unit/floor of your address',
                'process-2-placeholder-mb' => 'House/unit/floor of your address',
                'process-3' => 'Select who the order is for.',
                'process-4' => 'Select when you would like this order.',
                'process-5' => 'Select delivery date and time.',
                'process-5-subtext-1' => 'The selected delivery time must be at least 1 and 1/2 hours from the current time.',
                'process-5-subtext-2' => 'Today (February 24, 2021 Philippine local date & time) expected delivery 
                                            is within 40 minutes to 1 hour upon receipt of orders from the Yellow Cab 
                                            Pizza Co.® branch.',
                'error-msg' => 'Sorry, time is invalid. Please try again.',   
            ),
            'buttons' => array(
                'back-to-home' => 'Back to Homepage',
                'submit' => 'SUBMIT',
                'save-address' => 'SAVE ADDRESS',
                'for-self' => 'For myself',
                'for-someone' => 'A gift for someone',
                'deliver-now' => 'Deliver now',
                'deliver-later' => 'Deliver later',
                'proceed' => 'Proceed',
                'back' => 'Back to Home'
            ),
            'images' => array(
                'home-img' => 'ic-max-home-red.svg',
                'address-img' => 'ic-address.svg'
            )
        );
    endif;
    $address = [
        [
            'selectValue' => 'New Address',
            'name' => 'New Address',
            'populate-address' => ''
        ],
        [
            'selectValue' => 'KDC Plaza, Wilcon Bldg, Legazpi St, San Lorenzo',
            'name' => 'KDC Plaza, Wilcon Bldg, Legazpi St, San Lorenzo',
            'populate-address' => 'address_id'
        ],
        [
            'selectValue' => 'None',
            'name' => 'None',
            'populate-address' => ''
        ]
    ];
    $addressOption = [
        '22 Ana Maria, San Antonio, Quezon City, Second District NCR, National Capital Region, PHL',
        '22 Ana St, Hen. T. de Leon, Valenzuela, Third District NCR, National Capital Region, PHL',
        '22 Ana St, Ibabang Dupay, Lucena City, Quezon, Calabarzon, PHL',
        '22 Anahaw St, B.F. Homes, Parañaque, Fourth District NCR, National Capital Region, PHL',
        '22 Anahaw St, Salawag, Dasmariñas, Cavite, Calabarzon, PHL',
        '22 Anak Bayan, Paltok, Quezon City, Second District NCR, National Capital Region, PHL'
    ];  
    $dropdown_hour = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    $min_options = ['00', '05', '30', '45'];
?>
<div class="main-wrapper">
    <section class="c-standard-layout">
        <div class="c-breadcrumbs">
            <div class="o-container">
                <?php if(is_ph()):?>
                    <ul class="[ u-df-mb ]">
                        <li><a href="/"><img src="dist/images/<?= $content['images']['home-img']; ?>" alt=""></a></li>
                        <li><a href="/"><?= $content['static']['breadcrumbs-1']; ?></a></li>
                    </ul>
                <?php endif;?>
                <?php if(is_yc()):?>
                    <ul class="[ u-df-mb ]">
                        <li><a href="/"><img src="dist/images/<?= $content['images']['home-img']; ?>" alt=""></a></li>
                        <li><a href="/"><?= $content['static']['breadcrumbs-1']; ?></a></li>
                    </ul>
                <?php endif;?>

                <?php if(is_max()):?>
                    <ul class="[ u-df-mb ]">
                        <li><a href="/"><img src="dist/images/<?= $content['images']['home-img']; ?>" alt=""></a></li>
                        <li><a href="/"><?= $content['static']['breadcrumbs-1']; ?></a></li>
                    </ul>

                    <a href="/">
                        <i class="ic-max-arrow-left"></i>
                        <span><?= $content['buttons']['back']; ?></span>
                    </a>
                <?php endif;?>
            </div>

        </div>
        <div class="o-container c-ordernow for-delivery-form">
            <div class="c-standard-layout-content">

                <?php if(is_yc()):?><h3 class="o-header-title-slant"><?= $content['static']['header-title']; ?></h3><?php endif;?>
                <?php if(is_ph()):?>
                    <div class="c-standard-layout-content_sub-title">
                        <h3><?= $content['static']['header-title']; ?></h3>
                        <h4 class="h3 c-ordernow-title"><?= $content['static']['sub-header-title']; ?></h4>
                    </div>
                <?php endif;?>
                
                <div class="c-standard-layout-content_display [ u-df-mb u-df-mb-w ]">
                    <?php if(is_max()):?><h2 class="h2"><?= $content['static']['header-title']; ?></h2><?php endif;?>
                    <?php if(is_max() || is_yc()):?><h3 class="h3 c-ordernow-title"><?= $content['static']['sub-header-title']; ?></h3><?php endif;?>
                    <?php if(is_yc()):?><div class="o-divider"></div><?php endif;?>
                    <form action="" class="o-form-timeline" validation="true" data-form-catcher="orderDeliveryForm">
                        <div class="o-form-group o-form-dropdown">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                            <label for=""><?= $content['static']['process-1']; ?></label>
                            <div class="o-form-group-inner for-newaddress">
                                <label for=""><?= $content['static']['address-label']; ?></label>
                                <div class="o-form-dropdown_input">
                                    <input type="text" name="store" class="o-form-group_input" placeholder="<?= $content['static']['address-placeholder']; ?>" data-listen="input" autocomplete="off" readonly data-required-validate="true" value="<?= $content['static']['address-def-value']; ?>">
                                    <ul class="[ u-df-mb u-df-mb-fd-c ] for-address-dropdown">
                                        <?php foreach($address as $key => $value): ?>
                                            <li class="[ u-df-mb ]" data-select-value="<?= $value['selectValue'] ?>" data-populate-address="<?= $value['populate-address'] ?>">
                                                <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                    <h5 class="h5"><?= $value['name'] ?></h5>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                        <!-- <li class="[ u-df-mb ] list-selected" data-select-value="New Address">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5">New Address</h5>
                                            </div>
                                        </li>
                                        <li class="[ u-df-mb ]" data-select-value="KDC Plaza, Wilcon Bldg, Legazpi St, San Lorenzo" data-populate-address="address_id">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5">KDC Plaza, Wilcon Bldg, Legazpi St, San Lorenzo</h5>
                                            </div>
                                        </li>
                                        <li class="[ u-df-mb ]" data-select-value="None">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5">None</h5>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="o-form-group-inner o-form-address-picker [ u-df-mb u-df-mb-w u-df-mb-ai-s ]">
                                <label for=""><?= $content['static']['newaddress-label']; ?></label>
                                <div class="o-form-dropdown_input">
                                    <textarea name="address"  class="o-form-group_input" placeholder="<?= $content['static']['newaddress-placeholder']; ?>" data-listen="input" autocomplete="off" data-address-filter="search" readonly data-populate-catcher="address"></textarea>
                                    <ul class="[ u-df-mb u-df-mb-fd-c ] show" data-address-catcher="default">
                                        <li class="[ u-df-mb ]" data-select-value="<?= $content['static']['default-selected-address']; ?>">
                                            <figure>
                                                <img src="dist/images/<?= $content['images']['address-img']; ?>" alt="address">
                                            </figure>
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $content['static']['current-location-text']; ?> </h5>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="[ u-df-mb u-df-mb-fd-c ]" data-address-catcher="search">
                                        <?php foreach($delivery_numbers as $key => $value): ?>
                                            <li class="[ u-df-mb ]" data-select-value="<?= $value ?>">
                                                <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                    <h5 class="h5"><?= $value ?></h5>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                        <!-- <li class="[ u-df-mb ]" data-select-value="22 Ana Maria, San Antonio, Quezon City, Second District NCR, National Capital Region, PHL">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5">22 Ana Maria, San Antonio, Quezon City, Second District NCR, National Capital Region, PHL</h5>
                                            </div>
                                        </li>
                                        <li class="[ u-df-mb ]" data-select-value="22 Ana St, Hen. T. de Leon, Valenzuela, Third District NCR, National Capital Region, PHL">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5">22 Ana St, Hen. T. de Leon, Valenzuela, Third District NCR, National Capital Region, PHL</h5>
                                            </div>
                                        </li>
                                        <li class="[ u-df-mb ]" data-select-value="22 Ana St, Ibabang Dupay, Lucena City, Quezon, Calabarzon, PHL">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5">22 Ana St, Ibabang Dupay, Lucena City, Quezon, Calabarzon, PHL</h5>
                                            </div>
                                        </li>
                                        <li class="[ u-df-mb ]" data-select-value="22 Anahaw St, B.F. Homes, Parañaque, Fourth District NCR, National Capital Region, PHL">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5">22 Anahaw St, B.F. Homes, Parañaque, Fourth District NCR, National Capital Region, PHL</h5>
                                            </div>
                                        </li>
                                        <li class="[ u-df-mb ]" data-select-value="22 Anahaw St, Salawag, Dasmariñas, Cavite, Calabarzon, PHL">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5">22 Anahaw St, Salawag, Dasmariñas, Cavite, Calabarzon, PHL</h5>
                                            </div>
                                        </li>
                                        <li class="[ u-df-mb ]" data-select-value="22 Anak Bayan, Paltok, Quezon City, Second District NCR, National Capital Region, PHL">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5">22 Anak Bayan, Paltok, Quezon City, Second District NCR, National Capital Region, PHL</h5>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                                <button class="o-button o-button-lg">
                                    <span><?= $content['buttons']['save-address']; ?></span>
                                </button>
                                <p class="italize">
                                    <?= $content['static']['address-note']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="o-form-group for-house-detail">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                            <label for=""><?= $content['static']['process-2']; ?></label>
                            <div class="o-form-group_standard">
                                <input type="text" name="unit" class="o-form-group_input" placeholder="<?= $content['static']['process-2-placeholder-dt']; ?>" placeholder-mb="<?= $content['static']['process-2-placeholder-mb']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                            </div>
                        </div>
                        <div class="o-form-group">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                            <label for=""><?= $content['static']['process-3']; ?></label>
                            <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                <input type="hidden" name="for-order" class="o-form-group_input" autocomplete="off" readonly data-required-validate="true">
                                <div class="o-form-panels_card">
                                    <div class="o-form-panels_card--detail pad-l-lg [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="for-order" data-panel-value="<?= $content['buttons']['for-self']; ?>">
                                        <div class="o-form-panels_card--detail__title">
                                            <h3 class="h3"><?= $content['buttons']['for-self']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="o-form-panels_card">
                                    <div class="o-form-panels_card--detail [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="for-order" data-panel-value="<?= $content['buttons']['for-someone']; ?>">
                                        <div class="o-form-panels_card--detail__title">
                                            <h3 class="h3"><?= $content['buttons']['for-someone']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="o-form-group">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">4</span>
                            <label for=""><?= $content['static']['process-4']; ?></label>
                            <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                <input type="hidden" name="when-order" class="o-form-group_input" autocomplete="off" readonly data-required-validate="true">
                                <div class="o-form-panels_card">
                                    <div class="o-form-panels_card--detail pad-l-lg [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="when-order" data-panel-value="<?= $content['buttons']['deliver-now']; ?>" data-custom-filter="when-order">
                                        <div class="o-form-panels_card--detail__title">
                                            <h3 class="h3"><?= $content['buttons']['deliver-now']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="o-form-panels_card">
                                    <div class="o-form-panels_card--detail [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="when-order" data-panel-value="<?= $content['buttons']['deliver-later']; ?>" data-custom-filter="when-order">
                                        <div class="o-form-panels_card--detail__title">
                                            <h3 class="h3"><?= $content['buttons']['deliver-later']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="o-form-group o-form-datetime o-form-dropdown [ u-df-mb  u-df-mb-w ] deliver-type no-tail" data-delivery-date="later">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">5</span>
                            <label for=""><?= $content['static']['process-5']; ?></label>
                            <p class="deliver-now-text full-w"><?= $content['static']['process-5-subtext-1']; ?></p>
                            <div class="o-form-datetime o-form-datetime_date">
                                <input type="text" name="date" class="o-form-group_input js-datepicker" data-listen="input" placeholder="Select a date and time" autocomplete="off" readonly data-required-validate="true" value="<?= date('l, F d, Y')?>">
                            </div>
                            <div class="o-form-dropdown_input o-form-datetime_hour">
                                <input type="text" name="hour" class="o-form-group_input" placeholder="H" data-listen="input" autocomplete="off" readonly value="1">
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($dropdown_hour as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value ?>">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">1</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="2">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">2</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="3">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">3</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="4">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">4</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="5">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">5</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="6">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">6</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="7">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">7</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="8">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">8</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="9">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">9</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="10">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">10</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="11">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">11</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="12">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">12</h5>
                                        </div>
                                    </li> -->
                                </ul>
                                <span class="error-data"><?= $content['static']['error-msg']; ?></span>
                            </div>
                            <span class="time-separator [ u-df-mb u-df-mb-ai-c ]">:</span>
                            <div class="o-form-dropdown_input o-form-datetime_min">
                                <input type="text" name="min" class="o-form-group_input" placeholder="MM" data-listen="input" autocomplete="off" readonly value="00">
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($min_options as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value ?>">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- <li class="[ u-df-mb ]" data-select-value="00">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">00</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="15">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">15</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="30">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">30</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="45">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">45</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="o-form-dropdown_input o-form-datetime_min">
                                <input type="text" name="session" class="o-form-group_input" placeholder="AM" data-listen="input" autocomplete="off" readonly value="AM">
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <li class="[ u-df-mb ]" data-select-value="AM">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">AM</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="PM">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">PM</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="o-form-group o-form-datetime o-form-dropdown [ u-df-mb  u-df-mb-w ] deliver-type no-tail" data-delivery-date="now">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">5</span>
                            <label for=""><?= $content['static']['process-5']; ?></label>
                            <p class="deliver-now-text">
                                <?= $content['static']['process-5-subtext-2']; ?>
                            </p>
                        </div>
                        <div class="o-form-group o-form-datetime o-form-dropdown [ u-df-mb  u-df-mb-w ] deliver-type show" data-delivery-date="default">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">5</span>
                            <label for=""><?= $content['static']['process-5']; ?></label>
                        </div>
                        <button type="submit" class="o-button o-button-lg" disabled>
                            <span><?= $content['buttons']['proceed']; ?></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include 'src/includes/footer.php';?>
</div>