<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP İLE SAAT FARKI HESAPLATMASI</title>
</head>
<body>


<!--  fonksiyonu kullanmak istediginiz yerde veritabanından gelen tarih saat bilgisini yazdırabilir yada manuel olarak ekleyebilirsiniz  -->


Bu Gönderi <?php echo saat_farki("2023-07-11 01:57:33","saat_farki"); ?> Önce  Yüklendi


    
</body>
</html>



<?php 


    function saat_farki( $saat,$tip ) {
        date_default_timezone_get( 'Europe/İstanbul' );
        $şuanki_saat = time();
        $gelen_saat = strtotime( $saat );
        $fark = $şuanki_saat - $gelen_saat;
        $dakika = $fark / 60;
        $saniye_farki = floor( $fark - ( floor( $dakika ) * 60 ) );

        $saat = $dakika / 60;
        $dakika_farki = floor( $dakika - ( floor( $saat ) * 60 ) );

        $gun = $saat / 24;
        $saat_farki = floor( $saat - ( floor( $gun ) * 24 ) );

        $yil = floor( $gun/365 );
        $gun_farki = floor( $gun - ( floor( $yil ) * 365 ) );

        $array = array(
            'yil_farki' =>  $yil,
            'gun_farki' =>  $gun_farki,
            'saat_farki' =>  $saat_farki,
            'dakika_farki' =>  $dakika_farki,
            'saniye_farki' =>  $saniye_farki
        );

        return $array[$tip];

    }



?>