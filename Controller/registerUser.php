
<?php

    session_start();

    include("db_connect.php");

    $surname = "";
    $name = "";
    $email = "";
    $password = "";
    
    $errors = array();

    if(isset($_REQUEST['buttonCreateUser'])){

        $surname = $_REQUEST['surname'];
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        // Prevent MySqli injetion
        $surname = stripcslashes($surname);
        $name = stripcslashes($name);
        $email = stripcslashes($email);
        $password = stripcslashes($password);
        $surname = mysqli_real_escape_string($con, $surname);
        $name = mysqli_real_escape_string($con, $name);
        $email = mysqli_real_escape_string($con, $email);
        $password = mysqli_real_escape_string($con, $password);

        if (empty($username)) { array_push($errors, "Sie müssen den Vorname angeben");}
        if (empty($name)) { array_push($errors, "Sie müssen den Nachnamen angeben");}
        if (empty($username)) { array_push($errors, "Sie müssen eine E-Mail angeben");}
        if (empty($password)) { array_push($errors, "Sie müssen ein Password angeben");}
        
        $userCheckQuery = "SELECT * FROM benutzer WHERE email='$email' LIMIT 1";
        $result = mysqli_query($con, $userCheckQuery);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if ($user['email'] === $email){
                array_push($errors, "Ein Account mit dieser E-Mail existiert schon bereits.");
            }
        }

        if (count($errors) === 0){

            $createUserQuery = "INSERT INTO benutzer (vorname, nachname, email, passwort) VALUES('$surname','$name','$email','$password')";

            mysqli_query($con, $createUserQuery);

            $_SESSION['surname'] = $surname;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header('location: ..\index.php');

        } else {
            header('location: ..\signup.php');
        }
    }

?>
