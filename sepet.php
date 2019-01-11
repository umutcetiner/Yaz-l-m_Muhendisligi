<?php
include "header.php"; ?>


<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>S.No</th>
        <th style="width: 250px">Resim</th>
        <th style="width: 20px">Ad</th>
        <th style="width: 50px">Adet</th>
        <th style="width: 50px">Fiyat</th>
        <th style="width: 50px">SİL</th>


    </tr>
    </thead>

    <tbody>

    <?php


				$kullanici_id=$kullanicicek['kullanici_id'];
    $say=0;
    $topla=0;

				$sepetsor=$db->prepare("SELECT * FROM sepet where kullanici_id=:id");
				$sepetsor->execute(array(
					'id' => $kullanici_id
					));

				while($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) { $say++;



					$urun_id=$sepetcek['urun_id'];
					$urunsor=$db->prepare("SELECT * FROM urun JOIN urunfoto on urun.urun_id=urunfoto.urun_id where urun.urun_id=:urun_id");
					$urunsor->execute(array(
						'urun_id' => $urun_id
						));

					$uruncek=$urunsor->fetchAll(PDO::FETCH_ASSOC);

                     $topla+=$uruncek[0]['urun_fiyat']*$sepetcek['urun_adet'];


					?>


        <tr>
            <td width="20"  ><i style="font-size: 800%;"><?php echo $say ?></i></td>
            <td ><center><img width="300" src="<?php echo $uruncek[0]['urunfoto_resimyol'] ?>"></center></td>
            <td width="20"  ><center><i style="font-size: 200%;"><center><?php echo $uruncek[0]['urun_ad'] ?></i></center></td>
            <td ><i style="font-size: 200%;"><center><?php echo $sepetcek['urun_adet'] ?></center></i></td>
            <td ><center><i style="font-size: 200%;"><?php echo $uruncek[0]['urun_fiyat'] ?>€</i></center></td>
            <td ><center><i style="font-size: 200%;"><a href="nedmin/netting/islem.php?sepet_id=<?php echo $sepetcek['sepet_id']; ?>&sepetsil=ok" class="button button-3d button-rounded button-red button-light  " style="color: white"><i class="icon-trash2"></i>SİL</a></i></center></td>





        </tr>



    <?php  }

    ?>


    </tbody>
</table>
<br>
<div class="col-md-3" style="margin-left:  35%;">

    <div class="pricing-box">
        <div class="pricing-title">
            <h3>Toplam</h3>
        </div>
        <div class="pricing-price">
            <span class="price-unit">€</span><?php echo $topla ?><span class="price-tenure"></span>
        </div>
        <div class="pricing-features">

        </div>
        <div class="pricing-action">
            <a href="#" class="btn btn-danger btn-block btn-lg">Siparişi Tamamla</a>
        </div>
    </div>

</div>


<?php
include "footer.php"; ?>
