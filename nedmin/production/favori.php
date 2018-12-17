<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$favorisor=$db->prepare("SELECT * FROM favori");
$favorisor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Favori Listeleme <small>,

              <?php 

              if (@$_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif (@$_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="favori-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th><center>Resim</center></th>
                  <th><center>Ad</center></th>
                  <th><center>Url</center></th>
                  <th><center>Durum</center></th>
                  <th><center>SİL</center></th>

                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                while($favoricek=$favorisor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><img width="200" src="../../<?php echo $favoricek['favori_resim'] ?>"></td>
                 <td><?php echo $favoricek['favori_ad'] ?></td>
                 <td><?php echo $favoricek['favori_link'] ?></td>



                 <td><center><?php

                         if (@$favoricek['favori_durum']==0) {?>

                             <a href="../netting/islem.php?favori_id=<?php echo $favoricek['favori_id'] ?>&durum_one=1&favori_durum=ok"><button class="btn btn-warning btn-xs">PASİF</button></a>


                         <?php } elseif ($favoricek['favori_durum']==1) {?>


                             <a href="../netting/islem.php?favori_id=<?php echo $favoricek['favori_id'] ?>&durum_one=0&favori_durum=ok"><button class="btn btn-success btn-xs">AKTİF</button></a>

                         <?php } ?>


                     </center></td>

                    <td><center><a href="../netting/islem.php?favori_id=<?php echo $favoricek['favori_id']; ?>&favorisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>

                <?php } ?>
              </center>


            </td>




          </tr>






        </tbody>
      </table>

      <!-- Div İçerik Bitişi -->


    </div>
  </div>
</div>
</div>




</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
