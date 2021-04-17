<header class="text-center">
<h3>Cadastro de Contato</h3>
</header>

<div>
<form action="index.php?menuop=inserir-contato" method="post">
    <div>
        <label for="nomeContato">Nome</label>
        <input type="text" name="nomeContato">
    </div>
    <div>
        <label for="telefoneContato">Telefone</label>
        <input type="text" name="telefoneContato">
    </div>
    <div>
        <label for="enderecoContato">Endereço</label>
        <input type="text" name="enderecoContato">
    </div>

    <div>
    <input class="btn btn-success" type="submit" value="Adicionar" name="btnAdicionar">
    <a class="btn btn-danger" href="index.php?menuop=contatos" role="button">Cancelar</a>
    
    </div>
</form>
</div>