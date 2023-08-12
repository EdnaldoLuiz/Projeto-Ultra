-- Active: 1691845872995@@containers-us-west-58.railway.app@7418@railway

CREATE TABLE
    produtos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        imagem BLOB NOT NULL,
        nome VARCHAR(255) NOT NULL,
        preco_original DECIMAL(10, 2) NOT NULL,
        preco_promocional DECIMAL(10, 2) NOT NULL,
        categoria ENUM(
            'notebooks',
            'smartphones',
            'computadores',
            'outros'
        ) NOT NULL
    );