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
            <div class="container center">

                <table>


                    <tr>
                        <td></td>
                        <td><li><a href="index.php">Hauptseite</a></li></td>
                    </tr>


                    <tr>
                        <td></td>
                        <td><li><a href="contact.php">Kontakt</a></li></td>
                    </tr>


                    <tr>
                        <td></td>
                        <td><li><a href="products.php">Produkte</a></li></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><li><a href="category.php?kategorieid=1">Kategorie Technik</a></li></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><li><a href="category.php?kategorieid=2">Kategorie Fahrzeuge</a></li></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><li><a href="category.php?kategorieid=3">Kategorie Möbel</a></li></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><li><a href="category.php?kategorieid=4">Kategorie Bekleidung</a></li></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><li><a href="productinfo.php?produktid=1">Produktdetails</a></li></td>
                    </tr>


                    <tr>
                        <td></td>
                        <td><li><a href="">Account</a></li></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><li><a href="">Meine Informationen</a></li></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><li><a href="">Meine Bestellungen</a></li></td>
                    </tr>


                    <tr>
                        <td></td>
                        <td><li><a href="">Einkaufswagen</a></li></td>
                    </tr>


                </table>
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