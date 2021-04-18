<header class="text-center">
    <h3>Contatos</h3>
</header>
<div class="d-flex justify-content-between">
    <div class="d-flex justify-content-start">
        
    <a class="btn btn-warning" href="index.php?menuop=cad-contato" role="button">Criar Contato</a>
    </div>

    <div>
    <form class="pesquisar d-flex justify-content-between" action="index.php?menuop=contatos" method="post">
        <input type="text" name="txt_pesquisa">
        
        <button class="btn btn-secondary" type="submit" value="Pesquisar"><i class="fas fa-search"></i></button>
    </form>
    </div>
</div>
<div class="d-flex justify-content-center py-2">
  <form action="index.php?menuop=contatos" method="post" >
        <button class="alfabeto btn btn-info" id="a" value="a" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">a</button>
        <button class="alfabeto btn btn-info" id="b" value="b" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">b</button>
        <button class="alfabeto btn btn-info" id="c" value="c" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">c</button>
        <button class="alfabeto btn btn-info" id="d" value="d" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">d</button>
        <button class="alfabeto btn btn-info" id="e" value="e" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">e</button>
        <button class="alfabeto btn btn-info" id="f" value="f" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">f</button>
        <button class="alfabeto btn btn-info" id="g" value="g" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">g</button>
        <button class="alfabeto btn btn-info" id="h" value="h" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">h</button>
        <button class="alfabeto btn btn-info" id="i" value="i" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">i</button>
        <button class="alfabeto btn btn-info" id="j" value="j" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">j</button>
        <button class="alfabeto btn btn-info" id="k" value="k" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">k</button>
        <button class="alfabeto btn btn-info" id="l" value="l" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">l</button>
        <button class="alfabeto btn btn-info" id="m" value="m" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">m</button>
        <button class="alfabeto btn btn-info" id="n" value="n" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">n</button>
        <button class="alfabeto btn btn-info" id="o" value="o" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">o</button>
        <button class="alfabeto btn btn-info" id="p" value="p" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">p</button>
        <button class="alfabeto btn btn-info" id="q" value="q" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">q</button>
        <button class="alfabeto btn btn-info" id="r" value="r" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">r</button>
        <button class="alfabeto btn btn-info" id="s" value="s" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">s</button>
        <button class="alfabeto btn btn-info" id="t" value="t" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">t</button>
        <button class="alfabeto btn btn-info" id="u" value="u" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">u</button>
        <button class="alfabeto btn btn-info" id="v" value="v" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">v</button>
        <button class="alfabeto btn btn-info" id="w" value="w" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">w</button>
        <button class="alfabeto btn btn-info" id="x" value="x" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">x</button>
        <button class="alfabeto btn btn-info" id="y" value="y" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">y</button>
        <button class="alfabeto btn btn-info" id="z" value="z" onClick="pesquisarLetra(this.id)" name="letra_pesquisa">z</button>
    </form>
</div>
<table class="table">
    <thead class="thead-light">
        <tr>
            
            <td scope="col">Nome</td>
            <td scope="col">Telefone</td>
            <td scope="col">Endereço</td>
            <td scope="col">Editar</td>
            <td scope="col">Apagar</td>
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

    $letra_pesquisa = (isset($_POST["letra_pesquisa"]))?$_POST["letra_pesquisa"] : "";
    $sql = "SELECT
            *
            FROM tb_contatos
            WHERE
            id = '{$txt_pesquisa}' or
            nome LIKE '{$letra_pesquisa}%'
            ORDER BY nome ASC
    ";


    $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!". mysqli_error($conexao));
    

    while($dados = mysqli_fetch_assoc($rs)){

    ?>
    
        <tr>
        
            <td><?=$dados["nome"]   ?></td>
            <td><?=$dados["telefone"]   ?></td>
            <td><?=$dados["endereco"]   ?></td>
            <td><a href="index.php?menuop=editar-contato&id=<?=$dados["id"] ?>"><i class="fas fa-edit"></i></a></td>
            <td><a href="index.php?menuop=excluir-contato&id=<?=$dados["id"] ?>"><i class="fas fa-trash-alt" style="color:#6E0D25;"></i></a></td>
        </tr>
   
    <?php
    }
    ?>
    </tbody>
</table>
