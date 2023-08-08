-- Active: 1689801237547@@127.0.0.1@3306@Teki

CREATE TABLE
    notebooks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        imagem BLOB NOT NULL,
        nome VARCHAR(255) NOT NULL,
        rating DECIMAL(3, 2) NOT NULL,
        reviews INT NOT NULL,
        preco_original DECIMAL(10, 2) NOT NULL,
        preco_promocional DECIMAL(10, 2) NOT NULL
    );