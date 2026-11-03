-- --------------------------------------------------------
-- StudentHub Database Setup Script
-- Database: `studenthub`
-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `studenthub`;
USE `studenthub`;

-- --------------------------------------------------------
-- 1. Table structure for table `users`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `student_id` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Dumping data for table `users`
-- --------------------------------------------------------

INSERT INTO `users` (`id`, `student_id`, `password`) VALUES
(1, '25cs003', '1234');

-- --------------------------------------------------------
-- 2. Table structure for table `events`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `events` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `event_date` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Dumping data for table `events`
-- --------------------------------------------------------

INSERT INTO `events` (`id`, `title`, `event_date`) VALUES
(1, 'Coding Competition', '25 July 2026'),
(2, 'AI Workshop', '28 July 2026'),
(3, 'Hackathon', '2 August 2026'),
(4, 'Sports Week', '10 August 2026'),
(5, 'Annual Function', '20 August 2026');