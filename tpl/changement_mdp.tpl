<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">Changement MDP</span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </div>
</header>

<section> <!-- Connexion Section -->
	{if isset($messageErreur)}
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<p class="infoMessage"><span class="glyphicon glyphicon-info-sign"></span>{$messageErreur}</p>
				</div>
			</div>
		</div>
	{/if}
	<div class="container ce">
		<div class="row">
			<form class="col-md-4 col-md-offset-4" action="changement_mdp.php" method="POST">	<!-- on centre le bloc formulaire -->
				<!--<div class="col-sm-3">  -->
					<div class="form-group">
						<label>Mot de passe actuel</label>
						<input type="password" class="form-control" name="actuel" placeholder="Mot de passe actuel">
					</div>
					<div class="form-group">
						<label>Nouveau mot de passe</label>
						<input type="password" class="form-control" name="nouveau" placeholder="Nouveau mot de passe">
					</div>
					<div class="form-group">
						<label>Confirmer le mot de passe</label>
						<input type="password" class="form-control" name="confirm" placeholder="Confirmer le mot de passe">
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Entrer</button>
				  </div>
			</form>
		</div>
	</div>
</section>