<?php
$host = "127.0.0.1";
$user = "root";
$password = "06022003";
$database = "Teki";

try {
  $PDO = new PDO("mysql:host=$host;dbname=$database", $user, $password);
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo ("Erro na conexão: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $imagem = $_FILES['imagem']['tmp_name'];
  $nome = $_POST['nome'];
  $preco_original = $_POST['preco_original'];
  $preco_promocional = $_POST['preco_promocional'];

  $sql = "INSERT INTO notebooks (imagem, nome, preco_original, preco_promocional)
            VALUES (:imagem, :nome, :preco_original, :preco_promocional)";

  $stmt = $PDO->prepare($sql);

  $imagemConteudo = file_get_contents($imagem);

  $stmt->bindParam(':imagem', $imagemConteudo, PDO::PARAM_LOB);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':preco_original', $preco_original);
  $stmt->bindParam(':preco_promocional', $preco_promocional);

  if ($stmt->execute()) {
    echo "Produto inserido com sucesso!";
  } else {
    echo "Erro ao inserir o produto.";
  }
}

?>