
DROP DATABASE IF EXISTS myapp;
CREATE DATABASE IF NOT EXISTS myapp;
USE myapp;

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
