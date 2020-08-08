-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 07:15 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mygaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('kumar0527', '598e639209e94d30d17025e7c53b252c'),
('110125@aj', '598e639209e94d30d17025e7c53b252c'),
('jsv@09', '598e639209e94d30d17025e7c53b252c');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `username` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `whatsapp_number` varchar(300) NOT NULL,
  `message_subject` varchar(300) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `date`, `username`, `name`, `email`, `whatsapp_number`, `message_subject`, `message`) VALUES
(1, '28/12/19', 'jaswanth', 'Jas', 'jswnthraj@gmail.com', '8331899069', 'Test', 'This is a test case '),
(2, '28/12/19', 'jaswanth', 'Raj', 'jswnthraj@gmail.com', '8331899069', 'Greetings', 'Hii '),
(3, '28/12/19', 'jaswanth', 'Kumar', 'kumardn143@gmail.com', '9490873637', 'Hai', 'Hello'),
(4, '31/12/19', 'Guest', 'Kumar', 'kumardn143@gmail.com', '9490873637', 'Hai', 'Test'),
(5, '31/12/19', 'Guest', 'Jas', 'thsbe@gmail.com', '94900874568', 'Bg rc but', 'Ventures'),
(6, '31/12/19', 'Guest', 'Ajay', 'aj@gmail.com', '8331899069', 'Test', 'Testcase 1');

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE `contest` (
  `id` int(200) NOT NULL,
  `game_title` mediumtext NOT NULL,
  `match_id` int(255) NOT NULL,
  `time` mediumtext NOT NULL,
  `prize_pool` int(255) NOT NULL,
  `per_kill` int(255) NOT NULL,
  `play_for` int(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `version` varchar(10) NOT NULL,
  `map` varchar(255) NOT NULL,
  `max` int(255) NOT NULL,
  `count` int(255) NOT NULL DEFAULT '0',
  `match_status` int(10) NOT NULL DEFAULT '1',
  `removed` int(10) NOT NULL DEFAULT '0',
  `first_winner` int(255) NOT NULL,
  `second_winner` int(255) NOT NULL,
  `third_winner` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`id`, `game_title`, `match_id`, `time`, `prize_pool`, `per_kill`, `play_for`, `type`, `version`, `map`, `max`, `count`, `match_status`, `removed`, `first_winner`, `second_winner`, `third_winner`) VALUES
(1, 'afternoon match', 456, '1/1/2020 at 1:00 pm', 1000, 8, 10, 'solo', 'tpp', 'erangel', 90, 3, 1, 1, 75, 45, 20),
(2, 'evening match', 123, '1/1/2020 at 6:00 pm', 2000, 15, 20, 'solo', 'tpp', 'erangel', 100, 20, 0, 1, 100, 50, 20),
(4, 'midnight match', 369, '1/1/2020 at 1:00 am', 1000, 100, 10, 'solo', 'fpp', 'erangel', 2, 2, 1, 0, 500, 300, 200),
(5, 'afternoon match', 852, '1/1/2020 at 3:00 pm', 4000, 30, 50, 'solo', 'tpp', 'erangel', 4, 4, 0, 1, 300, 200, 100),
(9, 'Mid Night Battle', 9999999, '03/01/2019 at 6.00 pm', 1095, 10, 20, 'solo', 'TPP', 'Erangle', 92, 6, 0, 1, 100, 50, 25),
(10, 'Special Squad', 99334, '03/01/2019 at 9.00 pm', 1196, 8, 20, 'squad', 'TPP', 'Erangle', 92, 15, 0, 0, 200, 160, 100),
(11, 'Testing', 1111, '27/12/2019 at 10.30 pm', 3300, 25, 50, 'Squad', 'TPP', 'Erangle', 92, 92, 0, 1, 500, 300, 200);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `first_name` varchar(900) NOT NULL,
  `last_name` varchar(900) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(900) NOT NULL,
  `mobile_number` varchar(300) NOT NULL,
  `email_id` varchar(400) NOT NULL,
  `security_que_1` varchar(500) NOT NULL,
  `answer_1` varchar(200) NOT NULL,
  `security_que_2` varchar(500) NOT NULL,
  `answer_2` varchar(200) NOT NULL,
  `wallet` int(255) NOT NULL,
  `ucwallet` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`first_name`, `last_name`, `username`, `password`, `mobile_number`, `email_id`, `security_que_1`, `answer_1`, `security_que_2`, `answer_2`, `wallet`, `ucwallet`) VALUES
('AJ', 'AY', 'ajay', 'e10adc3949ba59abbe56e057f20f883e', '2147483647', 'aj@gmail.com', 'Who is your Favourite Cricketer', 'mithali', 'What is your Favourite Movie', 'battleship', 4330, 0),
('jas', 'wanth', 'jaswanth', 'e10adc3949ba59abbe56e057f20f883e', '8331899069', 'j@gmail.com', 'What is your Favourite Movie', 'avengers', 'Who is your Favourite Teacher', 'sunny', 3896, 10),
('dn', 'kumar', 'kumardn', '9cb1ee7cf27fd09cb2d9099afefc6287', '9490873637', 'kumardn143@gmail.com', 'Who is your Favourite Teacher', 'rocky', 'What is your Birth Place', 'rajahmundry', 6000, 0),
('raj', 'raj', 'raj', 'e10adc3949ba59abbe56e057f20f883e', '8331899056', 'raj@gmail.com', 'Who is your Favourite Teacher', 'sam', 'What is your Mother Maidan Name ', 'sample', 0, 0),
('j', 's', 'v', 'e10adc3949ba59abbe56e057f20f883e', '1234567899', 'vasu@gmail.com', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `date` varchar(3000) NOT NULL,
  `notification` text NOT NULL,
  `type` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `username` varchar(500) NOT NULL,
  `userid` varchar(9000) NOT NULL,
  `charid` varchar(9000) NOT NULL,
  `match_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`username`, `userid`, `charid`, `match_id`) VALUES
('shadow', '12345', '112233', '369'),
('king', '6789', '445566', '369'),
('rocky', '78945', '9966', '852'),
('king', '`rambo`', '8985', '123'),
('hound', 'killer@9', '258369', '123'),
('hound', 'devil%', '741852', '123'),
('hound', 'batman..!', '159159', '456'),
('shadow', 'batman..!', '445566', '123'),
('shadow', 'batman..!', '125698', '852'),
('shadow', '$hadows', '159159', '852'),
('hound', 'devil%', '741852', '852'),
('shadow', 'devil%', '1254786', '456'),
('hound', 'rocky', '1254789', '456'),
('ajay', 'ajay', 'nbkjbnk', '123'),
('ajay', 'ajay', 'nbkjbnk', '123'),
('kumardn', 'ê§à¼’â˜¬â˜ È½ï¸ŽÃ™Ã§Òœáƒ§â˜ ï', '159159', '123'),
('kumardn', 'â˜…ê§à¼’â˜†â€¢à¸¿ÅÈºâ„‚ðŸ…ºâ', '12369857', '123'),
('kumardn', 'â˜¢ï¸â˜¢ï¸â˜£ï¸âœï¸NOÂ°NA', '123456879', '123'),
('kumardn', 'rocky', '123456', '123'),
('kumardn', 'rocky', '125689', '123'),
('kumardn', 'rocky', '12569', '123'),
('kumardn', 'rocky', '125698', '123'),
('jaswanth', 'raj', '125698', '123'),
('jaswanth', 'sam', '125698', '123'),
('ajay', 'ê§à¼’Ï‰Î±Ð½ÑƒÏ…à¼’ê§‚', '456985', '123'),
('ajay', 'â‚¬Â¥ðŸ’¤ðŸ“¿Ä¹Ã¸bÃ¸MÄƒÅ‚ðŸ“¿ð', '12365895', '123'),
('ajay', 'â‚¬Â¥ðŸ’¤ðŸ“¿Ä¹Ã¸bÃ¸MÄƒÅ‚ðŸ“¿ð', '4554', '123'),
('ajay', 'Yê§à¼’â˜¬â„œØÎ±áž_Dà¸„â„œá¦â˜¬à¼’ê§‚', '12458', '123'),
('ajay', 'â‚¬Â¥ðŸ’¤ðŸ“¿Ä¹Ã¸bÃ¸MÄƒÅ‚ðŸ“¿ðŸ’¤Â¥â‚©', '25465453', '123'),
('jaswanth', 'Kumar', '12346', '9999999'),
('jaswanth', 'â˜…å½¡[á´…á´‡á´€á´… á´‹ÉªÊŸÊŸá´‡Ê€]å½¡â˜…', '4567891124567', '9999999'),
('jaswanth', 'Bulli', '125678', '9999999'),
('jaswanth', '**Pandu**', '189678', '99334'),
('jaswanth', 'Raj...!', '90879', '99334'),
('jaswanth', 'Ajay', '14536', '99334'),
('jaswanth', 'Dnkumar...!', '7864678', '99334'),
('jaswanth', 'Jswnth Sv', '992299', '9999999'),
('ajay', 'Ajay..!', '12345', '99334'),
('kumardn', 'Kumardn', '123098', '9999999'),
('ajay', 'Lauren', 'Legend', '99334'),
('jaswanth', 'jas', '123', '99334'),
('kumardn', 'Mammals', 'Halcyon', '9999999'),
('kumardn', 'Kumar', 'Manual', '1111'),
('kumardn', 'Radha', 'Half', '1111'),
('kumardn', 'Raghu', 'Lap', '1111'),
('kumardn', 'Abhi', 'Kajal of', '1111'),
('kumardn', 'Usha', 'kapulakshmis@gmail.com', '1111'),
('kumardn', 'Pubg', 'Kaakapote', '1111'),
('jaswanth', 'Raj', 'Chico', '1111'),
('kumardn', 'Friend', 'Jacks', '1111'),
('jaswanth', 'Jsv@!', 'Subyeieioe', '1111'),
('jaswanth', 'Sunny', 'Bdjdjdk', '1111'),
('kumardn', '@#*&$â‚¬Â©Â®', 'Jaggadi', '1111'),
('kumardn', '@#*Ï€`~Â¶âˆ†Ã·', 'Lakshmi', '1111'),
('jaswanth', 'Harsha*â‚¹&#', 'Shejjdks', '1111'),
('kumardn', '@#*Â£&Â¥â‚¬~`|â€¢âˆšÏ€Ã·Ã—Â¶âˆ†', 'Music', '1111'),
('kumardn', 'Lakshmi', 'Kannan', '1111'),
('jaswanth', 'King_maker', '=Â©Â¥Â°Â¥=$}Â¥[', '1111'),
('kumardn', 'Beth', 'Brick', '1111'),
('kumardn', 'Also', 'Half', '1111'),
('jaswanth', 'RockyÂ¢Â¥{`âˆ†{`', 'Vo hyd duh', '1111'),
('kumardn', 'Middleman', 'Hannah', '1111'),
('kumardn', 'Magic', 'Manish', '1111'),
('jaswanth', 'Killer }{Ã—Ã·', 'Sgsuuw8383', '1111'),
('kumardn', 'Kamal', 'Malcolm', '1111'),
('kumardn', 'Woodman', 'Jackal', '1111'),
('kumardn', 'Myself', 'Jamal', '1111'),
('kumardn', 'Neekendukye', 'Manish', '1111'),
('kumardn', 'Musicals', 'Mammal', '1111'),
('jaswanth', 'Goodrich', '& di go by Ray', '1111'),
('kumardn', 'Nanak', 'Kandi', '1111'),
('kumardn', 'Kendo', 'Banco', '1111'),
('jaswanth', 'April', 'Xoxo66_++', '1111'),
('kumardn', 'National', 'Kamal', '1111'),
('jaswanth', 'Zodiac', 'Stats &((^Ï€Ã·âˆ†][âœ“â„¢Â®Â©', '1111'),
('jaswanth', 'Visits', 'Etao', '1111'),
('Ram', 'Â£#&_#~^Â¢Â¢{â„¢', 'Jhansi', '1111'),
('Ram', 'Downfall i', 'Mandi Ms', '1111'),
('Ram', 'Malcolm', 'Jan', '1111'),
('Ram', 'Handyman', 'Naakem', '1111'),
('jaswanth', 'Crossover', '+_&86(vip', '1111'),
('Ram', '@Â£&Â£@~`Â¢â‚¬Â¢Â¢Â¶Â¶Â¶âˆ†=%', 'Sakshi', '1111'),
('jaswanth', 'Chico', 'Civil see', '1111'),
('jaswanth', 'Keeps', 'Civil', '1111'),
('Ram', 'Kajal', 'Jazmin', '1111'),
('jaswanth', 'Vaishno', 'Disk', '1111'),
('Ram', 'Kajal JCB', 'Msg', '1111'),
('Ram', 'Andukani', 'Gain', '1111'),
('Ram', 'Manic', 'Hanging', '1111'),
('jaswanth', 'Heidi', 'Coal', '1111'),
('Ram', 'Music msg', 'Hangzhou', '1111'),
('jaswanth', 'Japanese', 'Woods ei', '1111'),
('Ram', 'Jackson', 'Man', '1111'),
('jaswanth', 'Docket', 'Soap', '1111'),
('Ram', 'Malang', 'Rockford', '1111'),
('jaswanth', 'Brick', 'Wo t it go vo', '1111'),
('Ram', 'Maja', 'Basic', '1111'),
('jaswanth', 'Halal 57', 'Stock', '1111'),
('Ram', 'Rochdale', 'Jason', '1111'),
('jaswanth', 'Jewish', 'Sasural', '1111'),
('jaswanth', 'Friendship', 'Darao', '1111'),
('Ram', 'Mark', 'Skydiving', '1111'),
('jaswanth', 'Pepsi', 'Ferdous', '1111'),
('Ram', 'Kajal ksh', 'Nanci', '1111'),
('jaswanth', 'Crystal', 'Varietal', '1111'),
('jaswanth', 'Padosi', 'Video', '1111'),
('jaswanth', 'Presidio', 'Bristi', '1111'),
('Ram', 'Welch', 'Mean', '1111'),
('jaswanth', 'Coal', 'Usual &', '1111'),
('Ram', 'Iqbal', 'Naakem', '1111'),
('jaswanth', 'Merci', 'Idk', '1111'),
('Ram', 'Jackson ush', 'Lamb', '1111'),
('Ram', 'Bro', 'Bath', '1111'),
('ajay', 'Nautanki was', 'Xoxo', '1111'),
('Ram', 'Ireland', 'Jambo', '1111'),
('ajay', 'Prabodh', 'Xoxo', '1111'),
('ajay', 'Prateek', 'Cuzco', '1111'),
('Ram', 'Annals', 'Kelvin', '1111'),
('ajay', 'Logo', 'Dard', '1111'),
('ajay', 'Kewal', 'Full', '1111'),
('Ram', 'Medical', 'Msg', '1111'),
('ajay', 'Lock', 'Cayman', '1111'),
('Ram', 'Kukka', 'Krish', '1111'),
('ajay', 'Path do', 'Suvo', '1111'),
('ajay', 'Proc', 'Dunno', '1111'),
('Ram', 'Dusk', 'Median', '1111'),
('ajay', 'Leap', 'Call', '1111'),
('ajay', 'Koran', 'Keep', '1111'),
('ajay', 'App', 'All', '1111'),
('ajay', 'Pushp', 'Call', '1111'),
('ajay', 'Horace', 'Demo', '1111'),
('ajay', 'Joshi', 'Sep', '1111'),
('jaswanth', 'Cu cub', 'Cub', '99334'),
('jaswanth', 'Bulli', '123567', '99334'),
('jaswanth', 'Jaswanth', 'Raj', '99334'),
('jaswanth', 'death', '8985678', '99334'),
('jaswanth', 'ê§à¼’â˜¬â‚£â„œÃ¸ÅºÑ”Î·â€¢â‚£â„“Î±â‚¥Ñ”Ö†â˜¬à¼’ê§‚', '8765432', '99334'),
('jaswanth', 'Hound', '67980', '99334'),
('jaswanth', 'raj', '526589', '99334'),
('kumardn', 'Kelsie', 'Naakem', '99334');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `match_id` varchar(300) NOT NULL,
  `room_id` varchar(9000) NOT NULL,
  `room_pass` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`match_id`, `room_id`, `room_pass`) VALUES
('1111', 'dn-aj-js', '27-03-05'),
('123', '123456', '123abc'),
('369', '258963', 'dn123'),
('852', '123', 'dn'),
('99334', 'dn-aj-js', '27-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `special_notification`
--

CREATE TABLE `special_notification` (
  `id` int(11) NOT NULL,
  `date` varchar(300) NOT NULL,
  `notifications` text NOT NULL,
  `type` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_notification`
--

INSERT INTO `special_notification` (`id`, `date`, `notifications`, `type`) VALUES
(1, '01-06-2020', 'your wallet balance will be updated very soon...!', 'jaswanth');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `match_id` int(255) NOT NULL,
  `username` varchar(500) NOT NULL,
  `userid` varchar(9000) NOT NULL,
  `kills` int(255) NOT NULL,
  `killscore` int(255) NOT NULL,
  `rank` int(255) NOT NULL,
  `rankscore` int(255) NOT NULL,
  `totalscore` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`match_id`, `username`, `userid`, `kills`, `killscore`, `rank`, `rankscore`, `totalscore`) VALUES
(987, 'shadow', '12345', 2, 30, 1, 75, 105),
(987, 'king', '6789', 1, 15, 3, 20, 35),
(987, 'shadow', '96369', 1, 15, 2, 45, 60),
(987, 'shadow', '$hadows', 0, 0, 0, 0, 0),
(26048, 'shadow', 'rocky', 5, 25, 1, 13, 38),
(26048, 'shadow', 'shadow', 0, 0, 1, 13, 13),
(26048, 'shadow', 'devil', 0, 0, 1, 13, 13),
(26048, 'shadow', 'ramu', 0, 0, 1, 13, 13),
(26048, 'rocky', 'batman..!', 2, 10, 3, 5, 15),
(26048, 'rocky', 'ajay', 0, 0, 3, 5, 5),
(26048, 'rocky', 'dn', 1, 5, 3, 5, 10),
(26048, 'rocky', 'venkat', 0, 0, 3, 5, 5),
(26048, 'king', 'apple', 0, 0, 0, 0, 0),
(26048, 'king', 'mango', 4, 20, 0, 0, 20),
(26048, 'king', 'orange', 2, 10, 0, 0, 10),
(26048, 'king', 'watermelon', 0, 0, 0, 0, 0),
(26048, 'hound', 'car', 1, 5, 0, 0, 5),
(26048, 'hound', 'bus', 0, 0, 0, 0, 0),
(26048, 'hound', 'tracktor', 0, 0, 0, 0, 0),
(26048, 'hound', 'bike', 0, 0, 0, 0, 0),
(26048, 'queen', 'blue', 3, 15, 2, 8, 23),
(26048, 'queen', 'red', 0, 0, 2, 8, 8),
(26048, 'queen', 'green', 0, 0, 2, 8, 8),
(26048, 'queen', 'grey', 3, 15, 2, 8, 23),
(852, 'rocky', '78945', 2, 60, 3, 100, 160),
(852, 'shadow', 'batman..!', 0, 0, 1, 300, 300),
(852, 'shadow', '$hadows', 1, 30, 1, 300, 330),
(852, 'hound', 'devil%', 1, 30, 0, 0, 30),
(852, 'rocky', '78945', 2, 60, 3, 100, 160),
(852, 'shadow', 'batman..!', 0, 0, 1, 300, 300),
(852, 'shadow', '$hadows', 1, 30, 1, 300, 330),
(852, 'hound', 'devil%', 1, 30, 0, 0, 30),
(89285, 'shadow', '$hadow', 0, 0, 1, 250, 250),
(89285, 'shadow', 'batman..!', 1, 50, 2, 150, 200),
(62355, 'kumardn', 'rocky', 1, 0, 1, 10, 10),
(999999, 'kumardn', 'kumar', 2, 2600, 2, 2000, 4600),
(999999, 'jaswanth', 'jaswanth', 1, 1300, 1, 3000, 4300),
(999999, 'ajay', 'ajay', 0, 0, 3, 1000, 1000),
(999999, 'ajay', 'ajay', 0, 0, 0, 0, 0),
(123, 'king', '`rambo`', 1, 15, 0, 0, 15),
(123, 'hound', 'killer@9', 1, 15, 0, 0, 15),
(123, 'hound', 'devil%', 0, 0, 0, 0, 0),
(123, 'shadow', 'batman..!', 5, 75, 1, 100, 175),
(123, 'ajay', 'ajay', 0, 0, 0, 0, 0),
(123, 'ajay', 'ajay', 1, 15, 0, 0, 15),
(123, 'kumardn', 'ê§à¼’â˜¬â˜ È½ï¸ŽÃ™Ã§Òœáƒ§â˜ ï', 0, 0, 0, 0, 0),
(123, 'kumardn', 'â˜…ê§à¼’â˜†â€¢à¸¿ÅÈºâ„‚ðŸ…ºï', 0, 0, 0, 0, 0),
(123, 'kumardn', 'â˜¢ï¸â˜¢ï¸â˜£ï¸âœï¸NOÂ°NA', 0, 0, 0, 0, 0),
(123, 'kumardn', 'rocky', 3, 45, 2, 50, 95),
(123, 'kumardn', 'rocky', 0, 0, 0, 0, 0),
(123, 'kumardn', 'rocky', 2, 30, 0, 0, 30),
(123, 'kumardn', 'rocky', 0, 0, 0, 0, 0),
(123, 'jaswanth', 'raj', 0, 0, 0, 0, 0),
(123, 'jaswanth', 'sam', 2, 30, 0, 0, 30),
(123, 'ajay', 'ê§à¼’Ï‰Î±Ð½ÑƒÏ…à¼’ê§‚', 0, 0, 3, 20, 20),
(123, 'ajay', 'â‚¬Â¥ðŸ’¤ðŸ“¿Ä¹Ã¸bÃ¸MÄƒÅ‚ðŸ“¿ï', 0, 0, 0, 0, 0),
(123, 'ajay', 'â‚¬Â¥ðŸ’¤ðŸ“¿Ä¹Ã¸bÃ¸MÄƒÅ‚ðŸ“¿ï', 1, 15, 0, 0, 15),
(123, 'ajay', 'Yê§à¼’â˜¬â„œØÎ±áž_Dà¸„â„œá', 0, 0, 0, 0, 0),
(123, 'ajay', 'â‚¬Â¥ðŸ’¤ðŸ“¿Ä¹Ã¸bÃ¸MÄƒÅ‚ðŸ“¿ð', 3, 45, 0, 0, 45),
(1111, 'kumardn', 'Kumar', 2, 50, 1, 125, 175),
(1111, 'kumardn', 'Radha', 4, 100, 1, 125, 225),
(1111, 'kumardn', 'Raghu', 1, 25, 1, 125, 150),
(1111, 'kumardn', 'Abhi', 0, 0, 1, 125, 125),
(1111, 'kumardn', 'Usha', 1, 25, 0, 0, 25),
(1111, 'kumardn', 'Pubg', 3, 75, 0, 0, 75),
(1111, 'jaswanth', 'Raj', 2, 50, 2, 75, 125),
(1111, 'kumardn', 'Friend', 4, 100, 0, 0, 100),
(1111, 'jaswanth', 'Jsv@!', 3, 75, 2, 75, 150),
(1111, 'jaswanth', 'Sunny', 1, 25, 2, 75, 100),
(1111, 'kumardn', '@#*&$â‚¬Â©Â®', 0, 0, 0, 0, 0),
(1111, 'kumardn', '@#*Ï€`~Â¶âˆ†Ã·', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'Harsha*â‚¹&#', 0, 0, 0, 0, 0),
(1111, 'kumardn', '@#*Â£&Â¥â‚¬~`|â€¢âˆšÏ€Ã·Ã—Â¶âˆ', 0, 0, 0, 0, 0),
(1111, 'kumardn', 'Lakshmi', 1, 25, 0, 0, 25),
(1111, 'jaswanth', 'King_maker', 4, 100, 2, 75, 175),
(1111, 'kumardn', 'Beth', 0, 0, 0, 0, 0),
(1111, 'kumardn', 'Also', 2, 50, 0, 0, 50),
(1111, 'jaswanth', 'RockyÂ¢Â¥{`âˆ†{`', 3, 75, 2, 75, 150),
(1111, 'kumardn', 'Middleman', 0, 0, 0, 0, 0),
(1111, 'kumardn', 'Magic', 4, 100, 0, 0, 100),
(1111, 'jaswanth', 'Killer }{Ã—Ã·', 0, 0, 0, 0, 0),
(1111, 'kumardn', 'Kamal', 5, 125, 0, 0, 125),
(1111, 'kumardn', 'Woodman', 7, 175, 0, 0, 175),
(1111, 'kumardn', 'Myself', 0, 0, 0, 0, 0),
(1111, 'kumardn', 'Neekendukye', 0, 0, 0, 0, 0),
(1111, 'kumardn', 'Musicals', 1, 25, 0, 0, 25),
(1111, 'jaswanth', 'Goodrich', 0, 0, 0, 0, 0),
(1111, 'kumardn', 'Nanak', 0, 0, 0, 0, 0),
(1111, 'kumardn', 'Kendo', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'April', 3, 75, 0, 0, 75),
(1111, 'kumardn', 'National', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'Zodiac', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'Visits', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Â£#&_#~^Â¢Â¢{â„¢', 2, 50, 0, 0, 50),
(1111, 'Ram', 'Downfall i', 2, 50, 0, 0, 50),
(1111, 'Ram', 'Malcolm', 3, 75, 0, 0, 75),
(1111, 'Ram', 'Handyman', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'Crossover', 4, 100, 0, 0, 100),
(1111, 'Ram', '@Â£&Â£@~`Â¢â‚¬Â¢Â¢Â¶Â¶Â¶âˆ†=%', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'Chico', 6, 150, 0, 0, 150),
(1111, 'jaswanth', 'Keeps', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Kajal', 2, 50, 3, 50, 100),
(1111, 'jaswanth', 'Vaishno', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Kajal JCB', 1, 25, 3, 50, 75),
(1111, 'Ram', 'Andukani', 2, 50, 3, 50, 100),
(1111, 'Ram', 'Manic', 1, 25, 3, 50, 75),
(1111, 'jaswanth', 'Heidi', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Music msg', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'Japanese', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Jackson', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'Docket', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Malang', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'Brick', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Maja', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'Halal 57', 2, 50, 0, 0, 50),
(1111, 'Ram', 'Rochdale', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'Jewish', 6, 150, 0, 0, 150),
(1111, 'jaswanth', 'Friendship', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Mark', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'Pepsi', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Kajal ksh', 1, 25, 0, 0, 25),
(1111, 'jaswanth', 'Crystal', 0, 0, 0, 0, 0),
(1111, 'jaswanth', 'Padosi', 4, 100, 0, 0, 100),
(1111, 'jaswanth', 'Presidio', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Welch', 2, 50, 0, 0, 50),
(1111, 'jaswanth', 'Coal', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Iqbal', 1, 25, 0, 0, 25),
(1111, 'jaswanth', 'Merci', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Jackson ush', 1, 25, 0, 0, 25),
(1111, 'Ram', 'Bro', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Nautanki was', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Ireland', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Prabodh', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Prateek', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Annals', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Logo', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Kewal', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Medical', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Lock', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Kukka', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Path do', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Proc', 0, 0, 0, 0, 0),
(1111, 'Ram', 'Dusk', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Leap', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Koran', 0, 0, 0, 0, 0),
(1111, 'ajay', 'App', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Pushp', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Horace', 0, 0, 0, 0, 0),
(1111, 'ajay', 'Joshi', 0, 0, 0, 0, 0),
(456, 'hound', 'batman..!', 2, 16, 1, 75, 91),
(456, 'shadow', 'devil%', 0, 0, 3, 20, 20),
(456, 'hound', 'rocky', 1, 8, 2, 45, 53);

--
-- Triggers `testing`
--
DELIMITER $$
CREATE TRIGGER `myautosum` BEFORE INSERT ON `testing` FOR EACH ROW set NEW.totalscore = NEW.killscore + NEW.rankscore
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transcations`
--

CREATE TABLE `transcations` (
  `id` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(300) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `reason` varchar(9000) NOT NULL,
  `status` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transcations`
--

INSERT INTO `transcations` (`id`, `date`, `username`, `mobile_number`, `type`, `amount`, `reason`, `status`) VALUES
(55, '2019-12-24 10:30:13', 'kumardn', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(56, '2019-12-24 10:30:42', 'kumardn', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(57, '2019-12-24 10:31:18', 'kumardn', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(58, '2019-12-24 10:37:17', 'kumardn', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(59, '2019-12-24 10:37:34', 'kumardn', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(60, '2019-12-24 10:39:29', 'kumardn', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(61, '2019-12-24 10:42:25', 'kumardn', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(62, '2019-12-24 10:45:19', 'jaswanth', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(63, '2019-12-24 10:45:34', 'jaswanth', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(64, '2019-12-24 11:33:00', 'ajay', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(65, '2019-12-24 11:33:26', 'ajay', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(66, '2019-12-24 11:33:38', 'ajay', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(67, '2019-12-24 11:35:24', 'ajay', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(68, '2019-12-24 11:35:41', 'ajay', '', 'debit', 20, 'Match Joined - #123 ', 'success'),
(69, '2019-12-26 14:20:02', 'jaswanth', '', 'debit', 20, 'Match Joined - #9999999 ', 'success'),
(70, '2019-12-26 14:58:15', 'jaswanth', '', 'debit', 20, 'Match Joined - #9999999 ', 'success'),
(71, '2019-12-26 15:44:45', 'jaswanth', '', 'debit', 20, 'Match Joined - #9999999 ', 'success'),
(72, '2019-12-27 06:08:21', 'jaswanth', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(73, '2019-12-27 06:08:57', 'jaswanth', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(74, '2019-12-27 06:09:07', 'jaswanth', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(75, '2019-12-27 06:09:21', 'jaswanth', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(76, '2019-12-27 06:26:54', 'jaswanth', '', 'debit', 20, 'Match Joined - #9999999 ', 'success'),
(77, '2019-12-27 09:15:54', 'ajay', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(78, '2019-12-27 09:16:50', 'kumardn', '', 'debit', 20, 'Match Joined - #9999999 ', 'success'),
(79, '2019-12-27 09:21:01', 'jaswanth', '83265898597', 'debit', 100, 'Withdraw Successfull', 'success'),
(80, '2019-12-27 09:27:35', 'ajay', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(81, '2019-12-27 09:38:12', 'jaswanth', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(82, '2019-12-27 12:05:09', 'kumardn', '', 'debit', 20, 'Match Joined - #9999999 ', 'success'),
(83, '2019-12-27 14:41:49', 'ajay', '', 'credit', 0, 'Match Reward - #123 ', 'success'),
(84, '2019-12-27 14:41:49', 'ajay', '', 'credit', 0, 'Match Reward - #123 ', 'success'),
(85, '2019-12-27 14:41:49', 'kumardn', '', 'credit', 0, 'Match Reward - #123 ', 'success'),
(86, '2019-12-27 14:41:49', 'kumardn', '', 'credit', 0, 'Match Reward - #123 ', 'success'),
(87, '2019-12-27 14:41:49', 'kumardn', '', 'credit', 0, 'Match Reward - #123 ', 'success'),
(88, '2019-12-27 14:41:49', 'kumardn', '', 'credit', 95, 'Match Reward - #123 ', 'success'),
(89, '2019-12-27 14:41:49', 'kumardn', '', 'credit', 95, 'Match Reward - #123 ', 'success'),
(90, '2019-12-27 14:41:50', 'kumardn', '', 'credit', 95, 'Match Reward - #123 ', 'success'),
(91, '2019-12-27 14:41:50', 'kumardn', '', 'credit', 95, 'Match Reward - #123 ', 'success'),
(92, '2019-12-27 14:41:50', 'jaswanth', '', 'credit', 0, 'Match Reward - #123 ', 'success'),
(93, '2019-12-27 14:41:50', 'jaswanth', '', 'credit', 30, 'Match Reward - #123 ', 'success'),
(94, '2019-12-27 14:41:50', 'ajay', '', 'credit', 20, 'Match Reward - #123 ', 'success'),
(95, '2019-12-27 14:41:50', 'ajay', '', 'credit', 0, 'Match Reward - #123 ', 'success'),
(96, '2019-12-27 14:41:50', 'ajay', '', 'credit', 0, 'Match Reward - #123 ', 'success'),
(97, '2019-12-27 14:41:50', 'ajay', '', 'credit', 0, 'Match Reward - #123 ', 'success'),
(98, '2019-12-27 14:41:51', 'ajay', '', 'credit', 0, 'Match Reward - #123 ', 'success'),
(99, '2019-12-27 16:50:13', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(100, '2019-12-27 16:50:23', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(101, '2019-12-27 16:50:31', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(102, '2019-12-27 16:50:44', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(103, '2019-12-27 16:51:01', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(104, '2019-12-27 16:51:12', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(105, '2019-12-27 16:51:14', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(106, '2019-12-27 16:51:23', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(107, '2019-12-27 16:51:43', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(108, '2019-12-27 16:51:52', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(109, '2019-12-27 16:52:01', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(110, '2019-12-27 16:52:19', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(111, '2019-12-27 16:52:37', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(112, '2019-12-27 16:52:57', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(113, '2019-12-27 16:52:57', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(114, '2019-12-27 16:53:08', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(115, '2019-12-27 16:53:13', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(116, '2019-12-27 16:53:16', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(117, '2019-12-27 16:53:24', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(118, '2019-12-27 16:53:28', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(119, '2019-12-27 16:53:33', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(120, '2019-12-27 16:53:40', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(121, '2019-12-27 16:53:42', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(122, '2019-12-27 16:53:49', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(123, '2019-12-27 16:54:36', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(124, '2019-12-27 16:54:45', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(125, '2019-12-27 16:54:53', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(126, '2019-12-27 16:55:03', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(127, '2019-12-27 16:55:11', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(128, '2019-12-27 16:55:19', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(129, '2019-12-27 16:55:23', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(130, '2019-12-27 16:55:31', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(131, '2019-12-27 16:55:34', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(132, '2019-12-27 16:55:39', 'kumardn', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(133, '2019-12-27 16:55:49', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(134, '2019-12-27 16:56:02', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(135, '2019-12-27 16:56:45', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(136, '2019-12-27 16:57:03', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(137, '2019-12-27 16:57:43', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(138, '2019-12-27 16:58:43', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(139, '2019-12-27 16:58:54', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(140, '2019-12-27 16:58:56', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(141, '2019-12-27 16:59:03', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(142, '2019-12-27 16:59:12', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(143, '2019-12-27 16:59:13', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(144, '2019-12-27 16:59:22', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(145, '2019-12-27 16:59:22', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(146, '2019-12-27 16:59:30', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(147, '2019-12-27 16:59:39', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(148, '2019-12-27 16:59:44', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(149, '2019-12-27 16:59:50', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(150, '2019-12-27 16:59:54', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(151, '2019-12-27 16:59:58', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(152, '2019-12-27 17:00:02', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(153, '2019-12-27 17:00:09', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(154, '2019-12-27 17:00:10', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(155, '2019-12-27 17:00:17', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(156, '2019-12-27 17:00:19', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(157, '2019-12-27 17:00:26', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(158, '2019-12-27 17:00:27', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(159, '2019-12-27 17:00:35', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(160, '2019-12-27 17:00:36', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(161, '2019-12-27 17:00:44', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(162, '2019-12-27 17:00:52', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(163, '2019-12-27 17:01:03', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(164, '2019-12-27 17:01:10', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(165, '2019-12-27 17:01:18', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(166, '2019-12-27 17:01:33', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(167, '2019-12-27 17:01:35', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(168, '2019-12-27 17:01:43', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(169, '2019-12-27 17:02:06', 'jaswanth', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(170, '2019-12-27 17:02:25', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(171, '2019-12-27 17:02:48', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(172, '2019-12-27 17:02:56', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(173, '2019-12-27 17:02:57', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(174, '2019-12-27 17:03:03', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(175, '2019-12-27 17:03:10', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(176, '2019-12-27 17:03:14', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(177, '2019-12-27 17:03:16', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(178, '2019-12-27 17:03:23', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(179, '2019-12-27 17:03:24', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(180, '2019-12-27 17:03:29', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(181, '2019-12-27 17:03:32', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(182, '2019-12-27 17:03:36', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(183, '2019-12-27 17:03:42', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(184, '2019-12-27 17:03:44', 'Ram', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(185, '2019-12-27 17:03:49', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(186, '2019-12-27 17:04:04', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(187, '2019-12-27 17:04:12', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(188, '2019-12-27 17:04:19', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(189, '2019-12-27 17:04:26', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(190, '2019-12-27 17:04:32', 'ajay', '', 'debit', 50, 'Match Joined - #1111 ', 'success'),
(191, '2019-12-27 17:12:01', 'kumardn', '', 'credit', 175, 'Match Reward - #1111 ', 'success'),
(192, '2019-12-27 17:12:01', 'kumardn', '', 'credit', 225, 'Match Reward - #1111 ', 'success'),
(193, '2019-12-27 17:12:01', 'kumardn', '', 'credit', 150, 'Match Reward - #1111 ', 'success'),
(194, '2019-12-27 17:12:01', 'kumardn', '', 'credit', 125, 'Match Reward - #1111 ', 'success'),
(195, '2019-12-27 17:12:01', 'kumardn', '', 'credit', 25, 'Match Reward - #1111 ', 'success'),
(196, '2019-12-27 17:12:02', 'kumardn', '', 'credit', 75, 'Match Reward - #1111 ', 'success'),
(197, '2019-12-27 17:12:02', 'jaswanth', '', 'credit', 125, 'Match Reward - #1111 ', 'success'),
(198, '2019-12-27 17:12:02', 'kumardn', '', 'credit', 100, 'Match Reward - #1111 ', 'success'),
(199, '2019-12-27 17:12:02', 'jaswanth', '', 'credit', 150, 'Match Reward - #1111 ', 'success'),
(200, '2019-12-27 17:12:02', 'jaswanth', '', 'credit', 100, 'Match Reward - #1111 ', 'success'),
(201, '2019-12-27 17:12:02', 'kumardn', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(202, '2019-12-27 17:12:02', 'kumardn', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(203, '2019-12-27 17:12:02', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(204, '2019-12-27 17:12:03', 'kumardn', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(205, '2019-12-27 17:12:03', 'kumardn', '', 'credit', 25, 'Match Reward - #1111 ', 'success'),
(206, '2019-12-27 17:12:03', 'jaswanth', '', 'credit', 175, 'Match Reward - #1111 ', 'success'),
(207, '2019-12-27 17:12:03', 'kumardn', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(208, '2019-12-27 17:12:03', 'kumardn', '', 'credit', 50, 'Match Reward - #1111 ', 'success'),
(209, '2019-12-27 17:12:03', 'jaswanth', '', 'credit', 150, 'Match Reward - #1111 ', 'success'),
(210, '2019-12-27 17:12:03', 'kumardn', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(211, '2019-12-27 17:12:04', 'kumardn', '', 'credit', 100, 'Match Reward - #1111 ', 'success'),
(212, '2019-12-27 17:12:04', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(213, '2019-12-27 17:12:04', 'kumardn', '', 'credit', 125, 'Match Reward - #1111 ', 'success'),
(214, '2019-12-27 17:12:04', 'kumardn', '', 'credit', 175, 'Match Reward - #1111 ', 'success'),
(215, '2019-12-27 17:12:04', 'kumardn', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(216, '2019-12-27 17:12:04', 'kumardn', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(217, '2019-12-27 17:12:04', 'kumardn', '', 'credit', 25, 'Match Reward - #1111 ', 'success'),
(218, '2019-12-27 17:12:04', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(219, '2019-12-27 17:12:05', 'kumardn', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(220, '2019-12-27 17:12:05', 'kumardn', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(221, '2019-12-27 17:12:05', 'jaswanth', '', 'credit', 75, 'Match Reward - #1111 ', 'success'),
(222, '2019-12-27 17:12:05', 'kumardn', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(223, '2019-12-27 17:12:05', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(224, '2019-12-27 17:12:05', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(225, '2019-12-27 17:12:05', 'Ram', '', 'credit', 50, 'Match Reward - #1111 ', 'success'),
(226, '2019-12-27 17:12:06', 'Ram', '', 'credit', 50, 'Match Reward - #1111 ', 'success'),
(227, '2019-12-27 17:12:06', 'Ram', '', 'credit', 75, 'Match Reward - #1111 ', 'success'),
(228, '2019-12-27 17:12:06', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(229, '2019-12-27 17:12:06', 'jaswanth', '', 'credit', 100, 'Match Reward - #1111 ', 'success'),
(230, '2019-12-27 17:12:06', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(231, '2019-12-27 17:12:06', 'jaswanth', '', 'credit', 150, 'Match Reward - #1111 ', 'success'),
(232, '2019-12-27 17:12:06', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(233, '2019-12-27 17:12:06', 'Ram', '', 'credit', 100, 'Match Reward - #1111 ', 'success'),
(234, '2019-12-27 17:12:06', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(235, '2019-12-27 17:12:07', 'Ram', '', 'credit', 75, 'Match Reward - #1111 ', 'success'),
(236, '2019-12-27 17:12:07', 'Ram', '', 'credit', 100, 'Match Reward - #1111 ', 'success'),
(237, '2019-12-27 17:12:07', 'Ram', '', 'credit', 75, 'Match Reward - #1111 ', 'success'),
(238, '2019-12-27 17:12:07', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(239, '2019-12-27 17:12:07', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(240, '2019-12-27 17:12:07', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(241, '2019-12-27 17:12:07', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(242, '2019-12-27 17:12:07', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(243, '2019-12-27 17:12:08', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(244, '2019-12-27 17:12:08', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(245, '2019-12-27 17:12:08', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(246, '2019-12-27 17:12:08', 'jaswanth', '', 'credit', 50, 'Match Reward - #1111 ', 'success'),
(247, '2019-12-27 17:12:08', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(248, '2019-12-27 17:12:08', 'jaswanth', '', 'credit', 150, 'Match Reward - #1111 ', 'success'),
(249, '2019-12-27 17:12:08', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(250, '2019-12-27 17:12:08', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(251, '2019-12-27 17:12:08', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(252, '2019-12-27 17:12:09', 'Ram', '', 'credit', 25, 'Match Reward - #1111 ', 'success'),
(253, '2019-12-27 17:12:09', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(254, '2019-12-27 17:12:09', 'jaswanth', '', 'credit', 100, 'Match Reward - #1111 ', 'success'),
(255, '2019-12-27 17:12:09', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(256, '2019-12-27 17:12:09', 'Ram', '', 'credit', 50, 'Match Reward - #1111 ', 'success'),
(257, '2019-12-27 17:12:09', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(258, '2019-12-27 17:12:09', 'Ram', '', 'credit', 25, 'Match Reward - #1111 ', 'success'),
(259, '2019-12-27 17:12:10', 'jaswanth', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(260, '2019-12-27 17:12:10', 'Ram', '', 'credit', 25, 'Match Reward - #1111 ', 'success'),
(261, '2019-12-27 17:12:10', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(262, '2019-12-27 17:12:10', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(263, '2019-12-27 17:12:10', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(264, '2019-12-27 17:12:10', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(265, '2019-12-27 17:12:10', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(266, '2019-12-27 17:12:10', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(267, '2019-12-27 17:12:10', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(268, '2019-12-27 17:12:10', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(269, '2019-12-27 17:12:11', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(270, '2019-12-27 17:12:11', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(271, '2019-12-27 17:12:11', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(272, '2019-12-27 17:12:11', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(273, '2019-12-27 17:12:11', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(274, '2019-12-27 17:12:11', 'Ram', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(275, '2019-12-27 17:12:11', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(276, '2019-12-27 17:12:11', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(277, '2019-12-27 17:12:12', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(278, '2019-12-27 17:12:12', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(279, '2019-12-27 17:12:12', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(280, '2019-12-27 17:12:12', 'ajay', '', 'credit', 0, 'Match Reward - #1111 ', 'success'),
(281, '2019-12-27 19:07:00', 'jaswanth', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(282, '2019-12-27 20:49:43', 'ram', '8331899069', 'debit', 4, 'Withdraw Successfull', 'success'),
(283, '2019-12-27 21:07:07', 'jaswanth', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(284, '2019-12-27 21:08:12', 'jaswanth', '8331899069', 'debit', 60, 'Withdraw Successfull', 'success'),
(285, '2019-12-27 21:09:32', 'jaswanth', '8331899069', 'debit', 100, 'Withdraw Successfull', 'success'),
(286, '2019-12-27 21:20:05', 'kumardn', '9492780279', 'debit', 100, 'Withdraw Successfull', 'success'),
(287, '2019-12-27 21:53:24', 'kumardn', '8331899069', 'debit', 100, 'Withdraw Successfull', 'success'),
(288, '2019-12-27 22:04:03', 'kumardn', '9490873637', 'debit', 265, 'Withdraw Successfull', 'success'),
(289, '2019-12-28 05:02:47', 'jaswanth', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(290, '2019-12-28 05:04:54', 'jaswanth', '', 'credit', 1, 'Money Added to Wallet', 'success'),
(291, '2019-12-28 06:01:59', 'jaswanth', '', 'failed', 0, 'Transcation Failed', 'failed'),
(292, '2019-12-28 06:03:52', 'jaswanth', '', 'failed', 10, 'Transcation Failed', 'failed'),
(293, '2019-12-28 06:37:38', 'jaswanth', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(294, '2019-12-30 06:06:34', 'ram', '', 'failed', 100, 'Transcation Failed', 'failed'),
(295, '2019-12-30 06:07:21', 'ram', '', 'failed', 100, 'Transcation Failed', 'failed'),
(296, '2019-12-30 18:54:58', 'jaswanth', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(297, '2019-12-30 18:55:53', 'jaswanth', '8331899069', 'debit', 50, 'Withdraw Successfull', 'success'),
(298, '2019-12-30 19:34:24', 'jaswanth', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(299, '2019-12-30 19:46:17', 'jaswanth', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(300, '2019-12-30 20:00:03', 'kumardn', '', 'debit', 20, 'Match Joined - #99334 ', 'success'),
(301, '2019-12-30 20:00:57', 'kumardn', '9490873637', 'debit', 5980, 'Withdraw Successfull', 'success'),
(302, '2020-01-15 08:12:12', 'jaswanth', '8331899069', 'debit', 200, 'Withdraw Successfull', 'success'),
(303, '2020-01-15 08:12:27', 'jaswanth', '8331899069', 'debit', 500, 'Withdraw Under Processing', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `uc_transactions`
--

CREATE TABLE `uc_transactions` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(19000) NOT NULL,
  `pubg_user_id` blob NOT NULL,
  `pubg_char_id` blob NOT NULL,
  `reason` varchar(19000) NOT NULL,
  `points` int(255) NOT NULL,
  `status` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contest`
--
ALTER TABLE `contest`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `match_id` (`match_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`,`email_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `special_notification`
--
ALTER TABLE `special_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transcations`
--
ALTER TABLE `transcations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uc_transactions`
--
ALTER TABLE `uc_transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contest`
--
ALTER TABLE `contest`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `special_notification`
--
ALTER TABLE `special_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transcations`
--
ALTER TABLE `transcations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `uc_transactions`
--
ALTER TABLE `uc_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
