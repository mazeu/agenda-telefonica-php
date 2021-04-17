<header>
    <h3>Inserir Contato</h3>
</header>

<?php
    $nomeContato = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
    $telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
    $enderecoContato = mysqli_real_escape_string($conexao, $_POST["enderecoContato"]);
    $sql = "INSERT INTO tb_contatos (
                nome,
                telefone,
                endereco) 
             VALUES(
                '{$nomeContato}',
                '{$telefoneContato}',
                '{$enderecoContato}'
        )";

    mysqli_query($conexao, $sql) or die("Erro ao executar a consulta.". mysqli_error($conexao));

    echo "O registro foi inserido com sucesso!";
?>