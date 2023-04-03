<?php
/*
 * Auteur : Théo
 * Date : 06.03.2023
 * Description : requetes sql utilier pour les page en php
 */


 class Database {
    //Variable de classe
    private $connector;

    public function __construct(){

        try
        {
        $this->connector = new PDO('mysql:host=localhost;dbname=db_sport;charset=utf8' , 'root', 'root');
        }
        catch (PDOException $e)
        {
        die('Erreur : ' . $e->getMessage());
        }

    }
    private function querySimpleExecute($query){
        return $this->connector->query($query);
    }
    //
    private function queryPrepareExecute($query, $binds){
        $req = $this->connector->prepare($query);
        foreach ($binds as $key => $element) {
            $req->bindValue($key, $element["value"], $element["type"]);
        }
        $req->execute();
        return $req;        
    }
    //
    private function formatData($req){
        $result = $req->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }

    //
    public function getAllCoach(){
        $query = "SELECT * FROM t_coach";
        $req = $this->querySimpleExecute($query);
        $recette = $this->formatData($req);
        return $recette;

    }

    //
    public function getCoach($data) {
        $query = "SELECT * FROM t_coach WHERE coaMail ='". $data["login"] ."'";
        $req = $this->querySimpleExecute($query);
        $user = $this->formatData($req)[0];

        if (password_verify($data["password"], $user["coaPassword"])) {
            return $user;
        } else {
            return false;
        }

    }
    //
    public function deleteOneCoach($idCoach){

        $sql = "DELETE FROM t_coach WHERE idCoach='" . $idCoach . "'";
        $req = $this->querySimpleExecute($sql);
        $idCoach = $this->formatData($req);
        return $idCoach;

    }
    //
    public function addOneCoach($coaName, $coaMail, $coaRank, $coaDescription, $coaImage, $fkSport){
        $sql = "INSERT INTO t_coach (DEFAULT, `coaName`, `coaMail`, `coaRank`, `coaDescription`, `coaImage`, `fkSport`) VALUES (:coaName, :coaMail, :coaRank, :coaDescription, :coaImage, :fkSport)";
        $binds = [];
        $binds["coaName"]        = ["value" => $coaName , "type" => PDO::PARAM_STR];
        $binds["coaMail"]        = ["value" => $coaMail , "type" => PDO::PARAM_STR];
        $binds["coaRank"]        = ["value" => $coaRank , "type" => PDO::PARAM_STR];
        $binds["coaDescription"] = ["value" => $coaDescription , "type" => PDO::PARAM_STR];
        $binds["coaImage"]       = ["value" => $coaImage , "type" => PDO::PARAM_STR];
        $binds["fkSport"]        = ["value" => $fkSport , "type" => PDO::PARAM_STR];
        $this->queryPrepareExecute($sql, $binds);
    }
    //
    public function updateRecette($idCoach, $coaName, $coaMail, $coaRank, $coaDescription, $coaImage, $fkSport){
        $sql = "UPDATE t_coach SET coaName = :coaName, coaMail= :coaMail, coaRank = :coaRank, coaDescription = :coaDescription, coaImage= :coaImage, fkSport = :fkSport  WHERE idCoach = :idCoach";
        $binds = [];
        $binds["coaName"]        = ["value" => $coaName , "type" => PDO::PARAM_STR];
        $binds["coaMail"]        = ["value" => $coaMail , "type" => PDO::PARAM_STR];
        $binds["coaRank"]        = ["value" => $coaRank , "type" => PDO::PARAM_STR];
        $binds["coaDescription"] = ["value" => $coaDescription , "type" => PDO::PARAM_STR];
        $binds["coaImage"]       = ["value" => $coaImage , "type" => PDO::PARAM_STR];
        $binds["fkSport"]        = ["value" => $fkSport , "type" => PDO::PARAM_STR];
        $this->queryPrepareExecute($sql, $binds);
    }

    public function getAllSportif(){
        $query = "SELECT * FROM t_sportif";
        $req = $this->querySimpleExecute($query);
        $recette = $this->formatData($req);
        return $recette;

    }

    //
    public function getSportif($data) {
        $query = "SELECT * FROM t_sportif WHERE spoName ='". $data["login"] ."'";
        $req = $this->querySimpleExecute($query);
        $user = $this->formatData($req)[0];

        if (password_verify($data["password"], $user["coaPassword"])) {
            return $user;
        } else {
            return false;
        }

    }

    public function getCalendar(){
        $query = "SELECT t_coach.coaName, t_sport.sptName, t_réservation.resTime, t_réservation.resDate, t_réservation.resPlace, t_week.idWeek FROM t_réservation JOIN t_sport ON t_réservation.FkSport = t_sport.idSport JOIN t_coach ON t_réservation.FkCoach = t_coach.idCoach JOIN t_week ON t_réservation.FkWeek = t_week.idWeek WHERE t_week.idWeek = ( SELECT MAX(t_week.idWeek) FROM t_week );";
        $req = $this->querySimpleExecute($query);
        $calendar = $this->formatData($req);
        return $calendar;

    }

    public function getLastWeek(){
        $query = "SELECT * FROM `t_week` WHERE t_week.idWeek = ( SELECT MAX(t_week.idWeek) FROM t_week );";
        $req = $this->querySimpleExecute($query);
        $lastWeek = $this->formatData($req);
        return $lastWeek;

    }


    //Fonction pour avoir le nb de coach dans la DB
    public function countCoach()
    {
        $query = "SELECT COUNT(*) FROM t_coach";
        $req = $this->querySimpleExecute($query);
        $idCoach = $this->formatData($req);
        return $idCoach;
    }

    //
    public function deleteOneSportif($idSportif){

        $sql = "DELETE FROM t_sportif WHERE idSportif='" . $idSportif . "'";
        $req = $this->querySimpleExecute($sql);
        $idSportif = $this->formatData($req);
        return $idSportif;

    }
    //
    public function addOneSportif($spoName, $spoMail, $fkSport){
        $sql = "INSERT INTO t_sportif (DEFAULT, `spoName`, `coaMail`, `fkSport`) VALUES (:spoName, :coaMail, :fkSport)";
        $binds = [];
        $binds["spoName"] = ["value" => $spoName , "type" => PDO::PARAM_STR];
        $binds["coaMail"] = ["value" => $coaMail , "type" => PDO::PARAM_STR];
        $binds["fkSport"] = ["value" => $fkSport , "type" => PDO::PARAM_STR];
        $this->queryPrepareExecute($sql, $binds);
    }
    //
    public function updateSportif($idSportif, $spoName, $spoMail, $fkSport){
        $sql = "UPDATE t_sportif SET spoName = :spoName, spoMail= :spoMail, fkSport = :fkSport  WHERE idSportif = :idSportif";
        $binds = [];
        $binds["spoName"] = ["value" => $spoName , "type" => PDO::PARAM_STR];
        $binds["coaMail"] = ["value" => $coaMail , "type" => PDO::PARAM_STR];
        $binds["fkSport"] = ["value" => $fkSport , "type" => PDO::PARAM_STR];
        $this->queryPrepareExecute($sql, $binds);
    }
 }
 ?>