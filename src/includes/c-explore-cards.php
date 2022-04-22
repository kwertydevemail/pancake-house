<?php
    $content['static'][] = ['price-label' => 'starts at P'];
    $content['buttons'][] = ['add-cart' => 'ADD TO CART'];
?>
<div id="item-card" class="c-explore-cards [ u-df-mb u-df-mb-w ]" data-catcher="product-list">
    <?php foreach($dataItem as $key => $value): ?>
    <a href="order-select.php?type=<?= $dataType ?>&name=<?= $value['name'] ?>" class="c-explore-cards-card pointer-hand"
        data-catcher-search-product="<?= $value['name'] ?>">
        <div class="c-explore-cards-card_item [ u-df-mb u-df-mb-fd-c ]">
            <figure>
                <img src="dist/images/product/<?= $value['img_link'] ?>" alt="">
            </figure>
            <div class="c-explore-cards-card_item--detail [ u-df-mb u-df-mb-fd-c u-df-mb-ai-<?php if(is_ph()):?>c<?php endif;?><?php if(is_max()):?>s<?php endif;?> ]">
                <h6 class="h6"><?= $value['name'] ?></h6>
                <span class="<?php if(isset($value['price_strike'])):?>has_price_strike<?php endif;?>">
                    <?= $content['static']['price-label']; ?><?= $value['price'] ?>
                    <?php if(isset($value['price_strike'])): ?>
                        <pre class="price_strike"><?= $content['static']['price-label']; ?><?= $value['price_strike'] ?></pre>
                    <?php endif;?>
                </span>

                <button class="o-button pointer-hand">
                    <span><?= $content['buttons']['add-cart']; ?></span>
                    <?php if(is_ph()):?><i class="ic-cart"></i><?php endif;?>
                    <?php if(is_max()):?><i class="ic-max-cart"></i><?php endif;?>
                </button>
            </div>
        </div>
    </a>
    <?php endforeach; ?>
</div>