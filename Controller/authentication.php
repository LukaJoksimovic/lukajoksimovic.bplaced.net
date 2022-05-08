
<?php

    session_start();

    include("db_connect.php");

    $email = "";
    $password = "";
    $errors = array();

    if (isset($_REQUEST['buttonLogin'])){

        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['password'] = $_REQUEST['password'];

        $email = $_SESSION['email'];
        $password = $_SESSION['password'];

        if (empty($email)) {
            array_push($errors, "Es muss eine E-Mail angegeben werden.");
        }
        if (empty($password)) {
            array_push($errors, "Es muss ein Passwort angegeben werden.");
        }

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
            
            $getSurnameAndNameQuery = "SELECT vorname, nachname FROM benutzer WHERE email=$email"
            $runCommand = mysqli_query($con, $getSurnameAndNameQuery); 
            $fetcher = mysqli_fetch_array($runCommand, MYSQLI_ASSOC);

            $surname = $fetcher['vorname'];
            $name = $fetcher['nachname'];

            $_SESSION['surname'] = $surname;
            $_SESSION['name'] = $name;

            header("Location: ../index.php");
        }  
        else{  
            array_push($errors, "Login failed. Invalid email or password.");
        }   

    }

?>
