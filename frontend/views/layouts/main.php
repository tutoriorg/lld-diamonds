<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
<body id="body">
<?php $this->beginBody() ?>




<header>
    <div class="top_bar mobile_hidden">
        <div class="container">
            <ul class="top_icon">
                <li><a class="facebook" href="#"></a></li>
                <li><a class="twitter" href="#"></a></li>
                <li><a class="instagram" href="#"></a></li>
                <li><a class="g" href="#"></a></li>
                <li><a class="phone" href="#"></a></li>
                <li><a class="message" href="#"></a></li>
            </ul>
            <div class="top_registration">
                <a href="#">Registration</a> | <a href="#">Login</a>
            </div>
        </div>
    </div>
    <div class="top_bar_mobile mobile_visible">
        <div class="container">
            <div class="mobile_menu">
                        <span class="sandwich">
                            <span class="sw-topper"></span>
                            <span class="sw-bottom"></span>
                            <span class="sw-footer"></span>
                        </span>
            </div>
            <div class="mobile_icon">
                <ul>
                    <li><a class="mobile_search" href="#"><img src="images/mobile_search.png" alt="">
                        </a></li>
                    <li><a class="mobile_registration" href="#"><img src="images/mobile_registration.png" alt="">
                        </a></li>
                    <li><a class="mobile_cart"href="#"><img src="images/mobile_cart.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header_center ">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-push-4 col-xs-12 logo_icon_wr">
                <div class="logo_icon">
                    <img src="images/Logo_head.png" alt="Logo_head">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-pull-4  col-xs-12 logo_descr_wr">
                <div class="logo_descr">LLD Diamonds</div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mobile_hidden head_basket_wr">
                <a class="head_basket">My saved diamonds</a>
            </div>
        </div>
    </div>
    <div class="header_menu">
        <div class="container">
            <ul class="nav_bar">
                <li class="home active"><a href="#">Home<span class="sr-only"></span></a></li>
                <li><a href="#">About us</a></li>
                <li class="inventory"><a href="#">Inventory</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">Contact Us</a></li>
                <li class="mobile_hidden"><a class="header_search " href="#"></a></li>
                </li>
            </ul>
        </div>
    </div>
</header>


<div class="container1">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>

<section class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 subscribe_left">
                <div class="subscribe_descr">Subscribe to our newsletter</div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 subscribe_right">
                <div class="subscribe_search_wr">
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Your email here">
                    <a class="subscribe_search">Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact_bottom_left">
                <div class="contact_bottom_title">Our Contacts</div>
                <ul>
                    <li><a href="#">LLD Diamonds Ltd</a></li>
                    <li><a href="#">23 Tuval Street, Noam Building 9th <br>Floor Ramat-Gan 52521, Israel</a></li>
                    <li><a href="#">Phone: 972-3-755 1111 </a></li>
                    <li><a href="#">Fax: 972-3-575 2141</a></li>
                    <li><a href="#">Email: info@LLDIL.com</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact_bottom_center">
                <div class="contact_bottom_title">Social Network</div>
                <div class="social_wr">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="social">
                                <a class="social_icon"><img src="images/social_wifi.png" alt="">
                                </a>
                                <span>Subscribe <br>
<span>to RSS Feed</span></span>
                            </div>
                            <div class="social">
                                <a class="social_icon"><img src="images/social_fb.png" alt="">
                                </a>
                                <span>Find Us<br>
<span>on Facebook</span></span>
                            </div>
                            <div class="social">
                                <a class="social_icon"><img src="images/social_p.png" alt=""></a>
                                <span>Follow Us<br>
<span>on Pinterest</span></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="social">
                                <a class="social_icon"><img src="images/social_tw.png" alt="">

                                </a>
                                <span>Follow Us<br>
<span>on Twitter</span></span>
                            </div>
                            <div class="social">
                                <a class="social_icon"><img src="images/social_g.png" alt="">
                                </a>
                                <span>Find Us<br>
<span>on Google +</span></span>
                            </div>
                            <div class="social">
                                <a class="social_icon"><img src="images/social_dr.png" alt="">
                                </a>
                                <span>Follow Us<br>
<span>on Dribbble.</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact_bottom_right">
                <div class="contact_bottom_title">Instagram widget</div>
                <div class="instagram_widget">
                    <div class="instagram_widget_img"><img src="images/instagram_img_1.png" alt=""></div>
                    <div class="instagram_widget_img"><img src="images/instagram_img_1.png" alt=""></div>
                    <div class="instagram_widget_img"><img src="images/instagram_img_1.png" alt=""></div>
                    <div class="instagram_widget_img"><img src="images/instagram_img_1.png" alt=""></div>
                    <div class="instagram_widget_img"><img src="images/instagram_img_1.png" alt=""></div>
                    <div class="instagram_widget_img"><img src="images/instagram_img_1.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="scroll_top">
    <a href="#body" class="scroll_wr">
        <img src="images/scroll_top.png" alt="">
    </a>
</div>
<footer class="footer">
    <div class="footer_descr">
        <span>Copyright © 2015 </span>    <span>|</span>    <span>LLD Diamonds Ltd</span>    <span class="mobile_hidden" >|</span>    <span>All Rights Reserved</span>
    </div>
</footer>


















<?php /* ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],



    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];

    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',

            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>


</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

 <?php */ ?>

<!--
	[if lt IE 9]>
<script src="/libs/html5shiv/es5-shim.min.js"></script>
<script src="/libs/html5shiv/html5shiv.min.js"></script>
<script src="/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="/libs/respond/respond.min.js"></script>
<![endif]
    -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
