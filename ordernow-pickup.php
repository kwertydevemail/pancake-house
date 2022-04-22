

<?php include 'src/includes/header.php';?>
<?php
    if(is_ph()):
        $content = array(
            'static' => array(
                'breadcrumbs-1' => 'Pick-up Details',
                'header-title' => 'Order Now',
                'sub-header-title' => 'Pick-Up Details',
                'process-1' => 'Select how you would like to pick-up the order.',
                'process-1-placeholder' => 'Select your first pizza',
                'process-2' => 'Select a date and time.',
                'process-2-placeholder' => 'Select a date and time.',
                'process-3' => 'Select a store/branch.',
                'process-3-placeholder' => 'Muntinlupa - Alabang Country Club',
            ),
            'buttons' => array(
                'inside-store' => 'INSIDE THE STORE',
                'curbside' => 'CURBSIDE',
                'pickpoint' => 'PICK-UP POINT',
                'proceed' => 'Proceed',
            ),
            'images' => array(
                'home-img' => 'ic_home.svg',
            )
        );
    endif;

    if(is_max()):
        $content = array(
            'static' => array(
                'breadcrumbs-1' => 'Pick-up Details',
                'header-title' => 'Order Now',
                'sub-header-title' => 'Pick-Up Details',
                'process-1' => 'How would you like to pick up your order?',
                'process-1-placeholder' => 'Select your first pizza',
                'process-2' => 'When will you pick it up?.',
                'process-2-placeholder' => 'Friday, January 24, 2022',
                'process-3' => 'Select a store/branch.',
                'process-3-placeholder' => 'Select a Max’s Restaurant branch',
            ),
            'buttons' => array(
                'inside-store' => 'Inside the store',
                'curbside' => 'Curbside',
                'pickpoint' => 'pickup point',
                'proceed' => 'Proceed to order',
                'back' => 'Back to Home'
            ),
            'images' => array(
                'home-img' => 'ic-max-home-red.svg',
            )
        );
    endif;

    $dropdown_hour = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    $min_options = ['00', '15', '30', '45'];
    $branches = [
        [
            'name' => 'Muntinlupa - Alabang Country Club',
            'filterValue' => '1',
            'dataSelect' => 'id1'
        ],
        [
            'name' => 'ALBAY - Gregorian Mall, Legazpi',
            'filterValue' => '1,2',
            'dataSelect' => 'id2'
        ],
        [
            'name' => 'BACOLOD - Ayala Capitol Central',
            'filterValue' => '1,2',
            'dataSelect' => 'id3'
        ],
        [
            'name' => 'BAGUIO - Baguio City Hall',
            'filterValue' => '1,2',
            'dataSelect' => 'id1'
        ],
        [
            'name' => 'BAGUIO - Baguio-Ayala Land Technohub',
            'filterValue' => '1,2',
            'dataSelect' => 'id1'
        ],
        [
            'name' => 'BATANGAS - Lipa Highway',
            'filterValue' => '1,2',
            'dataSelect' => 'id1'
        ],
        [
            'name' => 'BATANGAS - Lipa Town Center',
            'filterValue' => '1,2',
            'dataSelect' => 'id1'
        ],
        [
            'name' => 'BATANGAS - Pallocan West, Batangas City',
            'filterValue' => '1,2',
            'dataSelect' => 'id1'
        ],
        [
            'name' => 'BATANGAS - SM Lipa',
            'filterValue' => '1,2',
            'dataSelect' => 'id1'
        ],
        [
            'name' => 'BATANGAS - The Lifestyle Strip, Maharlika Highway, Sto. Tomas',
            'filterValue' => '1',
            'dataSelect' => 'id1'
        ],
        [
            'name' => 'Boracay Station 1',
            'filterValue' => '1,2',
            'dataSelect' => 'id1'
        ],
        [
            'name' => 'BULACAN - Malolos (Kapitolyo)',
            'filterValue' => '1',
            'dataSelect' => 'id1'
        ],
        [
            'name' => 'BULACAN - Pulilan',
            'filterValue' => '1,2',
            'dataSelect' => 'id1'
        ],
        [
            'name' => 'BULACAN - SM Baliwag',
            'filterValue' => '2',
            'dataSelect' => 'id1'
        ],
        [
            'name' => 'BULACAN - SM Marilao',
            'filterValue' => '2',
            'dataSelect' => 'id1'
        ]
    ];
?>
<div class="main-wrapper">
    <section class="c-standard-layout <?= is_max() ? 'c-standard-layout-max js-maxOrderNow' : null; ?>">
        <?php if(is_max()): ?>
        <a href="" class="order-tracker" title="Order Tracker"></a>
        <?php endif; ?>
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
        <div class="o-container c-ordernow  for-pickup-form">
            <div class="c-standard-layout-content">
                <?php if(is_ph()):?><h3 class="o-header-title-slant"><?= $content['static']['header-title']; ?></h3><?php endif;?>

                <div class="c-standard-layout-content_display">
                    <?php if(is_max()):?><h2 class="h2"><?= $content['static']['header-title']; ?></h2><?php endif;?>

                    <h3 class="h3 c-ordernow-title"><?= $content['static']['sub-header-title']; ?></h3>
                    <?php if(is_ph()):?><div class="o-divider"></div><?php endif;?>
                    <form action="" class="o-form-timeline" validation="true" data-form-catcher="orderPickupForm">
                        <div class="o-form-group">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                            <label for=""><?= $content['static']['process-1']; ?></label>
                            <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                <input type="hidden" name="size" class="o-form-group_input" placeholder="<?= $content['static']['process-1-placeholder']; ?>" autocomplete="off" readonly data-required-validate="true" data-throw-filter="store">
                                <div class="o-form-panels_card">
                                    <div class="o-form-panels_card--detail pad-l-lg [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="size" data-panel-value="pickup" data-init-filter="1" >
                                        <div class="o-form-panels_card--detail__title">
                                            <h3 class="h3"><?= $content['buttons']['inside-store']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="o-form-panels_card">
                                    <div class="o-form-panels_card--detail [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="size" data-panel-value="pickup" data-init-filter="2">
                                        <div class="o-form-panels_card--detail__title">
                                            <h3 class="h3"><?= $content['buttons']['curbside']; ?> <i class="ic-registered-sm"></i> <?= $content['buttons']['pickpoint']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="o-form-group o-form-datetime o-form-dropdown [ u-df-mb  u-df-mb-w ]">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                            <label for=""><?= $content['static']['process-2']; ?></label>
                            <div class="o-form-datetime o-form-datetime_date">
                                <input type="text" name="date" class="o-form-group_input js-datepicker" data-listen="input" placeholder="<?= date('l, F d, Y');?>" autocomplete="off" readonly data-required-validate="true">
                            </div>
                            <div class="o-form-dropdown_input o-form-datetime_hour" data-time-validation="hour">
                                <input type="text" name="hour" class="o-form-group_input" placeholder="1" data-listen="input" autocomplete="off" readonly value="" data-required-validate="true">
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
                            </div>
                            <span class="time-separator [ u-df-mb u-df-mb-ai-c ]">:</span>
                            <div class="o-form-dropdown_input o-form-datetime_min" data-time-validation="minute">
                                <input type="text" name="min" class="o-form-group_input" placeholder="00" data-listen="input" autocomplete="off" readonly value="" data-required-validate="true">
                                <ul class="[ u-df-mb u-df-mb-fd-c ]" >
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
                            <div class="o-form-dropdown_input o-form-datetime_min o-form-datetime_meridiem" data-time-validation="session">
                                <input type="text" name="session" class="o-form-group_input" placeholder="AM" data-listen="input" autocomplete="off" readonly value="" data-required-validate="true">
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
                        <div class="o-form-group o-form-dropdown for-store-branch">
                            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                            <label for=""><?= $content['static']['process-3']; ?></label>
                            <div class="o-form-dropdown_input">
                                <input type="hidden" name="store_main"  data-listen="input" readonly data-catcher-field="store-placeholder">
                                <input type="text" name="store" class="o-form-group_input" placeholder="<?= $content['static']['process-3-placeholder']; ?>" data-listen="input" autocomplete="off" readonly data-required-validate="true">
                                <ul class="[ u-df-mb u-df-mb-fd-c ] for-address-dropdown" data-catcher-filter="store">
                                    <?php foreach($branches as $key => $value): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $value['name'] ?>" data-value-filter="<?= $value['filterValue'] ?>" data-select-main="<?= $value['dataSelect'] ?>">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $value['name'] ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>

                                    <!-- <li class="[ u-df-mb ]" data-select-value="Muntinlupa - Alabang Country Club" data-value-filter="1" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">MUNTINLUPA - Alabang Country Club</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="ALBAY - Gregorian Mall, Legazpi" data-value-filter="1,2" data-select-main="id2">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">ALBAY - Gregorian Mall, Legazpi</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BACOLOD - Ayala Capitol Central" data-value-filter="1,2" data-select-main="id3">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BACOLOD - Ayala Capitol Central</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BAGUIO - Baguio City Hall" data-value-filter="1,2" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BAGUIO - Baguio City Hall</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BAGUIO - Baguio-Ayala Land Technohub" data-value-filter="1,2" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BAGUIO - Baguio-Ayala Land Technohub</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BATANGAS - Lipa Highway" data-value-filter="1,2" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BATANGAS - Lipa Highway</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BATANGAS - Lipa Town Center" data-value-filter="1,2" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BATANGAS - Lipa Town Center</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BATANGAS - Pallocan West, Batangas City" data-value-filter="1,2" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BATANGAS - Pallocan West, Batangas City</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BATANGAS - SM Lipa" data-value-filter="1,2" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BATANGAS - SM Lipa</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BATANGAS - The Lifestyle Strip, Maharlika Highway, Sto. Tomas" data-value-filter="1" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BATANGAS - The Lifestyle Strip, Maharlika Highway, Sto. Tomas</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="Boracay Station 1" data-value-filter="1,2" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">Boracay Station 1</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BULACAN - Malolos (Kapitolyo)" data-value-filter="1" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BULACAN - Malolos (Kapitolyo)</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BULACAN - Pulilan" data-value-filter="1,2" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BULACAN - Pulilan</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BULACAN - SM Baliwag" data-value-filter="2" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BULACAN - SM Baliwag</h5>
                                        </div>
                                    </li>
                                    <li class="[ u-df-mb ]" data-select-value="BULACAN - SM Marilao" data-value-filter="2" data-select-main="id1">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">BULACAN - SM Marilao</h5>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
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