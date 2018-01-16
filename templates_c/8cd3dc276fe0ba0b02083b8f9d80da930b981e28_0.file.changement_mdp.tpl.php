<?php
/* Smarty version 3.1.30, created on 2018-01-16 17:45:17
  from "C:\xampp\htdocs\dev_web\tpl\changement_mdp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5e2c1d876000_04130628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cd3dc276fe0ba0b02083b8f9d80da930b981e28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dev_web\\tpl\\changement_mdp.tpl',
      1 => 1516121094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5e2c1d876000_04130628 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
	<?php if (isset($_smarty_tpl->tpl_vars['messageErreur']->value)) {?>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<p class="infoMessage"><span class="glyphicon glyphicon-info-sign"></span><?php echo $_smarty_tpl->tpl_vars['messageErreur']->value;?>
</p>
				</div>
			</div>
		</div>
	<?php }?>
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
</section><?php }
}
