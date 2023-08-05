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
function exibirEconomia($precoNormal, $precoPromocional)
{
  $economia = $precoNormal - $precoPromocional;
  if ($economia > 0) {
    return '<div class="economia-box">ECONOMIA DE R$ ' . number_format($economia, 2) . '</div>';
  }
  return '';
}
?>