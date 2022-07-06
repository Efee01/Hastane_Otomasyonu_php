<?php
ob_start();
session_start();

include 'baglan.php';
$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
$kullanicisor->execute([
    'kullanici_tc' => $_SESSION['userkullanici_tc']
]);
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
if($say==0){
    header('location:index.php?izinsizgiris');
    exit;
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Hastane Otomasyonu</title>
</head>
<body>
    <div class="ust_bar">
    <img src="hos.png" alt="hastaneicon" id="img" width="100">
        <a href="anasayfa.php" ><h1>Hastane Otomasyonu</h1></a>
        <div class="menu">
            <a href="hesap.php"><h5>Hesap Bilgileri</h5></a>
            <a href="randevu.php"><h5>Randevu Bilgileri</h5></a>
        </div>


    </div>
    <a href="cikis.php"><div class="cikis">
        Çıkış Yap
    </div></a>

</body>
</html>