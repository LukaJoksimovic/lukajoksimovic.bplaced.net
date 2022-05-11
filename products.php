<!DOCTYPE html>
<html lang="en">
 
    <?php
        include 'View\Components\header\header.php';
        include 'Controller/productActions.php';
    ?>

    <body>

        <?php include 'View\Components\navigation\nav.php'; ?>

        
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="marger">Alle Produkte</h2>
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php displayProducts(); ?>
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
