<?php 

include 'header.php';


if(isset($_GET['sef'])){

$kategorisor=$db->prepare("SELECT * FROM kategori where kategori_seourl=:seourl");
$kategorisor->execute(array(
        'seourl' => $_GET['sef']
));
$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
 $kategori_id=$kategoricek['kategori_id'];

    $asd = "SELECT * FROM urunfoto  join urun on urun.urun_id=urunfoto.urun_id join kategori on kategori.kategori_id=urun.kategori_id where kategori.kategori_id=:kategori_id ";
    $aaa = $db->prepare($asd);
    $aaa ->execute(array(
            'kategori_id'=>$kategori_id
    ));
    $bbb=$aaa->fetchall(PDO::FETCH_ASSOC);


}else{
    $asd = "SELECT * FROM urunfoto  join urun on urun.urun_id=urunfoto.urun_id join kategori on kategori.kategori_id=urun.kategori_id ";
    $aaa = $db->prepare($asd);
    $aaa ->execute();
    $bbb=$aaa->fetchall(PDO::FETCH_ASSOC);
}



?>
<?php

//bütün kayıtları bir kereye mahsus olmak üzere listeliyoruz; daha doğrusu, bir diziye aktarmak için verileri çekiyoruz

$query = "SELECT * FROM kategori order by kategori_sira ASC ";
$goster = $db->prepare($query);
$goster->execute();
$goster2=$goster->fetchAll(PDO::FETCH_ASSOC);









?>

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Portfolio Filter
                ============================================= -->

                <nav id="primary-menu" class="style-2">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <ul>
                                <?php foreach ($goster2 as $value) { ?>
                            <li class="current"><a  href="kategori-<?=seo($value["kategori_ad"])?>"><div class="navbar navbar-brand text text-warning"><?= $value['kategori_ad'] ?></div></a>

                            </li><?php } ?>


                        </ul>






                    </div>

                </nav>
                <br><br>



                <div class="clear"></div>

                <div id="portfolio" class="portfolio grid-container portfolio-2 portfolio-nomargin clearfix">
                    <?php foreach ($bbb as $item) { ?>
                    <article  class="portfolio-item  pf-icons"  >
                        <div class="portfolio-image">

                            <a href="#">
                                <img src="<?php echo $item['urunfoto_resimyol'] ?> "style="width: ">
                            </a>
                                <div class="portfolio-desc">
                                    <p><a href="portfolio-single.html"></a></p>
                                    <span class="entry-link"><a href="#" style="font-size: 20px"><?php echo $item['urun_ad'] ?></a></span>
                                    <ul class="entry-link">
                                        <li ><span class="color" style="font-size: 20px"><?php echo $item['urun_fiyat']  ?>€</span></li>

                                    </ul>


                                </div>

                            <div class="portfolio-overlay">
                                <a href="#" class="left-icon" data-lightbox="image"><i class="icon-shopping-cart"></i></a>
                                <a href="portfolio-single.html" class="right-icon"><i class="icon-line-plus"></i></a>
                            </div>
                        </div>

                    </article>
                    <?php } ?>






                </div>


            </div>

        </div>

    </section>



	
	<?php include 'footer.php'; ?>