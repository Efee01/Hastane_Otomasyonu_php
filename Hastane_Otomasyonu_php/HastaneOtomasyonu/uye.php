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
    <header>
        <h2>Hastane Otomasyonu</h2>
    
    </header><br>
    <div class="tableOuter"><br>
        <h1>Üye ol</h1>
        <form action="islem.php" method="post">
            <div class="user">
                <input type="text" name="kullanici_adsoyad" placeholder="Ad Soyad">
            </div>
            <div class="user">
                <input type="text" name="kullanici_tc" placeholder="Tc Kimlik No">
            </div>
            <div class="pass">
                <input type="password" name="kullanici_password" placeholder="Şifre">
            </div>
            <button type="submit" id="giris" class="sub" name="kullanicikaydet">Üye ol</button>
            <br>
        </form>
        <a href="index.php"><button type="submit" id="uye" class="sub">Geri Dönünüz</button></a><br><br>
        <img src="hos.png" alt="hastaneicon" id="imgg" width="100">
    </div>
</body>
</html>