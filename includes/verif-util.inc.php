<?php 

	$util_connecte;
	$util_email;

	if(isset($_COOKIE["id_session"]))
	{
		include ("connexion.inc.php");
		$req = $pdo->query("SELECT sid FROM utilisateurs WHERE sid='".$_COOKIE["id_session"]."'");
		if($req->rowCount()==1) // correspond à un utilisateur
		{
			$util_connecte = true;
			$req = $pdo->query("SELECT email FROM utilisateurs WHERE sid='".$_COOKIE["id_session"]."'");
			$result = $req->fetch();
			$util_email = $result["email"];
		}
		else
		{
			$util_connecte = false;
			$util_email = "";
		}
	}
	else
	{
		$util_connecte = false;
		$util_email = "";
	}