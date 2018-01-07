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

<section> <!-- Connexion Section -->
	{if isset($erreurConnexion)}
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<p class="infoMessage"><span class="glyphicon glyphicon-info-sign"></span>Email ou mot de passe invalide</p>
				</div>
			</div>
		</div>
	{/if}

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