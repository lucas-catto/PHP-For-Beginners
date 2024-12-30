
DROP DATABASE IF EXISTS notes_db; -- IF EXISTS 
CREATE DATABASE IF NOT EXISTS notes_db; -- IF NOT EXISTS
USE notes_db;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE notes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    body TEXT NOT NULL,

    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- DML

INSERT INTO users (name, email) VALUES
('Jeffry Way', 'jeffry@laracasts.com'),
('Kate', 'kate@example.com');

INSERT INTO notes (body, user_id) VALUES
('PHP For Beginners is the best!', 1),
('Hi there!', 1),
('Design Techniques', 2),
('Ideas', 2);

SELECT * FROM users;
SELECT * FROM notes;
DELETE FROM users WHERE id = 1;
SELECT * FROM users;
SELECT * FROM notes;