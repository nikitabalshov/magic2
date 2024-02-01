<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!--<header id="header">-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
//            Yii::$app->user->isGuest
//                ? ['label' => 'Login', 'url' => ['/site/login']]
//                : '<li class="nav-item">'
//                    . Html::beginForm(['/site/logout'])
//                    . Html::submitButton(
//                        'Logout (' . Yii::$app->user->identity->username . ')',
//                        ['class' => 'nav-link btn btn-link logout']
//                    )
//                    . Html::endForm()
//                    . '</li>'
//        ]
//    ]);
//    NavBar::end();
//    ?>
<!--</header>-->
<header>
    <div class="navigation">
        <p class="intro">Новые квартирные решения</p>
        <nav>
            <a class="active" href="#">ГЛАВНАЯ</a>
            <a class="link" href="#">УСЛУГИ</a>
            <a class="link" href="#">ПРОЕКТЫ</a>
            <a class="link" href="#">КОНТАКТЫ</a>
            <a class="button-nav" href="#"> ПОЗВОНИТЬ </a>
        </nav>
    </div>
    <div class="cent">
        <div class="title">
            <h1>Новые квартирные решения</h1>
            <p>Надежные дома для спокойной жизни</p>
        </div>
    </div>
</header>

<main id="main" class="flex-shrink-0" role="main">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>Связаться</h2>
                <p>ул. Арбат, 1а, Москва,119019, Россия</p>
                <a href="#">info@mysite.ru</a>
                <p>+7 123 456-78-90</p>
            </div>
            <div class="col">
                <label for="formControlInput" class="form-label">Email address</label>
                <input type="email" class="form-control" id="formControlInput" placeholder="name@example.com">
                <form>
                    <input type="text">
                </form>
            </div>
            <div class="col, right">
                <a> Главная</a>
                <a>Услуги</a>
                <a>Проекты</a>
                <a>Контакты</a>
                <a class="button1">ПОЗВОНИТЬ</a>
            </div>
        </div>
    </div>
</footer>

<!--<footer id="footer" class="mt-auto py-3 bg-light">-->
<!--    <div class="container">-->
<!--        <div class="row text-muted">-->
<!--            <div class="col-md-6 text-center text-md-start">&copy; My Company --><?php //= date('Y') ?><!--</div>-->
<!--            <div class="col-md-6 text-center text-md-end">--><?php //= Yii::powered() ?><!--</div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
