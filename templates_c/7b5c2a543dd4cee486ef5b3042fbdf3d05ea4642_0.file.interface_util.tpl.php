<?php
/* Smarty version 3.1.31, created on 2017-12-21 16:31:39
  from "C:\xampp\htdocs\dev_web\tpl\interface_util.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3bd3dbab5733_12630000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b5c2a543dd4cee486ef5b3042fbdf3d05ea4642' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dev_web\\tpl\\interface_util.tpl',
      1 => 1513870296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3bd3dbab5733_12630000 (Smarty_Internal_Template $_smarty_tpl) {
?>


<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
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
            <form class="col-md-4 col-md-offset-4" action="interface_util.php" method="POST">    <!-- on centre le bloc formulaire -->
                <!--<div class="col-sm-3">  -->

                    <div class="form-group">
                        <label>Votre Nom: </label>
                        <input type="text" class="form-control" name="nom" aria-describedby="emailHelp" <?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['disable']->value;?>
>
                    </div>
                    <div class="form-group">
                        <label>Votre Prénom</label>
                        <input type="text" class="form-control" name="prenom" <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['disable']->value;?>
>
                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['btn_modifier']->value;?>

                    <?php echo $_smarty_tpl->tpl_vars['btn_valider']->value;?>

            </form>
        </div>
    </div>
</section><?php }
}
