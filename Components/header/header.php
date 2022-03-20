<head>

        <?php
                session_start();

                $_SESSION['Username'] = 'Luka3';

                $showRightButton;

                if (isset($_SESSION['Username'])){
                        $showRightButton = "Login";
                } else {
                        $showRightButton = "Logout";
                }

        ?>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ShopQuick</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        <?php include 'Components\css\css.php' ?>

</head>