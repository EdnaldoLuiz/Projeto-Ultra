<?php

include("admin/conexao.php");
include("configs/config.ini.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <script src="js/efeitos.js"></script>
    <script src="js/jquery.js"></script>

    <title>Projeto</title>
</head>
<body>

    <section id="container">
        <header id="header">
            <div id="area_header">
                <figure id="logo">
                    <img style="width: 100px" src="imgs/logo.webp" alt="logo ilustrativa">
                </figure>

                <nav id="nav">
                    <?php
                        include("menu.php");
                    ?>
                </nav>

            </div>
        </header>

        <section id="conteudo_produtos">]

            <div>
                <?php
                    idpro=$_REQUEST["idpro"];
                    $queryPro = $PDO->prepare("SELECT c.idcat, c.categoria, p.idpro, p.descricaopro, p.precopro WHERE c.idcat=p.idcat AND p.idpro='$idpro'") OR DIE ("Erro na query");

                    $queryPro->execute();
                    $resPro = $queryPro->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach($resPro as $p) {
                      echo("<div style='width:1000px; height:500px; margin:10px auto;'>");
                      echo("<img src='admin/produtos/$p[idpro].jpg' width='150px'/>");
                      echo("<p class='formatatexto'>$p[descricaopro]</p>");
                      echo("<p class='formatamoeda'>R$ $p[precopro]</p>");
                      echo("<p class='formatatexto'>
                      Quantidade:
                      <input type='number' value='1' min='1' max='5' name='quant'/></p>");
                      echo("<p><input type='submit' value='adicionar' class='formataAdd' name='acao'/></p>");
                      echo("</div>")
                    }
                ?>
            </div>

        </section>

    </section>
    
</body>
</html>