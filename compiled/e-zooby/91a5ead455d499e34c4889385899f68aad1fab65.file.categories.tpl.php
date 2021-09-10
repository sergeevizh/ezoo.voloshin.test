<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 15:41:28
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:791296138613a00f8be7462-23375590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91a5ead455d499e34c4889385899f68aad1fab65' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/categories.tpl',
      1 => 1628361951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '791296138613a00f8be7462-23375590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'brand' => 0,
    'keyword' => 0,
    'config' => 0,
    'cat' => 0,
    'itemBread' => 0,
    'page' => 0,
    'category_sidebar' => 0,
    's' => 0,
    'current_page_num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_613a00f8c935c5_94079992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_613a00f8c935c5_94079992')) {function content_613a00f8c935c5_94079992($_smarty_tpl) {?>


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
	<div class="wrapper">
		<div>
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
					<div class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
						<a class="breadcrumbs__link" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/brands" itemprop="item">
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
 <?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
			<?php }?>
		</div>

		<div class="page-wrapper">
			<?php $_smarty_tpl->tpl_vars['category_sidebar'] = new Smarty_variable(false, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['category']->value->subcategories) {?>
				<?php $_smarty_tpl->tpl_vars['category_sidebar'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value, null, 0);?>
			<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->path[count($_smarty_tpl->tpl_vars['category']->value->path)-2]->subcategories) {?>
				<?php $_smarty_tpl->tpl_vars['category_sidebar'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value->path[count($_smarty_tpl->tpl_vars['category']->value->path)-2], null, 0);?>
			<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->path[0]->subcategories) {?>
				<?php $_smarty_tpl->tpl_vars['category_sidebar'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value->path[0], null, 0);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['category_sidebar']->value) {?>
				<div class="home_page_prev_area"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/">Другие разделы</a></div>
			<div class="categories">
				<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_sidebar']->value->subcategories; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['s']->value->visible) {?>
				<div class="category-block">
						<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['s']->value->url;?>
" class="link-cat">
							<div class="bg-image">
								<?php if ($_smarty_tpl->tpl_vars['s']->value->image) {?>
									<img src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->categories_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['s']->value->image;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
									<?php } else { ?>
									<img src="../files/uploads/logo-mobile.png" alt="logo">
									<?php }?>
							</div>
							<div class="name-cat">
								<span class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span><?php if (isset($_smarty_tpl->tpl_vars['s']->value->products_count)) {?><span class="count_product_cat">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->products_count, ENT_QUOTES, 'UTF-8', true);?>
)</span>
							</div>
							<?php }?>
						</a>
				</div>
				<?php }?>
				<?php } ?>
			</div>
				<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
					<?php if ($_smarty_tpl->tpl_vars['page']->value) {?>
						<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

					<?php } elseif ($_smarty_tpl->tpl_vars['category']->value) {?>
						<?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>

					<?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
						<?php echo $_smarty_tpl->tpl_vars['brand']->value->description;?>

					<?php }?>
				<?php }?>
			<?php }?>
		</div>
	</div>
</section>
<?php }} ?>
