<!DOCTYPE html>
<html lang="en">
 
    <?php
        include 'View\Components\header\header.php';
        include 'Controller/productActions.php';
    ?>

    <body>

        <?php include 'View\Components\navigation\nav.php'; ?>

        <div class="min">
             <section class="py-5">
            <div class="container text-center">
                <i style="color:green;" class="fa-10x fas fa-check-circle"></i>
                <div class="py-4"></div>
                <h3>Vielen dank für ihre Bestellung!</h3>
                <p>Ihre ausgewählten Artikel werden in Kürze bei Ihnen sein.</p>
                <p><a href="index.php">Zurück zur Hauptseite</a></p>
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
