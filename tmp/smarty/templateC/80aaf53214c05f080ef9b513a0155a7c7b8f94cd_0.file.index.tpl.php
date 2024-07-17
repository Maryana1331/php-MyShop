<?php
/* Smarty version 4.1.1, created on 2024-05-20 16:48:37
  from 'C:\OSPanel\domains\MyShop\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_664b54b59d4d23_68609206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80aaf53214c05f080ef9b513a0155a7c7b8f94cd' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyShop\\views\\default\\index.tpl',
      1 => 1716207100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../includes/header.tpl' => 1,
    'file:../includes/sidebar.tpl' => 1,
    'file:../includes/footer.tpl' => 1,
  ),
),false)) {
function content_664b54b59d4d23_68609206 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
     <meta charset="UTF-8">
     <meta name="viewport"
          content="width=device-width,initial-scale=1.0">
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"><?php echo '</script'; ?>
>
     <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        window.addEventListener('scroll', function() {
        document.getElementById('showScroll').innerHTML = pageYOffset + 'px';
        });

    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:../includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
           <div class="wrapper">
                <?php $_smarty_tpl->_subTemplateRender("file:../includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
               <div id="content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastProducts']->value, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
                        <div class="card" style="width: 11rem;">
                            <img src="../img/prodacts/<?php echo $_smarty_tpl->tpl_vars['prod']->value['image'];?>
" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['prod']->value['name'];?>
</h5>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['prod']->value['description'];?>
</p>
                                <a href="/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
/" class="card-link">Подробнее</a>
                            </div>
                        </div>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastProducts']->value, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
                       <div class="card" style="width: 11rem;">
                           <img src="../img/prodacts/<?php echo $_smarty_tpl->tpl_vars['prod']->value['image'];?>
" class="card-img-top" alt="...">
                           <div class="card-body">
                               <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['prod']->value['name'];?>
</h5>
                               <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['prod']->value['description'];?>
</p>
                               <a href="/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
/" class="card-link">Подробнее</a>
                           </div>
                       </div>

                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastProducts']->value, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
                       <div class="card" style="width: 11rem;">
                           <img src="../img/prodacts/<?php echo $_smarty_tpl->tpl_vars['prod']->value['image'];?>
" class="card-img-top" alt="...">
                           <div class="card-body">
                               <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['prod']->value['name'];?>
</h5>
                               <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['prod']->value['description'];?>
</p>
                               <a href="/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
/" class="card-link">Подробнее</a>
                           </div>
                       </div>

                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastProducts']->value, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
                       <div class="card" style="width: 11rem;">
                           <img src="../img/prodacts/<?php echo $_smarty_tpl->tpl_vars['prod']->value['image'];?>
" class="card-img-top" alt="...">
                           <div class="card-body">
                               <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['prod']->value['name'];?>
</h5>
                               <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['prod']->value['description'];?>
</p>
                               <a href="/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
/" class="card-link">Подробнее</a>
                           </div>
                       </div>

                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </div>
           </div>
        <?php $_smarty_tpl->_subTemplateRender("file:../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/assets/dist/js/bootstrap.bundle.main.js"><?php echo '</script'; ?>
>
</html><?php }
}
