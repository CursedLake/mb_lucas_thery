<?php

require_once('Smarty.class.php');
include("verif-util.inc.php");
include ("includes/haut.inc.php");

if (!$util_connecte)
{
	header("Location: connexion.php");
}
else
{
	$smarty = new Smarty();

	//on vérifie si l'utilisateur a un nom et/ou prénom
	if($util_nom != "" && $util_prenom != "")
	{
		$smarty->assign("user","".$util_nom." ".$util_prenom);
		$smarty->assign("nom","value='".$util_nom."' placeholder='".$util_nom."'");
		$smarty->assign("prenom","value='".$util_prenom."' placeholder='".$util_prenom."'");
	}
	else //sinon on affiche son mail
	{
		$smarty->assign("user",$util_email);
		$smarty->assign("nom","");
		$smarty->assign("prenom","");
	}

	$smarty->assign("disable","disabled"); //champs désactivés par défaut
	$smarty->assign("btn_modifier","<div class=\"form-group\">
                        <button type=\"submit\" name=\"btn_modifier\" class=\"btn btn-primary\">Modifier</button>
                    </div>");
	$smarty->assign("btn_valider",""); //bouton valider n'existe pas

	//si le bouton modifier a été pressé
	if(isset($_POST["btn_modifier"]))
	{
		$smarty->assign("disable",""); //activation des champs
		$smarty->assign("btn_modifier","");
		$smarty->assign("btn_valider","<div class=\"form-group\">
                        <button type=\"submit\" name=\"btn_valider\" class=\"btn btn-primary\">Valider</button>
                    </div>");
	}

	if(isset($_POST["btn_valider"]))
	{
		if($_POST["nom"] != "" && $_POST["prenom"] != "") //si les champs ont été remplis
		{
			include ("includes/connexion.inc.php");
			$req = $pdo->prepare("UPDATE utilisateurs SET nom=?, prenom=? WHERE email='".$util_email."'");
			$req->bindParam(1, $_POST["nom"]);
			$req->bindParam(2, $_POST["prenom"]);
			$req->execute();
			header('Location: index.php');
		}
		else
		{
			echo "<script>alert(\"Un des champs est vide\")</script>";
			header('Location: interface_util.php');
		}
	}

	$smarty->display("tpl/interface_util.tpl");
}
	include ("includes/bas.inc.php");