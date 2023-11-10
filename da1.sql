-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 09:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyer_id` int(10) NOT NULL,
  `buyer_name` varchar(30) NOT NULL,
  `buyer_email` varchar(50) NOT NULL,
  `buyer_password` varchar(255) NOT NULL,
  `buyer_reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `buyer_phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buyer_id`, `buyer_name`, `buyer_email`, `buyer_password`, `buyer_reg_date`, `buyer_phone`) VALUES
(26, 'Phong', 'admin@gmail.com', '$2y$10$yzwgxmavjr1KS1K6vehgee0GjxvAqaBHB60Qbu7hbyU633hId4jU.', '2023-11-06 19:27:43', '0398748313');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `buyer_id` int(10) NOT NULL,
  `pd_id` int(20) UNSIGNED NOT NULL,
  `cart_qty` int(5) NOT NULL,
  `cart_pdname` varchar(200) NOT NULL,
  `cart_pdimg` varchar(100) NOT NULL,
  `cart_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`) VALUES
(1, 'blazer'),
(2, 'hoodies'),
(3, 'caps'),
(4, 'trourser'),
(5, 't-shirt'),
(6, 'shorts'),
(7, 'sweater');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `order_detail_id` int(11) NOT NULL,
  `cart_id` int(10) NOT NULL,
  `total_price` float NOT NULL,
  `order_date` date NOT NULL,
  `order_note` text DEFAULT NULL,
  `order_status` int(10) NOT NULL,
  `buyer_id` int(10) NOT NULL,
  `order_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pd_id` int(20) UNSIGNED NOT NULL,
  `pd_name` varchar(255) NOT NULL,
  `pd_description` text NOT NULL,
  `pd_image` varchar(100) NOT NULL,
  `pd_price` float NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `pd_stock` int(10) NOT NULL,
  `pd_brand` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pd_id`, `pd_name`, `pd_description`, `pd_image`, `pd_price`, `cate_id`, `pd_stock`, `pd_brand`) VALUES
(1, 'Linen Blazer With Flap Pockers', 'Linen Blazer With Flap Pockers - Linen Suit Set - Linen Single Breasted Blazer - Women Workwear', 'https://i.ibb.co/zmK78pn/thumb.jpg', 62, 1, 24, 'Nedd'),
(2, 'Loose linen blazer PLACID Long sleeve light linen jacket  Linen womens clothing', 'Women`s linen blazer PLACID in lightweight linen with front button closure is an autumn wardrobe/`s essential', 'https://i.ibb.co/CtMKsmn/thumb.jpg', 89, 1, 35, 'Densnis'),
(3, 'Have A Good Day Hoodie- Trendy sweatshirt, hoodie', 'Have A Good Day Hoodie- Trendy sweatshirt, hoodie, Sweatshirt and hoodies with words on back. Hey there, welcome to my store! I hope you will love my store.', 'https://i.ibb.co/SJf0kwp/thumb.jpg', 102, 2, 72, 'Nedd'),
(4, 'Women Linen Blazer, Linen Jacket Linen Blazer 3/4 Sleeves Coat', 'All clothes are tailored and handmade with love and attention to details. Pure natural linen materials, comfortable, breathable, refreshing and soft fabric', 'https://i.ibb.co/FhPdSq6/thumb.jpg', 162, 1, 762, 'Densnis'),
(5, 'Thin Cotton Blazer Loose Linen Jackets Pockets Soft Linen Coats Three Quarter Single Button', 'Cotton Blazer Loose Linen Jackets Pockets Soft Linen Coats Three Quarter Single Button. Please refer to the final image for size chart before ordering (and choose the correct size).', 'https://i.ibb.co/GcL5Zsx/thumb.jpg', 78, 1, 35, 'Densnis'),
(6, 'Fleece Hoodies For Men and Women Patchwork Stripe Hooded', 'Usually We Will Send Out the Goods Within 3 - 7 Days by Fast and Reliable Shipping Methods. As different computers display colors differently, the color of the actual item may very slightly from the above images. Your Happy Shopping Experience and Five Star Feedback is Very Important to Us. Please Feel Free to Contact Us if You Have Any Questions. We Will Try Our Best to Serve You.', 'https://i.ibb.co/0nT47bQ/thumb.jpg', 621, 2, 23, 'Nedd'),
(7, 'Masculine-cut Blazer with Contrasting Details', 'An oversize blazer with masculine cut and contrasting seam details. An avant-garde piece with linen and tulle elements. Bold addition to any elegant outfit.', 'https://i.ibb.co/pRrqHFK/thumb.jpg', 142, 1, 35, 'Nedd'),
(8, 'Hat Embroidered Hat Dad Hat Women\'s Baseball Cap Man Hat', 'This is the perfect hat for you! Just enter your custom text and we\'ll embroider it on the front of this cozy cotton hat. It\'s sure to make you stand out in the crowd.', 'https://i.ibb.co/D487FNH/thumb.jpg', 123, 3, 24, 'Nedd'),
(9, 'Embroidered Hat Initial cap Personalized Ball cap Custom Hat Mens Hat 90s Vintage', 'Personalize these comfortable and stylish dad hats to say whatever you like. A traditional baseball cap is a great way to show off your style. one-of-a-kind gift for any occasion such as Mother\'s Day, Father\'s Day, birthday gifts, Bachelor party, Christmas etc. We can not only customize the text', 'https://i.ibb.co/FKFDxg2/thumb.jpg', 82, 3, 35, 'Nedd'),
(10, 'Wizard Frog Corduroy Hat, Handmade Embroidered Corduroy Dad Cap', 'This hat is made for comfort and durability. The 100% cotton corduroy is soft and unstructured, making it a great choice for a day spent outdoors. The cotton twill sweatband and taping help to keep the head cool and dry, while the adjustable buckle ensures a snug, comfortable fit. Whether you\'re hiking, camping, or just enjoying a leisurely stroll, this hat is the perfect way to protect yourself from the elements.', 'https://i.ibb.co/hVrzw07/thumb.jpg', 178, 3, 34, 'Nedd'),
(11, 'Floral Embroidered Cap, Baseball Cap, Custom Embroidery Hat, Hand Embroidery Hat', 'A pretty hand embroidered cap that is perfect for everyday wear! Available in different colors and designs. Feel free to send me a message for any custom work!', 'https://i.ibb.co/qxW0JbQ/thumb.jpg', 98, 3, 72, 'Densnis'),
(12, 'Baseball Hat with Embroidery - Embroidered & Cap Color of your choice! Dad Hat', 'Due to the current covid situation, there may be delays in international shipment. We hope for your kind understanding. Please let us know if you have a specific date that you would like to receive by. Orders that have been shipped out are non-refundable.', 'https://i.ibb.co/yNKZw7Y/thumb.jpg', 89, 3, 823, 'Densnis'),
(13, 'School Leavers Hoodie - School Leavers 2023 Hoodie - Class Of 2023 Hoodie', 'Our Personalised School Leavers Hoodie makes the perfect gift for your class of 2023. Featuring a large sports number on the back that contains all of your classmate\'s names. This quality hoody is made to keep you warm and comfy during those final school days, and is a perfect keepsake to remember all of the good times you all had together. You can also add your own personal message to them and make it extra special!', 'https://i.ibb.co/VCmkm41/thumb.jpg', 285, 2, 24, 'Nedd'),
(14, 'portrait from photo to shirt, outline photo sweatshirt, Custom Photo, custom portrait, Couple Hoodie', 'Set-in sleeve 1x1 rib at neck collar Inside back neck tape in self fabric Tubular construction Sleeve hem and bottom hem with wide double topstitch Comfortable crew neckline', 'https://i.ibb.co/BP3mBcr/thumb.jpg', 73, 2, 24, 'Nedd'),
(15, 'Japanese Harajuku Style Hoodies, Streetwear Oversized Hoodie, Thick Winter Autumn Pullover', 'Recommend ordering two sizes up. MATERIAL: Cotton, PolyesterIt is printed with eco-friendly ink. Soft and comfy hoodie with a print of Japanese graphic art. This kawaii clothing pullover is an excellent addition to your wardrobe.', 'https://i.ibb.co/2vcg5K8/thumb.jpg', 64, 2, 35, 'Densnis'),
(16, 'Unleash Your Summer Swag with High-Quality Fear Of God Shorts for Men and Women', 'Upgrade your summer wardrobe with our exclusive collection of Essentials Shorts for both men and women! Discover the perfect blend of comfort and style with our high-quality Fear Of God shorts, designed to elevate your streetwear game to new heights. Whether you\'re hitting the beach or strolling through the city, these trendy FOG shorts are a must-have for any fashion-conscious individual. Embrace the essence of urban fashion and make a bold statement this summer with our eye-catching streetwear essentials. Get ready to turn heads and exude confidence wherever you go!', 'https://i.ibb.co/zP4YWYs/thumb.jpg', 63, 6, 221, 'Thosc'),
(17, 'Supper Comfy Yoga Shorts', 'This patchwork was made to look , handmade with different patterns. It comes with cute tassels and has a comfortable elastic waist and ankle. These are made perfect for a relaxing day at home, working out, yoga. Made with soft rayon fabric.', 'https://i.ibb.co/ZVXRFk6/thumb.jpg', 62, 6, 762, 'Thosc'),
(18, 'Branded Premium Basic Mesh Shorts', 'Branded Premium Basic Mesh Shorts Mesh 2 Pockets Eric Emanuel New York City Skyline Basketball shorts', 'https://i.ibb.co/wdPQcz6/thumb.jpg', 235, 6, 72, 'Densnis'),
(19, 'Elastic Waist Cotton Pants Soft Casual Loose Boho Trousers', 'Please contact us if you have any questions. We are here to help with whatever we can .Finally, thank you very much for visiting my store, you can collect my stores and goods.', 'https://i.ibb.co/PcdbsQf/thumb.jpg', 62, 4, 24, 'John Doe'),
(20, 'Wide Leg Suit High Waist Pants | Office Lady Loose Casual High Waist Pants', 'A beautiful and charming Dresses made from breathable, soft and skin-friendly.This is one fashion item that can never go wrong.', 'https://i.ibb.co/vYXmr8Z/thumb.jpg', 29, 4, 23, 'Densnis'),
(21, 'Fashion Cargo Shorts, Casual Vintage Low Rise Baggy Shorts', 'Y2k Fashion Cargo Shorts, Casual Vintage Low Rise Baggy Shorts For Woman, Gift For Her, Wife ,Daughter. Dear Shopping Lovers,We are proud to share our comfortable and stylish products with you.Our products are handmade, we design and manufacture our products specially for our customers.', 'https://i.ibb.co/n7ZjWhW/thumb.jpg', 124, 6, 762, 'Thosc'),
(22, 'Linen Shorts Women Summer Elastic Shorts With Pockets Sweat Waist Solid Color Shorts', 'The linen and cotton pieces are made to make you look good and natural, for any occasion. Due to its structure, linen and cotton fiber can be associated with any cloths. It will look great anyway. Linen is one of the most expensive and sought after of the plant-based fabrics and it is self-evident because of many good properties and qualities.', 'https://i.ibb.co/KxVj2sh/thumb.jpg', 56, 6, 34, 'John Doe'),
(23, 'Embroidered Silly Goose Sweatshirt, Embroidered Goose Crewneck Sweats', 'This embroidered Silly Goose sweatshirt is super soft and cozy. Perfect to lounge around, run errands, or walk your dog. Our crewnecks use the highest quality material for ultra-soft and comfortable wear, with advanced embroidery to ensure vibrant colors and detailed graphics.', 'https://i.ibb.co/yPHVddx/thumb.jpg', 89, 7, 35, 'John Doe'),
(24, 'Knitted Sweater Little Dinosaur, Unisex, Winter Harajuku', 'Super soft comfortable knitted sweater. A perfect gift for streetwear style lovers and a perfect harajuku outfit.', 'https://i.ibb.co/sFJvcv1/thumb.jpg', 67, 7, 35, 'Densnis'),
(25, 'Knitted Sweater Staring Duck, Unisex, Winter Harajuku', 'Please kindly note that color may vary slightly from monitor to print due to monitor settings.', 'https://i.ibb.co/vj5H45t/thumb.jpg', 56, 7, 762, 'John Doe'),
(26, 'Fashion Sweaters Men Autumn Solid Color Wool Sweaters Slim Fit', 'Fashion Sweaters Men Autumn Solid Color Wool Sweaters Slim Fit Men Street Wear Mens Clothes Knitted Sweater Men Pullovers', 'https://i.ibb.co/9pqChfy/thumb.jpg', 78, 7, 72, 'Densnis'),
(27, 'Chicken Sweatshirt, Farm Life Sweater, Chicken Lover Sweater, Easter Retro Sweater', 'Welcome to Prime Tee Lab. Your all-inclusive stop for all custom sweatshirt, hoodie, and gift needs. We print on the highest quality garments! Our state of the art printers help us bring you the most vibrant and long lasting colorful designs.', 'https://i.ibb.co/WDjm46Y/thumb.jpg', 122, 7, 24, 'Densnis'),
(28, 'Cotton Corduroy Pant Elastic Waist Pants Womens Soft Warm trousers baggy pants Casual', 'All our items are Tailored and Handmade and Made to Order ,I can make Any Size . I design new styles every week, please collect my store. I believe that you will meet your favorite styles.', 'https://i.ibb.co/dJfrK9j/thumb.jpg', 71, 4, 23, 'Densnis'),
(29, 'High Waist Trousers Pants Palazzo Bottoms Casual Loose Wide Leg Long Harem', 'Introducing our Women\'s High Waisted Linen Pants - perfect for any summer day! These pants bring comfort and style to your wardrobe, with a loose-fitting design that offers a relaxed yet fashionable look. Made from a cotton linen blend, these pants are lightweight and breathable, providing a comfortable feel all day long.', 'https://i.ibb.co/Khd6pJy/thumb.jpg', 182, 4, 23, 'Thosc'),
(30, 'Drawstring Pants - Spring Summer Trousers - Pockets', 'Stay comfortable and stylish with these cotton and linen drawstring pants for women. Designed with a basic style and loose fit, these mid-waist trousers have a nine-point length and trendy button details. Plus, they come with pockets to keep your essentials handy. Available in light gray, white, dark gray,', 'https://i.ibb.co/vY3cj4d/thumb.jpg', 98, 4, 23, 'Nedd'),
(31, 'Sunset Rays Wavy Shirt, Vintage Shirt, Retro Sunshine Shirt', 'Please check the color charts for the size and type of the tshirt you want, not every color is available for each type of tshirts, drop down comes automatically with every color but they are not available for each item so please make sure to check it, if you do not check the color charts the closest item will be sent to you.', 'https://i.ibb.co/txQtZb4/thumb.jpg', 26, 5, 35, 'Densnis'),
(32, 'Sorrows, Sorrows, Prayers Tshirt, Queen Charlotte Fan Shirt, Bridgerton T-Shirt', 'Unisex Heavy Cotton Tee Gildan 5000: Medium fabric - Classic fit - Runs true to size - 100% cotton (fiber content may vary for different colors) - Tear-away label. Unisex Heavy Blend™ Crewneck Sweatshirt Gildan 18000: Medium-heavy fabric - Loose fit - Runs true to size - 50% cotton, 50% polyester - Sewn-in label', 'https://i.ibb.co/8MqknzG/thumb.jpg\r\n', 128, 5, 24, 'Densnis'),
(33, 'Smiling Flower Shirt, Vintage Smiley Face Trendy Graphic Shirt', 'Smiling Flower Shirt, Vintage Smiley Face Trendy Graphic Shirt, Comfort Colors®, Oversized, Boho, Comfy Sleep Shirt for Women, Birthday Gift', 'https://i.ibb.co/sjgKGF0/thumb.jpg', 61, 5, 24, 'Nedd'),
(34, 'Faith Shirt, Faith Cross Shirt, Christian Gift, Faith Gift, Christian Shirts', 'Please check the color charts for the size and type of the tshirt you want, not every color is available for each type of tshirts, drop down comes automatically with every color but they are not available for each item so please make sure to check it, if you do not check the color charts the closest item will be sent to you.', 'https://i.ibb.co/gtYCtF8/thumb.jpg', 47, 5, 762, 'Densnis'),
(35, 'Yellowstone Tee, Yellowstone National Park Shirt', '100% with ring-spun cotton. The soft-washed, garment-dyed fabric brings extra coziness to your wardrobe while the relaxed fit makes it an excellent daily choice. The double-needle stitching throughout the tee makes it highly durable while the lack of side-seams helps the shirt retain its tubular shape.', 'https://i.ibb.co/dW990p0/thumb.jpg', 59, 5, 72, 'Nedd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk_pd_id` (`pd_id`),
  ADD KEY `fk_buyer_id` (`buyer_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `buyer_id` (`buyer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pd_id`),
  ADD KEY `fk_categories` (`cate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buyer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pd_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_buyer_id` FOREIGN KEY (`buyer_id`) REFERENCES `buyer` (`buyer_id`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`buyer_id`) REFERENCES `buyer` (`buyer_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_categories` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`cate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
