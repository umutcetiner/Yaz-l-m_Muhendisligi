<?php

$favorisor=$db->prepare("SELECT * FROM favori");

$favorisor->execute();

$favoricek=$favorisor->fetchAll(PDO::FETCH_ASSOC);



?>

<div class="clear"></div>

<div class="fancy-title title-border title-center topmargin-sm">
    <h4>Popular Brands</h4>
</div>

<ul class="clients-grid grid-6 nobottommargin clearfix"> <?php foreach ($favoricek as $value=> $item):  ?>
    <li><a href="#"><img src="<?= $item{'favori_resim'} ?>" alt="Clients"></a></li>
<?php endforeach; ?>
</ul>

</div>

<div class="section nobottommargin">
    <div class="container clearfix">

        <div class="col_one_fourth nobottommargin">
            <div class="feature-box fbox-plain fbox-dark fbox-small">
                <div class="fbox-icon">
                    <i class="icon-thumbs-up2"></i>
                </div>
                <h3>100% Original</h3>
                <p class="notopmargin">We guarantee you the sale of Original Brands.</p>
            </div>
        </div>

        <div class="col_one_fourth nobottommargin">
            <div class="feature-box fbox-plain fbox-dark fbox-small">
                <div class="fbox-icon">
                    <i class="icon-credit-cards"></i>
                </div>
                <h3>Payment Options</h3>
                <p class="notopmargin">We accept Visa, MasterCard and American Express.</p>
            </div>
        </div>

        <div class="col_one_fourth nobottommargin">
            <div class="feature-box fbox-plain fbox-dark fbox-small">
                <div class="fbox-icon">
                    <i class="icon-truck2"></i>
                </div>
                <h3>Free Shipping</h3>
                <p class="notopmargin">Free Delivery to 100+ Locations on orders above $40.</p>
            </div>
        </div>

        <div class="col_one_fourth nobottommargin col_last">
            <div class="feature-box fbox-plain fbox-dark fbox-small">
                <div class="fbox-icon">
                    <i class="icon-undo"></i>
                </div>
                <h3>30-Days Returns</h3>
                <p class="notopmargin">Return or exchange items purchased within 30 days.</p>
            </div>
        </div>

    </div>
</div>



</div>

</section><!-- #content end -->
<!-- Footer
============================================= -->
<footer id="footer" class="dark">



    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
            </div>

            <div class="col_half col_last tright">
                <div class="fright clearfix">
                    <a href="http://<?php echo $ayarcek['ayar_facebook']; ?>" class="social-icon si-small si-borderless si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="http://<?php echo $ayarcek['ayar_twitter']; ?>" class="social-icon si-small si-borderless si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="http://<?php echo $ayarcek['ayar_google']; ?>" class="social-icon si-small si-borderless si-gplus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>


                </div>

                <div class="clear"></div>

                <i class="icon-envelope2"></i> <?php echo $ayarcek['ayar_mail']; ?> <span class="middot">&middot;</span> <i
                    class="icon-headphones"></i> <?php echo $ayarcek['ayar_gsm']; ?> <span class="middot">&middot;</span> <i
                    class="icon-skype2"></i> IGUANA-IGT On Skype
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript"
        src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

<script type="text/javascript">

    var tpj = jQuery;
    tpj.noConflict();

    tpj(document).ready(function () {

        var apiRevoSlider = tpj('#rev_slider_ishop').show().revolution(
            {
                sliderType: "standard",
                jsFileLocation: "include/rs-plugin/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {},
                responsiveLevels: [1200, 992, 768, 480, 320],
                gridwidth: 1140,
                gridheight: 500,
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    disableFocusListener: false,
                },
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "ares",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-title-wrap">	<span class="tp-arr-titleholder">{{title}}</span> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
                }
            });

        apiRevoSlider.bind("revolution.slide.onloaded", function (e) {
            SEMICOLON.slider.sliderParallaxDimensions();
        });

    }); //ready

</script>

</body>
</html>