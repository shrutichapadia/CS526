DROP DATABASE IF EXISTS book_db1;

CREATE DATABASE book_db1;

USE book_db1;
 

CREATE TABLE publishers (
  publisherID       INT(11)        NOT NULL   AUTO_INCREMENT,
  publisherName     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (publisherID)
);


CREATE TABLE books (
  bookID           INT(11)        NOT NULL   AUTO_INCREMENT,
  publisherID      INT(11)        NOT NULL,
  isbn             VARCHAR(20)    NOT NULL   UNIQUE,
  bookTile         VARCHAR(255)   NOT NULL,
  bookPrice        DECIMAL(10,2)  NOT NULL,
  PRIMARY KEY (bookID)
);


INSERT INTO publishers VALUES
(1, 'Apress'),
(2, 'Microsoft Press'),
(3, 'Sams Publishing');


INSERT INTO books VALUES
(1, 1, '1010101010', 'Programming in Java', '69.00'),
(2, 2, '1010101011', 'Programming in C#', '59.00'),
(3, 3, '1010101102', 'Web Progamming with PHP', '25.17'),
(5, 1, '1010101103', 'Cisco Networking', '79.99'),
(6, 2, '1010101104', 'Configuring Home Network', '49.99'),
(7, 3, '1010101105', 'MySQL Database', '29.99'),
(8, 1, '1010101106', 'MS SQL Server', '59.99');


GRANT SELECT, INSERT, DELETE, UPDATE
ON book_db1.*
TO admin@localhost
IDENTIFIED BY 'pass@word';


GRANT SELECT
ON books
TO peter@localhost
IDENTIFIED BY 'pass@word';
