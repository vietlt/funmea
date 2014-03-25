-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2014 at 11:19 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `funmea`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(500) DEFAULT NULL,
  `password` varchar(450) DEFAULT NULL,
  `email` varchar(450) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `account`, `password`, `email`, `phone`, `full_name`, `role_id`) VALUES
(1, 'admin', '96e79218965eb72c92a549dd5a330112', 'viet.lt1190@gmail.com', '0968032586', 'Lại Tiến Việt', 0),
(4, 'hadesvn', '96e79218965eb72c92a549dd5a330112', 'developer.ltv@gmail.com', '0989202368', 'Dương Quốc Anh', 0),
(5, 'hungdp', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE `tbl_config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(450) DEFAULT NULL,
  `option` text,
  `about` text,
  `name_website` varchar(450) DEFAULT NULL,
  `email_system` varchar(450) DEFAULT NULL,
  `password` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_config`
--

INSERT INTO `tbl_config` (`config_id`, `logo`, `option`, `about`, `name_website`, `email_system`, `password`) VALUES
(1, '/media/123/images/20090929173346_1.jpg', '{"1":{"key":"1111","value":"111"},"2":{"key":"222","value":"222"}}', '', 'CI-Master', 'ưer', '243234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `link_image` varchar(255) NOT NULL,
  `created_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permissions`
--

CREATE TABLE `tbl_permissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `permission_name` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `action` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `permission_desc` text COLLATE utf8_bin,
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Quyền' AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_permissions`
--

INSERT INTO `tbl_permissions` (`permission_id`, `permission_name`, `action`, `permission_desc`) VALUES
(23, 'Út Tịch', 'Lựa chọn', 0xc4826e2043e1bba974),
(26, 'dr', 'Lựa chọn', 0x646667),
(30, 'Vuawf them', 'Lựa chọn', 0x69736466);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_bin NOT NULL,
  `alias` varchar(500) COLLATE utf8_bin NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `source` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `cover_img` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `description` text COLLATE utf8_bin,
  `content` longtext COLLATE utf8_bin,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `title`, `alias`, `create_time`, `create_by`, `source`, `cate_id`, `cover_img`, `description`, `content`) VALUES
(4, 'Đại học Cambridge khám phá khả năng bám dính đặc biệt của bọ que để áp dụng vào công nghệ vật liệu', '', '2001-03-14 00:00:00', 1, 'Tinhte.vn', 1, 'media/123/images/2397188_stick.jpg', 0x546869c3aa6e206e6869c3aa6e206c75c3b46e206cc3a0206e6775e1bb936e2063e1baa36d2068e1bba96e67206ce1bb9b6e20c491e1bb91692076e1bb9b692063c3a163206e68c3a0206b686f612068e1bb8d632076e1baad74206c69e1bb87752076c3a02068c3b46d206e61792c206c6fc3a0692062e1bb8d20717565206ce1baa16920c491c6b0e1bba363206368e1bb8d6e206cc3a06d206368e1bba720c491e1bb81206e676869c3aa6e2063e1bba9752063e1bba76120c491e1baa1692068e1bb8d632043616d6272696467652e204c6fc3a0692063c3b46e207472c3b96e672064692063687579e1bb836e206368e1baad6d206368e1baa170206ec3a0792067e1baa76e206e68c6b0207468c3a16368207468e1bba963207472e1bb8d6e67206ce1bbb163206b68692063c3b3207468e1bb83207472656f206dc3ac6e68207472c3aa6e206de1bb8d69206de1bab774207068e1bab36e67206e68c6b06e67206b68e1baa3206ec4836e672062c3a16d2064c3ad6e68206ec3a079206ce1baa169206b68c3b46e6720e1baa36e682068c6b0e1bb9f6e6720c491e1babf6e207669e1bb87632064692063687579e1bb836e2063e1bba761206368c3ba6e672e2056e1baad79206cc3a06d2073616f2062e1bb8d207175652063c3b3207468e1bb83206769e1baa36920717579e1babf742063e1baa320322076e1baa56e20c491e1bb81206ec3a0793f, 0x3c703e3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e5468692665636972633b6e206e68692665636972633b6e206c75266f636972633b6e206c266167726176653b206e6775e1bb936e2063e1baa36d2068e1bba96e67206ce1bb9b6e20c491e1bb91692076e1bb9b692063266161637574653b63206e68266167726176653b266e6273703b3c2f7370616e3e3c6120636c6173733d2254696e6874655f58656e5461675f5461674c696e6b2220687265663d22687474703a2f2f7777772e74696e6874652e766e2f746167732f6b686f612b68254531254242253844632b76254531254241254144742b6c69254531254242253837752f22207374796c653d22636f6c6f723a2072676228302c2036302c203930293b20746578742d6465636f726174696f6e3a206e6f6e653b20626f726465722d746f702d6c6566742d7261646975733a203570783b20626f726465722d746f702d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203570783b2070616464696e673a20307078203370783b206d617267696e3a20307078202d3370783b20666f6e742d66616d696c793a2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313570783b206c696e652d6865696768743a2032302e353333333332383234373037303370783b20746578742d616c69676e3a206a7573746966793b22207461726765743d225f626c616e6b223e6b686f612068e1bb8d632076e1baad74206c69e1bb87753c2f613e3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e266e6273703b76266167726176653b2068266f636972633b6d206e61792c266e6273703b3c2f7370616e3e3c6120636c6173733d2254696e6874655f58656e5461675f5461674c696e6b2220687265663d22687474703a2f2f7777772e74696e6874652e766e2f746167732f6c6f254333254130692b622545312542422538442b7175652f22207374796c653d22636f6c6f723a2072676228302c2036302c203930293b20746578742d6465636f726174696f6e3a206e6f6e653b20626f726465722d746f702d6c6566742d7261646975733a203570783b20626f726465722d746f702d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203570783b2070616464696e673a20307078203370783b206d617267696e3a20307078202d3370783b20666f6e742d66616d696c793a2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313570783b206c696e652d6865696768743a2032302e353333333332383234373037303370783b20746578742d616c69676e3a206a7573746966793b22207461726765743d225f626c616e6b223e6c6f266167726176653b692062e1bb8d207175653c2f613e3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e266e6273703b6ce1baa16920c491c6b0e1bba363206368e1bb8d6e206c266167726176653b6d206368e1bba720c491e1bb81206e6768692665636972633b6e2063e1bba9752063e1bba761266e6273703b3c2f7370616e3e3c6120636c6173733d2254696e6874655f58656e5461675f5461674c696e6b2220687265663d22687474703a2f2f7777772e74696e6874652e766e2f746167732f254334253931254531254241254131692b68254531254242253844632b63616d6272696467652f22207374796c653d22636f6c6f723a2072676228302c2036302c203930293b20746578742d6465636f726174696f6e3a206e6f6e653b20626f726465722d746f702d6c6566742d7261646975733a203570783b20626f726465722d746f702d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203570783b2070616464696e673a20307078203370783b206d617267696e3a20307078202d3370783b20666f6e742d66616d696c793a2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313570783b206c696e652d6865696768743a2032302e353333333332383234373037303370783b20746578742d616c69676e3a206a7573746966793b22207461726765743d225f626c616e6b223ec491e1baa1692068e1bb8d632043616d6272696467653c2f613e3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e2e204c6f266167726176653b69266e6273703b3c2f7370616e3e3c6120636c6173733d2254696e6874655f58656e5461675f5461674c696e6b2220687265663d22687474703a2f2f7777772e74696e6874652e766e2f746167732f632543332542346e2b74722543332542396e672f22207374796c653d22636f6c6f723a2072676228302c2036302c203930293b20746578742d6465636f726174696f6e3a206e6f6e653b20626f726465722d746f702d6c6566742d7261646975733a203570783b20626f726465722d746f702d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203570783b2070616464696e673a20307078203370783b206d617267696e3a20307078202d3370783b20666f6e742d66616d696c793a2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313570783b206c696e652d6865696768743a2032302e353333333332383234373037303370783b20746578742d616c69676e3a206a7573746966793b22207461726765743d225f626c616e6b223e63266f636972633b6e207472267567726176653b6e673c2f613e3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e266e6273703b64692063687579e1bb836e206368e1baad6d206368e1baa170206e266167726176653b792067e1baa76e206e68c6b0207468266161637574653b6368207468e1bba963207472e1bb8d6e67206ce1bbb163206b68692063266f61637574653b207468e1bb83207472656f206d266967726176653b6e682074722665636972633b6e206de1bb8d69206de1bab774207068e1bab36e67206e68c6b06e67266e6273703b3c2f7370616e3e3c6120636c6173733d2254696e6874655f58656e5461675f5461674c696e6b2220687265663d22687474703a2f2f7777772e74696e6874652e766e2f746167732f6b682545312542412541332b6e2543342538336e672b622543332541316d2b642543332541446e682f22207374796c653d22636f6c6f723a2072676228302c2036302c203930293b20746578742d6465636f726174696f6e3a206e6f6e653b20626f726465722d746f702d6c6566742d7261646975733a203570783b20626f726465722d746f702d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203570783b2070616464696e673a20307078203370783b206d617267696e3a20307078202d3370783b20666f6e742d66616d696c793a2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313570783b206c696e652d6865696768743a2032302e353333333332383234373037303370783b20746578742d616c69676e3a206a7573746966793b22207461726765743d225f626c616e6b223e6b68e1baa3206ec4836e672062266161637574653b6d2064266961637574653b6e683c2f613e3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e266e6273703b6e266167726176653b79206ce1baa169206b68266f636972633b6e6720e1baa36e682068c6b0e1bb9f6e6720c491e1babf6e207669e1bb87632064692063687579e1bb836e2063e1bba761206368267561637574653b6e672e2056e1baad79206c266167726176653b6d2073616f266e6273703b3c2f7370616e3e3c6120636c6173733d2254696e6874655f58656e5461675f5461674c696e6b2220687265663d22687474703a2f2f7777772e74696e6874652e766e2f746167732f622545312542422538442b7175652f22207374796c653d22636f6c6f723a2072676228302c2036302c203930293b20746578742d6465636f726174696f6e3a206e6f6e653b20626f726465722d746f702d6c6566742d7261646975733a203570783b20626f726465722d746f702d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203570783b2070616464696e673a20307078203370783b206d617267696e3a20307078202d3370783b20666f6e742d66616d696c793a2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313570783b206c696e652d6865696768743a2032302e353333333332383234373037303370783b20746578742d616c69676e3a206a7573746966793b22207461726765743d225f626c616e6b223e62e1bb8d207175653c2f613e3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e266e6273703b63266f61637574653b207468e1bb83206769e1baa36920717579e1babf742063e1baa320322076e1baa56e20c491e1bb81206e266167726176653b793f3c2f7370616e3e3c6272202f3e0d0a3c6272202f3e0d0a3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e4e6768692665636972633b6e2063e1bba975206de1bb9b69206e68e1baa5742074e1bbab2043616d62726964676520c491266174696c64653b207469e1babf74206ce1bb992072e1bab16e672073e1bbb1206be1babf742068e1bba370206769e1bbaf612063266161637574653b632076e1baad74206c69e1bb87752063e1bba96e672076266167726176653b206de1bb816d2074722665636972633b6e2063682661636972633b6e2063e1bba7612062e1bb8d2071756520c491266174696c64653b206769267561637574653b70206368267561637574653b6e67206b68e1baaf63207068e1bba563206d2661636972633b7520746875e1baab6e2076e1bb81206368e1bba963206ec4836e672063e1bba7612063266161637574653b632063682661636972633b6e2e2056e1bb9b69207669e1bb87632073e1bbad2064e1bba56e672068e1bb976e2068e1bba370206769e1bbaf612063266161637574653b632074e1baa56d20c491e1bb876d2063e1bba96e6720c491e1bb832062266161637574653b6d2068267561637574653b742076266167726176653b20c491e1bb876d206c266f636972633b6e6720c491e1bb832074e1baa16f207261206ce1bbb163206d612073266161637574653b7420746861792076266967726176653b2064266961637574653b6e68207468e1baad742073e1bbb12076266167726176653b6f2062e1bb81206de1bab7742c2062e1bb8d207175652063266f61637574653b207468e1bb832062e1baa574206368e1baa570207472e1bb8d6e67206ce1bbb1632074726f6e67206b68692076e1baab6e2063266f61637574653b207468e1bb832064692063687579e1bb836e2074e1bbb120646f206b6869207472656f206e67c6b0e1bba3632074682661636972633b6e206d266967726176653b6e682e3c2f7370616e3e3c6272202f3e0d0a3c6272202f3e0d0a3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e4461766964204c61626f6e7465202d206c266174696c64653b6e6820c491e1baa16f206e68266f61637574653b6d206e6768692665636972633b6e2063e1bba97520c491e1babf6e2074e1bbab206b686f6120c491e1bb996e672076e1baad742068e1bb8d6320746875e1bb996320c491e1baa1692068e1bb8d632043616d6272696467652063686f206269e1babf743a202671756f743b42e1bb8d2071756520c491266174696c64653b207068266161637574653b7420747269e1bb836e206de1bb9974207068c6b0c6a16e67207068266161637574653b702072e1baa574206b68266561637574653b6f206c266561637574653b6f20c491e1bb83206769e1baa36920717579e1babf742076e1baa56e20c491e1bb81206769e1bbaf61206b68e1baa3206ec4836e672062266161637574653b6d2064266961637574653b6e682076266167726176653b2073e1bbb12076e1baad6e20c491e1bb996e672076e1bb9b692068e1bb87207468e1bb916e67266e6273703b3c2f7370616e3e3c6120636c6173733d2254696e6874655f58656e5461675f5461674c696e6b2220687265663d22687474703a2f2f7777772e74696e6874652e766e2f746167732f2543342539312545312542422538376d2b63682543332541326e2f22207374796c653d22636f6c6f723a2072676228302c2036302c203930293b20746578742d6465636f726174696f6e3a206e6f6e653b20626f726465722d746f702d6c6566742d7261646975733a203570783b20626f726465722d746f702d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203570783b2070616464696e673a20307078203370783b206d617267696e3a20307078202d3370783b20666f6e742d66616d696c793a2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313570783b206c696e652d6865696768743a2032302e353333333332383234373037303370783b20746578742d616c69676e3a206a7573746966793b22207461726765743d225f626c616e6b223ec491e1bb876d2063682661636972633b6e3c2f613e3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e266e6273703b6b266561637574653b70207468617920c491e1bb9569206c752661636972633b6e207068692665636972633b6e206769e1bbaf61203220766169207472266f67726176653b2064266961637574653b6e682076266167726176653b2062266161637574653b6d2074267567726176653b79207468656f2074266967726176653b6e68206875e1bb916e672e2042e1bab16e672063266161637574653b63682073e1baaf702078e1babf702076266167726176653b2068266967726176653b6e68207468266161637574653b692068e1bb8d632c2074e1bbb1206e68692665636972633b6e20c491266174696c64653b2064e1baa1792063686f206368267561637574653b6e672074266f636972633b692072e1bab16e67206de1bb997420746869e1babf74206be1babf2074e1bb91742063266f61637574653b206e6768c4a961206368267561637574653b6e672074266f636972633b692063266f61637574653b207468e1bb83206be1babf742068e1bba3702063266161637574653b632074266961637574653b6e68206368e1baa5742063e1bba7612076e1baad74206c69e1bb87752063e1bba96e672076266167726176653b206de1bb816d2c2074e1baa16f2072612063266161637574653b63206ce1bbb1632068e1bba370207468266167726176653b6e68206e68c6b0206ce1bbb163206d612073266161637574653b7420c491e1bb832063266f61637574653b207468e1bb8320c49169206de1bb9974207175266174696c64653b6e6720c491c6b0e1bb9d6e672064266167726176653b69206d266167726176653b206b68266f636972633b6e672063e1baa76e2064267567726176653b6e67206e6869e1bb817520266161637574653b70206ce1bbb1632074c6b0c6a16e672074e1bbb1206e68c6b02062e1bb8d207175652e2671756f743b3c2f7370616e3e3c2f703e0d0a0d0a3c703e3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e4e6768692665636972633b6e2063e1bba97520c491266174696c64653b207068266161637574653b74206869e1bb876e2072612062e1bb8d207175652063266f61637574653b20322074e1baa56d20c491e1bb876d2076e1bb9b6920766169207472266f67726176653b2062266161637574653b6d2064266961637574653b6e68206b68266161637574653b63206e617520e1bb9f206375e1bb9169206de1bb97692063682661636972633b6e2e20c490e1bb876d2062266161637574653b6d2064266961637574653b6e682074e1baa169206dc5a9692063682661636972633b6e206d616e67206ce1baa169206ce1bbb1632068267561637574653b742063e1baa76e20746869e1babf7420c491e1bb83206c656f206c2665636972633b6e2074c6b0e1bb9d6e672076266167726176653b2064692063687579e1bb836e2074722665636972633b6e206de1bab7742064c6b0e1bb9b692063e1bba7612063266161637574653b632063266167726176653b6e6820632661636972633b792e2054726f6e67206b686920c491266f61637574653b2c20c491e1bb876d206c266f636972633b6e6720e1bb9f2067266f61637574653b742063682661636972633b6e206d616e67206ce1baa169206ce1bbb163206d612073266161637574653b742063e1baa76e20746869e1babf7420c491e1bb832062266161637574653b6d206e68c6b06e67206b68266f636972633b6e672064266961637574653b6e68206b68692064692063687579e1bb836e2074722665636972633b6e2063266161637574653b63206de1bab774207468e1bab36e6720c491e1bba96e672e20c490e1bb99206d612073266161637574653b74207068267567726176653b2068e1bba3702063266f61637574653b207468e1bb8320c491c6b0e1bba36320c49169e1bb8175206368e1bb896e68206e68e1bb9d2063266161637574653b63682073e1baaf702078e1babf702076266167726176653b2068266967726176653b6e682064e1baa16e672063e1bba7612063266161637574653b63206c266f636972633b6e672073692665636972633b75206e68e1bb8f2076e1bb9b6920c491e1bb992064266167726176653b69206b68266161637574653b63206e6861752e3c2f7370616e3e3c6272202f3e0d0a3c6272202f3e0d0a3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e42e1bab16e672063266161637574653b636820266161637574653b702064e1bba56e6720266161637574653b70206ce1bbb163206e6869e1bb81752068617920266961637574653b74206c2665636972633b6e2062e1bb81206de1bab7742c2062e1bb8d207175652063266f61637574653b207468e1bb832074c4836e6720686fe1bab763206769e1baa36d206d612073266161637574653b742e205468656f206769266161637574653b6f2073c6b0204c61626f6e74652c20c49169e1bb8175206e266167726176653b792063266f61637574653b207468e1bb8320c491c6b0e1bba363207468e1bbb163206869e1bb876e2064e1bbb1612074722665636972633b6e20332079e1babf752074e1bb913a3c2f7370616e3e3c2f703e0d0a0d0a3c756c3e0d0a093c6c693ec490e1bb876d2063682661636972633b6e2076266167726176653b20c491e1baa7752063266161637574653b632073e1bba369206c266f636972633b6e6720c491e1bb817520626f207472266f67726176653b6e2e20c49069e1bb8175206e266167726176653b792063266f61637574653b206e6768c4a961206b686920266161637574653b70206ce1bbb16320c491c6b0e1bba36320c491e1bab774206c2665636972633b6e2062e1bb81206de1bab7742c206469e1bb876e2074266961637574653b6368207469e1babf702078267561637574653b6320c491c6b0e1bba3632074e1baa16f207261206e6869e1bb81752068c6a16e2c206769e1bb916e67206e68c6b0206b68692062e1baa16e20c491266567726176653b206de1bb9974207472266161637574653b692062266f61637574653b6e672063616f207375207875e1bb916e672073266167726176653b6e2e3c2f6c693e0d0a093c6c693e4de1bb99742073e1bb912073e1bba369206c266f636972633b6e67206e67e1baaf6e2068c6a16e2073e1bb912063266f67726176653b6e206ce1baa1692c20646f20c491266f61637574653b206b68692063266f61637574653b206e6869e1bb817520266161637574653b70206ce1bbb1632c2063266161637574653b632073e1bba369206c266f636972633b6e67206e67e1baaf6e2073e1babd20c491c6b0e1bba363207469e1babf702078267561637574653b632076e1bb9b692062e1bb81206de1bab7742e3c2f6c693e0d0a093c6c693e4b68692063266f61637574653b206e6869e1bb817520266161637574653b70206ce1bbb1632068c6a16e20c491c6b0e1bba36320266161637574653b702064e1bba56e67206c2665636972633b6e2062e1bb81206de1bab7742c206de1bb99742073e1bb912073e1bba369206c266f636972633b6e6720636f6e67206ce1baa1692076266167726176653b2074e1baa16f207261207469e1babf702078267561637574653b6320622665636972633b6e2c2071756120c491266f61637574653b2074c4836e67206469e1bb876e2074266961637574653b6368207469e1babf702078267561637574653b63206d266167726176653b206b68266f636972633b6e672063e1baa76e206e6869e1bb8175206ce1bbb1632062e1bb952073756e672e3c2f6c693e0d0a3c2f756c3e0d0a0d0a3c703e3c6272202f3e0d0a3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e43266161637574653b632079e1babf752074e1bb9120746869e1babf74206be1babf206e266167726176653b792074e1baa16f207261206de1bb9974206ce1bbb163206d612073266161637574653b74206ce1bb9b6e2076e1bb9b69206de1bb997420266161637574653b70206ce1bbb1632074c6b0c6a16e6720c491e1bb9169206e68e1bb8f2e2054e1bbab207472c6b0e1bb9d6e672068e1bba3702063e1bba7612062e1bb8d207175652c2063266161637574653b63206e68266167726176653b206b686f612068e1bb8d632068792076e1bb8d6e672073e1babd206de1bb9f207261206e68e1bbaf6e672063e1baa369207469e1babf6e206de1bb9b692076e1bb812076e1baad74206c69e1bb87752e204de1bb99742076266961637574653b2064e1bba5206c266167726176653b2076e1baad74206c69e1bb87752064267567726176653b6e6720c491e1bb83206368e1babf2074e1baa16f20c491e1babf2064266167726176653b79207468e1bb83207468616f2e2048e1bb8d2063686f2072e1bab16e67206e266f61637574653b2063266f61637574653b207468e1bb83206769267561637574653b70206de1bb99742076e1baad6e20c491e1bb996e672076692665636972633b6e20c49169e1bb816e206b696e68206e68c6b020557361696e20426f6c742063266f61637574653b207468e1bb832063266161637574653b6e20c491266961637574653b636820e1bb9f2063e1bbb1206c7920313030206d206e68616e682068c6a16e20736f2076e1bb9b69206be1bbb7206ce1bba563206d266167726176653b20616e6820c491616e67206ee1baaf6d206769e1bbaf2e3c2f7370616e3e3c6272202f3e0d0a3c6272202f3e0d0a3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e4769266161637574653b6f2073c6b0204c61626f6e7465206769e1baa369207468266961637574653b63683a202671756f743b4ee1babf752062e1baa16e206368e1baa1792c2062e1baa16e206b68266f636972633b6e67206d75e1bb916e2062266167726176653b6e2063682661636972633b6e206d266967726176653b6e682064266961637574653b6e682076266167726176653b6f206de1bab77420c491c6b0e1bb9d6e67206e68c6b06e672062e1baa16e2063c5a96e67206b68266f636972633b6e67206d75e1bb916e2063682661636972633b6e2062e1bb8b207472c6b0e1bba3742e204368267561637574653b6e672074266f636972633b69206e6768692665636972633b6e2063e1bba975206c6f266167726176653b692063266f636972633b6e207472267567726176653b6e67206e266167726176653b7920c491e1bb83206869e1bb83752072266f74696c64653b2068c6a16e2076e1bb812063266161637574653b632068e1bb87207468e1bb916e672073696e682068e1bb8d632076266167726176653b2062266167726176653b692068e1bb8d632074e1bbab207468692665636972633b6e206e68692665636972633b6e206e68c6b02074722665636972633b6e2073e1babd2072e1baa5742068e1bbaf7520266961637574653b636820c491e1bb83206c266167726176653b6d20267961637574653b2074c6b0e1bb9f6e672063686f206e68e1bbaf6e67207068c6b0c6a16e67207068266161637574653b70207469e1babf702063e1baad6e206de1bb9b69206e68e1bab16d2074e1baa16f2072612063266161637574653b6320746869e1babf742062e1bb8b2074e1bb91742068c6a16e2e2671756f743b3c2f7370616e3e3c6272202f3e0d0a3c6272202f3e0d0a3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e4e68e1bbaf6e67206e6768692665636972633b6e2063e1bba975206ce1baa579266e6273703b3c2f7370616e3e3c6120636c6173733d2254696e6874655f58656e5461675f5461674c696e6b2220687265663d22687474703a2f2f7777772e74696e6874652e766e2f746167732f2543332542442b742543362542302545312542422539466e672b742545312542422541422b7468692543332541416e2b6e68692543332541416e2f22207374796c653d22636f6c6f723a2072676228302c2036302c203930293b20746578742d6465636f726174696f6e3a206e6f6e653b20626f726465722d746f702d6c6566742d7261646975733a203570783b20626f726465722d746f702d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203570783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203570783b2070616464696e673a20307078203370783b206d617267696e3a20307078202d3370783b20666f6e742d66616d696c793a2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313570783b206c696e652d6865696768743a2032302e353333333332383234373037303370783b20746578742d616c69676e3a206a7573746966793b22207461726765743d225f626c616e6b223e267961637574653b2074c6b0e1bb9f6e672074e1bbab207468692665636972633b6e206e68692665636972633b6e3c2f613e3c7370616e207374796c653d22636f6c6f723a7267622832302c2032302c203230293b20666f6e742d66616d696c793a68656c7665746963612c617269616c2c73616e732d73657269663b20666f6e742d73697a653a31357078223e266e6273703bc491266174696c64653b2064e1baab6e20c491e1babf6e2072e1baa574206e6869e1bb81752063e1baa369207469e1babf6e2074726f6e672063266161637574653b632063266f636972633b6e67206e6768e1bb87206869e1bb876e20c491e1baa1692e2044c6b0e1bb9b6920c4912661636972633b79206c266167726176653b206de1bb99742073e1bb912063266f636972633b6e67206e6768e1bb87206d266167726176653b2062e1baa16e2063266f61637574653b207468e1bb83207175616e20742661636972633b6d3c2f7370616e3e3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a),
(5, '0', '', '2001-03-14 00:00:00', 1, '0', 1, '0', 0x30, 0x30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_cate`
--

CREATE TABLE `tbl_post_cate` (
  `post_cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_cate_name` varchar(500) DEFAULT NULL,
  `alias` varchar(500) DEFAULT NULL,
  `description` text,
  `parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rate`
--

CREATE TABLE `tbl_rate` (
  `thread_id` int(11) NOT NULL,
  `thumb_up` int(11) NOT NULL,
  `thumb_down` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rate_log`
--

CREATE TABLE `tbl_rate_log` (
  `thread_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `role_description` text COLLATE utf8_bin,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Nhóm quyền	' AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_name`, `role_description`) VALUES
(1, 'Super Admin', 0x4e67c6b0e1bb9d692063c3b320717579e1bb816e2068e1baa16e2063616f206e68e1baa574),
(2, 'Super Mod', 0xc490e1bb872063e1bba7612053757065722041646d696e),
(10, 'Suport Mod', 0xc490e1bb87206768e1bab9),
(38, 'Super Ass', 0x41646d696e);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role_permission`
--

CREATE TABLE `tbl_role_permission` (
  `role_id` int(11) NOT NULL,
  `permission_id` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `alias`, `email`, `fullname`) VALUES
(1, 'hungdp', 'paintee', 'mr.dp.hung@gmail.com', 'Đặng Phi Hùng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_videos`
--

CREATE TABLE `tbl_videos` (
  `id` int(11) NOT NULL DEFAULT '0',
  `link_video` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_views`
--

CREATE TABLE `tbl_views` (
  `thread_id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;