<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:41:29
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_main-brands-section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20972439486139e4d9628a13-14767108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a75d4c7ed35e7f76c96c9efda4bc5df49c19609' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_main-brands-section.tpl',
      1 => 1628361959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20972439486139e4d9628a13-14767108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'all_brands' => 0,
    'config' => 0,
    'b' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e4d96327d3_09299762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e4d96327d3_09299762')) {function content_6139e4d96327d3_09299762($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_brands'][0][0]->get_brands_plugin(array('var'=>'all_brands','visible_is_main'=>1),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['all_brands']->value) {?>
	<section class="section section_bg main-brands-section for-desktop">
		<div class="wrapper">
			<div class="section__title main-brands-section__title h2">Бренды</div>
			<div class="slider-brands">
						<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
							<div class="main-brand__item" itemscope
								 itemtype="http://schema.org/ImageObject">
								<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/brands/<?php echo $_smarty_tpl->tpl_vars['b']->value->url;?>
" class="main-brands__link" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
									<meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
								<img src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->brands_images_dir;?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->image, ENT_QUOTES, 'UTF-8', true);?>
" itemprop="contentUrl" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></a>
								<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
							</div>
						<?php } ?>
				</div>
		</div>
	</section>
<?php }?>
<?php }} ?>
