<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:43:38
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_browsed_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16826392636139e55a5d1636-68114776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47568de86d8e1b1fd505eeef327c969793af2385' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_browsed_products.tpl',
      1 => 1628361957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16826392636139e55a5d1636-68114776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'browsed_products' => 0,
    'browsed_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e55a5d6b18_54843151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e55a5d6b18_54843151')) {function content_6139e55a5d6b18_54843151($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_browsed_products'][0][0]->get_browsed_products(array('var'=>'browsed_products','limit'=>20),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['browsed_products']->value) {?>
	<section class="section additional-catalog-section">
		<div class="section__title additional-catalog-section__title h2">Вы смотрели</div>
		<div class="additional-catalog js-additional-catalog">
			<?php  $_smarty_tpl->tpl_vars['browsed_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['browsed_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['browsed_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['browsed_product']->key => $_smarty_tpl->tpl_vars['browsed_product']->value) {
$_smarty_tpl->tpl_vars['browsed_product']->_loop = true;
?>
			<div class="additional-catalog__item">
				<?php echo $_smarty_tpl->getSubTemplate ('_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>false,'product'=>$_smarty_tpl->tpl_vars['browsed_product']->value,'imageLazyLoad'=>true), 0);?>

			</div>
			<?php } ?>
		</div>
	</section>
<?php }?>
<?php }} ?>
