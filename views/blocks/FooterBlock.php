<?php
/**
 * View file for block: FooterBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->varValue('fblinkfooter');
 * @param $this->varValue('fblinkfooter');
 * @param $this->varValue('footerSmallText');
 * @param $this->varValue('footerlinkfourth');
 * @param $this->varValue('footerlinkone');
 * @param $this->varValue('footerlinksecond');
 * @param $this->varValue('footerlinkthird');
 * @param $this->varValue('iglinkfooter');
 *
 * @var \luya\cms\base\PhpBlockView $this
 */
?>

<section>
        <div class="container d-block d-lg-none">
            <hr class="footer-line-mobile">
        </div>
        <div class="container mt-lg-5 pt-lg-5 mb-4 mb-lg-0">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex">
                        <a href="" class="navbar-brand align-items-center d-none d-lg-flex"><img src="img/logo.svg"
                                class="mr-4 img-fluid" alt=""> ARCHITECTURAL VISUALIZATION</a>
                        <div class="ml-lg-auto footer-nav-wrapper">
                            <ul
                                class="footer-nav d-flex align-items-center justify-content-between justify-content-lg-right">
                                <li class="nav-item text-center text-lg-left active">
                                    <a class="nav-link footer-link" href="#"><?= $this->varValue('footerlinkone') ?></a>
                                </li>
                                <li class="nav-item text-center text-lg-left">
                                    <a class="nav-link footer-link" href="#"><?= $this->varValue('footerlinksecond') ?></a>
                                </li>
                                <li class="nav-item text-center text-lg-left">
                                    <a class="nav-link footer-link" href="#"><?= $this->varValue('footerlinkthird') ?></a>
                                </li>
                                <li class="nav-item text-center text-lg-left">
                                    <a class="nav-link footer-link" href="#"><?= $this->varValue('footerlinkfourth') ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-none d-lg-block">
            <hr class="footer-line">
        </div>
        <div class="container pb-4">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h5 class="footer-text-small">© <?= $this->varValue('footerSmallText') ?> - <br class="d-block d-sm-none"><?= $this->varValue('footerSmallTextsecond') ?>.<br class="d-block d-sm-block d-md-none"> <?= $this->varValue('footerSmallTextthird') ?>.
                            </h5>
                        </div>
                        <div class="social-media-icons-wrapper d-flex ml-auto">
                            <a href="<?= $this->varValue('fblinkfooter') ?>" target="_blank">
                                <img src="img/FB-grey.svg" class="icon-fb" alt="facebook-icon">
                            </a>
                            <a href="<?= $this->varValue('belinkfooter') ?>" class="mx-4 mx-md-5" target="_blank">
                                <img src="img/BE-grey.svg" class="icon-be" alt="facebook-icon">
                            </a>
                            <a href="<?= $this->varValue('iglinkfooter') ?>" target="_blank">
                                <img src="img/IG-grey.svg" class="icon-ig" alt="facebook-icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
