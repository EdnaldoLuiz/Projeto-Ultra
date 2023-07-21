-- idcat int, idpro int, descricaopro varchar, precopro float
CREATE TABLE
    tb_produtos (
        idcat int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
        idpro int,
        descricaopro VARCHAR(255),
        precopro float,
        create_time DATETIME COMMENT 'Create Time',
        name VARCHAR(255)
    ) COMMENT '';