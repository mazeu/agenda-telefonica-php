<?php
$idContato = $_GET["id"];
$sql = "SELECT * FROM tb_contatos WHERE id = {$idContato}";
$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registro!".mysqli_error($conexao)); 
$dados = mysqli_fetch_assoc($rs);

?>

<header class="text-center">
    <h3>Editar Contatos</h3>
</header>

<form action="index.php?menuop=atualizar-contato" method="post">
    <div class="invisible">
        <label for="idContato">ID</label>
        <input type="text" name="idContato" value="<?=$dados["id"]?>">
    </div>
    <div class="form-group">
            <label class="col-2 justify-content-start" for="nomeContato">Nome:</label>
            <input  class="col-8"type="text" name="nomeContato" placeholder="Qual é o seu nome?" value="<?=$dados["nome"]?>">
    </div>
    <div class="form-group">
            <label class="col-2 justify-content-start" for="telefoneContato">Telefone:</label>
            <input class="col-8" type="text" name="telefoneContato" placeholder="Somente numeros" maxlength="13" value="<?=$dados["telefone"]?>">
        </div>
        <div class="form-group">
            <label class="col-2 justify-content-start" for="enderecoContato">Endereço:</label>
            <input class="col-8"type="text" name="enderecoContato" placeholder="Qual o seu endereço?" value="<?=$dados["endereco"]?>">
        </div>
        <div class="form-group">
            <label class="col-2 justify-content-start" for="cidadeContato">Cidade:</label>
            <input class="col-8" type="text" name="cidadeContato" placeholder="Informe a cidade" value="<?=$dados["cidade"]?>">
        </div>
        <div class="form-group">
            <label class="col-2 justify-content-start" for="estadoContato" >Estado:</label>
            <select class="col-4" id="estados" name="estadoContato" >
                <option><?php echo $dados['estado'] ?></option>
                <option >-não informado-</option>
                <option value="Acre">Acre</option>
                <option value="Alagoas">Alagoas</option>
                <option value="Amapá">Amapá</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Bahia">Bahia</option>
                <option value="Ceará">Ceará</option>
                <option value="Distrito Federal">Distrito Federal</option>
                <option value="Espirito Santo">Espirito Santo</option>
                <option value="Goiás">Goiás</option>
                <option value="Maranhão">Maranhão</option>
                <option value="Mato Grosso">Mato Grosso</option>
                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                <option value="Minas Gerais">Minas Gerais</option>
                <option value="Pará">Pará</option>
                <option value="Paraíba">Paraíba</option>
                <option value="Paraná">Paraná</option>
                <option value="Pernambuco">Pernambuco</option>
                <option value="Piauí">Piauí</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Rondônia">Rondônia</option>
                <option value="Roraima">Roraima</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Sergipe">Sergipe</option>
                <option value="Tocantins">Tocantins</option>
            </select>
        </div>
    <div>
    <input class="btn btn-warning" type="submit" value="Atualizar" name="btnAtualizar">
    <a class="btn btn-danger" href="index.php?menuop=contatos" role="button">Cancelar</a>
    </div>
</form>
</div>