<?php include 'header.php';

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilll.css">
    <title>Hastane Otomasyonu</title>
</head>
<body>
    <div class="adsoyad">
        <h4>Hoşgeldiniz <?php echo $kullanicicek['kullanici_adsoyad'] ;?></h4>
    </div>
    <div class="orta_div" id="randevu_div">

<form action="islem.php" method="post">

 <input type="date" name="tarih">

 <select name="sehir" class="hastane" >
         <option value="İl Seçiniz">İl Seçiniz</option>
    <option value="İstanbul">İstanbul</option>
    <option value="Ankara">Ankara</option>
    <option value="İzmir">İzmir</option>
    <option value="Adana">Adana</option>
    <option value="Adıyaman">Adıyaman</option>
    <option value="Afyonkarahisar">Afyonkarahisar</option>
    <option value="Ağrı">Ağrı</option>
    <option value="Aksaray">Aksaray</option>
    <option value="Amasya">Amasya</option>
    <option value="Antalya">Antalya</option>
    <option value="Ardahan">Ardahan</option>
    <option value="Artvin">Artvin</option>
    <option value="Aydın">Aydın</option>
    <option value="Balıkesir">Balıkesir</option>
    <option value="Bartın">Bartın</option>
    <option value="Batman">Batman</option>
    <option value="Bayburt">Bayburt</option>
    <option value="Bilecik">Bilecik</option>
    <option value="Bingöl">Bingöl</option>
    <option value="Bitlis">Bitlis</option>
    <option value="Bolu">Bolu</option>
    <option value="Burdur">Burdur</option>
    <option value="Bursa">Bursa</option>
    <option value="Çanakkale">Çanakkale</option>
    <option value="Çankırı">Çankırı</option>
    <option value="Çorum">Çorum</option>
    <option value="Denizli">Denizli</option>
    <option value="Diyarbakır">Diyarbakır</option>
    <option value="Düzce">Düzce</option>
    <option value="Edirne">Edirne</option>
    <option value="Elazığ">Elazığ</option>
    <option value="Erzincan">Erzincan</option>
    <option value="Erzurum">Erzurum</option>
    <option value="Eskişehir">Eskişehir</option>
    <option value="Gaziantep">Gaziantep</option>
    <option value="Giresun">Giresun</option>
    <option value="Gümüşhane">Gümüşhane</option>
    <option value="Hakkâri">Hakkâri</option>
    <option value="Hatay">Hatay</option>
    <option value="Iğdır">Iğdır</option>
    <option value="Isparta">Isparta</option>
    <option value="Kahramanmaraş">Kahramanmaraş</option>
    <option value="Karabük">Karabük</option>
    <option value="Karaman">Karaman</option>
    <option value="Kars">Kars</option>
    <option value="Kastamonu">Kastamonu</option>
    <option value="Kayseri">Kayseri</option>
    <option value="Kırıkkale">Kırıkkale</option>
    <option value="Kırklareli">Kırklareli</option>
    <option value="Kırşehir">Kırşehir</option>
    <option value="Kilis">Kilis</option>
    <option value="Kocaeli">Kocaeli</option>
    <option value="Konya">Konya</option>
    <option value="Kütahya">Kütahya</option>
    <option value="Malatya">Malatya</option>
    <option value="Manisa">Manisa</option>
    <option value="Mardin">Mardin</option>
    <option value="Mersin">Mersin</option>
    <option value="Muğla">Muğla</option>
    <option value="Muş">Muş</option>
    <option value="Nevşehir">Nevşehir</option>
    <option value="Niğde">Niğde</option>
    <option value="Ordu">Ordu</option>
    <option value="Osmaniye">Osmaniye</option>
    <option value="Rize">Rize</option>
    <option value="Sakarya">Sakarya</option>
    <option value="Samsun">Samsun</option>
    <option value="Siirt">Siirt</option>
    <option value="Sinop">Sinop</option>
    <option value="Sivas">Sivas</option>
    <option value="Şırnak">Şırnak</option>
    <option value="Tekirdağ">Tekirdağ</option>
    <option value="Tokat">Tokat</option>
    <option value="Trabzon">Trabzon</option>
    <option value="Tunceli">Tunceli</option>
    <option value="Şanlıurfa">Şanlıurfa</option>
    <option value="Uşak">Uşak</option>
    <option value="Van">Van</option>
    <option value="Yalova">Yalova</option>
    <option value="Yozgat">Yozgat</option>
    <option value="Zonguldak">Zonguldak</option>
</select>
<select name="hastane" class="hastane">
    <option value="hastane">Hastane Seçin</option>
    <option value="Şehir Hastanesi">Şehir Hastanesi</option>
    <option value="Numune Hastanesi">Numune Hastanesi</option>
    <option value="Balcalı Araştırma Hastanesi">Balcalı Araştırma Hastanesi</option>
    <option value="Çukurova Hastanesi">Çukurova Hastanesi</option> 
</select>
<select name="klinik" class="klinik">
    <option value="klinik">Klinik Seçin</option>
    <option value="Beyin ve Sinir Cerrahisi">Beyin ve Sinir Cerrahisi</option>
    <option value="Deri ve Zührevi Hastalıkları">Deri ve Zührevi Hastalıkları</option>
    <option value="Ortopedi Ve Travmatoloji">Ortopedi Ve Travmatoloji</option>
    <option value="Göz Hastalıkları">Göz Hastalıkları</option> 
</select>
<select name="doktor" class="doktor">
    <option value="doktor">doktor Seçin</option>
    <option value="Derya Karakaş">Derya Karakaş</option>
    <option value="Efe Köksal">Efe Köksal</option>
    <option value="Samet Öncü">Samet Öncü</option> 
    <option value="Yaren Sezgin">Yaren Sezgin</option>
</select>
<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ;?>">
<button name="randevu_kaydet" id="but">Randevuyu Kaydet</button>


</form>




    </div>
    <div class="orta_div" id="ailehekimi_div">
        <h3>Aile Hekimi</h3>
        <p>Aile hekiminize uygun saat bulunamamıştır.</p><p>Lütfen Sağ Taraftan Başka Doktordan Randevu Alınız.</p>
    </div>
</body>
</html>