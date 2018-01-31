<?php
/* Smarty version 3.1.30, created on 2018-01-31 18:12:05
  from "C:\xampp\htdocs\dev_web\tpl\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71f8e584a8c8_53704866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04c996d080ec92f923e58a6d9d9cf41a617dc75e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dev_web\\tpl\\inscription.tpl',
      1 => 1517418723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a71f8e584a8c8_53704866 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="intro-text">
                <span class="name"><?php echo $_smarty_tpl->tpl_vars['nomPage']->value;?>
</span>
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
</section><?php }
}
