<?php
	include ("includes/connexion.inc.php");

	try{
		//echo var_dump($_GET);
		
		$a = $_GET['a'];
		
		if ($a == 'sup'){
			
			$sql='DELETE FROM messages WHERE id = :id';
			
			$prep = $pdo->prepare($sql);
			$prep->bindValue(':id',$_GET['id']);
			$prep->debugDumpParams();
			
			$prep->execute();
			header("Location:index.php");
			exit();
		}
		else if($a == 'mod'){
			$sql='UPDATE messages SET contenu = :contenu, date = UNIX_TIMESTAMP() WHERE id = :id';
			$prep = $pdo->prepare($sql);
			$prep->bindValue(':contenu',htmlspecialchars($_GET['message']));
			$prep->bindValue(':id',$_GET['id']);
			$prep->debugDumpParams();
			
			echo $sql;
			$prep->execute();
			header("Location:index.php");
			exit();
		}
		else if($a=='recup'){
			$stmt = $pdo->query("SELECT * FROM messages WHERE id=".$_GET["id"]);
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			echo $result["contenu"];
		}
		else{
		}
		//$sql='DELETE FROM messages WHERE ';
		/*
		$prep = $pdo->prepare($sql);
		$prep->bindValue(':contenu',$_POST['message']);
		$prep->debugDumpParams();
		
		
		$prep->execute();

		echo 'envoi réussi ! ';
		//header("Location:index.php");
		//exit();
		*/
}catch (PDOException $e){
	echo 'Connexion échouée : ' . $e->getMessage();
}


?>