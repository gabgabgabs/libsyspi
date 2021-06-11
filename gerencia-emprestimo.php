<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIBSYS</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/sidebar-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
</head>

<body>
    <style>
        .center {
            margin: auto;
            width: 60%;
            padding: 10px;}
    </style> 
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">

                <div class="sidebar-item sidebar-brand">
                    <a href="#">LIBSYS</a>
                </div>

                <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="img/user.png" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Bem-vindo(a)!</span>                  	
                        <span class="user-name">Christian Anderson</span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                    </div>
                </div>
 
                <div class=" sidebar-item sidebar-menu">
                    <ul>
                        <li>
                            <a href="main.php">
                                <i class="fa fa-home"></i>
                                <span class="menu-text">Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a>
                                <i class="fa fa-book"></i>
                                <span class="menu-text">Livro</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="cadastro-livro.php">Cadastrar</a>
                                    </li>
                                    <li>
                                        <a href="consulta-livro.php">Consultar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a>
                                <i class="fa fa-address-card"></i>
                                <span class="menu-text">Cliente</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="cadastro-cliente.php">Cadastrar</a>
                                    </li>
                                    <li>
                                        <a href="consulta-cliente.php">Consultar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a>
                                <i class="fa fa-calendar"></i>
                                <span class="menu-text">Empréstimo</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="gerencia-emprestimo.php">Gerenciar</a>
                                    </li>
                                    <li>
                                        <a href="consulta-emprestimo.php">Consultar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="suporte.php">
                                <i class="fa fa-wrench"></i>
                                <span class="menu-text">Suporte</span>
                            </a>
                        <li>
                            <a href="login.php">
                                <i class="fas fa-power-off"></i>
                                <span class="menu-text">Sair</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <main class="page-content pt-2">
            <div class="card-header py-3">
                <h4 class="page-header mt-xs-4">
                    EMPRÉSTIMO
                </h4>
            </div>
            <div class="card-body">
        <div style="color:black;text-align:center;padding:100px;font;width:100%;height:100px;" class="col s12">
          <h1>GERENCIAR EMPRÉSTIMOS</h2>
        </div>
        <form method="POST" action="gerencia-emprestimo.php">
        <div class="center">
            <div class="sidebar-item sidebar-search">
                <div>
                    <div class="col-md-12 col-xs-12">
                   <div class="input-group">
                       <input type="text" name="pesquisar" class="form-control search-menu">
                           <div class="input-group-append">
                                    <button class="input-group-text" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
	<?php 
            include("conexao.php");
            $pesquisar = @$_POST['pesquisar'];
            $sql ="SELECT l.nome_livro, l.autor_livro, e.dt_retirada, e.dt_entrega, c.nome_cliente, c.cpf_cliente FROM livro as l INNER JOIN emprestimo as e on l.cod_livro = e.cod_emprestimo INNER JOIN cliente as c on c.cod_cliente WHERE nome_cliente LIKE '%$pesquisar%' LIMIT 10";

            $result_livros = $conexao->query($sql) or die($conexao->error); 

            print"<div class = 'panel panel-default'>";
   		    print"<table class = 'table'>";
     		print"<tr>";
         	print"<th>NOME DO CLIENTE</th>";
         	print"<th>CPF</th>";
         	print"<th>TELEFONE(S)</th>";
      		print"</tr>";

            $row = $result_livros->fetch_object();   
     		print"<tr>";
        	print"<td>".$row->nome_cliente."</td>";
         	print"<td>".$row->cpf_cliente."</td>";
            //print"<td>".$row->nome_cliente."</td>"; desabilitado até o momento
      		print"</tr>";
            
            print"<tr>";
            print"<th>NOME DO LIVRO</th>";
            print"<th>AUTOR(A)</th>";
            print"<th>DATA DE RETIRADA</th>";
            print"<th>DATA DE DEVOLUÇÃO</th>";
            print"<th>EDITAR</th>";
            print"<th>EXCLUIR</th>";
            print"</tr>";

            while($rows = $result_livros->fetch_object()){
            print"<tr>";
            print"<td>".$rows->nome_livro."</td>";
            print"<td>".$rows->autor_livro."</td>";
            print"<td>".$rows->dt_retirada."</td>";
            print"<td>".$rows->dt_entrega."</td>";
            print"<td><a class='btn btn-primary btn-sm' style='color:#fff' href='editar_emprestimo.php?id=<?php echo $idemprestimo ?>'' role='button'><i class='far fa-edit'></i>Editar</a></td>";
            print"<td><a class='btn btn-danger btn-sm' style='color:#fff' href='deletar_emprestimo.php?id=<?php echo $idemprestimo ?>'' role='button'><i class='far fa-trash-alt'></i>&nbsp;Excluir</a>";
            print"</tr>";
            }
            print"</table>";
            print"</div>";
    ?>
  <form action="salvar-emprestimo.php" method="post" style="margin-top: 20px">
<div class="row">
  <div class="col-md-3 col-xs-3">
    <div class="form-group">
<input type="text" class="form-control" name="nome_livro" placeholder="Nome do livro" required>
    </div>
  </div>
  <div class="col-md-2 col-xs-2">
    <div class="form-group">
      <input type="text" class="form-control" name="autor_livro" placeholder="Autor(a)" required>
    </div>
  </div>
  <div class="col-md-2 col-xs-2">
    <div class="form-group">
      <input type="text"  class="form-control" name="dt_retirada" placeholder="Data de retirada" required>
    </div>
  </div>
  <div class="col-md-2 col-xs-2">
    <div class="form-group">
      <input type="text" class="form-control" name="dt_entrega" placeholder="Data de devolução" required>
    </div>
  </div>
      <div class="form-group">
        <input type="hidden" name="acao" value="cadastrar">
        <button type="submit" class="btn btn-success">Adicionar</button>
    </div>
</div>

   </form> 
</div>

            </div>
          </div>

        </div>
        </main>
    </div>
          
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>