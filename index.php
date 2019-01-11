    <?php include "header.php";





    $urunsira=$db->prepare("SELECT MAX(urun.urun_id),urun.urun_ad,urun.urun_fiyat,urunfoto.urunfoto_resimyol,urun.urun_seourl FROM `urun` JOIN urunfoto on urun.urun_id=urunfoto.urun_id GROUP BY urunfoto.urun_id DESC LIMIT 4");
    $urunsira->execute();

    $urunsirala=$urunsira->fetchAll(PDO::FETCH_ASSOC);

$rastgeleurun=$db->prepare("SELECT urun.urun_ad,urunfoto.urunfoto_resimyol,urun.urun_seourl from urun JOIN  urunfoto on urunfoto.urun_id=urun.urun_id  ORDER BY RAND() DESC  LIMIT 6 ");
$rastgeleurun->execute();

$rastgeleurunsirala=$rastgeleurun->fetchAll(PDO::FETCH_ASSOC);



    ?>

<section id="slider" class="slider-parallax revslider-wrap ohidden clearfix">

    <!--
    #################################
        - THEMEPUNCH BANNER -
    #################################
    -->
    <div id="rev_slider_ishop_wrapper" class="rev_slider_wrapper fullwidth-container" data-alias="default-slider"
         style="padding:0px;">
        <!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
        <?php

        $slidersor=$db->prepare("SELECT * FROM slider");
        $slidersor->execute();

        $urunsor=$db->prepare("SELECT * FROM urunfoto");
        $urunsor->execute();
        $uruncek=$urunsor->fetchAll(PDO::FETCH_ASSOC);

        $asd = "SELECT * FROM urun ";
        $aaa = $db->prepare($asd);
        $aaa ->execute();
        $bbb=$aaa->fetchall(PDO::FETCH_ASSOC);


        ?>





        <div id="rev_slider_ishop" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.4">
            <ul>    <!-- SLIDE  -->
                <?php while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) { ?>
                <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-delay="5000"  data-saveperformance="off"  data-title="Messenger bags" style="background-color: #E9E8E3;">
                    <!-- LAYERS -->

                    <div class="tp-caption ltl tp-resizeme revo-slider-caps-text uppercase"
                         data-x="630"
                         data-y="78"
                         data-transform_in="x:250;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:400;e:Power4.easeOutQuad;"
                         data-speed="400"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn" style=""><img src="<?= $slidercek['slider_resimyol'] ?>" alt="Bag"></div>

                    <!-- LAYER NR. 2 -->


                    <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                         data-x="0"
                         data-y="140"
                         data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                         data-speed="700"
                         data-start="1200"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn" style=" color: #333; line-height: 1.15;"><?=$slidercek['slider_ad'] ?></div>


                    <div class="tp-caption ltl tp-resizeme"
                         data-x="0"
                         data-y="340"
                         data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                         data-speed="700"
                         data-start="1550"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn" style=""><a href="<?= $slidercek['slider_link'] ?>" class="button button-border button-large button-rounded tright nomargin"><span>Start Shopping</span> <i class="icon-angle-right"></i></a></div>



                </li>
                <?php } ?>
                <!-- SLIDE  -->

            </ul>
        </div>


    </div><!-- END REVOLUTION SLIDER -->

</section>

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">




           <div class="col-md-12 nopadding">
               <?php foreach ($rastgeleurunsirala as $item=>$value): ?>

               <div class="col-md-4 noleftpadding bottommargin-sm">
                   <div class="feature-box center media-box fbox-bg">
                       <div class="fbox-media"><a href="urun-<?=seo($value['urun_seourl']) ?>">
                           <img  src="<?=$value['urunfoto_resimyol']?>" alt="Image"></a>
                       </div>
                       <div class="fbox-desc">
                           <h3><?=$value['urun_ad']?><span class="subtitle"></span></h3>

                       </div>
                   </div>
               </div>
                <?php endforeach; ?>
           </div>


            <div class="tabs topmargin-lg clearfix" id="tab-3">

                <ul class="tab-nav clearfix">
                    <li><a href="#tabs-9">New Arrivals</a></li>

                </ul>
                <div class="tab-container">
                    <div class="tab-content clearfix" id="tabs-9">
                        <div id="shop" class="shop clearfix">

                            <?php foreach ($urunsirala as $item) :

                             ?>
                            <div class="product clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="<?php echo $item['urunfoto_resimyol']?>" alt="Checked Short Dress"></a>


                                    <div class="product-overlay">
                                        <a href="urun-<?=seo($item['urun_seourl']) ?>" class="right-icon" ><i class="icon-line-plus"></i></a>

                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#"><?php echo $item['urun_ad']?></a></h3></div>
                                    <div class="product-price"> <ins><?php echo $item['urun_fiyat']?>€</ins></div>

                                </div>
                            </div>
                            <?php   endforeach; ?>


                        </div>

                    </div>


                </div>

                <?php ?>

            </div>


<?php include "footer.php"; ?>
