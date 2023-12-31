<!-- Header ! -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>PEMWEB</title>

    <!-- Fontfaces CSS-->
    <link href="../asset/css/font-face.css" rel="stylesheet" media="all">
    <link href="../asset/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../asset/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../asset/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../asset/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../asset/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../asset/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../asset/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../asset/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../asset/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../asset/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="../asset/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../asset/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="../asset/images/icon/maf.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="../asset/images/icon/fathan.jpg" alt="Muhammad Al Fathan" />
                    </div>
                    <h4 class="name">Muh. Al Fathan</h4>
                    <!-- <a href="#">Sign out</a> -->
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="<?php echo ($warnaMenu == 'dashboard') ? 'active has-sup' : ''; ?>">
                            <a class="" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="<?php echo ($warnaMenu == 'film') ? 'active has-sup' : ''; ?>">
                            <a href="film.php">
                                <i class="fas fa-film"></i>Film</a>
                        </li>
                        <li class="<?php echo ($warnaMenu == 'genre') ? 'active has-sup' : ''; ?>">
                            <a href="genre.php">
                                <i class="fas fa-genderless"></i>Genre</a>
                        </li>
                        <li class="<?php echo ($warnaMenu == 'user') ? 'active has-sup' : ''; ?>">
                            <a href="user.php">
                                <i class="fas fa-user"></i>User</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="../asset/images/icon/maf.png" width="250" alt="Muhammad Al Fathan" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=db_film">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="../asset/images/icon/maf.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="../asset/images/icon/fathan.jpg" alt="John Doe" />
                        </div>
                        <h4 class="name">Muh. Al Fathan</h4>
                        <!-- <a href="#">Sign out</a> -->
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a class="" href="index.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="film.php">
                                    <i class="fas fa-film"></i>Film</a>
                            </li>
                            <li>
                                <a href="genre.php">
                                    <i class="fas fa-genderless"></i>Genre</a>
                            </li>
                            <li>
                                <a href="user.php">
                                    <i class="fas fa-user"></i>User</a>
                            </li>
                            <li>
                                <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=db_film">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <br> <br> <br>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC--><!-- END STATISTIC-->

            <section class="mt-4">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">