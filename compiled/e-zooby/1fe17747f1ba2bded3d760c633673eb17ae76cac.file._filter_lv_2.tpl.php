<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:47:40
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_filter_lv_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3245632916139e64cd91c26-30660344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe17747f1ba2bded3d760c633673eb17ae76cac' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_filter_lv_2.tpl',
      1 => 1628361958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3245632916139e64cd91c26-30660344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'type' => 0,
    'config' => 0,
    'sort' => 0,
    'sorts' => 0,
    'key' => 0,
    'name' => 0,
    'b' => 0,
    'brand_selected' => 0,
    'sub_cat' => 0,
    'sub' => 0,
    'b_name' => 0,
    'b_name_array' => 0,
    'title' => 0,
    'only_brand' => 0,
    'f_brand_link' => 0,
    'prices_ranges' => 0,
    'currency' => 0,
    'features' => 0,
    'f' => 0,
    'o' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e64cdecd10_00455504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e64cdecd10_00455504')) {function content_6139e64cdecd10_00455504($_smarty_tpl) {?><div class="sidebar-filter-block js-sidebar-filter-block">
	<button type="button" class="sidebar-filter-block__close close js-sidebar-filter-block-close"></button>
	<div class="sidebar-filter-block__content">
		<div class="sidebar-filter">
			<div class="sidebar-filter__header" style="display: none">
				<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
					<div class="sidebar-filter__section sidebar-filter__section_category"><!--noindex-->
						<div class="filter-category js-filter-category">
							<?php if ($_smarty_tpl->tpl_vars['type']->value=='featured') {?>
								<button class="filter-category__link js-filter-category-link is-active">????????</button>
							<?php } else { ?>
								<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null,'_'=>null,'type'=>'featured'),$_smarty_tpl);?>
" class="filter-category__link js-filter-category-link" rel="nofollow">????????</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['type']->value=='actions') {?>
								<button class="filter-category__link js-filter-category-link is-active">??????????</button>
							<?php } else { ?>
								<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null,'_'=>null,'type'=>'actions'),$_smarty_tpl);?>
" class="filter-category__link js-filter-category-link" rel="nofollow">??????????</a>
							<?php }?>
							<?php if (!$_smarty_tpl->tpl_vars['type']->value) {?>
								<button class="filter-category__link js-filter-category-link is-active">??????</button>
							<?php } else { ?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['category']->value->url;?>
" class="filter-category__link js-filter-category-link">??????</a>
							<?php }?>
						</div><!--/noindex-->
					</div>
				<?php }?>

				<div class="sidebar-filter__section sidebar-filter__section_sort">
					<div class="filter filter_mob-fix js-filter-sort-section">

						<?php $_smarty_tpl->tpl_vars['sorts'] = new Smarty_variable(array('position'=>'???? ????????????????????????','budget'=>'???? ????????????????','name'=>'???? ????????????????','cheap'=>'???? ????????, ?????????????? ??????????????','expensive'=>'???? ????????, ?????????????? ??????????????'), null, 0);?>

						<div class="filter__header">
							<span class="filter__title">??????????????????????</span>
							<span class="filter__header-info js-filter-sort-section-info"><?php echo $_smarty_tpl->tpl_vars['sorts']->value[$_smarty_tpl->tpl_vars['sort']->value];?>
</span>
						</div>

						<div class="filter__content">
							<button type="button" class="filter__content-close close"></button>
							<div class="filter__content-inner">
								<div class="filter-sort js-filter-sort">
									<div class="filter-sort__title"><?php echo $_smarty_tpl->tpl_vars['sorts']->value[$_smarty_tpl->tpl_vars['sort']->value];?>
</div>
									<div class="filter-sort__dropdown">
										<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
											<div class="filter-sort__dropdown-item">
												<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>$_smarty_tpl->tpl_vars['key']->value,'page'=>null),$_smarty_tpl);?>
" class="filter-sort__dropdown-link<?php if ($_smarty_tpl->tpl_vars['sort']->value==$_smarty_tpl->tpl_vars['key']->value) {?> is-active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<form id="filter" action="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['category']->value->url;?>
" method="get" class="js-filter-form">


				<?php if (count($_smarty_tpl->tpl_vars['category']->value->brands)>1) {?>
					<?php $_smarty_tpl->tpl_vars['brand_selected'] = new Smarty_variable(array(), null, 0);?>
					<?php if ($_GET['brand']) {?>
						<?php $_smarty_tpl->tpl_vars['brand_selected'] = new Smarty_variable(array_values($_GET['brand']), null, 0);?>
					<?php }?>
					<div class="sidebar-filter__section">
						<div class="filter filter_mob-fix js-filter-brands-section">
							<div class="filter__header">
								<span class="filter__title">????????????</span>
								<span class="filter__header-info js-filter-brands-section-info"><?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->brands; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?><?php if (in_array($_smarty_tpl->tpl_vars['b']->value->id,$_smarty_tpl->tpl_vars['brand_selected']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
, <?php }?><?php } ?></span>
							</div>
							<div class="filter__content">
								<button type="button" class="filter__content-close close"></button>
								<div class="filter__content-inner">
									<div class="filter-check-list js-filter-check-list">
										<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->brands; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>

											<div class="filter-check-list__row">
												<div class="check-row">
													<label>
														<input type="checkbox" class="js-styler js-filter-brands-checkbox" name="brand[]" value="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['b']->value->id,$_smarty_tpl->tpl_vars['brand_selected']->value)) {?> checked<?php }?>>

														<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
															<?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->tpl_vars['sub']->value->name, null, 0);?>

															<?php $_smarty_tpl->tpl_vars["b_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['b']->value->name, null, 0);?>
															<?php $_smarty_tpl->tpl_vars["b_name_array"] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['b_name']->value), null, 0);?>
															<?php $_smarty_tpl->tpl_vars["only_brand"] = new Smarty_variable($_smarty_tpl->tpl_vars['b_name_array']->value[0], null, 0);?>
															<?php if (strpos($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl->tpl_vars['only_brand']->value)) {?>
																<?php $_smarty_tpl->tpl_vars["f_brand_link"] = new Smarty_variable($_smarty_tpl->tpl_vars['sub']->value->url, null, 0);?>
																<?php break 1?>
															<?php } else { ?>
																<?php $_smarty_tpl->tpl_vars["f_brand_link"] = new Smarty_variable('', null, 0);?>
															<?php }?>
														<?php } ?>

														<?php if ($_smarty_tpl->tpl_vars['f_brand_link']->value!='') {?>
															<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['f_brand_link']->value;?>
" onclick="return false;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
														<?php } else { ?>
															<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
														<?php }?>

													</label>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }?>

				<?php if (($_smarty_tpl->tpl_vars['prices_ranges']->value->min_price<$_smarty_tpl->tpl_vars['prices_ranges']->value->max_price)&&$_smarty_tpl->tpl_vars['prices_ranges']->value->max_price>1) {?>

					<div class="sidebar-filter__section">
						<div class="filter filter_mob-fix js-filter-price-section">
							<div class="filter__header">
								<span class="filter__title">????????<span class="mobile-hidden">, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
								<span class="filter__header-info js-filter-price-section-info">
									???? <span class="js-filter-price-section-info-min"><?php echo floor($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['prices_ranges']->value->min_price,null,false));?>
</span>
									???? <span class="js-filter-price-section-info-max"><?php echo ceil($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['prices_ranges']->value->max_price,null,false));?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

								</span>
							</div>
							<div class="filter__content">
								<button type="button" class="filter__content-close close"></button>
								<div class="filter__content-inner">
									<div class="filter-range js-filter-price">
										<div class="filter-range__val">
											<span class="filter-range__val-min js-filter-price-min"></span>
											<span class="filter-range__val-line">???</span>
											<span class="filter-range__val-max js-filter-price-max"></span>
										</div>
										<div class="filter-range__content">
											<div class="filter-range__main">
												<div class="range js-filter-price-range" data-min="<?php echo floor($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['prices_ranges']->value->min_price,null,false));?>
" data-max="<?php echo ceil($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['prices_ranges']->value->max_price,null,false));?>
" data-values="[<?php if ($_GET['min_price']) {?><?php echo $_GET['min_price'];?>
<?php } else { ?><?php echo floor($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['prices_ranges']->value->min_price,null,false));?>
<?php }?>, <?php if ($_GET['max_price']) {?><?php echo $_GET['max_price'];?>
<?php } else { ?><?php echo ceil($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['prices_ranges']->value->max_price,null,false));?>
<?php }?>]" data-step="1"></div>
											</div>
											<span class="filter-range__content-min">???? <?php echo floor($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['prices_ranges']->value->min_price,null,false));?>
</span>
											<span class="filter-range__content-max">???? <?php echo ceil($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['prices_ranges']->value->max_price,null,false));?>
</span>
										</div>
										<input class="js-filter-input-price-min" type="hidden" name="min_price" value="<?php if ($_GET['min_price']) {?><?php echo $_GET['min_price'];?>
<?php } else { ?><?php echo floor($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['prices_ranges']->value->min_price,null,false));?>
<?php }?>">
										<input class="js-filter-input-price-max" type="hidden" name="max_price" value="<?php if ($_GET['max_price']) {?><?php echo $_GET['max_price'];?>
<?php } else { ?><?php echo ceil($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['prices_ranges']->value->max_price,null,false));?>
<?php }?>">
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
					<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
						<div class="sidebar-filter__section">
							<div class="filter filter_mob-fix js-filter-capacity-section">
								<div class="filter__header">
									<span class="filter__title" data-feature="<?php echo $_smarty_tpl->tpl_vars['f']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
</span>
									<span class="filter__header-info js-filter-capacity-section-info"><?php echo $_GET[$_smarty_tpl->tpl_vars['key']->value];?>
</span>
								</div>
								<div class="filter__content">
									<button type="button" class="filter__content-close close"></button>
									<div class="filter__content-inner">
										<select class="filter-select js-styler js-filter-capacity" name="<?php echo $_smarty_tpl->tpl_vars['f']->value->id;?>
" >
											<option value=""<?php if (!$_GET[$_smarty_tpl->tpl_vars['key']->value]) {?> selected<?php }?>>??????</option>
											<?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f']->value->options; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['o']->value->value;?>
"<?php if ($_GET[$_smarty_tpl->tpl_vars['key']->value]==$_smarty_tpl->tpl_vars['o']->value->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php }?>

				<a href="#" class="sidebar-filter__tooltip js-sidebar-filter-tooltip">
					<?php echo $_smarty_tpl->getSubTemplate ("_filter_tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</a>
				<div class="align-center" style="display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-webkit-box-pack: justify;-ms-flex-pack: justify;justify-content: space-between">
					<button class="btn" type="submit">??????????????????</button>
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['category']->value->url;?>
" rel="nofollow" class="reset">????????????????</a>
				</div>

			</form>
		</div>
	</div>

	<div class="sidebar-filter-block__footer">
		<a href="#" class="btn btn_border js-sidebar-filter-tooltip">
			<?php echo $_smarty_tpl->getSubTemplate ("_filter_tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</a>
	</div>
</div>
<?php }} ?>
