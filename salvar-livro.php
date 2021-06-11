<?php  

include 'conexao.php';


$nome_livro = $_POST['nome_livro'];
$autor_livro = $_POST ['autor_livro'];
$editora_livro = $_POST['editora_livro'];
$quantidade = $_POST ['quantidade_livro'];
$cod_usuario = $_POST ['cod_usuario'];
//falta colocar editora

 $sql = "INSERT INTO livro (nome_livro, autor_livro, editora_livro, quantidade_livro, cod_usuario) VALUES ('".$_REQUEST["nome_livro"]."','".$_REQUEST["autor_livro"]."','".$_REQUEST["editora_livro"]."','".$_REQUEST["quantidade_livro"]."','".$_REQUEST["cod_usuario"]."')";			
$inserir = mysqli_query ($conexao,$sql);


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 500px; margin-top: 20px">
	<center>
	<h4> O livro foi Adicionado com Sucesso !</h4>
<div style="padding-top: 20px">	
<a href="cadastro-livro.php"role="button" class="btn btn-sm btn-primary">Cadastrar novo livro</a>
<a href="consulta-livro.php"role="button" class="btn btn-sm btn-primary">Consultar Livros</a>
</center>
</div>
</div>
