<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:40:40
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15638342406139e4a8c1fcc8-64605598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aa8de188157dce392fbaa73fa5e86a0db6d7fca' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/cart_informer.tpl',
      1 => 1628361950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15638342406139e4a8c1fcc8-64605598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'currency' => 0,
    'deliveries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e4a8c34e13_70560839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e4a8c34e13_70560839')) {function content_6139e4a8c34e13_70560839($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>
	<a href="./cart/" class="basket-field__link" title="<?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['cart']->value->total_products,'товар','товаров','товара');?>
 на <?php if ($_smarty_tpl->tpl_vars['cart']->value->bonus_price) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->bonus_price);?>
 <?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->total_price);?>
 <?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
">
		<i class="basket-field__icon"></i>
		<span class="basket-field__count js-basket-count" style="display: none"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
		<span class="count-sum-cart"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['cart']->value->total_products,'товар','товаров','товара');?>
 на <?php if ($_smarty_tpl->tpl_vars['deliveries']->value) {?><?php if ($_smarty_tpl->tpl_vars['deliveries']->value[0]->bonus_price) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['deliveries']->value[0]->bonus_price));?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['deliveries']->value[0]->total_price));?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->total_price);?>
<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
	</a>
<?php } else { ?>
	<a href="./cart/" class="basket-field__link">
		<i class="basket-field__icon"></i>
		<span class="basket-field__count js-basket-count">0</span>
	</a>
<?php }?>
<?php }} ?>
