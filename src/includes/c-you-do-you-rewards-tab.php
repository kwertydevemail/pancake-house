<?php
  $content = array(
    'static' => array(
        'header_title' => 'You Do You Rewards',
        'welcome_text' => 'Welcome to',
        'reward_content_1' => 'Start earning points by adding at least one (1) ala carte pizza of any flavor, size, or crust to your order!',
        'reward_content_2' => ' valid transaction = 1 point',
        'order_count_text_1' => 'You have',
        'order_count_text_2' => 'free pizza/s!',
        'order_count_text_3' => 'Just',
        'order_count_text_4' => 'order/s left' ,
        'order_count_text_5' => 'before you get a free pizza!',
        'transaction_header' => 'Recent Transactions',
        'last_transaction' => 'Last 90 Days',
        'points_available_label' => 'points available',
        'points_redeem_label' => 'points redeemed',
        'no_transact_msg_1' => 'No transactions to show.',
        'no_transact_msg_1' => 'Order more pizzas to earn more points!',
        'available_coupon_label' => 'Available Coupons',
        'no_available_coupon_label' => 'No available coupons',
        'claimed_text' => 'Claimed on',
        'reward_unregister_title_mb' => 'Earn your way to a free pizza with our new loyalty program!',
        'reward_unregister_title_dt' => 'Earn your way to a free pizza with our new loyalty program!',
        'terms_label_1' => 'I want to enroll in Yellow Cab’s You Do You Rewards to earn points and redeem a free pizza! By enrolling in the program, you agree to our',
        'terms_label_2' => 'Terms & Conditions',
        'terms_label_3' => 'and',
        'terms_label_4' => 'Conditions of Use.',
        'terms_label_5' => 'I agree to receive communications about Yellow Cab and the You Do You Rewards program.',
    ),
    'buttons' => array(
      'redeem_pizza' => 'Redeem Free Pizza',
      'view_menu' => 'View Menu',
      'view_more_transac' => 'View More Transactions',
      'hide_transaction' => 'Hide Transactions',
      'enroll_now' => 'Enroll Now',
    ),
    'images' => array(
        'reward_logo' => 'rewards-logo.png',
        'order_stamp' => 'ic-stamp.svg',
        'order_stamp_pizza' => 'ic-pizza-reward.svg',
        'coupon_img' => 'ic-coupon.svg',
        'no_coupon' => 'ic-no-coupon.svg',
        'pattern_img_sm' => 'pattern-sm-2.png',
        'pattern_img_lg' => 'pattern-lg-2.png',
    ),
  );

// FOR BACKEND; DUMMY DATA ONLY
  $is_registered = true;

  $orders = 6;
  $modulo = $orders % 3;
  $free_pizza_count = 1;
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

<div class="c-account-content_panel you-do-you-panel <?= $tab == 'you-do-you' ? 'active' : '' ?>" data-target-layout="you-do-you">
  <div class="c-account-content_panel--detail for-rewards">
    <h3 class="o-header-title-slant <?= !$is_registered ? 'not-registered' : '' ?>"><?= $content['static']['header_title']; ?></h3>

    <!-- REGISTERED STATE -->
    <?php if ($is_registered) : ?>
      <!-- DESKTOP ONLY -->
      <div class="rewards-container-desktop-only">
        <div class="rewards-intro-card__images">
          <p class="rewards-intro-card__welcome"><?= $content['static']['welcome_text']; ?></p>
          <div class="rewards-intro-card__logo-wrapper">
            <img src="dist/images/you-do-you/<?= $content['images']['reward_logo']; ?>" alt="You Do You rewards logo" role="presentation" />
          </div>
        </div>

        <div class="rewards-intro-card__content-wrapper">
          <div class="rewards-intro-card__content">
            <p class="body-1"><?= $content['static']['reward_content_1']; ?></p>
            <p class="body-1 body-1--bold"><?= $content['static']['reward_content_2']; ?></p>
          </div>

          <div class="rewards-order-card">
            <div class="order_count"><?= $content['static']['order_count_text_1']; ?><span class="h2"><?php echo $free_pizza_count ?></span><?= $content['static']['order_count_text_2']; ?></div>
            <div class="order_remaining"><?= $content['static']['order_count_text_3']; ?><span class="h2"><?php echo $orders_remaining ?></span><?= $content['static']['order_count_text_4']; ?> <span><?= $content['static']['order_count_text_5']; ?></span></div>
            <div class="order_stamp-counter">
              <div class="order_stamp <?= ($modulo == 1 || $modulo == 2 || $modulo == 0) && $orders !== 0 ? 'active' : '' ?>">
                <?php include "dist/images/{$content['images']['order_stamp']}"; ?>
              </div>
              <div class="order_stamp--connector <?= ($modulo == 2 || $modulo == 0)  && $orders !== 0 ? 'active' : '' ?>"></div>
              <div class="order_stamp <?= ($modulo == 2 || $modulo == 0)  && $orders !== 0 ? 'active' : '' ?>">
                <?php include "dist/images/{$content['images']['order_stamp']}"; ?>
              </div>
              <div class="order_stamp--connector <?= $modulo == 0  && $orders !== 0 ? 'active' : '' ?>"></div>
              <div class="order_stamp order_stamp--pizza <?= $modulo == 0  && $orders !== 0 ? 'active' : '' ?>">
                <?php include "dist/images/{$content['images']['order_stamp_pizza']}"; ?>
              </div>
            </div>
            <button <?= ($modulo != 0 || $orders == 0) ? 'disabled' : ''?>  class="o-button o-button-lg">
                <span><?= $content['buttons']['redeem_pizza']; ?></span>
            </button>
          </div>
        </div>
      </div>
      <!-- END DESKTOP ONLY-->

    <div class="rewards-transactions-coupons-container">
      <div class="rewards-transactions-card <?= $coupons_count != 0 ? 'switch' : ''?>">
        <div class="rewards-transactions-card__header">
          <h4><?= $content['static']['transaction_header']; ?></h4>
          <p class="body-1"><?= $content['static']['last_transaction']; ?></p>
          <div class="rewards-transactions-card__points">
            <p class="rewards-transactions-card__points--available body-1 body-1--bold"><span><?php echo $points_available ?></span> <?= $content['static']['points_available_label']; ?></p>
            <p class="rewards-transactions-card__points--redeemed body-1 body-1--bold"><span><?php echo $points_redeemed ?></span> <?= $content['static']['points_redeem_label']; ?></p>
          </div>
        </div>

        <div class="rewards-transactions-card__list">
          <?php if ($transactions_count == 0) : ?>
            <p class="no-transaction"><?= $content['static']['no_transact_msg_1']; ?></p>
            <p class="no-transaction"><?= $content['static']['no_transact_msg_2']; ?></p>
          <?php else: ?>
            <ul class="rewards-transactions-card__items">
              <?php foreach ($transactions as $key=>$transaction) { ?>
              <li class="rewards-transactions-card__item <?= $key >= 5 ? 'hidden' : ''?>">
                <div class="rewards-transactions-card__item--order-details">
                  <p class="transaction-number"><?php echo $transaction['order_number'] ?></p>
                  <p class="transaction-points"><?php echo $transaction['points'] ?></p>
                </div>
                <div class="rewards-transactions-card__item--status-details">
                  <p class="transaction-status"><?php echo $transaction['status'] ?></p>
                  <p class="transaction-date"><?php echo $transaction['date'] ?></p>
                </div>
              </li>

              <?php }  ?>
            </ul>
          <?php endif; ?>
        </div>
        <?php if ($transactions_count <= 5) : ?>
          <a href="/menu.php" class="o-button o-button-lg o-button-trans o-button-bordered">
            <span><?= $content['buttons']['view_menu']; ?></span>
          </a>
          <?php else: ?>
            <button class="o-button o-button-lg o-button-trans o-button-bordered load-more-transactions">
              <span><?= $content['buttons']['view_more_transac']; ?></span>
            </button>

            <button class="o-button o-button-lg o-button-trans o-button-bordered hide-transactions hidden">
              <span><?= $content['buttons']['hide_transaction']; ?></span>
            </button>
          <?php endif; ?>
      </div>

      <div class="rewards-coupons-card <?= $coupons_count != 0 ? 'switch' : 'rewards-coupons-card--empty'?>">
        <div class="rewards-coupons-card__header">
          <h4><?= $content['static']['available_coupon_label']; ?></h4>
          <img src="dist/images/<?= $content['images']['coupon_img']; ?>" alt="coupon icon" role="presentation"/>
        </div>
        <div class="rewards-coupons-card__list">
          <?php if ($coupons_count == 0) : ?>
            <div class="rewards-coupons-card__list--empty">
              <img src="dist/images/<?= $content['images']['no_coupon']; ?>" alt="no coupon icon" role="presentation"/>
              <p class="no-coupons overline"><?= $content['static']['no_available_coupon_label']; ?></p>
            </div>
          <?php else: ?>
            <div class="coupon_container">
            <?php foreach ($coupons as $coupon) { ?>
              <div class="coupon <?= $coupon['type'] === 'birthday' ? 'birthday' : ''?> <?= $coupon['claimed'] ? 'claimed' : ''?>">
                <div class="coupon_top">
                  <img src="<?php echo $coupon['icon'] ?>" alt="coupon icon" role="presentation">
                  <div class="coupon_text">
                    <h4 class="h2"><?php echo $coupon['title'] ?></h4>
                    <p><?php echo $coupon['description'] ?></p>
                  </div>
                </div>
                <div class="coupon_tear">
                  <div class="coupon_tear--line"></div>
                </div>
                <div class="coupon_bottom">
                  <?php if ($coupon['claimed']) : ?>
                    <p class="bottom-claimed"><?= $content['static']['claimed_text']; ?> <?php echo $coupon['date_claimed'] ?></p>
                  <?php else: ?>
                    <button class="o-button o-button-lg">
                      <span><?php echo $coupon['cta_text'] ?></span>
                    </button>
                    <p><?php echo $coupon['validity'] ?></p>
                  <?php endif; ?>
                </div>
              </div>
            <?php }  ?>
            </div>
            <div class="coupon_slider-buttons">
              <button class="coupon_slider-buttons__prev"><i class="ic-slider-prev"></i></button>
              <button class="coupon_slider-buttons__next"><i class="ic-slider-next"></i></button>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- UNREGISTERED STATE -->
    <?php else: ?>
    <div class="c-new-customer-tick-box">
      <span class="header header--mobile body-1 body-1--bold"><?= $content['static']['reward_unregister_title_mb']; ?></span>
      <div class="o-container [ u-df-mb-fd-c ]">
        <div class="c-tick-box-images">
          <div class="tick-box-bg-wrapper">
            <img src="dist/images/you-do-you/<?= $content['images']['pattern_img_sm']; ?>" class="img-responsive img-sm" alt="New customer tick box background" role="presentation" />
            <img src="dist/images/you-do-you/<?= $content['images']['pattern_img_lg']; ?>" class="img-responsive img-lg" alt="New customer tick box background" role="presentation" />
          </div>
          <div class="tick-box-logo-wrapper [ u-df-mb-ai-c-jc-c ]">
            <img src="dist/images/you-do-you/<?= $content['images']['reward_logo']; ?>" alt="You Do You rewards logo" role="presentation" />
          </div>
        </div>
        <form action="" class="c-tick-box-form">
          <p class="header header--desktop body-1 body-1--bold"><?= $content['static']['reward_unregister_title_dt']; ?></p>
          <div class="c-tick-box-input-group o-form-group-inner w-100">
            <div class="c-tick-box-input o-form-group_checkbox for-terms">
              <label class="body-1">
                <?= $content['static']['terms_label_1']; ?> <a href="" data-trigger-modal="condition-of-use"><?= $content['static']['terms_label_2']; ?></a> <?= $content['static']['terms_label_3']; ?> <a href="" data-trigger-modal="conditions-of-use"><?= $content['static']['terms_label_4']; ?></a>
                <input type="checkbox" name="terms" data-validate="checkbox" data-required-validate="true" />
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="c-tick-box-input o-form-group_checkbox for-terms">
              <label class="body-1">
                <?= $content['static']['terms_label_5']; ?>
                <input type="checkbox" />
                <span class="checkmark"></span>
              </label>
            </div>
            <button type="submit"class="o-button o-button-lg">
              <span><?= $content['buttons']['enroll_now']; ?></span>
            </button>
          </div>
        </form>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>