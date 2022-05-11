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
            <!-- Section-->
        <section class="py-5">

            <div class="container px-4 px-lg-5 mt-5">
                <h1>Suchergebniss für <?php echo $_POST['searchParameter']; ?>: </h1>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    if (isset($_POST['submit-search'])){
                        $search = mysqli_real_escape_string($con, $_POST['searchParameter']);
                        // TODO: Kurzbeschreibung und Langbeschreibung noch einbauen
                        $sql = "SELECT * FROM produkt WHERE produktname LIKE '%$search%' OR beschreibung LIKE '%$search%'";
                        $results = mysqli_query($con, $sql);
                        $queryResult = mysqli_num_rows($results);
                        
                        if ($queryResult > 0) {
                            while ($row = mysqli_fetch_assoc($results)) {
                                                
                                $id = $row['id'];
                                $produktname = $row['produktname'];
                                $beschreibung = $row['beschreibung'];
                                $preis = $row['preis'];
                                $produktkategorie_fs = $row['produktkategorie_fs'];
                                $imagePath = $row['imagePath'];

                                echo "
                                    <div class='col mb-5'>
                                        <div class='card h-100'>
                                            <!-- Sale badge
                                            <div class='badge bg-dark text-white position-absolute' style='top: 0.5rem; right: 0.5rem'>Sale</div>
                                            -->
                                            <!-- Product image-->
                                            <div class='fitCard'>
                                                <a href='productinfo.php?produktid=$id'>
                                                    <img class='card-img-top' src='$imagePath' alt='...' />
                                                 </a>
                                            </div>
                                            <!-- Product details-->
                                            <div class='card-body p-4'>
                                                <div class='text-center'>
                                                    <!-- Product name-->
                                                    <h5 class='fw-bolder'>$produktname</h5>
                                                    <!-- Product price
                                                    <span class='text-muted text-decoration-line-through'>$20.00</span>
                                                    -->
                                                    $preis CHF
                                                </div>
                                            </div>
                                            <!-- Product actions-->
                                            <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                                <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='#'>In den Warenkorb</a></div>
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                        } else {
                            // Include not found page (Make one)
                            echo "<p>Es wurden keine Resultate gefunden.</p>
                                   <div><a href='index.php'><p>Zurück zur Hauptseite</p></a></div> ";
                        }

                    }
                ?>
                    </div> 
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
