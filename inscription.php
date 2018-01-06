<?php

require_once('libs/Smarty.class.php');
include("verif-util.inc.php");
include ("includes/haut.inc.php");

if ($util_connecte)
{
	header("Location: index.php");
}
else
{
	$smarty = new Smarty();

	$smarty->assign("nomPage","inscription");
	$smarty->assign("style_emailErr",""); //vide par défaut
	$smarty->assign("style_mdpErr",""); //vide par défaut
	$smarty->assign("style_confmdpErr",""); //vide par défaut

	if(isset($_POST["email"]) && isset($_POST["mdp"]) && isset($_POST["confmdp"]))
	{
		// on verifie si c'est pas vide, et on met les borders en rouge
		if($_POST["email"]=="") $smarty->assign("style_emailErr","style='border-color: red;'");
		elseif($_POST["mdp"]=="") $smarty->assign("style_mdpErr","style='border-color: red;'");
		elseif($_POST["confmdp"]=="") $smarty->assign("style_confmdpErr","style='border-color: red;'");
		elseif($_POST["mdp"]!=$_POST["confmdp"])
		{
			$smarty->assign("style_mdpErr","style='border-color: red;'");
			$smarty->assign("style_confmdpErr","style='border-color: red;'");
		}
		else
		{
			include ("includes/connexion.inc.php");
			$req = $pdo->prepare("INSERT INTO utilisateurs(email,password) VALUES (?, ?)");
			$req->bindParam(1, $_POST["email"]);
			$req->bindParam(2, md5($_POST["mdp"]));
			$req->execute();
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
