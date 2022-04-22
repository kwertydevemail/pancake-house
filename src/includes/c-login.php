<?php
    if(is_ph()):
        $content = array(
            'static' => array(
                'left_title' => 'New Customers',
                'left_content' => 'By creating  an account  with  our store, you will be able to move through the checkout  process  faster,  store multiple shipping addresses, view and track your orders in your account  and more',
                'right_title' => 'Registered Customers',
                'right_content' => 'If you have an account with us, please log in to view your saved delivery addresses.',
                'email_label' => 'Email Address',
                'email_placeholder' => 'Type email address here',
                'password_label' => 'Password',
                'password_placeholder' => 'Type in your password here',
                'error_msg' => 'Sorry, password and email address do not match. Please try again.',
            ),
            'buttons' => array(
                'create_account' => 'Create an account',
                'forgot_password' => 'Forgot your password?',
                'login' => 'Login',
            ),
            'images' => array(
                'description_img' => 'Pizza Man 1.png',
            ),
        );
    endif;

    if(is_max()):
        $content = array(
            'static' => array(
                'left_title' => 'New Customers',
                'left_content' => 'By creating  an account  with  our store, you will be able to move through the checkout  process  faster,  store multiple shipping addresses, view and track your orders in your account  and more.',
                'right_title' => 'Registered Customers',
                'right_content' => 'If you have an account with us, please log in to view your saved delivery addresses.',
                'email_label' => 'Email Address',
                'email_placeholder' => 'Type your email address here',
                'password_label' => 'Password',
                'password_placeholder' => 'Type in your password here',
                'error_msg' => 'Sorry, password and email address do not match. Please try again.',
            ),
            'buttons' => array(
                'create_account' => 'Create an Account',
                'forgot_password' => 'Forgot your password?',
                'login' => 'Login',
            ),
            'images' => array(
                'description_img' => 'max-chicken-2x.png',
            ),
        );
    endif;
?>
<section class="c-login">
    <div class="o-container">
        <div class="c-login__content">
            <div class="content-left">
                <div class="content-left__description">
                    <h3><?= $content['static']['left_title']; ?></h3>
                    <p class="body-1"><?= $content['static']['left_content']; ?></p>
                    <figure class="description-image">
                        <img src="/src/images/login/<?= $content['images']['description_img']; ?>" alt="">
                    </figure>
                </div>
                <?php if(is_max()):?><a href="/registration.php"><?php endif;?>
                    <button class="o-button o-button-lg">
                        <span><?= $content['buttons']['create_account']; ?></span>
                        <i class="<?php if(is_ph()):?>ic-person<?php endif?><?php if(is_max()):?>ic-max-user-circle<?php endif;?>"></i>
                    </button>
                <?php if(is_max()):?></a><?php endif;?>
            </div>
            <div class="content-right">
                <form action="" class="content-right__form" validation="true" data-form-catcher="loginForm">
                    <h3><?= $content['static']['right_title']; ?></h3>
                    <p class="registered-label body-1"><?= $content['static']['right_content']; ?></p>
                    <div class="o-form-group">
                        <label for="" class="overline"><?= $content['static']['email_label']; ?></label>
                        <input type="email" name="emailLogin" class="o-form-group_input" placeholder="<?= $content['static']['email_placeholder']; ?>" autocomplete="off" data-required-validate="true" required> 
                    </div>
                    <div class="o-form-group password">
                        <label for="" class="overline"><?= $content['static']['password_label']; ?></label>
                        <input type="password" name="passwordLogin" class="o-form-group_input <?php if(is_max()):?>js-max-password<?php endif;?>" placeholder="<?= $content['static']['password_placeholder']; ?>" autocomplete="off" data-required-validate="true" required>
                        <?php if(is_max()):?><span id=dummy class="password-dummy show" ></span><?php endif;?>
                        <i id="togglePassword" class="ic-password-hide"></i>
                        <span class="error-data"><?= $content['static']['error_msg']; ?></span> 
                    </div>
                    <button id="loginBtn" class="o-button o-button-lg o-button-disabled">
                        <span><?= $content['buttons']['login']; ?></span>
                        <i class="ic-person"></i>
                    </button>
                    <a href="forgot-password.php" class="forgot body-1 body-1--bold"><?= $content['buttons']['forgot_password']; ?></a>
                </form>
            </div>
        </div>
    </div>
</section> 