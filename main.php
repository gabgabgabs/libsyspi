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
                        </li>
                        <li>
                            <a href="index.php">
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
                    INICIO
                </h4>
            </div>
            <div class="card-body">
        <div style="color:black;text-align:center;padding:100px;font;width:100%;height:100px;" class="col s12">
          <h1>DEVOLUÇÕES PRÓXIMAS</h1>
        </div>
            </div>
          </div>
        
<?php
            include("conexao.php");
            //ini_set( 'display_errors', 0 );
 
            $sql ="SELECT l.nome_livro, e.dt_entrega, e.cod_emprestimo, c.nome_cliente FROM livro as l INNER JOIN emprestimo as e on l.cod_livro = e.cod_emprestimo INNER JOIN cliente as c on c.cod_cliente";



            $result = $conexao->query($sql) or die($conexao->error);    
      
            print "<div class ='panel panel-default'>";
            print "<table class ='table'>";
            print "<tr>";
            print "<th></th>";
            print "<th></th>";
            print "<th></th>";
            print "<th></th>";
            print "<th></th>";
            print "<th>ID</th>";
            print "<th>NOME DO CLIENTE</th>";
            print "<th>DATA DA DEVOLUÇÃO</th>";
            print "<th>LIVRO</th>";
            print "</tr>";
      
            while($rows = $result->fetch_object()){
            print "<tr>";
            print "<td></td>";
            print "<td></td>";
            print "<td></td>";
            print "<td></td>";
            print "<td></td>";
            print "<td>".$rows->cod_emprestimo."</td>";
            print "<td>".$rows->nome_cliente."</td>";
                  $data = $rows->dt_entrega;
                  $divisor = explode("-", $data);
                  $reverso = array_reverse($divisor);
                  $data_final = implode("-", $reverso);
            print "\r\n";
            print "<td>".$data_final."</td>";
            print "<td>".$rows->nome_livro."</td>";
            print "</tr>";
            
            }
            print "</table>";
            print "</div>";
?>
 </main>     
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>