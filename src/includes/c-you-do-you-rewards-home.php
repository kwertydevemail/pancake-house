<?php
  $content = array(
    'static' => array(
        'order-count-text-1' => 'You have',
        'order-count-text-2' => 'free pizza/s!',
        'order-remaining-text-1' => 'Just',
        'order-remaining-text-2' => 'order/s left',
        'order-remaining-text-3' => 'before you get a free pizza!',
        'reward-content-text-1' => 'Start earning points by adding at least one (1) ala carte pizza of any flavor, size, or crust to your order!',
        'reward-content-text-2' => '1 valid transaction = 1 point',
        'rewards-unregistered-text-1' => 'want free pizza?',
        'rewards-unregistered-text-2' => 'Sign up to our loyalty program and earn your way to a free pizza! Plus, get access to exclusive offers, a birthday gift, and more! Terms and conditions apply.',
    ),
    'buttons' => array(
        'redeem' => 'Redeem Free Pizza',
        'enroll' => 'enroll now'
    ),
    'images' => array(
        'order-stamp-1' => 'ic-stamp-home.svg',
        'order-stamp-pizza-1' => 'ic-pizza-reward-home.svg',
        'rewards-unregistered-desktop' => 'rewards-logo-home-register.svg',
        'rewards-unregistered-mobile' => 'rewards-logo-home-register-m.svg',
        'rewards-intro-card-desktop' => 'rewards-logo-home.svg',
        'rewards-intro-card-mobile' => 'rewards-logo-home-m.svg',
    ),
    'link' => array(
        'sign-up' => 'https://customer.maxsgroupinc.com/subscription/home/dkk4os'
    ),
    'dynamic' => array(
    ),
  );

// FOR BACKEND; DUMMY DATA ONLY
  $is_registered = true;
  if(isset($_GET['registered']) && $_GET['registered'] == 'false'){
    $is_registered = false;
  }

  $orders = 6;
  if(isset($_GET['orders'])){
    $orders = (int) $_GET['orders'];
  }
  $modulo = $orders % 3;
  $free_pizza_count = 1;
  if(isset($_GET['free_pizza_count'])){
    $free_pizza_count = (int) $_GET['free_pizza_count'];
  }
  $orders_remaining = 0;


  $points_available = 8;
  $points_redeemed = 0;

  $transactions = [
    [
      'order_number' => 'Order Number',
      'points' => '+1 point',
      'date' => 'July 5, 2020',
      'status' => 'Earning | Expires December 31, 2021',
    ],
    [
      'order_number' => 'Order Number',
      'points' => '+1 point',
      'date' => 'July 18, 2020',
      'status' => 'Earning | Expires December 31, 2021',
    ],
    [
      'order_number' => 'Order Number',
      'points' => '+1 point',
      'date' => 'July 5, 2020',
      'status' => 'Earning | Expires December 31, 2021',
    ],
    [
      'order_number' => 'Order Number',
      'points' => '+1 point',
      'date' => 'July 18, 2020',
      'status' => 'Earning | Expires December 31, 2021',
    ],
    [
      'order_number' => 'Order Number',
      'points' => '+1 point',
      'date' => 'July 5, 2020',
      'status' => 'Earning | Expires December 31, 2021',
    ],
    [
      'order_number' => 'Order Number',
      'points' => '+1 point',
      'date' => 'July 18, 2020',
      'status' => 'Earning | Expires December 31, 2021',
    ],
    [
      'order_number' => 'Order Number',
      'points' => '+1 point',
      'date' => 'July 5, 2020',
      'status' => 'Earning | Expires December 31, 2021',
    ],
    [
      'order_number' => 'Order Number',
      'points' => '+1 point',
      'date' => 'July 18, 2020',
      'status' => 'Earning | Expires December 31, 2021',
    ],
    [
      'order_number' => 'Order Number',
      'points' => '+1 point',
      'date' => 'July 5, 2020',
      'status' => 'Earning | Expires December 31, 2021',
    ],
    [
      'order_number' => 'Order Number',
      'points' => '+1 point',
      'date' => 'July 18, 2020',
      'status' => 'Earning | Expires December 31, 2021',
    ],
  ];
  $transactions_count = count($transactions);

  $coupons = [
    [
      'title'       => 'Promo!',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla sit sapien gravida orci posuere habitant egestas.',
      'icon'        => 'dist/images/ic-megaphone.svg',
      'cta_text'    => 'Claim Coupon',
      'validity'    => 'Valid from December 1 to December 31, 2021',
      'type'        => 'generic',
      'claimed'     => true,
      'date_claimed'=> 'January 9, 2022'
    ],
    [
      'title'       => 'Happy Birthday!',
      'description' => 'You get a free regular pasta for being a You Do You Rewards member! Choose between Chicken Alfredo or Charlie Chan®',
      'icon'        => 'dist/images/ic-gift-box.svg',
      'cta_text'    => 'Claim Birthday Gift',
      'validity'    => 'Valid from December 1 to December 31, 2021',
      'type'        => 'birthday',
      'claimed'     => false,
      'date_claimed'=> null
    ],
    [
      'title'       => 'Promo!',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla sit sapien gravida orci posuere habitant egestas.',
      'icon'        => 'dist/images/ic-megaphone.svg',
      'cta_text'    => 'Claim Coupon',
      'validity'    => 'Valid from December 1 to December 31, 2021',
      'type'        => 'generic',
      'claimed'     => false,
      'date_claimed'=> null
    ],
    [
      'title'       => 'Happy Birthday!',
      'description' => 'You get a free regular pasta for being a You Do You Rewards member! Choose between Chicken Alfredo or Charlie Chan®',
      'icon'        => 'dist/images/ic-gift-box.svg',
      'cta_text'    => 'Claim Birthday Gift',
      'validity'    => 'Valid from December 1 to December 31, 2021',
      'type'        => 'birthday',
      'claimed'     => true,
      'date_claimed'=> 'January 9, 2022'
    ]
  ];
  $coupons_count = count($coupons);
?>

<div class="c-account-content_panel you-do-you-panel-home active" data-target-layout="you-do-you">
  <div class="for-rewards">

    <!-- REGISTERED STATE -->
    <?php if ($is_registered) : ?>

      <div class="rewards-container-desktop-only">
        <div class="rewards-intro-card__images">
          <div class="rewards-intro-card__logo-wrapper">
            <img class="rewards-intro-card__logo-desktop" src="dist/images/you-do-you/<?= $content['images']['rewards-intro-card-desktop']; ?>" alt="You Do You rewards logo" role="presentation" />
            <img class="rewards-intro-card__logo-mobile" src="dist/images/you-do-you/<?= $content['images']['rewards-intro-card-mobile']; ?>" alt="You Do You rewards logo" role="presentation" />
          </div>
        </div>

        <div class="rewards-intro-card__content-wrapper">

          <div class="rewards-order-card">
            <div class="order_count"><?= $content['static']['order-count-text-1']; ?><span class="h2"><?php echo $free_pizza_count ?></span><?= $content['static']['order-count-text-2']; ?></div>
            <div class="order_remaining"><?= $content['static']['order-remaining-text-1']; ?><span class="h2"><?php echo $orders_remaining ?></span><?= $content['static']['order-remaining-text-2']; ?> <span class="order_remaining__break"><?= $content['static']['order-remaining-text-3']; ?></span></div>
            <div class="order_stamp-counter">
              <div class="order_stamp <?= ($modulo == 1 || $modulo == 2 || $modulo == 0) && $orders !== 0 ? 'active' : '' ?>">
                <?php include "dist/images/{$content['images']['order-stamp-1']}>"; ?>
              </div>
              <div class="order_stamp--connector <?= ($modulo == 2 || $modulo == 0)  && $orders !== 0 ? 'active' : '' ?>"></div>
              <div class="order_stamp <?= ($modulo == 2 || $modulo == 0)  && $orders !== 0 ? 'active' : '' ?>">
                <?php include "dist/images/{$content['images']['order-stamp-1']}>"; ?>
              </div>
              <div class="order_stamp--connector <?= $modulo == 0  && $orders !== 0 ? 'active' : '' ?>"></div>
              <div class="order_stamp order_stamp--pizza <?= $modulo == 0  && $orders !== 0 ? 'active' : '' ?>">
                <?php include "dist/images/{$content['images']['order-stamp-pizza-1']}>"; ?>
              </div>
            </div>
            <button <?= ($modulo != 0 || $orders == 0) ? 'disabled' : ''?>  class="o-button o-button-lg">
                <span><?= $content['buttons']['redeem']; ?></span>
            </button>
          </div>
        </div>
        <div class="rewards-intro-card__content">
          <p class="body-1"><?= $content['static']['reward-content-text-1']; ?></p>
          <p class="body-1 body-1--bold"><?= $content['static']['reward-content-text-2']; ?></p>
        </div>
      </div>

    <!-- UNREGISTERED STATE -->
    <?php else: ?>
      <div class="rewards-unregistered">
        <div class="rewards-unregistered__image">
          <img class="rewards-unregistered__image-desktop" src="dist/images/you-do-you/<?= $content['images']['rewards-unregistered-desktop']; ?>" alt="You Do You rewards logo">
          <img class="rewards-unregistered__image-mobile" src="dist/images/you-do-you/<?= $content['images']['rewards-unregistered-mobile']; ?>" alt="You Do You rewards logo">
        </div>
        <div class="rewards-unregistered__text">
          <h4><?= $content['static']['rewards-unregistered-text-1']; ?></h4>
          <p><?= $content['static']['rewards-unregistered-text-2']; ?></p>
        </div>
        <div class="rewards-unregistered__button">
          <a class="rewards-unregistered__button-enroll" href=""><?= $content['buttons']['enroll']; ?></a>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>