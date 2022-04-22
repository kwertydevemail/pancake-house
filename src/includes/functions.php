<?php
$orderPage = strpos($_SERVER['REQUEST_URI'], 'order-') !== false;

define('IMG', 'dist/images/');

$signedIn = false;
if (isset($_GET['status']) && $_GET['status'] == 'signedIn') {
    $signedIn = true;
}

$getRequest = '';
foreach ($_GET as $key => $value) {
    $getRequest .= '&'.$key.'='.$value;
}

$brand = 'ph';
if(isset($_SESSION['brand'])):
    $brand = $_SESSION['brand'];
endif;
if(isset($_GET['brand'])):
    $brand = $_GET['brand'];
    $_SESSION['brand'] = $brand;
endif;

function is_max(){
    global $brand;
    if($brand == 'max' || $brand == 'maxs'): 
        return true;
    else:
        return false;
    endif;
}
function is_yc(){
    global $brand;
    if($brand == 'yc' || $brand == 'yellowcab'): 
        return true;
    else:
        return false;
    endif;
}
function is_kk(){
    global $brand;
    if($brand == 'kk' || $brand == 'krispykreme'): 
        return true;
    else:
        return false;
    endif;
}
function is_ph(){
    global $brand;
    if($brand == 'ph' || $brand == 'pancakehouse'): 
        return true;
    else:
        return false;
    endif;
}
function fields($type, $data, $number, $label, $desc, $placeholder){
    switch (true) {
        case ($type == 1):
        ?>
        <div class="o-form-group">
            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]"><?= $number; ?></span>
            <label for=""><?= $label; ?></label>
            <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                <input type="hidden" name="size" class="o-form-group_input" placeholder="<?= $content['static']['process_1_placeholder']; ?>" autocomplete="off" data-required-validate="true" readonly>
                <?php foreach($data as $k => $v): ?>
                <div class="o-form-panels_card">
                    <div class="o-form-panels_card--detail <?= $v['status'] ?>" data-trigger-panel="size" data-panel-value="<?= $v['name'] ?>" data-panel-price="<?= $v['price'] ?>">
                        <div class="o-form-panels_card--detail__title [ u-df-mb u-df-mb-jc-sb ]">
                            <h3 class="h3"><?= $v['name'] ?></h3>
                            <span><?= $v['inches'] ?></span>
                        </div>
                        <div class="o-form-panels_card--detail__body [ u-df-mb u-df-mb-fd-c ]">
                            <?php if($v['price'] != 0): ?><h5 class="h5">P <?= number_format($v['price'], 2) ?></h5><?php endif; ?>
                            <?php if($v['goodFor'] != ''): ?><p class="italize"><?= $v['goodFor'] ?></p><?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        break;
        case ($type == 2):
        ?>
        <div class="o-form-group">
            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]"><?= $number; ?></span>
            <label for=""><?= $label; ?></label>
            <div class="o-form-panels [ u-df-mb u-df-mb-w ]">
                <input type="hidden" name="chopped" class="o-form-group_input" placeholder="<?= $content['static']['process_2_placeholder']; ?>" autocomplete="off" data-required-validate="true" readonly>
                <?php foreach($data as $k => $v): ?>
                <div class="o-form-panels_card">
                    <div class="o-form-panels_card--detail <?php if($v['price'] != ''): ?>hasprice<?php endif; ?> <?= $v['status'] ?>" data-trigger-panel="chopped" data-panel-value="<?= $v['name'] ?>" data-panel-price="<?= $v['price'] ?>">
                        <div class="o-form-panels_card--detail__title [ u-df-mb u-df-mb-jc-sb ]">
                            <h3 class="h3 <?php if($v['price'] != ''): ?>hasprice<?php endif; ?>"><?= $v['name'] ?></h3>
                            <span><?= $v['inches'] ?></span>
                        </div>
                        <div class="o-form-panels_card--detail__body [ u-df-mb u-df-mb-fd-c ]">
                            <?php if($v['price'] != ''): ?><h5 class="h5">P <?= number_format($v['price'], 2) ?></h5><?php endif; ?>
                            <?php if($v['goodFor'] != ''): ?><p class="italize"><?= $v['goodFor'] ?></p><?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        break;
        case ($type == 3):
        ?>
        <div class="o-form-group o-form-dropdown">
            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]"><?= $number; ?></span>
            <label for=""><?= $label; ?></label>
            <h5 class="h5"><?= $desc; ?></h5>
            <div class="o-form-dropdown_input">
                <input type="text" name="addons" class="o-form-group_input" placeholder="<?= $placeholder; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                    <?php foreach($data as $k => $v): ?>
                    <li class="[ u-df-mb ]" data-select-value="<?= $v['name'] ?>" data-price-value="<?= $v['price'] ?>">
                        <figure>
                            <img src="<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                        </figure>
                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                            <h5 class="h5"><?= $v['name'] ?></h5>
                            <?php if(isset($v['inches']) || isset($v['size'])): ?>
                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                <span><?= $v['inches'] ?></span>
                                <span><?= $v['size'] ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php
        break;
        case ($type == 4):
        ?>
        <div class="o-form-group last-padding">
            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]"><?= $number; ?></span>
            <label for=""><?= $label; ?></label>
            <div class="o-form-operator [ u-df-mb ]">
                <button type="button" class="o-button ic-only" data-trigger-operator="sub">
                    <i class="ic-minus"></i>
                </button>
                <input type="text" name="orderCount" class="o-form-group_input" value="1" data-listen="input" autocomplete="off"  onkeypress="return isNumberKey(event)">
                <button type="button" class="o-button ic-only" data-trigger-operator="add">
                    <i class="ic-plus"></i>
                </button>
            </div>
        </div>
        <?php
        break;
        case ($type == 5):
        ?>
        <div class="o-form-group o-form-dropdown">
            <span class="o-form-timeline_count [ u-df-mb u-df-mb-ai-c u-df-mb-jc-c ]"><?= $number; ?></span>
            <label for=""><?= $label; ?></label>
            <h5 class="h5"><?= (is_array($desc))? $desc[0] : $desc; ?><span>*</span></h5>
            <div class="o-form-dropdown_input">
                <input type="text" name="side1" class="o-form-group_input" placeholder="<?= $placeholder; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                    <?php foreach($data as $k => $v): ?>
                    <li class="[ u-df-mb ]" data-select-value="<?= $v['name'] ?>" data-price-value="<?= $v['price'] ?>">
                        <figure>
                            <img src="<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                        </figure>
                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                            <h5 class="h5"><?= $v['name'] ?></h5>
                            <?php if(isset($v['inches']) || isset($v['size'])): ?>
                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                <span><?= $v['inches'] ?></span>
                                <span><?= $v['size'] ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <h5 class="h5"><?= (is_array($desc))? $desc[1] : $desc; ?><span>*</span></h5>
            <div class="o-form-dropdown_input">
                <input type="text" name="side2" class="o-form-group_input" placeholder="<?= $placeholder; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                    <?php foreach($data as $k => $v): ?>
                    <li class="[ u-df-mb ]" data-select-value="<?= $v['name'] ?>" data-price-value="<?= $v['price'] ?>">
                        <figure>
                            <img src="<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                        </figure>
                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                            <h5 class="h5"><?= $v['name'] ?></h5>
                            <?php if(isset($v['inches']) || isset($v['size'])): ?>
                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                <span><?= $v['inches'] ?></span>
                                <span><?= $v['size'] ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <h5 class="h5"><?= (is_array($desc))? $desc[2] : $desc; ?><span>*</span></h5>
            <div class="o-form-dropdown_input">
                <input type="text" name="side3" class="o-form-group_input" placeholder="<?= $placeholder; ?>" data-listen="input" autocomplete="off" data-required-validate="true" readonly>
                <ul class="[ u-df-mb u-df-mb-fd-c ]">
                    <?php foreach($data as $k => $v): ?>
                    <li class="[ u-df-mb ]" data-select-value="<?= $v['name'] ?>" data-price-value="<?= $v['price'] ?>">
                        <figure>
                            <img src="<?= $v['img_url'] ?>" alt="<?= $v['name'] ?>">
                        </figure>
                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                            <h5 class="h5"><?= $v['name'] ?></h5>
                            <?php if(isset($v['inches']) || isset($v['size'])): ?>
                            <div class="o-form-dropdown_input--item__subdetail [ u-df-mb ]">
                                <span><?= $v['inches'] ?></span>
                                <span><?= $v['size'] ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php
        break;
    }
}
?>