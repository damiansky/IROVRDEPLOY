<?php 

use app\assets\ResourcesAsset;

ResourcesAsset::register($this);

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->composition->language; ?>">
    <head>
        <title><?= $this->title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="luya.io">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <nav class="navbar navbar-expand-lg py-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center text-uppercase mr-auto" href="#"><img src="img/logo.svg"
                    class="mr-2 mr-md-4" alt=""> <span class="d-none d-sm-inline-block">ARCHITECTURAL
                    VISUALIZATION</span></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar" style="margin-bottom: 0;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <?php foreach (Yii::$app->menu->find()->container('default')->root()->all() as $item): ?>
                        <li class="nav-item text-center text-lg-left active">
                            <a class="nav-link <?= $item->isActive ? 'active' : null ?>" href="<?= $item->link; ?>"><?= $item->title; ?></a>
                        </li> 
                    <?php endforeach; ?>
                </ul>
                <div class="d-flex align-items-center language-switch justify-content-center justicy-content-lg-left ">
                    <h5 class="mb-0 language-styles">pl</h5>
                    <span class="slash-switcher px-2 mb-0">/</span>
                    <h5 class="mb-0 language-styles">en</h5>
                </div>
            </div>
        </div>
    </nav>

            <?= $content ?>
        

    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
