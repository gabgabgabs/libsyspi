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
                <!-- sidebar-menu  -->
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
                    SUPORTE
                </h4>
            </div>
            <div class="card-body">
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">RESPOSTAS RAPIDAS</th>
      <th scope="col">CONTATO</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>                         
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Pergunta</th>
      <td>Email: contato@libsys.com.br</td>
    </tr>
    <tr>
      <td>Resposta</td>
      <td>Telefone: (99)969635999</td>
    </tr>
    <tr>
      <th scope="row">Pergunta</th>
    </tr>
    <tr>
      <td>Resposta</td>
    </tr>
    <tr>
      <th scope="row">Pergunta</th>
    </tr>
    <tr>
      <td>Resposta</td>
    </tr>    
  </tbody>
</table>
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