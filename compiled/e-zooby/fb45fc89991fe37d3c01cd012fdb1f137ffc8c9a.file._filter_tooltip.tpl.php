<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:43:38
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_filter_tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9591276746139e55a597613-41474568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb45fc89991fe37d3c01cd012fdb1f137ffc8c9a' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_filter_tooltip.tpl',
      1 => 1628361958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9591276746139e55a597613-41474568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e55a59bbc7_58906351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e55a59bbc7_58906351')) {function content_6139e55a59bbc7_58906351($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['products_count']->value>0) {?>
Показать<br>
<span class="js-sidebar-filter-tooltip-count"><?php echo $_smarty_tpl->tpl_vars['products_count']->value;?>
</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['products_count']->value,'товар','товаров','товара');?>

<?php } else { ?>
Ничего<br> не найдено
<?php }?>
<?php }} ?>
