/*
SQLyog Community v11.31 (64 bit)
MySQL - 5.6.16 : Database - mycartdb
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`funmeadb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `funmeadb`;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(500) DEFAULT NULL,
  `password` varchar(450) DEFAULT NULL,
  `email` varchar(450) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`admin_id`,`account`,`password`,`email`,`phone`,`full_name`,`role_id`) values (1,'admin','96e79218965eb72c92a549dd5a330112','viet.lt1190@gmail.com','0968032586','Lại Tiến Việt',0),(4,'hadesvn','96e79218965eb72c92a549dd5a330112','developer.ltv@gmail.com','0989202368','Dương Quốc Anh',0),(5,'vietlt',NULL,NULL,NULL,NULL,0);

/*Table structure for table `tbl_config` */

DROP TABLE IF EXISTS `tbl_config`;

CREATE TABLE `tbl_config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(450) DEFAULT NULL,
  `option` text,
  `about` text,
  `name_website` varchar(450) DEFAULT NULL,
  `email_system` varchar(450) DEFAULT NULL,
  `password` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_config` */

insert  into `tbl_config`(`config_id`,`logo`,`option`,`about`,`name_website`,`email_system`,`password`) values (1,'/media/123/images/20090929173346_1.jpg','{\"1\":{\"key\":\"1111\",\"value\":\"111\"},\"2\":{\"key\":\"222\",\"value\":\"222\"}}','','CI-Master','ưer','243234');

/*Table structure for table `tbl_permissions` */

DROP TABLE IF EXISTS `tbl_permissions`;

CREATE TABLE `tbl_permissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `permission_name` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `action` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `permission_desc` text COLLATE utf8_bin,
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Quyền';

/*Data for the table `tbl_permissions` */

insert  into `tbl_permissions`(`permission_id`,`permission_name`,`action`,`permission_desc`) values (23,'Út Tịch','Lựa chọn','Ăn Cứt'),(26,'dr','Lựa chọn','dfg'),(30,'Vuawf them','Lựa chọn','isdf');

/*Table structure for table `tbl_post` */

DROP TABLE IF EXISTS `tbl_post`;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `tbl_post` */

insert  into `tbl_post`(`post_id`,`title`,`alias`,`create_time`,`create_by`,`source`,`cate_id`,`cover_img`,`description`,`content`) values (4,'Đại học Cambridge khám phá khả năng bám dính đặc biệt của bọ que để áp dụng vào công nghệ vật liệu','','2001-03-14 00:00:00',1,'Tinhte.vn',1,'media/123/images/2397188_stick.jpg','Thiên nhiên luôn là nguồn cảm hứng lớn đối với các nhà khoa học vật liệu và hôm nay, loài bọ que lại được chọn làm chủ đề nghiên cứu của đại học Cambridge. Loài côn trùng di chuyển chậm chạp này gần như thách thức trọng lực khi có thể treo mình trên mọi mặt phẳng nhưng khả năng bám dính này lại không ảnh hưởng đến việc di chuyển của chúng. Vậy làm sao bọ que có thể giải quyết cả 2 vấn đề này?','<p><span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">Thi&ecirc;n nhi&ecirc;n lu&ocirc;n l&agrave; nguồn cảm hứng lớn đối với c&aacute;c nh&agrave;&nbsp;</span><a class=\"Tinhte_XenTag_TagLink\" href=\"http://www.tinhte.vn/tags/khoa+h%E1%BB%8Dc+v%E1%BA%ADt+li%E1%BB%87u/\" style=\"color: rgb(0, 60, 90); text-decoration: none; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding: 0px 3px; margin: 0px -3px; font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 20.53333282470703px; text-align: justify;\" target=\"_blank\">khoa học vật liệu</a><span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">&nbsp;v&agrave; h&ocirc;m nay,&nbsp;</span><a class=\"Tinhte_XenTag_TagLink\" href=\"http://www.tinhte.vn/tags/lo%C3%A0i+b%E1%BB%8D+que/\" style=\"color: rgb(0, 60, 90); text-decoration: none; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding: 0px 3px; margin: 0px -3px; font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 20.53333282470703px; text-align: justify;\" target=\"_blank\">lo&agrave;i bọ que</a><span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">&nbsp;lại được chọn l&agrave;m chủ đề nghi&ecirc;n cứu của&nbsp;</span><a class=\"Tinhte_XenTag_TagLink\" href=\"http://www.tinhte.vn/tags/%C4%91%E1%BA%A1i+h%E1%BB%8Dc+cambridge/\" style=\"color: rgb(0, 60, 90); text-decoration: none; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding: 0px 3px; margin: 0px -3px; font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 20.53333282470703px; text-align: justify;\" target=\"_blank\">đại học Cambridge</a><span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">. Lo&agrave;i&nbsp;</span><a class=\"Tinhte_XenTag_TagLink\" href=\"http://www.tinhte.vn/tags/c%C3%B4n+tr%C3%B9ng/\" style=\"color: rgb(0, 60, 90); text-decoration: none; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding: 0px 3px; margin: 0px -3px; font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 20.53333282470703px; text-align: justify;\" target=\"_blank\">c&ocirc;n tr&ugrave;ng</a><span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">&nbsp;di chuyển chậm chạp n&agrave;y gần như th&aacute;ch thức trọng lực khi c&oacute; thể treo m&igrave;nh tr&ecirc;n mọi mặt phẳng nhưng&nbsp;</span><a class=\"Tinhte_XenTag_TagLink\" href=\"http://www.tinhte.vn/tags/kh%E1%BA%A3+n%C4%83ng+b%C3%A1m+d%C3%ADnh/\" style=\"color: rgb(0, 60, 90); text-decoration: none; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding: 0px 3px; margin: 0px -3px; font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 20.53333282470703px; text-align: justify;\" target=\"_blank\">khả năng b&aacute;m d&iacute;nh</a><span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">&nbsp;n&agrave;y lại kh&ocirc;ng ảnh hưởng đến việc di chuyển của ch&uacute;ng. Vậy l&agrave;m sao&nbsp;</span><a class=\"Tinhte_XenTag_TagLink\" href=\"http://www.tinhte.vn/tags/b%E1%BB%8D+que/\" style=\"color: rgb(0, 60, 90); text-decoration: none; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding: 0px 3px; margin: 0px -3px; font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 20.53333282470703px; text-align: justify;\" target=\"_blank\">bọ que</a><span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">&nbsp;c&oacute; thể giải quyết cả 2 vấn đề n&agrave;y?</span><br />\r\n<br />\r\n<span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">Nghi&ecirc;n cứu mới nhất từ Cambridge đ&atilde; tiết lộ rằng sự kết hợp giữa c&aacute;c vật liệu cứng v&agrave; mềm tr&ecirc;n ch&acirc;n của bọ que đ&atilde; gi&uacute;p ch&uacute;ng khắc phục m&acirc;u thuẫn về chức năng của c&aacute;c ch&acirc;n. Với việc sử dụng hỗn hợp giữa c&aacute;c tấm đệm cứng để b&aacute;m h&uacute;t v&agrave; đệm l&ocirc;ng để tạo ra lực ma s&aacute;t thay v&igrave; d&iacute;nh thật sự v&agrave;o bề mặt, bọ que c&oacute; thể bất chấp trọng lực trong khi vẫn c&oacute; thể di chuyển tự do khi treo ngược th&acirc;n m&igrave;nh.</span><br />\r\n<br />\r\n<span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">David Labonte - l&atilde;nh đạo nh&oacute;m nghi&ecirc;n cứu đến từ khoa động vật học thuộc đại học Cambridge cho biết: &quot;Bọ que đ&atilde; ph&aacute;t triển một phương ph&aacute;p rất kh&eacute;o l&eacute;o để giải quyết vấn đề giữa khả năng b&aacute;m d&iacute;nh v&agrave; sự vận động với hệ thống&nbsp;</span><a class=\"Tinhte_XenTag_TagLink\" href=\"http://www.tinhte.vn/tags/%C4%91%E1%BB%87m+ch%C3%A2n/\" style=\"color: rgb(0, 60, 90); text-decoration: none; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding: 0px 3px; margin: 0px -3px; font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 20.53333282470703px; text-align: justify;\" target=\"_blank\">đệm ch&acirc;n</a><span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">&nbsp;k&eacute;p thay đổi lu&acirc;n phi&ecirc;n giữa 2 vai tr&ograve; d&iacute;nh v&agrave; b&aacute;m t&ugrave;y theo t&igrave;nh huống. Bằng c&aacute;ch sắp xếp v&agrave; h&igrave;nh th&aacute;i học, tự nhi&ecirc;n đ&atilde; dạy cho ch&uacute;ng t&ocirc;i rằng một thiết kế tốt c&oacute; nghĩa ch&uacute;ng t&ocirc;i c&oacute; thể kết hợp c&aacute;c t&iacute;nh chất của vật liệu cứng v&agrave; mềm, tạo ra c&aacute;c lực hợp th&agrave;nh như lực ma s&aacute;t để c&oacute; thể đi một qu&atilde;ng đường d&agrave;i m&agrave; kh&ocirc;ng cần d&ugrave;ng nhiều &aacute;p lực tương tự như bọ que.&quot;</span></p>\r\n\r\n<p><span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">Nghi&ecirc;n cứu đ&atilde; ph&aacute;t hiện ra bọ que c&oacute; 2 tấm đệm với vai tr&ograve; b&aacute;m d&iacute;nh kh&aacute;c nau ở cuối mỗi ch&acirc;n. Đệm b&aacute;m d&iacute;nh tại mũi ch&acirc;n mang lại lực h&uacute;t cần thiết để leo l&ecirc;n tường v&agrave; di chuyển tr&ecirc;n mặt dưới của c&aacute;c c&agrave;nh c&acirc;y. Trong khi đ&oacute;, đệm l&ocirc;ng ở g&oacute;t ch&acirc;n mang lại lực ma s&aacute;t cần thiết để b&aacute;m nhưng kh&ocirc;ng d&iacute;nh khi di chuyển tr&ecirc;n c&aacute;c mặt thẳng đứng. Độ ma s&aacute;t ph&ugrave; hợp c&oacute; thể được điều chỉnh nhờ c&aacute;ch sắp xếp v&agrave; h&igrave;nh dạng của c&aacute;c l&ocirc;ng si&ecirc;u nhỏ với độ d&agrave;i kh&aacute;c nhau.</span><br />\r\n<br />\r\n<span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">Bằng c&aacute;ch &aacute;p dụng &aacute;p lực nhiều hay &iacute;t l&ecirc;n bề mặt, bọ que c&oacute; thể tăng hoặc giảm ma s&aacute;t. Theo gi&aacute;o sư Labonte, điều n&agrave;y c&oacute; thể được thực hiện dựa tr&ecirc;n 3 yếu tố:</span></p>\r\n\r\n<ul>\r\n	<li>Đệm ch&acirc;n v&agrave; đầu c&aacute;c sợi l&ocirc;ng đều bo tr&ograve;n. Điều n&agrave;y c&oacute; nghĩa khi &aacute;p lực được đặt l&ecirc;n bề mặt, diện t&iacute;ch tiếp x&uacute;c được tạo ra nhiều hơn, giống như khi bạn đ&egrave; một tr&aacute;i b&oacute;ng cao su xuống s&agrave;n.</li>\r\n	<li>Một số sợi l&ocirc;ng ngắn hơn số c&ograve;n lại, do đ&oacute; khi c&oacute; nhiều &aacute;p lực, c&aacute;c sợi l&ocirc;ng ngắn sẽ được tiếp x&uacute;c với bề mặt.</li>\r\n	<li>Khi c&oacute; nhiều &aacute;p lực hơn được &aacute;p dụng l&ecirc;n bề mặt, một số sợi l&ocirc;ng cong lại v&agrave; tạo ra tiếp x&uacute;c b&ecirc;n, qua đ&oacute; tăng diện t&iacute;ch tiếp x&uacute;c m&agrave; kh&ocirc;ng cần nhiều lực bổ sung.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">C&aacute;c yếu tố thiết kế n&agrave;y tạo ra một lực ma s&aacute;t lớn với một &aacute;p lực tương đối nhỏ. Từ trường hợp của bọ que, c&aacute;c nh&agrave; khoa học hy vọng sẽ mở ra những cải tiến mới về vật liệu. Một v&iacute; dụ l&agrave; vật liệu d&ugrave;ng để chế tạo đế d&agrave;y thể thao. Họ cho rằng n&oacute; c&oacute; thể gi&uacute;p một vận động vi&ecirc;n điền kinh như Usain Bolt c&oacute; thể c&aacute;n đ&iacute;ch ở cự ly 100 m nhanh hơn so với kỷ lục m&agrave; anh đang nắm giữ.</span><br />\r\n<br />\r\n<span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">Gi&aacute;o sư Labonte giải th&iacute;ch: &quot;Nếu bạn chạy, bạn kh&ocirc;ng muốn b&agrave;n ch&acirc;n m&igrave;nh d&iacute;nh v&agrave;o mặt đường nhưng bạn cũng kh&ocirc;ng muốn ch&acirc;n bị trượt. Ch&uacute;ng t&ocirc;i nghi&ecirc;n cứu lo&agrave;i c&ocirc;n tr&ugrave;ng n&agrave;y để hiểu r&otilde; hơn về c&aacute;c hệ thống sinh học v&agrave; b&agrave;i học từ thi&ecirc;n nhi&ecirc;n như tr&ecirc;n sẽ rất hữu &iacute;ch để l&agrave;m &yacute; tưởng cho những phương ph&aacute;p tiếp cận mới nhằm tạo ra c&aacute;c thiết bị tốt hơn.&quot;</span><br />\r\n<br />\r\n<span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">Những nghi&ecirc;n cứu lấy&nbsp;</span><a class=\"Tinhte_XenTag_TagLink\" href=\"http://www.tinhte.vn/tags/%C3%BD+t%C6%B0%E1%BB%9Fng+t%E1%BB%AB+thi%C3%AAn+nhi%C3%AAn/\" style=\"color: rgb(0, 60, 90); text-decoration: none; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding: 0px 3px; margin: 0px -3px; font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 20.53333282470703px; text-align: justify;\" target=\"_blank\">&yacute; tưởng từ thi&ecirc;n nhi&ecirc;n</a><span style=\"color:rgb(20, 20, 20); font-family:helvetica,arial,sans-serif; font-size:15px\">&nbsp;đ&atilde; dẫn đến rất nhiều cải tiến trong c&aacute;c c&ocirc;ng nghệ hiện đại. Dưới đ&acirc;y l&agrave; một số c&ocirc;ng nghệ m&agrave; bạn c&oacute; thể quan t&acirc;m</span></p>\r\n\r\n<p>&nbsp;</p>\r\n'),(5,'0','','2001-03-14 00:00:00',1,'0',1,'0','0','0');

/*Table structure for table `tbl_post_cate` */

DROP TABLE IF EXISTS `tbl_post_cate`;

CREATE TABLE `tbl_post_cate` (
  `post_cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_cate_name` varchar(500) DEFAULT NULL,
  `alias` varchar(500) DEFAULT NULL,
  `description` text,
  `parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_post_cate` */

/*Table structure for table `tbl_role_permission` */

DROP TABLE IF EXISTS `tbl_role_permission`;

CREATE TABLE `tbl_role_permission` (
  `role_id` int(11) NOT NULL,
  `permission_id` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `tbl_role_permission` */

/*Table structure for table `tbl_roles` */

DROP TABLE IF EXISTS `tbl_roles`;

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `role_description` text COLLATE utf8_bin,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Nhóm quyền	';

/*Data for the table `tbl_roles` */

insert  into `tbl_roles`(`role_id`,`role_name`,`role_description`) values (1,'Super Admin','Người có quyền hạn cao nhất'),(2,'Super Mod','Đệ của Super Admin'),(10,'Suport Mod','Đệ ghẹ'),(38,'Super Ass','Admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
