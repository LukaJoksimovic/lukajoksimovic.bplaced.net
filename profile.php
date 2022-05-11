<!DOCTYPE html>
<html lang="en">

    <?php
        include 'View\Components\header\header.php';
        include 'Controller\db_connect.php';
        include 'Controller/productActions.php';
    ?>

    <body>

        <?php include 'View\Components\navigation\nav.php'; ?>


        <div class="min">
            <section class="py-5">
                <div class="container">
                    <?php showRightUser(); ?>
                </div>
            </section>
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
