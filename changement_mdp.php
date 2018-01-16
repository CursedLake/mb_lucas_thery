<?php 
	
	require_once("libs/Smarty.class.php");
	include("includes/verif-util.inc.php");

	if($util_connecte)
	{

		include("includes/haut.inc.php");

		$smarty = new Smarty();

		if(isset($_POST["submit"]))
		{
			if(!empty($_POST["actuel"]))
			{
				$mdpAComparer = md5($_POST["actuel"]);
				$stmt = $pdo->query("SELECT * FROM utilisateurs WHERE email='".$util_email."' AND password='".$mdpAComparer."'");

				if($stmt->rowCount()==1)
				{
					if(isset($_POST["nouveau"]) && isset($_POST["confirm"]) && $_POST["nouveau"]!="" && $_POST["confirm"]!="")
					{
						//comparer les deux autres 
						$nouveau = md5($_POST["nouveau"]);
						$confirm = md5($_POST["confirm"]);

						if($nouveau == $confirm)
						{
							//remplacement BDD
							$stmt = $pdo->query("UPDATE utilisateurs SET password='".$confirm."' WHERE email='".$util_email."'");

							header("location: index.php");
						}

						else
						{
							$smarty->assign("messageErreur","Mot de passe non indentique");
						}
					}
					else
					{
						$smarty->assign("messageErreur","Champs manquants");
					}
				}
				else
				{
					$smarty->assign("messageErreur","Mot de passe actuel incorrect");
				}

			}
		}

		$smarty->display("tpl/changement_mdp.tpl");

		include("includes/bas.inc.php");
	}
	else
	{
		header("location: interface_util.php");
	}
	
 ?>