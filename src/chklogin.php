<?php
//	include_once("conDB.php");
include_once("database.php");

$count = 0;
if(!empty($_POST["name"]))
{
	$count++;
}
if(!empty($_POST["email"]))
{
	$count++;
}
if(isset($_POST["last-name"]))
{
	$count++;
}
if(isset($_POST["sport"]))
{
	$count++;
}
if(isset($_POST["radio"]))
{
	$count++;
}

$name = $_POST["name"] +" "+ $_POST["last-name"];

if($count === 5)
{
	$data = [];
	$data["name"] = $name;
	$data["email"] = $_POST["email"];
    $data["occupation"] = $_POST["radio"];
	$data["sport"] = $_POST["sport"];

	// $resultInsert = create_message($data);
	$db = new Database();
	$resultInsert = $db->insertUser($data);

	header("Location:index.php");
} else {
	header("Location:addTeacher.php");
}