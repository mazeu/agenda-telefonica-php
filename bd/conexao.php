<?php

include "config.php";

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) OR die("Erro na conexão com o Servidor! ".mysqli_connect_error());

?>