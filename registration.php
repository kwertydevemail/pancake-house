
<?php include 'populate.php';?>

<?php include 'src/includes/header.php';?>
<?php 
    if(is_ph()):
        $content = array(
            'static' => array(
                'breadcrumbs_1' => 'New Customers',
                'header_title' => 'New Customers',
                'header_content' => 'Please confirm that all the information is correct. 
                                        The company will not be liable if delivery information does not match.',
                'process_1' => 'Personal details',
                'process_1_fname_label' => 'FIRST NAME',
                'process_1_fname_placeholder' => 'Type first name',
                'process_1_lname_label' => 'LAST NAME',
                'process_1_lname_placeholder' => 'Type last name',
                'process_1_bdate_label' => 'Birthdate',
                'process_1_month_label' => 'Month',
                'process_1_month_placeholder' => 'Select to pick month',
                'process_1_day_label' => 'Day',
                'process_1_day_placeholder' => 'Select to pick day',
                'process_1_gender_label' => 'Gender',
    
                'process_2' => 'Billing address',
                'process_2_address1_label' => 'address 1',
                'process_2_address1_placeholder' => 'Floor/ department/ building/ house no./ street',
                'process_2_address2_label' => 'address 2',
                'process_2_address2_placeholder' => 'Area/ subdivision/ barangay/ district',
                'process_2_city_label' => 'City',
                'process_2_city_placeholder' => 'Select your city',
                'process_2_province_label' => 'Province',
                'process_2_province_placeholder' => 'Select your province',
                'process_2_postcode_label' => 'Postal code',
                'process_2_postcode_placeholder' => 'Type postal code',
                'process_2_country_label' => 'Country',
                'process_2_country_placeholder' => 'Select your country',
                'process_2_mobileNo_label' => 'Mobile Number',
                'process_2_mobileNo_placeholder' => '+63',
                'process_2_mobileNo_placeholder_1' => 'Type mobile number here',
                'process_2_other_contact_label' => 'other contact number (MOBILE/LANDLINE)',
                'process_2_other_contact_placeholder' => 'Type mobile/landline',
    
                'process_3' => 'Login details',
                'process_3_note' => 'Please provide your email and password below. You will use this information to sign in during information visits.  Sign in information is case sensitive.',
                'process_3_emailadd_label' => 'EMAIL ADDRESS',
                'process_3_emailadd_placeholder' => 'Type email address',
                'process_3_password_label' => 'PASSWORD',
                'process_3_password_placeholder' => 'Type Password',
                'process_3_confirmpass_label' => 'CONFIRM_PASSWORD',
                'process_3_confirmpass_placeholder' => 'Type Password',
                'process_3_pass_description' => 'We recommend that you choose a password apart from your names, birthdays, 
                                                    or street addresses associated with you.',
                'process_3_pass_notmatch' => 'Sorry, passwords do not match. Please try again.',
    
                'process_3_captcha_label' => 'Type captcha',
                'process_3_captcha_placeholder' => 'Type captcha',
                'process_3_captcha_err' => 'Captcha does not match. Captcha is case sensitive.',
    
                'term_label_1' => 'I am at least 18 years old and have read and agreed to the',
                'term_label_2' => 'Terms and Conditions',
                'term_label_3' => 'and',
                'term_label_4' => 'Privacy Policy',
                'term_label_5' => 'of Yellow Cab Pizza Co.®',
                'term_label_6' => 'I want to receive access to special offers, news and updates from Yellow Cab Pizza Co.®',
                'term_label_7' => 'Would you like to receive access to special offers, news and updates from other Max’s Group brands? Please select all that apply.',
    
            ),
            'images' => array(
                'home_img' => 'ic_home.svg'
            ),
            'buttons' => array(
                'back_btn' => 'Back to Home',
                'register_btn' => 'register',
            ),
        );
    endif;

    if(is_max()):
        $content = array(
            'static' => array(
                'breadcrumbs_1' => 'New Customers',
                'header_title' => 'New Customers',
                'header_content' => 'Please confirm that all the information is correct. 
                                        The company will not be liable if delivery information does not match.',
                'process_1' => 'Personal Details',
                'process_1_fname_label' => 'First Name',
                'process_1_fname_placeholder' => 'Type yout first name',
                'process_1_lname_label' => 'Last Name',
                'process_1_lname_placeholder' => 'Type your last name',
                'process_1_bdate_label' => 'Birthdate',
                'process_1_month_label' => 'Birth Month',
                'process_1_month_placeholder' => 'Select to pick month',
                'process_1_day_label' => 'Birth Day',
                'process_1_day_placeholder' => 'Select to pick day',
                'process_1_gender_label' => 'Select Gender',
    
                'process_2' => 'Billing Address',
                'process_2_address1_label' => 'Address 1',
                'process_2_address1_placeholder' => 'Area/subdivision/barangay/district',
                'process_2_address2_label' => 'Address 2',
                'process_2_address2_placeholder' => 'Area/subdivision/barangay/district',
                'process_2_city_label' => 'City',
                'process_2_city_placeholder' => 'Select your city',
                'process_2_province_label' => 'Province',
                'process_2_province_placeholder' => 'Select your province',
                'process_2_postcode_label' => 'Postal Code',
                'process_2_postcode_placeholder' => 'Type postal code',
                'process_2_country_label' => 'Country',
                'process_2_country_placeholder' => 'Select your country',
                'process_2_mobileNo_label' => 'Mobile Number',
                'process_2_mobileNo_placeholder' => '+63',
                'process_2_mobileNo_placeholder_1' => 'Type mobile number here',
                'process_2_other_contact_label' => 'Other Contact Number (Mobile/Landline)',
                'process_2_other_contact_placeholder' => 'Type your alternative mobile/landline',
    
                'process_3' => 'Login Details',
                'process_3_note' => 'Please provide your email and password below. You will use this information to sign in during information visits.  Sign in information is case sensitive.',
                'process_3_emailadd_label' => 'Email Address',
                'process_3_emailadd_placeholder' => 'Type your email address',
                'process_3_password_label' => 'Password',
                'process_3_password_placeholder' => 'Type your password',
                'process_3_confirmpass_label' => 'Confirm Password',
                'process_3_confirmpass_placeholder' => 'Re-type your password',
                'process_3_pass_description' => 'We recommend that you choose a password apart from your names, birthdays, 
                                                    or street addresses associated with you.',
                'process_3_pass_notmatch' => 'Sorry, passwords do not match. Please try again.',
    
                'process_3_captcha_label' => 'Type Captcha',
                'process_3_captcha_placeholder' => 'Type the captcha here',
                'process_3_captcha_err' => 'Captcha does not match. Captcha is <br/> case sensitive.',
    
                'term_label_1' => 'I am at least 18 years old and have read and agreed to the',
                'term_label_2' => 'Terms and Conditions',
                'term_label_3' => 'and',
                'term_label_4' => 'Privacy Policy',
                'term_label_5' => 'of Max’s Restaurant.',
                'term_label_6' => 'I want to receive access to special offers, news and updates from Max’s Restaurant.',
                'term_label_7' => 'Would you like to receive access to special offers, news and updates from other Max’s Group brands? Please select all that apply.',
    
            ),
            'images' => array(
                'home_img' => 'ic-max-home-red.svg'
            ),
            'buttons' => array(
                'back_btn' => 'Back to Home',
                'register_btn' => 'register',
            ),
        );
    endif;
    $months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
    ];
    $gender = [
        [
            'value' => 'male',
            'name' => 'Male',
        ],
        [
            'value' => 'female',
            'name' => 'Female',
        ],
    ];
    $num_prefix = [
        '+63',
        '+65',
        '+01',
        '+938',
    ];
    if(is_ph()):
        $partners = [
            [
                'value' => 'yellow-cab',
                'img_link' => 'dist/images/partners/panels/image 36.png',
            ],
            [
                'value' => 'mapple',
                'img_link' => 'dist/images/partners/panels/image 1621.png',
            ],
            [
                'value' => 'dencios',
                'img_link' => 'dist/images/partners/panels/image 40.png',
            ],
            [
                'value' => 'jamba',
                'img_link' => 'dist/images/partners/panels/image 41.png',
            ],
            [
                'value' => 'sizzling',
                'img_link' => 'dist/images/partners/panels/image 39.png',
            ],
            [
                'value' => 'teriyaki',
                'img_link' => 'dist/images/partners/panels/image 38.png',
            ],
            [
                'value' => 'pancake-house',
                'img_link' => 'dist/images/partners/panels/image 37.png',
            ],
            [
                'value' => 'krispy-kreme',
                'img_link' => 'dist/images/partners/panels/image 35.png',
            ],
            [
                'value' => 'maxs',
                'img_link' => 'dist/images/partners/panels/image 34.png',
            ],
        ];
    endif;

    if(is_max()):
        $partners = [
            [
                'value' => 'teriyaki',
                'img_link' => 'dist/images/partners/panels/image 38.png',
            ],
            [
                'value' => 'pancake-house',
                'img_link' => 'dist/images/partners/panels/image 37.png',
            ],
            [
                'value' => 'krispy-kreme',
                'img_link' => 'dist/images/partners/panels/image 35.png',
            ],
            [
                'value' => 'yellow-cab',
                'img_link' => 'dist/images/partners/panels/image 36.png',
            ],
            [
                'value' => 'maxs',
                'img_link' => 'dist/images/partners/panels/image 34.png',
            ],
            [
                'value' => 'mapple',
                'img_link' => 'dist/images/partners/panels/image 1621.png',
            ],

            [
                'value' => 'dencios',
                'img_link' => 'dist/images/partners/panels/image 40.png',
            ],
            [
                'value' => 'jamba',
                'img_link' => 'dist/images/partners/panels/image 41.png',
            ]
        ];
    endif;
?>

<div class="main-wrapper">
    <section class="c-standard-layout c-registration">
        <div class="c-breadcrumbs">
            <div class="o-container">
                <ul class="[ u-df-mb ]">
                    <li><a href="/"><img src="dist/images/<?= $content['images']['home_img']; ?>" alt=""></a></li>
                    <?php if(is_ph()):?><li><a href="/"><?= $content['static']['breadcrumbs_1']; ?></a></li><?php endif;?>
                    <?php if(is_max()):?><li><a href="#"><?= $content['static']['breadcrumbs_1']; ?></a></li><?php endif;?>
                </ul>
                <button class="o-button ic-front o-button-white" data-tigger-back="promos-layout">
                    <i class="ic-back-arrow"></i>
                    <span><?= $content['buttons']['back_btn']; ?></span>
                </button>
            </div>
        </div>
        <div class="o-container">
            <div class="c-standard-layout-content">
                <h3 class="o-header-title-slant"><?= $content['static']['header_title']; ?></h3>
                <div class="c-standard-layout-content_display [ u-df-mb ]">
                    <div class="c-checkout-form">
                        <h5 class="h5">
                            <?= $content['static']['header_content']; ?>
                        </h5>
                        <?php if(is_ph()):?><div class="o-divider [ u-dnc-mb u-dbc-tb ]"></div><?php endif;?>
                        <form action="" class="o-form-timeline" validation="true" data-form-catcher="registration-form">
                            <div class="o-form-group [ u-df-mb u-df-mb-w ]">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                                <label for=""><?= $content['static']['process_1']; ?></label>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['process_1_fname_label']; ?><span class="required">*</span></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="firstName" class="o-form-group_input" placeholder="<?= $content['static']['process_1_fname_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                    </div>
                                </div>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['process_1_lname_label']; ?><span class="required">*</span></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="lastName" class="o-form-group_input" placeholder="<?= $content['static']['process_1_lname_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                    </div>
                                </div>
                                <div class="o-form-group-inner o-form-dropdown for-drop-date">
                                    <?php if(is_ph()):?><label for="" class="label-md w-100"><?= $content['static']['process_1_bdate_label']; ?></label><?php endif;?>
                                    <div class="o-form-group-inner o-form-dropdown_input">
                                        <label for=""><?= $content['static']['process_1_month_label']; ?><span class="required">*</span></label>
                                        <input type="text" name="month" class="o-form-group_input" placeholder="<?= $content['static']['process_1_month_placeholder']; ?>" data-listen="input" autocomplete="off" readonly data-required-validate="true">
                                        <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                            <?php foreach($months as $key => $value): ?>
                                                <li class="[ u-df-mb ] li-lg" data-select-value="<?= $value ?>">
                                                    <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                        <h5 class="h5"><?= $value ?></h5>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div class="o-form-group-inner o-form-dropdown_input">
                                        <label for=""><?= $content['static']['process_1_day_label']; ?><span class="required">*</span></label>
                                        <input type="text" name="day" class="o-form-group_input" placeholder="<?= $content['static']['process_1_day_placeholder']; ?>" data-listen="input" autocomplete="off" readonly data-required-validate="true">
                                        <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                            <?php for($i = 0; $i < 31; $i++): ?>
                                            <li class="[ u-df-mb ] li-lg" data-select-value="<?= $i + 1 ?>">
                                                <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                    <h5 class="h5"><?= $i + 1 ?></h5>
                                                </div>
                                            </li>
                                            <?php endfor; ?>
                                        </ul>
                                    </div>
                                </div>

                                <?php if(is_ph()):?>
                                    <div class="o-form-group-inner w-100">
                                        <label for=""><?= $content['static']['process_1_gender_label']; ?></label>
                                        <div class="o-form-group_radio">
                                            <?php foreach($gender as $key => $value): ?>
                                                <label>
                                                    <input type="radio" name="gender"  class="readonly" value="<?= $value['value'] ?>">
                                                    <span class="radiomark"></span>
                                                    <span class="label-name"><?= $value['name'] ?></span>
                                                </label>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif?>

                                <?php if(is_max()):?>  
                                    <div class="o-form-group-inner for-gender w-100">
                                        <label for="" class="[ u-dnc-mb u-dbc-tb ]"><?= $content['static']['process_1_gender_label']; ?></label>
                                        <label for="" class="[ u-dnc-tb u-dbc-mb ]"><?= $content['static']['process_1_gender_label']; ?></label>
                                        <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                            <input type="hidden" name="gender" class="o-form-group_input" autocomplete="off">
                                            <div class="o-form-panels_card">
                                                <div class="o-form-panels_card--detail pad-l-lg [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="gender" data-panel-value="Male">
                                                    <div class="o-form-panels_card--detail__title">
                                                        <h3 class="h3">Male</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="o-form-panels_card">
                                                <div class="o-form-panels_card--detail [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="gender" data-panel-value="Female">
                                                    <div class="o-form-panels_card--detail__title">
                                                        <h3 class="h3">Female</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif;?>

                            </div>
                            <div class="o-form-group [ u-df-mb u-df-mb-w ] <?php if(is_max()):?>force-tail<?php endif;?>">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                                <label for=""><?= $content['static']['process_2']; ?></label>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['process_2_address1_label']; ?><span class="required">*</span></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="address1" class="o-form-group_input" placeholder="<?= $content['static']['process_2_address1_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                    </div>
                                </div>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['process_2_address2_label']; ?><span class="required">*</span></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="address2" class="o-form-group_input" placeholder="<?= $content['static']['process_2_address2_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                    </div>
                                </div>
                                <div class="o-form-group-inner o-form-dropdown_input" data-catcher-filter="holder">
                                    <label for=""><?= $content['static']['process_2_city_label']; ?><span class="required">*</span></label>
                                    <input type="text" name="city" class="o-form-group_input" placeholder="<?= $content['static']['process_2_city_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" data-field-filter="cities" data-validate-dropdown="false">
                                    <ul class="[ u-df-mb u-df-mb-fd-c ]"></ul>
                                </div>
                                <div class="o-form-group-inner o-form-dropdown_input" data-catcher-filter="holder">
                                    <label for=""><?= $content['static']['process_2_province_label']; ?><span class="required">*</span></label>
                                    <input type="text" name="province" class="o-form-group_input" placeholder="<?= $content['static']['process_2_province_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" data-field-filter="provinces" data-validate-dropdown="false">
                                    <ul class="[ u-df-mb u-df-mb-fd-c ]"></ul>
                                </div>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['process_2_postcode_label']; ?></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="postal" class="o-form-group_input" placeholder="<?= $content['static']['process_2_postcode_placeholder']; ?>" data-listen="input" autocomplete="off">
                                    </div>
                                </div>
                                <div class="o-form-group-inner o-form-dropdown_input" data-catcher-filter="holder">
                                    <label for=""><?= $content['static']['process_2_country_label']; ?><span class="required">*</span></label>
                                    <input type="text" name="country" class="o-form-group_input" placeholder="<?= $content['static']['process_2_country_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" data-field-filter="country" data-validate-dropdown="true">
                                    <ul class="[ u-df-mb u-df-mb-fd-c ]"></ul>
                                </div>
                                <div class="o-form-group-inner with-phone-drop">
                                    <label for=""><?= $content['static']['process_2_mobileNo_label']; ?><span class="required">*</span></label>
                                    <div class="o-form-group_phone">
                                        <?php if(is_ph()):?>
                                        <div class="o-form-dropdown_input" data-catcher-filter="holder">
                                            <input type="text" name="mobileNoPre" class="o-form-group_input" placeholder="<?= $content['static']['process_2_mobileNo_placeholder']; ?>" data-listen="input" autocomplete="off" data-field-filter="prefix-number" onkeypress="return isNumberKey(event)">
                                            <ul class="[ u-df-mb u-df-mb-fd-c ]" >
                                                <?php foreach($num_prefix as $key => $value): ?>
                                                    <li class="[ u-df-mb ]" data-select-value="<?= $value ?>">
                                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                            <h5 class="h5"><?= $value ?></h5>
                                                        </div>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <?php endif;?>

                                        <?php if(is_max()):?>
                                            <div class="o-form-group_standard o-form-group_phone">
                                                <input type="text" name="mobileNoPre" value="+63" disabled class="o-form-group_input" placeholder="+63" data-listen="input" autocomplete="off" onkeypress="return isNumberKey(event)">
                                                <input type="text" name="mobileNo" class="o-form-group_input" placeholder="<?= $content['static']['process_2_mobileNo_placeholder_1']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" onkeypress="return isNumberKey(event)" data-validate="number">
                                            </div>
                                        <?php endif;?>
                                    </div>
                                    <?php if(is_ph()):?>
                                        <div class="o-form-group_standard ">
                                            <input type="text" name="mobileNo" class="o-form-group_input" placeholder="<?= $content['static']['process_2_mobileNo_placeholder_1']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" onkeypress="return isNumberKey(event)" data-validate="number">
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['process_2_other_contact_label']; ?></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="landline" class="o-form-group_input" placeholder="<?= $content['static']['process_2_other_contact_placeholder']; ?>" data-listen="input" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="o-form-group o-form-dropdown force-tail  [ u-df-mb u-df-mb-w ]">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                                <label for=""><?= $content['static']['process_3']; ?></label>
                                <div class="o-form-group-inner w-100">
                                    <label for="" class="label-sm"><?= $content['static']['process_3_note']; ?></label>
                                </div>
                                <div class="o-form-group-inner for-edit-profile_spacer w-0"></div>
                                <div class="o-form-group-inner email">
                                    <label for=""><?= $content['static']['process_3_emailadd_label']; ?><span class="required">*</span></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="email" class="o-form-group_input" placeholder="<?= $content['static']['process_3_emailadd_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" data-field-validate="email">
                                    </div>
                                </div>
                                <div class="o-form-group-inner for-edit-profile_spacer"></div>
                                <div class="o-form-group-inner o-form-group_password">
                                    <label for=""><?= $content['static']['process_3_password_label']; ?><span class="required">*</span></label>
                                    <div class="o-form-group_standard">
                                        <input type="password" name="password1" class="o-form-group_input password-hide <?php if(is_max()):?>js-max-password1<?php endif;?>" placeholder="<?= $content['static']['process_3_password_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                        <span class="ic-password password-hide <?php if(is_max()):?>togglePass1<?php endif;?>" data-trigger-password="unhide"></span>
                                        <?php if(is_max()):?><span id=dummyPass1 class="password-dummy1 show" ></span><?php endif;?>
                                    </div>
                                    <p class="italize" data-catcher="password-description">
                                        <?= $content['static']['process_3_pass_description']; ?>  
                                    </p>
                                </div>
                                <div class="o-form-group-inner o-form-group_password">
                                    <label for=""><?= $content['static']['process_3_confirmpass_label']; ?><span class="required">*</span></label>
                                    <div class="o-form-group_standard">
                                        <input type="password" name="password2" class="o-form-group_input password-hide <?php if(is_max()):?>js-max-password2<?php endif;?>" placeholder="<?= $content['static']['process_3_confirmpass_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                        <span class="ic-password password-hide <?php if(is_max()):?>togglePass2<?php endif;?>" data-trigger-password="unhide"></span>
                                        <span class="error-data"><?= $content['static']['process_3_pass_notmatch']; ?></span>
                                        <?php if(is_max()):?><span id=dummyPass2 class="password-dummy2 show" ></span><?php endif;?>
                                    </div>
                                    <?php if(is_ph()):?>
                                        <p class="italize" data-catcher="password-description">
                                            <?= $content['static']['process_3_pass_description']; ?>  
                                        </p>
                                    <?php endif;?>
                                </div>
                                <div class="o-form-group-inner for-captcha w-100">
                                    <label for=""><?= $content['static']['process_3_captcha_label']; ?><span class="required">*</span></label>
                                    <div class="o-form-group-custom-captcha">
                                        <input type="text" name="captchaCode" class="o-form-group_input o-form-group-custom-captcha_code" autocomplete="off" readonly data-catcher="captcha-generator">
                                        <input type="text" name="captcha" class="o-form-group_input" placeholder="<?= $content['static']['process_3_captcha_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                        <button class="o-button o-button-lg ic-only-point <?php if(is_max()):?>for-captcha<?php endif;?>" data-trigger="captcha-generator">
                                            <i class="ic-refresh"></i>
                                        </button>
                                        <span class="error-data"><?= $content['static']['process_3_captcha_err']; ?></span>
                                    </div>
                                </div>
                                <?php if(is_ph()):?>
                                    <?php include 'src/includes/c-new-customer-tick-box.php'?>
                                <?php  endif;?>
                                <div class="o-form-group-inner w-100">
                                    <div class="o-form-group_checkbox for-terms">
                                        <label>
                                            <?= $content['static']['term_label_1']; ?>
                                            <a href="" data-trigger-modal="condition-of-use" ><?= $content['static']['term_label_2']; ?></a> 
                                            <?= $content['static']['term_label_3']; ?> 
                                            <a href="" data-trigger-modal="privacy-policy" ><?= $content['static']['term_label_4']; ?></a>
                                            <?= $content['static']['term_label_5']; ?>
                                            <input type="checkbox" name="terms" data-validate="checkbox" data-required-validate="true">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="o-form-group_checkbox for-terms">
                                        <label>
                                            <?= $content['static']['term_label_6']; ?> 
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="o-form-group-inner w-100 for-partner-panel">
                                    <label for="" class="label-sm"><?= $content['static']['term_label_7']; ?></label>
                                    <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                        <input type="hidden" name="brands" class="o-form-group_input" autocomplete="off" readonly data-panel-type="multiple">
                                        <?php foreach($partners as $key => $value): ?>
                                            <div class="o-form-panels_card">
                                                <div class="o-form-panels_card--detail [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="brands" data-panel-value="<?= $value['value'] ?>">
                                                    <figure>
                                                        <img src="<?= $value['img_link'] ?>" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                    <?php if(is_max()):?>
                                        <button type="submit" class="o-button o-button-lg <?php if(is_max()):?>o-register-btn<?php endif;?>">
                                            <span><?= $content['buttons']['register_btn']; ?></span>
                                        </button>
                                    <?php endif;?>
                            </div>
                                <?php if(is_ph()):?>
                                    <button type="submit" class="o-button o-button-lg <?php if(is_max()):?>o-register-btn<?php endif;?>">
                                        <span><?= $content['buttons']['register_btn']; ?></span>
                                    </button>
                                <?php endif;?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'src/includes/footer.php';?>
</div>