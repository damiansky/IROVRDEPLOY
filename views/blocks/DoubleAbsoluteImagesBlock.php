<?php
/**
 * View file for block: DoubleAbsoluteImagesBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->extraValue('leftImage');
 * @param $this->extraValue('rightImage');
 * @param $this->varValue('leftImage');
 * @param $this->varValue('rightImage');
 *
 * @var \luya\cms\base\PhpBlockView $this
 */
?>

<style>
    .services-mobile-picture-abs{
        background: url('<?= str_replace("\\", "/", $this->extraValue('imageLeft')['source']) ?>');
    }

    .service-image-one-mobile{
        background: url('<?= str_replace("\\", "/", $this->extraValue('imageRight')['source']) ?>');
    }
</style>

<section>
        <div class="container-fluid right-out-wrapper-double wrapper-double-side">
            <div class="row">
                <div class="services-mobile-picture-abs">
                    
                </div>
                <div class="service-image-right service-image-one-mobile">
                   
                </div>

                
                    <div class="services-mobile-picture-abs animation-abs animation-abs-double">
                        
                    </div>
                
                <div class="service-image-right service-image-one-mobile">
                   
                </div>
            </div>
        </div>
    </section>
