<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="View/css/login_signup.css">
</head>
<body>

    <div class="container">
        <div class="form-container sign-in-container">
            <form action="Controller\authentication.php" method="POST">
                <h1>Anmelden</h1>
                <br/>
                <input name="email" type="email" placeholder="Email" required/>
                <input name="password" type="password" placeholder="Passwort" required/>
                <br/>
                <button>Anmelden</button>
            </form>
            <?php include('View\Components\errors\errors.php'); ?>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right dark-overlay">
                    <h1>Guten Tag!</h1>
                    <p>Noch kein persönliches Konto eingerichtet? Worauf wartest du!</p>
                    <button onclick="window.location.href='signup.php'" name="buttonLogin" class="ghost" id="signUp">Konto erstellen</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
