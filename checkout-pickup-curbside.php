

<?php include 'src/includes/header.php';?>
<?php
    if(is_ph()):
        $content = array(
            'static' => array(
                'breadcrumb_1' => 'Pick-up Details',
                'header_title' => 'Pick-up Details',
                'sub_header' => 'You chose Curbside® pick-up. Complete your 
                                    information here to proceed to checkout.',
                'process_1' => 'Order information',
                'process_1_cutleries_label' => 'Do you need cutleries?',
                'process_1_store_label' => 'Store',
                'process_1_store_value' => 'Quezon City - Visayas Avenue',
                'process_1_datetime_label' => 'Date/Time',
                'process_1_datetime_value' => 'Tuesday, February 23, 2021 7:15 PM',
                'process_1_instructions_label' => 'Special instructions',
                'process_1_instructions_value' => 'Deliver to the lobby. :)',
                'process_2' => 'Billing information',
                'process_2_name' => 'Albert Flores',
                'process_2_email' => 'aflores@gmail.com',
                'process_2_number' => '+63 917 123 4567',
                'process_3' => 'Payment',
                'process_3_savecredit_label' => 'Save credit card information to PesoPay',
                'process_3_label1' => 'This secure online payment service is powered by',
                'process_3_label2_tb' => 'Placing order means you agree to the',
                'process_3_label2_mb' => 'Placing order means you agree to the',
                'process_3_label3_tb' => 'Terms and Conditions',
                'process_3_label3_tb' => 'Terms and Conditions',
                'process_3_label4_tb' => 'and',
                'process_3_label4_mb' => 'and',
                'process_3_label5_tb' => 'Privacy Policy.',
                'process_3_label5_mb' => 'Privacy Policy.',
                'right_section_title' => 'Order Summary',
                'right_section_title2' => 'Order Summary',
                'subtotal_label' => 'Subtotal',
                'subtotal_value' => 'P 805.00',
                'service_charge_label' => 'Service Charge',
                'service_charge_value' => 'P 80.50',
                'total_label' => 'TOTAL',
                'total_value' => 'P 885.50',
            ),
            'buttons' => array(
                'backhome' => 'Back to Home',
                'edit_btn' => 'EDIT',
                'online_pay_btn' => 'ONLINE PAYMENT CREDIT CARD',
                'placeorder_btn' => 'PLACE ORDER',
            ),
            'images' => array(
                'home_img' => 'ic_home.svg',
                'pesopay_img' => 'dist/images/checkout/peso-pay.png',
            ),
        );
    endif;

    if(is_max()):
        $content = array(
            'static' => array(
                'breadcrumb_1' => 'Checkout',
                'breadcrumb_2' => 'Pick-up Details',
                'header_title' => 'Pick-up Details',
                'sub_header' => 'You chose Curbside® pick-up. Complete your 
                                    information here to proceed to checkout.',
                'process_1' => 'Order Information',
                'process_1_cutleries_label' => 'Do you need cutleries?',
                'process_1_store_label' => 'Store',
                'process_1_store_value' => 'Quezon City - Visayas Avenue',
                'process_1_datetime_label' => 'Date/Time',
                'process_1_datetime_value' => 'Tuesday, February 23, 2021 7:15 PM',
                'process_1_instructions_label' => 'Special instructions',
                'process_1_instructions_value' => 'Deliver to the lobby. :)',
                'process_2' => 'Billing information',
                'process_2_name' => 'Albert Flores',
                'process_2_email' => 'aflores@gmail.com',
                'process_2_number' => '+63 917 123 4567',
                'process_3' => 'Payment',
                'process_3_savecredit_label' => 'Save credit card information to PesoPay',
                'process_3_label1' => 'This secure online payment service is powered by:',
                'process_3_label2_tb' => 'Placing order means you agree to the',
                'process_3_label2_mb' => 'Placing order means you agree to the',
                'process_3_label3_tb' => 'Terms and Conditions',
                'process_3_label3_tb' => 'Terms and Conditions',
                'process_3_label4_tb' => 'and',
                'process_3_label4_mb' => 'and',
                'process_3_label5_tb' => 'Privacy Policy.',
                'process_3_label5_mb' => 'Privacy',
                'process_3_label6_mb' => 'Policy.',

                'right_section_title' => 'Order Summary',
                'right_section_title2' => 'Order Summary',
                'subtotal_label' => 'Subtotal',
                'subtotal_value' => '₱ 805.00',
                'service_charge_label' => 'Service Charge',
                'service_charge_value' => '₱ 80.50',
                'total_label' => 'Total',
                'total_value' => '₱ 885.50',
            ),
            'buttons' => array(
                'back' => 'Back to Home',
                'backhome' => 'Back to Home',
                'edit_btn' => 'EDIT',
                'online_pay_btn' => 'Online Payment Credit Card',
                'placeorder_btn' => 'Place Order',
            ),
            'images' => array(
                'home-img' => 'ic-max-home-red.svg',
                'home_img' => 'ic_home.svg',
                'pesopay_img' => 'dist/images/checkout/peso-pay.png',
            ),
        );
    endif;
?>
<div class="main-wrapper">
    <section class="c-standard-layout c-checkout <?= is_max() ? 'c-standard-layout-max c-standard-layout-max--delivery' : null; ?>">
        <div class="c-breadcrumbs">
            <div class="o-container">
                <?php if(is_ph()):?>
                    <ul class="[ u-df-mb ]">
                        <li><a href="/"><img src="dist/images/<?= $content['images']['home_img']; ?>" alt=""></a></li>
                        <li><a href="/"><?= $content['static']['breadcrumb_1']; ?></a></li>
                    </ul>
                    <button class="o-button ic-front o-button-white" data-tigger-back="promos-layout">
                        <i class="ic-back-arrow"></i>
                        <span><?= $content['buttons']['backhome']; ?></span>
                    </button>
                <?php endif;?>

                <?php if(is_max()):?>
                    <ul class="[ u-df-mb ]">
                        <li><a href="/"><img src="dist/images/<?= $content['images']['home-img']; ?>" alt=""></a></li>
                        <li><a href="/" class="color_grey"><?= $content['static']['breadcrumb_1']; ?></a></li>
                        <li><a href="/"><?= $content['static']['breadcrumb_2']; ?></a></li>
                    </ul>

                    <a href="/">
                        <i class="ic-max-arrow-left"></i>
                        <span><?= $content['buttons']['back']; ?></span>
                    </a>
                <?php endif;?>
            </div>
        </div>
        <div class="o-container">
            <div class="c-standard-layout-content">
                <h3 class="o-header-title-slant"><?= $content['static']['header_title']; ?></h3>
                <div class="c-standard-layout-content_display [ u-df-mb ]">
                    <div class="c-checkout-form">
                        <h5 class="h5">
                            <?= $content['static']['sub_header']; ?>
                        </h5>
                        <div class="o-divider"></div>
                        <form action="" class="o-form-timeline">
                            <div class="o-form-group [ u-df-mb u-df-mb-w ]">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">1</span>
                                <label class="<?php if(is_max()):?>main<?php endif;?>" for=""><?= $content['static']['process_1']; ?></label>
                                <div class="o-form-group-inner for-cutleries">
                                    <label for="" class="label-sm"><?= $content['static']['process_1_cutleries_label']; ?></label>
                                    <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                        <input type="hidden" name="cutleries" class="o-form-group_input" autocomplete="off" readonly>
                                        <div class="o-form-panels_card">
                                            <div class="o-form-panels_card--detail pad-l-lg [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="cutleries" data-panel-value="yes">
                                                <div class="o-form-panels_card--detail__title">
                                                    <h3 class="h3">Yes</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="o-form-panels_card">
                                            <div class="o-form-panels_card--detail [ u-df-mb u-df-mb-ai-c ]" data-trigger-panel="cutleries" data-panel-value="no">
                                                <div class="o-form-panels_card--detail__title">
                                                    <h3 class="h3">No</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="o-form-group-inner for-description">
                                    <label for=""><?= $content['static']['process_1_store_label']; ?></label>
                                    <span><?= $content['static']['process_1_store_value']; ?></span>
                                </div>
                                <div class="o-form-group-inner for-description">
                                    <label for="" class="[ u-df-mb-ai-c u-df-mb-jc-sb ]">
                                        <span class="<?php if(is_max()):?>for-datetime<?php endif;?>"><?= $content['static']['process_1_datetime_label']; ?></span>
                                        <?php if(is_max()):?>
                                            <a href="review-order.php" type="button" class="o-button o-button-white ic-front">
                                                <i class="ic-max-edit-yellow"></i>
                                                <span>Edit</span>
                                            </a>
                                        <?php endif;?>
                                        

                                        <?php if(is_ph()):?>
                                            <button type="button" class="o-button o-button-white ic-front">
                                                <i class="ic-edit-yellow"></i>
                                                <span><?= $content['buttons']['edit_btn']; ?></span>
                                            </button>
                                        <?php endif;?>
                                    </label>
                                    <span><?= $content['static']['process_1_datetime_value']; ?></span>
                                </div>
                                <div class="o-form-group-inner for-description">
                                    <label for=""><?= $content['static']['process_1_instructions_label']; ?></label>
                                    <span><?= $content['static']['process_1_instructions_value']; ?></span>
                                </div>
                            </div>
                            <div class="o-form-group [ u-df-mb u-df-mb-w ]">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">2</span>
                                <label for=""><?= $content['static']['process_2']; ?></label>
                                <div class="o-form-group_card [ u-df-mb u-df-mb-w ]">
                                    <div class="info-card [ u-df-mb ]">
                                        <div class="info-card_icon"><i class="<?php if(is_ph()):?>ic-user-c<?php endif;?><?php if(is_max()):?>ic-user-c-grey<?php endif;?>"></i></div>
                                        <div class="info-card_detail [ u-df-mb u-df-mb-fd-c ]">
                                            <h6 class="h6"><?= $content['static']['process_2_name']; ?></h6>
                                            <span><?= $content['static']['process_2_email']; ?></span>
                                            <span><?= $content['static']['process_2_number']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="o-form-group for-payment [ u-df-mb u-df-mb-w ]">
                                <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">3</span>
                                <label for=""><?= $content['static']['process_3']; ?></label>
                                <div class="o-form-group-inner">
                                    <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                                        <input type="hidden" name="payment" class="o-form-group_input" autocomplete="off" readonly <?php if(is_max()):?>value="opcc"<?php endif;?>>
                                        <div class="o-form-panels_card">
                                            <div class="o-form-panels_card--detail pad-l-lg [ u-df-mb u-df-mb-ai-c ] <?php if(is_max()):?>only active<?php endif;?>" data-trigger-panel="payment" data-panel-value="online payment credit card">
                                                <div class="o-form-panels_card--detail__title">
                                                    <h3 class="h3"><?= $content['buttons']['online_pay_btn']; ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="o-form-group-inner <?php if(is_max()):?>for-payment-filter active<?php endif;?>" data-catcher-payment="opcc">
                                    <div class="o-form-group_checkbox">
                                        <label>
                                        <?= $content['static']['process_3_savecredit_label']; ?>
                                            <input type="checkbox" <?php if(is_max()):?>checked<?php endif;?>>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="for-pesopay [ u-df-mb u-df-mb-ai-c ]">
                                        <span><?= $content['static']['process_3_label1']; ?></span>
                                        <figure>
                                            <img src="<?= $content['images']['pesopay_img']; ?>" alt="">
                                        </figure>
                                    </div>
                                    <div class="for-terms [ u-dnc-mb u-dbc-tb ]">
                                        <span>
                                            <?= $content['static']['process_3_label2_tb']; ?>
                                            <a href="" data-trigger-modal="condition-of-use" > <?= $content['static']['process_3_label3_tb']; ?></a>
                                            <?= $content['static']['process_3_label4_tb']; ?>
                                            <a href="" data-trigger-modal="privacy-policy" > <?= $content['static']['process_3_label5_tb']; ?></a>
                                        </span>
                                    </div>
                                    <div class="for-terms [ u-dnc-tb u-dbc-mb ]">
                                        <span>
                                        <?= $content['static']['process_3_label2_mb']; ?> <br/>
                                            <a href="" data-trigger-modal="condition-of-use" ><?= $content['static']['process_3_label3_tb']; ?></a>
                                            <?= $content['static']['process_3_label4_tb']; ?>
                                            <!-- <a href="" data-trigger-modal="privacy-policy" ><?= $content['static']['process_3_label5_tb']; ?></a> -->
                                            <?php if(is_ph()):?><a href="" data-trigger-modal="privacy-policy" ><?= $content['static']['process_3_label5_mb']; ?></a><?php endif;?>
                                            <?php if(is_max()):?><a href="" data-trigger-modal="privacy-policy" ><?= $content['static']['process_3_label5_mb']; ?></a><br><a href="" data-trigger-modal="privacy-policy" ><?= $content['static']['process_3_label6_mb']; ?></a><?php endif;?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="o-button o-button-lg for-curbside" data-trigger-modal="invalid-delivery-checkout">
                                <span> <?= $content['buttons']['placeorder_btn']; ?></span>
                            </button>
                        </form>
                    </div>
                    <div class="c-checkout-summary">
                        <?php if(is_max()):?>
                            <figure>
                                <img src="dist/images/layout/max-plaid-pattern-dt.png" alt="">
                            </figure>
                        <?php endif;?>
                        <div class="c-checkout-summary_header" data-trigger="checkout-accordion">
                            <h4 class="h4 accordion-cta"><?= $content['static']['right_section_title']; ?></h4>
                            <h4 class="h4 accordion-cta [ u-df-mb u-df-mb-jc-sb u-df-mb-ai-c ]">
                                <?= $content['static']['right_section_title2']; ?>
                                <button type="button" class="o-button o-button-lg o-button-white">
                                    <i class="ic-caret-down-lg"></i>
                                </button>
                            </h4>
                        </div>
                        <div class="c-checkout-summary_body accordion-list" data-catcher="checkout-accordion">
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
                                    <li class="main [ u-df-mb u-df-mb-jc-sb ]">
                                        <span class="count_quantity">1</span>
                                        <h6 class="h6">Whole Fried Chicken</h6>
                                        <a href="review-order.php" type="button" class="o-button o-button-white ic-front">
                                            <i class="ic-max-edit-yellow"></i>
                                            <span>Edit</span>
                                        </a>
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
                                    <li class="main [ u-df-mb u-df-mb-jc-sb ]">
                                        <span class="count_quantity">1</span>
                                        <h6 class="h6">Standard Bundle</h6>
                                        <a href="review-order.php" type="button" class="o-button o-button-white ic-front">
                                            <i class="ic-max-edit-yellow"></i>
                                            <span>Edit</span>
                                        </a>
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
                                    <li class="main [ u-df-mb u-df-mb-jc-sb ]">
                                        <span class="count_quantity">1</span>
                                        <h6 class="h6">Chicken Sisig Bowl</h6>
                                        <a href="review-order.php" type="button" class="o-button o-button-white ic-front">
                                            <i class="ic-max-edit-yellow"></i>
                                            <span>Edit</span>
                                        </a>
                                    </li>
                                    <li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6">Subtotal</h6>
                                        <h6 class="h6">₱ 199.00</h6>
                                    </li>
                                </ul>   
                            <?php endif;?>
                        </div>

                        <?php if(is_max()):?>
                            <div class="c-checkout-summary_subtotal accordion-list"  data-catcher="checkout-accordion">
                                <ul class="summary-list">
                                    <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6"><?= $content['static']['subtotal_label']; ?></h6>
                                        <h6 class="h6"><?= $content['static']['subtotal_value']; ?></h6>
                                    </li>
                                    <li class="<?php if(is_ph()):?>subtotal<?php endif;?><?php if(is_max()):?>service-charge<?php endif;?> [ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6"><?= $content['static']['service_charge_label']; ?></h6>
                                        <h6 class="h6"><?= $content['static']['service_charge_value']; ?></h6>
                                    </li>
                                </ul>
                            </div>
                        <?php endif;?>


                        <div class="c-checkout-summary_footer accordion-list"  data-catcher="checkout-accordion">
                            <ul class="summary-list">
                                <?php if(is_ph()):?>
                                    <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6"><?= $content['static']['subtotal_label']; ?></h6>
                                        <h6 class="h6"><?= $content['static']['subtotal_value']; ?></h6>
                                    </li>
                                    <li class="<?php if(is_ph()):?>subtotal<?php endif;?><?php if(is_max()):?>service-charge<?php endif;?> [ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6"><?= $content['static']['service_charge_label']; ?></h6>
                                        <h6 class="h6"><?= $content['static']['service_charge_value']; ?></h6>
                                    </li>
                                <?php endif;?>
                                <li class="grandtotal [ u-df-mb u-df-mb-jc-sb ]">
                                    <h6 class="h6"><?= $content['static']['total_label']; ?></h6>
                                    <h6 class="h6"><?= $content['static']['total_value']; ?></h6>
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