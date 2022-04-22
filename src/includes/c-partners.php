<?php
$content = array(
    'static' => array(
        'title' => 'Proudly part of Max’s Group',
    ),
    'buttons' => array(
    ),
    'images' => array(
    ),
    'link' => array(
    ),
    'dynamic' => array(
    ),
);

    if(is_yc()) :
        $partners = [
            [],
            [
                'name' => 'Max’s Restaurant',
                'img_link' => IMG.'partners/partner-logo-1.jpg',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [],
            [
                'name' => 'Kripy Kreme',
                'img_link' => IMG.'partners/partner-logo-2.jpg',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [],
            [
                'name' => 'Yellow Cab',
                'img_link' => IMG.'partners/partner-logo-3.jpg',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [],
            [
                'name' => 'Pancake House',
                'img_link' => IMG.'partners/partner-logo-4.jpg',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [],
            [
                'name' => 'Teriyaki Boy',
                'img_link' => IMG.'partners/partner-logo-5.jpg',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [],
            [
                'name' => 'Sizzling Steak',
                'img_link' => IMG.'partners/partner-logo-6.jpg',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [],
            [
                'name' => 'Dencios',
                'img_link' => IMG.'partners/partner-logo-7.jpg',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [],
            [
                'name' => 'Jamba Juice',
                'img_link' => IMG.'partners/partner-logo-8.jpg',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
        ];
    endif;

    if(is_ph()) :
    $content = array(
        'static' => array(
            'title' => 'Max’s <br> Group Inc',
        ),
        'buttons' => array(
        ),
        'images' => array(
        ),
        'link' => array(
        ),
        'dynamic' => array(
        ),
    );
    
    $partners = [
            [
                'name' => 'Max’s Restaurant',
                'img_link' => IMG.'max/logo-max.png',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [
                'name' => 'Kripy Kreme',
                'img_link' => IMG.'max/logo-kk.png',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [
                'name' => 'Yellow Cab',
                'img_link' => IMG.'max/logo-yc.png',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [
                'name' => 'Pancake House',
                'img_link' => IMG.'max/logo-ph.png',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [
                'name' => 'Teriyaki Boy',
                'img_link' => IMG.'max/logo-tb.png',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [
                'name' => 'Sizzling Steak',
                'img_link' => IMG.'max/logo-ss.png',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [
                'name' => 'Dencios',
                'img_link' => IMG.'max/logo-dencios.png',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
            [
                'name' => 'Jamba Juice',
                'img_link' => IMG.'max/logo-jj.png',
                'url_link' => 'https://ycpwa.yellowcabpizza.com/',
            ],
        ];
    endif;

    if(is_max()) :
        $partners = [
                [
                    'name' => 'Max’s Restaurant',
                    'img_link' => IMG.'max/logo-max.png',
                    'url_link' => 'https://ycpwa.yellowcabpizza.com/',
                ],
                [
                    'name' => 'Kripy Kreme',
                    'img_link' => IMG.'max/logo-kk.png',
                    'url_link' => 'https://ycpwa.yellowcabpizza.com/',
                ],
                [
                    'name' => 'Yellow Cab',
                    'img_link' => IMG.'max/logo-yc.png',
                    'url_link' => 'https://ycpwa.yellowcabpizza.com/',
                ],
                [
                    'name' => 'Pancake House',
                    'img_link' => IMG.'max/logo-ph.png',
                    'url_link' => 'https://ycpwa.yellowcabpizza.com/',
                ],
                [
                    'name' => 'Teriyaki Boy',
                    'img_link' => IMG.'max/logo-tb.png',
                    'url_link' => 'https://ycpwa.yellowcabpizza.com/',
                ],
                [
                    'name' => 'Sizzling Steak',
                    'img_link' => IMG.'max/logo-ss.png',
                    'url_link' => 'https://ycpwa.yellowcabpizza.com/',
                ],
                [
                    'name' => 'Dencios',
                    'img_link' => IMG.'max/logo-dencios.png',
                    'url_link' => 'https://ycpwa.yellowcabpizza.com/',
                ],
                [
                    'name' => 'Jamba Juice',
                    'img_link' => IMG.'max/logo-jj.png',
                    'url_link' => 'https://ycpwa.yellowcabpizza.com/',
                ],
            ];
        endif;
?>

<section class="c-partners">
<?php if(is_ph()): ?><h2 class="header"><?= $content['static']['title']; ?></h2><?php endif;?>
    <div class="o-container">
        <?php if(is_yc()): ?><h3 class="o-header-title-slant"><?= $content['static']['title']; ?></h3><?php endif;?>
        <?php if(is_max()): ?><h2 class="header"><?= $content['static']['title']; ?></h2><?php endif;?>
    </div>
    <div class="c-partners-wrapper">
        <div class="o-container">
            
            <?php if(is_yc()): ?>
                <div class="c-partners-club top-asset [ u-df-mb-w ]" data-club-holder="asset">
                    <?php for($i = 0; $i < 8; $i++): ?>
                        <div class="c-partners-club_panel">
                            <div class="c-partners-club_panel--card"></div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endif;?>

            <div class="c-partners-club [ u-df-mb-w ]" data-club-holder="main">
                <?php for($i = 0; $i <= 8; $i++): ?>
                    <?php if($i == 8) continue?>
                    <div class="c-partners-club_panel">
                        <?php if(isset($partners[$i]['img_link'])): ?>
                        <a href="<?= $partners[$i]['url_link'] ?>" class="c-partners-club_panel--card" target="_blank">
                            <figure>
                                <img src="<?= $partners[$i]['img_link'] ?>" alt="">
                            </figure>
                        </a>
                        <?php endif;?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>