<header class="text-center">
    <h3>Atualizar Contato</h3>
</header>

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

    echo "O registro foi atualizado com sucesso!";
?>