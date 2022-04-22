

<?php include 'src/includes/header.php';?>
<?php
    if(is_yc()):
        $content = array(
            'static' => array(
                'breadcrumbs-1' => 'Delivery Details',
                'header-title' => 'Order Now',
                'sub-header-title' => 'Delivery Details',
                'process-1' => 'Fill in the address with house/unit/floor number',
                'process-1-placeholder-dt' => 'Complete with the house/unit/floor of your address',
                'process-1-placeholder-mb' => 'House/unit/floor of your address',
                'process-2' => 'Fill in the address with the street, barangay, subdivision',
                'process-2-placeholder-dt' => 'Complete with street, barangay, subdivision',
                'process-2-placeholder-mb' => 'House/unit/floor of your address',
                'process-3' => 'Fill in the city',
                'process-3-placeholder' => 'Select your city',
                'process-4' => 'Fill in the provinces',
                'process-4-placeholder' => 'Select your province',
                'process-5' => 'Select who the order is for.',
                'process-6' => 'Select when you would like this order.',
                'process-7' => 'Select delivery date and time.',
                'deliver-now-text' => 'The selected delivery time must be at least 1 and 1/2 hours from the current time.',
                'delilver-now-text-1' => 'Today (February 24, 2021 Philippine local date & time) expected delivery 
                                            is within 40 minutes to 1 hour upon receipt of orders from the Yellow Cab 
                                            Pizza Co.® branch.',
                'placeholder-date-time' => 'Select a date and time',
                'placeholder-hour' => 'H',
                'error-smg' => 'Sorry, time is invalid. Please try again.',
                'min-placeholder' => 'MM',
            ),
            'buttons' => array(
                'pin-location' => 'view / pin your location',
                'for-self' => 'FOR MYSELF',
                'for-someone' => 'A gift for someone',
                'deliver-now' => 'Deliver NOW',
                'deliver-later' => 'deliver later',
                'proceed' => 'Proceed',
            ),
            'images' => array(
                'home-img' => 'ic_home.svg',
            ),
            'link' => array(
            )
        );
    endif;

    if(is_ph()):
        $content = array(
            'static' => array(
                'breadcrumbs-1' => 'Delivery Details',
                'header-title' => 'Order Now',
                'sub-header-title' => 'Delivery Details',
                'process-1' => 'Fill in the address with house/unit/floor number',
                'process-1-placeholder-dt' => 'Complete with the house/unit/floor of your address',
                'process-1-placeholder-mb' => 'House/unit/floor of your address',
                'process-2' => 'Fill in the address with the street, barangay, subdivision',
                'process-2-placeholder-dt' => 'Complete with street, barangay, subdivision',
                'process-2-placeholder-mb' => 'House/unit/floor of your address',
                'process-3' => 'Fill in the city',
                'process-3-placeholder' => 'Select your city',
                'process-4' => 'Fill in the provinces',
                'process-4-placeholder' => 'Select your province',
                'process-5' => 'Select who the order is for.',
                'process-6' => 'Select when you would like this order.',
                'process-7' => 'Select delivery date and time.',
                'deliver-now-text' => 'The selected delivery time must be at least 1 and 1/2 hours from the current time.',
                'delilver-now-text-1' => 'Today (February 24, 2021 Philippine local date & time) expected delivery 
                                            is within 40 minutes to 1 hour upon receipt of orders from the Yellow Cab 
                                            Pizza Co.® branch.',
                'placeholder-date-time' => 'Select a date and time',
                'placeholder-hour' => 'H',
                'error-smg' => 'Sorry, time is invalid. Please try again.',
                'min-placeholder' => 'MM',
            ),
            'buttons' => array(
                'pin-location' => 'View / pin your location',
                'for-self' => 'For Myself',
                'for-someone' => 'A gift for someone',
                'deliver-now' => 'Deliver Now',
                'deliver-later' => 'Deliver Later',
                'proceed' => 'Proceed',
            ),
            'images' => array(
                'home-img' => 'ph-home-sm.svg',
            ),
            'link' => array(
            )
        );
    endif;

    if(is_max()):
        $dateToday = date('l, F d, Y');
        $content = array(
            'static' => array(
                'breadcrumbs-1' => 'Delivery Details',
                'header-title' => 'Order Now',
                'sub-header-title' => 'Delivery Details',

                'process-1' => 'Fill in the province.<span class="required">*</span>',
                'process-1-placeholder' => 'Select a province',

                'process-2' => 'Fill in the city.<span class="required">*</span>',
                'process-2-placeholder' => 'Select a city',

                'process-3' => 'Fill in the house/unit/floor number.',
                'process-3-placeholder-dt' => 'House/unit/floor of your address',
                'process-3-placeholder-mb' => 'House/unit/floor of your address',

                'process-4' => 'Fill in the address with the street.<span class="required">*</span>',
                'process-4-placeholder-dt' => 'Enter street name',
                'process-4-placeholder-mb' => 'Enter street name',

                'process-5' => 'Fill in the area/subdivision/district.<span class="required">*</span>',
                'process-5-placeholder-dt' => 'Enter the area/subdivision/district',
                'process-5-placeholder-mb' => 'Enter the area/subdivision/district',

                'process-6' => 'Select who the order is for.',
                'process-7' => 'Select when you would like this order.',
                'process-8' => 'Select delivery date and time.',
                'deliver-now-text' => 'The selected delivery time must be at least 1 and 1/2 hours from the current time.',
                'delilver-now-text-1' => 'Today ('.$dateToday.' Philippine local date & time) expected delivery 
                                            is within 40 minutes to 1 hour upon receipt of orders from the Yellow Cab 
                                            Pizza Co.® branch.',
                'placeholder-date-time' => 'Select a date and time',
                'placeholder-hour' => '1',
                'error-smg' => 'Sorry, time is invalid. Please try again.',
                'min-placeholder' => '00',
            ),
            'buttons' => array(
                'current-location' => 'Use Current Location',
                'pin-location' => 'view / pin your location',
                'for-self' => 'For myself',
                'for-someone' => 'A gift for someone',
                'deliver-now' => 'Deliver now',
                'deliver-later' => 'Deliver later',
                'proceed' => 'Proceed to order',
                'back' => 'Back to Home'
            ),
            'images' => array(
                'home-img' => 'ic-max-home-red.svg',
            ),
            'link' => array(
            )
        );
    endif;
    $dropdown_hour = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    $min_options = ['00', '15', '30', '45'];
?>
<div class="main-wrapper">
    <section class="c-standard-layout <?= is_max() ? 'c-standard-layout-max c-standard-layout-max--delivery js-maxOrderNow' : null; ?>">
        <div class="c-breadcrumbs">
            <div class="o-container">
                <?php if(is_ph()):?>
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
                    <form action="" class="o-form-timeline" validation="true" data-form-catcher="orderDeliveryForm" data-loader-country="philippines">
                    
                    <?php if(is_max()):?>
                        <div class="current-location">
                            <button type="button" class="o-button o-button-lg" data-map="initialize">
                                <span><?= $content['buttons']['current-location']; ?></span>
                            </button>
                        </div>

                        <div class="o-form-group">
                            <div class="o-form-group-inner o-form-dropdown" data-catcher-filter="holder">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                                <label for=""><?= $content['static']['process-1']; ?></label>
                                <div class="o-form-group_standard o-form-dropdown_input">
                                    <input type="text" name="province" class="o-form-group_input" placeholder="<?= $content['static']['process-1-placeholder']; ?>" data-listen="input" autocomplete="off" readonly data-required-validate="true" data-field-filter="provinces">
                                    <ul class="[ u-df-mb u-df-mb-fd-c ]"></ul>
                                </div>
                            </div>
                        </div>

                        <div class="o-form-group o-form-dropdown" data-catcher-filter="holder">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                            <label for=""><?= $content['static']['process-2']; ?></label>
                            <div class="o-form-group_standard o-form-dropdown_input">
                                <input type="text" name="city" class="o-form-group_input" placeholder="<?= $content['static']['process-2-placeholder']; ?>" data-listen="input" autocomplete="off" readonly data-required-validate="true" data-field-filter="cities">
                                <ul class="[ u-df-mb u-df-mb-fd-c ]"></ul>
                            </div>
                        </div>


                        <div class="o-form-group for-house-detail">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                            <label for=""><?= $content['static']['process-3']; ?></label>
                            <div class="o-form-group_standard">
                                <input type="text" name="unit" class="o-form-group_input" placeholder="<?= $content['static']['process-3-placeholder-dt']; ?>" placeholder-mb="<?= $content['static']['process-3-placeholder-mb']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                            </div>
                        </div>

                        <div class="o-form-group for-house-detail">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">4</span>
                            <label for=""><?= $content['static']['process-4']; ?></label>
                            <div class="o-form-group_standard">
                                <input type="text" name="unit" class="o-form-group_input" placeholder="<?= $content['static']['process-4-placeholder-dt']; ?>" placeholder-mb="<?= $content['static']['process-4-placeholder-mb']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                            </div>
                        </div>

                        <div class="o-form-group for-house-detail">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">5</span>
                                <label for=""><?= $content['static']['process-5']; ?></label>
                                <div class="o-form-group_standard">
                                    <input type="text" name="area" class="o-form-group_input" placeholder="<?= $content['static']['process-5-placeholder-dt']; ?>" placeholder-mb="<?= $content['static']['process-5-placeholder-mb']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                </div>
                            <div class="o-form-group-inner for-view-location">
                                <button type="button" class="o-button o-button-lg" data-map="initialize">
                                    <span><?= $content['buttons']['pin-location']; ?></span>
                                </button>
                            </div>
                        </div>

                        <div class="o-form-group">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">6</span>
                            <label for=""><?= $content['static']['process-6']; ?></label>
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
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">7</span>
                            <label for=""><?= $content['static']['process-7']; ?></label>
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
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">8</span>
                            <label for=""><?= $content['static']['process-8']; ?></label>
                            <p class="deliver-now-text full-w"><?= $content['static']['deliver-now-text']; ?></p>
                            <div class="o-form-datetime o-form-datetime_date">
                                <input type="text" name="date" class="o-form-group_input js-datepicker js-time" data-listen="input" placeholder="<?= date('l, F d, Y');?>" autocomplete="off" readonly value="" data-required-validate="true">
                            </div>
                            <div class="o-form-dropdown_input o-form-datetime_hour">
                                <input type="text" name="hour" class="o-form-group_input js-time" placeholder="<?= $content['static']['placeholder-hour']; ?>" data-listen="input" autocomplete="off" readonly value="" data-required-validate="true">
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($dropdown_hour as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value ?>">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <!-- <span class="error-data"><?php// $content['static']['error-smg']; ?></span> --> 
                            </div>
                            <span class="time-separator [ u-df-mb u-df-mb-ai-c ]">:</span>
                            <div class="o-form-dropdown_input o-form-datetime_min">
                                <input type="text" name="min" class="o-form-group_input js-time" placeholder="<?= $content['static']['min-placeholder']; ?>" data-listen="input" autocomplete="off" readonly value="" data-required-validate="true">
                                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                    <?php foreach($min_options as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value ?>">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="o-form-dropdown_input o-form-datetime_min o-form-datetime_meridiem">
                                <input type="text" name="session" class="o-form-group_input js-time" placeholder="AM" data-listen="input" autocomplete="off" readonly value="" data-required-validate="true">
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
                            <span class="error-data"><?= $content['static']['error-smg']; ?></span>
                        </div>

                        <div class="o-form-group o-form-datetime o-form-dropdown [ u-df-mb  u-df-mb-w ] deliver-type no-tail" data-delivery-date="now">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">8</span>
                            <label for=""><?= $content['static']['process-8']; ?></label>
                            <p class="deliver-now-text">
                                <?= $content['static']['delilver-now-text-1']; ?>
                            </p>
                        </div>

                        <div class="o-form-group o-form-datetime o-form-dropdown [ u-df-mb  u-df-mb-w ] deliver-type show" data-delivery-date="default">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">8</span>
                            <label for=""><?= $content['static']['process-8']; ?></label>
                        </div>  
                    <?php endif?>
                    <?php if(is_ph()):?>
                        <div class="o-form-group for-house-detail">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                            <label for=""><?= $content['static']['process-1']; ?></label>
                            <div class="o-form-group_standard">
                                <input type="text" name="unit" class="o-form-group_input" placeholder="<?= $content['static']['process-1-placeholder-dt']; ?>" placeholder-mb="<?= $content['static']['process-1-placeholder-mb']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                            </div>
                        </div>
                        <div class="o-form-group for-house-detail">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                            <label for=""><?= $content['static']['process-2']; ?></label>
                            <div class="o-form-group_standard">
                                <input type="text" name="unit" class="o-form-group_input" placeholder="<?= $content['static']['process-2-placeholder-dt']; ?>" placeholder-mb="<?= $content['static']['process-2-placeholder-mb']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                            </div>
                        </div>
                        <div class="o-form-group o-form-dropdown" data-catcher-filter="holder">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                            <label for=""><?= $content['static']['process-3']; ?></label>
                            <div class="o-form-group_standard o-form-dropdown_input">
                                <input type="text" name="city" class="o-form-group_input" placeholder="<?= $content['static']['process-3-placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" data-field-filter="cities">
                                <ul class="[ u-df-mb u-df-mb-fd-c ]"></ul>
                            </div>
                        </div>
                        <div class="o-form-group">
                            <div class="o-form-group-inner o-form-dropdown" data-catcher-filter="holder">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">4</span>
                                <label for=""><?= $content['static']['process-4']; ?></label>
                                <div class="o-form-group_standard o-form-dropdown_input">
                                    <input type="text" name="province" class="o-form-group_input" placeholder="<?= $content['static']['process-4-placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" data-field-filter="provinces">
                                    <ul class="[ u-df-mb u-df-mb-fd-c ]"></ul>
                                </div>
                            </div>
                            <div class="o-form-group-inner for-view-location">
                                <button type="button" class="o-button o-button-lg" data-map="initialize">
                                    <span><?= $content['buttons']['pin-location']; ?></span>
                                </button>
                            </div>
                        </div>
                        <div class="o-form-group">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">5</span>
                            <label for=""><?= $content['static']['process-5']; ?></label>
                            <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                <input type="hidden" name="for-order" class="o-form-group_input" autocomplete="off" readonly data-required-validate="true">
                                <div class="o-form-panels_card">
                                    <div class="o-form-panels_card--detail top-left-bottom pad-l-lg [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="for-order" data-panel-value="<?= $content['buttons']['for-self']; ?>">
                                        <div class="o-form-panels_card--detail__title">
                                            <h3 class="h3"><?= $content['buttons']['for-self']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="o-form-panels_card">
                                    <div class="o-form-panels_card--detail top-right-bottom [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="for-order" data-panel-value="<?= $content['buttons']['for-someone']; ?>">
                                        <div class="o-form-panels_card--detail__title">
                                            <h3 class="h3"><?= $content['buttons']['for-someone']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="o-form-group">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">6</span>
                            <label for=""><?= $content['static']['process-6']; ?></label>
                            <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                <input type="hidden" name="when-order" class="o-form-group_input" autocomplete="off" readonly data-required-validate="true">
                                <div class="o-form-panels_card">
                                    <div class="o-form-panels_card--detail top-left-bottom pad-l-lg [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="when-order" data-panel-value="<?= $content['buttons']['deliver-now']; ?>" data-custom-filter="when-order">
                                        <div class="o-form-panels_card--detail__title">
                                            <h3 class="h3"><?= $content['buttons']['deliver-now']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="o-form-panels_card">
                                    <div class="o-form-panels_card--detail top-right-bottom [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="when-order" data-panel-value="<?= $content['buttons']['deliver-later']; ?>" data-custom-filter="when-order">
                                        <div class="o-form-panels_card--detail__title">
                                            <h3 class="h3"><?= $content['buttons']['deliver-later']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="o-form-group o-form-datetime o-form-dropdown [ u-df-mb  u-df-mb-w ] deliver-type no-tail" data-delivery-date="later">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">7</span>
                            <label for=""><?= $content['static']['process-7']; ?></label>
                            <p class="deliver-now-text full-w"><?= $content['static']['deliver-now-text']; ?></p>
                            <div class="o-form-datetime o-form-datetime_date">
                                <input type="text" name="date" class="o-form-group_input js-datepicker" data-listen="input" placeholder="<?= $content['static']['placeholder-date-time']; ?>" autocomplete="off" readonly data-required-validate="true" value="<?= date('l, F d, Y')?>">
                            </div>
                            <div class="o-form-dropdown_input o-form-datetime_hour">
                                <input type="text" name="hour" class="o-form-group_input" placeholder="<?= $content['static']['placeholder-hour']; ?>" data-listen="input" autocomplete="off" readonly value="">
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
                                <!-- <span class="error-data"><?= $content['static']['error-smg']; ?></span> -->
                            </div>
                            <span class="time-separator [ u-df-mb u-df-mb-ai-c ]">:</span>
                            <div class="o-form-dropdown_input o-form-datetime_min">
                                <input type="text" name="min" class="o-form-group_input" placeholder="<?= $content['static']['min-placeholder']; ?>" data-listen="input" autocomplete="off" readonly value="">
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
                                <input type="text" name="session" class="o-form-group_input" placeholder="AM" data-listen="input" autocomplete="off" readonly value="">
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
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">7</span>
                            <label for=""><?= $content['static']['process-7']; ?></label>
                            <p class="deliver-now-text">
                                <?= $content['static']['delilver-now-text-1']; ?>
                            </p>
                        </div>
                        <div class="o-form-group o-form-datetime o-form-dropdown [ u-df-mb  u-df-mb-w ] deliver-type show" data-delivery-date="default">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">7</span>
                            <label for=""><?= $content['static']['process-7']; ?></label>
                        </div>
                    <?php endif;?>
                        <button type="submit" class="o-button o-button-lg" disabled>
                            <span><?= $content['buttons']['proceed']; ?></span>
                        </button>
                    </form>
                    <?php if(is_max()): ?>
                    <div class="js-timePicker c-timer-picker">
                        <div class="picker arrows">
                            <div class="js-swiperHours swiper-container hours">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">01</div>
                                    <div class="swiper-slide">02</div>
                                    <div class="swiper-slide">03</div>
                                    <div class="swiper-slide">04</div>
                                    <div class="swiper-slide">05</div>
                                    <div class="swiper-slide">06</div>
                                    <div class="swiper-slide">07</div>
                                    <div class="swiper-slide">08</div>
                                    <div class="swiper-slide">09</div>
                                    <div class="swiper-slide">10</div>
                                    <div class="swiper-slide">11</div>
                                    <div class="swiper-slide">12</div>
                                </div>
                            </div>
                            <div class="separator separator--column">:</div>
                            <div class="js-swiperMinutes swiper-container minutes">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">00</div>
                                    <div class="swiper-slide">15</div>
                                    <div class="swiper-slide">30</div>
                                    <div class="swiper-slide">45</div>
                                </div>
                            </div>
                            <div class="separator separator--line">|</div>
                            <div class="js-swiperMeridiem swiper-container meridiem">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">AM</div>
                                    <div class="swiper-slide">PM</div>
                                </div>
                            </div>
                            <div class="vizor"></div>
                        </div>
                        <button class="js-timePickerDone o-button o-button--full">Done</button>
                        <button class="js-timePickerCancel o-button o-button--trans">Cancel</button>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php include 'src/includes/footer.php';?>
</div>