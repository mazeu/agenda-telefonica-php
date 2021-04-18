<header class="text-center">
    <h3>Inserir Contato</h3>
</header>
    <div>
        <a class="btn btn-success" href="index.php?menuop=contatos" role="button">Voltar</a>
    </div>

<?php
if($_POST["nomeContato"] == "" || $_POST["telefoneContato"] == ""){
    
    echo "Nao foi possivel cadastrar Contato!<br>";
    
    echo "Verifique se os campos foram preenchidos corretamente.";
}else{


    $nomeContato = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
    $telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
    $enderecoContato = mysqli_real_escape_string($conexao, $_POST["enderecoContato"]);
    $cidadeContato = mysqli_real_escape_string($conexao, $_POST["cidadeContato"]);
    $estadoContato = mysqli_real_escape_string($conexao, $_POST["estadoContato"]);
    $sql = "INSERT INTO tb_contatos (
                nome,
                telefone,
                endereco,
                cidade,
                estado) 
             VALUES(
                '{$nomeContato}',
                '{$telefoneContato}',
                '{$enderecoContato}',
                '{$cidadeContato}',
                '{$estadoContato}'
        )";

    mysqli_query($conexao, $sql) or die("Erro ao executar a consulta.". mysqli_error($conexao));

    echo "<h4>O registro foi inserido com sucesso!</h4>";
}
?>