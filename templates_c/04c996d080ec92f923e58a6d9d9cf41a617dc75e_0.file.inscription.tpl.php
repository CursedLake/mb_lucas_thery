<?php
/* Smarty version 3.1.30, created on 2018-01-06 18:32:26
  from "C:\xampp\htdocs\dev_web\tpl\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a51082a4d4108_13686796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04c996d080ec92f923e58a6d9d9cf41a617dc75e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dev_web\\tpl\\inscription.tpl',
      1 => 1513865689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a51082a4d4108_13686796 (Smarty_Internal_Template $_smarty_tpl) {
?>


<header>
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
</header>

<section>
    <div class="container ce">
        <div class="row">
            <form class="col-md-4 col-md-offset-4" action="inscription.php" method="POST">    <!-- on centre le bloc formulaire -->
                <!--<div class="col-sm-3">  -->
                    <div class="form-group">
                        <label> Adresse e-mail : </label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Entrez votre email" <?php echo $_smarty_tpl->tpl_vars['style_emailErr']->value;?>
>
                    </div>
                    <div class="form-group">
                        <label> Mot de passe : </label>
                        <input type="password" class="form-control" name="mdp" placeholder="Entrez le mot de passe" <?php echo $_smarty_tpl->tpl_vars['style_mdpErr']->value;?>
>
                    </div>
                    <div class="form-group">
                        <label> Confirmer le mot de passe : </label>
                        <input type="password" class="form-control" name="confmdp" placeholder="Entrez le même mot de passe" <?php echo $_smarty_tpl->tpl_vars['style_confmdpErr']->value;?>
>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Entrer</button>
                  </div>
            </form>
        </div>
    </div>
</section><?php }
}
