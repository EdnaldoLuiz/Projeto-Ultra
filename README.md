<h1 align="center">Teki</h1>

<div align="center">
  <img src="https://img.shields.io/badge/license-MIT-green">
</div>

<h2>:computer: Visao geral do Projeto:</h2>

<table>
    <thead>
        <tr>
            <th align="center">
                <img width="20" height="1"> 
                <p align="center"><small>Nome</small></p>
            </th>
            <th align="center">
                <img width="300" height="1"> 
                <p align="center"><small>Descrição</small></p>
            </th>
            <th align="left">
                <img width="140" height="1">
                <p align="center"><small>Imagem</small></p>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="center">:key: Login page</td>
            <td>Pagina de cadastro e login dos usuários registrados.</td>
            <td align="center">
                <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/1764a9f3-91aa-43f3-a0ae-b1a53ce52cea">
	        </td>
        </tr>
        <tr>
            <td align="center"> Header </td>
            <td>Header com as opçoes de barra de pesquisa, login e sistema de carrinho.</td>
            <td align="center">
           	    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/d2d52dca-10cf-4059-94c8-7d37cf04d0fa">
	        </td>
        </tr>
	    <tr>
            <td align="center">Seção de Notebooks </td>
            <td>Trás com limite de 4, os notebooks com a melhor avaliação do banco de dados.</td>
            <td align="center">
           	    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/b082db02-8c84-4f26-89d1-daa56290a734">
	        </td>
        </tr>
	    <tr>
            <td align="center">Seção de Smartphones </td>
            <td>Trás com limite de 4, os smartphones com a melhor avaliação do banco de dados.</td>
            <td align="center">
           	    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/6e5e6151-a7a6-4e66-b2ad-436ab8d479fe">
	        </td>
        </tr>
        <tr>
            <td align="center">Seção de Computadores </td>
            <td>Trás com limite de 4, os monitores com a melhor avaliação do banco de dados.</td>
            <td align="center">
           	    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/50b449a2-5924-4259-8cbe-c426efe6cd4d">
	        </td>
        </tr>
        <tr>
            <td align="center">Footer </td>
            <td>Footer com as informações legais e links para redes sociais.</td>
            <td align="center">
           	    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/f3fd4758-893b-47ee-ae1c-95da38aacfc7">
	        </td>
        </tr>
    </tbody>
</table>

<h2>:dolphin: Scripts MySQL:</h2>

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

<h2>🔗 Conexão com o banco de dados:</h2>

### :page_facing_up: conexao.php
- Arquivo de conectar ao banco de dados usando padrões do curso com PDO
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

<h3>🔧 Tech Stack utilizada:</h3>

<div align="center">
    <img width="100%" src="https://github.com/EdnaldoLuiz/Teki/assets/112354693/0a9c3e81-030e-4343-9add-df3401ffec8c">
</div>



