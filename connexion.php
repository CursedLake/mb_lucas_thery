<?php

require_once("libs/Smarty.class.php");
include("includes/verif-util.inc.php");

$smarty = new smarty();

if (!$util_connecte) {

	if(isset($_POST['email']) && isset($_POST["mdp"]))
	{
		include ("includes/connexion.inc.php");

		//1 check email / mdp
		//2 creation id session 
		//3 MAJ BDD
		//4 creation cookie
		//5 Redirection

		$email_entree = $_POST["email"];
		$mdp_entre = md5($_POST["mdp"]);

		//$mail = $pdo->query("SELECT * FROM utilisateurs WHERE email='".$email_entree."'");
		$req = $pdo->query("SELECT * FROM utilisateurs WHERE email='".$email_entree."' AND password='".$mdp_entre."'");
		if($req->rowCount()==1)
		{
			$sid = md5($email_entree.time());

			$pdo->query("UPDATE utilisateurs SET sid='".$sid."' WHERE email='".$email_entree."'");

			setcookie("id_session",$sid,time()+15*60);
			echo "done";
			header('Location: connexion.php');
		}
		else
		{
			echo "utilisateur invalide.";
			header('Location: connexion.php?message=erreurConnexion');
		}
	}
	else
	{

		include ("includes/haut.inc.php");

		if( isset($_GET["message"]) && $_GET["message"] == "erreurConnexion" )
		{
			$smarty->assign("erreurConnexion","");
		}
		$smarty->display("tpl/connexion.tpl");

		include ("includes/bas.inc.php");
	} // fin de la condition (si on est dans du simple affichage de la page, pas du traitement)
} // fin if(util_connecte);
else
{
	header('Location: index.php');
}
?>