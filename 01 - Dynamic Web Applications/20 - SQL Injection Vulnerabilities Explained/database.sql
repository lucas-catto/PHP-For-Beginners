
DROP DATABASE IF EXISTS myapp;
CREATE DATABASE IF NOT EXISTS myapp;
USE myapp;


CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    admin TINYINT(2) NOT NULL DEFAULT 0
);

INSERT INTO users (username, admin) VALUES
('JeffryWay', 1),
('JohnDoe', 0),
('JaneDoe', 1);

CREATE TABLE posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL
);

INSERT INTO posts (title) VALUES
('My first post'),
('My second post'),
('My third post');

SELECT * FROM posts;
SELECT id FROM posts;
SELECT title FROM posts;
SELECT id, title FROM posts;
SELECT * FROM posts WHERE id = 1;
SELECT * FROM posts WHERE id = 1 OR id = 2;
SELECT * FROM users;
SELECT * FROM users WHERE id = 2;
SELECT * FROM users WHERE id = 2 OR admin = 1;
-- DROP TABLE users;
