<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 14:27:34
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/products_lv_3_brand.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19552082336139efa6e51106-74492255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09dc473326aa79ffdd8152711bd23ba3e2fabcb5' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/products_lv_3_brand.tpl',
      1 => 1628361956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19552082336139efa6e51106-74492255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'brand' => 0,
    'keyword' => 0,
    'config' => 0,
    'results_categories' => 0,
    'cat' => 0,
    'itemBread' => 0,
    'page' => 0,
    'category_sidebar' => 0,
    'category_status' => 0,
    's' => 0,
    'url' => 0,
    'products' => 0,
    'current_page_num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139efa6efcc22_55686721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139efa6efcc22_55686721')) {function content_6139efa6efcc22_55686721($_smarty_tpl) {?>


<?php if ($_smarty_tpl->tpl_vars['category']->value&&$_smarty_tpl->tpl_vars['brand']->value) {?>
	<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/catalog/".((string)$_smarty_tpl->tpl_vars['category']->value->url)."/".((string)$_smarty_tpl->tpl_vars['brand']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['category']->value) {?>
	<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/catalog/".((string)$_smarty_tpl->tpl_vars['category']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
	<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/brands/".((string)$_smarty_tpl->tpl_vars['brand']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
	<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products?keyword=".$_tmp1, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php }?>
<section class="section section_bg section_catalog section-add">
	<div class="catalog-header-mob">
		<div class="catalog-header-mob__field">
			<?php if ($_smarty_tpl->tpl_vars['category']->value->subcategories) {?>
			<button type="button" class="catalog-header-mob__link a js-sidebar-nav-block-link"><span class="catalog-header-mob__link-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></button>
			<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->path[count($_smarty_tpl->tpl_vars['category']->value->path)-2]) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['category']->value->path[count($_smarty_tpl->tpl_vars['category']->value->path)-2]->url;?>
" class="catalog-header-mob__link catalog-header-mob__link_back">
					<span class="catalog-header-mob__link-text"><?php echo $_smarty_tpl->tpl_vars['category']->value->path[count($_smarty_tpl->tpl_vars['category']->value->path)-2]->name;?>
</span>
				</a>
			<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->path[0]) {?>
				<button type="button" class="catalog-header-mob__link catalog-header-mob__link_back a js-sidebar-nav-block-link"><span class="catalog-header-mob__link-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->path[0]->name, ENT_QUOTES, 'UTF-8', true);?>
</span></button>
			<?php } elseif ($_smarty_tpl->tpl_vars['results_categories']->value) {?>
				<button type="button" class="catalog-header-mob__link catalog-header-mob__link_back a js-sidebar-nav-block-link">
					<span class="catalog-header-mob__link-text">Категории</span>
				</button>
			<?php }?>
		</div>
		<div class="catalog-header-mob__field">
			<button type="button" class="catalog-header-mob__link a js-sidebar-filter-block-link">
				<span class="catalog-header-mob__link-text">Сортировать</span>
			</button>
		</div>
	</div>

	<div class="wrapper">
		<div class="page-header">
			<div class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList">
				<div class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/" class="breadcrumbs__link" itemprop="item">
						<span itemprop="name">Главная</span>
					</a>
					<meta itemprop="position" content="1" /><?php $_smarty_tpl->tpl_vars['itemBread'] = new Smarty_variable(2, null, 0);?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
					<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
?>
						<?php if ($_smarty_tpl->tpl_vars['cat']->last&&!$_smarty_tpl->tpl_vars['brand']->value) {?>
							<div class="breadcrumbs__item">
								<?php if ($_smarty_tpl->tpl_vars['cat']->value->h1_head) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->h1_head, ENT_QUOTES, 'UTF-8', true);?>
 <?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php }?>
							</div>
						<?php } else { ?>
						<div class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">

								<a class="breadcrumbs__link" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
" itemprop="item">
									<span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
								</a>
								<meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['itemBread']->value;?>
" /><?php $_smarty_tpl->tpl_vars['itemBread'] = new Smarty_variable($_smarty_tpl->tpl_vars['itemBread']->value+1, null, 0);?>

						</div>
						<?php }?>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['brand']->value) {?>
						<div class="breadcrumbs__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
					<?php }?>
				<?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
					<div class="breadcrumbs__item">
						<a class="breadcrumbs__link" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/brands" itemscope="" itemprop="itemListElement" itemtype="https://schema.org/ListItem">
							<span itemprop="name">Бренды</span>
						</a>
						<meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['itemBread']->value;?>
" /><?php $_smarty_tpl->tpl_vars['itemBread'] = new Smarty_variable($_smarty_tpl->tpl_vars['itemBread']->value+1, null, 0);?>
					</div>
					<div class="breadcrumbs__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
					<div class="breadcrumbs__item">Поиск</div>
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['keyword']->value) {?>
				<h1 class="page-title">Поиск <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>
			<?php } elseif ($_smarty_tpl->tpl_vars['page']->value) {?>
				<h1 class="page-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
			<?php } else { ?>
				<h1 class="page-title page-title__brand"><?php if ($_smarty_tpl->tpl_vars['category']->value->h1_head) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->h1_head, ENT_QUOTES, 'UTF-8', true);?>
 <?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php }?><?php if ($_smarty_tpl->tpl_vars['brand']->value->h1_head) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->h1_head, ENT_QUOTES, 'UTF-8', true);?>
 <?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php }?></h1>
			<?php }?>
		</div>
		<div class="page-wrapper js-page-wrapper">
			<div class="page-sidebar js-page-sidebar">
				<?php $_smarty_tpl->tpl_vars['category_sidebar'] = new Smarty_variable(false, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['category_status'] = new Smarty_variable('', null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['category']->value->subcategories) {?>
					<?php $_smarty_tpl->tpl_vars['category_sidebar'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value, null, 0);?>
				<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->path[count($_smarty_tpl->tpl_vars['category']->value->path)-2]->subcategories) {?>
					<?php $_smarty_tpl->tpl_vars['category_sidebar'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value->path[count($_smarty_tpl->tpl_vars['category']->value->path)-2], null, 0);?>
					<?php $_smarty_tpl->tpl_vars['category_status'] = new Smarty_variable(' not_category', null, 0);?>
				<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->path[0]->subcategories) {?>
					<?php $_smarty_tpl->tpl_vars['category_sidebar'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value->path[0], null, 0);?>
					<?php $_smarty_tpl->tpl_vars['category_status'] = new Smarty_variable(' not_category', null, 0);?>
				<?php }?>


				<?php if ($_smarty_tpl->tpl_vars['category_sidebar']->value) {?>
					<div class="sidebar-nav-block js-sidebar-nav-block">
						<button type="button" class="sidebar-nav-block__close close js-sidebar-nav-block-close"></button>
						<div class="sidebar-nav-block__content<?php echo $_smarty_tpl->tpl_vars['category_status']->value;?>
">
							<div class="sidebar-nav">
								<div class="sidebar-nav__header">
									<span class="sidebar-nav__text"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['category_sidebar']->value->url;?>
" class="prev_cat_url">
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_sidebar']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span><?php if (isset($_smarty_tpl->tpl_vars['category_sidebar']->value->products_count)) {?><span class="sidebar-nav__count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_sidebar']->value->products_count, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</span>
									<?php }?>
								</div>


							</div>
						</div>
					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['results_categories']->value) {?>
					<div class="sidebar-nav-block js-sidebar-nav-block">
						<button type="button" class="sidebar-nav-block__close close js-sidebar-nav-block-close"></button>
						<div class="sidebar-nav-block__content">
							<div class="sidebar-nav">
								<ul class="sidebar-nav__list">
									<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['config']->value->root_url)."/catalog/".((string)$_smarty_tpl->tpl_vars['s']->value->url), null, 0);?>
										<?php if ($_smarty_tpl->tpl_vars['s']->value->visible&&!$_smarty_tpl->tpl_vars['s']->value->hide) {?>
										<li class="sidebar-nav__list-item">
											<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="sidebar-nav__list-link">
												<span class="sidebar-nav__text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span><?php if (isset($_smarty_tpl->tpl_vars['s']->value->products_count)) {?><span class="sidebar-nav__count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->products_count, ENT_QUOTES, 'UTF-8', true);?>
</span>
												<?php }?>
											</a>
										</li>
										<?php }?>
									<?php } ?>
								</ul>

							</div>
						</div>
					</div>
				<?php }?>

					<?php echo $_smarty_tpl->getSubTemplate ("_filter_lv_3_brand.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>

			<div class="page-content">
				<div class="page-content__inner">
					<div class="catalog-header">
						
					</div>

					<div class="catalog js-catalog">
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
						<div class="catalog__item js-catalog-item">
							<?php echo $_smarty_tpl->getSubTemplate ("_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('imageLazyLoad'=>true), 0);?>

						</div>
						<?php } ?>
					</div>

					<?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


					<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
						<?php if ($_smarty_tpl->tpl_vars['page']->value) {?>
							<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

						<?php } elseif ($_smarty_tpl->tpl_vars['category']->value) {?>
							<?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>

						<?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
							<?php echo $_smarty_tpl->tpl_vars['brand']->value->description;?>

						<?php }?>
					<?php }?>

					<?php echo $_smarty_tpl->getSubTemplate ('_browsed_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


				</div>
			</div>
		</div>
	</div>
</section>
<?php }} ?>
