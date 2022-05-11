
<?php

    session_start();

    include("db_connect.php");

    $email = "";
    $password = "";
    $errors = array();

    if (isset($_REQUEST['buttonLogin'])){

        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['password'] = $_REQUEST['password'];

        if (empty($_SESSION['email'])) {
            array_push($errors, "Es muss eine E-Mail angegeben werden.");
        }
        if (empty($_SESSION['password'])) {
            array_push($errors, "Es muss ein Passwort angegeben werden.");
        }

        $email = $_SESSION['email'];
        $password = $_SESSION['password'];

        // Prevent MySqli injetion
        $email = stripcslashes($email);
        $password = stripcslashes($password);
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select * from benutzer where email = '$email' and passwort = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1){  
            
            $getUserproperties = "SELECT id, vorname, nachname FROM benutzer WHERE email='$email'";
            $runCommand = mysqli_query($con, $getUserproperties); 
            $fetcher = mysqli_fetch_array($runCommand, MYSQLI_ASSOC);

            $id = $fetcher['id'];
            $surname = $fetcher['vorname'];
            $name = $fetcher['nachname'];

            $_SESSION['id'] = $id;
            $_SESSION['surname'] = $surname;
            $_SESSION['name'] = $name;

            header("Location: ../index.php");
        }  
        else{  
            array_push($errors, "Login failed. Invalid email or password.");
            $_SESSION['errors'] = $errors;
            header("Location: ..\login.php");
        }   

    }

?>
