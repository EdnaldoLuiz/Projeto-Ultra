<?php
$termoPesquisa = $_GET['termo']; // Obtém o termo de pesquisa do parâmetro GET

$host = "127.0.0.1";
$user = "root";
$password = "06022003";
$database = "Teki";

try {
  $PDO = new PDO("mysql:host=$host;dbname=$database", $user, $password);
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Prepare a consulta com um placeholder
  $consulta = $PDO->prepare("SELECT * FROM produtos WHERE nome LIKE :termo");

  // Executa a consulta com o valor do termo de pesquisa
  $consulta->execute(array(':termo' => '%' . $termoPesquisa . '%'));

  // Exiba os resultados apenas se houver algum resultado compatível
  if ($consulta->rowCount() > 0) {
    while ($produto = $consulta->fetch(PDO::FETCH_ASSOC)) {
      echo '<div class="resultado">';
      echo '<h3>' . $produto['nome'] . '</h3>';
      echo '<p>Preço: R$ ' . $produto['preco_promocional'] . '</p>';
      echo '</div>';
    }
  } else {
    echo '<p>Nenhum produto encontrado.</p>';
  }
} catch (PDOException $e) {
  echo "Erro na conexão: " . $e->getMessage();
}
?>