<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Page Description and Author -->
        <meta name="description" content="Margo - Responsive HTML5 Template">
        <meta name="author" content="iThemesLab">

        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/custom/asset/css/bootstrap.min.css" type="text/css" media="screen">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/custom/css/font-awesome.min.css" type="text/css" media="screen">

        <!-- Margo CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/style.css" media="screen">

        <!-- Responsive CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/responsive.css" media="screen">

        <!-- Css3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/animate.css" media="screen">

        <!-- Color CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/colors/red.css" title="red" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/colors/jade.css" title="jade" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/colors/green.css" title="green" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/colors/blue.css" title="blue" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/colors/beige.css" title="beige" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/colors/cyan.css" title="cyan" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/colors/orange.css" title="orange" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/colors/peach.css" title="peach" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/colors/pink.css" title="pink" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/colors/purple.css" title="purple" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/colors/sky-blue.css" title="sky-blue" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/custom/css/colors/yellow.css" title="yellow" media="screen" />


        <!-- Margo JS  -->
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/jquery.migrate.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/modernizrr.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/asset/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/nivo-lightbox.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/jquery.appear.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/count-to.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/jquery.textillate.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/jquery.lettering.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/jquery.easypiechart.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/jquery.parallax.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/mediaelement-and-player.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->request->baseUrl ?>/custom/js/script.js"></script>

    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div id="container">


            <!-- Start Header Section -->
            <div class="hidden-header"></div>
            <header class="clearfix">

                <!-- Start Top Bar -->
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- Start Contact Info -->
                                <ul class="contact-details">
                                    <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                                    </li>
                                </ul>
                                <!-- End Contact Info -->
                            </div><!-- .col-md-6 -->
                            <div class="col-md-5">
                                <!-- Start Social Links -->
                                <ul class="social-list">
                                    <li>
                                        <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                                    </li>
                                    <li>
                                        <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                                    </li>
                                    <li>
                                        <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                                    </li>
                                    <li>
                                        <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                                    </li>
                                </ul>
                                <!-- End Social Links -->
                            </div><!-- .col-md-6 -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .top-bar -->
                <!-- End Top Bar -->

                <!-- Start  Logo & Naviagtion  -->
                <?= $this->render('/site/_navbar'); ?>
                <!-- End Navigation List -->


            </header>
            <!-- End Header Section -->
            <!-- Start Home Page Slider -->
            <?= $this->render('/site/_slider'); ?>

            <!-- End Home Page Slider -->
            <!-- Start Content -->
            <div id="content">
                <div class="container">

                    <?= $content; ?>
                </div>
            </div>
            <!-- End content -->









            <!-- Start Client/Partner Section -->
            <div class="partner">
                <div class="container">
                    <div class="row">

                    </div><!-- .container -->
                </div>
                <!-- End Client/Partner Section -->





                <!-- Start Footer Section -->
                <footer>
                    <div class="container">
                        <div class="row footer-widgets">



                            <!-- Start Contact Widget -->
                            <div class="col-md-3 col-xs-12">
                                <div class="footer-widget contact-widget">
                                    <h4><img src="<?= Yii::$app->request->baseUrl ?>/custom/images/footer-margo.png" class="img-responsive" alt="Footer Logo" /></h4>
                                    <ul>
                                        <li><span>Phone Number:</span> +01 234 567 890</li>
                                        <li><span>Email:</span> company@company.com</li>
                                        <li><span>Website:</span> www.yourdomain.com</li>
                                    </ul>
                                </div>
                            </div><!-- .col-md-3 -->
                            <!-- End Contact Widget -->


                        </div><!-- .row -->

                        <!-- Start Copyright -->
                        <div class="copyright-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>&copy; 2014 Margo -  All Rights Reserved <a href="http://graygrids.com">GrayGrids</a> </p>
                                </div><!-- .col-md-6 -->
                                <div class="col-md-6">
                                    <ul class="footer-nav">
                                        <li><a href="#">Sitemap</a>
                                        </li>
                                        <li><a href="#">Privacy Policy</a>
                                        </li>
                                        <li><a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </div><!-- .col-md-6 -->
                            </div><!-- .row -->
                        </div>
                        <!-- End Copyright -->

                    </div>
                </footer>
                <!-- End Footer Section -->


            </div>
            <!-- End Full Body Container -->

            <!-- Go To Top Link -->
            <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

            <div id="loader">
                <div class="spinner">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
            </div>

            <!-- Style Switcher -->
            <div class="switcher-box">
                <a href="#" class="open-switcher show-switcher"><i class="fa fa-cog fa-2x"></i></a>
                <h4>Style Switcher</h4>
                <span>12 Predefined Color Skins</span>
                <ul class="colors-list">
                    <li>
                        <a onClick="setActiveStyleSheet('blue');

                                return false;" title="Blue" class="blue"></a>
                    </li>
                    <li>
                        <a onClick="setActiveStyleSheet('sky-blue');

                                return false;" title="Sky Blue" class="sky-blue"></a>
                    </li>
                    <li>
                        <a onClick="setActiveStyleSheet('cyan');

                                return false;" title="Cyan" class="cyan"></a>
                    </li>
                    <li>
                        <a onClick="setActiveStyleSheet('jade');

                                return false;" title="Jade" class="jade"></a>
                    </li>
                    <li>
                        <a onClick="setActiveStyleSheet('green');

                                return false;" title="Green" class="green"></a>
                    </li>
                    <li>
                        <a onClick="setActiveStyleSheet('purple');

                                return false;" title="Purple" class="purple"></a>
                    </li>
                    <li>
                        <a onClick="setActiveStyleSheet('pink');

                                return false;" title="Pink" class="pink"></a>
                    </li>
                    <li>
                        <a onClick="setActiveStyleSheet('red');

                                return false;" title="Red" class="red"></a>
                    </li>
                    <li>
                        <a onClick="setActiveStyleSheet('orange');

                                return false;" title="Orange" class="orange"></a>
                    </li>
                    <li>
                        <a onClick="setActiveStyleSheet('yellow');

                                return false;" title="Yellow" class="yellow"></a>
                    </li>
                    <li>
                        <a onClick="setActiveStyleSheet('peach');

                                return false;" title="Peach" class="peach"></a>
                    </li>
                    <li>
                        <a onClick="setActiveStyleSheet('beige');

                                return false;" title="Biege" class="beige"></a>
                    </li>
                </ul>
                <span>Top Bar Color</span>
                <select id="topbar-style" class="topbar-style">
                    <option value="1">Light (Default)</option>
                    <option value="2">Dark</option>
                    <option value="3">Color</option>
                </select>
                <span>Layout Style</span>
                <select id="layout-style" class="layout-style">
                    <option value="1">Wide</option>
                    <option value="2">Boxed</option>
                </select>
                <span>Patterns for Boxed Version</span>
                <ul class="bg-list">
                    <li>
                        <a href="#" class="bg1"></a>
                    </li>
                    <li>
                        <a href="#" class="bg2"></a>
                    </li>
                    <li>
                        <a href="#" class="bg3"></a>
                    </li>
                    <li>
                        <a href="#" class="bg4"></a>
                    </li>
                    <li>
                        <a href="#" class="bg5"></a>
                    </li>
                    <li>
                        <a href="#" class="bg6"></a>
                    </li>
                    <li>
                        <a href="#" class="bg7"></a>
                    </li>
                    <li>
                        <a href="#" class="bg8"></a>
                    </li>
                    <li>
                        <a href="#" class="bg9"></a>
                    </li>
                    <li>
                        <a href="#" class="bg10"></a>
                    </li>
                    <li>
                        <a href="#" class="bg11"></a>
                    </li>
                    <li>
                        <a href="#" class="bg12"></a>
                    </li>
                    <li>
                        <a href="#" class="bg13"></a>
                    </li>
                    <li>
                        <a href="#" class="bg14"></a>
                    </li>
                </ul>
            </div>
            <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
