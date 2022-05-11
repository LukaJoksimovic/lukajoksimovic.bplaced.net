<!DOCTYPE html>
<html lang="en">
 
    <?php
        include 'View\Components\header\header.php';
        include 'Controller/productActions.php';
    ?>

    <body>

        <?php include 'View\Components\navigation\nav.php'; ?>

        <!-- Header-->
        <header class="backgroundImageHome">
            <div class="container">
                <div class="wrapper">
                    <div class="centerText text-white">
                        <h1 class="display-4 fw-bolder">Luka.ch</h1>
                        <p class="lead fw-normal text-white-50 mb-0">Mit bester Qualität zum fairen Preis, nur für Sie!</p>
                    </div>
                    <div class="searcher">
                        <form class="input-group mb-3" action="search.php " method="POST">
                            <input type="text" class="form-control" placeholder="Suchen ..." name="searchParameter" >
                            <button class="btn btn-outline-secondary" id="button-addon2" type="submit" name="submit-search"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="marger">Unsere Kategorien:</h2>
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php displayCategories(); ?>
                </div> 
                <h2 class="marger">Unsere meistverkauften  Produkte:</h2>
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php displayBestSellerProducts(); ?>
                </div> 
            </div>
        </section>
        
        <?php 
            include 'View/Components/footer/footer.php';
        ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="Controller/js/scripts.js"></script>
    </body>
</html>
