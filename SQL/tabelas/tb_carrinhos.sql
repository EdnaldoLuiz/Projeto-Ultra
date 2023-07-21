-- idcarrinho int, idpro int, quant int, preco float, total float, cliente varchar

CREATE TABLE
    tb_carrinhos (
        idcarrinho int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
        idpro int,
        quant int,
        preco float,
        total float,
        cliente VARCHAR(254),
        create_time DATETIME COMMENT 'Create Time',
        name VARCHAR(255)
    ) COMMENT '';