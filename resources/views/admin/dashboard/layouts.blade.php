<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dash/vendors/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dash/vendors/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dash/vendors/images/favicon-16x16.png') }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dash/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dash/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/vendors/styles/style.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body>

    {{-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo" style="width: 50%; height: 30%; margin-left: 21%; margin-top: -30%;"><img
                    src="{{ asset('assets/img/logo.png') }}" alt=""></div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text" style="margin-top: -20%;">
                Loading...
            </div>
        </div>
    </div> --}}

    <div class="header">
        <div class="header-left">
            <div class="menu-icon dw dw-menu"></div>
            <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here">
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification"></i>
                        <span class="badge notification-active"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('dash/vendors/images/img.jpg') }}" alt="">
                                        <h3>John Doe</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('dash/vendors/images/photo1.jpg') }}" alt="">
                                        <h3>Lea R. Frith</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('dash/vendors/images/photo2.jpg') }}" alt="">
                                        <h3>Erik L. Richards</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('dash/vendors/images/photo3.jpg') }}" alt="">
                                        <h3>John Doe</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('dash/vendors/images/photo4.jpg') }}" alt="">
                                        <h3>Renee I. Hansen</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('dash/vendors/images/img.jpg') }}" alt="">
                                        <h3>Vicki M. Coleman</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-info-dropdown" style="margin-right: 10px;">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="{{ asset('dash/vendors/images/photo12.jpg') }}" alt="">
                        </span>
                        <span class="user-name">{{ auth()->user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                       <!-- <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Perfíl</a>-->
                        <a class="dropdown-item" href="#"><i class="dw dw-user1"></i> Perfíl</a>
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i>Configurações</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Ajuda</a>
                        <a class="dropdown-item" href="{{ route('user.form.logout') }}"><i class="dw dw-logout"
                                style="color: red"></i>Terminar Sessão</a>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                <div class="sidebar-radio-group pb-10 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon"
                            class="custom-control-input" value="icon-style-1" checked="">
                        <label class="custom-control-label" for="sidebaricon-1"><i
                                class="fa fa-angle-down"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon"
                            class="custom-control-input" value="icon-style-2">
                        <label class="custom-control-label" for="sidebaricon-2"><i
                                class="ion-plus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon"
                            class="custom-control-input" value="icon-style-3">
                        <label class="custom-control-label" for="sidebaricon-3"><i
                                class="fa fa-angle-double-right"></i></label>
                    </div>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                <div class="sidebar-radio-group pb-30 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-1" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-1" checked="">
                        <label class="custom-control-label" for="sidebariconlist-1"><i
                                class="ion-minus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-2" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-2">
                        <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                                aria-hidden="true"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-3" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-3">
                        <label class="custom-control-label" for="sidebariconlist-3"><i
                                class="dw dw-check"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-4" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-4" checked="">
                        <label class="custom-control-label" for="sidebariconlist-4"><i
                                class="icon-copy dw dw-next-2"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-5" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-5">
                        <label class="custom-control-label" for="sidebariconlist-5"><i
                                class="dw dw-fast-forward-1"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-6" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-6">
                        <label class="custom-control-label" for="sidebariconlist-6"><i
                                class="dw dw-next"></i></label>
                    </div>
                </div>

                <!--<div class="reset-options pt-30 text-center">
                    <button class="btn btn-danger" id="reset-settings">Reset Settings</button>
                </div>-->
            </div>
        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="{{ route('admin.dashboard') }}" style="margin-left: -20px; margin-top: 10px;">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="dark-logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="light-logo">
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="{{ route('admin.dashboard') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('bicicleta') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-analytics-21"></span><span class="mtext">Bicicletas</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('estacao') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-library"></span><span class="mtext">Estações</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('doca') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-invoice"></span><span class="mtext">Docas</span>
                            {{-- micon dw dw-copy --}}
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('aluguel') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-browser2"></span><span class="mtext">Alugueres</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('user') }}" class="dropdown-toggle no-arrow">
                            <span class="dw dw-user1" style="margin-left: -27%; padding-right: 16%;"></span>
                            <span class="mtext">Utilizadores</span>
                        </a>
                    </li>

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">SISTEMA</div>
                    </li>
                    <li>
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-edit-2"></span><span class="mtext">Documentação</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="#">Introdução</a></li>
                           <!-- <li><a href="introduction.html">Introdução</a></li>
                            <li><a href="getting-started.html">Getting Started</a></li>
                            <li><a href="color-settings.html">Color Settings</a></li>
                            <li><a href="third-party-plugins.html">Third Party Plugins</a></li>-->
                        </ul>
                    </li>
                   <!-- <li>
                        <a href="https://dropways.github.io/deskapp-free-single-page-website-template/"
                            target="_blank" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-paper-plane1"></span>
                            <span class="mtext">Landing Page <img
                                    src="{{ asset('dash/vendors/images/coming-soon.png') }}" alt=""
                                    width="25"></span>
                        </a>
                    </li>-->
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>
    @yield('conteudo')

    <!-- js -->
    <script src="{{ asset('dash/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('dash/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('dash/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('dash/vendors/scripts/layout-settings.js') }}"></script>

    <script src="{{ asset('dash/src/plugins/jQuery-Knob-master/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('dash/src/plugins/highcharts-6.0.7/code/highcharts.js') }}"></script>
    <script src="{{ asset('dash/src/plugins/highcharts-6.0.7/code/highcharts-more.js') }}"></script>
    <script src="{{ asset('dash/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('dash/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <script src="{{ asset('dash/src/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dash/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dash/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dash/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dash/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dash/vendors/scripts/dashboard.js') }}"></script>
    <script src="{{ asset('dash/vendors/scripts/dashboard2.js') }}"></script>
</body>

</html>
