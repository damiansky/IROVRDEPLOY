<?php
/**
 * View file for block: AboutBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->varValue('aboutmainHeader');
 * @param $this->varValue('abouttext');
 * @param $this->varValue('listPoints');
 * @param $this->varValue('wefocusHeader');
 *
 * @var \luya\cms\base\PhpBlockView $this
 */
?>

<section>
        <div class="container-fluid right-out-wrapper about-out-wrapper">
            <div class="row">
                <div class="services-mobile-picture-abs about-image-abs">
                </div>
                <div class="service-image-right about-image about-image-mobile d-block d-lg-none"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="services-left-wrapper services-left-wrapper-about d-flex flex-column">
                                <h5 class="medium-header"><?= $this->varValue('aboutmainHeader') ?></h5>
                                <h4 class="navigation-text-wlh mb-3 mb-xl-5 mt-3 mt-xl-5 "><?= $this->varValue('abouttext') ?></h4>
                                <h4 class="navigation-text-wlh mb-3 mb-xl-5"><?= $this->varValue('wefocusHeader') ?>:</h4>
                                <ul class="about-ul mb-0">
                                <?php foreach($this->varValue('listPoints') as $item): ?>
                                    <li>
                                        <h4 class="navigation-text">- <?= $item['value'] ?></h4>
                                    </li>
                                <?php endforeach;?>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-5 offset-1 right-ins-wrapper">
                            <div class="service-image-right about-image"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container pt-lg-5 partners-outer-wrapper">
            <div class="row pb-3 pb-lg-5 pt-lg-5">
                <div class="col-12 my-3 my-lg-0">
                    <h5 class="medium-header">Partners:</h5>
                </div>
                <div class="col-12 pb-5 pt-5 mt-5 d-none d-lg-flex align-items-center justify-content-between">
                    <div class="col-1">
                        <img src="img/logo-partner1.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-1">
                        <img src="img/logop5.jpg" class="img-fluid two" alt="">
                    </div>
                    <div class="col-1">
                        <img src="img/logop7.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-1">
                        <img src="img/logop14.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-1">
                        <img src="img/logop9.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-1">
                        <img src="img/logop10.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-1">
                        <img src="img/logop13.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 pb-5 pt-4 d-none d-lg-flex align-items-center justify-content-between">
                    <div class="col-1">
                        <img src="img/logop11.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-1">
                        <img src="img/logop6.jpg" class="img-fluid two" alt="">
                    </div>
                    <div class="col-1">
                        <img src="img/logop3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-1">
                        <img src="img/logop4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-1">
                        <img src="img/logop8.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-1">
                        <img src="img/logop12.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-1">
                        <img src="img/logop2.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="container d-block d-lg-none">
                    <div class="sponsors-carousel d-flex align-items-center">
                        <img src="img/logop2.jpg" class="img-fluid px-3" alt="">
                        <img src="img/logop3.jpg" class="img-fluid px-3" alt="">
                        <img src="img/logop4.jpg" class="img-fluid px-3" alt="">
                        <img src="img/logop5.jpg" class="img-fluid px-3" alt="">
                        <img src="img/logop6.jpg" class="img-fluid px-3" alt="">
                        <img src="img/logop7.jpg" class="img-fluid px-3" alt="">
                        <img src="img/logop8.jpg" class="img-fluid px-3" alt="">
                        <img src="img/logop9.jpg" class="img-fluid px-3" alt="">
                        <img src="img/logop10.jpg" class="img-fluid px-3" alt="">
                        <img src="img/logop11.jpg" class="img-fluid px-3" alt="">
                        <img src="img/logop12.jpg" class="img-fluid px-3" alt="">
                        <img src="img/logop13.jpg" class="img-fluid px-3" alt="">
                        <img src="img/logop14.jpg" class="img-fluid px-3" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
