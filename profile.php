<!DOCTYPE html>
<html lang="en">

    <?php
        include 'View\Components\header\header.php';
    ?>

    <body>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Shopme</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Hauptseite</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Über uns</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Alle Produkte</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Beliebte Produkte</a></li>
                                <li><a class="dropdown-item" href="#!">Neue Lieferungen</a></li>
                            </ul>
                        </li>
                    </ul>

                    <?php if(isset($_SESSION['username'])) : ?>
                        <a class="btn" href="Controller\gotToProfile.php">
                            <div class="bi-person-fill fs-5"></div>
                        </a>
                    <?php endif ?>

                    <form class="d-flex">
                        <button class="btn" type="submit">
                            <i class="bi-cart-fill fs-5 me-1"></i>
                            <!--
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            -->
                        </button>
                    </form>

                    <?php if(!isset($_SESSION['username'])) : ?>
                        <a class="btn btn-dark" href="login.php">
                            <span>Login</span>
                        </a>
                    <?php endif ?>
                    
                </div>
            </div>
        </nav>

        <div class="min">
            
        </div>
        
        <?php 
            include 'View/Components/footer/footer.php';
        ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="Controller/js/scripts.js"></script>
    </body>
</html>
