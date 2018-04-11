<?php
/* Smarty version 3.1.30, created on 2018-03-28 18:02:50
  from "C:\xampp\htdocs\dev_web\tpl\haut.inc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abbbcaa820014_71514152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feec610bc37f31aa529ce88d244c8f533641cc1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dev_web\\tpl\\haut.inc.tpl',
      1 => 1522252967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abbbcaa820014_71514152 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Micro blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" href="css/modifLucas.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">Micro blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <?php if (isset($_smarty_tpl->tpl_vars['connecteSansNomPrenom']->value)) {?>
                        <li><a href='./interface_util.php'>Bienvenue <?php echo $_smarty_tpl->tpl_vars['util_email']->value;?>
</a></li>
                        <li class='page-scroll'><a href='deconnexion.php'>Déconnexion</a></li>
                    <?php } elseif (isset($_smarty_tpl->tpl_vars['connecteAvecNomPrenom']->value)) {?>
                        <li><a href='./interface_util.php'>Bienvenue <?php echo $_smarty_tpl->tpl_vars['util_nom']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['util_prenom']->value;?>
</a></li>
                        <li class='page-scroll'><a href='deconnexion.php'>Déconnexion</a></li>
                    <?php } else { ?>
                        <li class='page-scroll'><a href='connexion.php'>Connexion</a></li>
                    <?php }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav><?php }
}
