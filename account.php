

<?php include 'populate.php';?>
<?php
    $tab = isset($_GET['tab']) ? $_GET['tab'] : 'dashboard';
?>
<?php include 'src/includes/header.php';?>
<?php
    if(is_ph()):
        $content = array(
            'static' => array(
                'breadcrumb_1' => 'My Account',
                'breadcrumb_2' => 'Edit Profile',
                'list_tab_1' => 'Dashboard',
                'list_tab_2' => 'Edit Profile',
                'list_tab_3' => 'My Orders',
                'list_tab_4' => 'You Do You Rewards',
                'list_tab_5' => 'Logout',
                'tab_1_title' => 'Dashboard',
                'tab_content_1' => 'Hello, Albert Flores!',
                'tab_content_2' => 'From your account dashboard you have the ability to view a 
                                    snapshot of your recent account activity and update your 
                                    account information. Select a link below to view or edit 
                                    information.',
                'tab_1_left_title' => 'Account Information',
                'tab_1_name' => 'Albert Flores',
                'tab_1_email' => 'aflores@gmail.com',
                'tab_1_right_title' => 'Billing Address',
                'tab_1_name_right' => 'Albert Flores',
                'tab_1_address' => '22 Ana Maria, San Antonio, Quezon City, 
                                    Second District NCR, National Capital Region, 
                                    PHL',
                'tab_1_contact' => '+63 917 123 4567',
                'tab_1_bottom_title_mb' => 'Want free pizza?',
                'tab_1_bottom_title_dt' => 'Want free pizza?',
                'tab_1_bottom_content_1' => 'Sign up to our new loyalty program and earn your way to a free pizza!',
                'tab_1_bottom_content_2' => 'Visit the You Do You Rewards tab to enroll now.',
                'tab_2_title' => 'Edit Profile',
                'tab_2_process_1' => 'Personal details',
                'tab_2_fname_label' => 'FIRST NAME',
                'tab_2_fname_placeholder' => 'First Name',
                'tab_2_lname_label' => 'last name',
                'tab_2_lname_placeholder' => 'Last name',
                'tab_2_bdate_label' => 'BIRTHDATE',
                'tab_2_bdate_placeholder' => 'Birthdate',
                'tab_2_gender_label_tb' => 'SELECT GENDER',
                'tab_2_gender_label_mb' => 'Gender',
                'tab_2_process_2' => 'Contact information',
                'tab_2_email_label' => 'EMAIL ADDRESS',
                'tab_2_email_placeholder' => 'Email address',
                'tab_2_mobile_num_label' => 'Mobile number',
                'tab_2_contact_label' => 'other contact number (MOBILE/LANDLINE)',
                'tab_2_contact_placeholder' => 'Type mobile/landline',
                'tab_2_process_3' => 'Billing address',
                'tab_2_address1_label' => 'ADDRESS 1',
                'tab_2_address1_placeholder' => 'Address 1',
                'tab_2_address2_label' => 'ADDRESS 2',
                'tab_2_address2_placeholder' => 'Address 2',
                'tab_2_city_label' => 'CITY',
                'tab_2_city_placeholder' => 'City',
                'tab_2_province_label' => 'PROVINCE',
                'tab_2_province_placeholder' => 'Province',
                'tab_2_postal_label' => 'POSTAL CODE',
                'tab_2_postal_placeholder' => 'Postal Code',
                'tab_2_country_label' => 'COUNTRY',
                'tab_2_country_placeholder' => 'Country',
                'tab_2_process_4' => 'Change password',
                'tab_2_newpass_label' => 'NEW PASSWORD',
                'tab_2_newpass_placeholder' => 'Type Password',
                'tab_2_confirmpass_label' => 'CONFIRM PASSWORD',
                'tab_2_confirmpass_placeholder' => 'Type Password',
                'tab_2_recommend' => 'We recommend that you choose a password apart from your names, birthdays, or 
                                        street addresses associated with you.',
            ),
            'buttons' => array(
                'update_btn' => 'Update information',
                'change_pass_btn' => 'CHANGE PASSWORD',
                'update_profile' => 'UPDATE PROFILE',
    
            ),
            'images' => array(
                'home_img' => 'ic_home.svg',
                'tag_new_img' => 'dist/images/ic-new-2.svg',
                'pattern_sm' => 'pattern-sm-2.png',
                'pattern_lg' => 'pattern-lg-2.png',
                'reward_logo' => 'rewards-logo.png',
            ),
        );
    endif;

    if(is_max()):
        $content = array(
            'static' => array(
                'breadcrumb_1' => 'My Account',
                'breadcrumb_2' => 'Edit Profile',
                'list_tab_1' => 'Dashboard',
                'list_tab_2' => 'Edit Profile',
                'list_tab_3' => 'My Orders',
                'list_tab_4' => 'You Do You Rewards',
                'list_tab_5' => 'Logout',
                'tab_1_title' => 'Dashboard',
                'tab_content_1' => 'Hello, Albert Flores!',
                'tab_content_2' => 'From your account dashboard you have the ability to view a 
                                    snapshot of your recent account activity and update your 
                                    account information. Select a link below to view or edit 
                                    information.',
                'tab_1_left_title' => 'Account Information',
                'tab_1_name' => 'Albert Flores',
                'tab_1_email' => 'aflores@gmail.com',
                'tab_1_right_title' => 'Billing Address',
                'tab_1_name_right' => 'Albert Flores',
                'tab_1_address' => '22 Ana Maria, San Antonio, Quezon City, 
                                    Second District NCR, National Capital Region, 
                                    PHL',
                'tab_1_contact' => '+63 917 123 4567',
                'tab_1_bottom_title_mb' => 'Want free pizza?',
                'tab_1_bottom_title_dt' => 'Want free pizza?',
                'tab_1_bottom_content_1' => 'Sign up to our new loyalty program and earn your way to a free pizza!',
                'tab_1_bottom_content_2' => 'Visit the You Do You Rewards tab to enroll now.',
                'tab_2_title' => 'Edit Profile',
                'tab_2_process_1' => 'Personal Details',
                'tab_2_fname_label' => 'First Name',
                'tab_2_fname_placeholder' => 'First Name',
                'tab_2_lname_label' => 'Last Name',
                'tab_2_lname_placeholder' => 'Last name',
                'tab_2_bdate_label' => 'Birthdate',
                'tab_2_bdate_placeholder' => 'Birthdate',
                'tab_2_gender_label_tb' => 'Select Gender',
                'tab_2_gender_label_mb' => 'Gender',
                'tab_2_process_2' => 'Contact Information',
                'tab_2_email_label' => 'Email Address',
                'tab_2_email_placeholder' => 'Email address',
                'tab_2_mobile_num_label' => 'Mobile number',
                'tab_2_contact_label' => 'Other Contact Number (Mobile/Landline)',
                'tab_2_contact_placeholder' => 'Type your alternative mobile/landline',
                'tab_2_process_3' => 'Billing address',
                'tab_2_address1_label' => 'Address 1',
                'tab_2_address1_placeholder' => 'Address 1',
                'tab_2_address2_label' => 'Address 2',
                'tab_2_address2_placeholder' => 'Address 2',
                'tab_2_city_label' => 'City',
                'tab_2_city_placeholder' => 'City',
                'tab_2_province_label' => 'Province',
                'tab_2_province_placeholder' => 'Province',
                'tab_2_postal_label' => 'Postal Code',
                'tab_2_postal_placeholder' => 'Postal Code',
                'tab_2_country_label' => 'Country',
                'tab_2_country_placeholder' => 'Country',
                'tab_2_process_4' => 'Change Password',
                'tab_2_newpass_label' => 'New Password',
                'tab_2_newpass_placeholder' => 'Type your password',
                'tab_2_confirmpass_label' => 'Confirm Password',
                'tab_2_confirmpass_placeholder' => 'Re-type your password',
                'tab_2_recommend' => 'We recommend that you choose a password apart from your names, birthdays, or 
                                        street addresses associated with you.',
            ),
            'buttons' => array(
                'back' => 'Back to My Account',
                'update_btn' => 'Update information',
                'change_pass_btn' => 'Change Password',
                'update_profile' => 'Update Profile',
    
            ),
            'images' => array(
                'home-img' => 'ic-max-home-red.svg',
                'home_img' => 'ic_home.svg',
                'tag_new_img' => 'dist/images/ic-new-2.svg',
                'pattern_sm' => 'pattern-sm-2.png',
                'pattern_lg' => 'pattern-lg-2.png',
                'reward_logo' => 'rewards-logo.png',
            ),
        );
    endif;
    $gender = [
        [
            'name' => 'Male',
            'value' => 'male',
        ],
        [
            'name' => 'Female',
            'value' => '',
        ],
    ];
?>
<div class="main-wrapper">
    <section class="c-account js-account-bg default-bg">
        <div class="c-breadcrumbs">
            <div class="o-container">
                <?php if(is_ph()):?>
                    <ul class="[ u-df-mb ]">
                        <li><a href="/"><img src="dist/images/<?= $content['images']['home_img']; ?>" alt=""></a></li>
                        <li><a href="/"><?= $content['static']['breadcrumb_1']; ?></a></li>
                        <li><a href="/"><?= $content['static']['breadcrumb_2']; ?></a></li>
                    </ul>
                <?php endif;?>

                <?php if(is_max()):?>
                    <ul class="[ u-df-mb ]">
                        <li><a href="/"><img src="dist/images/<?= $content['images']['home-img']; ?>" alt=""></a></li>
                        <li><a href="/account.php" class="color_grey"><?= $content['static']['breadcrumb_1']; ?></a></li>

                        <li class="c-list-tab <?= $tab == 'dashboard' ? 'active' : '' ?>" data-target-tab="dashboard"><a href="#"><?= $content['static']['list_tab_1']; ?></a></li>
                        <li class="c-list-tab <?= $tab == 'edit-profile' ? 'active' : '' ?>" data-target-tab="edit-profile"><a href="#"><?= $content['static']['list_tab_2']; ?></a></li>
                        <li class="c-list-tab <?= $tab == 'my-orders' ? 'active' : '' ?>" data-target-tab="my-orders"><a href="#"><?= $content['static']['list_tab_3']; ?></a></li>
                        <li class="c-list-tab <?= $tab == 'logout' ? 'active' : '' ?>" data-target-tab="logout"><a href="#"><?= $content['static']['list_tab_5']; ?></a></li>
                    </ul>

                    <a href="#">
                        <i class="ic-max-arrow-left"></i>
                        <span><?= $content['buttons']['back']; ?></span>
                    </a>
                <?php endif;?>
            </div>
        </div>
        <div class="o-container">
            <div class="c-account-content [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r ]">
                <ul class="c-account-content_nav [ u-df-mb u-df-mb-fd-r u-df-tb-fd-c ]">
                    <li class="<?= $tab == 'dashboard' ? 'active' : '' ?>" <?php if(is_max()):?>data-trigger-tab="dashboard"<?php endif;?> data-trigger-layout="dashboard"><?= $content['static']['list_tab_1']; ?></li>
                    <li class="js-edit-profile <?= $tab == 'edit-profile' ? 'active' : '' ?>" <?php if(is_max()):?>data-trigger-tab="edit-profile"<?php endif;?> data-trigger-layout="edit-profile"><?= $content['static']['list_tab_2']; ?></li>
                    <li class="<?= $tab == 'my-orders' ? 'active' : '' ?>" <?php if(is_max()):?>data-trigger-tab="my-orders"<?php endif;?> data-trigger-layout="my-orders"><?= $content['static']['list_tab_3']; ?></li>
                    <?php if(is_ph()):?><li class="<?= $tab == 'you-do-you' ? 'active' : '' ?>" data-trigger-layout="you-do-you"><?= $content['static']['list_tab_4']; ?> <img src="<?= $content['images']['tag_new_img']; ?>" alt="" ></li><?php endif;?>
                    <li class="<?php if(is_max()):?><?= $tab == 'logout' ? 'active' : '' ?><?php endif;?>" <?php if(is_max()):?>id="js-logout" data-trigger-tab="logout"<?php endif;?> <?php if(is_ph()):?>data-trigger-layout="logout"<?php endif?>><?= $content['static']['list_tab_5']; ?></li>
                </ul>
                <div class="c-account-content_panel [ u-df-mb-fd-c u-df-mb-ai-s ] <?= $tab == 'dashboard' ? 'active' : '' ?>" data-target-layout="dashboard">
                    <h3 class="o-header-title-slant"><?= $content['static']['tab_1_title']; ?></h3>
                    <div class="c-account-content_panel--detail for-dashboard">
                        <p><?= $content['static']['tab_content_1']; ?></p>
                        <p>
                            <?= $content['static']['tab_content_2']; ?>    
                        </p>
                        <div class="[ u-df-mb u-df-mb-w ]">
                            <div class="info-content [ u-df-mb u-df-mb-fd-c ]">
                                <h5 class="h5"><?= $content['static']['tab_1_left_title']; ?></h5>
                                <div class="info-content_card [ u-df-mb ]">
                                    <div class="info-content_card--icon"><i class="<?php if(is_ph()):?>ic-user-c<?php endif;?><?php if(is_max()):?>ic-user-c-grey<?php endif;?>"></i></div>
                                    <div class="info-content_card--detail">
                                        <h6 class="h6"><?= $content['static']['tab_1_name']; ?></h6>
                                        <span><?= $content['static']['tab_1_email']; ?></span>
                                    </div>
                                </div>
                                <button class="o-button o-button-lg <?php if(is_max()):?>js-redirect-profile<?php endif;?>" <?php if(is_max()):?>data-trigger-layout="edit-profile" data-trigger-tab="edit-profile"<?php endif;?>>
                                    <span><?= $content['buttons']['update_btn']; ?></span>
                                </button>
                                <button class="o-button o-button-lg o-button-trans o-button-bordered <?php if(is_max()):?>js-changePass<?php endif;?>" <?php if(is_max()):?>data-trigger-layout="edit-profile" data-trigger-tab="edit-profile"<?php endif;?>>
                                    <span><?= $content['buttons']['change_pass_btn']; ?></span>
                                </button>
                            </div>
                            <div class="info-content for-billing [ u-df-mb u-df-mb-fd-c ]">
                                <h5 class="h5"><?= $content['static']['tab_1_right_title']; ?></h5>
                                <div class="info-content_card [ u-df-mb ]">
                                    <div class="info-content_card--icon"><i class="<?php if(is_ph()):?>ic-card-c<?php endif;?><?php if(is_max()):?>ic-card-c-grey<?php endif;?>"></i></div>
                                    <div class="info-content_card--detail">
                                        <h6 class="h6"><?= $content['static']['tab_1_name_right']; ?></h6>
                                        <p>
                                            <?= $content['static']['tab_1_address']; ?>
                                        </p>
                                        <span><?= $content['static']['tab_1_contact']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if(is_ph()):?>
                            <div class="dashboard-banner">
                                <span class="mobile body-1 body-1--bold"><?= $content['static']['tab_1_bottom_title_mb']; ?></span>
                                <div class="o-container [ u-df-mb-fd-c ]">
                                    <div class="banner-images">
                                        <div class="banner-bg-wrapper">
                                            <img src="dist/images/you-do-you/<?= $content['images']['pattern_sm']; ?>" class="img-responsive img-sm" alt="New customer tick box background" role="presentation" />
                                            <img src="dist/images/you-do-you/<?= $content['images']['pattern_lg']; ?>" class="img-responsive img-lg" alt="New customer tick box background" role="presentation" />
                                        </div>
                                        <div class="banner-logo-wrapper [ u-df-mb-ai-c-jc-c ]">
                                            <img src="dist/images/you-do-you/<?= $content['images']['reward_logo']; ?>" alt="You Do You rewards logo" role="presentation" />
                                        </div>
                                    </div>
                                    <div class="text-container">
                                        <p class="desktop body-1 body-1--bold"><?= $content['static']['tab_1_bottom_title_dt']; ?></p>
                                        <p class="body-1"><?= $content['static']['tab_1_bottom_content_1']; ?></p>
                                        <p class="body-1"><?= $content['static']['tab_1_bottom_content_2']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
                <div class="c-account-content_panel <?= $tab == 'edit-profile' ? 'active' : '' ?>" data-target-layout="edit-profile">
                    <h3 class="o-header-title-slant"><?= $content['static']['tab_2_title']; ?></h3>
                    <div class="c-account-content_panel--detail for-edit-profile">
                        <form action="" class="o-form-timeline">
                            <div class="o-form-group [ u-df-mb u-df-mb-w ]">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                                <label for=""><?= $content['static']['tab_2_process_1']; ?></label>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['tab_2_fname_label']; ?></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="firstName" class="o-form-group_input readonly" placeholder="<?= $content['static']['tab_2_fname_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" value="Albert" readonly>
                                    </div>
                                </div>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['tab_2_lname_label']; ?></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="lastName" class="o-form-group_input readonly" placeholder="<?= $content['static']['tab_2_lname_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" value="Flores" readonly>
                                    </div>
                                </div>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['tab_2_bdate_label']; ?></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="birthDate" class="o-form-group_input readonly" placeholder="<?= $content['static']['tab_2_bdate_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" value="October 30" readonly>
                                        <?php if(is_max()):?><span class="dropdown-disabled"></span><?php endif;?>
                                    </div>
                                </div>

                                <?php if(is_ph()):?>
                                    <div class="o-form-group-inner w-100">
                                        <label for="" class="[ u-dnc-mb u-dbc-tb ]"><?= $content['static']['tab_2_gender_label_tb']; ?></label>
                                        <label for="" class="[ u-dnc-tb u-dbc-mb ]"><?= $content['static']['tab_2_gender_label_mb']; ?></label>
                                        <div class="o-form-group_radio">
                                            <!-- <label>
                                                <input type="radio" name="gender"  class="readonly" disabled value="male">
                                                <span class="radiomark"></span>
                                                <span class="label-name">Male</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="gender" checked  class="readonly" disabled value="female">
                                                <span class="radiomark"></span>
                                                <span class="label-name">Female</span>
                                            </label> -->
                                            <?php foreach($gender as $key => $value): ?>
                                                <label>
                                                    <input type="radio" name="gender" checked  class="readonly" disabled value="<?= $value['value'] ?>">
                                                    <span class="radiomark"></span>
                                                    <span class="label-name"><?= $value['name'] ?></span>
                                                </label>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif;?>
                                

                                <?php if(is_max()):?>  
                                    <div class="o-form-group-inner for-gender w-100">
                                        <label for="" class="[ u-dnc-mb u-dbc-tb ]"><?= $content['static']['tab_2_gender_label_tb']; ?></label>
                                        <label for="" class="[ u-dnc-tb u-dbc-mb ]"><?= $content['static']['tab_2_gender_label_mb']; ?></label>
                                        <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                            <input type="hidden" name="gender" class="o-form-group_input" autocomplete="off" readonly>
                                            <div class="o-form-panels_card">
                                                <div class="o-form-panels_card--detail pad-l-lg [ u-df-mb u-df-mb-ai-c ] active" data-trigger-panel="gender" data-panel-value="Male">
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
                            <div class="o-form-group [ u-df-mb u-df-mb-w ]">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                                <label for=""><?= $content['static']['tab_2_process_2']; ?></label>
                                <div class="o-form-group-inner for-edit-profile_email">
                                    <label for=""><?= $content['static']['tab_2_email_label']; ?></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="email" class="o-form-group_input readonly" placeholder="<?= $content['static']['tab_2_email_placeholder']; ?><?= $content['static']['45']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" value="aflores@gmail.com" readonly>
                                    </div>
                                </div>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['tab_2_mobile_num_label']; ?></label>
                                    <div class="o-form-group_standard o-form-group_phone">
                                        <input type="text" name="mobileNoPre" class="o-form-group_input readonly" disabled placeholder="00" data-listen="input" autocomplete="off" data-required-validate="true" value="+63">
                                        <input type="text" name="mobileNo" class="o-form-group_input" placeholder="Mobile #" data-listen="input" autocomplete="off" data-required-validate="true" value="9175183329"  data-validate="number">
                                    </div>
                                </div>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['tab_2_contact_label']; ?></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="landline" class="o-form-group_input" placeholder="<?= $content['static']['tab_2_contact_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                    </div>
                                </div>
                            </div>
                            <div class="o-form-group o-form-dropdown force-tail [ u-df-mb u-df-mb-w ]">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                                <label for=""><?= $content['static']['tab_2_process_3']; ?></label>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['tab_2_address1_label']; ?></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="address1" class="o-form-group_input <?php if(is_max()):?>text-center<?php endif;?>" placeholder="<?= $content['static']['tab_2_address1_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" value="1234 Jasmine Street">
                                    </div>
                                </div>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['tab_2_address2_label']; ?></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="address2" class="o-form-group_input" placeholder="<?= $content['static']['tab_2_address2_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" value="Tahanan Village">
                                    </div>
                                </div>
                                <div class="o-form-group-inner o-form-dropdown_input">
                                    <label for=""><?= $content['static']['tab_2_city_label']; ?></label>
                                    <input type="text" name="city" class="o-form-group_input" placeholder="<?= $content['static']['tab_2_city_placeholder']; ?>" data-listen="input" autocomplete="off" readonly data-required-validate="true">
                                    <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                        <?php foreach($phCities as $k => $v): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $v['name'] ?>">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $v['name'] ?></h5>
                                            </div>
                                        </li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                                <div class="o-form-group-inner o-form-dropdown_input">
                                    <label for=""><?= $content['static']['tab_2_province_label']; ?></label>
                                    <input type="text" name="province" class="o-form-group_input" placeholder="<?= $content['static']['tab_2_province_placeholder']; ?>" data-listen="input" autocomplete="off" readonly data-required-validate="true">
                                    <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                        <?php foreach($phProvinces as $k => $v): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $v['name'] ?>">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $v['name'] ?></h5>
                                            </div>
                                        </li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                                <div class="o-form-group-inner">
                                    <label for=""><?= $content['static']['tab_2_postal_label']; ?></label>
                                    <div class="o-form-group_standard">
                                        <input type="text" name="postal" class="o-form-group_input <?php if(is_max()):?>text-center<?php endif;?>" placeholder="<?= $content['static']['tab_2_postal_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true" value="1234">
                                    </div>
                                </div>
                                <div class="o-form-group-inner o-form-dropdown_input">
                                    <label for=""><?= $content['static']['tab_2_country_label']; ?></label>
                                    <input type="text" name="country" class="o-form-group_input" placeholder="<?= $content['static']['tab_2_country_placeholder']; ?>" data-listen="input" autocomplete="off" readonly data-required-validate="true">
                                    <ul class="[ u-df-mb u-df-mb-fd-c ]">
                                        <?php foreach($countries as $k => $v): ?>
                                        <li class="[ u-df-mb ]" data-select-value="<?= $v['name'] ?>">
                                            <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                                <h5 class="h5"><?= $v['name'] ?></h5>
                                            </div>
                                        </li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                                <div class="o-form-group-inner for-edit-profile_spacer"></div>
                                <div class="o-form-group-inner for-edit-profile_cta">
                                    <button class="o-button o-button-lg" <?php if(is_max()):?>data-trigger-modal="edit-profile-success"<?php endif;?>>
                                        <span><?= $content['buttons']['update_profile']; ?></span>
                                    </button>
                                </div>
                            </div>
                            <div class="o-form-group o-form-dropdown force-tail [ u-df-mb u-df-mb-w ]">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">4</span>
                                <label for=""><?= $content['static']['tab_2_process_4']; ?></label>
                                <div class="o-form-group-inner o-form-group_password">
                                    <label for="">
                                        <?= $content['static']['tab_2_newpass_label']; ?>
                                        <span class="required">*</span>
                                    </label>
                                    <div class="o-form-group_standard">
                                        <input type="password" name="password1" class="o-form-group_input password-hide <?php if(is_max()):?>js-max-password1<?php endif;?>" placeholder="<?= $content['static']['tab_2_newpass_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                        <span class="ic-password password-hide <?php if(is_max()):?>togglePass1<?php endif;?>" data-trigger-password="unhide"></span>
                                        <?php if(is_max()):?><span id=dummyPass1 class="password-dummy1 show" ></span><?php endif;?>
                                    </div>
                                    <p class="italize">
                                        <?= $content['static']['tab_2_recommend']; ?>
                                    </p>
                                </div>
                                <div class="o-form-group-inner o-form-group_password">
                                    <label for="">
                                        <?= $content['static']['tab_2_confirmpass_label']; ?>
                                        <span class="required">*</span>
                                    </label>
                                    <div class="o-form-group_standard">
                                        <input type="password" name="password2" class="o-form-group_input password-hide <?php if(is_max()):?>js-max-password2<?php endif;?>" placeholder="<?= $content['static']['tab_2_confirmpass_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                        <span class="ic-password password-hide <?php if(is_max()):?>togglePass2<?php endif;?>" data-trigger-password="unhide"></span>
                                        <?php if(is_max()):?><span id=dummyPass2 class="password-dummy2 show" ></span><?php endif;?>
                                    </div>
                                </div>
                                <div class="o-form-group-inner for-edit-profile_spacer"></div>
                                <div class="o-form-group-inner for-edit-profile_cta">
                                    <button class="o-button o-button-lg" <?php if(is_max()):?>data-trigger-modal="change-pass-success"<?php endif;?>>
                                        <span><?= $content['buttons']['change_pass_btn']; ?></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="c-account-content_panel <?= $tab == 'my-orders' ? 'active' : '' ?>" data-target-layout="my-orders">
                    <h3 class="o-header-title-slant [ u-dnc-mb u-dbc-tb ]">Recent Orders</h3>
                    <?php if(is_max()):?><h3 class="o-header-title-slant [ u-dnc-tb u-dbc-mb ]">Recent Orders</h3><?php endif;?>
                    <?php if(is_ph()):?><h3 class="o-header-title-slant [ u-dnc-tb u-dbc-mb ]">MY ORDERS</h3><?php endif;?>
                    <div class="c-account-content_panel--detail for-recent-orders [ u-df-mb u-df-mb-fd-c ]">
                        <div class="order-item apply-tail current [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]">
                            <div class="order-item_col [ u-df-mb u-df-mb-fd-c ]">
                                <span>Order #</span>
                                <h3 class="h3">YC6543370</h3>
                                <div class="order-item_col--detail">
                                    <h6 class="h6">Date</h6>
                                    <span>February 24, 2021, 16:50:02</span>
                                </div>
                            </div>
                            <div class="order-item_col">
                                <div class="order-item_col--detail">
                                    <h6 class="h6">Amount</h6>
                                    <span>P 1,495</span>
                                </div>
                                <div class="order-item_col--detail">
                                    <h6 class="h6">Payment Method</h6>
                                    <span>Pay online via Credit/Debit Card</span>
                                </div>
                                <div class="order-item_col--detail">
                                    <h6 class="h6">Transaction type</h6>
                                    <span>Deliver Later</span>
                                </div>
                            </div>
                            <div class="order-item_col [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                <button class="o-button o-button-lg <?php if(is_max()):?>o-button-track-order<?php endif;?>">
                                    <span>track order</span>
                                </button>
                                <button class="o-button o-button-lg o-button-trans o-button-bordered <?php if(is_max()):?>o-button-view-details<?php endif;?>" data-order-detail="id_number" data-trigger-modal="order-details">
                                    <span>View Details</span>
                                    <?php if(is_ph()):?><i class="ic-magnify"></i><?php endif;?>
                                </button>
                            </div>
                        </div>
                        <div class="order-item apply-tail current [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]">
                            <div class="order-item_col [ u-df-mb u-df-mb-fd-c ]">
                                <span>Order #</span>
                                <h3 class="h3">YC6543370</h3>
                                <div class="order-item_col--detail">
                                    <h6 class="h6">Date</h6>
                                    <span>February 24, 2021, 16:50:02</span>
                                </div>
                            </div>
                            <div class="order-item_col">
                                <div class="order-item_col--detail">
                                    <h6 class="h6">Amount</h6>
                                    <span>P 1,495</span>
                                </div>
                                <div class="order-item_col--detail">
                                    <h6 class="h6">Payment Method</h6>
                                    <span>Pay online via Credit/Debit Card</span>
                                </div>
                                <div class="order-item_col--detail">
                                    <h6 class="h6">Transaction type</h6>
                                    <span>Deliver Later</span>
                                </div>
                            </div>
                            <div class="order-item_col [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                <?php if(is_ph()):?>
                                    <button class="o-button o-button-lg" data-trigger-modal="order-details">
                                        <span>View Details</span>
                                        <i class="ic-magnify"></i>
                                    </button>
                                <?php endif;?>

                                <?php if(is_max()):?>
                                    <button class="o-button o-button-lg <?php if(is_max()):?>o-button-track-order<?php endif;?>">
                                        <span>track order</span>
                                    </button>
                                    <button class="o-button o-button-lg o-button-trans o-button-bordered <?php if(is_max()):?>o-button-view-details<?php endif;?>" data-trigger-modal="order-details" data-order-detail="id_number">
                                        <span>View Details</span>
                                        <?php if(is_ph()):?><i class="ic-magnify"></i><?php endif;?>
                                    </button>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="order-item <?php if(is_ph()):?>apply-tail<?php endif;?> current [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-jc-sb u-df-mb-w ]">
                            <div class="order-item_col [ u-df-mb u-df-mb-fd-c ]">
                                <span>Order #</span>
                                <h3 class="h3">YC6543370</h3>
                                <div class="order-item_col--detail">
                                    <h6 class="h6">Date</h6>
                                    <span>February 24, 2021, 16:50:02</span>
                                </div>
                            </div>
                            <div class="order-item_col">
                                <div class="order-item_col--detail">
                                    <h6 class="h6">Amount</h6>
                                    <span>P 1,495</span>
                                </div>
                                <div class="order-item_col--detail">
                                    <h6 class="h6">Payment Method</h6>
                                    <span>Pay online via Credit/Debit Card</span>
                                </div>
                                <div class="order-item_col--detail">
                                    <h6 class="h6">Transaction type</h6>
                                    <span>Deliver Later</span>
                                </div>
                            </div>
                            <div class="order-item_col [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                <?php if(is_ph()):?>
                                    <button class="o-button o-button-lg" data-trigger-modal="order-details">
                                        <span>View Details</span>
                                        <i class="ic-magnify"></i>
                                    </button>
                                <?php endif;?>

                                <?php if(is_max()):?>
                                    <button class="o-button o-button-lg <?php if(is_max()):?>o-button-track-order<?php endif;?>">
                                        <span>track order</span>
                                    </button>
                                    <button class="o-button o-button-lg o-button-trans o-button-bordered <?php if(is_max()):?>o-button-view-details<?php endif;?>" data-trigger-modal="order-details" data-order-detail="id_number">
                                        <span>View Details</span>
                                        <?php if(is_ph()):?><i class="ic-magnify"></i><?php endif;?>
                                    </button>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                    YOU DO YOU REWARDS SECTION
                -->
                <?php include 'src/includes/c-you-do-you-rewards-tab.php';?>

                <div class="c-account-content_panel" data-target-layout="logout">
                    <h3 class="o-header-title-slant">Logout</h3>
                    <div class="c-account-content_panel--detail">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'src/includes/footer.php';?>
</div>