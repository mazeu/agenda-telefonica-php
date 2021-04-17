<?php
$idContato = $_GET["id"];
$sql = "SELECT * FROM tb_contatos WHERE id = {$idContato}";
$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registro!".mysqli_error($conexao)); 
$dados = mysqli_fetch_assoc($rs);

?>

<header>
    <h3>Editar Contatos</h3>
</header>

<form action="index.php?menuop=atualizar-contato" method="post">
    <div>
        <label for="idContato">ID</label>
        <input type="text" name="idContato" value="<?=$dados["id"]?>">
    </div>
    <div>
        <label for="nomeContato">Nome</label>
        <input type="text" name="nomeContato" value="<?=$dados["nome"]?>">
    </div>
    <div>
        <label for="telefoneContato">Telefone</label>
        <input type="text" name="telefoneContato" value="<?=$dados["telefone"]?>">
    </div>
    <div>
        <label for="enderecoContato">Endereço</label>
        <input type="text" name="enderecoContato" value="<?=$dados["endereco"]?>">
    </div>

    <div>
    <input type="submit" value="Atualizar" name="btnAtualizar">
    </div>
</form>
</div>