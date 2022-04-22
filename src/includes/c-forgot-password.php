<?php
    if(is_ph()):
        $content = array(
            'static' => array(
                'content-left-title' => 'New Customers',
                'content-left-desc' => 'By creating  an account  with  our store, you will be able to move through the checkout  process  faster,  store multiple shipping addresses, view and track your orders in your account  and more',
                'content-right-title' => 'Retrieve Password',
                'email-sent' => 'Your login details have been successfully sent to your email address.',
                'registered-email-text' => 'Please enter your registered email address.',
                'email-address-placeholder' => 'Type email address here'
            ),
            'buttons' => array(
                'create-account' => 'Create an account',
                'back-to-login' => 'Back to Login',
                'submit' => 'Submit'
            ),
            'images' => array(
                'description-image' => 'Pizza Man 1.png',
            ),
        );
    endif;

    if(is_max()):
        $content = array(
            'static' => array(
                'content-left-title' => 'New Customers',
                'content-left-desc' => 'By creating  an account  with  our store, you will be able to move through the checkout  process  faster,  store multiple shipping addresses, view and track your orders in your account  and more',
                'content-right-title' => 'Retrieve Password',
                'email-sent' => 'Your login details have been successfully sent to your email <br/> address.',
                'email-sent-mb' => 'Your login details have been successfully sent to your email address.',
                'registered-email-text' => 'Please enter your registered email address.',
                'email-address-placeholder' => 'Type email address here'
            ),
            'buttons' => array(
                'create-account' => 'Create an account',
                'back-to-login' => 'Back to Login',
                'submit' => 'Submit'
            ),
            'images' => array(
                'description-image' => 'max-chicken-2x.png',
            ),
        );
    endif;
?>
<section class="c-forgot-password">
    <div class="o-container">
        <div class="c-forgot-password__content">
            <div class="content-left">
                <div class="content-left__description">
                    <h3><?= $content['static']['content-left-title']; ?></h3>
                    <p class="body-1"><?= $content['static']['content-left-desc']; ?></p>
                    <figure class="description-image">
                        <img src="/src/images/login/<?= $content['images']['description-image']; ?>" alt="">
                    </figure>
                </div>
                <?php if(is_max()):?><a href="/registration.php"><?php endif;?>
                    <button class="o-button o-button-lg">
                        <span><?= $content['buttons']['create-account']; ?></span>
                        <i class="<?php if(is_ph()):?>ic-person<?php endif?><?php if(is_max()):?>ic-max-user-circle<?php endif;?>"></i>
                    </button>
                <?php if(is_max()):?></a><?php endif;?>
            </div>
            <div class="content-right">
                <form action="" class="content-right__form pass" validation="true" data-form-catcher="forgotPasswordForm">
                    <h3><?= $content['static']['content-right-title']; ?></h3>
                    <a href="login.php" class="form-back"><i class="ic-back-arrow"></i> <?= $content['buttons']['back-to-login']; ?></a>
                    <div class="email-sent">
                        <i class="<?php if(is_ph()):?>ic-check<?php endif;?><?php if(is_max()):?>ic-max-check-circle<?php endif;?>"></i>
                            <?php if(is_ph()):?><p class="body-1 email-sent__success"><?= $content['static']['email-sent']; ?></p><?php endif;?>
                            <?php if(is_max()):?>
                                <p class="body-1 email-sent__success u-dn-mb"><?= $content['static']['email-sent']; ?></p>
                                <p class="body-1 email-sent__success u-dn-dt"><?= $content['static']['email-sent-mb']; ?></p>
                            <?php endif;?>
                    </div>
                    <p class="enter-label body-1"><?= $content['static']['registered-email-text']; ?></p>
                    <div class="o-form-group">
                        <input type="email" name="forgotpass" class="o-form-group_input" placeholder="<?= $content['static']['email-address-placeholder']; ?>" autocomplete="off" required>
                    </div>
                    <button id="forgotPassBtn" class="o-button o-button-lg o-button-disabled">
                        <span><?= $content['buttons']['submit']; ?></span>
                        <i class="ic-person"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section> 