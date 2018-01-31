<?php

require_once('libs/Smarty.class.php');
include("includes/verif-util.inc.php");
include ("includes/haut.inc.php");

if ($util_connecte)
{
	header("Location: index.php");
}
else
{
	$smarty = new Smarty();

	$smarty->assign("nomPage","inscription");

	if(isset($_POST["email"]) && isset($_POST["mdp"]) && isset($_POST["confmdp"]))
	{
		if(($_POST["email"]=="") || 
			($_POST["mdp"]=="") || 
			($_POST["confmdp"]=="") || 
			($_POST["mdp"]!=$_POST["confmdp"]))
		{
			//on fait rien
		}
		else
		{
			include("includes/connexion.inc.php");
			$stmt = $pdo->prepare("INSERT INTO utilisateurs(email,password) VALUES (?, ?)");
			$stmt->bindParam(1, $_POST["email"]);
			$stmt->bindParam(2, md5($_POST["mdp"]));
			$stmt->execute();
			header('Location: connexion.php');
		}
	}
	else
	{
		$smarty->assign("nomPage","inscription");
	}

	$smarty->display("tpl/inscription.tpl");
}
	include ("includes/bas.inc.php");
