<header>
    <h3>Excluir Contato</h3>
</header>

<?php
$idContato = mysqli_real_escape_string($conexao, $_GET["id"]);
$sql = "DELETE FROM tb_contatos WHERE id= '{$idContato}'";

mysqli_query($conexao, $sql) or die("Erro ao excluir o registro.". mysqli_error($conexao));
echo"Registro excluido com sucesso!";

?>