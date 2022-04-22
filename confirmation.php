<?php include 'src/includes/header.php';?>
<?php 
    if(is_ph()):
        $content = array(
            'static' => array(
                'headerDesktop' => 'Thank you for ordering at Yellow Cab Pizza Co',
                'headerMobile' => 'Thank you for <br/> ordering at <br/> Yellow Cab Pizza Co',
                'details' => 'These details have been sent to your email. Please see the order summary with the reference number',
                'inquiries' => 'For questions regarding your order you may contact us at Hotline: (02) 8-789-9999. </br> For other queries beyond business hours. Please message us at customercare@maxsgroupinc.com.',
                'deliveryDetail' => 'Delivery Details',
                'paymentDetails' => 'Payment Details',
                'referenceNumber' => 'Reference Number',
                'paymentOption' => 'Payment Option',
                'amount' => 'Amount',
                'billingDetails' => 'Billing Details',
                'yourOrder' => 'Your order',
                'subtotal' => 'Subtotal',
                'delivery' => 'Delivery/Service Charge',
                'total' => 'TOTAL',
            ),
            'buttons' => array(
                'track' => 'TRACK YOUR ORDER',
                'back' => 'BACK TO MENU',
            ),
            'images' => array(
                'stamp' => 'dist/images/yc-stamp.png',
            ),
            'link' => array(
            ),
            'dynamic' => array(
                'fname' => 'Albert',
                'lname' => 'Flores',
                'referenceNo' => 'YC6543370',
                'address' => '22 Ana Maria, San Antonio, Quezon City, Second District NCR, National Capital Region, PHL',
                'mobile' => '+63 917 123 4567',
                'city' => 'Quezon City - Visayas Avenue',
                'date' => 'Tuesday 23 February, 2021, 7:15 PM',
                'cutleries' => 'Order without cutleries',
                'notes' => 'Deliver to the lobby. :)',
                'paymentRefNo' => '7C6543370',
                'paymentOption' => 'Paid Online via Credit Card/Debit Card',
                'paymentAmount' => '1,495.00',
                'paymentfname' => 'Albert',
                'paymentlname' => 'Flores',
                'paymentAddress' => '22 Ana Maria, San Antonio, Quezon City, Second District NCR, National Capital Region, PHL',
                'paymentEmail' => 'aflores@gmail.com',
                'paymentmobile' => '+63 917 123 4567',
                'order' => array(
                    array(
                        'name' => '2 Pizzas for P499',
                        'quantity' => '1',
                        'price' => '549.00',
                        'options' => array(
                            array(
                                'option' => array(
                                    array(
                                        'name' => 'Hawaiian - 9” Double',
                                        'price' => '',
                                    ),
                                    array(
                                        'name' => 'Pepperoni - 9” Double',
                                        'price' => '50.00',
                                    ),
                                ),
                                'flavor' => array(),
                            ),
                        ),
                    ),
                    array(
                        'name' => 'Charlie Chan®',
                        'quantity' => '1',
                        'price' => '210.00',
                        'options' => array(
                            array(
                                'option' => array(
                                    array(
                                        'name' => 'Regular',
                                        'price' => '210.00',
                                    ),
                                ),
                                'flavor' => array(),
                            ),
                        ),
                    ),
                    array(
                        'name' => 'Wings',
                        'quantity' => '1',
                        'price' => '450.00',
                        'options' => array(
                            array(
                                'option' => array(
                                    array(
                                        'name' => '1/2-Pound',
                                        'price' => '450.00',
                                    ),
                                ),
                                'flavor' => array(
                                    array(
                                        'name' => 'Sweet Soy',
                                    ),
                                    array(
                                        'name' => 'Sweet Soy',
                                    ),
                                    array(
                                        'name' => 'Hot Chix',
                                    ),
                                    array(
                                        'name' => 'Hot Chix',
                                    ),
                                ),
                                ),
                        ),
                    ),
                ),
                'subtotal' => '805.00',
                'delivery' => '80.50',
                'total' => '885.50',
                'paymentType' => 'Paid Online via Credit Card/Debit Card',
            ),
        );
    endif;

    if(is_max()):
        $content = array(
            'static' => array(
                'headerDesktop' => 'Thank you for ordering at Maxs Restaurant',
                'headerMobile' => 'Thank you for ordering at <br/> Maxs Restaurant',
                'details' => 'These details have been sent to your email. Please see the order summary with the reference number.',
                'inquiries' => 'For questions regarding your order you may contact us at Hotline:  ',
                'hotline_no' => '(02) 8-789-9999',
                'inquiries_1' => 'For other queries beyond business hours. Please message us at',
                'email_at' => 'customercare@maxsgroupinc.com',

                'deliveryDetail' => 'Delivery Details',
                'paymentDetails' => 'Payment Details',
                'referenceNumber' => 'Reference Number',
                'paymentOption' => 'Payment Option',
                'amount' => 'Amount',
                'billingDetails' => 'Billing Details',
                'yourOrder' => 'Order Summary',
                'subtotal' => 'Subtotal',
                'delivery' => 'Delivery/Service Charge',
                'total' => 'Total',
            ),
            'buttons' => array(
                'track' => 'Track Your Order',
                'back' => 'Back to Homepage',
            ),
            'images' => array(
                'stamp' => 'dist/images/yc-stamp.png',
            ),
            'link' => array(
            ),
            'dynamic' => array(
                'fname' => 'Albert',
                'lname' => 'Flores',
                'referenceNo' => 'MAXS6543370',
                'address' => '22 Ana Maria, San Antonio, Quezon City, Second District NCR, National Capital Region, PHL',
                'mobile' => '+63 917 123 4567',
                'city' => 'Quezon City - Visayas Avenue',
                'date' => 'Tuesday 23 February, 2021, 7:15 PM',
                'cutleries' => 'Order without cutleries',
                'notes' => 'Deliver to the lobby. :)',
                'paymentRefNo' => '7C6543370',
                'paymentOption' => 'Paid Online via Credit Card/Debit Card',
                'paymentAmount' => '1,495.00',
                'paymentfname' => 'Albert',
                'paymentlname' => 'Flores',
                'paymentAddress' => '22 Ana Maria, San Antonio, Quezon City, Second District NCR, National Capital Region, PHL',
                'paymentEmail' => 'aflores@gmail.com',
                'paymentmobile' => '+63 917 123 4567',
                'order' => array(
                    array(
                        'name' => '2 Pizzas for P499',
                        'quantity' => '1',
                        'price' => '549.00',
                        'options' => array(
                            array(
                                'option' => array(
                                    array(
                                        'name' => 'Hawaiian - 9” Double',
                                        'price' => '',
                                    ),
                                    array(
                                        'name' => 'Pepperoni - 9” Double',
                                        'price' => '50.00',
                                    ),
                                ),
                                'flavor' => array(),
                            ),
                        ),
                    ),
                    array(
                        'name' => 'Charlie Chan®',
                        'quantity' => '1',
                        'price' => '210.00',
                        'options' => array(
                            array(
                                'option' => array(
                                    array(
                                        'name' => 'Regular',
                                        'price' => '210.00',
                                    ),
                                ),
                                'flavor' => array(),
                            ),
                        ),
                    ),
                    array(
                        'name' => 'Wings',
                        'quantity' => '1',
                        'price' => '450.00',
                        'options' => array(
                            array(
                                'option' => array(
                                    array(
                                        'name' => '1/2-Pound',
                                        'price' => '450.00',
                                    ),
                                ),
                                'flavor' => array(
                                    array(
                                        'name' => 'Sweet Soy',
                                    ),
                                    array(
                                        'name' => 'Sweet Soy',
                                    ),
                                    array(
                                        'name' => 'Hot Chix',
                                    ),
                                    array(
                                        'name' => 'Hot Chix',
                                    ),
                                ),
                                ),
                        ),
                    ),
                ),
                'subtotal' => '805.00',
                'delivery' => '80.50',
                'total' => '885.50',
                'paymentType' => 'Paid Online via Credit Card/Debit Card',
            ),
        );
    endif;
?>


<div class="main-wrapper">
    <section class="c-standard-layout c-confirmation <?= is_max() ? 'c-standard-layout-max c-standard-layout-max--delivery' : null; ?>">
        <div class="o-container">
            <div class="c-standard-layout-content">
                <h3 class="o-header-title [ u-dnc-mb u-dbc-tb ]">
                    <?= $content['static']['headerDesktop']; ?> <?php if(is_ph()):?><i class="ic-registered-sm"></i><?php endif;?>, 
                    <?= $content['dynamic']['fname']; ?>!
                </h3>
                <h3 class="o-header-title [ u-dnc-tb u-dbc-mb ]">
                    <?= $content['static']['headerMobile']; ?> <?php if(is_ph()):?><i class="ic-registered-sm"></i><?php endif;?>,<?php if(is_ph()):?><br/><?php endif;?>
                    <?= $content['dynamic']['fname']; ?>!
                </h3>
                <div class="c-standard-layout-content_display [ u-df-mb ]">
                    <div class="c-confirmation-track">
                        <p class="for-title"><?= $content['static']['details']; ?></p>

                        <?php if(is_ph()):?><h4 class="h4"> <?= $content['dynamic']['referenceNo']; ?>.</h4><?php endif;?>

                        <?php if(is_max()):?>
                            <p class="reference-number"><?= $content['static']['referenceNumber']; ?>:</p>
                            <div class="reference_no">
                                <input type="input" class="hide" value="<?= $content['dynamic']['referenceNo']; ?>" id="reference_number">
                                <h4 class="h4"><?= $content['dynamic']['referenceNo']; ?></h4>
                                <i class="ic-max-copy" onclick="copyReferenceNo()" title="Copy"></i>
                            </div>
                            <script>
                                function copyReferenceNo() {
                                    if (!navigator.clipboard) return
                                    var copyText = document.getElementById("reference_number");
                                    copyText.select();
                                    copyText.setSelectionRange(0, 99999);
                                    console.log(copyText.value);
                                    navigator.clipboard.writeText(copyText.value);
                                }
                            </script>
                        <?php endif;?>


                        <button type="button" class="o-button o-button-track o-button-lg" <?php if(is_max()):?>data-trigger-modal="order-tracker"<?php endif;?>>
                            <span><?= $content['buttons']['track']; ?></span>
                        </button>
                        <?php if(is_ph()):?>
                            <p class="for-inquiries">
                                <?= $content['static']['inquiries']; ?>
                            </p>
                        <?php endif;?>

                        <?php if(is_max()):?>
                            <p class="for-inquiries">
                                <?= $content['static']['inquiries']; ?> <span><?= $content['static']['hotline_no']; ?></span><br>
                                <?= $content['static']['inquiries_1']; ?><br>
                                <a href=""><?= $content['static']['email_at']; ?></a>
                            </p>
                            <div class="divider-bottom"></div>
                        <?php endif;?>

                        <!-- 'hotline_no' => '(02) 8-789-9999',
                'inquiries_1' => 'For other queries beyond business hours. Please message us at',
                'email_at' => 'customercare@maxsgroupinc.com', -->

                        <?php if(is_ph()):?>
                            <button type="button" class="o-button o-button-lg o-button-trans o-button-bordered">
                                <span><?= $content['buttons']['back']; ?></span>
                            </button>
                        <?php endif;?>
                        <h5 class="h5"><?= $content['static']['deliveryDetail']; ?></h5>
                        <div class="c-confirmation-track_user [ u-df-mb u-df-mb-fd-c ]">
                            <span><?= $content['dynamic']['fname']; ?> <?= $content['dynamic']['lname']; ?></span>
                            <span><?= $content['dynamic']['address']; ?></span>
                            <span><?= $content['dynamic']['mobile']; ?></span>
                            <span><?= $content['dynamic']['city']; ?></span>
                            <span><?= $content['dynamic']['date']; ?></span>
                            <span><?= $content['dynamic']['cutleries']; ?></span>
                            <span><?= $content['dynamic']['notes']; ?></span>
                        </div>
                        <?php if(is_max()):?>
                            <div class="divider-bottom"></div>
                        <?php endif;?>
                        <div class="o-divider"></div>
                        <div class="c-confirmation-track_details [ u-df-mb ]">
                            <div class="c-confirmation-track_details--card">
                                <h5 class="h5"><?= $content['static']['paymentDetails']; ?></h5>
                                <div class="info-card [ u-df-mb ]">
                                    <div class="info-card_icon"><i class="<?php if(is_ph()):?>ic-card-c<?php endif;?><?php if(is_max()):?>ic-card-c-grey<?php endif;?>"></i></div>
                                    <div class="info-card_detail for-payment-detail [ u-df-mb u-df-mb-fd-c ]">
                                        <h6 class="h6"><?= $content['static']['referenceNumber']; ?></h6>
                                        <span><?= $content['dynamic']['notes']; ?></span>
                                        <h6 class="h6"><?= $content['static']['paymentOption']; ?></h6>
                                        <span><?= $content['dynamic']['paymentOption']; ?></span>
                                        <h6 class="h6"><?= $content['static']['amount']; ?></h6>
                                        <span>₱ <?= $content['dynamic']['paymentAmount']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="c-confirmation-track_details--card">
                                <h5 class="h5"><?= $content['static']['billingDetails']; ?></h5>
                                <div class="info-card [ u-df-mb ]">
                                    <div class="info-card_icon"><i class="<?php if(is_ph()):?>ic-user-c<?php endif;?><?php if(is_max()):?>ic-user-c-grey<?php endif;?>"></i></div>
                                    <div class="info-card_detail [ u-df-mb u-df-mb-fd-c ]">
                                        <h6 class="h6"><?= $content['dynamic']['paymentfname']; ?> <?= $content['dynamic']['paymentlname']; ?></h6>
                                        <span><?= $content['dynamic']['paymentAddress']; ?></span>
                                        <span><?= $content['dynamic']['paymentEmail']; ?></span>
                                        <span><?= $content['dynamic']['paymentmobile']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if(is_max()):?>
                            <div class="divider"></div>
                            <button type="button" class="o-button o-button-lg o-button-trans o-button-bordered">
                                <span><?= $content['buttons']['back']; ?></span>
                            </button>
                        <?php endif;?>
                    </div>

                    <div class="c-checkout-summary with-logo">
                        <?php if(is_max()):?>
                            <figure>
                                <img src="dist/images/layout/max-plaid-pattern-dt.png" alt="">
                            </figure>
                        <?php endif;?>
                        <div class="c-checkout-summary_header">
                            <div class="c-checkout-summary_header--title [ u-df-mb u-df-mb-w ]">
                                <?php if(is_ph()):?>
                                    <div class="c-checkout-summary_header--title__icon">
                                        <i class="ic-check-c-green"></i>
                                    </div>
                                <?php endif;?>
                                <h5 class="h5"><?= $content['static']['yourOrder']; ?></h5>
                                <?php if(is_ph()):?>
                                    <figure>
                                        <img src="<?= $content['images']['stamp']; ?>" alt="">
                                    </figure>
                                <?php endif;?>
                                <div class="o-divider"></div>
                            </div>
                        </div>
                        <div class="c-checkout-summary_body" >
                            <!-- <ul class="summary-list">
                                <?php 
                                foreach ($content['dynamic']['order'] as $key => $value) {var_dump($value);
                                    echo '<li class="[ u-df-mb ]">';
                                        echo '<h6 class="h6">'.$value['name'].'</h6>';
                                        echo '<span class="quantity">'.$value['quantity'].'</span>';
                                    echo '</li>';
                                    foreach ($value['options'] as $key => $options) {
                                        foreach ($options['name'] as $key => $option) {
                                            echo '<li class="[ u-df-mb u-df-mb-jc-sb ]">';
                                                echo '<span>'.$option['name'].'</span>';
                                                if($option['price'] != ''):
                                                    echo '<span>P '.$option['price'].'</span>';
                                                endif;
                                            echo '</li>';
                                        }
                                        foreach ($options['price'] as $key => $flavor) {
                                            echo '<li class="inner [ u-df-mb u-df-mb-jc-sb ]">';
                                                echo '<span>'.$flavor['name'].'</span>';
                                            echo '</li>';
                                        }
                                    }
                                    echo '<li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">';
                                        echo '<h6 class="h6">Subtotal</h6>';
                                        echo '<h6 class="h6">P '.$value['price'].'</h6>';
                                    echo '</li>';
                                }
                                ?>
                            </ul> -->

                            <?php if(is_ph()):?>
                                <ul class="summary-list">
                                    <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6">2 Pizzas for P499</h6>
                                        <span>1</span>
                                        <a href="review-order.php" type="button" class="o-button o-button-white ic-front">
                                            <i class="ic-edit-yellow"></i>
                                            <span>EDIT</span>
                                        </a>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Hawaiian - 9” Double</span>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Pepperoni - 9” Double</span>
                                        <span>P 50.00</span>
                                    </li>
                                    <li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6">Subtotal</h6>
                                        <h6 class="h6">P 549.00</h6>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6">Charlie Chan®</h6>
                                        <span>1</span>
                                        <a href="review-order.php" type="button" class="o-button o-button-white ic-front">
                                            <i class="ic-edit-yellow"></i>
                                            <span>EDIT</span>
                                        </a>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Regular</span>
                                        <span>P 210.00</span>
                                    </li>
                                    <li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6">Subtotal</h6>
                                        <h6 class="h6">P 210.00</h6>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6">Wings</h6>
                                        <span>1</span>
                                        <a href="review-order.php" type="button" class="o-button o-button-white ic-front">
                                            <i class="ic-edit-yellow"></i>
                                            <span>EDIT</span>
                                        </a>
                                    </li>
                                    <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                        <span>1/2-Pound</span>
                                        <span>P 450.00</span>
                                    </li>
                                    <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Sweet Soy</span>
                                    </li>
                                    <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Sweet Soy</span>
                                    </li>
                                    <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Hot Chix</span>
                                    </li>
                                    <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Hot Chix</span>
                                    </li>
                                    <li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6">Subtotal</h6>
                                        <h6 class="h6">P 450.00</h6>
                                    </li>
                                </ul>
                            <?php endif;?>


                            <?php if(is_max()):?>
                                <ul class="summary-list">
                                    <li class="main_no_edit [ u-df-mb u-df-mb-jc-sb ]">
                                        <span class="count_quantity">1</span>
                                        <h6 class="h6">Whole Fried Chicken</h6>
                                        <!-- <a href="review-order.php" type="button" class="o-button o-button-white ic-front">
                                            <i class="ic-max-edit-yellow"></i>
                                            <span>Edit</span>
                                        </a> -->
                                    </li>
                                    <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Chopped</span>
                                        <span>-</span>
                                    </li>
                                    <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Family</span>
                                        <span>₱ 689.00</span>
                                    </li>
                                    <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Condiment Trio</span>
                                        <span>₱ 129.00</span>
                                    </li>
                                    <li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6">Subtotal</h6>
                                        <h6 class="h6">₱ 818.00</h6>
                                    </li>
                                    <li class="main_no_edit [ u-df-mb u-df-mb-jc-sb ]">
                                        <span class="count_quantity">1</span>
                                        <h6 class="h6">Standard Bundle</h6>
                                        <!-- <a href="review-order.php" type="button" class="o-button o-button-white ic-front">
                                            <i class="ic-max-edit-yellow"></i>
                                            <span>Edit</span>
                                        </a> -->
                                    </li>
                                    <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Corn Sisig</span>
                                        <span>-</span>
                                    </li>
                                    <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Sweet & Spicy Tofu</span>
                                        <span>-</span>
                                    </li>
                                    <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                        <span>Pancit Canton</span>
                                        <span>-</span>
                                    </li>
                                    <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                        <span>1L Iced Tea</span>
                                        <span>-</span>
                                    </li>
                                    <li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6">Subtotal</h6>
                                        <h6 class="h6">₱ 1,399.00</h6>
                                    </li>
                                    <li class="main_no_edit [ u-df-mb u-df-mb-jc-sb ]">
                                        <span class="count_quantity">1</span>
                                        <h6 class="h6">Chicken Sisig Bowl</h6>
                                        <!-- <a href="review-order.php" type="button" class="o-button o-button-white ic-front">
                                            <i class="ic-max-edit-yellow"></i>
                                            <span>Edit</span>
                                        </a> -->
                                    </li>
                                    <li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6">Subtotal</h6>
                                        <h6 class="h6">₱ 199.00</h6>
                                    </li>
                                </ul>   
                            <?php endif;?>

                        </div>


                        <?php if(is_max()):?>
                            <div class="c-checkout-summary_subtotal">
                                <ul class="summary-list">
                                    <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6"><?= $content['static']['subtotal']; ?></h6>
                                        <h6 class="h6">₱ <?= $content['dynamic']['total']; ?></h6>
                                    </li>
                                    <li class="<?php if(is_ph()):?>subtotal<?php endif;?><?php if(is_max()):?>service-charge<?php endif;?> [ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6"><?= $content['static']['delivery']; ?></h6>
                                        <h6 class="h6">₱ <?= $content['dynamic']['total']; ?></h6>
                                    </li>
                                </ul>
                            </div>
                        <?php endif;?>


                        <div class="c-checkout-summary_footer">
                            <ul class="summary-list">
                                <?php if(is_ph()):?>
                                    <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6"><?= $content['static']['subtotal']; ?></h6>
                                        <h6 class="h6">₱ <?= $content['dynamic']['total']; ?></h6>
                                    </li>
                                    <li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6"><?= $content['static']['delivery']; ?></h6>
                                        <h6 class="h6">₱ <?= $content['dynamic']['total']; ?></h6>
                                    </li>
                                <?php endif;?>

                                <li class="grandtotal [ u-df-mb u-df-mb-jc-sb ]">
                                    <h6 class="h6"><?= $content['static']['total']; ?></h6>
                                    <h6 class="h6">₱ <?= $content['dynamic']['total']; ?></h6>
                                </li>
                                <li class="<?php if(is_max()):?>last_text<?php endif;?> [ u-df-mb u-df-mb-jc-sb ]">
                                    <span class="italize"><?= $content['dynamic']['paymentType']; ?></span>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'src/includes/footer.php';?>
</div>