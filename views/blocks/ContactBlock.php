<?php
/**
 * View file for block: ContactBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->varValue('adressone');
 * @param $this->varValue('belinkcontact');
 * @param $this->varValue('contactMainheader');
 * @param $this->varValue('emailContact');
 * @param $this->varValue('emailinput');
 * @param $this->varValue('fblinkcontact');
 * @param $this->varValue('footerfirstlinkcontact');
 * @param $this->varValue('footerfourthlinkcontact');
 * @param $this->varValue('footersecondlinkcontact');
 * @param $this->varValue('footerthirdlinkcontact');
 * @param $this->varValue('iglinkcontact');
 * @param $this->varValue('inlinkcontact');
 * @param $this->varValue('messageinput');
 * @param $this->varValue('nameInput');
 * @param $this->varValue('pokJIMiasto');
 * @param $this->varValue('sendbuttontext');
 * @param $this->varValue('ytlinkcontact');
 *
 * @var \luya\cms\base\PhpBlockView $this
 */
?>

<section>
        <div class="container pt-lg-5 mt-lg-5">
            <div class="row mt-xl-5 pt-4">
                <div class="col-12 col-lg-5">
                    <h1 class="main-big-header mb-xl-5 pb-4"><?= $this->varValue('contactMainheader') ?></h1>
                    <h4 class="navigation-text mb-2 mb-xl-5 mb-4 work-time"><?= $this->varValue('emailContact') ?></h4>
                    <h4 class="navigation-text-wlh"><?= $this->varValue('adressone') ?><br><?= $this->varValue('adresstwo') ?></h4>
                    <div class="social-media-icons-wrapper d-flex ml-auto mt-xl-5 mt-4 mb-4 pb-3 pb-lg-0 mb-lg-0 pt-4">
                        <a href="<?= $this->varValue('fblinkcontact') ?>" class="mr-md-5 mr-3" target="_blank">
                            <img src="img/FB-grey.svg" class="icon-fb" alt="facebook-icon">
                        </a>
                        <a href="<?= $this->varValue('belinkcontact') ?>" class="mr-md-5 mr-3">
                            <img src="img/BE-grey.svg" class="icon-be" alt="facebook-icon">
                        </a>
                        <a href="<?= $this->varValue('iglinkcontact') ?>" target="_blank" class="mr-md-5 mr-3">
                            <img src="img/IG-grey.svg" class="icon-ig" alt="facebook-icon">
                        </a>
                        <a href="<?= $this->varValue('inlinkcontact') ?>" class="mr-md-5 mr-3" target="_blank">
                            <img src="img/IN-grey.svg" class="icon-in" alt="facebook-icon">
                        </a>
                        <a href="<?= $this->varValue('ytlinkcontact') ?>" target="_blank" class="mr-md-5 mr-3">
                            <img src="img/YT-grey.svg" class="icon-yt" alt="facebook-icon">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <form class="mb-lg-5 pb-lg-4">
                        <div class="form-group pt-2 mt-1">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="<?= $this->varValue('nameInput') ?>">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="<?= $this->varValue('emailinput') ?>">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                placeholder="<?= $this->varValue('messageinput') ?>" rows="5"></textarea>
                        </div>
                    </form>
                    <div class="send-button-wrapper d-flex align-items-center justify-content-end">
                        <div class="transition-wrapper d-flex align-items-center">
                            <a href="" class="d-flex align-items-center navigation-text send-arrow-pulse pr-2 pr-lg-4"><?= $this->varValue('sendbuttontext') ?></a>
                        <img
                                src="img/strzalka right.svg" class="arrow-icon-send" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container d-block d-lg-none">
            <hr class="footer-line-mobile">
        </div>
        <div class="container mt-lg-5 pt-lg-5 mb-4 mb-lg-0">
            <div class="row">
                <div class="col-12 d-block d-lg-none">
                    <div class="d-flex">
                        <a href="" class="navbar-brand align-items-center d-none d-lg-flex"><img src="img/logo.svg"
                                class="mr-4 img-fluid" alt=""> ARCHITECTURAL VISUALIZATION</a>
                        <div class="ml-lg-auto footer-nav-wrapper">
                            <ul
                                class="footer-nav d-flex align-items-center justify-content-between justify-content-lg-right">
                                <li class="nav-item text-center text-lg-left">
                                    <a class="nav-link footer-link" href="#"><?= $this->varValue('footerfirstlinkcontact') ?></a>
                                </li>
                                <li class="nav-item text-center text-lg-left">
                                    <a class="nav-link footer-link" href="#"><?= $this->varValue('footersecondlinkcontact') ?></a>
                                </li>
                                <li class="nav-item text-center text-lg-left">
                                    <a class="nav-link footer-link" href="#"><?= $this->varValue('footerthirdlinkcontact') ?></a>
                                </li>
                                <li class="nav-item text-center text-lg-left">
                                    <a class="nav-link footer-link" href="#"><?= $this->varValue('footerfourthlinkcontact') ?></a>
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
                        <div class="social-media-icons-wrapper d-flex ml-auto d-lg-none">
                            <a href="<?= $this->varValue('fblinkcontact') ?>" target="_blank">
                                <img src="img/FB-grey.svg" class="icon-fb" alt="facebook-icon">
                            </a>
                            <a href="<?= $this->varValue('belinkcontact') ?>" class="mx-4 mx-md-5" target="_blank">
                                <img src="img/BE-grey.svg" class="icon-be" alt="facebook-icon">
                            </a>
                            <a href="<?= $this->varValue('iglinkcontact') ?>" target="_blank">
                                <img src="img/IG-grey.svg" class="icon-ig" alt="facebook-icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
