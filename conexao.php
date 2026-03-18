<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA','');
define('DB', 'crud');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Erro de Processamento');
?>
