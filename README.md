<h1 align="center">Teki</h1>

<h2>Visao geral do Projeto:</h2>

<h3>Login page:</h3>

<div align="center">
    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/1764a9f3-91aa-43f3-a0ae-b1a53ce52cea">
</div>

<h3>Header:</h3>

<div align="center">
    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/d2d52dca-10cf-4059-94c8-7d37cf04d0fa">
</div>

<h3>Seção de Notebooks:</h3>

<div align="center">
    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/b082db02-8c84-4f26-89d1-daa56290a734">
</div>

<h3>Seção de Smartphones:</h3>

<div align="center">
    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/6e5e6151-a7a6-4e66-b2ad-436ab8d479fe">
</div>

<h3>Seção de Computadores:</h3>

<div align="center">
    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/50b449a2-5924-4259-8cbe-c426efe6cd4d">
</div>

<h3>Footer:</h3>

<div align="center">
    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/f3fd4758-893b-47ee-ae1c-95da38aacfc7">
</div>

<h2>Scripts MySQL:</h2>

### Tabela de Produtos
```sql
CREATE TABLE produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  imagem BLOB NOT NULL,
  nome VARCHAR(255) NOT NULL,
  preco_original DECIMAL(10, 2) NOT NULL,
  preco_promocional DECIMAL(10, 2) NOT NULL,
  categoria ENUM(
    'notebooks',
    'smartphones',
    'computadores',
    'outros') NOT NULL
);
```

### Tabela de Usuarios
```sql
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  senha VARCHAR(255) NOT NULL
);
```

<h2>Conexão com o banco de dados:</h2>

### conexao.php

```php
<?php
$host = "127.0.0.1";
$user = "root";
$password = "sua_senha";
$database = "seu_banco";

try {
    $PDO = new PDO("mysql:host=$host;database=$database", $user, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo ("erro " . $e->getMessage());
}
?>
```

<h3>Tech Stack utilizada:</h3>

<div align="center">
    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/0a9c3e81-030e-4343-9add-df3401ffec8c">
</div>



