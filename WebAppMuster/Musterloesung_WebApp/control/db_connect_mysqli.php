<?php include 'db_selector.php';

//Aufbau der Datenbankverbindung
$connection = new mysqli($host, $user, $pass, $database);

//Verbindungspruefung (freiwillig)
if ($connection->connect_errno) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}
//Abfrage mit Verwendung des Result-Sets 
$sql = "SELECT * FROM  t_personen;";

//Variante 0
$out = 0;
$resultSet = $connection->query($sql);
if ($resultSet->num_rows > 0) {
    while($row = $resultSet->fetch_assoc()) {
        $out .= "<tr>";
        $out .= " <td>".$row['p_vorname']."</td>";
        $out .= " <td>".$row['p_nachname']."</td>";
        $out .= " <td>".$row['p_email']."</td>";
        $out .= " <td><a href='#del".$row['p_id']."' ><i class='fa fa-trash'></i></a></td>";
        $out .= " <td><a href='#edt".$row['p_id']."' ><i class='fa fa-edit'></i></a></td>";
        $out .= "</tr>";
    }
    $out .= "<tr><td colspan='5'><pre><code>VARIANTE 0 ".print_r($resultSet, true)."</code></pre></td></tr>";
}
$connection->close();
echo $out;

// -------------------------------------- //

//Aufbau der Datenbankverbindung
$connection = new mysqli($host, $user, $pass, $database);

//Verbindungspruefung (freiwillig)
if ($connection->connect_errno) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}
//Abfrage mit Verwendung des Result-Sets
$sql = "SELECT * FROM  t_personen;";

//Variante 1
$out = "";
if ($resultSet = $connection->query($sql, MYSQLI_USE_RESULT)) {    
    while($obj = $resultSet->fetch_object()){
        $out .= "<tr>";
        $out .= " <td>".$obj->p_vorname."</td>";
        $out .= " <td>".$obj->p_nachname."</td>";
        $out .= " <td>".$obj->p_email."</td>";
        $out .= " <td><a href='#del".$obj->p_id."' ><i class='fa fa-trash'></i></a></td>";
        $out .= " <td><a href='#edt".$obj->p_id."' ><i class='fa fa-edit'></i></a></td>";
        $out .= "</tr>";
    }
    $out .= "<tr><td colspan='5'><pre><code>VARIANTE 1 ".print_r($resultSet, true)."</code></pre></td></tr>";
    $resultSet->close();
}
echo $out;
$connection->close();

?>
