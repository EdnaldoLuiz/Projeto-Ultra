<?php

$query = $PDO->prepare("SELECT * FROM tb_categorias");
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$smarty->assign("categoriaCat", $res);
$smarty->display("menu.html")
?>