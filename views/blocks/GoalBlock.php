<?php
/**
 * View file for block: GoalBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->varValue('belinkGoals');
 * @param $this->varValue('fblinkGoals');
 * @param $this->varValue('iglinkGoals');
 * @param $this->varValue('latestProject');
 * @param $this->varValue('mainGoal');
 * @param $this->varValue('mainGoalSecond');
 *
 * @var \luya\cms\base\PhpBlockView $this
 */
?>

<section>
        <div class="container goals-container">
            <div class="row">

                <div class="col-12">
                    <h2 class="main-big-header">
                    <?= $this->varValue('mainGoal') ?><br>
                    <?= $this->varValue('mainGoalSecond') ?>.
                    </h2>
                </div>
                <div class="col-12 social-media-goals-wrapper">
                    <div class="d-flex">
                        <div class="latest-projects-wrapper d-flex align-items-center arrow-down-hover" style="position: relative;">
                            <a href=""
                                class="navigation-text latest-project text-center d-flex align-items-center arrow-lh-fix pl-lg-5 ml-lg-2"><img src="img/arrow-down.png" alt=""
                                class="arrow-down-image-mobile mr-3 d-block d-lg-none"> <?= $this->varValue('latestProject') ?></a>
                            <img src="/img/arrow-down-long.svg" class="ml-2 ml-lg-5 arrow-down-image arrow-down-image-lp d-none d-lg-block"
                                alt="">
                                <div class="box-absolute d-none d-lg-block"></div>
                        </div>
                        <div class="social-media-icons-wrapper d-flex ml-auto">
                            <a href="<?= $this->varValue('fblinkGoals') ?>" target="_blank">
                                <img src="/img/FB-grey.svg" class="icon-fb" alt="facebook-icon">
                            </a>
                            <a href="<?= $this->varValue('belinkGoals') ?>" class="mx-2 mx-sm-4 mx-md-5" target="_blank">
                                <img src="/img/BE-grey.svg" class="icon-be" alt="facebook-icon">
                            </a>
                            <a href="<?= $this->varValue('iglinkGoals') ?>" target="_blank">
                                <img src="/img/IG-grey.svg" class="icon-ig" alt="facebook-icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <a type="button" class="close-button" data-dismiss="modal" aria-label="Close">
                </a>
                <img src="img/projektbig.png" class="img-fluid project-picture" alt="">
            </div>
        </div>
    </div>


    <section class="projects-section-wrapper">
        <div class="container" style="background-color: white;">
            <div class="row d-none d-lg-flex">
                <div class="col-4 pl-0 pr-1">
                    <div class="row no-gutters text-center text-lg-left">
                        <?php foreach ($this->extraValue('left') as $projectLeft): ?>
                            <div class="col-12 pb-2">
                                <div class="project-square-wrapper">
                                    <h4 class="navigation-text project-name-abs"><?= $projectLeft->name ?></h4>
                                    <h4 class="navigation-text project-name-abs show-case-abs">View full case</h4>
                                    <div class="cross"></div>
                                    <a href="" class="project-square"><img src="img/3 CASE - cristal park.jpg"
                                            class="img-fluid project-picture" alt=""></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-4 px-1">
                    <div class="row no-gutters text-center text-lg-left">
                        <div class="col-12 pb-2">
                            <div class="project-square-wrapper project-square-image-small">
                                <a href="" data-toggle="modal" data-target="#exampleModalCenter"
                                    class="project-square"><img src="img/11 CASE - crowne.jpg"
                                        class="img-fluid project-picture " alt=""></a>
                            </div>
                        </div>
                        <div class="col-12 pb-2">
                            <div class="project-square-wrapper">
                                <h4 class="navigation-text project-name-abs">Crown</h4>
                                <h4 class="navigation-text project-name-abs show-case-abs">View full case</h4>
                                <div class="cross"></div>
                                <a href="" class="project-square"><img src="img/12 FOTO.jpg"
                                        class="img-fluid project-picture" alt=""></a>
                            </div>
                        </div>
                        <div class="col-12 pb-2">
                            <div class="project-square-wrapper">
                                <h4 class="navigation-text project-name-abs">Crown</h4>
                                <h4 class="navigation-text project-name-abs show-case-abs">View full case</h4>
                                <div class="cross"></div>
                                <a href="" class="project-square"><img src="img/13 CASE - piwna.jpg"
                                        class="img-fluid project-picture" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 pr-0 pl-1">
                    <div class="row no-gutters text-center text-lg-left">
                        <div class="col-12 pb-2">
                            <div class="project-square-wrapper">
                                <h4 class="navigation-text project-name-abs">Crown</h4>
                                <h4 class="navigation-text project-name-abs show-case-abs">View full case</h4>
                                <div class="cross"></div>
                                <a href="" class="project-square"><img src="img/21 CASE - zanat.jpg"
                                        class="img-fluid project-picture" alt=""></a>
                            </div>
                        </div>
                        <div class="col-12 pb-2">
                            <div class="project-square-wrapper">
                                <h4 class="navigation-text project-name-abs">Crown</h4>
                                <h4 class="navigation-text project-name-abs show-case-abs">View full case</h4>
                                <div class="cross"></div>
                                <a href="" class="project-square"><img src="img/22 CASE - piekna duze.jpg"
                                        class="img-fluid project-picture" alt=""></a>
                            </div>
                        </div>
                        <div class="col-12 pb-2">
                            <div class="project-square-wrapper">
                                <h4 class="navigation-text project-name-abs">Crown</h4>
                                <h4 class="navigation-text project-name-abs show-case-abs">View full case</h4>
                                <div class="cross"></div>
                                <a href="" class="project-square"><img src="img/23 CASE - acc.jpg"
                                        class="img-fluid project-picture" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-block d-lg-none">
            <div class="row">
                <div class="col-12  text-center ">
                    <img src="img/projektbig.png" class="img-fluid" alt="">
                    <div class="text-left project-header-wrapper my-2 my-md-4">
                        <h4 class="navigation-text mb-0">Crown plaza</h4>
                        <h4 class="navigation-text ">View full case</h4>
                    </div>
                </div>
                <div class="col-12  text-center">
                    <img src="img/projeksmall.png" class="img-fluid" alt="">
                    <div class="text-left project-header-wrapper my-2 my-md-4">
                        <h4 class="navigation-text mb-0">Crown plaza</h4>
                        <h4 class="navigation-text ">View full case</h4>
                    </div>
                </div>
                <div class="col-12  text-center ">
                    <img src="img/projektbig.png" class="img-fluid" alt="">
                    <div class="text-left project-header-wrapper my-2 my-md-4">
                    </div>
                </div>
                <div class="col-12  text-center">
                    <img src="img/projeksmall.png" class="img-fluid" alt="">
                    <div class="text-left project-header-wrapper my-2 my-md-4">
                        <h4 class="navigation-text mb-0">Crown plaza</h4>
                        <h4 class="navigation-text ">View full case</h4>
                    </div>
                </div>
                <div class="col-12  text-center ">
                    <img src="img/projektbig.png" class="img-fluid" alt="">
                    <div class="text-left project-header-wrapper my-2 my-md-4">
                    </div>
                </div>
                <div class="col-12  text-center ">
                    <img src="img/projektbig.png" class="img-fluid" alt="">
                    <div class="text-left project-header-wrapper my-2 my-md-4">
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-4 pb-sm-5 pt-4 pt-md-0">
            <div class="row ">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div class="latest-projects-wrapper d-flex align-items-center text-center arrow-down-hover"
                            style="position: relative;">
                            <a href=""
                                class="navigation-text latest-project text-center d-flex align-items-center arrow-lh-fix">All
                                projects <img src="img/arrow-down.png" alt=""
                                    class="ml-3 arrow-down-image-mobile d-block d-lg-none"></a>
                            <img src="img/arrow-down-long.svg" class="ml-2 ml-lg-5 arrow-down-image d-none d-lg-block arrow-down-hover-img"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
