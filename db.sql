-- ---------------------------------
-- User table
-- ---------------------------------
DROP table IF EXISTS tbl_user;
CREATE table tbl_user(
id SERIAL,
username varchar(100) DEFAULT NULL,
password varchar(150) NOT NULL,
email varchar(150) DEFAULT NULL,
state_id TINYINT(1),
type_id TINYINT(1),
created_on timestamp DEFAULT current_timestamp,
updated_on  TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
created_by_id int(11)
)ENGINE=INNODB DEFAULT CHARSET=utf8;