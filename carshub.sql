-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 02:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshub`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) NOT NULL,
  `images` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `images`, `name`) VALUES
(1, 'brands/lambo.png', 'Lamborghini'),
(2, 'brands/bmw.jpg', 'BMW'),
(3, 'brands/toyota.jpg', 'Toyota'),
(4, 'brands/lexus.png', 'Lexus'),
(5, 'brands/audi.png', 'Audi'),
(6, 'brands/mercedez.jpeg', 'Mercedez Benz'),
(7, 'brands/nissan.jpg', 'Nissan'),
(8, 'brands/chevrolet.jpeg', 'Chevrolet'),
(9, 'brands/ford.png', 'Ford');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `finfo` varchar(1000) NOT NULL,
  `mob` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`finfo`, `mob`) VALUES
('Ensure that your website complies with relevant laws and regulations, including data protection and consumer rights.', 1425367891),
('Make sure your website is fully responsive and works well on various devices, including smartphones and tablets. A mobile-friendly design is crucial for reaching a wider audience.', 2147483647),
('Suggest adding more images or close-ups for better product visibility.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `tprice` int(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `mobile`, `address`, `email`, `product`, `date`, `price`, `quantity`, `tprice`, `category`, `status`, `payment`) VALUES
('1561', 'Suyash Prabhakar Dange', '08459481491', 'Shakti vilha , Ashoknagar Baramati 413102', 'suyashdange00@gmail.com', 'BMW S65 Engine', '2023-10-17', 25000, 1, 25000, 'Engine', 'Ordered', 'Unpaid'),
('1839', 'Suyash Prabhakar Dange', '08459481491', 'Shakti vilha , Ashoknagar Baramati 413102', 'suyashdange00@gmail.com', 'Lamborghini Hoods', '2023-10-18', 350, 3, 1050, 'Hood', 'Ordered', 'Unpaid'),
('3080', 'Suyash Prabhakar Dange', '2147483647', 'Shakti vilha , Ashoknagar Baramati 413102', 'suyashdange00@gmail.com', 'BMW Alloy of Wheel', '2023-10-17', 750, 2, 1500, 'Wheels', 'Ordered', 'Unpaid'),
('4167', 'Suyash Prabhakar Dange', '08459481491', 'Shakti vilha , Ashoknagar Baramati 413102', 'suyashdange00@gmail.com', 'BMW S65 Engine', '2023-10-18', 25000, 2, 50000, 'Engine', 'Ordered', 'Unpaid'),
('5624', 'Suyash Prabhakar Dange', '2147483647', 'Shakti vilha , Ashoknagar Baramati 413102', 'suyashdange00@gmail.com', 'Lamborghini Side Mirror', '2023-10-17', 259, 3, 777, 'Mirror', 'Ordered', 'Unpaid'),
('7833', 'Suyash Prabhakar Dange', '2147483647', 'Shakti vilha , Ashoknagar Baramati 413102', 'suyashdange00@gmail.com', 'BMW S65 Engine', '2023-10-17', 25000, 1, 25000, 'Engine', 'Ordered', 'Unpaid'),
('8016', 'Suyash Prabhakar Dange', '2147483647', 'Shakti vilha , Ashoknagar Baramati 413102', 'suyashdange00@gmail.com', 'Toyota Turbo Diesel Engine', '2023-10-17', 1650, 4, 6600, 'Engine', 'Ordered', 'Unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `specification` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `image`, `name`, `price`, `category`, `brand`, `description`, `specification`) VALUES
(1, 'parts/audir8.jpg', 'Audi R8 V10 Engine', 3500, 'Engine', 'Audi', 'The Petrol engine is 5204 cc . It is available with Automatic transmission.Depending upon the variant and fuel type the R8 has a mileage of 5.71 kmpl & Ground clearance of R8 is 110mm.', 'Torque at rpm	560 N⋅m. '),
(2, 'parts/auditfsi.jpg', 'Audi TFSI Engine', 2895, 'Engine', 'Audi', 'The RC8 2.0 TFSI engine also featuring push-to-pass system which produces 30 hp (22 kW) later 60 hp (45 kW) for more overtaking manoeuvre improvement.', '325 ft-lbs of torque.'),
(3, 'parts/1620287_esticador-porta-frente-direita-audi-a4-avant-de-2012-a-2015-8k0837249d.jpeg', 'Right Front Door Opening Limiter', 100, 'Door', 'Audi', 'AUDI A5 S-LINE COUPE 07-16 CABRIO LEFT SIDE FRONT DOOR STOP CHECK STRAP 8T0837249.', 'High Metallic'),
(4, 'parts/Audi_wheels.jpg', 'Audi Alloy', 800, 'Wheels', 'Audi', '4x Brand New Audi A4, TT, RS6 style alloy wheels 19″. (Ref-AU036)', 'bolt pattern, thread size (THD), center bore (CB)'),
(5, 'parts/bmw_alloy.jpg', 'BMW Alloy of Wheel', 750, 'Wheels', 'BMW', 'The wheels will fit BMW 3 series E90, F30 – 4 series F32. – PCD: 5 x 120 – Offset (ET): 35, 38 – Rim width: 8.5J and 9.5J', '5×112 (4×4.41″) lug pattern'),
(6, 'parts/toyota_alloy.webp', 'Toyota Alloy for Wheel', 700, 'Wheels', 'Toyota', 'ALLOY WHEEL (BRONZE LIP) FOR TOYOTA QUALIS- GM1143B. 14\" X 4 HOLES X 114.3 PCD ; INTERNATIONAL ORDERS. Accepted ; 100% Satisfaction Guaranteed.', 'PCD 5x139.7 diameter 14'),
(7, 'parts/Audi_exhaust.jpg', 'Audi 4 Cylinder Exhaust', 958, 'Exhaust', 'Audi', 'The sound of this exhaust is a fantastic, high pitched F1 style which really gives the R8 the sound it deserves. Audi A3 8L 1.9 TDI · Additional information · Related products · RRC Iron Deironizer & Fallout Remover 1L ·', 'No. of Cylinder, 4 ; Power, 260 bhp@5000-6000 rpm'),
(8, 'parts/audi_hood.webp', 'Audi Dry Carbon Fiber Double Sided', 1256, 'Hood', 'Audi', 'Hood Panel. Part has related component that cannot be reused/reinstalled protect strip. Fits A5, RS5, S5 Convertible,.', 'Double Sided Hood'),
(9, 'parts/audi_mirror.webp', 'Audi Gloss Black Mirror', 350, 'Mirror', 'Audi', 'Audi q3 autofolding side mirror with blinkeraandWe bring vast industrial experience and expertise in this business, involved in offering a high-quality range of carAccessories', '‎7 5/8 inch = 19.3 cm'),
(10, 'parts/audi-brake.jpg', 'Audi Brake Pad', 250, 'Brake', 'Audi', 'When it comes to speed and superior handling, your Audi A4 is at the top of its class. All of that fast driving takes a toll on your brake pads, though.', 'thickness: C38 - 17 (16) mm'),
(14, 'parts/lamboengine.webp', 'Lamborghini V12 Engine', 24995, 'Engine', 'Lamborghini', 'Lamborghini announces a new, hybridized 6.5-liter V-12 powertrain that makes up to 1001 horsepower', '814 horsepower'),
(18, 'parts/lamborghiniwheels.jpeg', 'Lamborghini Huracan Wheels', 200, 'Wheels', 'Lamborghini', 'The car model features specialty wheels which have a unique appearance and are 18 x 9 inches on the front and 18 x 13 inch on the rear', ' 255 / 35 R19'),
(19, 'parts/lamborghiniexhaust.jpg', 'Lamborghini SLP740 Exhaust', 12995, 'Exhaust', 'Lamborghini', 'The Fi EXHAUST system is designed with a valvetronic technology to control airflow, sound volume and enhance the overall performance and torque', 'Lamborghini Aventador LP700 exhaust Titanium weights only 9lb 2oz'),
(20, 'parts/lamborghinihoods.jpg', 'Lamborghini Hoods', 350, 'Hood', 'Lamborghini', 'The hood is constructed of the finest Autoclaved Pre-Impregnated Carbon Fiber', ' Dimensions,:192 × 55 × 48 cm'),
(21, 'parts/lamborghinimirror.jpg', 'Lamborghini Side Mirror', 259, 'Mirror', 'Lamborghini', 'Crafted with precision and passion, these carbon fiber side mirrors are more than just an accessory', 'One is the mirror installed inside the car'),
(22, 'parts/lamborghinibrake.jpg', 'Lamborghini  Disc Brakes', 300, 'Brakes', 'Lamborghini', ' most of the Lamborghini lineup comes with carbon-ceramic brakes on both the front and the rear', 'Front aluminum 10 piston brake calipers and single-piston rear calipers'),
(23, 'parts/lamborghinilight.jpg', 'Lamborghini Tail Light', 2300, 'Light', 'Lamborghini', 'All of the latest Lamborghini vehicles has LED headlights and LED lighting throughout the vehicle', 'Displacement 6498.5 cm³ (396.6 cu in)'),
(24, 'parts/lamborghinidoors.jpg', 'Lamborghini Chevrolet C8 Corvette Doors', 145, 'Doors', 'Lamborghini', 'Scissor doors are automobile doors that rotate vertically at a fixed hinge at the front of the door, rather than outward as with a conventional door', 'These doors are unlike conventional doors as they open upwards instead of swinging out'),
(25, 'parts/bmwengine.webp', 'BMW S65 Engine', 25000, 'Engine', 'BMW', 'The more common inline-four and V8 layouts are also produced by BMW', '621bhp and 737lb ft of torque'),
(26, 'parts/bmwexhaust.webp', 'BMW M3 Titanium Exhaust', 12000, 'Exhaust', 'BMW', 'For car connoisseurs: The BMW M Performance exhaust system is the result of a collaboration between BMW M GmbH and Akrapovič, one of the leading producers of premium-quality titanium exhaust systems', 'Genuine Exhaust Tail Pipe Trim Chrome 90mm Diameter Tailpipe 18 30 8 686 703'),
(27, 'parts/bmwhood.jpg', 'RW Carbon BMW F20 F22 F87 M2 Vented Carbon Fiber Hood', 1999, 'Hood', 'BMW', 'The carbon hood of BMW X7 has pronounced structure with a bump and rather sharp ledges on the sides', '530e, 530e xDrive, 530i, 530i xDrive'),
(28, 'parts/bmwmirror.webp', 'BMW Black Mirror', 78, 'Mirror', 'BMW', 'Understand the lights and mirror functions in your BMW, such as how to adjust the wing mirrors, with our handy range of how-to videos', 'Exterior mirrors foldable with automatic anti-dazzle function on driver side, mirror heating, memory and integrated LED turn indicators'),
(29, 'parts/bmwbrake.webp', 'BMW M3 or M4 to Carbon Brakes', 2395, 'Brakes', 'BMW', 'When it comes to braking systems, there are two main types of brakes: disc brakes and drum brakes. Disc brakes are the most common type of brakes used in modern vehicles, and they offer better performance than drum brakes', '370x30mm, dimpled & slotted 4-piston red, orange, or yellow Brembo'),
(30, 'parts/bmwlight.webp', 'BMW F30 3-Series and F80 M3 Lights', 756, 'Lights', 'BMW', 'As a general rule, BMW color codes their dashboard lights: Red - Indicates a problem that requires immediate action. Orange and Yellow - Indicates a vehicle warning that requires attention soon, but is not critical', 'H11 T15 Lights'),
(31, 'parts/bmwdoor.jpg', 'BMW i8 Authentic W Open Doors', 359, 'Doors', 'BMW', 'The flush door handles, the frameless doors and the window outline, known as the “Streamflow”, that tapers towards the rear are all harmoniously integrated', 'Dimensions & Weight ; Length. 4325 mm ; Width. 1645 mm ; Height. 1380 mm ; Track, Front. 1407 mm  Track, Rear. 1415 mm'),
(32, 'parts/toyotaengine.webp', 'Toyota Turbo Diesel Engine', 1650, 'Engine', 'Toyota', 'Toyota Industries manufactures diesel and gasoline engines with displacement of 2,000 cc to 4,500 cc', ' 96-107 kW 127-143 HP'),
(33, 'parts/toyotaexhaust.jpg', 'Toyota GT86 Exhaust', 1295, 'Exhaust', 'Toyota', 'The exhaust on your Toyota vehicle works like a filter. Simply put, it removes any harmful toxins from the combustion process. It also improves engine performance and helps improve fuel combustion', 'Exhaust pipe size is 2.00 inches.');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` varchar(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `uname`, `name`, `email`, `password`, `dob`, `country`, `image`) VALUES
('2003', 'suyash', 'Suyash Prabhakar Dange', 'suyashdange00@gmail.com', '1111', '2003-12-09', 'India', 'profile/profile.jpg'),
('2004', 'Swapnil_45', 'Swapnil Krushna Kadam', 'swapnil@gmail.com', '1111', '2003-04-05', 'India', 'profile/swapnil.jpg'),
('2121', 'Onkar4141', 'Onkar Balu Jagtap', 'onkar@gmail.com', '1111', '2003-07-03', 'India', 'profile/onkar.jpg'),
('4215', 'spiderman', 'Bhushan Bhimrao Dhende', 'bhushan@gmail.com', '1111', '2001-04-03', 'India', 'profile/bhushan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
