-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 06:05 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `desktop`
--

CREATE TABLE `desktop` (
  `id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_cpu` varchar(60) NOT NULL,
  `d_ram` varchar(60) NOT NULL,
  `d_ssd` varchar(60) NOT NULL,
  `d_gpu` varchar(60) NOT NULL,
  `d_brand` varchar(40) NOT NULL,
  `d_price` float NOT NULL,
  `d_img` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desktop`
--

INSERT INTO `desktop` (`id`, `d_name`, `d_cpu`, `d_ram`, `d_ssd`, `d_gpu`, `d_brand`, `d_price`, `d_img`, `created_at`, `updated_at`) VALUES
(1, 'Dell Inspiron Mini Tower 3020- i3-13100-8GB-256GB', '13th Gen Intel® Core™ i3-13100', '8GB DDR4-3200Mhz', 'SSD 256GB M.2', 'Intel® UHD Graphics 730', 'Dell', 449, 'upload/imgs/products/1717859678.png', '2024-06-05 05:41:11', '2024-06-08 08:14:38'),
(2, 'Dell Vostro 3020MT- i7-13700-8GB-512GB-UHD 730-Wi-Fi 6 -Bluet 5.2-Dos (3y)', '13th Gen Intel® Core™ i7-13700', '8GB DDR4 (3200Mhz)', 'SSD 512GB M.2', 'Intel® UHD Graphics 730', 'Dell', 777, 'upload/imgs/products/1717592570.png', '2024-06-05 06:02:50', '2024-06-05 06:02:50'),
(3, 'Desktop Lenovo Think Center TC M70t Gen4-i5-13500-16GB-512GB SSD M.2-UMA-DVD-WLAN-Win 11 Pro (3Y)', '13th Gen Intel Core i5-13500', '16GB DDR4(16GBx1)', 'SSD 512GB', 'Intel® UHD Graphics', 'Lenovo', 799, 'upload/imgs/products/1717592642.png', '2024-06-05 06:04:02', '2024-06-05 06:04:02'),
(4, 'Acer Veriton S2690G-FR180W12V-Ci5-12500-16GB-SSD 256GB + SATA 1TB-Win11PRO', '12th Gen Intel Core i5-12500', '16GB DDR4(8GBx2)', 'SSD 256GB+1TB SATA', 'Intel® UHD Graphics', 'Acer', 1039, 'upload/imgs/products/1717592713.png', '2024-06-05 06:05:13', '2024-06-05 06:05:13'),
(5, 'Dell Vostro 3020MT-i5-13400-8GB-512GB-UHD 730- Wi-Fi 6-Bluet 5.2 KB&MS Dos (3Y)', '13th Gen Intel® Core™ i5-13400', '8GB DDR4 (3200Mhz)', 'SSD 512GB M.2', 'Intel® UHD Graphics 730', 'Dell', 577, 'upload/imgs/products/1717592787.png', '2024-06-05 06:06:27', '2024-06-05 06:06:27'),
(6, 'Dell Vostro Mini Tower 3020 - i3-13100-8GB-256GB', '13th Gen Intel® Core™ i3-13100', '8GB DDR4-3200Mhz', 'SSD 256GB M.2', 'Intel® UHD Graphics 730', 'Dell', 469, 'upload/imgs/products/1717592842.png', '2024-06-05 06:07:22', '2024-06-05 06:07:22'),
(7, 'Dell Vostro 3020MT- i7-13700-8GB-512GB-UHD 730-Wi-Fi 6 -Bluet 5.2-Dos (3y)', '13th Gen Intel® Core™ i7-13700', '8GB DDR4 (3200Mhz)', 'SSD 512GB M.2', 'Intel® UHD Graphics 730', 'Dell', 777, 'upload/imgs/products/1717859441.png', '2024-06-08 08:10:41', '2024-06-08 08:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `l_shortname` varchar(60) NOT NULL,
  `l_longname` varchar(255) NOT NULL,
  `l_cpu` varchar(60) NOT NULL,
  `l_ram` varchar(60) NOT NULL,
  `l_ssd` varchar(60) NOT NULL,
  `l_gpu` varchar(60) NOT NULL,
  `l_screen` varchar(60) NOT NULL,
  `l_battery` varchar(40) NOT NULL,
  `l_warranty` varchar(1) NOT NULL,
  `l_brand` varchar(40) NOT NULL,
  `l_desc` text DEFAULT NULL,
  `l_oprice` float NOT NULL,
  `l_nprice` float NOT NULL,
  `l_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `l_shortname`, `l_longname`, `l_cpu`, `l_ram`, `l_ssd`, `l_gpu`, `l_screen`, `l_battery`, `l_warranty`, `l_brand`, `l_desc`, `l_oprice`, `l_nprice`, `l_img`, `created_at`, `updated_at`) VALUES
(7, 'ASUS X515 X1500KA-EJ292W', 'ASUS X515 X1500KA-EJ292W Black Celeron N4500- 4GB-512GB SSD-15.6\"FHD16:9-37WH-Backlit KB-BP-Win11-3Y', 'Intel® Celeron® N4500', '4GB DDR4 SO-DIMM', 'SSD 512GB M.2', 'Intel® UHD Graphics', '15.6\'\' FHD (1920 x 1080)', '2-cell integrated', '3', 'Asus', '-CPU / Processor: Intel® Celeron® N4500 Processor (1.1 GHz up to 2.8 GHz, 2 cores, 4M Cache )\r\n-Operating System: Window 11Home Single Language (64Bit)\r\n-RAM / Memory: 4GB DDR4 SO-DIMM (No slots for upgrade)\r\n-Storage: 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\n-Graphic: Intel® UHD Graphics\r\n-Display: 15.6-inch FHD (1920 x 1080) 16:9 aspect ratio LED Backlit, 60Hz refresh rate, 83% Screen-to-body ratio, Anti-glare display, 45% NTSC color gamut, 200Nit Brightness\r\n-Optical Drive: None\r\n-Webcame: 720P HD camera\r\n-Wireless: Wi-Fi 5(802.11ac) (Dual band) 1*1 + Bluetooth® 5.1 Wireless Card (*Bluetooth® version may change with OS version different.)\r\n-Network: None\r\n-Audio: SonicMaster Built-in speaker Built-in microphone with Cortana support\r\n-Ports : 1x USB 3.2 Gen 1 Type-A, 1x USB 3.2 Gen 1 Type-C, 2x USB 2.0 Type-A, 1x HDMI 1.4, 1x 3.5mm Combo Audio Jack, 1x DC-in\r\n-Keyboard: Backlit Chiclet Keyboard with Num-key\r\n-Battery: 37WHrs, 2S1P, 2-cell Li-ion\r\n-Weight: 1.80 kg (3.97 lbs)\r\n-What\'s in box: Backpack\r\n-Warranty: 3Years (2Y Warranty+1st Year Local Perfect Warranty) (6Month battery , No Warranty Adapter & Software)', 349, 299, 'upload/imgs/products/1717252323.png', '2024-06-01 07:32:03', '2024-06-01 07:32:03'),
(8, 'Asus Vivobook Slate T3304GA-LQ005W', 'Asus Vivobook Slate T3304GA-LQ005W BLACK i3-N300-8GB-256GB-13\"FHD OLED-50WH-60Hz-Win11-2Y', 'Intel® Core™ i3-N300', '8GB LPDDR5 on board', 'SSD 256GB M.2', 'Intel® UHD Graphics', '13.3FHD (1920 x 1080)OLED', '2-cell', '3', 'Asus', '-CPU / Processor: Intel® Core™ i3-N300 Processor 0.8 GHz (6MB Cache, up to 3.8 GHz, 8 cores, 8 Threads)\r\n-Operating System: Window 11Home Single Language (64Bit)\r\n-RAM / Memory: 8GB LPDDR5 on board (Max Total system memory up to:8GB (No slots for upgrade))\r\n-Storage: 256GB UFS 2.1\r\n-Graphic: Intel® UHD Graphics\r\n-Display: 13.3-inch, FHD (1920 x 1080) OLED 16:9 aspect ratio, 0.2ms response time, 60Hz refresh rate, 550nits HDR peak brightness,\r\n              100% DCI-P3 color gamut, 1,000,000:1, VESA CERTIFIED Display HDR True Black 500, 1.07 billion colors, PANTONE Validated, Glossy display,\r\n              65% less harmful blue light, TÜV Rheinland-certified, SGS Eye Care Display, Touch screen, (Screen-to-body ratio)83%, With stylus support\r\n-Optical Drive: None\r\n-Webcame: 1080p FHD camera 13.0M camera\r\n-Wireless: Wi-Fi 6(802.11ax) (Dual band) 2*2 + Bluetooth® 5.2 Wireless Card (*Bluetooth® version may change with OS version different.)\r\n-Network: None\r\n-Audio: Smart Amp Technology Built-in 4-way stereo speakers Built-in array microphone with Cortana voice-recognition support\r\n-Ports: 2x USB 3.2 Gen 2 Type-C support display / power delivery, 1x 3.5mm Combo Audio Jack, Micro SD card reader\r\n-Battery: 50WHrs, 2S1P, 2-cell Li-ion\r\n-Weight: 0.80 kg (1.76 lbs)\r\n-What\'s in box: Sleeve, Stand, Stylus (ASUS Pen 2.0 SA203H-MPP2.0 support)\r\n-Warranty: 3Years (2Y Warranty+1st Year Local Perfect Warranty) (6Month battery, No Warranty Adapter & Software)', 799, 769, 'upload/imgs/products/1717252399.png', '2024-06-01 07:33:19', '2024-06-01 07:33:19'),
(9, 'Asus Zenbook14 Flip OLED', 'Asus Zenbook14 Flip OLED UP3404VA-KN058W BLUE i7-1360P-16GB OB-1TB-Win11-14\"2.8K OLED Touch-2Y', '13th Gen Core i7-1360P', '16GB LPDDR5 on board', 'SSD 1TB M.2', 'Intel Iris Xᵉ Graphics', '14.0-inch, 2.8K OLED Touch', '4-cell integrated', '2', 'Asus', '-CPU / Processor : 13Generation Intel® Core™ i7-1360P Processor  (2.2 GHz up to 5.0 GHz,18MB Cache, 12 cores, 16 Threads)\r\n-Operating System : Window 11 Home Single Languge (64Bit)\r\n-RAM / Memory : 16GB LPDDR5 on board (Total system memory upgradeable to:16GB)\r\n-Storage :    1TB M.2 NVMe™ PCIe® 4.0 SSD\r\n-Graphics :    Intel Iris Xᵉ Graphics\r\n-Display : 14.0-inch, 2.8K (2880 x 1800) OLED 16:10 aspect ratio, 0.2ms response time, 90Hz refresh rate, 400nits, 550nits HDR peak brightness, 100% DCI-P3 color gamut, 1,000,000:1, VESA CERTIFIED Display HDR True Black 500, 1.07                    billion colors, PANTONE Validated, Glossy display, 70% less harmful blue light, TÜV Rheinland-certified, SGS Eye Care Display, Touch screen, (Screen-to-body ratio)87%, With stylus support\r\n-Optical Drive : None\r\n-Wireless :    Wi-Fi 6E(802.11ax) (Dual band) 2*2 + Bluetooth® 5\r\n-Network :    NONE\r\n-Sound : Smart Amp Technology Built-in speaker Built-in array microphone harman/kardon (Premium) with Cortana voice-recognition support\r\n-Webcam:  FHD camera with IR function to support Windows Hello\"\r\n-Ports : 1x USB 3.2 Gen 2 Type-A, 2x Thunderbolt™ 4 supports display / power delivery,  1x HDMI 2.1 TMDS, 1x 3.5mm Combo Audio Jack\r\n-Keyboard: Backlit Chiclet Keyboard, 1.4mm Key-travel, Touchpad\r\n-FingerPrint: None\r\n-Battery: 75WHrs, 2S2P, 4-cell Li-ion\r\n-Weight:  1.50 kg (3.31 lbs)\r\n-What\'s in box: Sleeve,  ASUS Pen Stylus (ASUS Pen 2.0 SA203H-MPP2.0 support)\r\n-Warranty:  Warranty: 2 Years Warranty + 1st Year Local Perfect Warranty (no warranty on adapter & software)', 1349, 1299, 'upload/imgs/products/1717252514.png', '2024-06-01 07:35:14', '2024-06-01 07:35:14'),
(10, 'ASUS ROG Strix G18 G814JU-N6128W', 'ASUS ROG Strix G18 G814JU-N6128W Gray i7-13650HX-16GB-512GB-RTX™4050-18\"QHD+16:10-90WHr-W11-BP+MS-2Y', 'Intel® Core™ i7-13650HX', '16GB DDR5 5600B', 'SSD 512GB M.2', 'NVIDIA RTX4050 6GB', '18 QHD+ (2560 x 1600)', '4-cell', '3', 'Asus', '-CPU / Processor: 13th Gen Intel® Core™ i7-13650HX Processor (2.6 GHz up to 4.9 GHz, 24M Cache, 14 cores: 6 P-cores and 8 E-cores)\r\n-Operating System: Window 11Home Single Language (64Bit)\r\n-RAM / Memory: 16GB DDR5-5600B (Free one slot Max Total system support up to: 32GB)\r\n-Storage: 512GB PCIe® 4.0 NVMe™ M.2 SSD (Free one slot M.2)\r\n-Graphic: NVIDIA® GeForce RTX™ 4050 Laptop GPU 6GB GDDR6 (ROG Boost: 2420MHz* at 140W\r\n                   (2370MHz Boost Clock+50MHz OC, 115W+25W Dynamic Boost)\r\n-Display: 18-inch QHD+ 16:10 (2560 x 1600, WQXGA) ROG Nebula Display, 3ms Response Time (G2G),\r\n                  Value IPS-level, Anti-glare display, DCI-P3 100%, sRGB:100%, Refresh Rate:240Hz, Optimus\r\n-Optical Drive: None\r\n-Webcam: 720P HD camera\r\n-Wireless : Wi-Fi 6E(802.11ax) (Triple band) 2*2 + Bluetooth® 5.2 Wireless Card\r\n                     (*Bluetooth® version may change with OS version different.)\r\n-Network: 10/100/1000 Mbps\r\n-Audio: 2-speaker system with Smart Amplifier Technology\r\n              (AI noise-canceling technology Dolby Atmos Hi-Res certification Smart Amp Technology)\r\n-Ports: 1x RJ45 LAN port, 1x Thunderbolt™ 4 support DisplayPort™,\r\n             1x USB 3.2 Gen 2 Type-C support DisplayPort™ / power delivery / G-SYNC, 2x USB 3.2 Gen 2 Type-A,\r\n             1x HDMI 2.1 FRL, 1x 3.5mm Combo Audio Jack.\r\n-Keyboard: Backlit Chiclet Keyboard 4-Zone RGB\r\n-Battery:90WHrs, 4S1P, 4-cell Li-ion\r\n-Weight: 3.00 Kg (6.61 lbs)\r\n-What\'s in box: ROG backpack & ROG Impact Gaming Mouse\r\n-Warranty: 3Years (2Y Warranty+1st Year Local Perfect Warranty) (6Month battery , No Warranty Adapter & Software)', 1499, 1449, 'upload/imgs/products/1717252632.png', '2024-06-01 07:37:12', '2024-06-01 07:37:12'),
(11, 'ASUS ROG Strix G18 G814JIR-N6026W', 'ASUS ROG Strix G18 G814JIR-N6026W Volt-GREEN- i9-14900HX-16GB-1TB-RTX™4070 8GB-18\"QHD-W11-3Y', '14th Gen core i9-14900HX', '16GB DDR5 5600MHz', 'SSD 1TB M.2', 'NVIDIA RTX 4070 8GB', '18 QHD+(2560 x 1600)', '4-cell', '3', 'Asus', '-CPU / Processor: 14th Gen Intel® Core™ i9-14900HX Processor (2.39GHz up to 5.80GHz, 12M Cache, 24 cores: 8P-cores and 16E-cores)\r\n-Operating System: Window 11Home Single Language (64Bit)\r\n-RAM / Memory: 16GB DDR5 5600MHz (8GBx2) (2slots Support up to 32GB)\r\n-Storage: 1TB PCIe® 4.0 NVMe™ M.2 SSD (support one more M.2 )\r\n-Graphic: NVIDIA® GeForce RTX™ 4070 8GB GDDR6 Laptop ROG Boost: 2225MHz* at 140W (2175MHz Boost Clock+50MHz OC, 115W+25W Dynamic Boost)\r\n-Display: 18-inch, QHD+ (2560 x 1600, WQXGA) 16:9, anti-glare display, sRGB: 100%, Refresh Rate:240Hz, IPS-level, Adaptive-Sync, MUX Switch + Optimus, ROG Nebula Display\r\n-Optical Drive : None\r\n-Webcame: 720P HD camera\r\n-Wireless : Wi-Fi 6E(802.11ax) (Triple band) 2*2 + Bluetooth® 5.3 Wireless Card (*Bluetooth® version may change with OS version different.)\r\n-Network: 10/100/1000 Mbps\r\n-Audio: 4-speaker system with Smart Amplifier Technology / AI noise-canceling technology Dolby Atmos Hi-Res certification Smart Amp Technology\r\n-Ports : 1x RJ45 LAN port, 1x Thunderbolt™ 4 support DisplayPort™, 1x USB 3.2 Gen 2 Type-C support DisplayPort™ / power delivery / G-SYNC, 2x USB 3.2 Gen 2 Type-A\r\n-Keyboard: Backlit Chiclet Keyboard Per-Key RGB\r\n-Battery: 90WHrs, 4S1P, 4-cell Li-ion\r\n-Weight: 3.00 Kg\r\n-What\'s in box: ROG backpack, ROG Impact Gaming Mouse\r\n-Warranty: 3Years (2Y Warranty + 1st Year Local Perfect Warranty) (6Month battery , No Warranty Adapter & Software)', 2249, 2199, 'upload/imgs/products/1717252725.png', '2024-06-01 07:38:45', '2024-06-01 07:38:45'),
(12, 'ASUS TUF Gaming F17 FX707VU-HX102W', 'ASUS TUF Gaming F17 FX707VU-HX102W-(Jaeger Gray)-i7-13620H-16GB-512GB-RTX4050 6G-17.3FHD-90W-BL KB-BP-W11-3Y', 'Intel® Core™ i7-13620H', '16GB DDR5-4800', 'SSD 512GB M.2', 'NVIDIA RTX 4050 6GB', '17.3\'\'FHD (1920 x 1080)', '4-cell', '3', 'Asus', '-CPU / Processor: 13th Gen Intel® Core™ i7-13620H Processor (3.6GHz up to 4.9 GHz, 24M Cache, 10 cores: 6 P-cores and 4 E-cores)\r\n-Operating System: Window 11Home Single Language (64Bit)\r\n-RAM / Memory: 16GB DDR5-4800 SO-DIMM (Max Capacity: 32GB) Support dual channel memory\r\n-Storage: 512GB PCIe® 4.0 NVMe™ M.2 SSD (support one more M.2 )\r\n-Graphic: NVIDIA® GeForce RTX™ 4050 6GB GDDR6 Laptop GPU, 2420MHz* at 140W (2370MHz Boost Clock+50MHz OC, 115W+25W Dynamic Boost),\r\n-Display: 17.3-inch, FHD (1920 x 1080) 16:9, Value IPS-level, Anti-glare display, sRGB:62.50%, Adobe:47.34%, Refresh Rate:144Hz, G-Sync, MUX Switch + NVIDIA® Advanced Optimus\r\n-Optical Drive: None\r\n-Wireless: Wi-Fi 6(802.11ax) (Dual band) 2*2 + Bluetooth® 5.2 Wireless Card (*Bluetooth® version may change with OS version different.)\r\n-Network: 10/100/1000Mbps\r\n-Audio: Dolby Atmos AI noise-canceling technology Hi-Res certification (for headphone) Support Microsoft Cortana near field/far field Built-in array microphone 2-speaker system\r\n-Webcame: 720P HD camera\r\n-Ports: 1x 3.5mm Combo Audio Jack, 1x HDMI 2.1 FRL, 2x USB 3.2 Gen 1 Type-A, 1x USB 3.2 Gen 2 Type-C support DisplayPort™ / power delivery / G-SYNC, 1x RJ45 LAN port, 1x Thunderbolt™ 4 support DisplayPort™\r\n-Keyboard: Backlit Chiclet Keyboard 1-Zone RGB Touchpad\r\n-Battery: 90WHrs, 4S1P, 4-cell Li-ion\r\n-Weight: 2.60 Kg ( lbs)\r\n-What\'s in box: TUF backpack / P309 TUF GAMING M3\r\n- Warranty: 3Years (2Y Warranty + 1st Year Local Perfect Warranty)', 1199, 1149, 'upload/imgs/products/1717252842.png', '2024-06-01 07:40:42', '2024-06-04 05:41:29'),
(14, 'Lenovo IdeaPad Flex5 (2-in-1 Touch)', 'Lenovo IdeaPad Flex5 (2-in-1 Touch) 14IAU7-Storm Grey I3-1215U-8GB-256GB-UMA-14WUXGA-FP-Pen(1Y)', 'Intel® Core™ I3-1215U', '8GB DDR4 (4266Mhz) Onboard', 'SSD 256GB M.2', 'Intel® UHD Graphics', '14\" WUXGA (1920x1200)', 'Integrated 52.5Wh', '1', 'Lenovo', '-CPU / Processor : 12th Generation Intel® Core™ I3-1215U (3.30 GHz Up to 4.4Ghz, 6Core, 10MB Cached)<br/>\r\n-Operating System :    Window 11 Home Single Language (64Bit)<br/>\r\n-RAM / Memory : 8GB Soldered LPDDR4x-4266 (system board) (no slots)<br/>\r\n-Storage :    256GB SSD M.2 2242 PCIe® (support up 1TB)<br/>\r\n-Graphic :    Intel Iris® Xe Graphics<br/>\r\n-Display :    14\" WUXGA (1920x1200) IPS 300nits Glossy, Glass, Touch<br/>\r\n-Optical Drive : None<br/>\r\n-Wireless : Wi-Fi® 6 11ax, 2x2 + BT5.2<br/>\r\n-Network : None<br/>\r\n-Sound :    Front-facing stereo speakers, 2W x2, optimized with Dolby®Audio™<br/>\r\n-Webcam:  FHD 1080p with Privacy Shutter<br/>\r\n-Ports : 2 x USB 3.1 (Gen 1), USB-C (Gen 1 with PD), HDMI 1.4b, 4-in-1 card reader (SD, SDHC, SDXC, MMC), Headphone / mic combo ,4-in-1 Card Reader (SD, SDHC, SDXC, MMC),<br/>\r\n-Keyboard: Backlit English, 10-point Multi-touch , Fingerprint Reader Touch Style, (Pen Lenovo® Digital Pen)<br/>\r\n-Battery:    Integrated 52.5Wh<br/>\r\n-Weight:     Around 1.5 kg (3.31 lbs)<br/>\r\n-Warranty: 1 Year on part n Services<br/>', 779, 699, 'upload/imgs/products/1717858861.png', '2024-06-08 08:01:01', '2024-06-08 08:01:01'),
(16, 'Laptop MSI Modern 15', 'Laptop MSI Modern | 15-B12MO-875KH-BLACK [ i5-12450H/8GB/512GB PCIE /15.6\"FHD/Win 11 ]', 'Intel® Core™ i5-1245H', '8GB -DDR4', 'M.2 512 GB PCIe NVMe', 'Intel Graphics', '15.6-inch, FHD response time, 60Hz', '3 Cell 39.3Whr', '2', 'MSI', 'CPU : Intel® Core™ i5-1245H Processor 12M Cache, up to 4.40 GHz, with IPU\r\nRam : 8GB -DDR4\r\nStorage: M.2 512 GB PCIe NVMe\r\nScreen : 15.6-inch, FHD response time, 60Hz refresh\r\nOptical Drive : None\r\nVGA on board : Intel Graphics\r\nCamera :720p HD camera\r\nKEYBOARD : Light\r\nNetwork and Communication : Wi-Fi 6E(802.11ax) (Dual band) 1*1 + Bluetooth® 5.2 Wireless Card\r\nBattery : 3 Cell 39.3Whr\r\nI/O Ports : 2x Type-A USB2.01x Micro SD Card Reader ,1x (4K @ 30Hz) HDMI ,1x Type-A USB3.2 Gen2 ,1x Type-C USB3.2 Gen2 with PD chargingWeight : 1.4 kg\r\nOS : Windows 11 Home License\r\nWeight : 1.7KG', 659, 509, 'upload/imgs/products/1717860467.png', '2024-06-08 08:24:18', '2024-06-08 08:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('chuob.piseth.official@gmail.com', '$2y$12$5RZPx8TBjm.r.oLzPdKL1OQj2kUMu4IZ2e4dd6tGN4rAqH5o2kK6u', '2024-06-08 00:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `s_title` varchar(60) NOT NULL,
  `s_img` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `s_title`, `s_img`, `created_at`, `updated_at`) VALUES
(2, 'Slide4', 'upload/imgs/slides/1717680092.jpg', '2024-06-06 06:21:32', '2024-06-06 06:21:32'),
(3, 'Slide5', 'upload/imgs/slides/1717680105.jpg', '2024-06-06 06:21:45', '2024-06-06 06:21:45'),
(4, 'Slide1', 'upload/imgs/slides/1717681105.jpg', '2024-06-06 06:38:25', '2024-06-06 06:38:25'),
(5, 'Slide2', 'upload/imgs/slides/1717681118.jpg', '2024-06-06 06:38:38', '2024-06-06 06:38:38'),
(6, 'Slide3', 'upload/imgs/slides/1717681134.png', '2024-06-06 06:38:54', '2024-06-06 06:38:54'),
(7, 'Slide6', 'upload/imgs/slides/1717681145.png', '2024-06-06 06:39:05', '2024-06-06 06:39:05'),
(8, 'Slide 7', 'upload/imgs/slides/1717858241.jpg', '2024-06-08 07:50:41', '2024-06-08 07:50:41'),
(10, 'Slide8', 'upload/imgs/slides/1717859880.png', '2024-06-08 08:18:00', '2024-06-08 08:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chuobpiseth', 'chuob.piseth.official@gmail.com', NULL, '$2y$12$yU/8WFUclJeNtQISbwkkXOvBeKow7N0pLqzuObkzQWLKTEZzmk3XS', 'w4ni7liN4z0roAyrfv49cl2G0TZZu7OYBuucCTJTTbE0WHidXpYvcX1caA22', '2024-06-07 23:15:11', '2024-06-07 23:15:11'),
(2, 'Yavkan', 'yavkan45@gmail.com', NULL, '$2y$12$O7xtKDQwozhFLCq5d/uPFeWy/sUvTfGsQiteCz02psITjA7ZtzqvC', NULL, '2024-06-12 08:37:47', '2024-06-12 08:37:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desktop`
--
ALTER TABLE `desktop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desktop`
--
ALTER TABLE `desktop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
