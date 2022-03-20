<?php
$host = "";
$user = "";
$pass = "";
$database = "";
// Datenbank-Zugangsdaten, flexibel gesetzt
if ($_SERVER["SERVER_NAME"] == "localhost") {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "haraldmueller";
} elseif ($_SERVER["SERVER_NAME"] == "haraldmueller.square7.ch") {
    $host = "localhost";
    $user = "haraldmueller";
    $pass = "tbzTBZtbz";
    $database = "haraldmueller";
} elseif ($_SERVER["SERVER_NAME"] == "haraldmueller.bplaced.net") {
    $host = "localhost";
    $user = "haraldmueller";
    $pass = "tbzTBZtbz";
    $database = "haraldmueller";
}

/**
 * DB Connection erstellen auf 3 verschiedene Arten zu Schulungszwecken
 * Es ist einem freigestellt, welche der Arten / Stile man auswählt,
 * am Schluss wirken alle gleich
 * @param string $type ("MYSQLI" oder "PDO")
 * @param string $style ("procedural" oder "objektorientiert")
 * @return mysqli|PDO Connection-Variable
 */
function db_open(string $type, string $style) {
    global $host;
    global $user;
    global $pass;
    global $database;
    
    /**
     *     Folgende Aufteilung ist nur zur Schulungszwecken
     *     Eine der 4 Arten reicht. Man kann frei auswählen,
     *     welchen Stil man anwenden will.
     */
    if ($type == "MYSQLI") {
        if ($style == "prozedural") {
            $connection = new mysqli($host, $user, $pass, $database);//Aufbau der Datenbankverbindung
            if ($connection->connect_errno) { //Verbindungspruefung (freiwillig)
                die("Verbindung fehlgeschlagen: " . $connection->connect_error);
            }
            return $connection;
        }
        if ($style == "objektorientiert") {
            $connection = new mysqli($host, $user, $pass, $database);
            if ($connection->connect_error) { //Verbindungspruefung (freiwillig)
                die("Verbindung fehlgeschlagen: " . $connection->connect_error);
            }
            return $connection;
        }
    }
    if ($type == "PDO") { //PDO (=Php Data Object) ist natürlich nur objektorientiert
        try { // versuch Verbindung zu machen und setze den Error-Modus auf Exception
            $connection = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch(PDOException $e) {//fang den Error auf und geb ihn aus
            echo "<br><pre>".$sql . "<br>" . $e->getMessage()."</pre>";
        }
    }
}

function db_close($connection, $type, $style) {
    if ($type == "MYSQLI") {
        if ($style == "procedural") {
            mysqli_close($connection);
        }
        if ($style == "objektorientiert") {
            $connection->close();
        }
    }
    if ($type == "PDO") {
        $connection = null;
    }
}

/**
 * analysiert den SQL,
 * öffnet die Datenbank
 * führt den SQL gegen die Datenbank aus
 * und gibt das ResultSet oder True/False für den Ausführungsstatus zurück
 * @param string $type ("MYSQLI" oder "PDO")
 * @param string $style ("procedural" oder "objektorientiert")
 * @return boolean|$resultSet
 */
function dbZugriffAnalyseExecutor(string $sql, string $type, string $style) {
    
    $resultSet = FALSE;
    $sqlStart = strtoupper(substr($sql, 0, 6));
    
    switch ($sqlStart) {
        case "SELECT":
            try {
                if ($type == "PDO") {
                    $connection = db_open($type, $style);
                    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $statement = $connection->prepare($sql);
                    $statement->execute();
                    $result = $statement->setFetchMode(PDO::FETCH_ASSOC); 
                    foreach ($statement->fetchAll() as $key=>$row) {
                        $resultSet[$row["p_id"]] = $row;
                    }
                    db_close($connection, $type, $style);
                }
                if ($type == "MYSQLI") {
                    if ($style == "objektorientiert") {
                        $connection = db_open($type, $style);
                        $result = $connection->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $resultSet[$row["p_id"]] = $row;
                            }
                        }
                        db_close($connection, $type, $style);
                    }
                    if ($style == "prozedural") {
                        $connection = db_open($type, $style);
                        $result = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            //$resultSet = mysqli_fetch_assoc($result);
                            while($row = $result->fetch_assoc()) {
                                $resultSet[$row["p_id"]] = $row;
                            }
                        }
                        db_close($connection, $type, $style);
                    }
                }
                return $resultSet;
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                $resultSet = FALSE;
            }
            return $resultSet;
            break;
        default://DROP, "CREATE", "INSERT", "UPDATE", "DELETE"...
            try {
                if ($type == "PDO") {
                    $connection = db_open($type, $style);
                    $connection->exec($sql);
                    $resultSet = TRUE;
                    db_close($connection, $type, $style);
                }
                if ($type == "MYSQLI") {
                    if ($style == "objektorientiert") {
                        $connection = db_open($type, $style);
                        if ($connection->query($sql) === TRUE) {
                            $resultSet = TRUE;
                        }
                        db_close($connection, $type, $style);
                    }
                    if ($style == "prozedural") {
                        $connection = db_open($type, $style);
                        if (mysqli_query($connection, $sql)) {
                            $resultSet = TRUE;
                        }
                        db_close($connection, $type, $style);
                    }
                }
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                $resultSet = FALSE;
            }
            return $resultSet;
            break;
    }
}

?>