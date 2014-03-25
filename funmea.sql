/*
SQLyog Ultimate v11.28 (64 bit)
MySQL - 5.6.14 : Database - funmea
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`funmea` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `funmea`;

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

insert  into `tbl_admin`(`admin_id`,`account`,`password`,`email`,`phone`,`full_name`,`role_id`) values (1,'admin','96e79218965eb72c92a549dd5a330112','viet.lt1190@gmail.com','0968032586','Lại Tiến Việt',0),(4,'hadesvn','96e79218965eb72c92a549dd5a330112','developer.ltv@gmail.com','0989202368','Dương Quốc Anh',0),(5,'hungdp','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,0);

/*Table structure for table `tbl_category_news` */

DROP TABLE IF EXISTS `tbl_category_news`;

CREATE TABLE `tbl_category_news` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_description` text COLLATE utf8_unicode_ci,
  `cate_content` text COLLATE utf8_unicode_ci,
  `cate_metatitle` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seo',
  `cate_metadescription` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seo',
  `cate_metakeyword` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seo',
  `create_by` int(11) DEFAULT NULL COMMENT 'Người tạo',
  `create_date` datetime DEFAULT NULL COMMENT 'Ngày tạo',
  `update_by` int(11) DEFAULT NULL COMMENT 'Người chỉnh sửa',
  `update_date` datetime DEFAULT NULL COMMENT 'Thời gian chỉnh sửa',
  `cate_status` int(11) DEFAULT NULL,
  `cate_images` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_slug` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_category_news` */

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

/*Table structure for table `tbl_images` */

DROP TABLE IF EXISTS `tbl_images`;

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link_images` varchar(765) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(765) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `type` int(11) DEFAULT '1',
  `post_approve` int(11) DEFAULT NULL,
  `images_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_images` */

/*Table structure for table `tbl_news` */

DROP TABLE IF EXISTS `tbl_news`;

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_description` text COLLATE utf8_unicode_ci,
  `news_content` text COLLATE utf8_unicode_ci,
  `news_metatitle` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seo',
  `news_metadescription` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seo',
  `news_metakeyword` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seo',
  `create_by` int(11) DEFAULT NULL COMMENT 'Người tạo',
  `create_date` datetime DEFAULT NULL COMMENT 'Ngày tạo',
  `update_by` int(11) DEFAULT NULL COMMENT 'Người chỉnh sửa',
  `update_date` datetime DEFAULT NULL COMMENT 'Thời gian chỉnh sửa',
  `news_cateid` int(11) DEFAULT NULL COMMENT '1 : Video , 2 : Ảnh',
  `news_status` int(11) DEFAULT NULL,
  `news_images` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_source` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_slug` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_news` */

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
  `post_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_description` text COLLATE utf8_unicode_ci,
  `post_content` text COLLATE utf8_unicode_ci,
  `post_metatitle` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seo',
  `post_metadescription` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seo',
  `post_metakeyword` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seo',
  `create_by` int(11) DEFAULT NULL COMMENT 'Người tạo',
  `create_date` datetime DEFAULT NULL COMMENT 'Ngày tạo',
  `update_by` int(11) DEFAULT NULL COMMENT 'Người chỉnh sửa',
  `update_date` datetime DEFAULT NULL COMMENT 'Thời gian chỉnh sửa',
  `post_type` int(11) DEFAULT NULL COMMENT '1 : Video , 2 : Ảnh',
  `post_status` int(11) DEFAULT NULL,
  `post_approve` int(11) DEFAULT NULL COMMENT 'Người duyệt',
  `approve_date` datetime DEFAULT NULL COMMENT 'Ngày duyệt',
  `video_id` int(11) DEFAULT NULL COMMENT 'ID Video',
  `images_id` int(11) DEFAULT NULL COMMENT 'ID ảnh',
  `count_view` int(11) DEFAULT NULL,
  `count_comment` int(11) DEFAULT NULL,
  `post_rate` float DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_post` */

/*Table structure for table `tbl_rate` */

DROP TABLE IF EXISTS `tbl_rate`;

CREATE TABLE `tbl_rate` (
  `thread_id` int(11) NOT NULL,
  `thumb_up` int(11) NOT NULL,
  `thumb_down` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_rate` */

/*Table structure for table `tbl_rate_log` */

DROP TABLE IF EXISTS `tbl_rate_log`;

CREATE TABLE `tbl_rate_log` (
  `thread_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_rate_log` */

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

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`name`,`alias`,`email`,`fullname`) values (1,'hungdp','paintee','mr.dp.hung@gmail.com','Đặng Phi Hùng');

/*Table structure for table `tbl_videos` */

DROP TABLE IF EXISTS `tbl_videos`;

CREATE TABLE `tbl_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link_video` varchar(765) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(765) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `type` int(11) DEFAULT '1' COMMENT 'Hiện tại default 1 là youtube',
  `post_approve` int(11) DEFAULT NULL,
  `video_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_videos` */

/*Table structure for table `tbl_views` */

DROP TABLE IF EXISTS `tbl_views`;

CREATE TABLE `tbl_views` (
  `thread_id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_views` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
