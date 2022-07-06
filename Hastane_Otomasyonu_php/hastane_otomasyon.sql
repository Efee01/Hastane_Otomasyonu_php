-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220613.b3001e4d64
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Haz 2022, 21:38:36
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hastane_otomasyon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adsoyad` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_tc` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_password` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_tc`, `kullanici_password`) VALUES
(1, 'Efe KÖKSAL', '11111111111', '123'),
(2, 'Ece KÖKSAL', '12345678900', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE `randevu` (
  `randevu_id` int(11) NOT NULL,
  `randevu_sehir` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `randevu_tarih` date NOT NULL,
  `randevu_hastane` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `randevu_doktor` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `randevu_klinik` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `randevu_hasta_id` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`randevu_id`, `randevu_sehir`, `randevu_tarih`, `randevu_hastane`, `randevu_doktor`, `randevu_klinik`, `randevu_hasta_id`) VALUES
(1, 'Ankara', '2022-06-09', 'Şehir Hastanesi', 'Efe Köksal', 'Ortopedi', 1),
(2, 'Adana', '2022-06-08', 'Numune Hastanesi', 'Samet Öncü', 'Beyin ve Sinir Cerrahisi', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `randevu`
--
ALTER TABLE `randevu`
  ADD PRIMARY KEY (`randevu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `randevu`
--
ALTER TABLE `randevu`
  MODIFY `randevu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



