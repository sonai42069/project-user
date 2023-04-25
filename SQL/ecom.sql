-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 07:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`, `email`, `mobile`, `status`) VALUES
(1, 'admin', 'admin', 0, '', '', 1),
(6, 'kingsoumitrahalder97@gmail.com', '123', 1, 'kingsoumitrahalder97@gmail.com', '8116739131', 1),
(10, 'souvikchattopadhyay', '768845', 1, 'www.scarysouvik7@gmail.com', '8016825701', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(8, 'Rice', 1),
(10, 'Oil', 1),
(11, 'Veggies', 1),
(12, 'Atta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(5, 'vfchyjbn', 'ufrcjvhfcbmg@gmail.com', '8116739131', 'kjbhg jdhnbdh,vgj', '0000-00-00 00:00:00'),
(6, 'vjyvrtvyvg', 'jhhg@gmail.com', '8116739131', 'htrdfghuh7t6rtf', '0000-00-00 00:00:00'),
(7, 'htrdcvhuyfg', 'hgfhg@gmail.com', '8529637410', 'kjuytfdcvjuytfgvb', '2023-04-21 21:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_master`
--

CREATE TABLE `coupon_master` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_value` int(11) NOT NULL,
  `coupon_type` varchar(10) NOT NULL,
  `cart_min_value` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `total_price` float NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `order_status` int(11) NOT NULL,
  `length` float NOT NULL,
  `breadth` float NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `mihpayid` varchar(20) NOT NULL,
  `ship_order_id` int(11) NOT NULL,
  `ship_shipment_id` int(11) NOT NULL,
  `payu_status` varchar(10) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `coupon_value` varchar(50) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `qty`, `price`) VALUES
(2, 1, 10, 1, 10),
(3, 2, 13, 1, 150),
(4, 2, 12, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Shipped'),
(4, 'Canceled'),
(5, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

CREATE TABLE `otp_expiry` (
  `id` int(11) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `is_expired` int(11) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `best_seller` int(11) NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `added_by` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `sub_categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `best_seller`, `meta_title`, `meta_desc`, `meta_keyword`, `added_by`, `status`) VALUES
(15, 8, 5, 'India Gate Basmati Rice Super 5kg', 1080, 679, 20, '605022890_WhatsApp Image 2023-04-14 at 8.09.04 PM.jpeg', 'India Gate\r\n90% positive ratings from 50K+ customers\r\n50K+ recent orders from this brand\r\n7+ years on Amazon', 'Brand	India Gate\r\nDiet Type	Vegetarian\r\nUnits	5000.0 gram\r\nWeight	5000 Grams\r\nVariety	Basmati Rice', 1, 'Basmati Rice 5kg', 'Basmati Rice 5kg', 'Basmati Rice 5kg', 1, 1),
(16, 8, 5, 'India Gate Basmati Rice Everyday 5 kg', 1100, 840, 20, '256426447_71W1XCVDlML._SL1500_.jpg', 'India Gate\\r\\n90% positive ratings from 50K+ customers\\r\\n50K+ recent orders from this brand\\r\\n7+ years on Amazon', 'Brand	India Gate\r\nDiet Type	Vegetarian\r\nUnits	5000.0 gram\r\nWeight	5000 Grams\r\nVariety	Basmati Rice', 1, 'India Gate Basmati Rice Everyday 5 kg', 'India Gate Basmati Rice Everyday 5 kg', 'India Gate Basmati Rice Everyday 5 kg', 1, 1),
(17, 8, 5, 'India Gate Basmati Rice Daily Premium 5 kg', 1049, 970, 20, '310809884_71Wpn-DmYVL._SL1500_.jpg', '90% positive ratings from 50K+ customers\r\n50K+ recent orders from this brand\r\n7+ years on Amazon', 'Brand	India Gate\r\nDiet Type	Vegetarian\r\nUnits	5000.0 gram\r\nWeight	5000 Grams\r\nVariety	Basmati Rice', 1, 'India Gate Basmati Rice Daily Premium 5 kg', 'India Gate Basmati Rice Daily Premium 5 kg', 'India Gate Basmati Rice Daily Premium 5 kg', 1, 1),
(18, 8, 5, 'Daawat Rozana Super Basmati Rice 5 Kg', 486, 359, 20, '636574461_810jp1zceeL._SL1500_.jpg', 'Rozana is above medium length product\r\nOriginal basmati nourished by snow fed rivers of great Himalayas\r\nCountry of Origin: India\r\nMaterial Features: Vegetarian; Item Form: Grain', 'Brand	DAAWAT\r\nNumber of Items	1\r\nUnits	5000.0 gram\r\nWeight	5000 Grams\r\nPackage Information	Bag', 1, 'Daawat Rozana Super Basmati Rice 5 Kg', 'Daawat Rozana Super Basmati Rice 5 Kg', 'Daawat Rozana Super Basmati Rice 5 Kg', 1, 1),
(20, 12, 24, 'Aashirvaad Atta 5 kg', 342, 304, 20, '333127781_91SWDnldaaL._SL1500_.jpg', 'Brand	Aashirvaad\r\nWeight	5 Kilograms\r\nSpecialty	Vegetarian\r\nDiet Type	Vegetarian\r\nPackage Weight	5.05 Kilograms\r\nForm	Raw\r\nNumber of Items	1\r\nUnits	5000 gram', 'Aashirvaad Atta with Multigrains is high in fibre which aids in digestion\r\n3 rotis made from Multigrain Atta fulfill 35% of your daily fibre requirement\r\nRotis made from Aashirvaad Atta with Multigrains taste just like your regular atta\r\nAashirvaad Atta with Multigrains is a blend of 6 natural grains – wheat, maize, soya, channa, oats, psyllium husk\r\nFrom India’s No. 1 Atta brand, Aashirvaad Atta with Multigrains is made with love in India with the grains sourced from the fields across the country', 1, 'Aashirvaad Atta 5 kg', 'Aashirvaad Atta 5 kg', 'Aashirvaad Atta 5 kg', 1, 1),
(21, 12, 25, 'Fortune Chakki Fresh Atta 5kg', 250, 245, 20, '162990101_61AOiVfvtBL.jpg', 'Brand	FORTUNE\r\nWeight	230 Grams\r\nAllergen Information	Fat-Free\r\nSpecialty	Vegetarian\r\nDiet Type	Vegetarian\r\nPackage Weight	5.2 Kilograms\r\nForm	Raw\r\nNumber of Items	1\r\nUnits	5000.0 gram', 'Made with superior wheat blend\r\nTraditional Chakki Process\r\nAbsorbs water more efficiently to make your rotis soft and fluffy\r\nIntensive wheat cleaning process and hygienic packaging\r\nHigh perfection in granulation\r\nAbsolutely pristine and untouched by hand\r\nNo preservatives added\r\nAssurance of consistent quality\r\nMade with superior wheat blend\r\nTraditional Chakki Process\r\nAbsorbs water more efficiently to make your rotis soft and fluffy\r\nIntensive wheat cleaning process and hygienic packaging\r\nHigh perfection in granulation\r\nAbsolutely pristine and untouched by hand\r\nNo preservatives added\r\nAssurance of consistent quality\r\nShow Less', 1, 'Fortune Chakki Fresh Atta 5kg', 'Fortune Chakki Fresh Atta 5kg', 'Fortune Chakki Fresh Atta 5kg', 1, 1),
(22, 10, 12, 'Fortune Soyabean Oil 1L', 150, 125, 20, '150448753_51GyUUKe-0L.jpg', 'Brand	FORTUNE\r\nFlavour	Soybean\r\nNet Content Volume	1 Litres, 1000 Millilitres\r\nItem Package Quantity	1\r\nForm	Liquid\r\nSpecialty	Vegetarian\r\nRecommended Uses For Product	Skin Care\r\nVolume	1 Litres\r\nWeight	910 Grams\r\nMaterial Feature	Vegetarian', 'Light, odourless and healthy oil\r\nCountry of Origin: India\r\nMaterial Features: Vegetarian;Item Form: Liquid;Flavor Name: Soybean\r\nform_factor:liquid | material_features:vegetarian\r\nallergen_information:allergen_free | ingredients:Soybean, Rich in Omega 3\r\nitem_form:liquid | flavor_name:soybean', 1, 'Fortune Soyabean Oil 1L', 'Fortune Soyabean Oil 1L', 'Fortune Soyabean Oil 1L', 1, 1),
(23, 10, 13, 'Fortune Premium Kachi Ghani Pure Mustard Oil 1L', 150, 150, 20, '994638898_41lBuao0+bL.jpg', 'Brand	FORTUNE\r\nFlavour	Mustard - Bottle\r\nNet Content Volume	1 Litres, 1000 Millilitres\r\nSpecial Feature	Cold Pressed\r\nItem Package Quantity	1\r\nForm	Oil\r\nSpecialty	Suitable for vegeterians\r\nRecommended Uses For Product	Cooking\r\nVolume	1 Litres\r\nWeight	910 Grams', 'Made from Cold Pressed (Kachi Ghani) Technology using Finest Mustard Seeds - Rich in Omega 3 & 6 that boost Immunity\r\nRich in Vitamins A,E and Beta Carotene\r\nNaturally Cholesterol Free\r\nHigh in PUFA (Poly Unsaturated Fatty Acids)\r\nHigh Pungency and Strong Aroma - Mustard Oil with Long Shelf Life', 1, 'Fortune Premium Kachi Ghani Pure Mustard Oil 1L', 'Fortune Premium Kachi Ghani Pure Mustard Oil 1L', 'Fortune Premium Kachi Ghani Pure Mustard Oil 1L', 1, 1),
(24, 10, 14, 'Jivo Olive Oil 1L', 749, 399, 20, '806031253_61WeDb2C0tL._SL1500_.jpg', 'Brand	JIVO\r\nDiet Type	Vegetarian\r\nFlavour	Neutral\r\nNet Content Volume	1 Litres, 1000 Millilitres\r\nMelting Temperature	100 Degrees Celsius\r\nLiquid Volume	1 Litres\r\nItem Package Quantity	1\r\nForm	Daily Consumables\r\nSpecialty	Preservatives Free\r\nRecommended Uses For Product', 'Gluten-Free\r\nLow-Cholesterol Content\r\nGood for Scalp Treatment\r\nPomace Oil keeps its nutrients when it heats, keeping food healthy and ideal for Cooking\r\nUsing pomace oil as massaging oil can gives a healthy and smooth skin\r\nHas light flavour & aroma, ensures minimal change in the taste of preparation.\r\nVitamin K in Pomace improves bone density and strength\r\nImproves bone density and strength\r\nHelps in faster healing\r\nStorage Instruction: Store in a cool, dry & hygienic place, away from direct heat & light.', 1, 'Jivo Olive Oil 1L', 'Jivo Olive Oil 1L', 'Jivo Olive Oil 1L', 1, 1),
(25, 11, 15, 'Chandramukhi Potato 1Kg', 34, 27, 20, '916626487_chandramukhi aloo.jpg', 'Fresh Product\r\nDirect from field\r\nNatural Product', 'Fresh Product\r\nDirect from field\r\nNatural Product', 1, 'Chandramukhi Potato 1 kg', 'NA', 'NA', 1, 1),
(26, 11, 15, 'Jyoti Potato 1Kg', 25, 22, 20, '674585129_Jyoti Aaloo.jpg', 'Direct from field\r\nNature Fresh', 'Direct from field\r\nNature Fresh', 1, 'Jyoti Potato', 'NA', 'NA', 1, 1),
(27, 11, 15, 'Baby Potato 500gm', 15, 13, 20, '738267076_baby aaloo.jpg', 'Nature Fresh', 'Nature Fresh', 1, 'Baby Potato 500gm', 'NA', 'NA', 1, 1),
(28, 11, 16, 'Tomato 500gm', 24, 21, 20, '687662056_tomato.jpg', 'Tomatoes are a significant source of umami flavor.The tomato is consumed in diverse ways, raw or cooked, in many dishes, sauces, salads, and drinks. While tomatoes are fruits—botanically classified as berries—they are commonly used culinarily as a vegetable ingredient or side dish.', 'Fresh Tomato', 1, 'Tomato 500gm', 'NA', 'NA', 1, 1),
(29, 11, 17, 'Onion 1kg', 36, 30, 20, '439196534_Onion.jpg', 'Onion is a staple in India and are commonly chopped and used as an ingredient in various hearty warm dishes. They are versatile and can be baked, boiled, braised, grilled, fried, roasted, sautéed, or eaten raw in salads.', 'Fresh Product', 1, 'Onion 1Kg', 'NA', 'NA', 1, 1),
(30, 11, 18, 'Green Chilli 100G', 16, 13, 20, '518801400_Green Chili.jpg', 'Nature Fresh', 'Is Green Chilli Good for Health? Yes, Green chillies contain fewer calories, speed up your metabolism and help maintain a healthy digestive system. The antioxidants and vitamins in green chilli also provide multiple health benefits. They protect your body against free radicals and strengthen your immune system.', 1, 'Green Chilli 100G', 'NA', 'NA', 1, 1),
(31, 11, 19, 'Ginger 250gm', 54, 47, 20, '774083340_GINGER.jpg', 'Ginger is loaded with antioxidants, compounds that prevent stress and damage to your body\'s DNA. They may help your body fight off chronic diseases like high blood pressure, heart disease, and diseases of the lungs, plus promote healthy aging.', 'Nature Fresh Product', 1, 'Ginger 250gm', 'NA', 'NA', 1, 1),
(32, 11, 20, 'Cucumber 700-500gm', 42, 36, 20, '551150063_Cucumber.jpg', 'Cucumbers are crisp and refreshing, due to their high percentage of water. Cucumbers are eaten raw or cooked, or they can be pickled, providing a nutritional food source.', 'Fresh Nature Food', 1, 'Cucumber 700gm - 500 gm', 'NA', 'NA', 1, 1),
(33, 11, 21, 'Garlic 200gm', 40, 36, 20, '368415224_Garlic.jpg', 'Garlic is a herb, best known for flavouring and seasoning of food and is widely used in various cuisines ranging from desi cuisines like Tadka Dal to dishes such as Garlic Bread. Garlic seems to be used in virtually all cuisines as a strong flavoring agent.', 'Fresh Productt', 1, 'Garlic 200gm', 'NA', 'NA', 1, 1),
(34, 11, 22, 'Brinjal 700 - 500gm', 84, 70, 20, '453759907_Brinjal.jpg', 'Black Brinjal has a glossy and smooth blackish-purple skin with soft pulpy flesh. When cooked, it becomes tender and develops a rich and complex flavour. They can be cooked in various ways such as baking, barbecuing, frying or pickling..', 'Fresh Nature Product', 1, 'Brinjal 700 - 500 gm', 'NA', 'NA', 1, 1),
(35, 11, 23, 'Pumpkin 500gm', 17, 15, 20, '967916389_pumpkin.jpg', 'Green Pumpkin has a sweet taste and becomes tender and pulpy when cooked. It is most commonly used in making vegetable preparations, curries and chutneys due to its unique and subtly sweet taste.', 'Fresh Nature Product', 1, 'Pumpkin 500gm', 'NA', 'NA', 1, 1),
(36, 8, 6, 'Daawat Brown Rice 5kg', 750, 720, 20, '220406358_61pBqRtsNGS._SL1000_.jpg', 'Brand	DAAWAT\r\nNumber of Items	1\r\nUnits	5000.0 gram\r\nWeight	5000 Grams\r\nPackage Information	Bagv', 'Country of Origin: India\r\nWhole grain (Lower carbohydrates): Helps in overall health\r\nLower GI: Diabetic friendly\r\nZero cholesterol: Good for your heart and cardio vascular functioning\r\nHET processed and enriched with vitamins and minerals: For stronger immunity\r\nmaterial features:vegetarian', 1, 'Daawat Brown Rice 5kg', 'NA', 'NA', 1, 1),
(37, 8, 5, 'India Gate Brown Basmati Rice 1kg', 349, 299, 20, '605902125_brown rice.jpg', 'Brand	India Gate\r\nUnits	1000.0 gram\r\nWeight	1000 Grams\r\nPackage Information	Jar\r\nItem Package Quantity	1', 'Country of Origin: India\r\nGate special\r\nDelicious and Tasty\r\nCountry of Origin: India', 1, 'India Gate Brown Basmati Rice 1kg', 'NA', 'NA', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shiprocket_token`
--

CREATE TABLE `shiprocket_token` (
  `id` int(11) NOT NULL,
  `token` varchar(500) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shiprocket_token`
--

INSERT INTO `shiprocket_token` (`id`, `token`, `added_on`) VALUES
(1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjQ5NDkwOSwiaXNzIjoiaHR0cHM6Ly9hcGl2Mi5zaGlwcm9ja2V0LmluL3YxL2V4dGVybmFsL2F1dGgvbG9naW4iLCJpYXQiOjE1OTA0MDQ4NTMsImV4cCI6MTU5MTI2ODg1MywibmJmIjoxNTkwNDA0ODUzLCJqdGkiOiJWZU4zaE5YMm1LdVY4cXB0In0.YKracv-yDKppYb2FISr5zE_4gEGWIAz-HzIa6cit9nw', '2020-05-25 05:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `sub_categories`, `status`) VALUES
(1, 2, 'T-Shirt', 1),
(2, 2, 'Trouser', 1),
(3, 4, 'Shirt', 1),
(4, 7, 'mobile', 1),
(5, 8, 'Basmati Rice', 1),
(6, 8, 'Brown Rice', 1),
(7, 8, 'Boiled RIce', 1),
(8, 9, 'Multigrain Atta', 1),
(9, 9, 'Whowheat Atta', 1),
(10, 9, 'Organic Atta', 1),
(11, 9, 'Chaki Fresh Atta', 1),
(12, 10, 'Refined Soyabean Oil', 1),
(13, 10, 'Mustard Oil', 1),
(14, 10, 'Olive Oil', 1),
(15, 11, 'Potato', 1),
(16, 11, 'Tomato', 1),
(17, 11, 'Onion', 1),
(18, 11, 'Green Chili', 1),
(19, 11, 'Ginger', 1),
(20, 11, 'Cucumber', 1),
(21, 11, 'Garlic', 1),
(22, 11, 'Brinjal', 1),
(23, 11, 'Pumpkin', 1),
(24, 12, 'Multigrain Atta', 1),
(25, 12, 'Wholewheat Atta', 1),
(26, 11, 'Red Chili', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `image` varchar(25) NOT NULL,
  `added_on` datetime NOT NULL,
  `otp` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `password`, `email`, `mobile`, `image`, `added_on`, `otp`, `status`) VALUES
(475958263, 'sonai', 'jhg', '202cb962ac59075b964b07152d234b70', 'hsoumitra42069@gmail.com', '8525521562', '1682243456IMG-20220926-WA', '0000-00-00 00:00:00', '593645', ''),
(744926538, 'jihfgvghrvt', 'nhegfcvebhjhg', '21232f297a57a5a743894a0e4a801fc3', 'sonai@gmail.com', '8116739132', '1680550887Adobe Scan Jul ', '0000-00-00 00:00:00', '28258', ''),
(752897876, 'jihfgvghrvt', 'nhegfcvebhjhg', '21232f297a57a5a743894a0e4a801fc3', 'admin213@gmail.com', '8116739131', '1680550776Adobe Scan Jul ', '0000-00-00 00:00:00', '', ''),
(1511699739, 'gfdhbgfcvbn', 'iuytfdsz', 'c11e1dea283e48a48987b0f03b69a48b', 'uyfg@gmail.com', '8116739138', '1682105027IMG-20221002-WA', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `added_on`) VALUES
(1, 2, 12, '2023-03-12 07:42:47'),
(2, 2, 6, '2023-03-12 07:42:56'),
(3, 2, 10, '2023-03-12 07:43:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_master`
--
ALTER TABLE `coupon_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coupon_master`
--
ALTER TABLE `coupon_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1512439517;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
