<?php
    include 'functions.php';
    if(is_ph()):
        $header_trans_cards = [
            [
                'title' => 'Delivery',
                'sub-title' => 'Right to your doorstep',
                'image-url' => 'header-card-1.png',
                'session' => 'For Delivery',
            ],
            [
                'title' => 'Pick-Up',
                'sub-title' => 'Get it when convenient',
                'image-url' => 'header-card-2.png',
                'session' => 'For Pick-up',
            ],
        ];
    endif;

    if(is_max()):
        $header_trans_cards = [
            [
                'title' => 'Delivery',
                'sub-title' => 'Right to your doorstep',
                'image-url' => 'max-banner-dt.png',
                'icon' => 'src/images/nav/actions/max-cart-icon.svg',
                'session' => 'For Delivery',
            ],
            [
                'title' => 'Pickup',
                'sub-title' => 'Get it when convenient',
                'image-url' => 'max-banner-1-dt.png',
                'icon' => 'src/images/nav/actions/max-location-icon.svg',
                'session' => 'For Pick-up',
            ],
        ];
    endif;


    if(is_max()) {
        $content = array(
            'static' => array(
                'title' => "Max's Restaurant",
                'timezone-label' => 'Timezone Date',
                'timezone' => '00:00:00 AM',
                'cart-notif-number' => '1',
                'welcome-msg' => 'Welcome back,',
                'username' => 'John Doe',
    
                'tracsact-type-label' => 'Choose a transaction type',
                'default-address' => '1234 Jasmine Street, Tahanan Village, Paranaque, Metro Manila',
    
            ),
            'images' => array(
                // 'nav-logo' => 'logo-nav-max.png',
                'nav-logo' => 'Max_s Logo - B_W.png',
                'home-img' => 'ic-max-home.svg',
                'cart-img' => 'ic-max-cart.svg',
                'hamburger-img' => 'ic-max-hamburger-menu.svg',
            ),
            'buttons' => array(
                'change-to-pickup' => 'Change to Pick-up',
                'change-to-delivery' => 'Change to Delivery'
            ),
        );
    } elseif (is_ph()) {
        $content = array(
            'static' => array(
                'title' => 'Yellow Cab Pizza',
                'timezone-label' => 'Timezone Date',
                'timezone' => '00:00:00 AM',
                'cart-notif-number' => '1',
                'welcome-msg' => 'Welcome!',
                'username' => 'John Doe',
    
                'tracsact-type-label' => 'Choose a transaction type',
                'default-address' => '1234 Jasmine Street, Tahanan Village, Paranaque, Metro Manila',
    
            ),
            'images' => array(
                'nav-logo' => 'logo-ph.png',
                'home-img' => 'ph-home.svg',
                'cart-img' => 'ph-cart.svg',
                'hamburger-img' => 'ph-menu.svg',
            ),
            'buttons' => array(
                'change-to-pickup' => 'CHANGE TO PICK-UP'
            ),
        );  
    } else {
        $content = array(
            'static' => array(
                'title' => 'Yellow Cab Pizza',
                'timezone-label' => 'Timezone Date',
                'timezone' => '00:00:00 AM',
                'cart-notif-number' => '1',
                'welcome-msg' => 'Welcome!',
                'username' => 'John Doe',
    
                'tracsact-type-label' => 'Choose a transaction type',
                'default-address' => '1234 Jasmine Street, Tahanan Village, Paranaque, Metro Manila',
    
            ),
            'images' => array(
                'nav-logo' => 'logo-nav-q.png',
                'home-img' => 'ic-home-lg.svg',
                'cart-img' => 'ic-cart-lg.svg',
                'hamburger-img' => 'ic-hamburger-lg.svg',
            ),
            'buttons' => array(
                'change-to-pickup' => 'CHANGE TO PICK-UP'
            ),
        );  
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    if(is_max()):
        $bodyClass = 'theme-max';
    ?>
        <link rel="stylesheet" href="dist/max.css">
    <?php
    elseif(is_ph()):
        $bodyClass = 'theme-ph';
    ?>
        <link rel="stylesheet" href="dist/ph.css">
    <?php
    elseif(is_kk()):
        $bodyClass = 'theme-kk';
    ?>
        <link rel="stylesheet" href="dist/yc.css">
    <?php
    else:
        $bodyClass = 'theme-yc';
    ?>
        <link rel="stylesheet" href="dist/yc.css">
    <?php
    endif;
    ?>
    <!-- <link rel="stylesheet" href="dist/main.css"> -->
    <?php if(is_max()): ?>
        <link ref="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <?php endif; ?>
    <script src="dist/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title><?= $content['static']['title']; ?></title>
</head>
<body class="<?= $bodyClass; ?>">
    <header class="c-header <?= $withAddress ?>">
        <div class="o-container">
            <div class="c-nav-date-mobile">
                <p class="body-1" data-catcher="current-date"><?= $content['static']['timezone-label']; ?></p>
                <h3 class="h3" data-catcher="clock"><?= $content['static']['timezone']; ?></h3>
            </div>
            <nav class="c-nav-menu">
                <div class="c-nav-menu__logo-date">
                    <figure class="logo">
                        <a href="/">
                            <img src="dist/images/nav/logo/<?= $content['images']['nav-logo']; ?>" alt="">
                        </a>
                    </figure>
                    <div class="date-time [ u-df-mb ]">
                        <div class="date-time-detail">
                            <p class="" data-catcher="current-date"><?= $content['static']['timezone-label']; ?></p>
                            <h3 class="h3" data-catcher="clock"><?= $content['static']['timezone']; ?></h3>
                        </div>
                    </div>
                </div>
                <ul class="c-nav-menu__links">
                    <?php if(is_max()):?>
                        <?php if($signedIn): ?>
                            <li class="[ u-dn-mb ]">
                                <span class="span"><?= $content['static']['welcome-msg']; ?></span>
                                <span class="span"><?= $content['static']['username']; ?>!</span>
                            </li>
                        <?php else:?>
                            <li class="[ u-dn-mb ]">
                                <button type="submit" class="o-button">
                                    <span>Sign In</span>
                                </button>
                            </li>
                        <?php endif; ?>

                    <?php endif;?>

                    <?php if(is_ph()):?>
                        <?php if($signedIn): ?>
                            <li class="[ u-dn-mb ]">
                                <span class="span"><?= $content['static']['welcome-msg']; ?></span>
                                <span class="span"><?= $content['static']['username']; ?>!</span>
                            </li>
                        <?php else:?>
                            <li class="[ u-dn-mb ]">
                                <button type="submit" class="o-button top-left-radius">
                                    <span>Sign In</span>
                                </button>
                            </li>
                        <?php endif; ?>

                    <?php endif;?>

                    <li>
                        <a href="">
                            <?php if(is_ph()):?>
                                <img src="dist/images/<?= $content['images']['home-img']; ?>" alt="">
                            <?php endif;?>

                            <?php if(is_max()):?>
                                <div class="home-icon"></div>
                            <?php endif;?>
                        </a>
                    </li>
                    <?php if(is_max()):?>
                        <li class="js-search">
                            <a id="searchIc" href="#search">
                                <div id="toggle-search" class="search-icon show"></div>
                                <div id="close-search" class="close-search-icon hide"></div>
                            </a>
                        </li>
                    <?php endif;?>        
                    

                    <li>
                        <a id="cartIc" href="#cart">
                            <?php if(is_ph()):?>
                                <img id="cartLink" src="dist/images/<?= $content['images']['cart-img']; ?>" alt="">
                            <?php endif;?>

                            <?php if(is_max()):?>
                                <div id="cartLink" class="cart-icon"></div>
                            <?php endif;?>
                        </a>
                        <span class="cart-counter"><?= $content['static']['cart-notif-number']; ?></span>
                    </li>
                    <li>
                        <a href="" data-trigger-menu="menu">
                            <?php if(is_ph()):?>
                                <img src="dist/images/<?= $content['images']['hamburger-img']; ?>" alt="">
                            <?php endif;?>

                            <?php if(is_max()):?>
                                <div id="menuLink" class="menu-icon"></div>
                            <?php endif;?>

                        </a>
                        <ul class="c-nav-menu__links--submenu">
                            <?php if(is_ph()):?>
                                <li class="user-holder">
                                    <a href="javascript:void(0)">
                                        <span><?= $content['static']['welcome-msg']; ?></span>
                                        <span><?= $content['static']['username']; ?></span>
                                    </a>
                                </li>
                            <?php endif;?>
                            <li><a href="store-list.php">STORE LIST</a></li>
                            <li><a href="ordertracker-pickup.php">ORDER TRACKER</a></li>
                            <?php if($signedIn): ?>
                            <li>
                                <a href="" data-trigger-menu="submenu">MY ACCOUNT</a>
                                <ul class="c-nav-menu__links--innerSubmenu">
                                    <li><a href="account.php?tab=dashboard">Dashboard</a></li>
                                    <li><a href="account.php?tab=edit-profile">Edit Profile</a></li>
                                    <li><a href="account.php?tab=my-orders">My Orders</a></li>
                                </ul>
                            </li>
                            <li><a href="">log out</a></li>
                            <?php else:?>
                            <li><a href="login.php">LOGIN/register</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <?php if(isset($withAddress) && $withAddress): ?>
    <div class="c-address-affix active">
        <div class="o-container">
            <div class="c-address-affix_holder [ u-df-mb u-df-mb-ai-s u-df-tb-ai-c ]">
                <?php if(is_ph()):?><i class="<?= strtolower($purchaseType) == 'for delivery' ? 'ic-delivery' : 'ic-pickup' ?>"></i><?php endif;?>
                <?php if(is_max()):?>
                    <i class="<?= strtolower($purchaseType) == 'for delivery' ? 'ic-max-delivery' : 'ic-max-pickup' ?> [ u-dn-mb ]"></i>
                    <i class="<?= strtolower($purchaseType) == 'for delivery' ? 'ic-max-pickup-red' : 'ic-max-pickup-red' ?> [ u-dn-dt ]"></i>
                    <?php endif;?>

                <div class="c-address-affix_holder--details [ u-df-mb u-df-mb-ai-c u-df-mb-w u-df-dt-nw ]">
                    <h5 class="h5"><?= $purchaseType ?></h5>
                    <span><?= $content['static']['default-address']; ?> </span>
                    <a href="<?= $_SERVER['PHP_SELF'].'?purchaseType='.(strtolower($purchaseType) == 'for delivery' ? 'For Pick-up' : 'For Delivery').$getRequest  ?>" class="o-button ic-front">
                        <?php if(is_ph()):?><i class="ic-edit"></i><?php endif;?>

                        <?php if(is_max()):?>
                            <i class="ic-max-edit [ u-dn-mb ]"></i>
                            <i class="ic-max-edit-red [ u-dn-dt ]"></i>
                        <?php endif;?>

                        <?php if(is_ph()):?><span><?= $content['buttons']['change-to-pickup']; ?></span><?php endif;?>

                        <?php if(is_max()):?>
                            <span><?= strtolower($purchaseType) == 'for delivery' ? $content['buttons']['change-to-pickup'] : $content['buttons']['change-to-delivery'] ?></span>
                        <?php endif;?>

                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>
   <?php if($orderPage): ?>
    <div class="o-header-trans <?= $withAddress ?>">
        <div class="o-container">
            <h5 class="h5"><?= $content['static']['tracsact-type-label']; ?></h5>
            <div class="o-header-trans-cards [ <?php if(is_ph()):?>u-df-mb<?php endif;?> u-df-mb-ai-c u-df-mb-jc-c ]">
                <?php foreach($header_trans_cards as $k => $v): ?>
                <div class="o-header-trans-cards_card">
                    <a href="<?= $_SERVER['PHP_SELF'].'?type='.$_GET['type'].'&name='.$_GET['name'].'&purchaseType='.$v['session'] ?>" class="o-header-trans-cards_card--detail">
                        <figure>
                            <img src="dist/images/nav/<?= $v['image-url'] ?>" alt="">
                            <figcaption>
                                <h5 class="h5">
                                    <?= $v['title'] ?>
                                    <?php if(is_max()):?><img src="<?= $v['icon'] ?>" alt=""><?php endif;?>
                                    <?php if(is_ph()):?><i class="ic-arrow-right"></i><?php endif;?>
                                </h5>
                                <p><?= $v['sub-title'] ?></p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php include 'src/includes/modals/c-cart-side.php';?>
    <?php //  include 'src/includes/modals/c-search-top.php';?>