
<header>
    <h3>Contatos</h3>
</header>
<div>
<a href="index.php?menuop=cad-contato">Novo</a>
</div>

<div>
<form action="index.php?menuop=contatos" method="post">
    <input type="text" name="txt_pesquisa">
    <input type="submit" value="Pesquisar">
</form>
</div>

<table border="1">
    <thead>
        <tr>
            <td>id</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Endereço</td>
            <td>Editar</td>
            <td>Apagar</td>
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
            <td><a href="index.php?menuop=editar-contato&id=<?=$dados["id"] ?>">Editar</a></td>
            <td><a href="index.php?menuop=excluir-contato&id=<?=$dados["id"] ?>">Excluir</a></td>
        </tr>
        <?php
    }
        ?>
    </tbody>
</table>