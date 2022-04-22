<!------
    NOTE: 
    "active" class in parent shows the modal
-->

<?php
    if(is_ph()):
        $mp_content = array(
            'static' => array(
                'pop_title' => 'Your Classic Pancake is on us!',
                'pop_content' => 'Get a homey goodness of  plain golden pancakes when you sign in with Pancake House’s Delivery',
            ),
            'buttons' => array(
                'enroll_btn' => 'Sign in now',
            ),
            'images' => array(
                'pattern_sm' => 'dist/images/you-do-you/pattern-sm.png',
                'pattern_dt' => 'dist/images/you-do-you/pattern-dt.png',
                'reward_logo' => 'dist/images/you-do-you/ph-pancake-house.png',
            )
        );
    endif;
    if(is_yc()):
        $mp_content = array(
            'static' => array(
                'pop_content' => 'Earn your way to a free pizza with You Do You Rewards!',
            ),
            'buttons' => array(
                'enroll_btn' => 'Enroll Now',
            ),
            'images' => array(
                'pattern_sm' => 'dist/images/you-do-you/pattern-sm.png',
                'pattern_dt' => 'dist/images/you-do-you/pattern-dt.png',
                'reward_logo' => 'dist/images/you-do-you/rewards-logo.png',
            )
        );
    endif;
    if(is_max()):
        $mp_content = array(
            'static' => array(
                'pop_content' => 'Your Max’s Fried Chicken is on us!',
                'pop_content_sub' => 'Get a free family chicken when you sign in with Max’s Delivery'
            ),
            'buttons' => array(
                'enroll_btn' => 'Sign in now',
            ),
            'images' => array(
                'pattern_sm' => 'dist/images/you-do-you/pattern-sm.png',
                'pattern_dt' => 'dist/images/you-do-you/max-pattern.png',
                'reward_logo' => 'dist/images/you-do-you/maxs-fried-chicken.png',
                'badge' => 'dist/images/you-do-you/max-badge.png',
            )
        );
    endif;
?>

<div class="c-modal-popup modal popup <?= is_max() ? 'js-promoModal' : 'active'; ?>">
    <div class="modal-wrapper">
        <div class="modal-container">
            <button class="modal-dismiss" data-dismiss="modal">
                <i class="ic-close"></i>
            </button>
            <div class="popup-images">
                <div class="popup-image-wrapper">
                    <?php if(is_yc()):?>
                        <img src="<?= $mp_content['images']['pattern_sm']; ?>" class="img-responsive img-sm" alt="New customer tick box background" role="presentation" />
                        <img src="<?= $mp_content['images']['pattern_dt']; ?>" class="img-responsive img-lg" alt="New customer tick box background" role="presentation" />
                    <?php endif;?>
                    
                    <?php if(is_max()):?>
                        <img src="<?= $mp_content['images']['pattern_dt']; ?>" class="img-responsive" alt="New customer tick box background" role="presentation" />
                    <?php endif;?>
                </div>
                <div class="popup-logo-wrapper">
                    <img src="<?= $mp_content['images']['reward_logo']; ?>" alt="You Do You rewards logo" role="presentation" />
                </div>

                <?php if(is_max()):?>
                    <div class="popup-badged-wrapper">
                        <img src="<?= $mp_content['images']['badge']; ?>" alt="lo" role="presentation" />
                    </div>
                <?php endif;?>

            </div>
            <div class="popup-content-wrapper">
                <div class="popup-content">
                    <?php if(is_ph()):?>
                        <h3><?= $mp_content['static']['pop_title']; ?></h3>
                    <?php endif;?>
                    <p class="body-1"><?= $mp_content['static']['pop_content']; ?></p>
                    <?php if(is_max()):?>
                        <span class="body-1"><?= $mp_content['static']['pop_content_sub']; ?></span>
                    <?php endif;?>
                </div>
                <a href="" class="o-button o-button-lg">
                    <span><?= $mp_content['buttons']['enroll_btn']; ?></span>
                </a>
            </div>
        </div>
    </div>
</div>
