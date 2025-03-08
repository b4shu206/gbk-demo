CREATE DATABASE IF NOT EXISTS vulnerable_db;
USE vulnerable_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    age INT,
    flag VARCHAR(255)
);

INSERT INTO users (username, age) VALUES ('admin', 25);
INSERT INTO users (username, age) VALUES ('john', 25);
INSERT INTO users (username, age) VALUES ('alice', 22);
INSERT INTO users (username, age) VALUES ('行政', 12);
INSERT INTO users (username, age) VALUES ('test', 100);
INSERT INTO users (username, age, flag) VALUES ('flag', 100, 'FLAG{test}');
