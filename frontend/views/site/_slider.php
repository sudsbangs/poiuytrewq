<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;
use yii\helpers\Url;
?>
<section id="home">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="<?= Yii::$app->request->baseUrl ?>/custom/images/slider/bg1.jpg" alt="slider">
                <div class="slider-content sliderText">
                    <div class="col-md-12 text-center">
                        <h2 class="animated2 white">
                            <span>Welcome to <strong>DINA Residency</strong></span>
                        </h2>
                        <h3 class="animated3 white">
                            <span>The ultimate aim of your business</span>
                        </h3>
                        <p class="animated4"><?= Html::a('Contact Us', Url::to(['//site/contact']), ['class' => 'slider btn btn-system btn-larg']) ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
            <div class="item">
                <img class="img-responsive" src="<?= Yii::$app->request->baseUrl ?>/custom/images/slider/bg2.jpg" alt="slider">
                <div class="slider-content sliderText">
                    <div class="col-md-12 text-center">
                        <h2 class="animated4 white">
                            <span><strong>Dina Residency</strong> for the highest</span>
                        </h2>
                        <h3 class="animated5">
                            <span>The Key of your Success</span>
                        </h3>
                        <p class="animated6"><a href="#" class="slider btn btn-system btn-large">Buy Now</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
            <div class="item">
                <img class="img-responsive" src="<?= Yii::$app->request->baseUrl ?>/custom/images/slider/bg3.jpg" alt="slider">
                <div class="slider-content sliderText">
                    <div class="col-md-12 text-center">
                        <h2 class="animated7 white">
                            <span>The way of <strong>Success</strong></span>
                        </h2>
                        <h3 class="animated8 white">
                            <span>Why you are waiting</span>
                        </h3>
                        <div class="">
                            <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
    <!-- /carousel -->
</section>