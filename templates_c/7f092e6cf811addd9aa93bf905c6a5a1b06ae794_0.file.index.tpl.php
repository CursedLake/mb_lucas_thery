<?php
/* Smarty version 3.1.30, created on 2018-03-27 17:27:42
  from "C:\xampp\htdocs\dev_web\tpl\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aba62eebcc190_86899024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f092e6cf811addd9aa93bf905c6a5a1b06ae794' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dev_web\\tpl\\index.tpl',
      1 => 1522164458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aba62eebcc190_86899024 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php if (isset($_smarty_tpl->tpl_vars['aModifier']->value)) {?>
            <div class="row">
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
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['util_connecte']->value == 'true') {?>
            <div class="row">
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
            </div>
        <?php }?>

        
        <form id="IndexSearch" method="GET" action="index.php">
            <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" name="search" placeholder=Recherche value="<?php echo $_smarty_tpl->tpl_vars['critereRechercheInput']->value;?>
">
        </form>

        <br /> <br />

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allMessagesData']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
            <blockquote><p><?php echo $_smarty_tpl->tpl_vars['i']->value['contenu'];?>
</p><footer><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['date'],"%d/%m/%Y - %H:%M");?>
</footer></blockquote>
            <?php if ($_smarty_tpl->tpl_vars['util_connecte']->value == 'true') {?>
                <a href="article.php?a=sup&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-danger">Supprimer</a>
                <a href="index.php?a=mod&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-warning">Modifier</a>
                <br /> <br />
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        
        
        <div class="navMessages">
            <a href="index.php?page=0<?php echo $_smarty_tpl->tpl_vars['critereRecherchePagination']->value;?>
" class="navMessagesItem"><<</a>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nombreDePage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nombreDePage']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['pageActuelle']->value == $_smarty_tpl->tpl_vars['i']->value) {?>
                    <a class="navMessagesItem" style="color: black;"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                <?php } else { ?>
                    <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value-1;
echo $_smarty_tpl->tpl_vars['critereRecherchePagination']->value;?>
" class="navMessagesItem"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                <?php }?>
            <?php }
}
?>

            <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['nombreDePage']->value-1;
echo $_smarty_tpl->tpl_vars['critereRecherchePagination']->value;?>
" class="navMessagesItem">>></a>
        </div>

        <!--<blockquote>
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
        </blockquote>-->
    </div>
</section><?php }
}
