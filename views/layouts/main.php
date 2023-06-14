<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;


AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>

<!-- Additional CSS Files -->
    <link href="<? Yii::$app->request->baseUrl ?>/vendor/bootstrap/css/bootstrap.min.css.map" rel="stylesheet">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/tamplate/css/fontawesome.css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/tamplate/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/tamplate/css/animated.css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/tamplate/css/owl.css">

<!-- script -->
    <script src="<?= Yii::$app->request->baseUrl ?>/vendor/jquery.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/assets/js/owl-carousel.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/assets/js/animation.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/assets/js/imagesloaded.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/assets/js/templatemo-custom.js"></script>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h4>muhammad<span>Syamsul</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="<?= Yii::$app->urlManager->createUrl(['/site/index']) ?>">Home</a></li>
              <li class="scroll-to-section"><a href="<?= Yii::$app->urlManager->createUrl(['/site/about']) ?>">About Us</a></li>
              <li class="scroll-to-section"><a href="<?= Yii::$app->urlManager->createUrl(['/mahasiswa/index']) ?>">Mahasiswa</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
              <li class="scroll-to-section"><a href="#blog">Blog</a></li> 
              <li class="scroll-to-section"><a href="#contact">Message Us</a></li> 
              <li class="scroll-to-section"><div class="main-red-button"><a href="<?= Yii::$app->urlManager->createUrl(['/mahasiswa/contact']) ?>">Contact Now</a></div></li> 
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer>
<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>© Copyright 2021 Space Dynamic Co. All Rights Reserved. 
          
          <br>Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
