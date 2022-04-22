<?php

    if(is_max()) {
        $content = array(
            'static' => array(
                'header-top-1' => 'FREE PIZZA?',
                'header-top-2' => 'SIGN UP',
                'header-top-3' => 'for emails and get a free 9” Pepperoni NY-Style Thin Crust Pizza!',
                'term' => 'Terms and conditions apply.',
                'banner-title-1' => 'Sarap to the Bones Fried Chicken, right at your doorstep.',
                'banner-title-2' => 'Come together with Max’s delivery! Choose your transaction below.',
                'banner-panel-title' => 'New York’s Finest',
                'banner-panel-description' => 'Our bestselling Edge-to-Edge Pizza packed with 15 kinds of meat and vegetables',
                'banner-panel-price-title' => 'STARTS AT',
                'banner-panel-price' => 'P735',
            ),
            'buttons' => array(
            ),
            'images' => array(
                'banner-desktop' => 'max-Chicken-Lifestyle-1.png',
                'banner-mobile' => 'max-fried-chicken-mb.png',

                'banner-desktop-1' => 'max-crispy-pata-2.png',
                'banner-mobile-1' => 'max-crispy-pata-mb.png',

                'order-tracker' => 'src/images/max-order-tracker.png'
            ),
            'link' => array(
                'sign-up' => 'https://customer.maxsgroupinc.com/subscription/home/dkk4os'
            ),
            'dynamic' => array(
            ),
        );
        $hero_cards = [
            [
                'title' => 'Delivery',
                'sub-title' => 'Right to your doorstep',
                'image-url' => 'max-hero-card-1.png',
                'session' => 'For Delivery',
                'icon' => 'src/images/max-icon-delivery.svg',
            ],
            [
                'title' => 'Pick-Up',
                'sub-title' => 'Go to your nearest store',
                'image-url' => 'max-hero-card-2.png',
                'session' => 'For Pick-up',
                'icon' => 'src/images/max-icon-location.svg',
            ],
            [
                'title' => 'E-Party',
                'sub-title' => 'Virtual parties in one go',
                'image-url' => 'max-hero-card-3.png',
                'session' => 'e-party',
                'icon' => 'src/images/max-icon-party.svg',
            ],
        ];
    } elseif (is_ph()) {
        $content = array(
            'static' => array(
                'banner-title-1' => 'Home of the golden pancakes',
                'banner-title-2' => 'The homey goodness of plain golden pancakes served with whipped butter.',
                'banner-panel-title-1' => 'Classic',
                'banner-panel-title-2' => 'Pancake',
                'banner-panel-description' => 'Sweet or savory, snacky for you to sit-down-and-stay-awhile',
                'banner-panel-price-title' => 'starts at',
                'banner-panel-price' => '287',
            ),
            'buttons' => array(
            ),
            'images' => array(
                'banner-desktop' => 'ph-hero.png',
                'banner-mobile' => 'ph-hero-mb.png'
            ),
            'link' => array(
                
            ),
            'dynamic' => array(
            ),
        );
        $hero_cards = [
            [
                'title' => 'Delivery',
                'image-url' => 'ph-deliver.png',
                'session' => 'For Delivery',
                'cta' => 'Order Now',
            ],
            [
                'title' => 'Pick-Up',
                'image-url' => 'ph-pickup.png',
                'session' => 'For Pick-up',
                'cta' => 'Order Now',
            ],
            [
                'title' => 'E-Party',
                'image-url' => 'ph-e-party.png',
                'session' => 'e-party',
                'cta' => 'Order Now',
            ],
        ];
    } else {
        $content = array(
            'static' => array(
                
                'banner-title-1' => 'Edge-To-Edge Pizzas',
                'banner-title-2' => 'Anytime, Anywhere',
                'banner-panel-title' => 'New York’s Finest',
                'banner-panel-description' => 'Our bestselling Edge-to-Edge Pizza packed with 15 kinds of meat and vegetables',
                'banner-panel-price-title' => 'STARTS AT',
                'banner-panel-price' => 'P735',
            ),
            'buttons' => array(
            ),
            'images' => array(
                'banner-desktop' => 'pizza-hero-1.png',
                'banner-mobile' => 'pizza-hero-1-mb.png'
            ),
            'dynamic' => array(
            ),
        );
        $hero_cards = [
            [
                'title' => 'Delivery',
                'sub-title' => 'Right to your doorstep',
                'image-url' => 'hero-card-1.jpg',
                'session' => 'For Delivery',
            ],
            [
                'title' => 'Pick-Up',
                'sub-title' => 'Go to your nearest store',
                'image-url' => 'hero-card-2.jpg',
                'session' => 'For Pick-up',
            ],
            [
                'title' => 'E-Party',
                'sub-title' => 'Virtual parties in one go',
                'image-url' => 'hero-card-3.jpg',
                'session' => 'e-party',
            ],
        ];
    }    
?>

<?php if(is_yc()): ?>
    <div class="c-top-header">
        <div class="o-container">
            <div class="c-top-header__content">
                <div><span class="font-up"><?= $content['static']['header-top-1']; ?></span> <a class="sign-up" target="_blank" href=<?= $content['link']['sign-up']; ?>><?= $content['static']['header-top-2']; ?></a> <?= $content['static']['header-top-3']; ?></div>
                <a class="terms-up" href="#"><?= $content['static']['term']; ?></a>
            </div>
        </div>
    </div>
<?php endif;?>
<section class="c-hero-banner">
    <?php if(is_ph()): ?>
        <h2>Home of the Golden Pancakes</h2>
    <?php endif;?>
    <a href="" class="order-tracker" title="Order Tracker"></a>

    <div class="o-container">
        <?php if(is_yc()): ?>
            <figure>
                <!-- for desktop -->
                <img src="src/images/hero-banner/<?= $content['images']['banner-desktop'] ?>" alt="pizza hero">
                <!-- for mobile -->
                <img src="src/images/hero-banner/<?= $content['images']['banner-mobile'] ?>" alt="pizza hero">
            </figure>
        <?php endif;?>

        <div class="c-hero-banner-content [ <?php if(is_max() || is_yc()): ?> u-df-mb <?php endif;?> <?php if(is_yc()): ?> u-df-tb-ai-e <?php endif;?> ]">
            
            <?php if(is_yc()): ?>
                <h1 class="h1">
                    <span><?= $content['static']['banner-title-1']; ?><i class="ic-registered"></i><?= $content['static']['banner-title-2']; ?></span>
                </h1>
            <?php endif;?>

            <?php if(is_max()): ?>
                <div>
                    <h1 class="h1">
                        <span><?= $content['static']['banner-title-1']; ?></span>
                    </h1>
                    <p class="p">
                        <span><?= $content['static']['banner-title-2']; ?></span>
                    </p>
                </div>
            <?php endif;?>

            <?php if(is_ph()): ?>
                <div class="c-hero-banner-content_column">
                    
                    <div class="left">
                        <h1>
                            <span><?= $content['static']['banner-title-1']; ?></span>
                        </h1>
                        <p>
                            <span><?= $content['static']['banner-title-2']; ?></span>
                        </p>
                    </div>
                    <div class="c-hero-banner-panel">
                        <div class="right-content">
                            <img class="hero-desktop" src="dist/images/hero-banner/<?= $content['images']['banner-desktop']; ?>" alt="">
                            <img class="hero-mobile" src="dist/images/hero-banner/<?= $content['images']['banner-mobile']; ?>" alt="">
                            
                            <div class="c-hero-banner-panel_box">
                                <h5 class="h5"><?= $content['static']['banner-panel-title-1']; ?></h5>
                                <h5 class="h5"><?= $content['static']['banner-panel-title-2']; ?></h5>
                                <p><?= $content['static']['banner-panel-description']; ?></p>
                                <div class="price">
                                    <span><?= $content['static']['banner-panel-price-title']; ?></span>
                                    <h3 class="h3"><?= $content['static']['banner-panel-price']; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            <?php endif;?>

            <div class="c-hero-banner-content_details <?php if(is_ph()): echo '[ u-df-mb u-df-mb-ai-e ]'; endif; ?> ">

                <?php if(is_yc()): ?>
                    <div class="c-hero-banner-panel">
                        <h5 class="h5"><?= $content['static']['banner-panel-title']; ?><i class="ic-registered-sm"></i></h5>
                        <p><?= $content['static']['banner-panel-description']; ?></p>
                        <div class="c-hero-banner-panel_price [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c u-df-mb-jc-c ] ">
                            <span><?= $content['static']['banner-panel-price-title']; ?></span>
                            <h3 class="h3"><?= $content['static']['banner-panel-price']; ?></h3>
                        </div>
                    </div> 
                <?php endif;?>

                <h2 class="h2"><?= $content['static']['banner-title-1']; ?></h2>
                <span class="span"><?= $content['static']['banner-title-2']; ?></span>

                <div class="c-hero-banner-card [ <?php if(is_ph()):?> u-df-mb u-df-mb-fd-c u-df-tb-fd-r <?php endif; ?> ]">

                <?php if(is_ph()): ?>
                    <?php foreach($hero_cards as $key => $value): ?>
                        <div class="c-hero-banner-card_item">
                            <img src="dist/images/hero-banner/<?= $value['image-url'] ?>" alt="">
                            <h3><?= $value['title'] ?></h3>
                            <a href="index.php?purchaseType= <?= $value['session'] ?>" type="submit" class="o-button top-left-radius">
                                <span><?= $value['cta'] ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif;?>

                <?php if(is_max()): ?>
                    <?php foreach($hero_cards as $key => $value): ?>
                        <a href="index.php?purchaseType=<?= $value['session'] ?>" class="c-hero-banner-card_item pointer-hand">
                            <figure>
                                <img src="dist/images/hero-banner/<?= $value['image-url'] ?>" alt="">
                                <figcaption>
                                    <h5 class="h5">
                                        <?= $value['title'] ?>
                                        <img src="<?= $value['icon'] ?>" alt="">
                                    </h5>
                                    <p><?= $value['sub-title'] ?></p>
                                </figcaption>
                            </figure>
                        </a>
                    <?php endforeach; ?>
                <?php endif;?>

                </div>
            </div>
        </div>
    </div>
</section>