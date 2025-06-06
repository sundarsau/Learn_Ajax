CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` smallint(6) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `age`, `gender`) VALUES
(1, 'Dr. Laurie Hauck MD', 'arturo22@example.com', 30, 'M'),
(2, 'Elwin Kovacek MD', 'berge.diana@example.com', 34, 'M'),
(3, 'Emma Macejkovic PhD', 'doyle.august@example.com', 22, 'F'),
(4, 'Ernest Stoltenberg', 'paris.flatley@example.com', 22, 'M'),
(5, 'Estel Carroll', 'estel.carroll@example.com', 32, 'M'),
(6, 'Estell Adams', 'alfonzo24@example.org', 43, 'M'),
(7, 'Etha Herzog', 'emmie88@example.net', 43, 'F'),
(8, 'Eugene Stanton', 'nmann@example.com', 54, 'F'),
(9, 'Evelyn Welch', 'linwood11@example.com', 34, 'F'),
(10, 'Glenda Armstrong Jr.', 'graham.savanah@example.net', 39, 'F'),
(11, 'Ila Stoltenberg', 'shanie.hermiston@example.org', 27, 'F'),
(12, 'Jamil Effertz DVM', 'markus99@example.com', 38, 'M'),
(13, 'Johnathon Runolfsdottir', 'elyse.rempel@example.com', 31, 'M'),
(14, 'Mr. Kareem Fay', 'dina.wehner@example.net', 31, 'M'),
(15, 'Fletcher Weissnat', 'jakubowski.madalyn@example.com', 28, 'M');

ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applications_email_unique` (`email`);

ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
