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
                    include("produtos.php");
                ?>
            </div>

        </section>

    </section>
    
</body>
</html>