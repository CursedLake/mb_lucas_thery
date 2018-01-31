{* Smarty *}

<script>
    $(document).ready(function()
    {
        function erreur(arg)
        {
            arg.parent().addClass("has-error");
            arg.attr("id","inputError");
            var text = "<div class='alert alert-danger'>Champs vide</div>";
            arg.after($(text).hide());
            $(".alert").slideDown("slow");
        }

        $("form").submit(function(event)
        {
            $(".has-error").removeClass("has-error");
            $(".alert").remove();  //si il y des alert encore présents, on les retire

            if (this.email.value=="") {
                //fonction qui traite erreur
                erreur($(this.email));
                return false;
            }
            else if (this.mdp.value=="") {
                erreur($(this.mdp));
                return false;
            }
            else if (this.confmdp.value=="") {
                erreur($(this.confmdp));
                return false;
            }
            else {
                return true;
            }
        })
    });
</script>

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

<section>
    <div class="container ce">
        <div class="row">
            <form class="col-md-4 col-md-offset-4" action="inscription.php" method="POST">    <!-- on centre le bloc formulaire -->
                <!--<div class="col-sm-3">  -->
                    <div class="form-group">
                        <label class="control-label"> Adresse e-mail : </label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Entrez votre email">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Mot de passe : </label>
                        <input type="password" class="form-control" name="mdp" placeholder="Entrez le mot de passe">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Confirmer le mot de passe : </label>
                        <input type="password" class="form-control" name="confmdp" placeholder="Entrez le même mot de passe">
                    </div>
                    <div class="form-group">
                        <button id="submit" type="submit" class="btn btn-primary">Entrer</button>
                  </div>
            </form>
        </div>
    </div>
</section>