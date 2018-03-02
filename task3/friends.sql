-- Таблица заявок. 
CREATE TABLE `friends_claim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `status` ENUM('new', 'accepted', 'declined'),
  PRIMARY KEY (`id`),
  UNIQUE (`client_id`,`friend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1;

-- Друзья
CREATE TABLE `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE (`client_id`, `friend_id`),
  KEY `idx_cli` (`client_id`),
  KEY `idx_fri` (`friend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1;

-- Добавление заявки
INSERT INTO friends_claim VALUES (cid, fid, 'new');

-- Отклонение заявки
UPDATE friends_claim SET STATUS='declined' WHERE client_id=cid AND friend_id=fid;

-- Принятие заявки
UPDATE friends_claim SET STATUS='accepted' WHERE (client_id=cid AND friend_id=fid) OR (client_id=fid AND friend_id=cid);
INSERT INTO friend (client_id, friend_id) VALUES (MIN(cid, fid), MAX(cid, fid));



-- Друзья друзей
SELECT DISTINCT 
	f.friend_id 
FROM 
	friend f 
	JOIN friend ff 
		ON (f.client_id = 377 AND f.client_id = ff.friend_id);
