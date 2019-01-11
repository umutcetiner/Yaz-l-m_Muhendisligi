<?php
include "header.php";


?>
<div class="col_two_third col_last nobottommargin">


    <h3>Kayıt Olabilirsiniz</h3>



    <?php

    if (@$_GET['durum']=="farklisifre") {?>

        <div >
            <strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
        </div>

    <?php } elseif (@$_GET['durum']=="eksiksifre") {?>

        <div>
            <strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
        </div>
    <?php } elseif (@$_GET['durum']=="loginbasarili") {?>

        <div>
            <strong>BAŞARILI,</strong> Kayıt başarılı
        </div>
    <?php } elseif (@$_GET['durum']=="mukerrerkayit") {?>

        <div >
            <strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
        </div>

    <?php } elseif (@$_GET['durum']=="basarisiz") {?>

        <div >
            <strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
        </div>

    <?php }
    ?>

    <form id="register-form" name="register-form" class="nobottommargin" action="nedmin/netting/islem.php" method="post">

        <div class="col_half">
            <label for="register-form-name">İsim Soyisim:</label>
            <input type="text" id="register-form-name" name="kullanici_adsoyad"  class="form-control">
        </div>

        <div class="col_half col_last">
            <label for="register-form-email">Mail:</label>
            <input type="text" id="register-form-email" name="kullanici_mail"  class="form-control">
        </div>

        <div class="clear"></div>

        <div class="col_half">
            <label for="register-form-username">Telefon:</label>
            <input type="text" id="register-form-username" name="kullanici_gsm"  class="form-control">
        </div>





        <div class="col_half col_last">
            <label for="register-form-password">Şifre:</label>
            <input type="password" id="register-form-password" name="kullanici_passwordone"  class="form-control">
        </div>

        <div class="col_half">
            <label for="register-form-password">Şifre Tekrar:</label>
            <input type="password" id="register-form-password" name="kullanici_passwordtwo"  class="form-control">
        </div>



        <div class="clear"></div>

        <div class="col_full nobottommargin"><center>
            <button class="button button-3d button-black nomargin" id="register-form-submit" name="kullanicikaydet" value="register">Kaydol</button></center>
        </div>

    </form>

</div>

<?php include "footer.php" ;?>
