<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:40:40
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_header_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13447669486139e4a8c36ba1-84769786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6940ce7cbd44c9dd10bdc5125bfb36e8b82c8e62' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_header_nav.tpl',
      1 => 1628361959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13447669486139e4a8c36ba1-84769786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'c' => 0,
    'config' => 0,
    'colom' => 0,
    'max_colom' => 0,
    'subnav' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e4a8c54592_26976747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e4a8c54592_26976747')) {function content_6139e4a8c54592_26976747($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
<div class="header__nav js-header-nav">
	<div class="wrapper">
		<div class="header__nav-content">
			<span class="nav-overlay nav-overlay_left js-nav-left"></span>
			<span class="nav-overlay nav-overlay_right js-nav-right"></span>
			<nav class="nav js-nav">
				<ul class="nav__list js-nav-list" itemscope="itemscope" itemtype="http://www.schema.org/SiteNavigationElement">
					<li class="nav__item nav__item_mobile">
						<a href="#" class="nav__link js-subnav-link"  itemprop="url"><span class="nav__link-text" itemprop="name">Каталог</span></a>
					</li>
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
							<li class="nav__item">
								<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" itemprop="url" class="nav__link" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories) {?> data-dropdown="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"<?php }?>><span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></a>
							</li>
						<?php }?>
					<?php } ?>
				</ul>
			</nav>
		</div>
		<div class="subnav-block js-subnav-block">
			<div class="subnav-block__header">
				<div class="subnav-block__title">Каталог</div>
				<button class="subnav-block__close js-subnav-block-close"></button>
			</div>
			<div class="subnav-block__content">
			<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['c']->value->visible&&$_smarty_tpl->tpl_vars['c']->value->subcategories) {?>
					<div class="subnav-block__item" data-dropdown="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
						<div class="wrapper">
								<div class="subnav-block__item-title">
									<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" class="subnav-block__item-title-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</div>
							<div class="subnav">
								<?php $_smarty_tpl->tpl_vars['colom'] = new Smarty_variable(4, null, 0);?>
								<?php $_smarty_tpl->tpl_vars['max_colom'] = new Smarty_variable(ceil(count($_smarty_tpl->tpl_vars['c']->value->subcategories)/$_smarty_tpl->tpl_vars['colom']->value), null, 0);?>

								<?php  $_smarty_tpl->tpl_vars['subnav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subnav']->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['c']->value->subcategories,$_smarty_tpl->tpl_vars['max_colom']->value,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subnav']->key => $_smarty_tpl->tpl_vars['subnav']->value) {
$_smarty_tpl->tpl_vars['subnav']->_loop = true;
?>

									<div class="subnav__col">
										<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subnav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
										<div class="subnav__nav">
											<div class="subnav__nav-title">
												<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['sub']->value->url;?>
" class="subnav__nav-title-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
											</div>
										</div>
										<?php } ?>
									</div>
								<?php } ?>
								</div>
							</div>
						</div>
					<?php } else { ?>
						<div class="subnav-block__item">
							<div class="wrapper">
								<div class="subnav-block__item-title">
									<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" class="subnav-block__item-title-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
							</div>
						</div>
					</div>
				    <?php }?>
				<?php } ?>
            </div>
        </div>
    </div>
</div>
<?php }?>
<?php }} ?>
