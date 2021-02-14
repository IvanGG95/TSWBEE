create database mvcbee;
use mvcbee;
create table users (
		username varchar(255),
		passwd varchar(255),
		name varchar(255),
		email varchar(255),
		phone int(12),
		primary key (username)
) ENGINE=INNODB DEFAULT CHARACTER SET = utf8;

grant all privileges on mvcbee.* to mvcbeeuser@localhost identified by "mvcbeepass";