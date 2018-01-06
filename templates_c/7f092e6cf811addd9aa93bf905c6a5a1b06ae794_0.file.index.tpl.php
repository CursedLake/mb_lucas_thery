<?php
/* Smarty version 3.1.30, created on 2018-01-06 23:04:34
  from "C:\xampp\htdocs\dev_web\tpl\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5147f23fd0a6_19136704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f092e6cf811addd9aa93bf905c6a5a1b06ae794' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dev_web\\tpl\\index.tpl',
      1 => 1515276271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5147f23fd0a6_19136704 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\dev_web\\libs\\plugins\\modifier.date_format.php';
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">NEWS</span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <?php if (isset($_smarty_tpl->tpl_vars['aModifier']->value)) {?>
                <form method="GET" action="article.php">
                    <div class="col-sm-10">
                        <div class="form-group">
                                <textarea id="message" name="message" class="form-control" placeholder="Message"><?php echo $_smarty_tpl->tpl_vars['contenuAModifier']->value;?>
</textarea>
                            <!-- ajouter le label -->
                        </div>
                            <input type="hidden"  name="a"  value="mod">
                            <input type='hidden'  name='id'  value=<?php echo $_smarty_tpl->tpl_vars['idAModifier']->value;?>
>

                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                    </div>
                </form>
            <?php } elseif ($_smarty_tpl->tpl_vars['util_connecte']->value == 'true') {?>
                <form method="POST" action="message.php">
                    <div class="col-sm-10">  
                        <div class="form-group">
                            <textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
                            <!-- ajouter le label -->
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                    </div>
                </form>
            <?php }?>
        </div>

        <br /> <br />

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allMessagesData']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
            <blockquote><p><?php echo $_smarty_tpl->tpl_vars['i']->value['contenu'];?>
</p><footer><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['date'],"%d/%m/%Y");?>
</footer></blockquote>
            <?php if ($_smarty_tpl->tpl_vars['util_connecte']->value == 'true') {?>
                <a href="article.php?a=sup&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-danger">Supprimer</a>
                <a href="index.php?a=mod&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&contenu=<?php echo $_smarty_tpl->tpl_vars['i']->value['contenu'];?>
" class="btn btn-warning">Modifier</a>
                <br /> <br />
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur <a href="#">#adipiscing</a> elit. Integer posuere erat a ante.</p>
          <footer>Foo</footer>
        </blockquote>

        <blockquote>
          <p>Sed eu tellus vel lectus <a href="#">@rhoncus</a> maximus. Nam eu turpis ac eros pellentesque tincidunt. Maecenas pellentesque consequat libero</p>
          <footer>Mauris arcu</footer>
        </blockquote>

        <blockquote>
          <p>Nunc volutpat vel nibh vitae blandit</p>
          <footer>blandit</footer>
        </blockquote>
    </div>
</section><?php }
}
