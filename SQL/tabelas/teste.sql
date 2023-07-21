-- Active: 1682613155945@@127.0.0.1@3306@DB_tomdosom
SELECT
    p.idpro,
    p.idcat,
    p.descricaopro,
    p.precopro,
    c.categoria
FROM tb_produtos p
    JOIN tb_categorias c ON p.idcat = c.idcat
ORDER BY p.idpro DESC;