<?php
error_reporting(E_ALL); 
ini_set('display_errors', 'On');

class database extends PDO{
	public $pdo =  null;
	public $ergebniss;
	
	public function __construct() {
		$dsn="mysql:host=linuxserver;dbname=DB4_stgarmic";
		$user="stgarmic";
		$pass="mypass";
		$opt=array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		$this->pdo = new PDO($dsn,$user,$pass,$opt);	
	}
	
	//--------------------QUERY--------------------------------------
	
	public function query_check($name, $password){
		$stmt = $this->pdo->prepare("SELECT * FROM Maturant WHERE username = :name AND password = :password");
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				if($row["username"] == $name && $row["password"] == $password){
					$_SESSION["username"] = $name;
					$_SESSION["password"] = $password;
				}
		}
		
	}
	
	
	
	
}

?>