<?php
/**
 * View file for block: HeroBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->varValue('heroMainText');
 * @param $this->varValue('heroMainTextSecond');
 *
 * @var \luya\cms\base\PhpBlockView $this
 */
?>

<section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-header-wrapper d-flex align-items-center">
                        <h1 class="main-big-header mb-0"><?= $this->varValue('heroMainText') ?> <br>
                        <?= $this->varValue('heroMainTextSecond') ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
