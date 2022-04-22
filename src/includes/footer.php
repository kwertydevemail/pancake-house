<?php
    if(is_max()) {
        $content = array(
            'static' => array(
                'footer-desc-1' => "Maxs Restaurant™ and other Max's Group Inc.-affiliated
                                    companies own the trademarks, logos and service marks displayed 
                                    on this site and users are prohibited from using the same without 
                                    written permission of Max's Group Inc. or such other parties.",
                'footer-desc-2' => "The materials on this site are protected by copyright and no part 
                                    of such materials may be modified, reproduced, stored in a retrieval 
                                    system, transmitted (in any form or by any means), copied, distributed, 
                                    used for creating derivative works or used in any other way for commercial 
                                    or public purposes without the Max's Group Inc.'s prior written consent.",
                'delivery-desc' => "Delivery service for Maxs Restaurant™ is 
                                    available in Metro Manila and selected provincial 
                                    locations only. A minimum order of Php 350 pesos(Philippine Peso) is required 
                                    to proceed with any transaction.",
                'right-content-title' => 'Delivery Numbers',
                'conditions' => 'Conditions of Use & How To Order',
                'policy' => 'Privacy Policy',
                'feedback-text' => 'Send us feedback',
                'follow-us-text' => 'Follow us',
    
                'modal_added_cart_title' => 'Item added to cart!',
    
                'modal_invalid_deliver_checkout_title' => ' We’re sorry! </br >
                                                            The assigned store is closed or the delivery time is invalid.',
                'modal_invalid_deliver_checkout_content_1' => 'The store assigned to your area is closed at the moment or your selected time of pick-up is beyond cut-off. Please',
                'modal_invalid_deliver_checkout_content_2' => 'click here',
                'modal_invalid_deliver_checkout_content_3' => 'to check operating hours. Please try to place an order again, 
                                                                when the store is open.',
    
                'modal_promocode_title' => 'Do you have a promo code?',
                'modal_promocode_field_label_dt' => 'Enter your promo code in the field below:',
                'modal_promocode_field_label_mb' => 'Enter your promo code',
                'modal_promocode_field_placeholder' => 'Enter Promo Code',
                'modal_promocode_invalid' => 'Sorry, the promo code you entered is invalid. Please check and try again.',
    
                'modal_otherbrands_title' => 'Other MGI restaurants near you!',
                'modal_otherbrands_content' => 'Would you like to order from other available brands in your area?',
    
                'modal_delivery_disclaimer_title' => 'Heads Up!',
                'modal_delivery_disclaimer_content' => 'Your online order may be automatically accepted but please 
                                                            note that it is still subject to the availability and capacity 
                                                            of a serving store. You will be notified regarding the status of your order.',
                                        
                'modal_transaction_type_title' => 'Order Now',
                'modal_transaction_type_content' => 'Please select your desired transaction type prior to adding 
                                                        items to cart so we can display the right information such 
                                                        as product availability and prices.',
    
                'modal_invalid_deliverytime_title' => 'We’re sorry! </br >The delivery time is invalid.',
                'modal_invalid_deliverytime_content' => 'The selected delivery time must be at least 1 and 1/2 hours from the current time.',

                'modal_invalid_pickuptime_title' => 'We’re sorry! </br >The pickup time is invalid.',
                'modal_invalid_pickuptime_content' => 'The selected pickup time must be at least 1 and 1/2 hours from the current time.',
    
                'modal_delivery_transactionalert_title' => 'Please enter the delivery address.',
                'modal_delivery_transactionalert_content' => 'Enter the delivery address to view the product price and availability in the area.',
    
                'modal_registration_success_title' => 'Welcome!',
                'modal_registration_success_content' => 'You have successfully registered. You will automatically be logged into the system.',
    
                'modal_remove_order_title' => 'Are you sure?',
                'modal_remove_order_content' => 'Are you sure you want to remove this item?',
    
                'modal_order_details_header1' => 'Order #',
                'modal_order_details_header2' => 'YC6543370',
                'modal_order_details_header3' => 'Your order',
                'modal_order_details_subtotal_label' => 'Subtotal',
                'modal_order_details_servicecharge' => 'Delivery/Service Charge',
                'modal_order_details_total_label' => 'Total',
                'modal_order_details_paid_label' => 'Paid Online via Credit Card/Debit Card',
            ),
            'icons' => array(
                'mail-icon' => 'footer/social-media/max-envelope-icon.svg',
                'twitter-icon' => 'footer/social-media/max-twitter-icon.svg',
                'fb-icon' => 'footer/social-media/max-facebook-icon.svg',
                'insta-icon' => 'footer/social-media/max-instagram-icon.svg',
            ),
            'buttons' => array(
                'modal_added_cart_checkout' => 'Checkout',
                'modal_added_cart_continue_order' => 'Continue Ordering',
                'modal_invalid_deliver_checkout_selectnewtime' => 'Select New Time',
                'modal_promocode_skip' => 'NO, SKIP',
                'modal_promocode_checkcode' => 'YES, CHECK CODE',
                'modal_otherbrands_viewmenu' => 'Yes, Show Me The Menu',
                'modal_otherbrands_proceedcheckout' => 'No, Proceed With My Order',
                'modal_delivery_disclaimer_cancel' => 'Cancel',
                'modal_delivery_disclaimer_ok' => 'Ok',
                'modal_invalid_deliverytime_selectnewtime' => 'Return to Delivery Details',
                'modal_invalid_pickuptime_selectnewtime' => 'Return to Pickup Details',
                'modal_delivery_transactionalert_ok' => 'Return to Delivery Details',
                'modal_registration_success_ok' => 'ok',
                'modal_remove_order_ok' => 'Yes',
                'modal_remove_order_cancel' => 'Cancel',
            ),
            'images' => array(
                'footer-logo' => 'max-logo-red.png',
                'delivery-logo' => 'Vespa-02.png',
                'modal_otherbrands_img' => 'pancake-logo.png',
                'img_stamp' => 'yc-stamp.png',
            ),
            'link' => array(
            ),
            'dynamic' => array(
            ),
        );
    
        $delivery_numbers = [
            [
                'city' => 'Metro Manila',
                'contact-number' => '(02) 8-789-9999',
            ],
            [
                'city' => 'Laguna',
                'contact-number' => '(049) 502-9999',
            ],
            [
                'city' => 'Baguio',
                'contact-number' => '(074) 442-9999',
            ],
            [
                'city' => 'Cebu',
                'contact-number' => '(032) 254-1111',
            ],
            [
                'city' => 'Cavite',
                'contact-number' => '(046) 416-9999',
            ],
            [
                'city' => 'Batangas',
                'contact-number' => '(043) 723-2222',
            ],
            [
                'city' => 'Boracay',
                'contact-number' => '(074) 442-9999',
            ],
        ];
    } elseif (is_ph()) {
        $content = array(
            'static' => array(
                'footer-desc-1' => "Yellow Cab Pizza Co.® and other Max's Group Inc.-affiliated
                                    companies own the trademarks, logos and service marks displayed 
                                    on this site and users are prohibited from using the same without 
                                    written permission of Max's Group Inc. or such other parties.",
                'footer-desc-2' => "The materials on this site are protected by copyright and no part 
                                    of such materials may be modified, reproduced, stored in a retrieval 
                                    system, transmitted (in any form or by any means), copied, distributed, 
                                    used for creating derivative works or used in any other way for commercial 
                                    or public purposes without the Max's Group Inc.'s prior written consent.",
                'delivery-desc' => "Delivery service for Yellow Cab Pizza Co.® is 
                                    available in Metro Manila and selected provincial 
                                    locations only. A minimum order of Php 350 is required 
                                    to proceed with any transaction.",
                'right-content-title' => 'Delivery Numbers',
                'conditions' => 'Conditions of Use & How To Order',
                'policy' => 'Privacy Policy',
                'feedback-text' => 'Send us feedback',
                'follow-us-text' => 'Follow us',
    
                'modal_added_cart_title' => 'Item added to cart!',
                
                'modal_invalid_pickuptime_title' => 'We’re sorry! </br >The pickup time is invalid.',
                'modal_invalid_pickuptime_content' => 'The selected pickup time must be at least 1 and 1/2 hours from the current time.',
                'modal_invalid_deliver_checkout_title' => ' We’re sorry! </br >
                                                            The assigned store is closed or the delivery time is invalid.',
                'modal_invalid_deliver_checkout_content_1' => 'The store assigned to your area is closed at the moment or your selected time of pick-up is beyond cut-off. Please',
                'modal_invalid_deliver_checkout_content_2' => 'click here',
                'modal_invalid_deliver_checkout_content_3' => 'to check operating hours. Please try to place an order again, 
                                                                when the store is open.',
    
                'modal_promocode_title' => 'Do you have a promo code?',
                'modal_promocode_field_label_dt' => 'Enter your promo code in the field below:',
                'modal_promocode_field_label_mb' => 'Enter your promo code',
                'modal_promocode_field_placeholder' => 'Enter Promo Code',
                'modal_promocode_invalid' => 'Sorry, the promo code you entered is invalid. Please check and try again.',
    
                'modal_otherbrands_title' => 'Brands near you!',
                'modal_otherbrands_content' => 'Would you like to order from other available brands in your area?',
    
                'modal_delivery_disclaimer_title' => 'Heads Up!',
                'modal_delivery_disclaimer_content' => 'Your online order may be automatically accepted but please 
                                                            note that it is still subject to the availability and capacity 
                                                            of a serving store. You will be notified regarding the status of your order.',
                                        
                'modal_transaction_type_title' => 'Order Now',
                'modal_transaction_type_content' => 'Please select your desired transaction type prior to adding 
                                                        items to cart so we can display the right information such 
                                                        as product availability and prices.',
    
                'modal_invalid_deliverytime_title' => 'We’re sorry! </br >The delivery time is invalid.',
                'modal_invalid_deliverytime_content' => 'The selected delivery time must be at least 1 and 1/2 hours from the current time.',
    
                'modal_delivery_transactionalert_title' => 'Please enter the delivery address.',
                'modal_delivery_transactionalert_content' => 'Enter the delivery address to view the product price and availability in the area.',
    
                'modal_registration_success_title' => 'Welcome!',
                'modal_registration_success_content' => 'You have successfully registered. You will automatically be logged into the system.',
    
                'modal_remove_order_title' => 'Are you sure?',
                'modal_remove_order_content' => 'You will not recover the item once removed.',
    
                'modal_order_details_header1' => 'Order #',
                'modal_order_details_header2' => 'YC6543370',
                'modal_order_details_header3' => 'Your order',
                'modal_order_details_subtotal_label' => 'Subtotal',
                'modal_order_details_servicecharge' => 'Delivery/Service Charge',
                'modal_order_details_total_label' => 'Total',
                'modal_order_details_paid_label' => 'Paid Online via Credit Card/Debit Card',
            ),
            'icons' => array(
                'mail-icon' => 'footer/social-media/ph-mail.svg',
                'twitter-icon' => 'footer/social-media/ph-twitter.svg',
                'fb-icon' => 'footer/social-media/ph-fb.svg',
                'insta-icon' => 'footer/social-media/ph-insta.svg',
                'yt-icon' => 'footer/social-media/ph-yt.svg',
            ),
            'buttons' => array(
                'modal_added_cart_checkout' => 'Checkout',
                'modal_added_cart_continue_order' => 'Continue Ordering',
                'modal_invalid_deliver_checkout_selectnewtime' => 'SELECT NEW TIME',
                'modal_promocode_skip' => 'NO, SKIP',
                'modal_promocode_checkcode' => 'YES, CHECK CODE',
                'modal_otherbrands_viewmenu' => 'View Menu',
                'modal_otherbrands_proceedcheckout' => 'Proceed to checkout',
                'modal_delivery_disclaimer_cancel' => 'Cancel',
                'modal_delivery_disclaimer_ok' => 'Ok',
                'modal_invalid_deliverytime_selectnewtime' => 'SELECT NEW TIME',
                'modal_delivery_transactionalert_ok' => 'Okay',
                'modal_registration_success_ok' => 'ok',
                'modal_remove_order_ok' => 'YES',
                'modal_remove_order_cancel' => 'CANCEL',
                'modal_invalid_deliverytime_selectnewtime' => 'Return to Delivery Details',
                'modal_invalid_pickuptime_selectnewtime' => 'Return to Pickup Details',
            ),
            'images' => array(
                'footer-logo' => 'ph-footer-logo.png',
                'delivery-logo' => 'Vespa-02.png',
                'modal_otherbrands_img' => 'pancake-logo.png',
                'img_stamp' => 'yc-stamp.png',
                'warning' => 'ph-warning.svg',
                'location' => 'ph-location-pin.svg',
                
            ),
            'link' => array(
            ),
            'dynamic' => array(
            ),
        );
    
        $delivery_numbers = [
            [
                'city' => 'Metro Manila',
                'contact-number' => '(02) 8-789-9999',
            ],
            [
                'city' => 'Laguna',
                'contact-number' => '(049) 502-9999',
            ],
            [
                'city' => 'Baguio',
                'contact-number' => '(074) 442-9999',
            ],
            [
                'city' => 'Cebu',
                'contact-number' => '(032) 254-1111',
            ],
            [
                'city' => 'Cavite',
                'contact-number' => '(046) 416-9999',
            ],
            [
                'city' => 'Batangas',
                'contact-number' => '(043) 723-2222',
            ],
            [
                'city' => 'Boracay',
                'contact-number' => '(074) 442-9999',
            ],
        ];
    } else {
        $content = array(
            'static' => array(
                'footer-desc-1' => "Yellow Cab Pizza Co.® and other Max's Group Inc.-affiliated
                                    companies own the trademarks, logos and service marks displayed 
                                    on this site and users are prohibited from using the same without 
                                    written permission of Max's Group Inc. or such other parties.",
                'footer-desc-2' => "The materials on this site are protected by copyright and no part 
                                    of such materials may be modified, reproduced, stored in a retrieval 
                                    system, transmitted (in any form or by any means), copied, distributed, 
                                    used for creating derivative works or used in any other way for commercial 
                                    or public purposes without the Max's Group Inc.'s prior written consent.",
                'delivery-desc' => "Delivery service for Yellow Cab Pizza Co.® is 
                                    available in Metro Manila and selected provincial 
                                    locations only. A minimum order of Php 350 is required 
                                    to proceed with any transaction.",
                'right-content-title' => 'Delivery Numbers',
                'conditions' => 'Conditions of Use & How To Order',
                'policy' => 'Privacy Policy',
                'feedback-text' => 'Send us feedback',
                'follow-us-text' => 'Follow us',
    
                'modal_added_cart_title' => 'Item added to cart!',
                
                'modal_invalid_pickuptime_title' => 'We’re sorry! </br >The pickup time is invalid.',
                'modal_invalid_pickuptime_content' => 'The selected pickup time must be at least 1 and 1/2 hours from the current time.',
                'modal_invalid_deliver_checkout_title' => ' We’re sorry! </br >
                                                            The assigned store is closed or the delivery time is invalid.',
                'modal_invalid_deliver_checkout_content_1' => 'The store assigned to your area is closed at the moment or your selected time of pick-up is beyond cut-off. Please',
                'modal_invalid_deliver_checkout_content_2' => 'click here',
                'modal_invalid_deliver_checkout_content_3' => 'to check operating hours. Please try to place an order again, 
                                                                when the store is open.',
    
                'modal_promocode_title' => 'Do you have a promo code?',
                'modal_promocode_field_label_dt' => 'Enter your promo code in the field below:',
                'modal_promocode_field_label_mb' => 'Enter your promo code',
                'modal_promocode_field_placeholder' => 'Enter Promo Code',
                'modal_promocode_invalid' => 'Sorry, the promo code you entered is invalid. Please check and try again.',
    
                'modal_otherbrands_title' => 'Brands near you!',
                'modal_otherbrands_content' => 'Would you like to order from other available brands in your area?',
    
                'modal_delivery_disclaimer_title' => 'Heads Up!',
                'modal_delivery_disclaimer_content' => 'Your online order may be automatically accepted but please 
                                                            note that it is still subject to the availability and capacity 
                                                            of a serving store. You will be notified regarding the status of your order.',
                                        
                'modal_transaction_type_title' => 'Order Now',
                'modal_transaction_type_content' => 'Please select your desired transaction type prior to adding 
                                                        items to cart so we can display the right information such 
                                                        as product availability and prices.',
    
                'modal_invalid_deliverytime_title' => 'We’re sorry! </br >The delivery time is invalid.',
                'modal_invalid_deliverytime_content' => 'The selected delivery time must be at least 1 and 1/2 hours from the current time.',
    
                'modal_delivery_transactionalert_title' => 'Please enter the delivery address.',
                'modal_delivery_transactionalert_content' => 'Enter the delivery address to view the product price and availability in the area.',
    
                'modal_registration_success_title' => 'Welcome!',
                'modal_registration_success_content' => 'You have successfully registered. You will automatically be logged into the system.',
    
                'modal_remove_order_title' => 'Are you sure?',
                'modal_remove_order_content' => 'You will not recover the item once removed.',
    
                'modal_order_details_header1' => 'Order #',
                'modal_order_details_header2' => 'YC6543370',
                'modal_order_details_header3' => 'Your order',
                'modal_order_details_subtotal_label' => 'Subtotal',
                'modal_order_details_servicecharge' => 'Delivery/Service Charge',
                'modal_order_details_total_label' => 'Total',
                'modal_order_details_paid_label' => 'Paid Online via Credit Card/Debit Card',
            ),
            'icons' => array(
                'mail-icon' => 'ic-mail.svg',
                'twitter-icon' => 'ic-twitter.svg',
                'fb-icon' => 'ic-fb.svg',
                'insta-icon' => 'ic-insta.svg',
            ),
            'buttons' => array(
                'modal_added_cart_checkout' => 'Checkout',
                'modal_added_cart_continue_order' => 'Continue Ordering',
                'modal_invalid_deliver_checkout_selectnewtime' => 'SELECT NEW TIME',
                'modal_promocode_skip' => 'NO, SKIP',
                'modal_promocode_checkcode' => 'YES, CHECK CODE',
                'modal_otherbrands_viewmenu' => 'View Menu',
                'modal_otherbrands_proceedcheckout' => 'Proceed to checkout',
                'modal_delivery_disclaimer_cancel' => 'Cancel',
                'modal_delivery_disclaimer_ok' => 'Ok',
                'modal_invalid_deliverytime_selectnewtime' => 'SELECT NEW TIME',
                'modal_delivery_transactionalert_ok' => 'Okay',
                'modal_registration_success_ok' => 'ok',
                'modal_remove_order_ok' => 'YES',
                'modal_remove_order_cancel' => 'CANCEL',
                'modal_invalid_deliverytime_selectnewtime' => 'Return to Delivery Details',
                'modal_invalid_pickuptime_selectnewtime' => 'Return to Pickup Details',
            ),
            'images' => array(
                'footer-logo' => 'logo-footer.png',
                'delivery-logo' => 'Vespa-02.png',
                'modal_otherbrands_img' => 'pancake-logo.png',
                'img_stamp' => 'yc-stamp.png',
            ),
            'link' => array(
            ),
            'dynamic' => array(
            ),
        );
    
        $delivery_numbers = [
            [
                'city' => 'Metro Manila',
                'contact-number' => '(02) 8-789-9999',
            ],
            [
                'city' => 'Laguna',
                'contact-number' => '(049) 502-9999',
            ],
            [
                'city' => 'Baguio',
                'contact-number' => '(074) 442-9999',
            ],
            [
                'city' => 'Cebu',
                'contact-number' => '(032) 254-1111',
            ],
            [
                'city' => 'Cavite',
                'contact-number' => '(046) 416-9999',
            ],
            [
                'city' => 'Batangas',
                'contact-number' => '(043) 723-2222',
            ],
            [
                'city' => 'Boracay',
                'contact-number' => '(074) 442-9999',
            ],
        ];
    }
?>

    <div class="modal for-transaction" data-modal-catcher="transaction-type">
        <div class="modal-wrapper">
            <div class="modal-content">
                <button class="modal-dismiss" data-dismiss="transaction-type">
                    <i class="ic-close"></i>
                </button>
                <div class="modal-body">
                    <h2 class="h2"><?= $content['static']['modal_transaction_type_title']; ?></h2>
                    <p>
                        <?= $content['static']['modal_transaction_type_content']; ?>
                    </p>
                    <div class="o-header-trans-cards [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]">
                        <?php foreach($header_trans_cards as $k => $v): ?>
                        <div class="o-header-trans-cards_card">
                            <!-- <a href="<?= $_SERVER['PHP_SELF'].'?type='.$_GET['type'].'&name='.$_GET['name'].'&purchaseType='.$v['session'] ?>" class="o-header-trans-cards_card--detail"> -->
                            <a href="javascript.void(0)" class="o-header-trans-cards_card--detail" data-dismiss="transaction-type" data-trigger-modal="added-to-cart">
                                <figure>
                                    <img src="dist/images/nav/<?= $v['image-url'] ?>" alt="">
                                    <figcaption>
                                        <h5 class="h5">
                                            <?= $v['title'] ?>
                                            <i class="ic-arrow-right"></i>
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
        </div>
    </div>

    <div class="modal for-invalid-delivery <?= is_max() ? 'modal-max' : null; ?>" data-modal-catcher="invalid-delivery-time">
        <div class="modal-wrapper">
            <div class="modal-content">

                <?php if(is_max()):?>
                    <div class="modal-header">
                        <button class="modal-dismiss" data-dismiss="modal">
                            <i class="ic-close-gray"></i>
                        </button>
                    </div>
                    <div class="img">
                        <img src="src/images/max-location-pin.png" alt="">
                    </div>
                <?php endif;?>

                <?php if(is_ph()):?>
                    <button class="modal-dismiss" data-dismiss="modal">
                        <i class="ic-close"></i>
                    </button>
                <?php endif;?>

                <div class="modal-body [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                    <h2 class="h2"><?= $content['static']['modal_invalid_deliverytime_title']; ?></h2>
                    <p>
                        <?= $content['static']['modal_invalid_deliverytime_content']; ?> 
                    </p>
                    <button class="o-button o-button-lg <?php if(is_max()):?>o-button-trans o-button-bordered<?php endif;?>" data-dismiss="modal">
                        <span><?= $content['buttons']['modal_invalid_deliverytime_selectnewtime']; ?></span>
                    </button>
                </div>
            </div>
        </div>
    </div>











    <!-- for order tracker -->
    <div class="modal for-order-tracker modal-max" data-modal-catcher="order-tracker">
        <div class="modal-wrapper">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="modal-dismiss" data-dismiss="modal">
                        <i class="ic-close-gray"></i>
                    </button>
                </div>
                <div class="img">
                    <img src="src/images/max-order-tracker-pin.svg" alt="">
                </div>

                <div class="modal-body [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                    <h2 class="h2">Excited for your order?</h2>
                    <p>You can now track your order from our store to your doorstep!</p>
                    <div class="modal-footer [ u-dn-mb ]">
                        
                        <div class="for-desktop">
                            <button class="o-button o-button-lg o-button-trans o-button-bordered" data-dismiss="modal">
                                <span>Back</span>
                            </button>
                            <button class="o-button o-button-lg o-button-trans o-button-bordered" data-dismiss="modal">
                                <span>Track Order</span>
                            </button>
                        </div>

                        <div class="for-mobile">
                            <button class="o-button o-button-lg o-button-trans o-button-bordered" data-dismiss="modal">
                                <span>Track Order</span>
                            </button>
                            <button class="o-button o-button-lg o-button-trans o-button-bordered" data-dismiss="modal">
                                <span>Back</span>
                            </button>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>















    <div class="modal for-invalid-delivery <?= is_max() ? 'modal-max' : null; ?>" data-modal-catcher="invalid-pickup-time">
        <div class="modal-wrapper">
            <div class="modal-content">

                <?php if(is_max()):?>
                    <div class="modal-header">
                        <button class="modal-dismiss" data-dismiss="modal">
                            <i class="ic-close-gray"></i>
                        </button>
                    </div>
                    <div class="img">
                        <img src="src/images/max-location-pin.png" alt="">
                    </div>
                <?php endif;?>

                <?php if(is_ph()):?>
                    <button class="modal-dismiss" data-dismiss="modal">
                        <i class="ic-close"></i>
                    </button>
                <?php endif;?>

                <div class="modal-body [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                    <h2 class="h2"><?= $content['static']['modal_invalid_pickuptime_title']; ?></h2>
                    <p>
                        <?= $content['static']['modal_invalid_pickuptime_content']; ?> 
                    </p>
                    <button class="o-button o-button-lg <?php if(is_max()):?>o-button-trans o-button-bordered<?php endif;?>" data-dismiss="modal">
                        <span><?= $content['buttons']['modal_invalid_pickuptime_selectnewtime']; ?></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal for-promo-code" data-modal-catcher="promo-code">
        <div class="modal-wrapper">
            <div class="modal-content">
                <button class="modal-dismiss" data-dismiss="modal" data-trigger-modal="other-brands">
                    <i class="ic-close"></i>
                </button>
                <div class="modal-body">
                    <h2 class="h2"><?= $content['static']['modal_promocode_title']; ?></h2>
                    <form action="" validation="true" data-form-catcher="promoCodeForm">
                        <div class="o-form-group">
                            <label for="" class="[ u-dnc-mb u-dbc-tb ]"><?= $content['static']['modal_promocode_field_label_dt']; ?></label>
                            <label for="" class="[ u-dnc-tb u-dbc-mb ]"><?= $content['static']['modal_promocode_field_label_mb']; ?></label>
                            <div class="o-form-group_standard">
                                <input type="text" name="code" class="o-form-group_input" placeholder="<?= $content['static']['modal_promocode_field_placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                <span class="error-data relative"><?= $content['static']['modal_promocode_invalid']; ?></span>
                            </div>
                        </div>
                        <div class="[ u-df-mb u-df-mb-jc-sb u-df-mb-wr u-df-tb-r ]">
                            <button type="button" class="o-button o-button-lg o-button-trans o-button-bordered" data-dismiss="modal" data-trigger-modal="other-brands">
                                <span><?= $content['buttons']['modal_promocode_skip']; ?></span>
                            </button>
                            <button type="submit" class="o-button o-button-lg">
                                <span><?= $content['buttons']['modal_promocode_checkcode']; ?></span>
                            </button>
                                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal for-other-brands <?= is_max() ? 'modal-max' : null; ?>" data-modal-catcher="other-brands">
        <div class="modal-wrapper">
            <div class="modal-content">

                <?php if(is_max()):?>
                    <div class="modal-header">
                        <button class="modal-dismiss" data-dismiss="other-brands">
                            <?php if(is_max()): ?>
                                <i class="ic-close-gray"></i>
                            <?php else: ?>
                                <i class="ic-close"></i>
                            <?php endif; ?>
                        </button>
                    </div>
                    <div class="img">
                        <?php if(is_max()): ?>
                        <img src="src/images/yellow-cab-logo.png" alt="Yellow Cab logo">
                        <?php else: ?>
                        <img src="src/images/max-other-brand-logo.png" alt="Yellow cab logo with white background and shadow">
                        <?php endif; ?>
                    </div>
                <?php endif;?>

                <?php if(is_ph()):?>
                    <button class="modal-dismiss" data-dismiss="other-brands">
                        <i class="ic-close"></i>
                    </button>
                <?php endif;?>

                <div class="modal-body">
                    <?php if(is_ph()):?>
                        <figure class="modal-body__image">
                            <img src="dist/images/<?= $content['images']['modal_otherbrands_img']; ?>" alt="">
                        </figure>
                    <?php endif;?>
                    <div class="modal-body__title">
                        <h3><?= $content['static']['modal_otherbrands_title']; ?></h3>
                        <p class="body-1"><?= $content['static']['modal_otherbrands_content']; ?></p>
                    </div>
                    <div class="[ u-df-mb u-df-mb-jc-sb u-df-mb-wr u-df-tb-r ]">
                        <a href="<?= is_max() ? '/?s=yellow-cab' : '#'; ?>" type="button" class="o-button o-button-lg o-button-trans o-button-bordered">
                            <span><?= $content['buttons']['modal_otherbrands_viewmenu']; ?></span>
                        </a>
                        <?php if(is_max()): ?>
                        <a href="/?s=default"  class="o-button o-button-lg <?php if(is_max()):?>o-button-full<?php endif;?>" data-dismiss="other-brands">
                            <span><?= $content['buttons']['modal_otherbrands_proceedcheckout']; ?></span>
                        </a>
                        <?php else: ?>
                        <button type="button" class="o-button o-button-lg <?php if(is_max()):?>o-button-full<?php endif;?>" data-dismiss="other-brands" data-trigger-modal="delivery-disclaimer">
                            <span><?= $content['buttons']['modal_otherbrands_proceedcheckout']; ?></span>
                        </button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal for-delivery-transaction-alert" data-modal-catcher="delivery-transaction-alert">
        <div class="modal-wrapper">
            <div class="modal-content">

                <?php if(is_max()):?>
                    <div class="modal-header">
                        <button class="modal-dismiss" data-dismiss="delivery-transaction-alert">
                            <i class="ic-close"></i>
                        </button>
                    </div>
                    <?php if(is_ph()):?>
                        <div class="img">
                            <img src="src/images/max-location-pin.png" alt="">
                        </div>
                    <?php endif;?>
                <?php endif;?>

                <?php if(is_ph()):?>
                    <button class="modal-dismiss" data-dismiss="delivery-transaction-alert">
                        <i class="ic-close"></i>
                    </button>
                <?php endif;?>
                <?php if(is_yc()):?>
                    <button class="modal-dismiss" data-dismiss="delivery-transaction-alert">
                        <i class="ic-close"></i>
                    </button>
                <?php endif;?>

                <div class="modal-body">
                    <?php if(is_ph()):?>
                        <div class="img">
                            <img src="dist/images/<?= $content['images']['location']; ?>" alt="">
                        </div>
                    <?php endif;?>
                    <div class="modal-body__title">
                        <h3><?= $content['static']['modal_delivery_transactionalert_title']; ?></h3>
                        <p class="body-1"><?= $content['static']['modal_delivery_transactionalert_content']; ?></p>
                    </div>
                    <button type="button" class="o-button o-button-lg <?php if(is_max()):?>o-button-full o-button-trans o-button-bordered<?php endif;?>" data-dismiss="delivery-transaction-alert">
                        <span><?= $content['buttons']['modal_delivery_transactionalert_ok']; ?></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal for-delivery-disclaimer" data-modal-catcher="delivery-disclaimer">
        <div class="modal-wrapper">
            <div class="modal-content">
                <button class="modal-dismiss" data-dismiss="delivery-disclaimer">
                    <i class="ic-close"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-body__title">
                        <h3><?= $content['static']['modal_delivery_disclaimer_title']; ?></h3>
                        <p class="body-1">
                            <?= $content['static']['modal_delivery_disclaimer_content']; ?> 
                        </p>
                    </div>
                    <div class="[ u-df-mb u-df-mb-jc-sb u-df-mb-w u-df-tb-r ]">
                        <a href="#" type="button" class="o-button o-button-lg o-button-trans o-button-bordered" data-dismiss="delivery-disclaimer">
                            <span><?= $content['buttons']['modal_delivery_disclaimer_cancel']; ?></span>
                        </a>
                        <button type="button" class="o-button o-button-lg">
                            <span><?= $content['buttons']['modal_delivery_disclaimer_ok']; ?></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal for-added-to-cart" data-modal-catcher="added-to-cart">
        <div class="modal-wrapper">
            <div class="modal-content">
                <button class="modal-dismiss" data-dismiss="added-to-cart">
                    <i class="ic-close"></i>
                </button>
                <div class="modal-body">
                    <?php if(is_max()): ?><i class="ic-modal-cart"></i><?php endif; ?>
                    <div class="modal-body__title">
                        <?php if(is_ph()): ?><i class="ic-modal-cart"></i><?php endif; ?><h2><?= $content['static']['modal_added_cart_title']; ?></h2>
                    </div>
                    <div class="modal-buttons [ u-df-mb <?php if(is_ph()): ?>u-df-mb-jc-sb<?php endif; ?> u-df-mb-wr u-df-tb-r ]">
                        <a href="/review-order.php" type="button" class="o-button o-button-lg o-button-trans o-button-bordered">
                            <span><?= $content['buttons']['modal_added_cart_checkout']; ?></span>
                        </a>
                        <button type="button" class="o-button o-button-lg" data-dismiss="added-to-cart">
                            <span><?= $content['buttons']['modal_added_cart_continue_order']; ?></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal for-order-details" data-modal-catcher="order-details">
        <div class="modal-wrapper">
            <div class="modal-content">
                
                <?php if(is_ph()):?>
                    <button class="modal-dismiss" data-dismiss="modal">
                        <i class="ic-close"></i>
                    </button>
                <?php endif;?>

                <?php if(is_max()):?>
                    <div class="modal-header">
                        <button class="modal-dismiss" data-dismiss="modal">
                            <i class="ic-close"></i>
                        </button>
                        <div class="img">
                            <img src="src/images/ic-max-check-circle.svg" alt="">
                        </div>
                    </div>
                <?php endif;?>


                <div class="modal-body order-detail">
                    <div class="order-detail_header">
                        <span><?= $content['static']['modal_order_details_header1']; ?></span>
                        <h3 class="h3"><?= $content['static']['modal_order_details_header2']; ?></h3>
                    </div>
                    <div class="order-detail_body" id="detail-scroll">
                        <div class="order-detail_body--title [ u-df-mb u-df-mb-w ]">
                            <?php if(is_ph()):?>
                                <div class="order-detail_body--title__icon">
                                    <i class="ic-check-c-green"></i>
                                </div>
                            <?php endif;?>
                            <?php if(is_max()):?><div class="o-divider-top"></div><?php endif;?>
                            <h5 class="h5"><?= $content['static']['modal_order_details_header3']; ?></h5>
                            <?php if(is_ph()):?>
                                <figure>
                                    <img src="dist/images/<?= $content['images']['img_stamp']; ?>" alt="">
                                </figure>
                            <?php endif;?>
                            <div class="o-divider"></div>
                        </div>
                        <?php if(is_ph()):?>
                            <ul class="order-detail_list">
                                <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                    <h6 class="h6">Garden Special</h6>
                                </li>
                                <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Garden Special 15” Large</span>
                                    <span>1</span>
                                    <span>P 790.00</span>
                                </li>
                                <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Regular Cut</span>
                                </li>
                                <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Parmesan Cheese</span>
                                    <span>1</span>
                                    <span> P 35.00</span>
                                </li>
                                <li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">
                                    <h6 class="h6">Subtotal</h6>
                                    <h6 class="h6">P 210.00</h6>
                                </li>
                                <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                    <h6 class="h6">Charlie Chan ®</h6>
                                </li>
                                <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Regular</span>
                                    <span>1</span>
                                    <span>P 210.00</span>
                                </li>
                                <li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">
                                    <h6 class="h6">Subtotal</h6>
                                    <h6 class="h6">P 210.00</h6>
                                </li>
                                <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                    <h6 class="h6">Wings</h6>
                                </li>
                                <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                    <span>1/2-Pound</span>
                                    <span>1</span>
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
                            <ul class="order-detail_list">
                                <li class="main [ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Whole Fried Chicken</span>
                                    <span>1</span>
                                    <span>₱ 818.00</span>
                                </li>
                                <li class="sub [ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Chopped</span>
                                    <span>-</span>
                                </li>
                                <li class="sub [ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Family</span>
                                    <span>₱ 689.00</span>
                                </li>
                                <li class="sub [ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Condiment Trio</span>
                                    <span>₱ 129.00</span>
                                </li>

                                <div class="o-divider"></div>

                                <li class="main [ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Standard Bundle</span>
                                    <span>1</span>
                                    <span>₱ 1,399.00</span>
                                </li>
                                <li class="sub [ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Corn Sisig</span>
                                    <span>-</span>
                                </li>
                                <li class="sub [ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Corn Sisig</span>
                                    <span>-</span>
                                </li>
                                <li class="sub [ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Sweet & Spicy Tofu</span>
                                    <span>-</span>
                                </li>
                                <li class="sub [ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Pancit Canton</span>
                                    <span>-</span>
                                </li>
                                <li class="sub [ u-df-mb u-df-mb-jc-sb ]">
                                    <span>1L Iced Tea</span>
                                    <span>-</span>
                                </li>

                                <div class="o-divider"></div>

                                <li class="main [ u-df-mb u-df-mb-jc-sb ]">
                                    <span>Chicken Sisig Bowl</span>
                                    <span>1</span>
                                    <span>₱ 199.00</span>
                                </li>
                                
                            </ul>
                        <?php endif;?>
                    </div>
                    <div class="order-detail_footer">
                        <ul class="order-detail_list">
                            <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                <h6 class="h6"><?= $content['static']['modal_order_details_subtotal_label']; ?></h6>
                                <h6 class="h6" data-catcher-order="subtotal"><?php if(is_max()):?>P 2416.00<?php endif;?></h6>
                            </li>
                            <li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">
                                <h6 class="h6"><?= $content['static']['modal_order_details_servicecharge']; ?></h6>
                                <h6 class="h6" data-catcher-order="charges"><?php if(is_max()):?>P 80.50<?php endif;?></h6>
                            </li>
                            <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                <h6 class="h6"><?= $content['static']['modal_order_details_total_label']; ?></h6>
                                <h6 class="h6" data-catcher-order="total"><?php if(is_max()):?>P 2496.50<?php endif;?></h6>
                            </li>
                            <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                <span class="italize"><?= $content['static']['modal_order_details_paid_label']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal for-invalid-delivery-checkout <?= is_max() ? 'modal-max' : null; ?>" data-modal-catcher="invalid-delivery-checkout">
        <div class="modal-wrapper">
            <div class="modal-content">
                <?php if(is_max()):?>
                    <div class="modal-header">
                        <button class="modal-dismiss" data-dismiss="modal">
                            <i class="ic-close-gray"></i>
                        </button>
                        <div class="img">
                            <img src="src/images/icon-rounded-warning.svg" alt="Icon for Invalid Delivery Time">
                        </div>
                    </div>
                <?php endif;?>
                <?php if(is_ph()): ?>
                <button class="modal-dismiss" data-dismiss="modal">
                    <i class="ic-close"></i>
                </button>
                <?php endif; ?>
                <div class="modal-body [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                    <h2 class="h2">
                        <?= $content['static']['modal_invalid_deliver_checkout_title']; ?>
                    </h2>
                    <p>
                        <?= $content['static']['modal_invalid_deliver_checkout_content_1']; ?>
                        <a href="store-list.php" target="_blank"><?= $content['static']['modal_invalid_deliver_checkout_content_2']; ?></a> 
                        <?= $content['static']['modal_invalid_deliver_checkout_content_3']; ?>
                    </p>
                    <?php if(is_ph()): ?>
                    <a href="ordernow-pickup.php" class="o-button o-button-lg">
                        <span><?= $content['buttons']['modal_invalid_deliver_checkout_selectnewtime']; ?> </span>
                    </a>
                    <?php else: ?>
                    <button class="o-button o-button-lg js-invalidTimeBtn">
                        <span><?= $content['buttons']['modal_invalid_deliver_checkout_selectnewtime']; ?> </span>
                    </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal for-registration-success <?php if(is_max()):?>modal-max<?php endif;?>" data-modal-catcher="registration-success">
        <div class="modal-wrapper">
            <div class="modal-content">

                    <?php if(is_max()):?>
                        <div class="modal-header">
                            <button class="modal-dismiss" data-dismiss="modal">
                                <i class="ic-close-gray"></i>
                            </button>
                        </div>
                        <div class="img">
                            <img src="src/images/ic-max-register-success.svg" alt="">
                        </div>
                    <?php endif;?>

                    <?php if(is_ph()):?>
                        <button class="modal-dismiss" data-dismiss="modal">
                            <i class="ic-close"></i>
                        </button>
                    <?php endif;?>

                <div class="modal-body [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                    <h2 class="h2"><?= $content['static']['modal_registration_success_title']; ?></h2>
                    <p><?= $content['static']['modal_registration_success_content']; ?></p>
                    <button class="o-button o-button-lg" data-dismiss="modal">
                        <span><?= $content['buttons']['modal_registration_success_ok']; ?></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal for-edit-profile-success <?php if(is_max()):?>modal-max<?php endif;?>" data-modal-catcher="edit-profile-success">
        <div class="modal-wrapper">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="modal-dismiss" data-dismiss="modal">
                        <i class="ic-close-gray"></i>
                    </button>
                </div>
                <div class="img">
                    <img src="src/images/max-success-pin.svg" alt="">
                </div>

                <div class="modal-body [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                    <h2 class="h2">Heads Up!</h2>
                    <p>You have successfully updated your profile.</p>
                    <button class="o-button o-button-lg" data-dismiss="modal">
                        <span>OK</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal for-change-pass-success <?php if(is_max()):?>modal-max<?php endif;?>" data-modal-catcher="change-pass-success">
        <div class="modal-wrapper">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="modal-dismiss" data-dismiss="modal">
                        <i class="ic-close-gray"></i>
                    </button>
                </div>
                <div class="img">
                    <img src="src/images/max-success-pin.svg" alt="">
                </div>

                <div class="modal-body [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                    <h2 class="h2">Heads Up!</h2>
                    <p>You have successfully changed your password.</p>
                    <button class="o-button o-button-lg" data-dismiss="modal">
                        <span>OK</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal for-default-modal" data-modal-catcher="default">
        <div class="modal-wrapper">
            <div class="modal-content">
                <button class="modal-dismiss" data-dismiss="modal">
                    <i class="ic-close"></i>
                </button>
                <div class="modal-body [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                    <h2 class="h2" data-modal-content="title"></h2>
                    <p data-modal-content="description"></p>
                    <div class="for-remove-order_ctas [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-w u-df-mb-ai-c u-df-tb-jc-c ]">
                        <button class="o-button o-button-lg hide" data-dismiss="modal" data-modal-content="proceedBtn">
                            <span></span>
                        </button>
                        <a href="#" class="o-button o-button-lg hide" data-dismiss="modal" data-modal-content="proceedBtnLink">
                            <span></span>
                        </a>
                        <button class="o-button o-button-lg o-button-trans o-button-bordered hide" data-dismiss="modal" data-modal-content="cancelBtn">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal for-remove-order <?php if(is_max()):?>modal-max<?php endif;?>" data-modal-catcher="remove-order">
        <?php if(is_max()):?>
            <div class="modal-wrapper">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="modal-dismiss" data-dismiss="modal">
                            <i class="ic-close-gray"></i>
                        </button>
                    </div>
                    <div class="img">
                        <img src="src/images/ic-max-modal-warning.svg" alt="">
                    </div>

                    <div class="modal-body [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                        <h2><?= $content['static']['modal_remove_order_title']; ?></h2>
                        <p><?= $content['static']['modal_remove_order_content']; ?></p>
                        <div class="modal-footer [ u-dn-mb ]">

                            <div class="for-desktop">
                                <button class="o-button o-button-lg o-button-trans o-button-bordered" data-dismiss="modal">
                                    <span><?= $content['buttons']['modal_remove_order_cancel']; ?></span>
                                </button>
                                <button type="button" class="o-button o-button-lg" data-dismiss="modal">
                                    <span><?= $content['buttons']['modal_remove_order_ok']; ?></span>
                                </button>
                            </div>

                            <div class="for-mobile">
                                <button type="button" class="o-button o-button-lg" data-dismiss="modal">
                                    <span><?= $content['buttons']['modal_remove_order_ok']; ?></span>
                                </button>
                                <button class="o-button o-button-lg o-button-trans o-button-bordered" data-dismiss="modal">
                                    <span><?= $content['buttons']['modal_remove_order_cancel']; ?></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;?>

        <?php if(is_yc()):?>
            <div class="modal-wrapper">
                <div class="modal-content">
                    <button class="modal-dismiss" data-dismiss="modal">
                        <i class="ic-close"></i>
                    </button>
                        <div class="modal-body [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                            <h2 class="h2"><?= $content['static']['modal_remove_order_title']; ?></h2>
                            <p><?= $content['static']['modal_remove_order_content']; ?></p>
                            <div class="for-remove-order_ctas [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-w u-df-mb-ai-c u-df-tb-jc-c ]">
                                <button class="o-button o-button-lg o-button-trans o-button-bordered" data-dismiss="modal">
                                    <span><?= $content['buttons']['modal_remove_order_cancel']; ?></span>
                                </button>
                                <button class="o-button o-button-lg">
                                    <span><?= $content['buttons']['modal_remove_order_ok']; ?></span>
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        <?php endif;?>
        <?php if(is_ph()):?>
            <div class="modal-wrapper">
                <div class="modal-content">
                    <button class="modal-dismiss" data-dismiss="modal">
                        <i class="ic-close"></i>
                    </button>
                        <div class="modal-body [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                            <h2 class="h2"><?= $content['static']['modal_remove_order_title']; ?></h2>
                            <p><?= $content['static']['modal_remove_order_content']; ?></p>
                            <div class="for-remove-order_ctas [ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-w u-df-mb-ai-c u-df-tb-jc-c ]">
                                <button class="o-button o-button-lg o-button-trans o-button-bordered" data-dismiss="modal">
                                    <span><?= $content['buttons']['modal_remove_order_cancel']; ?></span>
                                </button>
                                <button class="o-button o-button-lg">
                                    <span><?= $content['buttons']['modal_remove_order_ok']; ?></span>
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        <?php endif;?>

    </div>



    <?php if(is_yc()): include 'src/includes/modals/c-modal-popup.php'; endif;?>
    <?php if(is_ph()): include 'src/includes/modals/c-modal-popup.php'; endif;?>
    <?php include 'src/includes/modals/c-modal-privacy.php'?>
    <?php include 'src/includes/modals/c-modal-conditions.php'?>
    <?php include 'src/includes/modals/c-modal-map.php'?>
    

    <div class="modal-backdrop" data-modal-catcher="backdrop"></div>
    
    <footer class="c-footer">
        <div class="c-footer__main">
            
            <div class="o-container">
                <figure class="footer-logo">
                    <img src="src/images/footer/logo/<?= $content['images']['footer-logo']; ?>" alt="">
                </figure>
                <div class="footer-content">
                    <div class="content-left">
                        <div class="footer-desc">
                            <p class="body-1">
                                <?= $content['static']['footer-desc-1']; ?>
                            </p>
                            <p class="body-1">
                                <?= $content['static']['footer-desc-2']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="delivery-contact">
                            <p class="overline"><?= $content['static']['right-content-title']; ?></p>
                            <div class="delivery-numbers"> 
                            <?php foreach($delivery_numbers as $key => $value): ?>
                                <?php if(is_yc() || is_max()): ?>
                                    <div class="number-per-city">
                                        <p class="body-1--bold-yellow"> <?= $value['city'] ?></p>
                                        <p class="body-1"><?= $value['contact-number'] ?></p>
                                    </div>
                                <?php endif;?>
                                <?php if(is_ph()): ?>
                                    <div class="number-per-city">
                                        <p class="body-1--bold-orange"> <?= $value['city'] ?></p>
                                        <p class="body-1"><?= $value['contact-number'] ?></p>
                                    </div>
                                <?php endif;?>
                                <!-- <div class="number-per-city">
                                    <p class="body-1--bold-yellow">Metro Manila</p>
                                    <p class="body-1">(02) 8-789-9999</p>
                                </div>
                                <div class="number-per-city">
                                    <p class="body-1--bold-yellow">Laguna</p>
                                    <p class="body-1">(049) 502-9999</p>
                                </div>
                                <div class="number-per-city">
                                    <p class="body-1--bold-yellow">Baguio</p>
                                    <p class="body-1">(074) 442-9999</p>
                                </div>
                                <div class="number-per-city">
                                    <p class="body-1--bold-yellow">Cebu</p>
                                    <p class="body-1">(032) 254-1111</p>
                                </div>
                                <div class="number-per-city">
                                    <p class="body-1--bold-yellow">Cavite</p>
                                    <p class="body-1">(046) 416-9999</p>
                                </div>
                                <div class="number-per-city">
                                    <p class="body-1--bold-yellow">Batangas</p>
                                    <p class="body-1">(043) 723-2222</p>
                                </div>
                                <div class="number-per-city">
                                    <p class="body-1--bold-yellow">Boracay</p>
                                    <p class="body-1">(074) 442-9999</p>
                                </div> -->
                            <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <div class="delivery-service">
                            <p class="delivery-desc body-1">
                                <?= $content['static']['delivery-desc']; ?> 
                            </p>
                            <?php if(is_yc()): ?>
                                <figure class="delivery-img">
                                    <img src="dist/images/footer/<?= $content['images']['delivery-logo']; ?>" alt="">
                                </figure>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-footer__secondary">
            <div class="o-container">
                <div class="links">
                    <a data-trigger-modal="condition-of-use" class="overline" href=""><?= $content['static']['conditions']; ?></a>
                    <a data-trigger-modal="privacy-policy" class="overline" href=""><?= $content['static']['policy']; ?></a>
                </div>
                <div class="links-icon">
                    <div class="feedback">
                        <p class="overline"><?= $content['static']['feedback-text']; ?></p>
                        <a href="" class="send-img">
                            <img src="dist/images/<?= $content['icons']['mail-icon']; ?>" alt="">
                        </a>
                    </div>
                    
                    <div class="social-media">
                        <p class="overline"><?= $content['static']['follow-us-text']; ?></p>
                        <ul class="social-media-links">
                            <li><a href=""><img src="dist/images/<?= $content['icons']['twitter-icon']; ?>" alt=""></a></li>
                            <li><a href=""><img src="dist/images/<?= $content['icons']['fb-icon']; ?>" alt=""></a></li>
                            <li><a href=""><img src="dist/images/<?= $content['icons']['insta-icon']; ?>" alt=""></a></li>
                            <li><a href=""><img src="dist/images/<?= $content['icons']['yt-icon']; ?>" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script type="text/javascript" src="dist/lib-js/Event.js"></script>
    <script type="text/javascript" src="dist/lib-js/Magnifier.js"></script>
    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 43)
            return false;
            return true;
        }
        
        // // cart side nav
        // function openNav() {
        //     document.getElementById("cart-side-nav").classList.add("active");
        // }

        // function closeNav() {
        //     document.getElementById("cart-side-nav").classList.remove("active");
        // }
    </script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0h-1ImumkI0RmmoyyFd_nl66cK9BL0mQ&callback=initMap&libraries=&v=weekly"
      async
    ></script>
</body>
</html>