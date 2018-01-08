<?php 

require_once('libs/Smarty.class.php');
include ("includes/connexion.inc.php");
include ("includes/haut.inc.php");
include ("includes/verif-util.inc.php");

$smarty = new smarty();

if ($util_connecte)
{
	$smarty->assign("util_connecte","true");
}
else
{
	$smarty->assign("util_connecte","false");
}

if (isset($_GET['a']) && !empty($_GET['a']))
{
	if($_GET['a'] == 'mod' )
	{
		$smarty->assign("aModifier","true");
		$smarty->assign("contenuAModifier",$_GET['contenu']);
		$smarty->assign("idAModifier",$_GET['id']);
	}
}

//recupération de tous les messages
$allMessagesData = array();
$stmt=$pdo->query("SELECT * FROM messages");
$nombreDePage = ceil($stmt->rowCount() / 5); //arrondir toujours au dessus
$smarty->assign("nombreDePage",$nombreDePage);


if($stmt->rowCount() > 5) //si plus de 5 résultat alors
{
	if(isset($_GET["page"]) && is_int((int)$_GET["page"]) && $_GET["page"]>0)
	{
		$stmt=$pdo->query("SELECT * FROM messages ORDER BY date DESC LIMIT 5 OFFSET ".($_GET["page"]*5));
		while ($data = $stmt->fetch())
		{
			$allMessagesData[] = $data;
		}
	}
	else
	{
		$stmt=$pdo->query("SELECT * FROM messages ORDER BY date DESC LIMIT 5");

		while ($data = $stmt->fetch())
		{
			$allMessagesData[] = $data;
		}
	}
}
else //sinon afficher tous les messages
{
	$stmt=$pdo->query("SELECT * FROM messages ORDER BY date DESC LIMIT 5");

	while ($data = $stmt->fetch())
	{
		$allMessagesData[] = $data;
	}
}

$smarty->assign("allMessagesData",$allMessagesData);

$smarty->display("tpl/index.tpl");

include ("includes/bas.inc.php");