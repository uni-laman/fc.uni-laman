<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="/web/img/top_logo2.png" class="leftimg">',
        'brandUrl' => Yii::$app->homeUrl,
        'brandOptions'=>['class'=>'navbar-brand'],
        'options' => [
            'class' => 'navbar',
            'id'=>'custom-bootstrap-menu',
        ],
        'renderInnerContainer'=>true,
        'innerContainerOptions'=>[
            'class'=>'container',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            
            Yii::$app->user->isGuest ?
                ['label' => 'Личный кабинет', 'url' => ['/site/login']] :
                [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
            ['label' => 'Регистрация', 'url' => ['/site/about']],
            ['label' => 'Ссылки', 'url' => ['/site/contact']],
        ],
    ]);
    echo "<form class='navbar-form navbar-right' role='search'>
       <div class='form-group has-feedback'>
            <input id='searchbox' type='text' placeholder='Поиск' class='form-control'>
            <span id='searchicon' class='fa fa-search form-control-feedback'></span>
        </div>
  </form>";
    echo "<br><div  id='answer' class='bg-success' style='position: fixed;
                      top: 50px; 
                     
                      background: #627ba3;
                      
                      text-color: #ccc;
                      //width: 100%;
                      height: 46px;
                      text-align: center;
                      z-index: 1;
                     





                      '>
                <ul  class='list-inline' style='color:white; padding-top:12px;'>
                <li ><a class='menuahref' href='/web'>&nbsp</a></li>
                <li ><a class='menuahref' href='/web'>&nbsp;</a></li>
                            <li ><a class='menuahref' href='/web'>&nbsp;</a></li>
                            <li ><a class='menuahref' href='/web'>&nbsp;</a></li>
                            <li ><a class='menuahref' href='/web'>Главная</a></li>
                            <li ><a class='menuahref' href='/web/club'>О клубе</a></li>
                            <li ><a class='menuahref' href='/web/command'>Команда</a></li>
                            <li ><a class='menuahref' href='/web/news'>Новости</a></li>
                            <li ><a  class='menuahref' href='/web/games'>Игры</a></li>
                            <li ><a class='menuahref' href='/web/multi'>Мультимедия</a></li>
                            <li ><a class='menuahref' href='/web/fanzone'>Фан зона</a></li>
                            <li ><a class='menuahref' href='/web/partners'>Партнеры</a></li>
                            <li ><a class='menuahref' href='/web/site/contact'>Контакты</a></li>
                            <li ><a class='menuahref' href='/web'>&nbsp;</a></li>
                            <li ><a class='menuahref' href='/web'>&nbsp;</a></li>
                          

                        </ul>
                </div>";
    
    NavBar::end();
    ?>
   

    <div class="container body-background">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>
<!--
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
-->
    <div id="footer" style="background:-webkit-linear-gradient(top, #627ba3 2%,#93A3BD 100%);">
<div class="container">
  <div class="row">
    
    <div id="bottom-footer">
      <div class="row">
        <div class="col-md-8">
            
        </div>
        <div class="col-md-4 " style="margin-top: 10px;" >
            <img class="socialgrupps" src="/web/img/vk.png"  alt="vkontakte">
            <img class="socialgrupps" src="/web/img/facebook.png"  alt="facebook">
            
            <img style="align:right;" class="socialgrupps" src="/web/img/google.png"  alt="google">
          </div>
    </div>
  </div><!--/row 2-->
      <div class="row" id="final-footer">
          <div class="col-sm-4">  </div>
        <div class="col-sm-4 text-center">
        	Copyright © <?= date('Y') ?> FC.uni-laman. All Rights Reserved.<br/>
			 Odessa - Ukraine
        </div>
          
        <div class="col-sm-4 text-right">
        	<span class="fa-stack fa-lg">
              <i class="fa fa-circle text-primary fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span>
          <span class="fa-stack fa-lg">
              <i class="fa fa-circle text-info fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
          <span class="fa-stack fa-lg">
              <i class="fa fa-circle text-danger fa-stack-2x"></i>
              <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
            </span>
        </div>
      </div>
  </div><!--/container-->
</div><!--/footer--></div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
