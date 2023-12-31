<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">


    <title>SAPIF</title>
</head>

<body>
    <div class="layout has-sidebar fixed-sidebar fixed-header">
        <aside id="sidebar" class="sidebar break-point-sm has-bg-image">
            <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
            <div class="image-wrapper">
            </div>
            <div class="sidebar-layout">
                <div class="sidebar-header"><a class="aLogo" href="{{ url('/') }}">
                    <div class="pro-sidebar-logo">
							<div>
                                <img class="logo" src="{{ asset('img/iconCabeca.png') }}" alt="">
                            </div>
							<h5>SAPIF</h5>
                    </div></a>
                </div>
                <div class="sidebar-content">
                    <nav class="menu open-current-submenu">
                        <ul>
                            <li class="menu-header" style="padding-top: 20px"><span> MENU </span></li>
                            <li class="menu-item">
                                <a href="{{ url('/itensRetirados') }}">
                                    <span class="menu-icon">
                                        <i class="ri-inbox-fill"></i>
                                    </span>
                                    <span class="menu-title">Itens retirados</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/localRetirada') }}">
                                    <span class="menu-icon">
                                        <i class="ri-map-pin-fill"></i>
                                    </span>
                                    <span class="menu-title">Onde retirar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/quemDesenvolveu') }}">
                                    <span class="menu-icon">
                                        <i class="ri-team-fill"></i>
                                    </span>
                                    <span class="menu-title">Quem desenvolveu</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('admin') }}">
                                    <span class="menu-icon">
                                        <i class="ri-user-fill login-ico"></i>
                                    </span>
                                    <span class="menu-title login">Login</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </aside>
        <div id="overlay" class="overlay"></div>
        <div class="layout">
            <main class="content">
                @yield('content')
                <footer class="footer">
                    <small style="margin-bottom: 20px; display: inline-block">
                        © 2023 feito com
                        <span style="color: red; font-size: 18px">&#10084;</span> by -
                        <a target="_blank" href="https://github.com/seedfelho"> Sergio Eduardo</a>
                    </small>
                    <br />
                </footer>
            </main>
            <div class="overlay"></div>
        </div>
    </div>
    <script type="text/javascript" src="https://unpkg.com/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/menu.js') }}"></script>
</body>

</html>