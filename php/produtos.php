<?php
  $queryPro = $PDO->prepare(
    "SELECT c.idcat, c.categoria, p.idpro, p.descricao, p.descricaopro, p.precopro
    FROM  tb_categorias c, tb_produtos p WHERE c.idcat=p.idcat");

$queryPro->execute();
$resPro=$queryPro->fetchAll(PDO::FETCH_ASSOC);
$smarty->assign("meusProdutos", $resPro);
$smarty->display("produtos.html");
?>