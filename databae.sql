CREATE DATABASE to_do_list;

USE to_do_list;

CREATE TABLE task(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  T_name VARCHAR(255),
  Due_date DATE,
  Priority INT
);    