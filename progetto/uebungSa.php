<?php

include_once("PDOKlasse.php");
include_once("form.php");
error_reporting(E_ALL); 
ini_set('display_errors', 'On');
session_start();


$db = new database();


if(isSet($_POST["emailLogin"]) && isSet($_POST["passwordLogin"])){
	$db->query_check($_POST["emailLogin"], $_POST["passwordLogin"]);
}
if(isSet($_SESSION["username"]) && isSet($_SESSION["password"])){
	printAddKundeForm();
	printQRScanner();
}
if(!isSet($_SESSION["username"])){
	printLoginForm();
}




?>