<?php

    include("Controller\db_connect.php");

    function displayBestSellerProducts() {
        
        include("Controller\db_connect.php");

        $sqlStatement = "SELECT * from produkt LIMIT 4";
        $products = array();

        $result = mysqli_query($con, $sqlStatement);
        $fetcher = mysqli_fetch_array($result, MYSQLI_ASSOC);

        foreach ($result as $res) {

            $id = $res['id'];
            $produktname = $res['produktname'];
            $beschreibung = $res['beschreibung'];
            $preis = $res['preis'];
            $produktkategorie_fs = $res['produktkategorie_fs'];
            $imagePath = $res['imagePath'];

            if (isset($_SESSION['id'])){
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
                        <div class='costumButton2'>
                            <form action='addToCart.php' action='POST'>
                                <input hidden name='idProdukt' value='$id' type='text'>
                                <button type='submit' class='btn btn-outline-dark text-center'>In den Warenkorb</button>
                            </form>
                        </div>
                    </div>
                </div>
            ";
            }

            if(!isset($_SESSION['id'])){
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
                        <div class='costumButton2'>
                            <form action='login.php' action='POST'>
                                <input hidden name='idProdukt' value='$id' type='text'>
                                <button type='submit' class='btn btn-outline-dark text-center'>In den Warenkorb</button>
                            </form>
                        </div>
                    </div>
                </div>
            ";
            }
            
        }
    }


    function displayProducts() {

        include("Controller\db_connect.php");

        $sqlStatement = "SELECT * from produkt";
        $products = array();

        $result = mysqli_query($con, $sqlStatement);
        $fetcher = mysqli_fetch_array($result, MYSQLI_ASSOC);

        foreach ($result as $res) {

            $id = $res['id'];
            $produktname = $res['produktname'];
            $beschreibung = $res['beschreibung'];
            $preis = $res['preis'];
            $produktkategorie_fs = $res['produktkategorie_fs'];
            $imagePath = $res['imagePath'];

            if(isset($_SESSION['id'])) {
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
                            <div class='costumButton2'>
                                <form action='addToCart.php' action='POST'>
                                    <input hidden name='idProdukt' value='$id' type='text'>
                                    <button type='submit' class='btn btn-outline-dark text-center'>In den Warenkorb</button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            }

            if(!isset($_SESSION['id'])){
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
                            <div class='costumButton2'>
                                <form action='addToCart.php' action='POST'>
                                    <input hidden name='idProdukt' value='$id' type='text'>
                                    <button type='submit' class='btn btn-outline-dark text-center'>In den Warenkorb</button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            }

        }

    }

    function showCorrectProduct($test) {

        include("Controller\db_connect.php");

        $sqlStatement = "SELECT * from produkt WHERE id=$test";

        $result = mysqli_query($con, $sqlStatement);
        $fetcher = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $id = $fetcher['id'];
        $produktname = $fetcher['produktname'];
        $beschreibung = $fetcher['beschreibung'];
        $preis = $fetcher['preis'];
        $produktkategorie_fs = $fetcher['produktkategorie_fs'];
        $imagePath = $fetcher['imagePath'];

        if(isset($_SESSION['id'])){

            echo "
            <section class='py-5'>
                <div class='container px-4 px-lg-5 my-5'>
                    <div class='row gx-4 gx-lg-5 align-items-center'>
                        <div class='col-md-6'><img class='card-img-top mb-5 mb-md-0' src='$imagePath' alt='...' /></div>
                        <div class='col-md-6'>
                            <h1 class='display-5 fw-bolder'>$produktname</h1>
                            <div class='fs-5 mb-5'>
                                <span>CHF $preis</span>
                            </div>
                            <p class='lead'>$beschreibung</p>
                            <div class='d-flex'>
                                <input hidden name='idProdukt' value='$id' type='text'>
                                <!--<input class='form-control text-center me-3' id='inputQuantity' type='num' value='1' style='max-width: 3rem' /> -->
                                <form action='addToCart.php' action='POST'>
                                    <input hidden name='idProdukt' value='$id' type='text'>
                                    <button type='submit' class='btn btn-outline-dark text-center'><i class='bi-cart-fill me-1'></i>In den Warenkorb</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            ";
        }

        if(!isset($_SESSION['id'])){
            echo "
            <section class='py-5'>
                <div class='container px-4 px-lg-5 my-5'>
                    <div class='row gx-4 gx-lg-5 align-items-center'>
                        <div class='col-md-6'><img class='card-img-top mb-5 mb-md-0' src='$imagePath' alt='...' /></div>
                        <div class='col-md-6'>
                            <h1 class='display-5 fw-bolder'>$produktname</h1>
                            <div class='fs-5 mb-5'>
                                <span>CHF $preis</span>
                            </div>
                            <p class='lead'>$beschreibung</p>
                            <div class='d-flex'>
                                <input hidden name='idProdukt' value='$id' type='text'>
                                <!--<input class='form-control text-center me-3' id='inputQuantity' type='num' value='1' style='max-width: 3rem' /> -->
                                <form action='login.php' action='POST'>
                                    <input hidden name='idProdukt' value='$id' type='text'>
                                    <button type='submit' class='btn btn-outline-dark text-center'><i class='bi-cart-fill me-1'></i>In den Warenkorb</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            ";
        }

    }

    function displayCategories() {

        include("Controller\db_connect.php");

        $sqlStatement = "SELECT * from produktkategorie";

        $result = mysqli_query($con, $sqlStatement);
        $fetcher = mysqli_fetch_array($result, MYSQLI_ASSOC);

        foreach ($result as $res) {

            $id = $res['id'];
            $kategorieName = $res['kategoriename'];

            if($kategorieName == "Fahrzeug"){
                echo "
                <div class='color2 col mb-5'>
                    <a style='color: inherit;text-decoration:none;' href='category.php?kategorieid=$id'>
                        <div id='borderColor2' class='card h-100'>
                            <div class='card-body p-4'>
                                <div class='centerAndBigger'>
                                    <i class='fa-5x fa-solid fa-car'></i>
                                </div>
                                <div class='text-center'>
                                    <h5 class='fw-bolder'>$kategorieName</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            ";
            }

            if($kategorieName == "Technik"){
                echo "
                <div class='color1 col mb-5'>
                    <a style='color: inherit;text-decoration:none;' href='category.php?kategorieid=$id'>
                        <div id='borderColor1' class='card h-100'>
                            <div class='card-body p-4'>
                                <div class='centerAndBigger'>
                                    <i class='fa-5x fa-solid fa-microchip'></i>
                                </div>
                                <div class='text-center'>
                                    <h5 class='fw-bolder'>$kategorieName</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            ";
            }
            if($kategorieName == "Möbel"){
                echo "
                <div class='color3 col mb-5'>
                    <a style='color: inherit;text-decoration:none;' href='category.php?kategorieid=$id'>
                        <div id='borderColor3' class='card h-100'>
                            <div class='card-body p-4'>
                                <div class='centerAndBigger'>
                                    <i class='fa-5x fa-solid fa-couch'></i>
                                </div>
                                <div class='text-center'>
                                    <h5 class='fw-bolder'>$kategorieName</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            ";
            }

            if($kategorieName == "Bekleidung"){
                echo "
                <div class='color4 col mb-5'>
                    <a style='color: inherit;text-decoration:none;' href='category.php?kategorieid=$id'>
                        <div id='borderColor4' class='card h-100'>
                            <div class='card-body p-4'>
                                <div class='centerAndBigger'>
                                    <i class='fa-5x fa-solid fa-shirt'></i>
                                </div>
                                <div class='text-center'>
                                    <h5 class='fw-bolder'>$kategorieName</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            ";
            }

        }

    }

    function displayCategoryName($categoryId){

        include("Controller\db_connect.php");

        $sqlStatement = "SELECT * from produktkategorie WHERE id=$categoryId";

        $result = mysqli_query($con, $sqlStatement);
        $fetcher = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $res = $fetcher['kategoriename'];

        echo $res;

    }

    function displayProductsByCategroy($categoryId) {
        
        include("Controller\db_connect.php");

        $sqlStatement = "SELECT * from produkt WHERE produktkategorie_fs=$categoryId";

        $result = mysqli_query($con, $sqlStatement);
        $fetcher = mysqli_fetch_array($result, MYSQLI_ASSOC);

        foreach ($result as $res) {

            $id = $res['id'];
            $produktname = $res['produktname'];
            $beschreibung = $res['beschreibung'];
            $preis = $res['preis'];
            $produktkategorie_fs = $res['produktkategorie_fs'];
            $imagePath = $res['imagePath'];

            if(isset($_SESSION['id'])) {
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
                            <div class='costumButton2'>
                                <form action='addToCart.php' action='POST'>
                                    <input hidden name='idProdukt' value='$id' type='text'>
                                    <button type='submit' class='btn btn-outline-dark text-center'>In den Warenkorb</button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            }

            if(!isset($_SESSION['id'])){
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
                            <div class='costumButton2'>
                                <form action='login.php' action='POST'>
                                    <input hidden name='idProdukt' value='$id' type='text'>
                                    <button type='submit' class='btn btn-outline-dark text-center'>In den Warenkorb</button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            }

        }


    }

    function getCartNumber() {

        include("Controller\db_connect.php");
        
        $idOfUser = $_SESSION['id'];

        $query = "SELECT SUM(warenkorb_produkt.anzahl) AS amount FROM warenkorb_produkt INNER JOIN warenkorb ON warenkorb_produkt.warenkorb_fs=warenkorb.id WHERE warenkorb.benutzer_fs=$idOfUser";
        $result = mysqli_query($con, $query);

        $fetcher = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $cartItems = $fetcher['amount'];

        if(empty($cartItems)){
            echo '0';
        } else {
            echo $cartItems;
        }

    }

    // Start Shopping-Cart Functions

    function showProducts() {

        include("Controller\db_connect.php");

        $idOfUser = $_SESSION['id'];

        $sqlStatement = "SELECT produkt.id, produkt.produktname, produkt.preis, produkt.imagePath, produkt.produktkategorie_fs, warenkorb_produkt.anzahl FROM produkt INNER JOIN warenkorb_produkt ON produkt.id=warenkorb_produkt.produkt_fs INNER JOIN warenkorb ON warenkorb_produkt.warenkorb_fs=warenkorb.id WHERE warenkorb.benutzer_fs=$idOfUser";

        $products = array();
 
        $result = mysqli_query($con, $sqlStatement);
        $fetcher = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $checker = mysqli_num_rows($result);

        foreach ($result as $res) {

        $id = $res['id'];
        $produktname = $res['produktname'];
        $preis = $res['preis'];
        $produktkategorie_fs = $res['produktkategorie_fs'];
        $imagePath = $res['imagePath'];
        $anzahl = $res['anzahl'];

        echo "
            <div class='verticalCard'>
                <div class='fitImage'>
                    <img class='card-img-top' src='$imagePath' alt='...' />
                </div>
                <div class='nameWrapper'>
                    <p>$produktname</p>
                </div>
                <div class='price'>
                    <p>$preis CHF</p>
                </div>
                <div class='anzahl'>
                    <p>Anzahl: $anzahl</p>
                </div>
                    <a href='removeFromCart.php?idProdukt=$id'>
                        <button type='button' class='btn btn-outline-danger'>
                            Artikel entfernen
                        </button>
                    </a>
            </div>
        ";
        
        }
    }

    function addToCartF() {
        
        include("Controller\db_connect.php");

        $idOfUser = $_SESSION['id'];
        $productId = $_SESSION['productID'];
        
        $sqlGetIdofWarenkorb = "SELECT warenkorb.id FROM warenkorb WHERE warenkorb.benutzer_fs=$idOfUser";
        $res = mysqli_query($con, $sqlGetIdofWarenkorb);
        $fetcher = mysqli_fetch_array($res, MYSQLI_ASSOC);

        $idOfWarenkorb = $fetcher['id'];

        $SQL = "SELECT * FROM warenkorb_produkt WHERE produkt_fs=$productId AND warenkorb_fs=$idOfWarenkorb";
        $res = mysqli_query($con, $SQL);
        $counter = mysqli_num_rows($res);

        if ($counter < 1) {

            $sqlStatement = "INSERT INTO warenkorb_produkt (produkt_fs, warenkorb_fs, anzahl) VALUES ($productId, $idOfWarenkorb, 1)";
            mysqli_query($con, $sqlStatement);

        }

        if ($counter > 0) {

            $sqlStatement = "SELECT anzahl FROM warenkorb_produkt WHERE produkt_fs=$productId AND warenkorb_fs=$idOfWarenkorb";
            $result = mysqli_query($con, $sqlStatement);
            $fetcher6 = mysqli_fetch_array($result, MYSQLI_ASSOC);

            $anzahl = $fetcher6['anzahl'];

            $sqlStatement2 = "UPDATE warenkorb_produkt SET anzahl=$anzahl+1 WHERE produkt_fs=$productId AND warenkorb_fs=$idOfWarenkorb ";
            mysqli_query($con, $sqlStatement2);
        }
        
        unset($_SESSION['productID']);

        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

    function removeFromCartF() {

        include("Controller\db_connect.php");

        $idOfUser = $_SESSION['id'];
        $productId = $_SESSION['productID'];

        $sqlGetIdofWarenkorb = "SELECT warenkorb.id FROM warenkorb WHERE warenkorb.benutzer_fs=$idOfUser";
        $res = mysqli_query($con, $sqlGetIdofWarenkorb);
        $fetcher = mysqli_fetch_array($res, MYSQLI_ASSOC);

        $idOfWarenkorb = $fetcher['id'];


        $sqlStatement = "SELECT anzahl FROM warenkorb_produkt WHERE produkt_fs=$productId AND warenkorb_fs=$idOfWarenkorb";
        $result = mysqli_query($con, $sqlStatement);
        $fetcher6 = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $anzahl = $fetcher6['anzahl'];

        if ($anzahl > 0) {
            $sqlStatement2 = "UPDATE warenkorb_produkt SET anzahl=$anzahl-1 WHERE produkt_fs=$productId AND warenkorb_fs=$idOfWarenkorb";
            mysqli_query($con, $sqlStatement2);
        }

        if ($anzahl == 1){
            $sqlStatement = "DELETE FROM warenkorb_produkt WHERE warenkorb_fs=$idOfWarenkorb AND produkt_fs=$productId";
            mysqli_query($con, $sqlStatement);
        }

        if ($anzahl < 1){
            $sqlStatement = "DELETE FROM warenkorb_produkt WHERE warenkorb_fs=$idOfWarenkorb AND produkt_fs=$productId";
            mysqli_query($con, $sqlStatement);
        }
        unset($_SESSION['productID']);

        header("Location: cart.php");

    }

    function totalCost() {

        include("Controller\db_connect.php");
        
        $idOfUser = $_SESSION['id'];

        $sqlStatement = "SELECT SUM(produkt.preis*warenkorb_produkt.anzahl) AS totalKosten FROM produkt INNER JOIN warenkorb_produkt ON produkt.id=warenkorb_produkt.produkt_fs INNER JOIN warenkorb ON warenkorb_produkt.warenkorb_fs=warenkorb.id WHERE warenkorb.benutzer_fs=$idOfUser";
        
        $result = mysqli_query($con, $sqlStatement);
        $fetcher = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $totalAmouninCHF = $fetcher['totalKosten'];

        echo $totalAmouninCHF;

    }


    function showRightUser(){

        include("Controller\db_connect.php");

        $idOfUser = $_SESSION['id'];

        $sqlStatement = "SELECT * FROM benutzer WHERE id=$idOfUser";

        $result = mysqli_query($con, $sqlStatement);
        $fetcher = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $id = $fetcher['id'];
        $surname = $fetcher['vorname'];
        $name = $fetcher['nachname'];
        $email = $fetcher['email'];
        $passwort = $fetcher['passwort'];

        echo "
            
        <div class='main-body'>
        <div class='row'>
            <div class='col-lg-4'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='d-flex flex-column align-items-center text-center'>
                            <img src='https://bootdey.com/img/Content/avatar/avatar6.png' alt='Admin' class='rounded-circle p-1 bg-primary' width='110'>
                            <div class='mt-3'>
                                <h4>$surname $name</h4>
                                <p class='text-secondary mb-1'>Informatiker</p>
                                <p class='text-muted font-size-sm'>UE, Zürich, Schweiz</p>
                            </div>
                        </div>
                        <hr class='my-4'>
							<ul class='list-group list-group-flush'>
								<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
									<h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-globe me-2 icon-inline'><circle cx='12' cy='12' r='10'></circle><line x1='2' y1='12' x2='22' y2='12'></line><path d='M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z'></path></svg>Website</h6>
									<span class='text-secondary'>https://personal.com</span>
								</li>
								<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
									<h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-github me-2 icon-inline'><path d='M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22'></path></svg>Github</h6>
									<span class='text-secondary'>personal</span>
								</li>
								<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
									<h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-twitter me-2 icon-inline text-info'><path d='M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z'></path></svg>Twitter</h6>
									<span class='text-secondary'>@personal</span>
								</li>
								<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
									<h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-instagram me-2 icon-inline text-danger'><rect x='2' y='2' width='20' height='20' rx='5' ry='5'></rect><path d='M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z'></path><line x1='17.5' y1='6.5' x2='17.51' y2='6.5'></line></svg>Instagram</h6>
									<span class='text-secondary'>personal</span>
								</li>
								<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
									<h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-facebook me-2 icon-inline text-primary'><path d='M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z'></path></svg>Facebook</h6>
									<span class='text-secondary'>personal</span>
								</li>
							</ul>
                    </div>
                </div>
            </div>
            
            <div class='col-lg-8'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='row mb-3'>
                            <div class='col-sm-3'>
                                <h6 class='mb-0'>Vorname</h6>
                            </div>
                            <div class='col-sm-9 text-secondary'>
                                <input disabled type='text' class='form-control' value='$surname'>
                            </div>
                        </div>
                        <div class='row mb-3'>
                            <div class='col-sm-3'>
                                <h6 class='mb-0'>Nachname</h6>
                            </div>
                            <div class='col-sm-9 text-secondary'>
                                <input disabled type='text' class='form-control' value='$name'>
                            </div>
                        </div>
                        <div class='row mb-3'>
                            <div class='col-sm-3'>
                                <h6 class='mb-0'>Email</h6>
                            </div>
                            <div class='col-sm-9 text-secondary'>
                                <input disabled type='text' class='form-control' value='$email'>
                            </div>
                        </div>
                        <div class='row mb-3'>
                            <div class='col-sm-3'>
                                <h6 class='mb-0'>Passwort</h6>
                            </div>
                            <div class='col-sm-9 text-secondary'>
                                <input disabled type='password' class='form-control' value='$passwort'>
                            </div>
                        </div>
                        <div class='row'>
								<div class='col-sm-3'></div>
								<div class='col-sm-9 text-secondary'>
                                    <form action='Controller/logout.php' method='POST'>
                                        <button type='submit' class='btn btn-primary px-4'>
                                            Ausloggen
                                        </button>
                                    </form>
								</div>
							</div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class='card'>
                            <div class='card-body'>
                                <h4> Meine Bestellungen: </h4>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";

    }

?>