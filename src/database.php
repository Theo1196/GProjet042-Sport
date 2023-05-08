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
    public function getUser($data) {
        $query = "SELECT * FROM t_user WHERE useLogin ='". $data["login"] ."'";
        $req = $this->querySimpleExecute($query);
        $user = $this->formatData($req)[0];

        if (password_verify($data["password"], $user["usePassword"])) {
            return $user;
        } else {
            return false;
        }

    }

    //Fonction pour avoir le nb de coach dans la DB
    public function countCoach()
    {
        $query = "SELECT COUNT(*) FROM t_coach";
        $req = $this->querySimpleExecute($query);
        $idCoach = $this->formatData($req);
        return $idCoach;
    }

    //Fonction pour avoir le nb de sport dans la DB
    public function countSport()
    {
        $query = "SELECT COUNT(*) FROM t_sport";
        $req = $this->querySimpleExecute($query);
        $idSport = $this->formatData($req);
        return $idSport;
    }

    //Fonction pour avoir le nb de sport dans la DB
    public function CountPlace()
    {
        $query = "SELECT COUNT(*) FROM t_réservation";
        $req = $this->querySimpleExecute($query);
        $idPlace = $this->formatData($req);
        return $idPlace;
    }


    public function getAllSport()
    {
        $query = "SELECT * FROM t_sport"; 
        $req = $this->querySimpleExecute($query);
        $sport = $this->formatData($req);

        return $sport;
    }

    //
    public function deleteOneRecette($idRecette){

        $sql = "DELETE FROM t_recette WHERE idRecette='" . $idRecette . "'";
        $req = $this->querySimpleExecute($sql);
        $idRecette = $this->formatData($req);
        return $idRecette;

    }
    //
    public function addOneRecette($recTitre, $recCategorie, $recPreparation, $recImage){
        $sql = "INSERT INTO t_recette (`recTitre`, `recCategorie`, `recPreparation`, `recImage`) VALUES (:recTitre, :recCategorie, :recPreparation, :recImage)";
        $binds = [];
        $binds["recTitre"] = ["value" => $recTitre , "type" => PDO::PARAM_STR];
        $binds["recCategorie"] = ["value" => $recCategorie , "type" => PDO::PARAM_STR];
        $binds["recPreparation"] = ["value" => $recPreparation , "type" => PDO::PARAM_STR];
        $binds["recImage"] = ["value" => $recImage , "type" => PDO::PARAM_STR];
        $this->queryPrepareExecute($sql, $binds);
    }
    //
    public function updateRecette($recIngredients, $idRecette){
        $sql = "UPDATE t_recette SET recIngredients = :recIngredients WHERE idRecette = :idRecette";
        $binds = [];
        $binds["recIngredients"] = ["value" => $recIngredients , "type" => PDO::PARAM_STR];
        $binds["idRecette"] = ["value" => $idRecette , "type" => PDO::PARAM_INT];
        $this->queryPrepareExecute($sql, $binds);
    }

 }
 ?>