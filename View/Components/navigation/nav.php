<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Luka.ch</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Hauptseite</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="sitemap.php">Sitemap</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="contact.php">Kontakt</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="products.php">Alle Produkte</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="category.php?kategorieid=1">Produkte Technik</a></li>
                                <li><a class="dropdown-item" href="category.php?kategorieid=2">Produkte Fahrzeuge</a></li>
                                <li><a class="dropdown-item" href="category.php?kategorieid=3">Produkte Möbel</a></li>
                                <li><a class="dropdown-item" href="category.php?kategorieid=4">Produkte Bekleidung</a></li>
                            </ul>
                        </li>
                    </ul>

                    <?php if(isset($_SESSION['email'])) : ?>
                        <a class="btn" href="Controller\gotToProfile.php">
                            <div class="bi-person-fill fs-5"></div>
                        </a>
                    <?php endif ?>


                    <?php if(!isset($_SESSION['email'])) : ?>
                        <a class="btn btn-dark" href="login.php">
                            <span>Login</span>
                        </a>
                    <?php endif ?>

                    <?php if(isset($_SESSION['email'])) : ?>
                        <form class="d-flex" method="POST" action="Controller/goToCart.php" >
                            <button name="cart" class="btn" type="submit">
                                <i class="bi-cart-fill fs-5 me-1"></i>
                                <span class="badge bg-dark text-white ms-1 rounded-pill"><?php getCartNumber(); ?></span>
                            </button>
                        </form>
                    <?php endif ?>

                    <?php if(!isset($_SESSION['email'])) : ?>
                        <form class="d-flex" method="POST" action="login.php" >
                            <button name="cart" class="btn" type="submit">
                                <i class="bi-cart-fill fs-5 me-1"></i>
                                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            </button>
                        </form>
                    <?php endif ?>
                    
                </div>
            </div>
        </nav>