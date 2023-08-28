<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $query = "SELECT * FROM Teki.usuarios WHERE email = '$email' AND senha = '$senha'";
  $resultado = $PDO->query($query);

  if ($resultado->rowCount() > 0) {
    $row = $resultado->fetch(PDO::FETCH_ASSOC);
    $_SESSION['user_name'] = $row['nome'];
    header("Location: /index.php");
    exit();
  } else {
    echo "Credenciais inválidas. Por favor, tente novamente.";
  }
}
?>