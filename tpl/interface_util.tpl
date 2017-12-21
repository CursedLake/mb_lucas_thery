{*smarty*}

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">{$user}</span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container ce">
        <div class="row">
            <form class="col-md-4 col-md-offset-4" action="interface_util.php" method="POST">    <!-- on centre le bloc formulaire -->
                <!--<div class="col-sm-3">  -->

                    <div class="form-group">
                        <label>Votre Nom: </label>
                        <input type="text" class="form-control" name="nom" aria-describedby="emailHelp" {$nom} {$disable}>
                    </div>
                    <div class="form-group">
                        <label>Votre Prénom</label>
                        <input type="text" class="form-control" name="prenom" {$prenom} {$disable}>
                    </div>
                    {$btn_modifier}
                    {$btn_valider}
            </form>
        </div>
    </div>
</section>