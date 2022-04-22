<?php
    if(is_yc()):
    $content = array(
        'buttons' => array(
            'back' => 'Back to',
        ),
        'images' => array(
            'breadcrumbs-img-1' => 'ic_home.svg',
        )
    );
    endif;
    if(is_ph()):
        $content = array(
            'buttons' => array(
                'back' => 'Back to',
            ),
            'images' => array(
                'breadcrumbs-img-1' => 'ph-home-sm.svg',
            )
        );
        endif;
    
    if(is_max()):
    $content = array(
        'buttons' => array(
            'back' => 'Back to',
        ),
        'images' => array(
            'breadcrumbs-img-1' => 'ic_max-home.svg',
        )
    );
    endif;

?>

<section class="c-breadcrumbs">
    <div class="o-container">
        <ul class="[ u-df-mb ]">
            <li><a href="/"><img src="<?= IMG.$content['images']['breadcrumbs-img-1']; ?>" alt=""></a></li>
            <li><a href="/"><?= $breadcrumbs[0] ?></a></li>
            <li><a href="/"><?= $breadcrumbs[1] ?></a></li>
        </ul>
        <button class="o-button ic-front o-button-white" data-tigger-back="promos-layout">
            <i class="ic-back-arrow"></i>
            <span><?= $content['buttons']['back']; ?> <?= $breadcrumbs[0]?></span>
        </button>
    </div>
</section>