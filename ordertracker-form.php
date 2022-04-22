

<?php include 'src/includes/header.php';?>
<?php
    if(is_ph()):
        $content = array(
            'static' => array(
                'breadcrumbs-1' => 'Order Tracker',
                'header-title' => 'Order Tracker',
                'sub-header-title' => 'Please enter the reference number sent to your email',
                'reference-label' => 'Order Reference Number',
                'reference-placeholder' => 'Type number here'
            ),
            'buttons' => array(
                'back-to-home' => 'Back to Homepage',
                'submit' => 'SUBMIT'
            ),
            'images' => array(
                'home-img' => 'ic_home.svg'
            )
        );
    endif;

    if(is_max()):
        $content = array(
            'static' => array(
                'breadcrumbs-1' => 'Order Tracker',
                'header-title' => 'Order Tracker',
                'sub-header-title' => 'Please enter the reference number sent to your email',
                'reference-label' => 'Order Reference Number',
                'reference-error-msg' => 'Please provide a valid order reference number.',
                'reference-placeholder' => 'Type number here'
            ),
            'buttons' => array(
                'back-to-home' => 'Back to Home',
                'submit' => 'Submit'
            ),
            'images' => array(
                'home-img' => 'ic-max-home-red.svg'
            )
        );
    endif;
?>
<div class="main-wrapper">
    <section class="c-standard-layout c-order-form">
        <div class="c-breadcrumbs">
            <div class="o-container">
                <?php if(is_ph()):?>
                    <ul class="[ u-df-mb ]">
                        <li><a href="/"><img src="dist/images/<?= $content['images']['home-img']; ?>" alt=""></a></li>
                        <li><a href="/"><?= $content['static']['breadcrumbs-1']; ?></a></li>
                    </ul>
                    <button class="o-button ic-front o-button-white" data-tigger-back="promos-layout">
                        <i class="ic-back-arrow"></i>
                        <span><?= $content['buttons']['back-to-home']; ?></span>
                    </button>
                <?php endif;?>

                <?php if(is_max()):?>
                    <ul class="[ u-df-mb ]">
                        <li><a href="/"><img src="dist/images/<?= $content['images']['home-img']; ?>" alt=""></a></li>
                        <li><a href="/"><?= $content['static']['breadcrumbs-1']; ?></a></li>
                    </ul>

                    <a href="/">
                        <i class="ic-max-arrow-left"></i>
                        <span><?= $content['buttons']['back-to-home']; ?></span>
                    </a>
                <?php endif;?>
            </div>
        </div>
        <div class="o-container">
            <div class="c-standard-layout-content">
                <div class="c-standard-layout-content_display [ u-df-mb u-df-mb-w ]">
                    <h3 class="h3 c-ordernow-title"><?= $content['static']['header-title']; ?></h3>
                    <h5 class="h5"><?= $content['static']['sub-header-title']; ?></h5>
                    <div class="o-divider"></div>
                    <form action="" validation="true" data-form-catcher="orderTrackerForm">
                        <div class="o-form-group">
                            <label for=""><?= $content['static']['reference-label']; ?></label>
                            <div class="o-form-group_standard">
                                <input type="text" name="code" class="o-form-group_input <?php if(is_max()):?>js-referenceNo<?php endif;?>" placeholder="<?= $content['static']['reference-placeholder']; ?>" data-listen="input" autocomplete="off" data-required-validate="true">
                                <?php if(is_max()):?>
                                    <div class="order-reference__error js-referenceerror">
                                        <?= $content['static']['reference-error-msg']; ?>
                                    </div>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="o-form-group recaptcha-container">
                            <div class="g-recaptcha" data-sitekey="6LecNZQaAAAAAMv08IYfaDyhWOu-ltZs-yD-VYH7"></div>
                        </div>
                        <button type="submit" class="o-button o-button-lg <?php if(is_max()):?>js-referenceCheck<?php endif;?>">
                            <span><?= $content['buttons']['submit']; ?></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include 'src/includes/footer.php';?>
</div>