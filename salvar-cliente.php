<?php  

include 'conexao.php';


$nome_cliente = $_POST['nome_cliente'];
$cpf_cliente = $_POST ['cpf_cliente'];
$dt_nasc_cliente = $_POST ['dt_nasc_cliente'];
//$cod_usuario = $_POST['cod_usuario'];

 $sql = "INSERT INTO cliente (nome_cliente, cpf_cliente, dt_nasc_cliente) VALUES ('".$_REQUEST["nome_cliente"]."','".$_REQUEST["cpf_cliente"]."','".$_REQUEST["dt_nasc_cliente"]."')";			
$inserir = mysqli_query ($conexao,$sql);


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 500px; margin-top: 20px">
	<center>
	<h4> O Cliente foi Adicionado com Sucesso !</h4>
<div style="padding-top: 20px">	
<a href="cadastro-cliente.php"role="button" class="btn btn-sm btn-primary">Cadastrar novo Cliente</a>
<a href="consulta-cliente.php"role="button" class="btn btn-sm btn-primary">Consultar Clientes</a>
</center>
</div>
</div>
