<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <title>Gerenciamento de Armazenamento</title>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><i class="fas fa-tachometer-alt"></i> GPC</h3>
                <strong>BS</strong>
            </div>

            <ul class="list-unstyled components">
               
                <li>
                <a href="#">
                    <i class="fas fa-home"></i>
                    Home
                </a>
                    <a href="#usuarioSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-user"></i>
                        Usuário
                    </a>
                    <ul class="collapse list-unstyled" id="usuarioSubmenu">
                        <li>
                            <a href="#">Cadastra</a>
                        </li>
                        <li>
                            <a href="#">Listar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#sementeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-leaf"></i>
                        Semente
                    </a>
                    <ul class="collapse list-unstyled" id="sementeSubmenu">
                        <li>
                            <a href="#">Cadastra</a>
                        </li>
                        <li>
                            <a href="#">Listar</a>
                        </li>
                        <li>
                            <a href="#">Sementes em falta</a>
                        </li>
                    </ul>
                </li>
                <li>
                <a href="#matrizSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-tree"></i>
                        Matriz
                    </a>
                    <ul class="collapse list-unstyled" id="matrizSubmenu">
                        <li>
                            <a href="#">Cadastra</a>
                        </li>
                        <li>
                            <a href="#">Listar</a>
                        </li>
                    </ul>
                </li>
                <li>
                <a href="#loteSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-cubes"></i>
                        Lote
                    </a>
                    <ul class="collapse list-unstyled" id="loteSubmenu">
                        <li>
                            <a href="#">Cadastra</a>
                        </li>
                        <li>
                            <a href="#">Listar</a>
                        </li>
                        <li>
                            <a href="#">Lote em falta</a>
                        </li>
                        <li>
                            <a href="#">Baixas</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-bell"></i>
                        Notificações
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-database"></i>
                        Backup
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-info"></i>
                        Sobre
                    </a>
                </li>

            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                  
                </li>
                <li>
                   
                </li>
            </ul>
        </nav>
   
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse dropdown-btn" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                        <div class="btn-group">
                            <a type="" href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="    margin: 0px 50px;">
                            Nome do usuário    
                        </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button"><i class="fas fa-edit"></i> Editar</button>
                                <button class="dropdown-item" type="button"><i class="fas fa-sign-in-alt"></i> Sair</button>
                            </div>
                        </div>
                        </ul>
                    </div>
                </div>
            </nav>
    </div>
    <div>
      
    </div>

  
    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/app.min.js"></script>
<script src="jquery/appjquery.min.js"></script>
<script src="bootstrap/js/bootstrap401.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
   <script>
    $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
    });

    });
   </script>
</body>
</body>
</html>