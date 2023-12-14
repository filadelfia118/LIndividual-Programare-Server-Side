-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: dec. 14, 2023 la 06:24 PM
-- Versiune server: 10.4.28-MariaDB
-- Versiune PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `lucruindividual`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `produse`
--

CREATE TABLE `produse` (
  `id` int(8) NOT NULL,
  `image` varchar(280) NOT NULL,
  `category` text NOT NULL,
  `titlu` varchar(255) NOT NULL,
  `autor` varchar(120) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `descriere` text NOT NULL,
  `pret` float NOT NULL,
  `stoc` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `isbn` int(16) NOT NULL,
  `an_publicare` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `produse`
--

INSERT INTO `produse` (`id`, `image`, `category`, `titlu`, `autor`, `gen`, `descriere`, `pret`, `stoc`, `created_at`, `updated_at`, `isbn`, `an_publicare`) VALUES
(31, 'https://darwin.md/images/product/thumbs/2023/09/darwin-samsung-galaxy-a03-32-gb-black-70196.webp', 'Telefoane', 'Smartphone', 'Samsung', 'Galaxy A03', 'Tehnologie de fabricație : 12 nm\r\nCamera frontală : 5 MP\r\nNr. nuclee : 8\r\nCapacitate acumulator : 5000 mAh', 2190, 30, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(32, 'https://darwin.md/images/product/2022/12/darwin-samsung-galaxy-a03-4-gb-64-gb-red-035.webp', 'Telefoane', 'Smartphone', 'Samsung', 'Galaxy A03 64 GB', 'Tehnologie de fabricație : 12 nm\r\nCamera frontală : 5 MP\r\nNr. nuclee : 8', 2023, 25, '2023-12-05 05:55:21', '2023-12-07 11:55:35', 0, 0),
(33, 'https://darwin.md/images/product/2022/01/darwin-laptop-acer-predator-helios-300-ph315-54-abyssal-black-063.webp', 'Laptop-uri', 'Laptop Acer', 'Acer', 'Predator Helios 300 ', 'Rezoluție display : Full HD\r\nIluminarea tastaturii : RGB\r\nSegment : Gaming', 5300, 20, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(34, 'https://darwin.md/images/product/2022/06/darwin-laptop-asus-rog-strix-scar-15-g533zw-black-08.webp', 'Laptop-uri', 'Laptop Asus', 'Asus', 'ROG Strix Scar 15 ', 'Tip memorie : DDR5\r\nIluminarea tastaturii : RGB\r\nSegment : Gaming', 7000, 15, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(35, 'https://darwin.md/images/product/2022/12/darwin-trotineta-electrica-xiaomi-mi-pro-2-black-099.webp', 'Trotinete', 'Trotinetă electrică ', 'Xiaomi', 'Xiaomi Mi Pro 2 Black', 'Vârsta recomandată : 16+\r\nViteza max : 25 km/h\r\nTimp de încărcare : 9 ore', 13900, 40, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(36, 'https://darwin.md/images/product/2022/05/motocicleta-pentru-copii-rastar-bmw-motorcycle.webp', 'Motociclete', 'Motocicletă pentru copii', 'Rastar', 'Rastar BMW Motorcycle White', 'O călătorie într-un peisaj post-apocaliptic și o relație între tată și fiu.', 3480, 10, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(37, 'https://darwin.md/images/product/2023/11/darwin-acumulator-segway-5583201-black-365501.webp', 'Accesorii', 'Acumulator ', 'Segway', 'Segway 5583201 Black ', 'Pentru modelul : Ninebot KickScooter\r\nTipul bateriei : Li-Ion\r\nCapacitate acumulator : 5200 mAh\r\nBrand : Segway', 1999, 18, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(38, 'https://darwin.md/images/product/2023/06/darwin-drona-syma-z4w-light-gray-257927.webp', 'Drone', 'Dronă Syma ', 'Syma', 'Syma Z4W Light Gray', 'Segment : Personal\r\nTemperatura de functionare : 0 °C ~ +40 °C\r\nTimpul de lucru : până la 10 minute\r\nTimp de încărcare : 60 min', 8980, 22, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(39, 'https://darwin.md/images/product/thumbs/2023/09/darwin-apple-iphone-15-pro-max-512-gb-blue-titanium-314213.webp', 'Apple iPhone', 'Apple iPhone 15 Pro Max ', 'Apple', 'iPhone 15 Pro Max', 'Tehnologie de fabricație : 3 nm\r\nCamera frontală : 12 MP\r\nMemorie RAM : 8 GB', 25000, 12, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(40, 'https://darwin.md/images/product/2023/09/darwin-apple-iphone-15-plus-256-gb-yellow-314322.webp', 'Apple iPhone', 'Apple iPhone 15 ', 'Apple ', 'iPhone 15 Plus 256 GB Yellow', 'Tehnologie de fabricație : 4 nm\r\nCamera frontală : 12 MP\r\nMemorie internă : 256 GB', 26000, 28, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(41, 'https://darwin.md/images/product/thumbs/2023/02/ceas-inteligent-garmin-venu-sq-2-music-edition-010-02700-11-ivory-04.webp', 'Gadget', 'Garmin Venu Sq 2 – Music Edition Ivory', 'Garmin', 'Ceasuri Inteligente', 'Timpul de lucru : până la 11 zile\r\nMesagerie : SMS\r\nTouchscreen : Da\r\nRezoluție (px) : 320 x 360', 16000, 30, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(42, 'https://darwin.md/images/product/2022/06/power-bank-20000-mah-cellularline-pbnewtank20000k-20-w-black-061.webp', 'Power Bank ', 'Power Bank 20000 mAh Cellularline', 'Cellularline', 'PBNEWTANK20000K (20 W) Black', 'Protocoale suportate : PD\r\nCompatibilitate : Universal\r\nCapacitate acumulator : 20000 mAh\r\nBrand : Cellularline', 596, 25, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(43, 'https://darwin.md/images/product/2021/12/darwin-power-bank-10000-mah-xiaomi-pb100lzm-5-w-black-06.webp', 'Power Bank', 'Power Bank 10000 mAh ', 'Xiaomi', 'PB100LZM (5 W) Black', 'Compatibilitate : Universal\r\nCapacitate acumulator : 10000 mAh\r\nBrand : Xiaomi\r\nMaterialul carcasei : Plastic', 800, 20, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(44, 'https://darwin.md/images/product/2023/08/darwin-nothing-phone-2-5g-512-gb-dark-gray-305733.webp', 'Telefoane', 'Nothing Phone ', 'Nothing', '2 5G 512 GB Dark Gray', 'Tehnologie de fabricație : 4 nm\r\nCamera frontală : 32 MP\r\nNr. nuclee : 8\r\nCapacitate acumulator : 4700 mAh', 18000, 15, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(45, 'https://darwin.md/images/product/2022/06/darwin-laptop-lenovo-ideapad-3-15iml05-platinum-gray-055.webp', 'Laptop-uri', 'Laptop Lenovo IdeaPad 3 ', 'Lenovo', '15IML05 Platinum Gray', 'Segment : Home and Office\r\nUSB 2.0 : 1\r\nRezoluție display : Full HD\r\nMemorie Cache : 6 MB SmartCache', 22000, 40, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(46, 'https://darwin.md/images/product/2022/10/darwin-fitness-tracker-xiaomi-mi-band-7-black-084.webp', 'Gadget ', 'Fitness Tracker Xiaomi ', 'Xiaomi', 'Mi Band 7 Black', 'Timp de încărcare : 2 ore\r\nTimpul de lucru : până la 14 zile\r\nCompatibilitate : Android, iOS\r\nTouchscreen : Da', 900, 10, '2023-12-05 05:55:21', '2023-12-07 11:56:01', 0, 0),
(47, 'https://darwin.md/images/product/2022/08/darwin-bicicleta-eliptica-spokey-alear-black-098.webp', 'Sport și sănătate', 'Bicicletă eliptică ', 'Spokey', 'Spokey Alear Black', 'Senzor de ritm cardiac : Da\r\nLungimea minimă a pasului : 330 mm\r\nLungimea maximă a pasului : 430 mm\r\nContometru : Da', 8700, 18, '2023-12-05 05:55:21', '2023-12-05 05:55:21', 0, 0),
(55, '', '', 'Tableta', 'Apple', ' iPad 2022', 'Tabletă Apple iPad 2022', 10960, 3, '2023-12-14 15:12:59', '2023-12-14 15:12:59', 0, 0);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `produse`
--
ALTER TABLE `produse`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
