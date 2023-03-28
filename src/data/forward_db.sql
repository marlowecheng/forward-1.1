-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2023 at 11:27 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forward_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentee`
--

CREATE TABLE `mentee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_bio` mediumtext,
  `target_area` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mentee`
--

INSERT INTO `mentee` (`id`, `name`, `user_bio`, `target_area`) VALUES
(1, 'Dave Koo', 'Currently pursuing a New Media Design & Web Development Diploma with an expected graduation date of July 2023', 'Front-End Developer'),
(2, 'Rikki Soriano', 'I\'m an upcoming UIUX Designer/Web Developer! I have a fiery passion for design and creative media.', 'Front-End Developer'),
(3, 'Karina Song', 'Full-stack web developer and designer pivoting from Quality Assurance in the food industry. My love of the web development and design world started with a UX course and ran from there. I loved getting wrapped up in everything from working through a bug to moving a pixel by one space.', 'Full-Stack Developer'),
(4, 'Kayla Tran', 'I\'m a proud Asian-Canadian who seeks to learn new things and diversify my skillset and experiences both inside and outside of my career. With my open-minded, optimistic, and hardworking approach to learning, I invest all my curiosity into the work I do.', 'UIUX Design'),
(5, 'Marlowe Cheng', 'I am an aspiring front-end web developer and graphic designer, currently learning React and Tailwind. I\'m currently a student in New Media Design and Web Development at BCIT. I love working with CSS, SASS, HTML, and jQuery. I also enjoy working with Adobe Illustrator, Photoshop, and After Effects.', 'Front-End Developer');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_bio` mediumtext,
  `job_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id`, `name`, `user_bio`, `job_title`) VALUES
(1, 'Airrick Dunfield', 'Instructor at BCIT. Developer. Cyclist. Dungeon Master. Coffee Drinker. Forest Explorer. He/Him. ', 'BCIT Instructor'),
(2, 'Conan Galloway', 'I\'m an instructor with BCIT in the New Media Design and Web Development program.', 'BCIT Instructor'),
(3, 'Richard Te', 'I have a bachelor’s degree in industrial engineering and graduated from the program I teach now. Both have opened many doors throughout my career, ranging from brand marketing to instructional design, and digital media development. My true passion though is teaching.', 'BCIT Instructor'),
(4, 'Sarah Nelson', 'My name is Sarah Nelson (she/her) and I\'m a communication instructor in CST at BCIT with a Master of Arts in Professional Communication. ', 'BCIT Instructor'),
(5, 'Justine Fox', 'I\'m Mx. Justine Celeste Fox (they/she). I am a former BCIT CIT and BCIT CST BTech alumni and have held various roles that I would classify as \"DevOps\".', 'DevOps'),
(6, 'Mansur Mirani', 'I lead Mastercard’s Vancouver Tech Hub, your neighbour in Downtown Vancouver. ', 'Software Engineer'),
(7, 'Chris Thompson', 'I teach term 1 programming methods and term 2 OOP to CST students at the BCIT downtown campus.', 'BCIT Instructor'),
(8, 'Maria Davis', 'I\'m a recent CST grad, now a Software Engineer at Mastercard. ', 'Software Engineer'),
(9, 'Hoda', 'My name is Hoda, and I feel incredibly grateful to be a faculty member at BCIT.', 'BCIT Instructor');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_tags` varchar(255) NOT NULL,
  `project_image` varchar(255) NOT NULL,
  `featured` int(1) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_title`, `project_tags`, `project_image`, `featured`, `user_id`) VALUES
(1, 'Pinnacle Real Estate', 'CODING', 'pinnacle-thumb.jpg', 1, 1),
(2, 'Live 2K', 'CODING', 'live-2k-thumb.jpg', 1, 2),
(3, 'Weather Now React.js App', 'CODING', 'weather-now-thumb.jpg', 0, 2),
(4, 'React To-Do App', 'CODING', 'react-to-do-thumb.jpg', 1, 3),
(5, 'Restwel Responsive Banner', 'CODING', 'restwel-thumb.jpg', 1, 5),
(6, 'Northern Café Menu', 'DESIGN', 'northern-cafe-thumb.jpg', 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentee`
--
ALTER TABLE `mentee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_FK_1` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentee`
--
ALTER TABLE `mentee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_FK_1` FOREIGN KEY (`user_id`) REFERENCES `mentee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
