-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2014 at 12:08 PM
-- Server version: 5.5.34-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sportswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'rooott@gmail.com', '6a204bd89f3c8348afd5c77c717a097a');

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE IF NOT EXISTS `alerts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message_tease` text COLLATE utf8_unicode_ci NOT NULL,
  `message_text` text COLLATE utf8_unicode_ci NOT NULL,
  `message_icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message_date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message_date_expires` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message_role_client` int(11) NOT NULL DEFAULT '0',
  `message_role_sales` int(11) NOT NULL DEFAULT '0',
  `message_role_service` int(11) NOT NULL DEFAULT '0',
  `message_role_company` int(11) NOT NULL DEFAULT '0',
  `message_alert` int(11) NOT NULL DEFAULT '0',
  `message_archived` int(11) NOT NULL DEFAULT '0',
  `identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `alert_group`
--

CREATE TABLE IF NOT EXISTS `alert_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `read_status` int(10) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `priority` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ev_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_time` datetime NOT NULL,
  `ev_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `ev_name`, `ev_time`, `ev_place`) VALUES
(1, 'Something', '2013-12-12 00:00:00', 'Abbottabad'),
(2, 'hello', '0000-00-00 00:00:00', 'Abbottabad');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_user` int(11) NOT NULL,
  `to_user` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `read_status` int(11) DEFAULT '1',
  `notification` int(11) DEFAULT '1',
  `to_user_delete_status` int(11) NOT NULL,
  `from_user_delete_status` int(11) NOT NULL,
  `attachment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2013_11_07_183515_create_player_profile_currentTeam_table', 1),
('2013_11_07_183515_create_player_profile_photos_table', 1),
('2013_11_07_183515_create_player_profile_prevTeam_table', 1),
('2013_11_07_183515_create_player_profile_table', 1),
('2013_11_07_183515_create_player_profile_videos_table', 1),
('2013_11_07_183515_create_rink_addresses_table', 1),
('2013_11_07_183515_create_rink_home_teams_table', 1),
('2013_11_07_183515_create_rink_images_table', 1),
('2013_11_07_183515_create_rinks_table', 1),
('2013_11_07_183515_create_team_medics_table', 1),
('2013_11_07_183515_create_team_photos_table', 1),
('2013_11_07_183515_create_team_prevJerseys_table', 1),
('2013_11_07_183515_create_team_referees_table', 1),
('2013_11_07_183515_create_team_timeKeepers_table', 1),
('2013_11_07_183515_create_team_videos_table', 1),
('2013_11_07_183515_create_teams_table', 1),
('2013_11_07_183525_create_foreign_keys', 1),
('2013_11_15_070622_add_column_user_id_to_player_profile_table', 2),
('2013_11_26_043950_schedule_sheet', 2),
('2012_12_06_225921_migration_cartalyst_sentry_install_users', 3),
('2012_12_06_225929_migration_cartalyst_sentry_install_groups', 3),
('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot', 3),
('2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 3),
('2013_09_09_062700_create_inbox_table', 4),
('2013_09_10_105515_create_message_table', 4),
('2013_09_10_115157_create_group_alerts_table', 4),
('2013_09_11_104248_addPriorityColumnToGroupAlert', 4),
('2013_09_12_074751_change_column_name', 4),
('2013_11_27_045129_event', 4),
('2013_11_27_103712_add_team_id_to_player_profile', 4),
('2013_11_28_115208_add_column_to_teams', 4),
('2013_12_02_093818_add_colunm_to_inbox', 5),
('2013_12_03_094426_stream', 5),
('2013_12_10_074652_admin_login', 6);

-- --------------------------------------------------------

--
-- Table structure for table `player_profile`
--

CREATE TABLE IF NOT EXISTS `player_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `team_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `player_nickname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` date DEFAULT NULL,
  `weight` decimal(8,2) DEFAULT NULL,
  `height` decimal(8,2) DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shoots` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statistic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `achievements` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `player_profile`
--

INSERT INTO `player_profile` (`id`, `user_id`, `team_id`, `name`, `player_nickname`, `age`, `weight`, `height`, `position`, `shoots`, `statistic`, `achievements`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Muhammad Saqib', 'Saqib', '1984-06-07', 65.00, 5.00, 'forward', '2', '2', 'very good', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 1, 'Muhammad Saqib', 'Saqib', '1984-06-07', 65.00, 5.00, 'forward', '22', '2', 'sdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `player_profile_currentTeam`
--

CREATE TABLE IF NOT EXISTS `player_profile_currentTeam` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player_profile_id` int(10) unsigned NOT NULL,
  `current_team` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `player_profile_currentteam_player_profile_id_foreign` (`player_profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `player_profile_photos`
--

CREATE TABLE IF NOT EXISTS `player_profile_photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player_profile_id` int(10) unsigned NOT NULL,
  `player_profile_videos` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `player_profile_photos_player_profile_id_foreign` (`player_profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `player_profile_photos`
--

INSERT INTO `player_profile_photos` (`id`, `player_profile_id`, `player_profile_videos`) VALUES
(1, 1, 'download.jpg'),
(2, 2, 'image1161234401389364526.jpg'),
(3, 3, 'image1267359831389176611.png');

-- --------------------------------------------------------

--
-- Table structure for table `player_profile_prevTeam`
--

CREATE TABLE IF NOT EXISTS `player_profile_prevTeam` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player_profile_id` int(10) unsigned NOT NULL,
  `previous_team` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `player_profile_prevteam_player_profile_id_foreign` (`player_profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `player_profile_videos`
--

CREATE TABLE IF NOT EXISTS `player_profile_videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player_profile_id` int(10) unsigned NOT NULL,
  `player_profile_videos` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `player_profile_videos_player_profile_id_foreign` (`player_profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rinks`
--

CREATE TABLE IF NOT EXISTS `rinks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rink_layout_image` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rink_seating_capacity` int(11) NOT NULL,
  `rink_change_rooms` int(11) DEFAULT NULL,
  `rink_boardType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rink_other` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rink_highlights` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rink_history` text COLLATE utf8_unicode_ci,
  `rink_open_date_from` date DEFAULT NULL,
  `rink_open_date_to` date NOT NULL,
  `rink_close_date_from` date DEFAULT NULL,
  `rink_close_date_to` date NOT NULL,
  `rink_video` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `rink_description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rinks`
--

INSERT INTO `rinks` (`id`, `title`, `created_at`, `updated_at`, `rink_layout_image`, `rink_seating_capacity`, `rink_change_rooms`, `rink_boardType`, `rink_other`, `rink_highlights`, `rink_history`, `rink_open_date_from`, `rink_open_date_to`, `rink_close_date_from`, `rink_close_date_to`, `rink_video`, `rink_description`) VALUES
(1, 'London', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 250, 32, '23', 'arsenal', 'www.youtube.com', 'sdf', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 'sdfsdfsdfsdfsfsfsdfsdfsfds'),
(2, 'Cardiff', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 433, 32, '3', 'Liverpool', 'www.youtube.com', 'sdf', '2014-01-14', '2014-01-27', '2014-01-15', '2014-01-31', '', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `rink_addresses`
--

CREATE TABLE IF NOT EXISTS `rink_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rink_id` int(10) unsigned NOT NULL,
  `rink_addresse` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rink_addresses_rink_id_foreign` (`rink_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rink_addresses`
--

INSERT INTO `rink_addresses` (`id`, `rink_id`, `rink_addresse`) VALUES
(1, 1, 'xyz'),
(2, 2, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `rink_home_teams`
--

CREATE TABLE IF NOT EXISTS `rink_home_teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rink_id` int(10) unsigned NOT NULL,
  `home_team` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rink_home_teams_rink_id_foreign` (`rink_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rink_home_teams`
--

INSERT INTO `rink_home_teams` (`id`, `rink_id`, `home_team`) VALUES
(1, 1, 'Boltion'),
(2, 2, 'totenham');

-- --------------------------------------------------------

--
-- Table structure for table `rink_images`
--

CREATE TABLE IF NOT EXISTS `rink_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rink_id` int(10) unsigned NOT NULL,
  `rink_image` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rink_images_rink_id_foreign` (`rink_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rink_images`
--

INSERT INTO `rink_images` (`id`, `rink_id`, `rink_image`) VALUES
(1, 1, 'image17815786821389369211.jpg'),
(2, 2, 'image21027201621389369319.png');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_sheet`
--

CREATE TABLE IF NOT EXISTS `schedule_sheet` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_sheet_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE IF NOT EXISTS `stream` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `stream` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`id`, `user_id`, `team_id`, `stream`, `created_at`) VALUES
(1, 1, 0, 'hey\r\n', '2013-12-09 12:46:29'),
(2, 1, 0, 'hey\r\n', '2013-12-09 12:46:35'),
(3, 2, 1, 'hi', '2014-01-08 05:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player_id` int(10) unsigned NOT NULL,
  `team_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team_logo` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_rink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_jersey` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jersey_image` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `president_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `head_coach` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assistant_coach` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `history` text COLLATE utf8_unicode_ci,
  `founded` date DEFAULT NULL,
  `disbanded` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `player_id`, `team_name`, `team_logo`, `team_rink`, `current_jersey`, `jersey_image`, `president_name`, `head_coach`, `assistant_coach`, `history`, `founded`, `disbanded`) VALUES
(1, 0, 'Arsenal Fc', 'image6400577001389421844.png', '', 'New', 'image21057259351389421845.png', 'Arsene Wenger', 'Peter scott', 'pat Rice', 'very good', '2014-01-17', '2013-05-06'),
(2, 0, 'Chelsea FC', 'image356669361389384696.png', 'London', 'New', 'image12417865101389176473.png', 'Arsene Wenger', 'Peter scott', 'pat Rice', 'very good', '0000-00-00', '2013-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `team_medics`
--

CREATE TABLE IF NOT EXISTS `team_medics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `medics` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `team_medics`
--

INSERT INTO `team_medics` (`id`, `team_id`, `medics`) VALUES
(1, 1, '3'),
(2, 2, '3');

-- --------------------------------------------------------

--
-- Table structure for table `team_photos`
--

CREATE TABLE IF NOT EXISTS `team_photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` int(10) unsigned NOT NULL,
  `photo_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `photo_name1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `team_photos_team_id_foreign` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `team_photos`
--

INSERT INTO `team_photos` (`id`, `team_id`, `photo_name`, `photo_name1`) VALUES
(1, 1, 'image11639271441389176286.png', 'image10672439981389176286.png'),
(2, 2, 'image5140870571389176473.jpg', 'image9866850071389176473.png');

-- --------------------------------------------------------

--
-- Table structure for table `team_prevJerseys`
--

CREATE TABLE IF NOT EXISTS `team_prevJerseys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` int(10) unsigned NOT NULL,
  `previous_jersey` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team_prevjerseysimg` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `team_prevjerseys_team_id_foreign` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `team_prevJerseys`
--

INSERT INTO `team_prevJerseys` (`id`, `team_id`, `previous_jersey`, `team_prevjerseysimg`) VALUES
(1, 2, 'red', 'image16898768891389176473.png'),
(2, 2, ' blue', 'image8586930371389176474.png');

-- --------------------------------------------------------

--
-- Table structure for table `team_referees`
--

CREATE TABLE IF NOT EXISTS `team_referees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` int(10) unsigned NOT NULL,
  `referee` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `team_referees_team_id_foreign` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `team_referees`
--

INSERT INTO `team_referees` (`id`, `team_id`, `referee`) VALUES
(1, 1, '3'),
(2, 2, '3');

-- --------------------------------------------------------

--
-- Table structure for table `team_timeKeepers`
--

CREATE TABLE IF NOT EXISTS `team_timeKeepers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` int(10) unsigned NOT NULL,
  `time_keeper` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `team_timekeepers_team_id_foreign` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `team_timeKeepers`
--

INSERT INTO `team_timeKeepers` (`id`, `team_id`, `time_keeper`) VALUES
(1, 1, '3'),
(2, 2, '3');

-- --------------------------------------------------------

--
-- Table structure for table `team_videos`
--

CREATE TABLE IF NOT EXISTS `team_videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` int(10) unsigned NOT NULL,
  `video_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `video_name1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `team_videos_team_id_foreign` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `team_videos`
--

INSERT INTO `team_videos` (`id`, `team_id`, `video_name`, `video_name1`) VALUES
(1, 1, 'https://soundcloud.com/stream', 'https://soundcloud.com/stream'),
(2, 2, 'https://soundcloud.com/stream', 'https://soundcloud.com/stream');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, '127.0.0.1', 0, 0, 0, NULL, NULL, NULL),
(2, 2, '127.0.0.1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `role`, `created_at`, `updated_at`) VALUES
(2, 'rooott@gmail.com', '$2y$10$ibyg8R/9p2WpsB9jE1E50u3qCDnhczTG.SR.eEt8tYgnpAGJ5y8Z.', NULL, 1, NULL, '2014-01-07 09:20:29', '2014-01-12 14:35:29', '$2y$10$lb/q.y0DIGyD3MWm6mVLtebOzjlRF343mj7w3H.3k4shMGVY15S8q', NULL, NULL, NULL, 1, '2014-01-07 09:20:04', '2014-01-12 14:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `player_profile_currentTeam`
--
ALTER TABLE `player_profile_currentTeam`
  ADD CONSTRAINT `player_profile_currentteam_player_profile_id_foreign` FOREIGN KEY (`player_profile_id`) REFERENCES `player_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `player_profile_prevTeam`
--
ALTER TABLE `player_profile_prevTeam`
  ADD CONSTRAINT `player_profile_prevteam_player_profile_id_foreign` FOREIGN KEY (`player_profile_id`) REFERENCES `player_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rink_home_teams`
--
ALTER TABLE `rink_home_teams`
  ADD CONSTRAINT `rink_home_teams_rink_id_foreign` FOREIGN KEY (`rink_id`) REFERENCES `rinks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_prevJerseys`
--
ALTER TABLE `team_prevJerseys`
  ADD CONSTRAINT `team_prevjerseys_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_referees`
--
ALTER TABLE `team_referees`
  ADD CONSTRAINT `team_referees_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_timeKeepers`
--
ALTER TABLE `team_timeKeepers`
  ADD CONSTRAINT `team_timekeepers_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
