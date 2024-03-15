CREATE DATABASE dbDemo;
Use dbDemo;
CREATE TABLE users (
    IdUser BIGINT PRIMARY KEY AUTO_INCREMENT,
    Email CHAR(64),
    Password CHAR(64),
    Name CHAR(64),
    Reset BIT,
    Confirm BIT,
    Token CHAR(64)
);
INSERT INTO users (Email, Password, Name, Reset, Confirm, Token)
VALUES
    ('usuario1@example.com', 'contraseña1', 'pepe', 0, 1, 'token1'),
    ('usuario2@example.com', 'contraseña2', 'pepo', 1, 0, 'token2'),
    ('usuario3@example.com', 'contraseña3', 'tito', 0, 0, 'token3'),
    ('usuario4@example.com', 'contraseña4', 'toti', 1, 1, 'token4'),
    ('usuario5@example.com', 'contraseña5', 'beto', 0, 1, 'token5')

DROP TABLE IF EXISTS Users;

SELECT * FROM users;

select count(*) as aggregate from users where Email = "usuario1@example.com" and IdUser <> 1