<?php
include 'bd/conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap');
    </style>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/main.js"></script>
    <title>Agenda</title>
    
</head>
<body>
    <header class="bg-primary">
    <div class="container">
        <nav class="navbar navbar-expand-md bg-primary navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="https://www.jnmoura.com.br/pt-br/" target="_blank"><img src="img/jnmoura2.png" style="height:4rem;margin: 0px;padding:0px;"></a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.php?menuop=home">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?menuop=contatos">CONTATOS</a>
            </li>
            </ul>
        </div>
        </nav>
        </div>
    </header>
    <main>
        <div class="container">
    
        <?php

        $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";

        switch ($menuop) {
            case 'home':
                include 'paginas/home/home.php';
                break;
            case 'contatos':
                include 'paginas/contatos/contatos.php';
                break;
            case 'cad-contato':
                    include 'paginas/contatos/cad-contato.php';
                    break;
            case 'inserir-contato':
                    include 'paginas/contatos/inserir-contato.php';
                    break;
            case 'editar-contato':
                include 'paginas/contatos/editar-contato.php';
                break;
            case 'atualizar-contato':
                include 'paginas/contatos/atualizar-contato.php';
                break;
            case 'excluir-contato':
                include 'paginas/contatos/excluir-contato.php';
                break;
            case 'tarefas':
                include 'paginas/tarefas/tarefas.php';
                break;
            case 'eventos':
                include 'paginas/eventos/eventos.php';
                break;
            default:
                include 'paginas/home/home.php';
                break;
        }
        
        ?>
        </div>
    </main>

    <footer class="container-fluid fixed-bottom bg-primary">
        <div class="text-center">
            Agenda Telefonica V 1.0
        </div>
    </footer>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>