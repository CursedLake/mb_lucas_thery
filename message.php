<?php
	include ("includes/connexion.inc.php");

	try{
		echo var_dump($_POST);
		
		$sql='INSERT INTO messages(contenu,date) VALUES (:contenu,UNIX_TIMESTAMP())'; //UNIX_TIMESTAMP()
		
		$prep = $pdo->prepare($sql);
		$prep->bindValue(':contenu',htmlspecialchars($_POST['message']));		
		//$prep->debugDumpParams();
		$prep->execute();

		header("Location:index.php");
		exit();
		
}catch (PDOException $e){
	echo 'Connexion échouée : ' . $e->getMessage();
}


?>