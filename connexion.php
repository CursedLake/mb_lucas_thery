<?php

include("includes/verif-util.inc.php");

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

		$mail = $pdo->query("SELECT * FROM utilisateurs WHERE email='".$email_entree."'");
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
			header('Location: connexion.php');
		}
	}
	else
	{

		include ("includes/haut.inc.php");
	?>


	<!-- Header -->
	    <header>
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12">
	                    <div class="intro-text">
	                        <span class="name">Connexion</span>
	                        <hr class="star-light">
	                    </div>
	                </div>
	            </div>
	        </div>
	    </header>
		
	<!-- Connexion Section -->
	<section>
		<div class="container ce">
			<div class="row">
				<form class="col-md-4 col-md-offset-4" action="connexion.php" method="POST">	<!-- on centre le bloc formulaire -->
					<!--<div class="col-sm-3">  -->

						<div class="form-group">
							<label> Adresse e-mail : </label>
							<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Entrez votre email">
						</div>
						<div class="form-group">
							<label> Mot de passe : </label>
							<input type="password" class="form-control" name="mdp" placeholder="Entrez le mot de passe">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Entrer</button>
					  </div>
					  <div style="text-align: center;">
					  	Pas de compte ? <a href="inscription.php">Inscrivez-vous</a>
					  </div>
				</form>
			</div>
		</div>
	</section>

	<?php

	include ("includes/bas.inc.php"); 
	} // fin de la condition (si on est dans du simple affichage de la page, pas du traitement)
} // fin if(util_connecte);
else
{
	header('Location: index.php');
}
?>