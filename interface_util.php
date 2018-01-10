<?php

require_once('libs/Smarty.class.php');
include("includes/verif-util.inc.php");
include ("includes/haut.inc.php");

if($util_connecte)
{
	$smarty = new Smarty();

	$smarty->assign("email","");
	$smarty->assign("nom","");
	$smarty->assign("prenom","");

	if(isset($util_email)) $smarty->assign("email",$util_email);
	if(isset($util_nom)) $smarty->assign("nom",$util_nom);
	if(isset($util_prenom)) $smarty->assign("prenom",$util_prenom);

	if(isset($_POST["modif"])) $smarty->assign("modification","");

	if(isset($_POST["update"]))
	{

		$stmt = $pdo->prepare("UPDATE utilisateurs SET email=?, nom=?, prenom=? WHERE email='".$util_email."'");

		$stmt->bindParam(1, $_POST["update_email"]);
		$stmt->bindParam(2, $_POST["update_nom"]);
		$stmt->bindParam(3, $_POST["update_prenom"]);

		$stmt->execute();

		header("location: interface_util.php");
	}

	$smarty->display("tpl/interface_util.tpl");

	include ("includes/bas.inc.php");
}
else
	header("location: index.php"); //pas connecte, pas de profil