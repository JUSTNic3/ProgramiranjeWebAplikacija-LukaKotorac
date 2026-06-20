-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2026 at 05:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aninews`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article_date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `lead_text` text NOT NULL,
  `heading_1` varchar(255) NOT NULL,
  `paragraph_1` text NOT NULL,
  `paragraph_2` text NOT NULL,
  `heading_2` varchar(255) NOT NULL,
  `paragraph_3` text NOT NULL,
  `paragraph_4` text NOT NULL,
  `heading_3` varchar(255) NOT NULL,
  `paragraph_5` text NOT NULL,
  `paragraph_6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `news_id`, `title`, `article_date`, `image`, `lead_text`, `heading_1`, `paragraph_1`, `paragraph_2`, `heading_2`, `paragraph_3`, `paragraph_4`, `heading_3`, `paragraph_5`, `paragraph_6`) VALUES
(1, 1, 'Solo Leveling Season 2 Officially Announced: Everything We Know So Far', '2025-07-15', 'solo-leveling-banner.jpg', 'Fans of Solo Leveling have finally received the news they were waiting for. Following the huge success of Season 1, the anime adaptation will officially continue with a second season.', 'What Was Announced?', 'During a special event held by A-1 Pictures, producers confirmed that production on Season 2 is already underway. A teaser visual and a short promotional video were also released to celebrate the announcement.', 'The first season quickly became one of the most watched anime series worldwide, attracting both longtime manhwa readers and newcomers to the franchise.', 'What Can Fans Expect?', 'Season 2 is expected to adapt the Red Gate and Demon Castle arcs, continuing Sung Jin-Woo\'s transformation into one of the strongest hunters in existence.', 'Viewers can expect more large-scale battles, stronger enemies, and deeper exploration of the mysterious powers behind the System.', 'Release Date', 'Although an exact release date has not yet been announced, industry insiders expect the new season to premiere sometime in early 2026.', 'More details are expected to be revealed in the coming months as production progresses.'),
(2, 2, 'New Demon Slayer Movie Breaks Records', '2025-07-12', 'demon-slayer-banner.jpg', 'The latest Demon Slayer movie has achieved major success, attracting anime fans around the world and setting impressive box office results.', 'A Major Success for Anime Films', 'Demon Slayer has once again proven how popular anime movies can be in cinemas. The new film quickly gained attention because of its animation quality, emotional story, and strong fan support.', 'Many viewers praised the movie for its action scenes and visual style, which continue to be some of the strongest elements of the franchise.', 'Why Fans Are Excited', 'The movie continues important parts of the Demon Slayer story and gives fans more time with their favorite characters.', 'Its success also shows that anime has become a major part of global entertainment, not only in Japan but around the world.', 'What Comes Next', 'More information about future Demon Slayer anime projects is expected to be revealed after the movie finishes its cinema run.', 'Fans are already looking forward to the next part of the story and future announcements from the studio.'),
(3, 3, 'Attack on Titan Creator Announces New Project', '2025-07-10', 'attack-on-titan-banner.jpg', 'The creator of Attack on Titan has announced a new project, creating excitement and curiosity among fans of the original series.', 'A New Direction', 'After the conclusion of Attack on Titan, fans have been interested in what the creator would work on next.', 'The announcement suggests that the new project may explore different themes while still keeping the dramatic storytelling style that made Attack on Titan popular.', 'Fan Reactions', 'Many fans reacted quickly online, sharing theories and expectations about the new project.', 'Some hope it will be connected to Attack on Titan, while others are excited to see a completely new story.', 'More Details Coming Soon', 'At the moment, only limited information has been revealed about the project.', 'More details are expected in future announcements, including possible release dates, format, and story information.'),
(4, 4, 'Chainsaw Man Movie Receives New Release Window', '2026-06-19', 'chainsaw-man-banner.jpg', 'Fans of Chainsaw Man have received new information regarding the highly anticipated movie adaptation. The latest announcement provides a clearer idea of when audiences can expect the film to arrive.', 'A New Update From MAPPA', 'Studio MAPPA shared new information about the upcoming movie during a recent industry presentation. The announcement immediately attracted attention from anime fans around the world.', 'Although an exact release date has not yet been confirmed, the studio indicated that production is progressing according to schedule and that additional promotional material will be released in the coming months.', 'Fan Expectations Continue To Grow', 'Chainsaw Man quickly became one of the most discussed anime series thanks to its unique story, memorable characters, and high-quality animation.', 'Many fans are particularly excited to see how the movie adapts one of the manga\'s most popular story arcs and how it expands on the events of the television series.', 'What Happens Next', 'The studio is expected to reveal additional details, including trailers and cast announcements, as the release window approaches.', 'Until then, fans will continue to follow official updates and speculate about what surprises the movie may bring when it finally reaches theaters.'),
(5, 5, 'Frieren Season 2 Officially Confirmed: What Fans Can Expect', '2026-06-20', 'frieren-banner.jpg', 'Following the enormous success of its first season, Frieren: Beyond Journey\'s End has officially been renewed for a second season. Fans of the fantasy series are eager to continue the journey alongside Frieren and her companions as they explore new lands and face new challenges.', 'A Well-Deserved Return', 'The first season of Frieren received widespread praise from both critics and viewers. Its emotional storytelling, beautiful animation, and thoughtful exploration of time and memory helped it stand out among recent anime releases.\r\n', 'Many fans considered the series one of the strongest fantasy anime of the decade, leading to strong demand for a continuation shortly after the first season concluded.\r\n', 'What Will Season 2 Cover?', 'The upcoming season is expected to continue adapting the original manga, introducing new characters, locations, and magical challenges for the main cast.\r\n', 'Viewers can also expect further development of Frieren\'s relationships with her companions as the story continues to explore themes of friendship, loss, and personal growth.\r\n', 'Looking Ahead', 'Although an exact release date has not yet been announced, production is reportedly already underway. Additional trailers and promotional materials are expected in the coming months.', 'With strong source material and an enthusiastic fanbase, expectations for the second season are extremely high. Many viewers are already looking forward to returning to Frieren\'s world and continuing the adventure.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `summary`, `image`, `created_at`) VALUES
(1, 'Solo Leveling Season 2 Officially Announced', 'A-1 Pictures has confirmed that production on Season 2 is already underway.', 'solo-leveling.jpg', '2025-07-15'),
(2, 'New Demon Slayer Movie Breaks Records', 'The latest Demon Slayer film has become one of the highest-grossing anime movies of the year.', 'anime1.jpg', '2025-07-12'),
(3, 'Attack on Titan Creator Announces New Project', 'Fans are eagerly awaiting more information.', 'anime2.jpg', '2025-07-10'),
(4, 'Chainsaw Man Movie Receives New Release Window', 'Studio MAPPA has revealed a new update regarding the upcoming Chainsaw Man movie adaptation.', 'chainsaw-man.jpg', '2026-06-19'),
(5, 'Frieren Season 2 Officially Confirmed', 'The award-winning fantasy anime Frieren: Beyond Journey\'s End is returning with a second season, bringing fans back to one of the most beloved fantasy worlds in recent years.\r\n', 'frieren.jpg', '2026-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `anime_name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `anime_name`, `rating`, `image`) VALUES
(1, 'Frieren', 9, 'review1.jpg'),
(2, 'Solo Leveling', 8, 'review2.jpg'),
(3, 'One Piece', 10, 'review3.jpg'),
(4, 'Demon Slayer', 9, 'anime1.jpg'),
(5, 'Attack on Titan', 10, 'anime2.jpg'),
(6, 'My hero academia', 10, 'mha.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'Luka Kotorac', 'lkotorac@tvz.hr', '$2y$10$A5TF9fI1hpE2BDS1bhNmJOYBjdcX7Ulyg72iVpKjtTRqIk86dOIVG', 'admin'),
(2, 'Vito Sereni', 'vsereni@tvz.hr', '$2y$10$Kb.U2ejEZHUbevwROIIwE.jdlkeTHN3ynTEZ27FxlN6Q9P3qp3fxm', 'user'),
(3, 'Ivan', 'irajkovic@tvz.hr', '$2y$10$GPrAku5RkiE/TBsWi2MnbuJ6jJVOKzqw6F.t.BYhtidqbf.rIscQq', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
