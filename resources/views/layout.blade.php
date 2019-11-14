<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cronometra</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{url('/')}}/favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="{{url('/')}}/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('/')}}/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="{{url('/')}}/node_modules/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="{{url('/')}}/node_modules/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="{{url('/')}}/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="{{url('/')}}/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('/')}}/node_modules/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="{{url('/')}}/node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="{{url('/')}}/node_modules/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="{{url('/')}}/node_modules/c3/c3.min.css">
        <link rel="stylesheet" href="{{url('/')}}/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="{{url('/')}}/node_modules/owl.carousel/dist/assets/owl.carousel.css">
        <link rel="stylesheet" href="{{url('/')}}/node_modules/owl.carousel/dist/assets/owl.theme.default.css">
        <link rel="stylesheet" href="{{url('/')}}/dist/css/theme.min.css">
        <script src="{{url('/')}}/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            
                        </div>
                        <div class="top-menu d-flex align-items-center">
                           
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="img/user.jpg" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="pages/profile.html"><i class="ik ik-user dropdown-icon"></i> Minha conta</a>
                                    <a class="dropdown-item" href="pages/login.html"><i class="ik ik-power dropdown-icon"></i> Sair</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>

            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.html">
                            <div class="logo-img">
                               <img src="{{url('/')}}/src/img/brand-white.svg" class="header-brand-img" alt="lavalite"> 
                            </div>
                            <span class="text">Cronometra</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Menu principal</div>
                                <div class="nav-item active">
                                    <a href="{{url('/')}}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="{{url('/')}}/produto"><i class="ik ik-shopping-bag"></i><span>Produtos</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="pages/navbar.html"><i class="ik ik-target"></i><span>Operações</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="pages/navbar.html"><i class="ik ik-paperclip"></i><span>Relatórios</span></a>
                                </div>
                                
                                <div class="nav-lavel">Cadastros</div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-shopping-bag"></i><span>Produto</span></a>
                                    <div class="submenu-content">
                                        <a href="adiconar-produto.html" class="menu-item">Adicionar</a>
                                        <a href="listar-produto.html" class="menu-item">Listar</a>
                                    </div>
                                </div>
                                
                            </nav>
                        </div>
                    </div>
                </div>
                
                <!-- Conteúdo -->
                @yield('conteudo')
                <!-- Fim Conteúdo -->
                
                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">© 2019 Cronometra</span>
                    </div>
                </footer>
                
            </div>
        </div>
        
        
        

        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                        <i class="ik ik-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="container">
                            <div class="apps-wrap">
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="app-item dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-command"></i><span>Ui</span></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{url('/')}}/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="{{url('/')}}/node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="{{url('/')}}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="{{url('/')}}/node_modules/screenfull/dist/screenfull.js"></script>
        <script src="{{url('/')}}/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{url('/')}}/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{url('/')}}/node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{url('/')}}/node_modules/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="{{url('/')}}/node_modules/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="{{url('/')}}/node_modules/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="{{url('/')}}/node_modules/moment/moment.js"></script>
        <script src="{{url('/')}}/node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="{{url('/')}}/node_modules/d3/dist/d3.min.js"></script>
        <script src="{{url('/')}}/node_modules/c3/c3.min.js"></script>
        <script src="{{url('/')}}/js/tables.js"></script>
        <script src="{{url('/')}}/js/widgets.js"></script>
        <script src="{{url('/')}}/js/charts.js"></script>
        <script src="{{url('/')}}/dist/js/theme.min.js"></script>
       
    </body>
</html>
