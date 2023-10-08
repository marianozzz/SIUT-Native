CREATE TABLE users
(
id int AUTO_INCREMENT not null,
name varchar(255) not null,
email varchar(100) not null,
email_verified_at	timestamp,
password varchar(255) not null,
remember_token varchar(255) not null,
created_at timestamp default current_timestamp,
updated_at timestamp default current_timestamp,
PRIMARY KEY (id)
)ENGINE=INNODB;