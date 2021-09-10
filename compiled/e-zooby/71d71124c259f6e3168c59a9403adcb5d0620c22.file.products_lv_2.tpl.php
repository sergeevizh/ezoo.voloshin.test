<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:47:40
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/products_lv_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6790898376139e64cd00148-91497398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d71124c259f6e3168c59a9403adcb5d0620c22' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/products_lv_2.tpl',
      1 => 1628361955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6790898376139e64cd00148-91497398',
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
    'category_prev_url' => 0,
    'category_prev_name' => 0,
    's' => 0,
    'url' => 0,
    'features' => 0,
    'current_page_num' => 0,
    'type' => 0,
    'sort' => 0,
    'sorts' => 0,
    'key' => 0,
    'name' => 0,
    'products' => 0,
    'products_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e64cd886d0_55011989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e64cd886d0_55011989')) {function content_6139e64cd886d0_55011989($_smarty_tpl) {?>


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

<section class="section section_bg section_catalog section-add"
		 <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
		 <?php if ($_smarty_tpl->tpl_vars['category']->value->background) {?>
	style="background: url(../<?php echo $_smarty_tpl->tpl_vars['config']->value->categories_background_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['category']->value->background;?>
) repeat;"
	<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->color) {?>
	style="background-color: #<?php echo $_smarty_tpl->tpl_vars['category']->value->color;?>
"
	<?php }?>
	<?php }?>
>
	<div class="catalog-header-mob">
		<div class="catalog-header-mob__field">
			<?php if ($_smarty_tpl->tpl_vars['category']->value->subcategories) {?>
			<button type="button" class="catalog-header-mob__link a js-sidebar-nav-block-link"><span class="catalog-header-mob__link-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></button>
			<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->path[count($_smarty_tpl->tpl_vars['category']->value->path)-2]) {?>
				<button type="button" class="catalog-header-mob__link catalog-header-mob__link_back a js-sidebar-nav-block-link"><span class="catalog-header-mob__link-text"><?php echo $_smarty_tpl->tpl_vars['category']->value->path[count($_smarty_tpl->tpl_vars['category']->value->path)-2]->name;?>
</span></button>
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
<?php $_smarty_tpl->tpl_vars['category_prev_url'] = new Smarty_variable('', null, 0);?>
<?php $_smarty_tpl->tpl_vars['category_prev_name'] = new Smarty_variable('', null, 0);?>
	<div class="wrapper">
		<div class="page-header">
			<div class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList">
				<div class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/" class="breadcrumbs__link" itemprop="item">
						<span itemprop="name">Главная</span>
					</a>
					<meta itemprop="position" content="1" />
				</div>
				<?php $_smarty_tpl->tpl_vars['itemBread'] = new Smarty_variable(2, null, 0);?>
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
								<?php $_smarty_tpl->tpl_vars['category_prev_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['cat']->value->url, null, 0);?>
								<?php $_smarty_tpl->tpl_vars['category_prev_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['cat']->value->name, null, 0);?>
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
				<h1 class="page-title"><?php if ($_smarty_tpl->tpl_vars['category']->value->h1_head) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->h1_head, ENT_QUOTES, 'UTF-8', true);?>
 <?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php }?>  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
			<?php }?>
		</div>
		<?php $_smarty_tpl->tpl_vars['category_sidebar'] = new Smarty_variable(false, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['category']->value->subcategories) {?>
			<?php $_smarty_tpl->tpl_vars['category_sidebar'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value, null, 0);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->path[count($_smarty_tpl->tpl_vars['category']->value->path)-2]->subcategories) {?>
			<?php $_smarty_tpl->tpl_vars['category_sidebar'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value->path[count($_smarty_tpl->tpl_vars['category']->value->path)-2], null, 0);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->path[0]->subcategories) {?>
			<?php $_smarty_tpl->tpl_vars['category_sidebar'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value->path[0], null, 0);?>
		<?php }?>
		<div class="page-wrapper js-page-wrapper products_lv_2">
			<div class="page-sidebar js-page-sidebar">
				<?php if ($_smarty_tpl->tpl_vars['category_sidebar']->value) {?>
					<div class="sidebar-nav-block js-sidebar-nav-block for-mobile-clear">
						<button type="button" class="sidebar-nav-block__close close js-sidebar-nav-block-close"></button>
						<div class="sidebar-nav-block__content">
							<div class="sidebar-nav">
								<div class="sidebar-nav__header">
									<span class="sidebar-nav__text"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['category_prev_url']->value;?>
" class="prev_cat_url prev_url_not"><?php echo $_smarty_tpl->tpl_vars['category_prev_name']->value;?>
</a>
								</div>
								<ul class="sidebar-nav__list">
									<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_sidebar']->value->subcategories; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['s']->value->visible&&$_smarty_tpl->tpl_vars['s']->value->hide!=true) {?>
										<li class="sidebar-nav__list-item">
											<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['s']->value->url;?>
" class="sidebar-nav__list-link">
												<span class="sidebar-nav__text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></a><?php if (isset($_smarty_tpl->tpl_vars['s']->value->products_count)) {?><span class="sidebar-nav__count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->products_count, ENT_QUOTES, 'UTF-8', true);?>
</span>
												<?php }?>
										</li>
										<?php }?>
									<?php } ?>
								</ul>
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

										<li class="sidebar-nav__list-item">
											<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="sidebar-nav__list-link">
												<span class="sidebar-nav__text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span><?php if (isset($_smarty_tpl->tpl_vars['s']->value->products_count)) {?><span class="sidebar-nav__count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->products_count, ENT_QUOTES, 'UTF-8', true);?>
</span>
												<?php }?>
											</a>
										</li>
									<?php } ?>
								</ul>

							</div>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['features']->value||count($_smarty_tpl->tpl_vars['category']->value->brands)>1) {?>
					<?php echo $_smarty_tpl->getSubTemplate ("_filter_lv_2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
			</div>

			<div class="page-content">
				<?php if ($_smarty_tpl->tpl_vars['category_sidebar']->value) {?>
					<div class="categories">
						<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_sidebar']->value->subcategories; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['s']->value->visible&&!$_smarty_tpl->tpl_vars['s']->value->hide) {?>
								<div class="category-block three-line">
									<div class="link-cat">
										<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['s']->value->url;?>
"  class="bg-image">
											<?php if ($_smarty_tpl->tpl_vars['s']->value->image) {?>
												<img src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->categories_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['s']->value->image;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
											<?php } else { ?>
												<img src="../files/uploads/logo-mobile.png" alt="logo">
											<?php }?>
										</a>
										<div class="name-cat">
											<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['s']->value->url;?>
" class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (isset($_smarty_tpl->tpl_vars['s']->value->products_count)) {?><span class="count_product_cat">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->products_count, ENT_QUOTES, 'UTF-8', true);?>
)</span><?php }?>
										</div>

									</div>
								</div>
							<?php }?>
						<?php } ?>
					</div>
				<?php }?>
				<div class="page-content__inner">
					<div class="catalog-header">
						<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>


						<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
						<?php if ($_smarty_tpl->tpl_vars['category']->value->banner) {?>
						<img src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->categories_banners_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['category']->value->banner;?>
"
							 alt="<?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
" style="max-width: 100%;margin-bottom: 50px;"/>
						<?php }?>
						<?php }?>
						<?php }?>
						<div class="sidebar-filter__header top-line-custom-lv-2">
							<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
								<div class="sidebar-filter__section sidebar-filter__section_category"><!--noindex-->
									<div class="filter-category js-filter-category">
										<?php if ($_smarty_tpl->tpl_vars['type']->value=='featured') {?>
											<button class="filter-category__link js-filter-category-link is-active">Хиты</button>
										<?php } else { ?>
											<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null,'_'=>null,'type'=>'featured'),$_smarty_tpl);?>
" class="filter-category__link js-filter-category-link" rel="nofollow">Хиты</a>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['type']->value=='actions') {?>
											<button class="filter-category__link js-filter-category-link is-active filter-category__link--actions">Акции</button>
										<?php } else { ?>
											<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null,'_'=>null,'type'=>'actions'),$_smarty_tpl);?>
" class="filter-category__link js-filter-category-link  filter-category__link--actions" rel="nofollow">Акции</a>
										<?php }?>
										<?php if (!$_smarty_tpl->tpl_vars['type']->value) {?>
											<button class="filter-category__link js-filter-category-link is-active">Все</button>
										<?php } else { ?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['category']->value->url;?>
" class="filter-category__link js-filter-category-link">Все</a>
										<?php }?>
									</div><!--/noindex-->
								</div>
							<?php }?>

							<div class="sidebar-filter__section sidebar-filter__section_sort">
								<div class="filter filter_mob-fix js-filter-sort-section">

									<?php $_smarty_tpl->tpl_vars['sorts'] = new Smarty_variable(array('position'=>'по популярности','budget'=>'по рейтингу','name'=>'по названию','cheap'=>'по цене, сначала дешевые','expensive'=>'по цене, сначала дорогие'), null, 0);?>

									<div class="filter__header">
										<span class="filter__title">Сортировать</span>
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
					<?php if ($_smarty_tpl->tpl_vars['products_count']->value==0) {?>Товары не найдены<?php }?>
					<?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


					<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
						<?php if ($_smarty_tpl->tpl_vars['page']->value) {?>
							<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

						<?php } elseif ($_smarty_tpl->tpl_vars['category']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['products_count']->value>0) {?>
								<?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>

							<?php }?>
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
