	--
	-- Database: `livestock`
	--
	drop database if exists livestock;
	create database livestock default character set utf8;

	use livestock;

	CREATE TABLE user (
		id INT AUTO_INCREMENT,
		fullname VARCHAR(50) NOT NULL,
		username VARCHAR(20) UNIQUE NOT NULL,
		password VARCHAR(100) NOT NULL,
		email VARCHAR(50) NOT NULL,
		no_hp VARCHAR(13) NOT NULL,
		flag_aktif TINYINT(1) NOT NULL,
		PRIMARY KEY (id)
	);

	INSERT INTO user(fullname, username, password, email, no_hp, flag_aktif) VALUES ('admin ganteng', 'admin', '$2y$10$GFS7LtmLxEH0IY55WIt5x.ooBOAQfPDjG4BxWd.p0gfK6X1vhgrLe', 'adminganteng@admin.com', '085858585858', 1);