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
