
<?php
    $c_content = array(
        'static' => array(
            'condition_1' => 'How to Order Online',
            'condition_1_details_1' => 'Order and pay online at Yellow Cab Pizza Co.®! Simply register at delivery.yellowcabpizza.com to order our bestselling Edge-To-Edge Pizzas® and other signature items for you, your friends, and loved ones in the Philippines.',
            'condition_1_details_2' => 'Orders may be placed online for:',
            'condition_1_content_1' => '<b>Pick-Up</b> – Order in advance then pick up at any Yellow Cab Pizza Co.® branch nationwide at your most convenient time.',
            'condition_1_content_2' => '<b>Deliver Now</b> – Have your orders delivered as soon as possible to your preferred address.',
            'condition_1_content_3' => '</b>Deliver Later</b> – Schedule your delivery date and time up to two (2) months later.',
            'condition_1_content_4' => '</b>E-Party</b> – Arrange deliveries for up to 30 guests in a single transaction.',

            'condition_2' => 'Conditions of Use',
            'condition_2_detail_1' => 'At Yellow Cab Pizza Co.®, we understand that your order is meant for a very special occasion and/or person. It is our
                                        goal to deliver your order in the Philippines based on the indicated date and time you have chosen and confirmed on
                                        our delivery website.',
            'condition_2_detail_2' => 'In order for us to ensure proper and timely delivery, please read our Conditions of Use below. Please note that
                                         placing an order on our website means that you agree to the following terms outlined henceforth:',
            'condition_2_term1' => 'Orders online must be placed with the proper lead time for each of the following transaction types:',
            'term1_01' => 'Pick-Up – At least one (1) hour before pick-up time',
            'term1_02' => 'Deliver Now – At least one (1) hour before intended delivery time',
            'term1_03' => 'Deliver Later – At least two (2) hours before intended delivery time',
            'term1_04' => 'E-Party – At least 48 hours before intended delivery time',
            'condition_2_term2' => 'All transactions will be settled in Philippine Peso (PHP).',
            'condition_2_term3' => 'The minimum order amount exclusive of delivery fees and other charges is PHP 350.',
            'condition_2_term4' => 'Credit cards, debit cards, and other online payment facilities will be charged at the time the order is placed
                                        on our website.',
            'condition_2_term5' => 'An electronic copy of the order confirmation will be emailed to the customer as proof of the transaction.
                                    Details will include the ordered items, delivery date and time, delivery address, name of recipient, and other
                                    pertinent information.',
            'condition_2_term6' => 'Changes or cancellations must be made within five (5) minutes for Pick-Up and Deliver Now transactions,
                                    and within one (1) hour for Deliver Later and E-Party transactions.',
            'condition_2_term7' => 'Changes or cancellations must be made via voice call or email to be accommodated. Messages on our
                                    social media channels will not be entertained.',
            'condition_2_term8' => 'Yellow Cab Pizza Co.® reserves the right to reject order changes or cancellations made beyond the
                                    stipulated time or outside the advised communication platforms.',
            'condition_2_term9' => 'Changes in the order are subject to confirmation and additional cost when applicable. Said changes may
                                    cause a delay in delivery',
            'condition_2_term10' => 'Prices are subject to change without prior notice.',
            'condition_2_term11' => 'The delivery area for provincial branches is within a 5-kilometer radius of the store. In the event that a store
                                        caters to an order beyond this distance, Yellow Cab Pizza Co.® reserves the right to charge an additional
                                        delivery fee or require a minimum order amount greater than PHP 350.',
            'condition_2_term12' => 'Some areas may be considered unserviceable. A representative from our team will get in touch with you
                                        within the day after receipt of order if your specified delivery address cannot be catered to by our delivery
                                        team.',
            'condition_3' => 'Contact Us',
            'condition_3_detail' => 'Yellow Cab Pizza Co.® </br>24/7 Delivery Hotlines',
            'condition_3_email' => 'Email us at onlinesupport@yellowcabpizza.com',

            // FOR DESKTOP
            'nav_item_1' => 'How to Order Online',
            'nav_item_2' => 'Conditions of Use',
            'nav_item_3' => 'Contact Us',
            'contact_1' => 'Email us at',
            'contact_2' => 'onlinesupport@yellowcabpizza.com'
        ),
        'link' => array(
            'online_support_link' => 'mailto:onlinesupport@yellowcabpizza.com',
        ),
    );
    $contacts = [
        'Metro Manila: (02) 8-789-9999',
        'Baguio: (074) 442-9999',
        'Cavite: (046) 416-9999',
        'Laguna: (049) 502-9999',
        'Cebu: (032) 254-1111'
    ];
?>
    <div class="js-spy-modal modal privacy-policy" data-modal-catcher="condition-of-use">
        <div class="modal-wrapper">
            <div class="modal-content">
                <button class="modal-dismiss" data-dismiss="modal">
                    <i class="ic-close"></i>
                </button>
                <div class="modal-body mobile">
                    <div class="privacy-policy--tabs">
                        <div class="privacy-policy-tab">
                            <input type="checkbox" id="condition-01" >
                            <label class="h5" for="condition-01"><?= $c_content['static']['condition_1']; ?></label>
                            <div class="tab-content">
                                <p class="body-1"><?= $c_content['static']['condition_1_details_1']; ?></p>
                                <p class="body-1"><?= $c_content['static']['condition_1_details_2']; ?></p>
                                <ol>
                                    <li><?= $c_content['static']['condition_1_content_1']; ?></li>
                                    <li><?= $c_content['static']['condition_1_content_2']; ?></li>
                                    <li><?= $c_content['static']['condition_1_content_3']; ?></li>
                                    <li><?= $c_content['static']['condition_1_content_4']; ?></li>
                                </ol>
                            </div>
                        </div>
                        <div class="privacy-policy-tab">
                            <input type="checkbox" id="condition-02">
                            <label class="h5" for="condition-02"><?= $c_content['static']['condition_2']; ?></label>
                            <div class="tab-content">
                            <p class="body-1"><?= $c_content['static']['condition_2_detail_1']; ?></p>
                            <p class="body-1"><?= $c_content['static']['condition_2_detail_2']; ?></p>
                            <ol>
                                <li><?= $c_content['static']['condition_2_term1']; ?></li>
                                <ul>
                                    <li><?= $c_content['static']['term1_01']; ?></li>
                                    <li><?= $c_content['static']['term1_02']; ?></li>
                                    <li><?= $c_content['static']['term1_03']; ?></li>
                                    <li><?= $c_content['static']['term1_04']; ?></li>
                                </ul>
                                <li><?= $c_content['static']['condition_2_term2']; ?></li>
                                <li><?= $c_content['static']['condition_2_term3']; ?></li>
                                <li><?= $c_content['static']['condition_2_term4']; ?></li>
                                <li><?= $c_content['static']['condition_2_term5']; ?></li>
                                <li><?= $c_content['static']['condition_2_term6']; ?></li>
                                <li><?= $c_content['static']['condition_2_term7']; ?></li>
                                <li><?= $c_content['static']['condition_2_term8']; ?></li>
                                <li><?= $c_content['static']['condition_2_term9']; ?></li>
                                <li><?= $c_content['static']['condition_2_term10']; ?></li>
                                <li><?= $c_content['static']['condition_2_term11']; ?></li>
                                <li><?= $c_content['static']['condition_2_term12']; ?></li>
                            </ol>
                            </div>
                        </div>
                        <div class="privacy-policy-tab">
                            <input type="checkbox" id="condition-03">
                            <label class="h5" for="condition-03"><?= $c_content['static']['condition_3']; ?></label>
                            <div class="tab-content">
                            <p class="body-1"><?= $c_content['static']['condition_3_detail']; ?></p>
                            <ul>
                                <?php foreach($contacts as $key => $value): ?>
                                    <li><?= $value ?></li>
                                <?php endforeach; ?>
                                <!-- <li>Metro Manila: (02) 8-789-9999</li>
                                <li>Baguio: (074) 442-9999</li>
                                <li>Cavite: (046) 416-9999</li>
                                <li>Laguna: (049) 502-9999</li>
                                <li>Cebu: (032) 254-1111</li> -->
                            </ul>
                            <p class="body-1"><?= $c_content['static']['condition_3_email']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body desktop">
                    <div class="privacy-policy__nav">
                        <ul class="privacy-policy__nav--items">
                            <li><a class="active" href="#modal-order-online"><?= $c_content['static']['nav_item_1']; ?></a></li>
                            <li><a href="#modal-condition-of-use"><?= $c_content['static']['nav_item_2']; ?></a></li>
                            <li><a href="#modal-contact-us"><?= $c_content['static']['nav_item_3']; ?></a></li>
                        </ul>
                    </div>
                    <div class="privacy-policy__content" id="policy-content">
                        <div class="js-spy" spy-scroll-id="#modal-order-online" >
                            <h3><?= $c_content['static']['condition_1']; ?></h3>
                            <hr/>
                            <p class="body-1"><?= $c_content['static']['condition_1_details_1']; ?></p>
                            <p class="body-1"><?= $c_content['static']['condition_1_details_2']; ?></p>
                            <ul>
                                <li><?= $c_content['static']['condition_1_content_1']; ?></li>
                                <li><?= $c_content['static']['condition_1_content_2']; ?></li>
                                <li><?= $c_content['static']['condition_1_content_3']; ?></li>
                                <li><?= $c_content['static']['condition_1_content_4']; ?></li>
                            </ul>
                        </div>
                        <div class="js-spy" spy-scroll-id="#modal-condition-of-use">
                            <h3><?= $c_content['static']['condition_2']; ?></h3>
                            <hr/>
                            <p class="body-1"><?= $c_content['static']['condition_2_detail_1']; ?></p>
                            <p class="body-1"><?= $c_content['static']['condition_2_detail_2']; ?></p>
                            <ol>
                                <li><?= $c_content['static']['condition_2_term1']; ?></li>
                                <ul>
                                        <li><?= $c_content['static']['term1_01']; ?></li>
                                        <li><?= $c_content['static']['term1_02']; ?></li>
                                        <li><?= $c_content['static']['term1_03']; ?></li>
                                        <li><?= $c_content['static']['term1_04']; ?></li>
                                    </ul>
                                <li><?= $c_content['static']['condition_2_term2']; ?></li>
                                <li><?= $c_content['static']['condition_2_term3']; ?></li>
                                <li><?= $c_content['static']['condition_2_term4']; ?></li>
                                <li><?= $c_content['static']['condition_2_term5']; ?></li>
                                <li><?= $c_content['static']['condition_2_term6']; ?></li>
                                <li><?= $c_content['static']['condition_2_term7']; ?></li>
                                <li><?= $c_content['static']['condition_2_term8']; ?></li>
                                <li><?= $c_content['static']['condition_2_term9']; ?></li>
                                <li><?= $c_content['static']['condition_2_term10']; ?></li>
                                <li><?= $c_content['static']['condition_2_term11']; ?></li>
                                <li><?= $c_content['static']['condition_2_term12']; ?></li>
                            </ol>
                        </div>
                        <div class="js-spy" spy-scroll-id="#modal-contact-us">
                            <h3><?= $c_content['static']['condition_3']; ?></h3>
                            <hr/>
                            <p class="body-1"><?= $c_content['static']['condition_3_detail']; ?></p>
                            <ul>
                                <?php foreach($contacts as $key => $value): ?>
                                    <li><?= $value ?></li>
                                <?php endforeach; ?>
                                <!-- <li>Metro Manila: (02) 8-789-9999</li>
                                <li>Baguio: (074) 442-9999</li>
                                <li>Cavite: (046) 416-9999</li>
                                <li>Laguna: (049) 502-9999</li>
                                <li>Cebu: (032) 254-1111</li> -->
                            </ul>
                            <p class="body-1"><?= $c_content['static']['contact_1']; ?> <a href="<?= $c_content['link']['online_support_link']; ?>"><?= $c_content['static']['contact_2']; ?></a></p>
                            </br>
                            </br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <style>


    </style>