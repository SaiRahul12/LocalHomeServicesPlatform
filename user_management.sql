-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 03:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `expert_name` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `payment_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `booking` (`id`, `user_id`, `expert_name`, `service_name`, `booking_date`, `booking_time`, `payment_amount`) VALUES
(6, 1, 'Rajesh Sharma', 'Home Maintenance', '2023-08-15', '10:00:00', 1500.00),
(7, 2, 'Priya Patel', 'Cleaning Services', '2023-08-16', '02:30:00', 1200.50),
(8, 3, 'Alok Singh', 'Beauty and Personal Care', '2023-08-17', '11:45:00', 800.75),
(9, 4, 'Deepika Choudhary', 'Health and Wellness', '2023-08-18', '09:00:00', 2000.00),
(10, 5, 'Suresh Kumar', 'Moving and Relocation', '2023-08-19', '03:00:00', 2500.25),
(26, 1, 'Neha Gupta', 'Child and Elderly Care', '2023-08-20', '01:30:00', 900.00),
(27, 2, 'Amit Verma', 'Automotive Services', '2023-08-21', '10:00:00', 1800.50),
(28, 3, 'Mohan Kumar', 'Technology Services', '2023-08-22', '02:45:00', 1500.75),
(29, 4, 'Smita Chawla', 'Event Planning and Management', '2023-08-23', '11:30:00', 2200.00),
(30, 5, 'Rahul Sharma', 'Home Maintenance', '2023-08-24', '03:15:00', 1300.25);

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Home Maintenance'),
(2, 'Cleaning Services'),
(3, 'Beauty and Personal Care'),
(4, 'Health and Wellness'),
(5, 'Moving and Relocation'),
(6, 'Event Planning and Management'),
(7, 'Child and Elderly Care'),
(8, 'Automotive Services'),
(9, 'Technology Services');
CREATE TABLE `expert` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `services` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `expert` (`id`, `full_name`, `email`, `phone_number`, `location`, `profession`, `services`, `about`) VALUES
(1, 'Neha Gupta', 'neha@example.com', '1234567890', 'Delhi', 'Child and Elderly Care', 'Child and Elderly Care', 'Experienced caregiver for children and elderly individuals.'),
(2, 'Amit Verma', 'amit@example.com', '9876543210', 'Mumbai', 'Automotive Services', 'Automotive Services', 'Skilled mechanic with expertise in automotive repairs.'),
(3, 'Mohan Kumar', 'mohan@example.com', '8765432109', 'Bangalore', 'Technology Services', 'Technology Services', 'IT professional specializing in software development and tech solutions.'),
(4, 'Smita Chawla', 'smita@example.com', '7890123456', 'Chennai', 'Event Planning and Management', 'Event Planning and Management', 'Event planner with a creative and detail-oriented approach.'),
(5, 'Rahul Sharma', 'rahul@example.com', '2345678901', 'Hyderabad', 'Home Maintenance', 'Home Maintenance', 'Experienced handyman offering home maintenance and repair services.'),
(6, 'Rajesh Sharma', 'rajesh@example.com', '9876543210', 'Delhi', 'Home Maintenance', 'Home Maintenance', 'Skilled in various home improvement and repair tasks.'),
(7, 'Priya Patel', 'priya@example.com', '7890123456', 'Mumbai', 'Cleaning Services', 'Cleaning Services', 'Professional cleaner with a focus on cleanliness and organization.'),
(8, 'Alok Singh', 'alok@example.com', '2345678901', 'Bangalore', 'Beauty and Personal Care', 'Beauty and Personal Care', 'Experienced beautician providing a range of beauty treatments.'),
(9, 'Deepika Choudhary', 'deepika@example.com', '8765432109', 'Chennai', 'Health and Wellness', 'Health and Wellness', 'Certified wellness coach promoting a healthy lifestyle.'),
(10, 'Suresh Kumar', 'suresh@example.com', '1234567890', 'Hyderabad', 'Moving and Relocation', 'Moving and Relocation', 'Relocation expert assisting individuals and families with smooth moves.'),
(11, 'sddf', 'sai@gmail.com', '8999999999', 'dscd', 'dsffs', 'Cleaning Services', 'df'),
(12, 'sddf', 'sai@gmail.com', '8999999999', 'dscd', 'dsffs', 'Cleaning Services', 'df'),
(13, 'ygyhg', 'hfhhgf@h.com', '888999988999', 'hghfgf', 'hgfhfg', 'Home Maintenance and Repair', 'hgff'),
(14, 'jhdffhfb', 'jdfnbfdsf@jhbfg.com', '98989', 'dsfhbdsf', 'ndfsgvbdf', 'Home Maintenance and Repair', 'dfv'),
(15, 'manii', 'sa@3.g', '6766556', 'gd', 'bggdfg', 'Event Planning and Management', 'gfdfdg');

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `services` (`id`, `category_id`, `name`, `description`, `price`) VALUES
(1, 1, 'Plumbing', 'Professional plumbing services for your home.', 50.00),
(2, 1, 'Electrical Repair', 'Expert electrical repair and troubleshooting.', 60.00),
(3, 2, 'House Cleaning', 'Thorough cleaning of your living space.', 40.00),
(4, 2, 'Carpet Cleaning', 'Deep cleaning for your carpets and rugs.', 30.00),
(5, 3, 'Hair Styling', 'Haircuts, styling, and treatments by professionals.', 25.00),
(6, 3, 'Spa Treatment', 'Relaxing spa treatments for body and skin.', 70.00),
(7, 4, 'Yoga Classes', 'Guided yoga sessions for physical and mental well-being.', 15.00),
(8, 4, 'Personal Training', 'Customized fitness training and coaching.', 40.00),
(9, 5, 'Local Moving', 'Professional local moving and relocation services.', 120.00),
(10, 5, 'Long Distance Moving', 'Efficient long-distance moving solutions.', 300.00),
(11, 6, 'Event Planning', 'Expert planning and coordination for special events.', 80.00),
(12, 6, 'Catering', 'Delicious catering services for gatherings.', 50.00),
(13, 7, 'Child Care', 'Professional childcare services for children.', 20.00),
(14, 7, 'Elderly Care', 'Compassionate care for elderly individuals.', 25.00),
(15, 8, 'Car Repair', 'Auto repair and maintenance by skilled mechanics.', 60.00),
(16, 8, 'Car Detailing', 'Thorough cleaning and detailing for your car.', 40.00),
(17, 9, 'IT Support', 'Expert IT support for technical issues and setup.', 30.00),
(18, 9, 'Website Development', 'Custom website development and design.', 100.00),
(19, 10, 'Pest Control', 'Effective pest control solutions for your home.', 45.00),
(20, 10, 'Gardening Services', 'Expert gardening and landscaping services.', 35.00),
(21, 11, 'Language Tutoring', 'Professional language tutoring and lessons.', 25.00),
(22, 11, 'Math Tutoring', 'Tutoring in mathematics for various levels.', 30.00),
(23, 12, 'Legal Consultation', 'Expert legal advice and consultation.', 50.00),
(24, 12, 'Notary Services', 'Authorized notary services for documents.', 15.00),
(25, 13, 'Home Renovation', 'Renovation and remodeling for your home.', 150.00),
(26, 13, 'Interior Design', 'Creative interior design and decoration.', 80.00),
(27, 14, 'Online Coaching', 'Virtual coaching sessions for personal growth.', 40.00),
(28, 14, 'Life Coaching', 'Professional life coaching and guidance.', 60.00),
(29, 15, 'Computer Repair', 'Expert computer repair and troubleshooting.', 40.00),
(30, 15, 'Data Recovery', 'Data recovery services for lost files.', 50.00),
(31, 16, 'Photography', 'Photography services for special occasions.', 70.00),
(32, 16, 'Videography', 'Professional video recording and editing.', 90.00),
(33, 17, 'Nutrition Consultation', 'Expert nutrition advice and consultation.', 25.00),
(34, 17, 'Fitness Classes', 'Group fitness classes for all levels.', 20.00);
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone_number`, `role`, `created_at`) VALUES
(1, 'sai', 'ss', 'ksai@gmail.com', '', 'user', '2023-08-13 18:03:07'),
(2, '21bce9121', '1234', 'sai@gmailcom', '1234567890', 'user', '2023-08-13 18:13:26'),
(3, 'neha123', 'password123', 'neha@example.com', '9876543210', 'user', '2023-08-13 21:04:27'),
(4, 'amit456', 'password456', 'amit@example.com', '8765432109', 'user', '2023-08-13 21:04:27'),
(5, 'mohan789', 'password789', 'mohan@example.com', '7654321098', 'user', '2023-08-13 21:04:27'),
(6, 'smita234', 'password234', 'smita@example.com', '6543210987', 'user', '2023-08-13 21:04:27'),
(7, 'rahul567', 'password567', 'rahul@example.com', '5432109876', 'user', '2023-08-13 21:04:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
