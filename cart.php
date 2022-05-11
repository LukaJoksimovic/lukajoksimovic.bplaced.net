<!DOCTYPE html>
<html lang="en">

    <?php
        include 'View\Components\header\header.php';
        include 'Controller\db_connect.php';
        include 'Controller/productActions.php';
    ?>

    <body>

        <?php include 'View\Components\navigation\nav.php'; ?>

        <!-- Section-->
        <section class="minCart">
            <div class="container px-4 px-lg-5 mt-5">
                <h2>Ihr persönlicher Warenkorb</h2>
                <div class="panel">
                        <div class="produkte">
                            <h3>Warenkorb (<?php getCartNumber(); ?> Artikel)</h3>
                            <?php showProducts(); ?>
                        </div>
                        <div class="gesamtbetrag">
                            <h3>Gesamtsumme</h3>
                            <div class="flexer">
                                <p>Zwischensumme</p>
                                <p> CHF <?php totalCost(); ?> </p>
                            </div>
                            <div class="flexer">
                                <p>Versand</p>
                                <p> CHF 0.00 </p>
                            </div>
                            <hr/>
                            <div class="flexer">
                                <p class="fw-bolder">Gesamtsumme (inkl. Mehrwertsteuer)</p>
                                <p class="fw-bolder"> CHF <?php totalCost(); ?> </p>
                            </div>
                                <form action="Controller/checkout.php" method="POST">
                                    <button type="submit" class="btn btn-dark costumButton">
                                        ZUR KASSE
                                    </button>
                                </form>
                        </div>
                        <div class="lieferung">
                            <h3>Voraussichtliche Lieferung</h3>
                            <p> 
                                <?php 
                                    $date = date("d/m/Y", strtotime("+7 day"));
                                    $date2 = date("d/m/Y", strtotime("+14 day"));
                                    echo "$date - $date2";
                                ?> 
                            </p>
                        </div>
                        <div class="akzeptieren">
                            <h3>Zahlungsmethoden</h3>
                            <div class="imageWrapper">
                                <img src="View\content\img\payment.png" alt="">
                            </div>
                        </div>
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

