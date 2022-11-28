CREATE DATABASE db_confianca;


CREATE TABLE tb_clients (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone INT NOT NULL,
    PRIMARY KEY (id),
    
);