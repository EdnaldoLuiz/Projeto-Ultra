<?php
include 'conexao.php';

try {
  $sql = "SELECT * FROM Teki.produtos WHERE categoria = 'notebooks'";
  $statement = $PDO->prepare($sql);
  $statement->execute();
  $notebooks = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo ("Erro na consulta: " . $e->getMessage());
}

try {
  $sql = "SELECT * FROM Teki.produtos WHERE categoria = 'smartphones'";
  $statement = $PDO->prepare($sql);
  $statement->execute();
  $smartphones = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo ("Erro na consulta: " . $e->getMessage());
}

try {
  $sql = "SELECT * FROM Teki.produtos WHERE categoria = 'computadores'";
  $statement = $PDO->prepare($sql);
  $statement->execute();
  $computers = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo ("Erro na consulta: " . $e->getMessage());
}


?>