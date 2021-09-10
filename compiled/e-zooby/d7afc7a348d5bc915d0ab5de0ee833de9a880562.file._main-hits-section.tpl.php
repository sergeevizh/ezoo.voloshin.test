<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:41:29
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_main-hits-section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18110514026139e4d9434875-36151695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7afc7a348d5bc915d0ab5de0ee833de9a880562' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_main-hits-section.tpl',
      1 => 1628361960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18110514026139e4d9434875-36151695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'featured_products' => 0,
    'featured_products_first_three' => 0,
    'featured_product_first_three' => 0,
    'featured_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e4d94453d3_78463696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e4d94453d3_78463696')) {function content_6139e4d94453d3_78463696($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0][0]->get_featured_products_plugin(array('var'=>'featured_products','limit'=>20,'sort'=>'rand'),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['featured_products']->value) {?>
	<section class="section hits-section section-add">
		<div class="wrapper">
			<h2 class="section__title hits-section__title">Хиты продаж</h2>
		</div>

		<div class="hits">
			<?php $_smarty_tpl->tpl_vars['featured_products_first_three'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['featured_products']->value,0,3), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['featured_products_first_three']->value) {?>
				<div class="hits__main js-hits-main for-desktop">
					<?php  $_smarty_tpl->tpl_vars['featured_product_first_three'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featured_product_first_three']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_products_first_three']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['featured_product_first_three']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['featured_product_first_three']->iteration=0;
 $_smarty_tpl->tpl_vars['featured_product_first_three']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['featured_product_first_three']->key => $_smarty_tpl->tpl_vars['featured_product_first_three']->value) {
$_smarty_tpl->tpl_vars['featured_product_first_three']->_loop = true;
 $_smarty_tpl->tpl_vars['featured_product_first_three']->iteration++;
 $_smarty_tpl->tpl_vars['featured_product_first_three']->index++;
 $_smarty_tpl->tpl_vars['featured_product_first_three']->first = $_smarty_tpl->tpl_vars['featured_product_first_three']->index === 0;
 $_smarty_tpl->tpl_vars['featured_product_first_three']->last = $_smarty_tpl->tpl_vars['featured_product_first_three']->iteration === $_smarty_tpl->tpl_vars['featured_product_first_three']->total;
?>
					<div class="hits__main-item<?php if ($_smarty_tpl->tpl_vars['featured_product_first_three']->first) {?> hits__main-item_prev<?php } elseif ($_smarty_tpl->tpl_vars['featured_product_first_three']->last) {?> hits__main-item_next<?php }?>">
						<?php echo $_smarty_tpl->getSubTemplate ("_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>false,'addclass'=>"cart_hit",'product'=>$_smarty_tpl->tpl_vars['featured_product_first_three']->value,'imageLazyLoad'=>true), 0);?>

					</div>
					<?php } ?>
				</div>

				<div class="hits__main js-hits-main-mobile for-mobile">
					<?php  $_smarty_tpl->tpl_vars['featured_product_first_three'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featured_product_first_three']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_products_first_three']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['featured_product_first_three']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['featured_product_first_three']->iteration=0;
 $_smarty_tpl->tpl_vars['featured_product_first_three']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['featured_product_first_three']->key => $_smarty_tpl->tpl_vars['featured_product_first_three']->value) {
$_smarty_tpl->tpl_vars['featured_product_first_three']->_loop = true;
 $_smarty_tpl->tpl_vars['featured_product_first_three']->iteration++;
 $_smarty_tpl->tpl_vars['featured_product_first_three']->index++;
 $_smarty_tpl->tpl_vars['featured_product_first_three']->first = $_smarty_tpl->tpl_vars['featured_product_first_three']->index === 0;
 $_smarty_tpl->tpl_vars['featured_product_first_three']->last = $_smarty_tpl->tpl_vars['featured_product_first_three']->iteration === $_smarty_tpl->tpl_vars['featured_product_first_three']->total;
?>
						<div class="actions__item">
						<?php echo $_smarty_tpl->getSubTemplate ("_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>true,'addclass'=>"cart_large",'product'=>$_smarty_tpl->tpl_vars['featured_product_first_three']->value,'imageLazyLoad'=>true), 0);?>

					</div>
					<?php } ?>
				</div>
			<?php }?>

			<?php if (count($_smarty_tpl->tpl_vars['featured_products']->value)>3) {?>
				<?php $_smarty_tpl->tpl_vars['featured_products'] = new Smarty_variable(array_splice($_smarty_tpl->tpl_vars['featured_products']->value,3), null, 0);?>
				<div class="hits__slider js-hits-slider for-desktop">
					<ul class="hits__slider-list">
						<?php  $_smarty_tpl->tpl_vars['featured_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featured_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featured_product']->key => $_smarty_tpl->tpl_vars['featured_product']->value) {
$_smarty_tpl->tpl_vars['featured_product']->_loop = true;
?>
							<li class="hits__slider-item">
								<?php echo $_smarty_tpl->getSubTemplate ("_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>false,'addclass'=>"cart_small",'product'=>$_smarty_tpl->tpl_vars['featured_product']->value,'imageLazyLoad'=>true), 0);?>

							</li>
						<?php } ?>
					</ul>
				</div>
			<?php }?>
		</div>
	</section>
<?php }?>
<?php }} ?>
