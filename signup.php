<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/login_signup.css">
</head>
<body>

    <div class="container">
        <div class="form-container sign-in-container">
            <form action="Controller\registerUser.php" method="POST">
                <h1>Konto <br/> erstellen</h1>
                <br/>
                <input type="text" placeholder="Vorname" name="surname" required/>
                <input type="text" placeholder="Nachname" name="name" required/>
                <input type="email" placeholder="Email" name="email" required/>
                <input type="password" placeholder="Passwort" name="password" required/>
                <br/>
                <button name="buttonCreateUser">Konto Erstellen</button>
                <?php include('View\Components\errors\errors.php'); ?>
            </form>

        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right dark-overlay">
                    <h1>Guten Tag!</h1>
                    <p>Hast du bereits ein Konto? Dann melde dich an!</p>
                    <button onclick="window.location.href='login.php'" class="ghost" id="signUp">Zur Anmeldeseite</button>
                </div>
            </div>
        </div>
    </div>
    <?php unset($_SESSION['errors']) ?>
</body>
</html>
