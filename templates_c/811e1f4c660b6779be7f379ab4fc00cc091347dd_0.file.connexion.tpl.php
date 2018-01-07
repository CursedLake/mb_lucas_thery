<?php
/* Smarty version 3.1.30, created on 2018-01-07 12:07:45
  from "C:\xampp\htdocs\dev_web\tpl\connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a51ff81a09065_81434074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '811e1f4c660b6779be7f379ab4fc00cc091347dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dev_web\\tpl\\connexion.tpl',
      1 => 1515323263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a51ff81a09065_81434074 (Smarty_Internal_Template $_smarty_tpl) {
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

<section> <!-- Connexion Section -->
	<?php if (isset($_smarty_tpl->tpl_vars['erreurConnexion']->value)) {?>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<p class="infoMessage"><span class="glyphicon glyphicon-info-sign"></span>Email ou mot de passe invalide</p>
				</div>
			</div>
		</div>
	<?php }?>

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
</section><?php }
}
