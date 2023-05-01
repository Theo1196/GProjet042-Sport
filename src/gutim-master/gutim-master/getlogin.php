<?php
var_dump($_POST);
/*
	include_once("database.php");
    //var_dump($_POST);
    $count = 0;

	if(isset($_POST["genre"]))
	{
		$count++;
	}
	if(isset($_POST["name"]))
	{
		$count++;
	}
	if(isset($_POST["firstName"]))
	{
		$count++;
	}
	if(isset($_POST["nickName"]))
	{
		$count++;
	}
	if(isset($_POST["origin"]))
	{
		$count++;
	}
	if(isset($_POST["section"]))
	{
		$count++;
	}

	if($count === 6)
	{
		$data = [];
		$data["genre"] = $_POST["genre"];
		$data["name"] = $_POST["name"];
		$data["firstName"] = $_POST["firstName"];
		$data["nickName"] = $_POST["nickName"];
		$data["origin"] = $_POST["origin"];
		$data["section"] = $_POST["section"];
        $data["idTeacher"] = $_POST["idTeacher"];
		$db = new database();
		$resultInsert = $db->updateTeacher($data);

		header("Location:index.php");
	}
*/
?>