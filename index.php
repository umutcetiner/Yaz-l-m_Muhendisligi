    <?php include "header.php" ?>

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
               <?php foreach ($uruncek as $item=>$value): ?>

               <div class="col-md-4 noleftpadding bottommargin-sm">
                   <div class="feature-box center media-box fbox-bg">
                       <div class="fbox-media">
                           <img src="<?=$value['urunfoto_resimyol']?>" alt="Image">
                       </div>
                       <div class="fbox-desc">
                           <h3><?=$value['urunfoto_tur']?><span class="subtitle">Flat 50% Off*</span></h3>

                       </div>
                   </div>
               </div>
                <?php endforeach; ?>
           </div>


            <div class="tabs topmargin-lg clearfix" id="tab-3">

                <ul class="tab-nav clearfix">
                    <li><a href="#tabs-9">New Arrivals</a></li>
                    <li><a href="#tabs-10">Best sellers</a></li>
                    <li><a href="#tabs-11">You may like</a></li>
                </ul>

                <div class="tab-container">

                    <div class="tab-content clearfix" id="tabs-9">

                        <div id="shop" class="shop clearfix">

                            <div class="product clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                    <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                    <div class="sale-flash">50% Off*</div>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view"
                                           data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                    <div class="product-price">
                                        <del>$24.99</del>
                                        <ins>$12.49</ins>
                                    </div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="product clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
                                    <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view"
                                           data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                    <div class="product-price">$39.99</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="product clearfix">
                                <div class="product-image">
                                    <div class="fslider" data-arrows="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="#"><img src="images/shop/shoes/1.jpg"
                                                                                    alt="Dark Brown Boots"></a></div>
                                                <div class="slide"><a href="#"><img src="images/shop/shoes/1-1.jpg"
                                                                                    alt="Dark Brown Boots"></a></div>
                                                <div class="slide"><a href="#"><img src="images/shop/shoes/1-2.jpg"
                                                                                    alt="Dark Brown Boots"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view"
                                           data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                    <div class="product-price">$49</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="product clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
                                    <a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view"
                                           data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                    <div class="product-price">$19.95</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="tab-content clearfix" id="tabs-10">

                        <div id="shop" class="shop clearfix">

                            <div class="product clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
                                    <a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
                                    <div class="sale-flash">Sale!</div>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view"
                                           data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                    <div class="product-price">
                                        <del>$19.99</del>
                                        <ins>$11.99</ins>
                                    </div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="product clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/tshirts/1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                    <a href="#"><img src="images/shop/tshirts/1-1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view"
                                           data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Blue Round-Neck Tshirt</a></h3></div>
                                    <div class="product-price">$9.99</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="product clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/watches/1.jpg" alt="Silver Chrome Watch"></a>
                                    <a href="#"><img src="images/shop/watches/1-1.jpg" alt="Silver Chrome Watch"></a>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view"
                                           data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Silver Chrome Watch</a></h3></div>
                                    <div class="product-price">$129.99</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="product clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/shoes/2.jpg" alt="Men Grey Casual Shoes"></a>
                                    <a href="#"><img src="images/shop/shoes/2-1.jpg" alt="Men Grey Casual Shoes"></a>
                                    <div class="sale-flash">Sale!</div>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view"
                                           data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Men Grey Casual Shoes</a></h3></div>
                                    <div class="product-price">
                                        <del>$45.99</del>
                                        <ins>$39.49</ins>
                                    </div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-content clearfix" id="tabs-11">

                        <div id="shop" class="shop clearfix">

                            <div class="product clearfix">
                                <div class="product-image">
                                    <div class="fslider" data-arrows="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="#"><img src="images/shop/dress/3.jpg"
                                                                                    alt="Pink Printed Dress"></a></div>
                                                <div class="slide"><a href="#"><img src="images/shop/dress/3-1.jpg"
                                                                                    alt="Pink Printed Dress"></a></div>
                                                <div class="slide"><a href="#"><img src="images/shop/dress/3-2.jpg"
                                                                                    alt="Pink Printed Dress"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view"
                                           data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Pink Printed Dress</a></h3></div>
                                    <div class="product-price">$39.49</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="product clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/pants/5.jpg" alt="Green Trousers"></a>
                                    <a href="#"><img src="images/shop/pants/5-1.jpg" alt="Green Trousers"></a>
                                    <div class="sale-flash">Sale!</div>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view"
                                           data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Green Trousers</a></h3></div>
                                    <div class="product-price">
                                        <del>$24.99</del>
                                        <ins>$21.99</ins>
                                    </div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="product clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/sunglasses/2.jpg"
                                                     alt="Men Aviator Sunglasses"></a>
                                    <a href="#"><img src="images/shop/sunglasses/2-1.jpg" alt="Men Aviator Sunglasses"></a>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view"
                                           data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Men Aviator Sunglasses</a></h3></div>
                                    <div class="product-price">$13.49</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="product clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/tshirts/4.jpg" alt="Black Polo Tshirt"></a>
                                    <a href="#"><img src="images/shop/tshirts/4-1.jpg" alt="Black Polo Tshirt"></a>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="include/ajax/shop-item.html" class="item-quick-view"
                                           data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Black Polo Tshirt</a></h3></div>
                                    <div class="product-price">$11.49</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


<?php include "footer.php"; ?>
