<?php
/**
 * View file for block: LeftImageRightBackButtonBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->extraValue('image');
 * @param $this->varValue('image');
 *
 * @var \luya\cms\base\PhpBlockView $this
 */
?>

<style>
    .how-we-do-img{
        background: url('<?= str_replace("\\", "/", $this->extraValue('image')['source']) ?>');
    }

    .service-image-second-mobile{
        background: url('<?= str_replace("\\", "/", $this->extraValue('image')['source']) ?>');
    }
</style>

<section class="left-absolute-right-back-to-portfolio">
        <div class="container-fluid right-out-wrapper">
            <div class="row">
                <div class="services-mobile-picture-abs how-we-do-img">
                </div>
                <div class="service-image-right service-image-second-mobile"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-5 right-ins-wrapper animation-nd">
                        </div>
                        <div class="col-12 offset-0 col-md-5 offset-md-1">
                            <div class="services-left-wrapper d-flex flex-column">
                                <div
                                    class="transition-wrapper d-flex align-items-center mt-auto justify-content-center">
                                    <a href="" class="d-flex align-items-center ">
                                        <h4 class=" navigation-text send-arrow-pulse mb-0 pr-4">Back to portfolio</h4>
                                        <img src="img/strzalka right.svg" class="arrow-icon-send" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 offset-1 right-ins-wrapper">
                            <div class="service-image-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
