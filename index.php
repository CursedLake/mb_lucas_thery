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
		$stmt=$pdo->query("SELECT contenu FROM messages WHERE id=".$_GET["id"]);
		while ($data = $stmt->fetch()) $smarty->assign("contenuAModifier",$data["contenu"]);
		$smarty->assign("idAModifier",$_GET['id']);
	}
}

//recupération de tous les messages
$allMessagesData = array();
$requeteSQL = "";
if(isset($_GET["search"]) && $_GET["search"] != "")
{
	$requeteSQL = "SELECT * FROM messages WHERE contenu LIKE '%".$_GET["search"]."%'";
}
else
{
	$requeteSQL = "SELECT * FROM messages";
}

$stmt=$pdo->query($requeteSQL);
$nombreDePage = ceil($stmt->rowCount() / 5); //arrondir tjs au desus (ex: 1.2 pages impossible)
$smarty->assign("nombreDePage",$nombreDePage);
$smarty->assign("pageActuelle","1"); //pour indiquer page actuelle (1 par défaut)

//choix renquête pa rapport situation (1 possible)
if($stmt->rowCount() > 5) //limite depassé
{
	if(isset($_GET["page"]) && is_int((int)$_GET["page"]) && $_GET["page"]>0) //page en particulier ?
	{
		$smarty->assign("pageActuelle",$_GET["page"] + 1);

		if(isset($_GET["search"]) && $_GET["search"] != "")
			$requeteSQL = "SELECT * FROM messages WHERE contenu LIKE '%".$_GET["search"]."%' ORDER BY date DESC LIMIT 5 OFFSET ".$_GET["page"]*5;
		else	
			$requeteSQL = "SELECT * FROM messages ORDER BY date DESC LIMIT 5 OFFSET ".$_GET["page"]*5;
	}

	else //1ere page (total > limite)
	{
		if(isset($_GET["search"]) && $_GET["search"] != "")
			$requeteSQL = "SELECT * FROM messages WHERE contenu LIKE '%".$_GET["search"]."%' ORDER BY date DESC LIMIT 5";
		else	
			$requeteSQL = "SELECT * FROM messages ORDER BY date DESC LIMIT 5";
	}
}
else //pas de contrainte: afficher tout
{
	if(isset($_GET["search"]) && $_GET["search"] != "")
		$requeteSQL = "SELECT * FROM messages WHERE contenu LIKE '%".$_GET["search"]."%' ORDER BY date DESC LIMIT 5";
	else	
		$requeteSQL = "SELECT * FROM messages ORDER BY date DESC LIMIT 5";
}


$stmt=$pdo->query($requeteSQL);
while ($data = $stmt->fetch())
{
	$patternURL = "/(https?:\/\/(?:www.|)[\w\.]+\.\w+(?:(?:[\w\/]+|)\/([^\s\/\?]+)|)(?:\?[^\s]+|))/";
	$patternEmail = "/([\w\.-]+@((?=.*[\.])[\w\.-]+))/";
	$patternTel = "/0[\d]{1}[\.\s-]?[\d]{2}[\.\s-]?[\d]{2}[\.\s-]?[\d]{2}[\.\s-]?[\d]{2}/";

	if(preg_match($patternURL, $data["contenu"]))
	{
		$data["contenu"] = preg_replace($patternURL, "<a href='$1'>$1</a>", $data["contenu"]);
	}
	else if(preg_match($patternEmail, $data["contenu"]))
	{
		$data["contenu"] = preg_replace($patternEmail, "<a href='mailto:$1'>$1</a>", $data["contenu"]);
	}
	else if(preg_match($patternTel, $data["contenu"]))
	{
		$data["contenu"] = preg_replace($patternTel, "<b>$0<b>", $data["contenu"]);
	}
	if (strlen($data["contenu"]) > 150) $data["contenu"] = str_replace(substr($data["contenu"], 150), "", $data["contenu"])."... <button class='readmore btn btn-info btn-sm' recupID='".$data["id"]."' >Voir la suite</button>";
	$allMessagesData[] = $data;
}


$smarty->assign("allMessagesData",$allMessagesData);
$smarty->assign("critereRechercheInput",""); //valeur barre de recherche
$smarty->assign("critereRecherchePagination",""); //href pagination

if(isset($_GET["search"]) && $_GET["search"] != "")//si critère de recherche alors
{
	$smarty->assign("critereRechercheInput",$_GET["search"]);
	$smarty->assign("critereRecherche","&search=". $_GET["search"]);
}

$smarty->display("tpl/index.tpl");

include ("includes/bas.inc.php");