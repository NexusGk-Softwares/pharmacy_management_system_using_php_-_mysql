-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 06:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `pms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `create_generic_name`
--

CREATE TABLE `create_generic_name` (
  `generic_id` int(100) NOT NULL,
  `generic_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_generic_name`
--

INSERT INTO `create_generic_name` (`generic_id`, `generic_name`) VALUES
(1, 'Antiviral'),
(7, 'Paracetamol'),
(8, 'Amlodipine'),
(9, 'Latanoprost Solution'),
(10, 'Levocetirizine Dihydrochloride'),
(11, 'Meloxicam'),
(12, 'Acyclovir Capsule'),
(13, 'Simvastatin Tablets'),
(15, 'Sample Med');

-- --------------------------------------------------------

--
-- Table structure for table `create_medicine_name`
--

CREATE TABLE `create_medicine_name` (
  `medicine_name_id` int(20) NOT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `generic_id` int(20) DEFAULT NULL,
  `generic_name` varchar(50) DEFAULT NULL,
  `medicine_presentation_id` int(15) DEFAULT NULL,
  `medicine_presentation_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_medicine_name`
--

INSERT INTO `create_medicine_name` (`medicine_name_id`, `medicine_name`, `generic_id`, `generic_name`, `medicine_presentation_id`, `medicine_presentation_name`) VALUES
(1, 'Antiva®', NULL, 'Antiviral', NULL, NULL),
(2, 'Napa Extra', NULL, 'Paracetamol', NULL, NULL),
(3, 'Ace Plus', NULL, 'Paracetamol', NULL, NULL),
(6, 'Amdocal 10', NULL, 'Amlodipine', NULL, NULL),
(7, 'Amdocal 5', NULL, 'Amlodipine', NULL, NULL),
(8, 'Notem Plus', NULL, 'Paracetamol', NULL, NULL),
(9, 'Niko', NULL, 'Paracetamol', NULL, NULL),
(10, 'Xalatan', NULL, 'Latanoprost Solution', NULL, NULL),
(11, 'Xyzal', NULL, 'Levocetirizine Dihydrochloride', NULL, NULL),
(12, 'Mobic', NULL, 'Meloxicam', NULL, NULL),
(13, 'Zovirax', NULL, 'Acyclovir Capsule', NULL, NULL),
(14, 'Zocor', NULL, 'Simvastatin Tablets', NULL, NULL),
(16, 'Med 101', NULL, 'Sample Med', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `create_medicine_presentation`
--

CREATE TABLE `create_medicine_presentation` (
  `medicine_presentation_id` int(20) NOT NULL,
  `medicine_presentation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_medicine_presentation`
--

INSERT INTO `create_medicine_presentation` (`medicine_presentation_id`, `medicine_presentation`) VALUES
(1, 'Capsule'),
(2, 'Tablet'),
(4, 'Liquid / Syrup'),
(6, 'Test Only');

-- --------------------------------------------------------

--
-- Table structure for table `create_product_category`
--

CREATE TABLE `create_product_category` (
  `record_id` int(100) NOT NULL,
  `product_category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_product_category`
--

INSERT INTO `create_product_category` (`record_id`, `product_category`) VALUES
(1, 'Surgical Product'),
(3, 'Savlon');

-- --------------------------------------------------------

--
-- Table structure for table `create_product_name`
--

CREATE TABLE `create_product_name` (
  `record_id` int(100) NOT NULL,
  `product_category` varchar(250) NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_product_name`
--

INSERT INTO `create_product_name` (`record_id`, `product_category`, `product_name`) VALUES
(1, 'Surgical Product', 'Sterile Surgical Gloves');

-- --------------------------------------------------------

--
-- Table structure for table `create_supplier`
--

CREATE TABLE `create_supplier` (
  `supplier_id` int(100) NOT NULL,
  `supplier_name` varchar(250) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `previous_due` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_supplier`
--

INSERT INTO `create_supplier` (`supplier_id`, `supplier_name`, `mobile`, `address`, `previous_due`) VALUES
(1, 'Unilever Bangladesh Limited', ' +880 2 988 8452  ', 'ZN Tower, Plot# 02  \r\nRoad # 08, Gulshan - 1  \r\nDhaka - 1212.  ', 0),
(2, 'ACI Pharmaceuticals', '(+8802) 8878603', '89 Gulshan Ave, Dhaka 1212', 0),
(3, 'Square Pharmaceuticals', '+88-02-8833047-56', '48, Mohakhali C/A Dhaka 1212', 0),
(4, 'Beximco Pharmaceuticals Ltd.', '02-58611001', 'Dhaka', 0),
(5, 'XYZ Pharmaceuticals Ltd', '7850125690', 'Allace Avenue', 2699),
(6, 'Acezm Pharmaceuticals', '7410256900', '2610 Courtright Street', 9666),
(7, 'Ademez Pharmaceuticals', '7890240010', '3667 Jerome Avenue', 990),
(9, 'ABC Drugs', '78956421', 'Sample Address', 0);

-- --------------------------------------------------------

--
-- Table structure for table `insert_purchase_info`
--

CREATE TABLE `insert_purchase_info` (
  `purchase_id` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `invoice_id` int(20) DEFAULT NULL,
  `particulars` varchar(50) DEFAULT NULL,
  `medicine_presentation_id` int(20) DEFAULT NULL,
  `medicine_presentation` varchar(50) DEFAULT NULL,
  `medicine_name_id` int(20) DEFAULT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `generic_id` int(20) DEFAULT NULL,
  `generic_name` varchar(50) DEFAULT NULL,
  `supplier_id` int(20) DEFAULT NULL,
  `supplier_name` varchar(50) DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `qty` float DEFAULT NULL,
  `purchase_price` float DEFAULT NULL,
  `unit_sales_price` float DEFAULT NULL,
  `unit` varchar(11) NOT NULL,
  `purchase_paid` float DEFAULT NULL,
  `purchase_due` float DEFAULT NULL,
  `expiredate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insert_purchase_info`
--

INSERT INTO `insert_purchase_info` (`purchase_id`, `date`, `invoice_id`, `particulars`, `medicine_presentation_id`, `medicine_presentation`, `medicine_name_id`, `medicine_name`, `generic_id`, `generic_name`, `supplier_id`, `supplier_name`, `unit_price`, `qty`, `purchase_price`, `unit_sales_price`, `unit`, `purchase_paid`, `purchase_due`, `expiredate`) VALUES
(10, '2019-03-29', NULL, 'Purchase Medicine', 2, 'Tablet', 3, 'Ace Plus', 7, 'Paracetamol', 5, 'Square Pharmaceuticals Ltd.', 2.52, 200, 504, 3, 'Pcs', 350, 154, '2021-01-01'),
(12, '2019-03-30', NULL, 'Purchase Medicine', 2, 'Tablet', 2, 'Napa Extra', 7, 'Paracetamol', 4, 'Beximco Pharmaceuticals Ltd.', 2.5, 200, 500, 3, 'Pcs', 300, 200, '2020-01-01'),
(13, '2019-04-05', NULL, 'Purchase Medicine', NULL, 'Tablet', NULL, 'Amdocal 10', NULL, 'Amlodipine', NULL, 'Beximco Pharmaceuticals Ltd.', 6, 60, 360, 7, 'Pcs', 300, 60, '2019-04-01'),
(19, '2019-04-06', NULL, 'Payment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beximco Pharmaceuticals Ltd.', NULL, NULL, 0, NULL, '', 5, 255, NULL),
(20, '2019-04-06', NULL, 'Updated Purchase', NULL, 'Tablet', NULL, 'Amdocal 5', NULL, 'Amlodipine', NULL, 'Beximco Pharmaceuticals Ltd.', 4, 200, 800, 4.5, '5 gm', 500, 300, '2019-04-30'),
(21, '2021-08-03', NULL, 'Purchase Medicine', 2, 'Tablet', 9, 'Niko', 7, 'Paracetamol', 2, 'ACI Pharmaceuticals', 1, 4936, 5000, 2, '1000', 5000, 0, '2022-05-18'),
(22, '2021-08-17', NULL, 'Purchase Medicine', 4, 'Liquid / Syrup', 10, 'Xalatan', 9, 'Latanoprost Solution', 5, 'XYZ Pharmaceuticals Ltd', 89, 2100, 186900, 97, '2', 186900, 0, '2024-03-19'),
(23, '2021-08-17', NULL, 'Purchase Medicine', 2, 'Tablet', 11, 'Xyzal', 10, 'Levocetirizine Dihydrochloride', 7, 'Ademez Pharmaceuticals', 0.3, 1804, 555, 0.55, '2.5 mg/5 mL', 555, 0, '2025-10-15'),
(24, '2021-08-17', NULL, 'Purchase Medicine', 1, 'Capsule', 13, 'Zovirax', 12, 'Acyclovir Capsule', 5, 'XYZ Pharmaceuticals Ltd', 4.99, 1566, 7814.34, 5.45, '30 grams', 7814, 0.34, '2024-12-26'),
(25, '2021-08-17', NULL, 'Purchase Medicine', 2, 'Tablet', 14, 'Zocor', 13, 'Simvastatin Tablets', 6, 'Acezm Pharmaceuticals', 6, 1798, 10800, 7.55, '30', 5210, 5590, '2025-10-16'),
(26, '2022-06-10', NULL, 'Updated Purchase', 1, 'Capsule', 16, 'Med 101', 15, 'Sample Med', 9, 'ABC Drugs', 30, 50, 1500, 35, '250 mg', 1000, 500, '2022-08-25'),
(27, '2022-06-10', NULL, 'Payment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ABC Drugs', NULL, NULL, 0, NULL, '', 500, 0, NULL),
(28, '2022-06-10', NULL, 'Payment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beximco Pharmaceuticals Ltd.', NULL, NULL, 0, NULL, '', 200, 355, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales_product`
--

CREATE TABLE `sales_product` (
  `sales_id` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `invoice` int(20) DEFAULT NULL,
  `particular` varchar(50) DEFAULT NULL,
  `customer_id` int(20) DEFAULT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `mobile` varchar(11) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `medicine_presentation_id` int(20) DEFAULT NULL,
  `medicine_presentation` varchar(50) DEFAULT NULL,
  `medicine_name_id` int(20) DEFAULT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `generic_id` int(20) DEFAULT NULL,
  `generic_name` varchar(50) DEFAULT NULL,
  `qty` int(20) DEFAULT NULL,
  `unit_sales_price` float DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `total_amount` float DEFAULT NULL,
  `total_discount` float DEFAULT NULL,
  `discount_price` float DEFAULT NULL,
  `sales_paid` float DEFAULT NULL,
  `sales_due` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_product`
--

INSERT INTO `sales_product` (`sales_id`, `date`, `invoice`, `particular`, `customer_id`, `customer_name`, `mobile`, `customer_email`, `medicine_presentation_id`, `medicine_presentation`, `medicine_name_id`, `medicine_name`, `generic_id`, `generic_name`, `qty`, `unit_sales_price`, `total_price`, `total_amount`, `total_discount`, `discount_price`, `sales_paid`, `sales_due`) VALUES
(1, '2019-04-06', 1, 'Sales Medicine', NULL, NULL, '', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 10, 3, 30, 120, 5, 115, 115, NULL),
(2, '2019-04-06', 1, 'Sales Medicine', NULL, NULL, '', 'bmmahmud@gmail.com', NULL, 'Tablet', 2, 'Napa Extra', NULL, 'Paracetamol', 30, 3, 90, 120, 5, 115, 115, NULL),
(3, '2019-03-31', 2, 'Sales Medicine', NULL, NULL, '', 'bmmahmud@gmail.com', NULL, 'Tablet', 0, 'Amdocal 10', NULL, 'Amlodipine', 10, 7, 70, 70, 0, 70, 70, NULL),
(4, '2021-08-03', 3, 'Sales Medicine', NULL, NULL, '', 'bmmahmud@gmail.com', NULL, 'Tablet', 9, 'Niko', NULL, 'Paracetamol', 47, 2, 94, 94, 2, 92, 94, NULL),
(5, '2021-08-17', 4, 'Sales Medicine', NULL, NULL, '', 'testacc@gmail.com', NULL, 'Tablet', 9, 'Niko', NULL, 'Paracetamol', 17, 2, 34, 34, 0, 34, 34, NULL),
(6, '2021-08-17', 5, 'Sales Medicine', NULL, NULL, '', 'test22@gmail.com', NULL, 'Tablet', 0, 'Amdocal 5', NULL, 'Amlodipine', 66, 4.5, 297, 297, 2, 295, 295, NULL),
(7, '2021-08-17', 6, 'Sales Medicine', NULL, NULL, '', 'jamesr@gmail.com', NULL, 'Tablet', 11, 'Xyzal', NULL, 'Levocetirizine Dihydrochloride', 46, 0.55, 25.3, 25.3, 0, 25.3, 25.3, NULL),
(8, '2022-06-09', 7, 'Sales Medicine', NULL, NULL, '', 'mcooper@mail.com', NULL, 'Capsule', 16, 'Med 101', NULL, 'Sample Med', 4, 35, 140, 155.1, 0.1, 155, 155, NULL),
(9, '2022-06-09', 7, 'Sales Medicine', NULL, NULL, '', 'mcooper@mail.com', NULL, 'Tablet', 14, 'Zocor', NULL, 'Simvastatin Tablets', 2, 7.55, 15.1, 155.1, 0.1, 155, 155, NULL),
(10, '2022-06-10', 8, 'Sales Medicine', NULL, NULL, '', 'sam23@gmail.com', NULL, 'Capsule', 16, 'Med 101', NULL, 'Sample Med', 2, 35, 70, 70, 0, 70, 70, NULL),
(11, '2022-06-10', 9, 'Sales Medicine', NULL, NULL, '', 'test@mail.com', NULL, 'Capsule', 16, 'Med 101', NULL, 'Sample Med', 5, 35, 175, 175, 0, 175, 200, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `identity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `identity`) VALUES
(1, 'staff', '1A1DC91C907325C69271DDF0C944BC72', 'Staff'),
(2, 'johnny', '5f4dcc3b5aa765d61d8327deb882cf99', 'Staff'),
(3, 'jsmith', '9ddc44f3f7f78da5781d6cab571b2fc5', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_generic_name`
--
ALTER TABLE `create_generic_name`
  ADD PRIMARY KEY (`generic_id`);

--
-- Indexes for table `create_medicine_name`
--
ALTER TABLE `create_medicine_name`
  ADD PRIMARY KEY (`medicine_name_id`),
  ADD KEY `FK` (`generic_id`,`medicine_presentation_id`);

--
-- Indexes for table `create_medicine_presentation`
--
ALTER TABLE `create_medicine_presentation`
  ADD PRIMARY KEY (`medicine_presentation_id`);

--
-- Indexes for table `create_product_category`
--
ALTER TABLE `create_product_category`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `create_product_name`
--
ALTER TABLE `create_product_name`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `create_supplier`
--
ALTER TABLE `create_supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `insert_purchase_info`
--
ALTER TABLE `insert_purchase_info`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `FK` (`medicine_presentation_id`,`medicine_name_id`,`generic_id`,`supplier_id`);

--
-- Indexes for table `sales_product`
--
ALTER TABLE `sales_product`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `FK` (`customer_id`,`medicine_presentation_id`,`medicine_name_id`,`generic_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_generic_name`
--
ALTER TABLE `create_generic_name`
  MODIFY `generic_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `create_medicine_name`
--
ALTER TABLE `create_medicine_name`
  MODIFY `medicine_name_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `create_medicine_presentation`
--
ALTER TABLE `create_medicine_presentation`
  MODIFY `medicine_presentation_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `create_product_category`
--
ALTER TABLE `create_product_category`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `create_product_name`
--
ALTER TABLE `create_product_name`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_supplier`
--
ALTER TABLE `create_supplier`
  MODIFY `supplier_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `insert_purchase_info`
--
ALTER TABLE `insert_purchase_info`
  MODIFY `purchase_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sales_product`
--
ALTER TABLE `sales_product`
  MODIFY `sales_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
