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
                    CLIENTE
                </h4>
            </div>
            <div class="card-body">
        <div style="color:black;text-align:center;padding:100px;font;width:100%;height:100px;" class="col s12">
          <h1>CADASTRO DE CLIENTES</h1>
        </div>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
  <form action="salvar-cliente.php" method="post" style="margin-top: 20px">
  
  <div class="form-group">
    <input type="text" class="form-control" name="nome_cliente" placeholder="Nome do Cliente"> 
  </div>
    <div class="form-group">
    <input type="text" class="form-control" name="cpf_cliente" placeholder="CPF"> 
  </div>
    <div class="form-group">
    <input type="date" class="form-control" name="dt_nasc_cliente" placeholder="Data de nascimento"> 
  </div>
  <div class="form-group">
    <input type="text"  class="form-control" name="telefone_cliente"  placeholder="Telefone">
   </div>
    <div class="form-group">
        <input type="hidden" name="acao" value="cadastrar">
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <input type="hidden" name="acao" value="cancelar">
        <button type="submit" class="btn btn-danger">Cancelar</button>
    </div>
   </form> 
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