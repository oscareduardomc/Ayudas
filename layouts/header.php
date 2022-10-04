<header class="site-navbar" role="banner">
    <div class="site-navbar-top">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                    <form action="shop.php" method="post" class="site-block-top-search">
                        <span class="icon icon-search2"></span>
                        <input type="search" name="search" class="form-control border-0" placeholder="Ingresa el nombre del producto...">
                    </form>
                </div>

                <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                    <div class="site-logo">
                        <a href="index.php" class="js-logo-clone">Shoppers</a>
                    </div>
                </div>

                <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                    <div class="site-top-icons">
                        <ul>
                            <li class="has-children">
                                <a href="./login.php"><span class="icon icon-person"></span></a>
                                <ul class="dropdown">
                                    <li><a href="#">Menu One</a></li>
                                    <li><a href="#">Menu Two</a></li>
                                    <li><a href="#">Menu Three</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                            <li>
                                <a href="cart.php" class="site-cart">
                                    <span class="icon icon-shopping_cart"></span>
                                    <span class="count">
                                        <?php
                                        if (isset($_SESSION['shopping_cart'])) {
                                            echo count($_SESSION['shopping_cart']);
                                        } else {
                                            echo 0;
                                        }
                                        ?>
                                    </span>
                                </a>
                            </li>
                            <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
            <ul class="site-menu js-clone-nav d-none d-md-block">
                <li class="has-children">
                    <a href="index.php">Inicio</a>
                    <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                        <li class="has-children">
                            <a href="#">Sub Menu</a>
                            <ul class="dropdown">
                                <li><a href="#">Menu One</a></li>
                                <li><a href="#">Menu Two</a></li>
                                <li><a href="#">Menu Three</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="about.php">Acerca de</a>
                    <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                    </ul>
                </li>
                <li><a href="shop.php">Tienda</a></li>
                <li><a href="#">Catalogo</a></li>
                <li><a href="#">Lo más nuevo</a></li>
                <li><a href="./contact.php">Contacto</a></li>
            </ul>
        </div>
    </nav>
</header>