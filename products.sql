SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `details` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `details` (`id`, `name`, `image`, `price`) VALUES
(1, 'Neutra Chronograph Black Stainless Steel Watch', 'https://fossil.scene7.com/is/image/FossilPartners/FS5474_main?$sfcc_fos_hi-res$', 12495.00),
(2, 'Grant Automatic Black Leather Watch', 'https://fossil.scene7.com/is/image/FossilPartners/ME3101_main?$sfcc_fos_hi-res$', 14290.00),
(3, 'Grant Sport Automatic Luggage Leather Watch', 'https://fossil.scene7.com/is/image/FossilPartners/ME3140_main?$sfcc_fos_hi-res$', 16895.00),
(4, 'Minimalist Three-Hand Brown Leather Watch', 'https://fossil.scene7.com/is/image/FossilPartners/FS5551_main?$sfcc_fos_hi-res$', 8595.00),
(5, 'Black Dial Black Stainless Steel Strap Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/3147KM01_1.jpg?pView=pdp', 3895.00),
(6, 'Black Dial Silver Stainless Steel Strap Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/3089SM05_1.jpg?pView=pdp', 3950.00),
(7, 'White Dial Black Plastic Strap Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/3114PP01_1.jpg?pView=pdp', 1050.00),
(8, 'All Nighters Brown Dial Leather Strap Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/3165SL01_1.jpg?pView=pdp', 4250.00),
(9, 'White Dial Analog Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/3182KL48_1.jpg?pView=pdp', 4250.00),
(10, 'Silver Dial Black Plastic Strap Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/38028PP01J_1.jpg?pView=pdp', 1780.00),
(11, 'Valentine\'s Edition - White Dial Analog Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/38024PP28_1.jpg?pView=pdp', 850.00),
(12, 'Black Dial Black Silicone Strap Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/38024PP25_1.jpg?pView=pdp', 850.00),
(13, 'Blue Dial Stainless Steel Strap Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/3123SL05_1.jpg?pView=pdp', 1280.00),
(14, 'Deadpool\'s Special Edition Analog Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/9915PP75_1.jpg?pView=pdp', 995.00),
(15, 'Sun Burn Watch - Blue Dial With Leather Strap', 'https://staticimg.titan.co.in/Fastrack/Catalog/3234SL01_1.jpg?pView=pdp', 2350.00),
(16, 'White Dial- With Leather Strap Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/3072NL01_1.jpg?pView=pdp', 5295.00),
(17, 'Reflex Beat Black Smart Band With Active Heart Rate Monitor', 'https://staticimg.titan.co.in/Fastrack/Catalog/SWD90066PP01_1.jpg?pView=pdp', 2195.00),
(18, 'Iron Man Special Edition Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/9915PP90_1.jpg?pView=pdp', 995.00),
(19, 'Road Trip Grey Dial Stainless Steel Strap Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/3199NM04_1.jpg?pView=pdp', 2595.00),
(20, 'Road Trip Black Dial Leather Strap Watch', 'https://staticimg.titan.co.in/Fastrack/Catalog/3198AL01_1.jpg?pView=pdp', 2150.00),
(21, 'Gen 5 Smartwatch The Carlyle HR Black Silicone', 'https://fossil.scene7.com/is/image/FossilPartners/FTW4025_main?$sfcc_fos_large$', 22995.00),
(22, 'NXT Black Dial Metal Strap Watch', 'https://staticimg.titan.co.in/Sonata/Catalog/7137AM02_1.jpg?pView=pdp', 1950.00),
(23, 'NXT Black Dial Leather Strap Watch', 'https://staticimg.titan.co.in/Sonata/Catalog/7137AL02_1.jpg?pView=pdp', 1600.00),
(24, 'Stride - Hybrid Smartwatch With Black Dial & Black Leather Strap', 'https://staticimg.titan.co.in/Sonata/Catalog/7130PL03_1.jpg?pView=pdp', 2095.00),
(25, 'Tissot T-TOUCH EXPERT SOLAR', 'https://www.tissotwatches.com/media/shop/catalog/product/cache/all/image/920x/17f82f742ffe127f42dca9de82fb58b1/T/0/T091.420.44.051.00_3.png', 32650.00),
(26, 'Townsman Automatic Black Leather Watch', 'https://fossil.scene7.com/is/image/FossilPartners/ME3170_main?$sfcc_fos_large$', 16495.00),
(27, 'Forrester Chronograph Brown Leather Watch', 'https://fossil.scene7.com/is/image/FossilPartners/FS5696_main?$sfcc_fos_large$', 9495.00),
(28, 'Forrester Chronograph Black Stainless Steel Watch', 'https://fossil.scene7.com/is/image/FossilPartners/FS5697_main?$sfcc_fos_large$', 8500.00),
(29, 'Hybrid Smartwatch Neutra Brown Leather', 'https://fossil.scene7.com/is/image/FossilPartners/FTW1177_main?$sfcc_fos_large$', 11995.00),
(30, 'The Minimalist Two-Hand Black Leather Watch', 'https://fossil.scene7.com/is/image/FossilPartners/FS5447_main?$sfcc_fos_large$', 10995.00),
(31, 'Champagne Dial Automatic Watch with Leather Strap', 'https://staticimg.titan.co.in/Titan/Catalog/90110SL02_1.jpg?pView=pdp', 12995.00),
(32, 'Octane Silver Dial Silver Strap Watch', 'https://staticimg.titan.co.in/Titan/Catalog/90109KM01_1.jpg?pView=pdp', 7995.00),
(33, 'Octane Hyper Lume Watch with Hybrid Strap', 'https://staticimg.titan.co.in/Titan/Catalog/90114KP02_1.jpg?pView=pdp', 8495.00),
(34, 'Octane Black Dial Red Strap Watch', 'https://staticimg.titan.co.in/Titan/Catalog/90109KP03_1.jpg?pView=pdp', 8000.00),
(35, 'Octane White Dial Leather Strap Watch', 'https://staticimg.titan.co.in/Titan/Catalog/90103KL02_1.jpg?pView=pdp', 5999.00),
(36, 'Octane Blue Dial Leather Strap Watch', 'https://staticimg.titan.co.in/Titan/Catalog/90106KL01_1.jpg?pView=pdp', 4999.00),
(37, 'Octane Black Dial Stainless Steel Strap Watch', 'https://staticimg.titan.co.in/Titan/Catalog/90091KM01_1.jpg?pView=pdp', 5595.00),
(38, 'Octane White Chronograph Watch', 'https://staticimg.titan.co.in/Titan/Catalog/1765KM01_1.jpg?pView=pdp', 11395.00),
(39, 'Octane Black Chronograph Watch', 'https://staticimg.titan.co.in/Titan/Catalog/1761KP01_1.jpg?pView=pdp', 8985.00),
(40, 'Octane Blue Chronograph Watch', 'https://staticimg.titan.co.in/Titan/Catalog/1762KL01_1.jpg?pView=pdp', 7499.00);

ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;