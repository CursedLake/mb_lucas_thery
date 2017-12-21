<?php 

	$util_connecte;
	$util_email;
	$util_nom;
	$util_prenom;

	if(isset($_COOKIE["id_session"]))
	{
		include ("connexion.inc.php");
		$req = $pdo->query("SELECT sid FROM utilisateurs WHERE sid='".$_COOKIE["id_session"]."'");
		if($req->rowCount()==1) // correspond à un utilisateur
		{
			$util_connecte = true;
			$req = $pdo->query("SELECT * FROM utilisateurs WHERE sid='".$_COOKIE["id_session"]."'");
			$result = $req->fetch();
			$util_email = $result["email"];
			if(isset($result["nom"]) && isset($result["prenom"]))
			{
				$util_nom= $result["nom"];
				$util_prenom = $result["prenom"];
			}
			else
			{
				$util_nom = "";
				$util_prenom = "";
			}
		}
		else
		{
			$util_connecte = false;
			$util_email = "";
			$util_nom = "";
			$util_prenom = "";
		}
	}
	else
	{
		$util_connecte = false;
		$util_email = "";
		$util_nom = "";
		$util_prenom = "";
	}