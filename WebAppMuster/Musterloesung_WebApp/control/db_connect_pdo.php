<?php include 'db_selector.php';
//Aufbau der Datenbankverbindung
$pdo = new PDO("mysql:host=".$host.";dbname=".$database, $user, $pass);

//Abfrage mit Verwendung des Result-Sets 
$sql = "SELECT * FROM t_personen;";
$resultSet = $pdo->query($sql);
$out = "";
foreach ($resultSet as $row) {
    $out .= "<tr>";
    $out .= " <td>".$row['p_vorname']."</td>";
    $out .= " <td>".$row['p_nachname']."</td>";
    $out .= " <td>".$row['p_email']."</td>";
    $out .= " <td><a href='#del".$row['p_id']."' ><i class='fa fa-trash'></i></a></td>";
    $out .= " <td><a href='#edt".$row['p_id']."' ><i class='fa fa-edit'></i></a></td>";
    $out .= "</tr>";
}
echo $out;
$anzahl_user = $resultSet->rowCount();
?>