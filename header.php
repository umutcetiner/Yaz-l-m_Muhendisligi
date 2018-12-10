<?php
ob_start();
session_start();
include 'nedmin/netting/baglan.php';
include 'nedmin/production/fonksiyon.php';
//Belirli veriyi seçme işlemi
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
    'id' => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
@$kullanicisor->execute(array(
    'mail' => $_SESSION['userkullanici_mail']
));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>">
    <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_author'] ?>">

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

    <!-- Document Title
    ============================================= -->
    <title><?php echo $ayarcek['ayar_title'] ?></title>

    <style>

        .revo-slider-emphasis-text {
            font-size: 58px;
            font-weight: 700;
            letter-spacing: 1px;
            font-family: 'Raleway', sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Raleway', sans-serif;
        }

        .tp-video-play-button { display: none !important; }

        .tp-caption { white-space: nowrap; }

    </style>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar" class="hidden-xs">

        <div class="container clearfix">



            <div class="col_half col_last fright nobottommargin">

                <!-- Top Links
                ============================================= -->
                <div class="top-links">
                    <ul>
                        <li><a href="#">USD</a>
                            <ul>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">AUD</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>
                        <li><a href="#">EN</a>
                            <ul>
                                <li><a href="#"><img src="images/icons/flags/french.png" alt="French"> FR</a></li>
                                <li><a href="#"><img src="images/icons/flags/italian.png" alt="Italian"> IT</a></li>
                                <li><a href="#"><img src="images/icons/flags/german.png" alt="German"> DE</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Login</a>
                            <?php
                            if (!isset($_SESSION['userkullanici_mail'])) {?>
                            <div class="top-link-section">
                                <form id="top-login" role="form">
                                    <div class="input-group" id="top-login-username">
                                        <span class="input-group-addon"><i class="icon-user"></i></span>

                                        <input type="email" class="form-control" placeholder="Email address" required="">
                                    </div>
                                    <div class="input-group" id="top-login-password">
                                        <span class="input-group-addon"><i class="icon-key"></i></span>
                                        <input type="password" class="form-control" placeholder="Password" required="">
                                    </div>
                                    <label class="checkbox">
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                    <button class="btn btn-danger btn-block" type="submit">Sign in</button>
                                    <? } else { ?>

                                    <a href="#"  class="btn btn-default btn-dark">Hoşgeldin<span>--</span><?php echo $kullanicicek['kullanici_adsoyad'] ?></a>

                                    <?php } ?>

                                </form>
                            </div>
                        </li>
                        <?php

                        if (isset($_SESSION['userkullanici_mail'])) {?>
                        <li><a href="logout" class="mycheck">Güvenli Çıkış</a></li> <?php } ?>
                    </ul>
                </div><!-- .top-links end -->

            </div>

        </div>

    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id="header">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div class="col-xs-6 col-md-4 main-logo">
                    <a href="index.php"><img width="250" src="<?php echo $ayarcek['ayar_logo'] ?>" alt="Site Logosu" class="logo img-responsive"></a>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">

                    <ul>

                            <?php

                            $menusor=$db->prepare("SELECT * FROM menu where menu_durum=:durum order by menu_sira ASC limit 5");
                            $menusor->execute(array(
                                'durum' => 1
                            ));

                            while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {
                            ?>


                        <li><a href="

        <?php

                            if (!empty($menucek['menu_url'])) {

                                echo $menucek['menu_url'];

                            } else {


                                echo "sayfa-".seo($menucek['menu_ad']);

                            }
                            ?>


        "><?php echo $menucek['menu_ad'] ?></a>

                        <?php } ?>
                        </li></ul>
                        <!-- Mega Menu
                        ============================================= -->

                    </ul>

                    <!-- Top Cart
                    ============================================= -->
                    <div id="top-cart">
                        <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                            <div class="top-cart-items">
                                <?php
                                $kullanici_id=$kullanicicek['kullanici_id'];
                                $sepetsor=$db->prepare("SELECT * FROM sepet where kullanici_id=:id");
                                $sepetsor->execute(array(
                                    'id' => $kullanici_id
                                ));

                                while($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) {

                                    $urun_id=$sepetcek['urun_id'];
                                    $urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
                                    $urunsor->execute(array(
                                        'urun_id' => $urun_id
                                    ));

                                    $uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
                                    $toplam_fiyat+=$uruncek['urun_fiyat']*$sepetcek['urun_adet'];
                                    ?>

                                    <tr>
                                        <td>
                                            <a href="product.htm"><img src="images\dummy-1.png" alt="" class="img-responsive"></a>
                                        </td>
                                        <td><a href="product.htm"><?php echo $uruncek['urun_ad'] ?></a></td>
                                        <td><?php echo $sepetcek['urun_adet'] ?> Adet</td>
                                        <td><?php echo $uruncek['urun_fiyat'] ?></td>
                                        <td><!--<a href=""><i class="fa fa-times-circle fa-2x"></i></a>--></td>
                                    </tr>

                                <?php } ?>


                            </div>
                            <div class="top-cart-action clearfix">
                                <span class="fleft top-checkout-price"><?php echo @$toplam_fiyat ?> TL</span>
                                <button class="button button-3d button-small nomargin fright">View Cart</button>
                            </div>
                        </div>
                    </div><!-- #top-cart end -->

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                        </form>
                    </div><!-- #top-search end -->

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->