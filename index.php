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
$stmt=$pdo->query("SELECT * FROM messages ORDER BY date DESC");

while ($data = $stmt->fetch())
{
	$allMessagesData[] = $data;
}

$smarty->assign("allMessagesData",$allMessagesData);


$smarty->display("tpl/index.tpl");

include ("includes/bas.inc.php");