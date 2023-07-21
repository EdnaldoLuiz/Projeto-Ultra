<?php
	include("inc/conexao.php");
	include("configs/config.ini.php");
	@$textoBotao="Cadastrar";
	@$smarty->assign("textoBotao",$textoBotao);
	@$acao=$_REQUEST["acao"];
	@$categoria=$_POST["categoria"];
	@$linkcateg=$_POST["linkcateg"];
	// AÇÃO CADASTRAR CATEGORIA
	if($acao=="Cadastrar"){
		$queryCat = "INSERT INTO tb_categorias (categoria, linkcateg) VALUES (?,?)";
		$PDO->prepare($queryCat)->execute([$categoria, $linkcateg]);
		echo "<script>alert('Categoria Cadastrada');document.location='cad-categorias.php';</script>;";
	}
	//	AÇÃO LISTAR CATEGORIAS
	$queryGeral = $PDO->prepare("SELECT * FROM tb_categorias") or die("Erro ao Consultar Categorias");
	$queryGeral->execute();
	$respQueryGeral=$queryGeral->fetchAll(PDO::FETCH_ASSOC);
	$smarty->assign("minhasCategorias",$respQueryGeral);

	$smarty->display("cad-categorias.html");
	
	// EDITAR DADOS
	$idcat=@$_REQUEST["idcat"];
	$smarty->assign("idcat","");
	$smarty->assign("categoria","");
	$smarty->assign("linkcateg","");

	if($acao=="editar"){
		@$queryEditar = $PDO->prepare("SELECT * FROM tb_categorias WHERE idcat='$idcat'") OR DIE("Erro ao Consultar Categoria Selecionada");
		@$queryEditar->execute();
		@$respQueryEditar=$queryEditar->fetch(PDO::FETCH_OBJ);
		@$categoria=$respQueryEditar->categoria;
		@$linkcateg=$respQueryEditar->linkcateg;
		@$smarty->assign("idcat",$idcat);
		@$smarty->assign("categoria",$categoria);
		@$smarty->assign("linkcateg",$linkcateg);		
		@$smarty->assign('textoBotao','Atualizar');				
	}
	//ATUALIZAR DADOS
	if($acao=="Atualizar") {
		$queryUpdate = $con->prepare(
			"UPDATE tb_categorias SET categoria = ?, linkcateg = ? WHERE idcat = ?"
		);
		
		$queryUpdate->bindParam(1, $categoria);
		$queryUpdate->bindParam(2, $linkcateg);
		$queryUpdate->bindParam(3, $idcat);
		$queryUpdate->execute();

		echo("<script>
		alert('Dados Alterados');
		document.location.href='cad-categorias.php';
		</script>");
	}

	//EXCLUIR DADOS
	if($acao=="excluir") {
		$queryExcluir = $PDO->prepare("DELETE FROM tb_categorias WHERE idcat='$idcat'") OR DIE ("Erro query delete");
		$queryExcluir->execute();

		echo("<script>
		alert('Categoria excluida');
		document.location.href='cad-categorias.php';
		</script>");
	}
	//EXCLUIR DADOS
	if($acao=="Novo") {
		echo("<script>
		document.location.href='cad-categorias.php';
		</script>");
	}

	$smarty->display("cad-categorias.html");

	// LISTA PRODUTOS

	$queryPro = $PDO->prepare("SELECT p.idpro, p.idcat, p.descricaopro, p.precopro, c.categoria FROM tb_produtos p JOIN tb_categorias c ON p.idcat = c.idcat ORDER BY p.idpro DESC") OR DIE ("Erro na Query Produto");

	$queryPro->execute();
	$respQueryPro = $queryPro->fetchAll(PDO::FETCH_ASSOC);
	$smarty->assign("meusProdutos", $respQueryPro);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


	$smarty->display("cad-categorias.html");
