<?php
/**
 * View file for block: CaseHeaderWithNavbarBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->extraValue('background');
 * @param $this->varValue('background');
 * @param $this->varValue('projectLocation');
 * @param $this->varValue('projectName');
 * @param $this->varValue('projectServices');
 * @param $this->varValue('projectServices2');
 * @param $this->varValue('projectYear');
 *
 * @var \luya\cms\base\PhpBlockView $this
 */
?>
<style>
    .hero-image-case{
        background: url('<?= str_replace("\\", "/", $this->extraValue('background')['source']) ?>');
    }
</style>

<div class="container-fluid hero-image-case">
        <nav class="navbar navbar-expand-lg py-4 nav-white">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center text-uppercase mr-auto" href="#"><img src="img/IRO.svg"
                        class="mr-2 mr-md-4" alt=""> <span class="d-none d-sm-inline-block"></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar" style="margin-bottom: 0;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item text-center text-lg-left active">
                            <a class="nav-link active" href="#">work</a>
                        </li>
                        <li class="nav-item text-center text-lg-left">
                            <a class="nav-link" href="#">services</a>
                        </li>
                        <li class="nav-item text-center text-lg-left">
                            <a class="nav-link" href="#">about</a>
                        </li>
                        <li class="nav-item text-center text-lg-left">
                            <a class="nav-link" href="#">contact</a>
                        </li>
                    </ul>
                    <div
                        class="d-flex align-items-center language-switch justify-content-center justicy-content-lg-left ">
                        <h5 class="mb-0 language-styles">pl</h5>
                        <span class="slash-switcher px-2 mb-0">/</span>
                        <h5 class="mb-0 language-styles active">en</h5>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container" style="height: 100%; margin-top: -50px;">
            <div class="row align-items-center" style="height: 100%;">
                <div class="col-3 mt-2 d-none d-sm-block">
                    <h4 class="navigation-text case-main-information text-white">project:</h4>
                    <h4 class="navigation-text case-main-information text-white">year:</h4>
                    <h4 class="navigation-text case-main-information text-white">location:</h4>
                    <h4 class="navigation-text case-main-information text-white">services:</h4>
                    <h4 class="navigation-text case-main-information text-white">services:</h4>
                </div>
                <div class="col-12 col-sm-9">
                    <h5 class="medium-header case-main-information text-white case-medium"><?= $this->varValue('projectName') ?></h5>
                    <h5 class="medium-header case-main-information text-white case-medium"><?= $this->varValue('projectYear') ?></h5>
                    <h5 class="medium-header case-main-information text-white case-medium"><?= $this->varValue('projectLocation') ?></h5>
                    <h5 class="medium-header case-main-information text-white case-medium"><?= $this->varValue('projectServices') ?></h5>
                    <h5 class="medium-header case-main-information text-white case-medium"><?= $this->varValue('projectServices2') ?></h5>
                </div>
            </div>
        </div>
    </div>
