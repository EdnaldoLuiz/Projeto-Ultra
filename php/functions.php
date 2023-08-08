<?php
function exibirEstrelas($notaProduto)
{
  $numEstrelasCheias = floor($notaProduto);
  $parteFracionaria = $notaProduto - $numEstrelasCheias;
  $numEstrelasTotal = 5;
  $estrelasHTML = '';
  for ($i = 1; $i <= $numEstrelasTotal; $i++) {
    if ($i <= $numEstrelasCheias) {
      $estrelasHTML .= '<i class="fa-solid fa-star"></i>'; // Estrela cheia
    } elseif ($i == $numEstrelasCheias + 1 && $parteFracionaria > 0) {
      $estrelasHTML .= '<i class="fa-regular fa-star-half-stroke"></i>'; // Estrela meio preenchida
    } else {
      $estrelasHTML .= '<i class="fa-regular fa-star"></i>'; // Estrela vazia
    }
  }
  return $estrelasHTML;
}
for ($card = 1; $card <= 4; $card++) {
  $numeroAvaliacoes = rand(100, 999);
}
?>