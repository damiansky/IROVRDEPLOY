<?php
/**
 * View file for block: BigPhotoCenteredBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->extraValue('bigPhotoCentered');
 * @param $this->varValue('bigPhotoCentered');
 *
 * @var \luya\cms\base\PhpBlockView $this
 */
?>

<div class="container big-photo-full-width-wrapper">
        <div class="row">
            <div class="col-12 text-center">
                <img src="<?= $this->extraValue('bigPhotoCentered') ? $this->extraValue('bigPhotoCentered')->getSource() : null ?>" class="big-photo-full-width img-fluid" alt="">
            </div>
        </div>
    </div>