<?php
include 'db_connector.php';
function getPersListe() {
    $sql = "SELECT * FROM t_personen;";
    $persListe = dbZugriffAnalyseExecutor($sql,"MYSQLI","prozedural");
    return $persListe;
}

function getRow($rowID) {
    $sql = "SELECT * FROM t_personen WHERE p_id = ".$rowID.";";
    $persListe = dbZugriffAnalyseExecutor($sql,"MYSQLI","prozedural");
    return $persListe[$rowID];
}

function deleteRow($delID) {
    $sql = "DELETE FROM t_personen WHERE p_id =".$delID.";";
    $isOK = dbZugriffAnalyseExecutor($sql,"MYSQLI","prozedural");
    return $isOK;
}

function updateRow($updateID, $persArr) {
    $sql  = "UPDATE t_personen SET ";
    $sql .= "`p_vorname` = '".$persArr["p_vorname"]."',";
    $sql .= "`p_nachname` = '".$persArr["p_nachname"]."',";
    $sql .= "`p_email` = '".$persArr["p_email"]."' ";
    $sql .= "WHERE p_id = ".$updateID.";";
    $isOK = dbZugriffAnalyseExecutor($sql,"MYSQLI","prozedural");
    return $isOK;   
}

function insertRow($persArr) {
    $sql  = "INSERT INTO `t_personen` "; 
    $sql .= "(`p_vorname`, `p_nachname`, `p_email`) "; 
    $sql .= "VALUES "; 
    $sql .= "( '".$persArr["p_vorname"]."' ";
    $sql .= ", '".$persArr["p_nachname"]."' ";
    $sql .= ", '".$persArr["p_email"]."' ); ";
    $isOK = dbZugriffAnalyseExecutor($sql,"MYSQLI","prozedural");
    return $isOK;    
}

function getPersTabelle() {
    $persListe = getPersListe();
    $out="
    <div id='jumpHere'>
	  <form action='#jumpHere' method='post' >
        <table class='table table-striped fa-lg' id='mainTable'>
            <thead>
                <tr>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>Email</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                <tr>
            </thead>
            <tbody>
         ";
    if (count($persListe) < 1) {
        $out .=     "<tr>
                        <td colspan='5'>Keine Daten vorhanden.<tr>
                    </tr>";
    } else {
        foreach ($persListe as $key => $value) {
            $out .= "<tr>
                        <td>".$value["p_vorname"]."</td>
                        <td>".$value["p_nachname"]."</td>
                        <td>".$value["p_email"]."</td>
                        <td><button name='deleteRow' value='".$key."' class='button fa fa-trash'/></td>
                        <td><button name='editRow'   value='".$key."' class='button fa fa-edit' /></td>
                    </tr>";
        }
    }
    $out .= "       <tr>
                        <td colspan='4'></td>
                        <td><button name='newRow' value='newRow' class='button special fa fa-plus' /></td>
                    </tr>
            </tbody>
        </table>
      </form>
    </div>";
    
    return $out;
}

function setTestdata() {
    $sql = file_get_contents("sql/t_personen.sql");
    $isOK = dbZugriffAnalyseExecutor($sql, "PDO", "objektorientiert");
}

?>