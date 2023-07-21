<?php
  include("admin/conexao.php");
  include("configs/config.ini.php");

  //VARIAVEIS
  @$textoBotao = "Cadastrar";
  @$smarty->assign("textoBotao", $textoBotao);
  @$acao = $_REQUEST["acao"];
  @$idpro = $_REQUEST["idpro"];
  @$idcat = $_REQUEST["idcat"];
  @$descricaopro = $_POST["descricaopro"];
  @$precopro = $_POST["precopro"];
  @$foto = $_FILES["fotopro"]["tmp_name"];

  //LISTA CATEGORIAS
  $queryCat = $PDO->prepare("SELECT * FROM tb_categorias ORDER BY idcat DESC")
  OR DIE
  ("Erro ao Consultar Categorias");
  $queryCat->execute();
  $respQueryCat = $queryCat->fetchAll(PDO::FETCH_ASSOC);
  $smarty->assign("minhasCategorias", $respQueryCat);

  //CADASTRAR PRODUTOS
  if($acao == "Cadastrar") {
    $queryCat = "INSERT INTO tb_produtos (idcat, descricaopro, precopro) VALUES (?, ?, ?)";
    $PDO->prepare($queryCat)->execute([$idcat, $descricaopro, $precopro]);
    $queryId = "SELECT MAX(idpro) FROM tb_produtos";
    $ultimoId = $PDO->query($queryId)->fetchColumn();
    $destino = "produtos/";
    $ext = ".jpg";

    move_uploaded_file($foto, $destino.$ultimoId.$ext);
    echo("<script>
    alert('Produto Cadastrado');
    document.location='cad-produtos.php';
    </script>");
  }
?>