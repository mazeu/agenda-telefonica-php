<header class="text-center">
    <h3>Atualizar Contato</h3>
</header>
<div>
    
    <a class="btn btn-success justify-content-center" href="index.php?menuop=contatos" role="button">Voltar</a>
    
</div>

<?php
    $idContato = mysqli_real_escape_string($conexao, $_POST["idContato"]);
    $nomeContato = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
    $telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
    $enderecoContato = mysqli_real_escape_string($conexao, $_POST["enderecoContato"]);
    $sql = "UPDATE tb_contatos SET
                nome = '{$nomeContato}',
                telefone = '{$telefoneContato}',
                endereco =  '{$enderecoContato}'
            WHERE id =  '{$idContato}'
        ";

    mysqli_query($conexao, $sql) or die("Erro ao executar a consulta.". mysqli_error($conexao));

    echo "<h4>O registro foi atualizado com sucesso!</h4>";
?>