<?php
    if(is_ph()):
        $m_content = array(
            'static' => array(
                'address_label' => 'Enter Address',
                'address_placeholder' => 'Address',
            ),
            'buttons' => array(
                'close_btn' => 'CLOSE',
                'save_changes_btn' => 'SAVE CHANGES'
            )
        );
    endif;

    if(is_max()):
        $m_content = array(
            'static' => array(
                'address_label' => 'Confirm Pin Location',
                'address_placeholder' => 'Address',
            ),
            'buttons' => array(
                'close_btn' => 'Close',
                'save_changes_btn' => 'Save Changes'
            )
        );
    endif;
?>
<div class="modal for-map <?= is_max() ? 'modal-max' : null; ?>" data-modal-catcher="map">
    <div class="modal-wrapper">
        <div class="modal-content">
            <?php if(is_max()):?>
                <div class="modal-header">
                    <button class="modal-dismiss" data-dismiss="modal">
                        <i class="ic-close"></i>
                    </button>
                </div>
            <?php endif;?>

            <?php if(is_ph()):?>
                <button class="modal-dismiss [ u-dnc-tb u-dbc-mb ]" data-dismiss="modal">
                    <i class="ic-close"></i>
                </button>
            <?php endif; ?>

            <div class="modal-body [ u-df-mb u-df-mb-fd-c u-df-mb-ai-c ]">
                <form action="">
                    <div class="o-form-group">
                        <label for=""><?= $m_content['static']['address_label']; ?></label>
                        <div class="o-form-group_standard">
                            <input type="text" name="address" class="o-form-group_input" placeholder="<?= $m_content['static']['address_placeholder']; ?>" data-listen="input" autocomplete="off" value="">
                        </div>
                    </div>
                    <div class="o-form-group map-container">
                        <div id="ycMap"></div>
                    </div>
                    
                    <?php if(is_ph()):?>
                        <div class="[ u-df-mb u-df-mb-fd-c u-df-tb-fd-r u-df-mb-w u-df-tb-ai-c u-df-mb-ai-e u-df-tb-jc-fe ]">
                            <button type="button" class="[ u-dnc-mb u-dbc-tb ] o-button o-button-lg o-button-trans o-button-bordered" data-dismiss="modal">
                                <span><?= $m_content['buttons']['close_btn']; ?></span>
                            </button>
                            <button class="o-button o-button-lg">
                                <span><?= $m_content['buttons']['save_changes_btn']; ?></span>
                            </button>
                        </div>
                    <?php endif;?>

                    <?php if(is_max()):?>
                        <div class="[ u-df-mb u-df-mb-fd-r u-df-tb-fd-r u-df-mb-w u-df-tb-ai-c u-df-mb-ai-c u-df-tb-jc-fe ]">
                            <button type="button" class="o-button o-button-lg o-button-trans o-button-bordered o-button-full" data-dismiss="modal">
                                <span><?= $m_content['buttons']['close_btn']; ?></span>
                            </button>
                            <button class="o-button o-button-lg o-button-full">
                                <span><?= $m_content['buttons']['save_changes_btn']; ?></span>
                            </button>
                        </div>
                    <?php endif;?>

                </form>
            </div>
        </div>
    </div>
</div>