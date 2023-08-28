-- Active: 1692314701072@@127.0.0.1@3306@Teki

ALTER TABLE produtos
ADD
    COLUMN categoria ENUM(
        'notebooks',
        'smartphones',
        'outros',
        'categoria4'
    ) NOT NULL;

ALTER TABLE
    produtos MODIFY COLUMN categoria ENUM(
        'notebooks',
        'smartphones',
        'computadores',
        'outros'
    ) NOT NULL;

RENAME TABLE notebooks TO produtos;

ALTER TABLE notebooks
ADD COLUMN categoria
ALTER TABLE
    notebooks DROP COLUMN rating,
    DROP COLUMN reviews;

DELETE FROM produtos WHERE categoria = 'outros';