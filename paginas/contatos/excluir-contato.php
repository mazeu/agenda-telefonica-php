<header class="text-center">
    <h3>Excluir Contato</h3>
</header>
    <div>
        <a class="btn btn-secondary" href="index.php?menuop=contatos" role="button">Voltar</a>
    </div>
<?php
$idContato = mysqli_real_escape_string($conexao, $_GET["id"]);
$sql = "DELETE FROM tb_contatos WHERE id= '{$idContato}'";

mysqli_query($conexao, $sql) or die("Erro ao excluir o registro.". mysqli_error($conexao));
echo"<h4>Registro excluido com sucesso!</h4>";

?>