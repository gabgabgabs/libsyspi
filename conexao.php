<?php


define('HOST','localhost');
define('USUARIO','root');
define('SENHA','');
//esse nome terá que ser o mesmo da base de dados da aplicaçãoo
define('DB','libsys');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

?>



