<?php
/* Smarty version 4.1.1, created on 2024-05-15 18:08:21
  from 'C:\OSPanel\domains\MyShop\views\includes\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6644cfe5ac4d24_68332516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85e4e3c96284e5c1d7a4d002f3f37fe606fb8de3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyShop\\views\\includes\\sidebar.tpl',
      1 => 1715785698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6644cfe5ac4d24_68332516 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="flex-shrink-0 p-3" style="width: 280px;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
        <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-5 fw-semibold">Каталог</span>
    </a>
    <ul class="list-unstyled ps-0">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#<?php echo $_smarty_tpl->tpl_vars['item']->value['name_en'];?>
-collapse" aria-expanded="false">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                </button>
                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
                    <div class="collapse" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name_en'];?>
-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>
            </li>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </ul>
    <ul class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
            Личный кабинет
        </button>
        <div class="collapse" id="account-collapse" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
            </ul>
        </div>
    </ul>
</div><?php }
}
