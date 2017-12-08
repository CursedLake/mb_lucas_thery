{* Smarty *}

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">{$nomPage}</span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container ce">
        <div class="row">
            <form class="col-md-4 col-md-offset-4" action="inscription.php" method="POST">    <!-- on centre le bloc formulaire -->
                <!--<div class="col-sm-3">  -->

                    <div class="form-group">
                        <label> Adresse e-mail : </label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Entrez votre email" {$style_emailErr}>
                    </div>
                    <div class="form-group">
                        <label> Mot de passe : </label>
                        <input type="password" class="form-control" name="mdp" placeholder="Entrez le mot de passe" {$style_mdpErr}>
                    </div>
                    <div class="form-group">
                        <label> Confirmer le mot de passe : </label>
                        <input type="password" class="form-control" name="confmdp" placeholder="Entrez le même mot de passe" {$style_confmdpErr}>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Entrer</button>
                  </div>
            </form>
        </div>
    </div>
</section>