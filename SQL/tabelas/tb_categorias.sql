-- Active: 1682613155945@@127.0.0.1@3306@DB_tomdosom
-- idcat int, categoria varchar, linkcateg VARCHAR

CREATE TABLE
    tb_categorias (
        idcat int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
        categoria VARCHAR(255),
        linkcateg VARCHAR(255), 
        create_time DATETIME COMMENT 'Create Time',
        name VARCHAR(255)
    ) COMMENT '';