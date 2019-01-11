<?php include 'header.php' ?><br>

<div class="clearfix">

    <div class="row clear-bottommargin">

        <div class="col-md-3 col-sm-6 bottommargin clearfix">
            <div class="feature-box fbox-center fbox-bg fbox-plain">
                <div class="fbox-icon">
                    <a href="#"><i class="icon-map-marker2"></i></a>
                </div>
                <h3>KONUM<span class="subtitle"><?php echo $ayarcek['ayar_adres']; ?></span></h3>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 bottommargin clearfix">
            <div class="feature-box fbox-center fbox-bg fbox-plain">
                <div class="fbox-icon">
                    <a href="#"><i class="icon-phone3"></i></a>
                </div>
                <h3>ARAYIN<span class="subtitle"><?php echo  $ayarcek['ayar_gsm'] ?></span></h3>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 bottommargin clearfix">
            <div class="feature-box fbox-center fbox-bg fbox-plain">
                <div class="fbox-icon">
                    <a href="#"><i class="icon-facebook"></i></a>
                </div>
                <h3>TAKİP ET<span class="subtitle"><?php echo  $ayarcek['ayar_facebook'] ?></span></h3>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 bottommargin clearfix">
            <div class="feature-box fbox-center fbox-bg fbox-plain">
                <div class="fbox-icon">
                    <a href="#"><i class="icon-twitter2"></i></a>
                </div>
                <h3>TAKİP ET<span class="subtitle"><?php echo  $ayarcek['ayar_twitter'] ?></span></h3>
            </div>
        </div>

    </div>







</div>

<?php include 'footer.php' ?>