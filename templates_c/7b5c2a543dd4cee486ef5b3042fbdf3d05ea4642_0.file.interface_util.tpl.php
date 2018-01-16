<?php
/* Smarty version 3.1.30, created on 2018-01-16 17:50:12
  from "C:\xampp\htdocs\dev_web\tpl\interface_util.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5e2d44cd2e32_62363084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b5c2a543dd4cee486ef5b3042fbdf3d05ea4642' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dev_web\\tpl\\interface_util.tpl',
      1 => 1516121411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5e2d44cd2e32_62363084 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">Profil</span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </div>
</header>

<?php if (isset($_smarty_tpl->tpl_vars['modification']->value)) {?>
    <section>
        <div class="container">
            <div class="row">
                <form method="POST" action="interface_util.php">
                    <div class="infoProfil">
                        <h4>Adresse mail</h4>
                        <input type="email" name="update_email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
                    </div>
                    <div class="infoProfil">
                        <h4>Mot de passe</h4>
                        <p>XXXX</p>
                    </div>
                    <div class="infoProfil">
                        <h4>Nom</h4>
                        <input type="text" name="update_nom" value="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
">
                    </div>
                    <div class="infoProfil">
                        <h4>Prénom</h4>
                        <input type="text" name="update_prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
">
                    </div>
                    <div class="infoProfil">
                        <button class="btn btn-primary" type="submit" name="update">Modifier</button>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
<?php } else { ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="infoProfil">
                    <h4>Adresse mail</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</p>
                </div>
                <div class="infoProfil">
                    <h4>Mot de passe</h4>
                    <p>XXXX <a href="changement_mdp.php">Modifier mot de passe</a></p>
                </div>
                <div class="infoProfil">
                    <h4>Nom</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
</p>
                </div>
                <div class="infoProfil">
                    <h4>Prénom</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
</p>
                </div>
                <div class="infoProfil">
                    <form method="POST" action="interface_util.php">
                        <button class="btn btn-primary" type="submit" name="modif">Modifier les informations</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php }
}
}
