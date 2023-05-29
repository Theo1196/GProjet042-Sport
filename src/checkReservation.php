<?php
$valide = 1;
include("database.php");
$db = new Database();
$lastWeeks = $db->getLastWeek();
echo $_GET["sports"];
echo $_GET["time"];
echo $_GET["day"];
if($_GET["sports"] == null || $_GET["time"] == null || $_GET["day"] == null){
    echo "Veuiller sellectionner une bonne option";
    $valide = 0;
}
if($valide == 1){
    switch ($_GET["time"]){
        case 1:
            $time = "10:00H à 12:00H"; 
            break;
        case 2:
            $time = "12:00H à 14:00H"; 
            break;
        case 3:
            $time = "14:00H à 16:00H"; 
            break;
        case 4:
            $time = "16:00H à 18:00H"; 
            break;
        case 5:
            $time = "18:00H à 20:00H"; 
            break;
        case 6:
            $time = "20:00H à 22:00H"; 
            break;
        case 7:
            $time = "22:00H à 24:00H"; 
            break;
    }
    switch ($_GET["sport"]){
        case "Football":
            $fkSport = 1;
            break;
        case "Gym":
            $fkSport = 2;
            break;
        case "Dance":
            $fkSport = 3;
            break;
    }
    foreach($lastWeeks as $lastWeek){
        $idCoach = "SELECT idCoach FROM t_coach WHERE fkSport = $fkSport"
        $addReservation = $db->$addOneReservation($time, $_GET["time"], "ETML", 1, $fkSport, $idCoach, $lastWeek["idWeek"])
    }

}
?>