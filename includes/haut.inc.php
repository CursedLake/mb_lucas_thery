<?php 

require_once("libs/Smarty.class.php");
include("verif-util.inc.php");

$smarty = new smarty();

if($util_connecte && ($util_nom == '' || $util_prenom == ''))
{
    $smarty->assign("connecteSansNomPrenom","");
    $smarty->assign("util_email",$util_email);
}
elseif($util_connecte && $util_nom != '' && $util_prenom != '')
{
    $smarty->assign("connecteAvecNomPrenom","");
    $smarty->assign("util_nom",$util_nom);
    $smarty->assign("util_prenom",$util_prenom);
}

$smarty->display("tpl/haut.inc.tpl");