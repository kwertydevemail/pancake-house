<?php
    $c_content = array(
        'static' => array(
                'content_text_1' => 'I want to enroll in Yellow Cab’s You Do You Rewards to earn points and redeem a free pizza! By enrolling in the program, you agree to our',
                'content_text_2' => 'Terms & Conditions',
                'content_text_3' => 'and',
                'content_text_4' => 'Conditions of Use.',
                'content_text_5' => 'I agree to receive communications about Yellow Cab and the You Do You Rewards program.',
        ),
        'images' => array(
            'pattern_sm' => 'pattern-sm.png',
            'pattern_lg' => 'pattern-lg.png',
            'reward_logo' => 'rewards-logo.png',
        ),
    );
?>
<div class="c-new-customer-tick-box">
    <div class="o-container [ u-df-mb-fd-c ]">
        <div class="c-tick-box-images">
            <div class="tick-box-bg-wrapper">
                <img src="dist/images/you-do-you/<?= $c_content['images']['pattern_sm']; ?>" class="img-responsive img-sm" alt="New customer tick box background" role="presentation" />
                <img src="dist/images/you-do-you/<?= $c_content['images']['pattern_lg']; ?>" class="img-responsive img-lg" alt="New customer tick box background" role="presentation" />
            </div>
            <div class="tick-box-logo-wrapper [ u-df-mb-ai-c-jc-c ]">
                <img src="dist/images/you-do-you/<?= $c_content['images']['reward_logo']; ?>" alt="You Do You rewards logo" role="presentation" />
            </div>
        </div>
        <div class="c-tick-box-form">
            <div class="c-tick-box-input-group o-form-group-inner w-100">
                <div class="c-tick-box-input o-form-group_checkbox for-terms">
                    <label>
                        <?= $c_content['static']['content_text_1']; ?> <a href="" data-trigger-modal="condition-of-use"><?= $c_content['static']['content_text_2']; ?></a> <?= $c_content['static']['content_text_3']; ?> <a href="" data-trigger-modal="conditions-of-use"><?= $c_content['static']['content_text_4']; ?></a>
                        <input type="checkbox" name="terms" data-validate="checkbox" data-required-validate="true" />
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="c-tick-box-input o-form-group_checkbox for-terms">
                    <label>
                        <?= $c_content['static']['content_text_5']; ?>
                        <input type="checkbox" />
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
