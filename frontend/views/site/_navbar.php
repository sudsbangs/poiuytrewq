<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Start  Logo & Naviagtion  -->
<div class="navbar navbar-default navbar-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="<?= Url::to(['//site/index']) ?>">
                <img alt="" src="<?= Yii::$app->request->baseUrl ?>/custom/images/margo.png">
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
                <a href="#" class="show-search"><i class="fa fa-search"></i></a>
                <div class="search-form">
                    <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                        <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                    </form>
                </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?= Html::a('Home', Url::to(['//site/index']), ['class' => (Yii::$app->controller->action->id == 'index') ? 'active' : '']); ?>
                </li>
                <?php if (Yii::$app->user->isGuest) { ?>
                    <li>
                        <?= Html::a('Login', Url::to(['//site/login']), ['class' => (Yii::$app->controller->action->id == 'login') ? 'active' : '']); ?>
                    </li>
                <?php } ?>

                <li>
                    <?= Html::a('Location', Url::to(['//site/site-location']), ['class' => (Yii::$app->controller->action->id == 'site-location') ? 'active' : '']); ?>
                    <!--<a href="site-location.html">Site Location</a>-->
                </li>
                <li>
                    <?= Html::a('Image Gallery', Url::to(['//site/about-us']), ['class' => (Yii::$app->controller->action->id == 'about-us') ? 'active' : '']); ?>

                </li>
                <li><?= Html::a('Contact Us', Url::to(['//site/contact']), ['class' => (Yii::$app->controller->action->id == 'contact') ? 'active' : '']); ?>
                </li>
                <li>
                    <?php if (Yii::$app->user->isGuest) { ?>
                        <?= Html::a('Register', Url::to(['//site/signup']), ['class' => (Yii::$app->controller->action->id == 'signup') ? 'active' : '']); ?>
                    <?php } else { ?>
                        <?= Html::a('Logout (' . Yii::$app->user->identity->username . ')', Url::to(['//site/logout']), ['linkOptions' => ['data-method' => 'post']]); ?>,
                    <?php } ?>

                </li>

            </ul>
            <!-- End Navigation List -->
        </div>
    </div>
</div>
<!-- End Header Logo & Naviagtion -->


