<?php
	include_once("database.php");
	var_dump($_POST);
	$count = 0;

	if(isset($_POST["name"]))
	{
		$count++;
	}
    if(isset($_POST["rank"]))
	{
		$count++;
	}
    if(isset($_POST["description"]))
	{
		$count++;
	}
	if(isset($_POST["email"]))
	{
		$count++;
	}
    if(isset($_POST["image"]))
	{
		$count++;
	}
	if(isset($_POST["sport"]))
	{
		$count++;
	}

	if($count === 6)
	{
		$data = [];
		$data["coaName"] = $_POST["name"];
		$data["coaRank"] = $_POST["rank"];
		$data["coaDescription"] = $_POST["description"];
        $data["coaMail"] = $_POST["email"];
		$data["coaImage"] = $_POST["image"];
		$data["fkSport"] = $_POST["sport"];
		//var_dump($data);
		$db = new database();
		$resultInsert = $db->addOneCoach($data);
		
		header("Location:index.html");
	}else
	{
		header('Location: http://localhost:8080/GProjet042-Sport/src/gutim-master/gutim-master/getlogin.php');
	}
?>