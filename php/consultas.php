<?php
include 'conexao.php';

try {
  $sql = "SELECT * FROM railway.produtos WHERE categoria = 'notebooks' limit 4";
  $statement = $PDO->prepare($sql);
  $statement->execute();
  $notebooks = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo ("Erro na consulta: " . $e->getMessage());
}

try {
  $sql = "SELECT * FROM railway.produtos WHERE categoria = 'smartphones' limit 4";
  $statement = $PDO->prepare($sql);
  $statement->execute();
  $smartphones = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo ("Erro na consulta: " . $e->getMessage());
}

try {
  $sql = "SELECT * FROM railway.produtos WHERE categoria = 'computadores' limit 4";
  $statement = $PDO->prepare($sql);
  $statement->execute();
  $computers = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo ("Erro na consulta: " . $e->getMessage());
}


?>