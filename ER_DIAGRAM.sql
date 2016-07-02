CREATE TABLE articles (
 id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
 name VARCHAR(200),
 content TEXT,
 created_at DATETIME,
 updated_at DATETIME,
 PRIMARY KEY (`id`)
);

CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article_id` (`article_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`)
) 
