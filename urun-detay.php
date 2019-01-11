<?php include "header.php";
if (isset($_GET['sef'])) {

    $kategorisor = $db->prepare("SELECT * FROM kategori where kategori_seourl=:seourl");
    $kategorisor->execute(array(
        'seourl' => $_GET['sef']
    ));
    $kategoricek = $kategorisor->fetch(PDO::FETCH_ASSOC);
    $kategori_id = $kategoricek['kategori_id'];

    $asd = "SELECT * FROM urunfoto  join urun on urun.urun_id=urunfoto.urun_id join kategori on kategori.kategori_id=urun.kategori_id where kategori.kategori_id=:kategori_id ";
    $aaa = $db->prepare($asd);
    $aaa->execute(array(
        'kategori_id' => $kategori_id
    ));
    $bbb = $aaa->fetchall(PDO::FETCH_ASSOC);


} else {
    $asd = "SELECT * FROM urunfoto  join urun on urun.urun_id=urunfoto.urun_id join kategori on kategori.kategori_id=urun.kategori_id ";
    $aaa = $db->prepare($asd);
    $aaa->execute();
    $bbb = $aaa->fetchall(PDO::FETCH_ASSOC);
}


?>
<?php


$query = "SELECT * FROM kategori where kategori_durum=1 order by kategori_sira ASC ";
$goster = $db->prepare($query);
$goster->execute();
$goster2 = $goster->fetchAll(PDO::FETCH_ASSOC);


$urunsor = $db->prepare("SELECT urun.urun_id,urun.urun_ad,urun.urun_detay,urun.urun_fiyat,urun.urun_seourl,urun.urun_stok,urunfoto.urunfoto_resimyol,yorumlar.yorum_detay,yorumlar.yorum_zaman,kullanici.kullanici_ad,urun.urun_video FROM urun JOIN urunfoto on urun.urun_id=urunfoto.urun_id LEFT JOIN yorumlar on urun.urun_id=yorumlar.urun_id  LEFT JOIN kullanici on kullanici.kullanici_id=yorumlar.kullanici_id where urun_seourl=:seourl;");
$urunsor->execute(array(
    'seourl' => $_GET['sef']
));

$uruncek = $urunsor->fetchAll(PDO::FETCH_ASSOC);


?>
    <nav id="primary-menu" class="style-2">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <ul>
                <?php foreach ($goster2 as $value) { ?>
                    <li class="current"><a href="kategori-<?= seo($value["kategori_ad"]) ?>">
                        <div class="navbar navbar-brand text text-warning"><?= $value['kategori_ad'] ?></div>
                    </a>

                    </li><?php } ?>


            </ul>


        </div>

        <hr>
        <br>

    </nav>
    <section id="content">

<div class="container-fluid">
        <div class="row">
            <div class="col-md-2">



            </div>
            <div class="col-md-4">
                <img src="<?php echo $uruncek[0]['urunfoto_resimyol'] ?>" alt="Image" style="padding-left: 20%">
            </div>


            <div class="col-md-4">

                <div class="accordion accordion-bg clearfix">
                    <div class="pricing-action-area">

                        <div class="pricing-price">
                            <span class="price-unit">€</span><?php echo $uruncek[0]['urun_fiyat']?><span class="price-tenure"></span>
                        </div>

                    </div>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i
                                class="acc-open icon-remove-circle"></i>STOK VE SİPARİŞ
                    </div>


                    <div class="acc_content clearfix">
                        <ul class="iconlist iconlist-color nobottommargin">


                            <form action="nedmin/netting/islem.php" METHOD="post">
                                <li><a href="#"
                                       class="button button-3d button-large button-rounded button-green"
                                       style="size: 50px">STOK:</a><a
                                            href="#"
                                            class="button button-3d button-large button-rounded button-green"><?php echo $uruncek[0]['urun_stok'] ?></a>


                                    <i><input class="typeahead sm-form-control tt-input" type="number" value="1"
                                              name="urun_adet" placeholder="Adet giriniz" style=" size: 10px;
                                     background-color: transparent;"></i></li>
                                <input type="hidden" name="kullanici_id"
                                       value="<?php echo $kullanicicek['kullanici_id'] ?>">

                                <input type="hidden" name="urun_id" value="<?php echo $uruncek[0]['urun_id'] ?>">
                                <button
                                        type="submit" name="sepeteekle2"
                                        class="button button-3d button-large button-rounded button-teal icon-hand-left">
                                    SEPETE
                                    EKLE
                                </button>
                            </form>


                        </ul>
                    </div>



                </div>

            </div>
            <div class="col-md-2"></div>

        </div>
</div>

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="col_three_fifth nobottommargin">

                    <div class="fancy-title title-bottom-border">
                        <h3><?php echo $uruncek[0]['urun_ad'] ?></h3>
                    </div>

                    <p><?php echo $uruncek[0]['urun_detay'] ?></p>

                    <div class="accordion accordion-bg clearfix">


                        <div class="acc_content clearfix">
                            <ul class="iconlist iconlist-color nobottommargin">


                                <form action="nedmin/netting/islem.php" METHOD="post">
                                    <li><a href="#"
                                           class="button button-3d button-large button-rounded button-green"
                                           style="size: 50px">STOK:</a><a
                                                href="#"
                                                class="button button-3d button-large button-rounded button-green"><?php echo $uruncek[0]['urun_stok'] ?></a>


                                        <i><input class="typeahead sm-form-control tt-input" type="number" value="1"
                                                  name="urun_adet" placeholder="Adet giriniz" style=" size: 10px;
                                     background-color: transparent;"></i></li>
                                    <input type="hidden" name="kullanici_id"
                                           value="<?php echo $kullanicicek['kullanici_id'] ?>">

                                    <input type="hidden" name="urun_id" value="<?php echo $uruncek[0]['urun_id'] ?>">
                                    <button
                                            type="submit" name="sepeteekle"
                                            class="button button-3d button-large button-rounded button-teal icon-hand-left">
                                        SEPETE
                                        EKLE
                                    </button>
                                </form>


                            </ul>
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i
                                    class="acc-open icon-remove-circle"></i>ÜRÜN YORUMLARI
                        </div>
                        <div class="acc_content clearfix">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <?php foreach ($uruncek as $a) { ?>
                                    <li><i class="icon-ok"></i><?php echo $a['kullanici_ad'] ?>
                                    (<?php echo $a['yorum_zaman'] ?>)<br><?php echo $a['yorum_detay'] ?>
                                    <hr></li><?php } ?>
                                <hr>
                                <li>
                                    <div class="content-wrap">

                                        <div class="container clearfix">

                                            <!-- Postcontent
                                            ============================================= -->
                                            <div class="postcontent nobottommargin">

                                                <h3>Yorum yazınız...</h3>

                                                <div class="contact-widget">


                                                    <div class="contact-form-result"></div>

                                                    <form class="nobottommargin" id="template-contactform"
                                                          name="template-contactform" action="nedmin/netting/islem.php"
                                                          method="post" novalidate="novalidate">

                                                        <div class="form-process"></div>


                                                        <div class="col_full">
                                                            <label for="template-contactform-message">YORUMUNUZ:

                                                            </label>
                                                            <textarea class="required sm-form-control"
                                                                      id="template-contactform-message"
                                                                      name="yorum_detay" rows="6"
                                                                      cols="30" aria-required="true"></textarea>
                                                        </div>


                                                        <div class="col_full">
                                                            <button class="button button-3d nomargin" type="submit"
                                                                    id="template-contactform-submit"
                                                                    name="yorumkaydet" value="submit">
                                                                Send Message
                                                            </button>
                                                        </div>

                                                    </form>
                                                </div>

                                            </div><!-- .postcontent end -->

                                            <!-- Sidebar
                                            ============================================= -->
                                            <div class="sidebar col_last nobottommargin">


                                            </div>

                                        </div>


                                </li>

                            </ul>
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i
                                    class="acc-open icon-remove-circle"></i>Tanıtım Video
                        </div>
                        <div class="acc_content clearfix"><?php echo $uruncek[0]['urun_video'] ?></div>

                    </div>


                    <div class="divider divider-short"><i class="icon-star3"></i></div>
                </div>
            </div>
        </div>


    </section><!-- #content end -->

<?php include "footer.php"; ?>