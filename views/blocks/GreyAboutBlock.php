<?php
/**
 * View file for block: GreyAboutBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->varValue('aboutText');
 *
 * @var \luya\cms\base\PhpBlockView $this
 */
?>


<div class="container grey-about-section">
        <div class="row">
            <div class="col-2 col-sm-3">
                <h4 class="navigation-text grey-about">About:</h4>
            </div>
            <div class="col-9 col-sm-5">
                <h4 class="navigation-text grey-about-desc"><?= $this->varValue('aboutText') ?></h4>
            </div>
        </div>
    </div>