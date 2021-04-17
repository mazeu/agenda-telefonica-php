<header class="text-center">
    <h3>Contatos</h3>
</header>
<div class="d-flex justify-content-between">
    <div class="d-flex justify-content-start">
        
    <a class="btn btn-warning" href="index.php?menuop=cad-contato" role="button">Novo</a>
    </div>

    <div>
    <form class="pesquisar d-flex justify-content-between" action="index.php?menuop=contatos" method="post">
        <input type="text" name="txt_pesquisa">
        
        <button class="btn btn-secondary" type="submit" value="Pesquisar"><i class="fas fa-search"></i></button>
    </form>
    </div>
</div>

<table class="table">
    <thead class="thead-light">
        <tr>
            <td scope="col">id</td>
            <td scope="col">Nome</td>
            <td scope="col">Telefone</td>
            <td scope="col">Endereço</td>
            <td scope="col">Editar</td>
            <td scope="col">Apagar</td>
        </tr>
    </thead>
    <tbody>
    <?php

    $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"] : "";
    $sql = "SELECT
            *
            FROM tb_contatos
            WHERE
            id = '{$txt_pesquisa}' or
            nome LIKE '%{$txt_pesquisa}%'
            ORDER BY nome ASC
    ";

    $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!". mysqli_error($conexao));
    

    while($dados = mysqli_fetch_assoc($rs)){

    ?>
    
        <tr>
        <td><?=$dados["id"]   ?></td>
            <td><?=$dados["nome"]   ?></td>
            <td><?=$dados["telefone"]   ?></td>
            <td><?=$dados["endereco"]   ?></td>
            <td><a href="index.php?menuop=editar-contato&id=<?=$dados["id"] ?>"><i class="fas fa-edit"></i></a></td>
            <td><a href="index.php?menuop=excluir-contato&id=<?=$dados["id"] ?>"><i class="fas fa-trash-alt" style="color:red;"></i></a></td>
        </tr>
   
    <?php
    }
        ?>
    </tbody>
</table>