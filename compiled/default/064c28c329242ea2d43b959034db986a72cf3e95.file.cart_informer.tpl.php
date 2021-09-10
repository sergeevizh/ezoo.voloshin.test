<?php /* Smarty version Smarty-3.1.18, created on 2020-09-11 11:01:17
         compiled from "/var/www/www-root/data/www/e-zoo.by/design/default/html/cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8371329205f5b2ecda65b85-47427427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '064c28c329242ea2d43b959034db986a72cf3e95' => 
    array (
      0 => '/var/www/www-root/data/www/e-zoo.by/design/default/html/cart_informer.tpl',
      1 => 1569827546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8371329205f5b2ecda65b85-47427427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5f5b2ecda7c0b5_29903542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5b2ecda7c0b5_29903542')) {function content_5f5b2ecda7c0b5_29903542($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>
	В <a href="./cart/">корзине</a>
	<?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['cart']->value->total_products,'товар','товаров','товара');?>

	на <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->total_price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

<?php } else { ?>
	Корзина пуста
<?php }?>
<?php }} ?>
