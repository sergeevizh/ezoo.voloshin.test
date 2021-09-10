<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:40:40
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11568474136139e4a8959580-52245041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11127f68e31f2cda4a2dbb956fce65c408f2d317' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/product.tpl',
      1 => 1628361955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11568474136139e4a8959580-52245041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'categories' => 0,
    'c' => 0,
    'config' => 0,
    'category' => 0,
    'cat' => 0,
    'itemBread' => 0,
    'full_url' => 0,
    'image' => 0,
    'brand' => 0,
    'comments' => 0,
    'settings' => 0,
    'select_variant_id' => 0,
    'currency' => 0,
    'v' => 0,
    'body' => 0,
    'limit_visible_comments' => 0,
    'comment' => 0,
    'error' => 0,
    'comment_text' => 0,
    'comment_name' => 0,
    'related_products' => 0,
    'related_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e4a8abeea7_14058832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e4a8abeea7_14058832')) {function content_6139e4a8abeea7_14058832($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/Smarty/libs/plugins/modifier.date_format.php';
?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products/".((string)$_smarty_tpl->tpl_vars['product']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>


<section class="section section_bg section_product" itemscope itemtype="https://schema.org/Product">

	<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
		<div class="category-nav-block js-category-nav-block">
			<button type="button" class="category-nav-block__close close js-category-nav-block-close"></button>
			<div class="category-nav-block__content">
				<div class="category-nav">
					<ul class="category-nav__list">
						<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
								<li class="category-nav__list-item">
									<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" class="category-nav__list-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
							<?php }?>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	<?php }?>
	<div class="breadcrumbs-wrapper">
		<div class="wrapper">
			<div class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
				<div class="breadcrumbs__item hidden" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/" class="breadcrumbs__link" itemprop="item">
						<span itemprop="name">Главная</span>
					</a>
					<meta itemprop="position" content="1" /><?php $_smarty_tpl->tpl_vars['itemBread'] = new Smarty_variable(2, null, 0);?>
				</div>
				<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
					<div class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
" class="breadcrumbs__link" itemprop="item">
							<span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
						</a>
						<meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['itemBread']->value;?>
" /><?php $_smarty_tpl->tpl_vars['itemBread'] = new Smarty_variable($_smarty_tpl->tpl_vars['itemBread']->value+1, null, 0);?>
					</div>
				<?php } ?>
				<div class="breadcrumbs__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
			</div>
		</div>
	</div>

	<div class="catalog-header-mob">
		<div class="catalog-header-mob__field">
			<a href="<?php if ($_smarty_tpl->tpl_vars['cat']->value->url) {?> <?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php }?>" class="catalog-header-mob__link catalog-header-mob__link_back">
				<span class="catalog-header-mob__link-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
			</a>
		</div>

		<div class="catalog-header-mob__field">
			<button type="button" class="catalog-header-mob__link a js-category-nav-block-link">
				<span class="catalog-header-mob__link-text">Все разделы</span>
			</button>
		</div>

	</div>

	<section class="product-section">
		<div class="wrapper">
			<div class="product js-product">
				<a href="<?php echo $_smarty_tpl->tpl_vars['full_url']->value;?>
" itemprop="url" style="display: none"></a>
				<div class="product__image-field js-product-image-field">
					<div class="product-image js-product-image">
						<div class="product-image__main js-product-image-main">
							<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->images; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
								<div class="product-image__main-item" itemscope
									 itemtype="http://schema.org/ImageObject">
									<meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
									<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,600,600);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" class="product-image__main-img">
									<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							<?php } ?>
						</div>
						<div class="product-image__thumbs js-product-image-thumbs">
							<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->images; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
								<div class="product-image__thumbs-item" itemscope
							itemtype="http://schema.org/ImageObject">
									<meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
									<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
									<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,600,600);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" class="product-image__thumbs-img" itemprop="contentUrl">
								</div>
							<?php } ?>
						</div>
					</div>
				</div>

				<div class="product__content">
					<div class="product__content-inner">
						<div class="product__header">
							<h1 data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" itemprop="name" class="product__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
							
							<?php if ($_smarty_tpl->tpl_vars['brand']->value->image) {?>
								<div class="product__logo-field">
									<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value->url;?>
" class="product__logo-link" itemscope
									   itemtype="http://schema.org/ImageObject">
										<meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
										<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->brands_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['brand']->value->image;?>
"  itemprop="contentUrl" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" class="product__logo">
										<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
									</a>
								</div>
							<?php }?>
						</div>
						<div class="product__meta">
							
							<?php if ($_smarty_tpl->tpl_vars['brand']->value) {?>
								<a itemprop="brand" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value->url;?>
" class="product__meta-item">
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>

								</a>
							<?php }?>
							<?php if (count($_smarty_tpl->tpl_vars['comments']->value)==0) {?>
							<div class="product__meta-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
								<meta itemprop="bestRating" content="5">
								<meta itemprop="ratingValue" content="5">
								<meta itemprop="reviewCount" content="1">
							</div>
							<?php }?>
							<?php if (count($_smarty_tpl->tpl_vars['comments']->value)>0&&$_smarty_tpl->tpl_vars['product']->value->rating) {?>

								<div class="product__meta-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
									<meta itemprop="bestRating" content="5">
									<meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['product']->value->rating;?>
">
									<meta itemprop="reviewCount" content="<?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>
">

									<div class="b-rating">
										<div class="b-rating__inner">
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rating'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['name'] = 'rating';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['max'] = (int) 5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'] = ((int) -1) == 0 ? 1 : (int) -1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['total']);
?>
												<span class="b-rating__field<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['rating']['index']==ceil($_smarty_tpl->tpl_vars['product']->value->rating)) {?> is-active<?php }?>">
												<span class="b-rating__star"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rating']['index'];?>
</span>
											</span>
											<?php endfor; endif; ?>
										</div>
									</div>
								</div>

								<button type="button" data-href="#comments-section" class="product__comment-link js-target-link">
									<span class="product__comment-icon"><?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>
</span>
									<span class="product__comment-text"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier(count($_smarty_tpl->tpl_vars['comments']->value),'отзыв','отзывов','отзыва');?>
</span>
								</button>
							<?php } else { ?>
								<button type="button" data-href="#comments-section" class="product__add-comment-link js-target-link">Написать отзыв</button>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['settings']->value->license_button&&$_smarty_tpl->tpl_vars['brand']->value->license_link) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['brand']->value->license_link;?>
" style="margin-left: auto;" target="_blank"><?php echo $_smarty_tpl->tpl_vars['settings']->value->license_button;?>
</a>
							<?php }?>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['product']->value->pickup) {?>
							<div class="only-pickup">
								Только самовывоз
							</div>
						<?php }?>
						

<!--						TODO продукт с отображением как ветпрепарат-->
						<?php if (!count($_smarty_tpl->tpl_vars['product']->value->lecense)>=1) {?>
						<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)>=1) {?>
						<div class="product__variant-table redline-mod<?php if ($_smarty_tpl->tpl_vars['select_variant_id']->value) {?> variant-edition-select<?php }?>">
							<div class="product__variant variant_name_line">
								<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->name&&count($_smarty_tpl->tpl_vars['product']->value->variants)==1||count($_smarty_tpl->tpl_vars['product']->value->variants)>1) {?>
								<div class="product__variant-cell">
									<span>Товар</span>
								</div>
								<?php }?>
								<div class="product__variant-cell">
									<span>Цена, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
.</span>
								</div>
								<div class="product__variant-cell">
									<span>Online-заказ<br> на доставку</span>
								</div>
								<div class="product__variant-cell">
									<span>Online-заказ<br> на самовывоз</span>
								</div>
								<div class="product__variant-cell">
									<span>Количество</span>
								</div>
								<div class="product__variant-cell"></div>
							</div>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/cart" class="product__variant js-cart-basket-submit<?php if ($_smarty_tpl->tpl_vars['v']->value->id==$_smarty_tpl->tpl_vars['select_variant_id']->value) {?> select-variant<?php }?>" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
								<?php if ($_smarty_tpl->tpl_vars['v']->value->stock>0) {?>
								<link itemprop="availability" href="http://schema.org/InStock">
								<?php } else { ?>
								<link itemprop="availability" href="http://schema.org/SoldOut">
								<?php }?>
								<link itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['full_url']->value;?>
?variant=<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"/>
								<?php if ($_smarty_tpl->tpl_vars['v']->value->sale_end!='') {?>
								<meta itemprop="priceValidUntil"
									  content="<?php echo smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['v']->value->sale_end),'%Y-%m-%d');?>
">
								<?php }?>
								<input type="hidden" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
">
								<?php if ($_smarty_tpl->tpl_vars['v']->value->name&&count($_smarty_tpl->tpl_vars['product']->value->variants)==1||count($_smarty_tpl->tpl_vars['product']->value->variants)>1) {?>
								<div class="product__variant-cell product__variant-name">
									<?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>

								</div>
								<?php }?>
								<div class="product__variant-cell product__variant-price<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?> product__variant-price-sale<?php }?>">
									<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?><?php }?>
									<span itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
</span>
									<span itemprop="priceCurrency" style="display:none;">BYN</span>

								</div>
								<?php if ($_smarty_tpl->tpl_vars['v']->value->sale) {?>
								<div class="product__variant-cell product_sales">
									<?php if ($_smarty_tpl->tpl_vars['v']->value->sale['delivery']) {?>
									<b><?php echo $_smarty_tpl->tpl_vars['v']->value->sale['delivery'];?>
 руб.</b>
									<?php } else { ?>
									<b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
  руб.</b>
									<?php }?>
								</div>
								<div class="product__variant-cell product_sales sales_2">
									<?php if ($_smarty_tpl->tpl_vars['v']->value->sale['pickup']) {?>
									<b><?php echo $_smarty_tpl->tpl_vars['v']->value->sale['pickup'];?>
 руб.</b>
									<?php } else { ?>
									<b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
  руб.</b>
									<?php }?>
								</div>
								<?php } else { ?>
								<div class="product__variant-cell product_sales">

									<b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
  руб.</b>

								</div>
								<div class="product__variant-cell product_sales sales_2">

									<b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
  руб.</b>

								</div>
								<?php }?>
								<div class="product__variant-cell product__variant-amount">
									<span class="count-name-element">Количество:</span>
									<div class="count-field js-count-field">
										<span class="count-field__control count-field__control_down js-count-field-down">-</span>
										<input type="text" class="count-field__val js-count-field-val" name="amount" value="1" max="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
">
										<span class="count-field__control count-field__control_up js-count-field-up">+</span>
									</div>
								</div>
								<div class="product__variant-cell product__variant-submit">
									<button type="submit" class="btn btn_small basket-btn product__basket-btn js-product-basket-btn  <?php if ($_smarty_tpl->tpl_vars['v']->value->supply_dates&&$_smarty_tpl->tpl_vars['v']->value->stock<=0) {?>basket-btn--yellow<?php }?>"></button>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0&&$_smarty_tpl->tpl_vars['v']->value->sale_end!='') {?>
								<div class="sale-end">
									<b>*Акция действует до <?php echo $_smarty_tpl->tpl_vars['v']->value->sale_end;?>
</b>
								</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['v']->value->supply_dates&&$_smarty_tpl->tpl_vars['v']->value->supply_dates!=''&&$_smarty_tpl->tpl_vars['v']->value->stock<=0) {?>
								<div class="sale-end">
									<b>*Следующая поставка <?php echo $_smarty_tpl->tpl_vars['v']->value->supply_dates;?>
</b>
								</div>
								<?php }?>
							</form>
							<?php } ?>
						</div>
						<?php } else { ?>
						
						<div class="product__btn-field">
							
							<div class="product__available-info h2">Нет в наличии</div>
						</div>
						<?php }?>

						<!--TODO end-->
						<!-- TODO start+-->
						<?php } else { ?>
						<div class="product__variant-table redline-mod<?php if ($_smarty_tpl->tpl_vars['select_variant_id']->value) {?> variant-edition-select<?php }?>">
							<div class="product__variant variant_name_line">
								<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->name&&count($_smarty_tpl->tpl_vars['product']->value->variants)==1||count($_smarty_tpl->tpl_vars['product']->value->variants)>1) {?>
								<div class="product__variant-cell">
									<span>Товар</span>
								</div>
								<?php }?>
								<div class="product__variant-cell">
									<span>Цена, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
.</span>
								</div>
								<div class="product__variant-cell">
									<span>На доставку</span>
								</div>
								<div class="product__variant-cell">
									<span>Online-заказ<br> на самовывоз</span>
								</div>
							</div>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/cart" class="product__variant js-cart-basket-submit<?php if ($_smarty_tpl->tpl_vars['v']->value->id==$_smarty_tpl->tpl_vars['select_variant_id']->value) {?> select-variant<?php }?>" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
								<?php if ($_smarty_tpl->tpl_vars['v']->value->stock>0) {?>
								<link itemprop="availability" href="http://schema.org/InStock">
								<?php } else { ?>
								<link itemprop="availability" href="http://schema.org/SoldOut">
								<?php }?>
								<link itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['full_url']->value;?>
?variant=<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"/>
								<?php if ($_smarty_tpl->tpl_vars['v']->value->sale_end!='') {?>
								<meta itemprop="priceValidUntil"
									  content="<?php echo smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['v']->value->sale_end),'%Y-%m-%d');?>
">
								<?php }?>
								<input type="hidden" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
">
								<?php if ($_smarty_tpl->tpl_vars['v']->value->name&&count($_smarty_tpl->tpl_vars['product']->value->variants)==1||count($_smarty_tpl->tpl_vars['product']->value->variants)>1) {?>
								<div class="product__variant-cell product__variant-name">
									<?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>

								</div>
								<?php }?>
								<div class="product__variant-cell product__variant-price<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?> product__variant-price-sale<?php }?>">
									<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?><?php }?>
									<span itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
</span>
									<span itemprop="priceCurrency" style="display:none;">BYN</span>

								</div>
								<?php if ($_smarty_tpl->tpl_vars['v']->value->sale) {?>
								<div class="product__variant-cell product_sales">
									<?php if ($_smarty_tpl->tpl_vars['v']->value->sale['delivery']) {?>
									<b><?php echo $_smarty_tpl->tpl_vars['v']->value->sale['delivery'];?>
 руб.</b>
									<?php } else { ?>
									<b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
  руб.</b>
									<?php }?>
								</div>
								<div class="product__variant-cell product_sales sales_2">
									<?php if ($_smarty_tpl->tpl_vars['v']->value->sale['pickup']) {?>
									<b><?php echo $_smarty_tpl->tpl_vars['v']->value->sale['pickup'];?>
 руб.</b>
									<?php } else { ?>
									<b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
  руб.</b>
									<?php }?>
								</div>
								<?php } else { ?>
								<div class="product__variant-cell product_sales">

									<b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
  руб.</b>

								</div>
								<div class="product__variant-cell product_sales sales_2">

									<b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
  руб.</b>

								</div>
								<?php }?>
								<div class="product__variant-cell product__variant-amount" style="display: none">
									<div class="count-field js-count-field">
										<span class="count-field__control count-field__control_down js-count-field-down">-</span>
										<input type="text" class="count-field__val js-count-field-val" name="amount" value="1" max="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
">
										<span class="count-field__control count-field__control_up js-count-field-up">+</span>
									</div>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0&&$_smarty_tpl->tpl_vars['v']->value->sale_end!='') {?>
								<div class="sale-end">
									<b>*Акция действует до <?php echo $_smarty_tpl->tpl_vars['v']->value->sale_end;?>
</b>
								</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['v']->value->supply_dates&&$_smarty_tpl->tpl_vars['v']->value->supply_dates!=''&&$_smarty_tpl->tpl_vars['v']->value->stock<=0) {?>
								<div class="sale-end">
									<b>*Следующая поставка <?php echo $_smarty_tpl->tpl_vars['v']->value->supply_dates;?>
</b>
								</div>
								<?php }?>

								<button type="submit" class="btn btn_small product__basket-btn product__basket-btn_vetpreparat js-product-basket-btn  <?php if ($_smarty_tpl->tpl_vars['v']->value->supply_dates&&$_smarty_tpl->tpl_vars['v']->value->stock<=0) {?>basket-btn--yellow<?php }?>">Хочу доставку из ветаптеки</button>
							</form>

							<?php } ?>
						</div>
						<!-- TODO end -->
						<?php }?>



						


					
						<div class="product__variant"><small>Карты рассрочки</small></div>
						<div class="product__variant-table">
				<img  height="40" src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/cart-pokupok-min.png" style="margin-right: 5px;" alt="card">
				<img  height="40" src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/cart-smart-min.png" style="margin-right: 5px;" alt="card">
				<img  height="40" src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/cart-halva-min.png" style="margin-right: 5px;" alt="card">
										</div>
				<p><hr/></p>

						<?php if (trim(strip_tags($_smarty_tpl->tpl_vars['body']->value))!='') {?>
							<div id="product-description" class="product__description" itemprop="description">
								<div>
								<?php echo $_smarty_tpl->tpl_vars['body']->value;?>

								</div>
							</div>
							<button type="button" class="btn btn_border btn_small product__expand-link js-expand-link" data-expand-id="#product-description" data-alt-text="Скрыть описание">Показать полное описание</button>

						<?php } else { ?>
							<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
							
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="comments-section" id="comments-section">
		<div class="wrapper">
			<div class="comments-block">
				<div class="comments-block__title h2"><?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>
 отзывов</div>
				<div class="comments">
					<?php $_smarty_tpl->tpl_vars['limit_visible_comments'] = new Smarty_variable(3, null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
						<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['comment']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
 $_smarty_tpl->tpl_vars['comment']->index++;
?>
						<div class="comment<?php if ($_smarty_tpl->tpl_vars['comment']->index>=$_smarty_tpl->tpl_vars['limit_visible_comments']->value) {?> comment_hidden<?php }?>" itemprop="review" itemscope itemtype="http://schema.org/Review">
							<a name="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"></a>
							<div class="comment__header">
								<?php if ($_smarty_tpl->tpl_vars['comment']->value->rating) {?>
								<div class="comment__rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
									<meta itemprop="worstRating" content="1">
									<meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['comment']->value->rating;?>
">
									<meta itemprop="bestRating" content="5">
									<div class="b-rating">
										<div class="b-rating__inner">
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rating'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['name'] = 'rating';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['max'] = (int) 5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'] = ((int) -1) == 0 ? 1 : (int) -1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rating']['total']);
?>
											<span class="b-rating__field<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['rating']['index']==$_smarty_tpl->tpl_vars['comment']->value->rating) {?> is-active<?php }?>">
												<span class="b-rating__star"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rating']['index'];?>
</span>
											</span>
											<?php endfor; endif; ?>
										</div>
									</div>
								</div>
								<?php }?>

								<div class="comment__author" itemprop="author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (!$_smarty_tpl->tpl_vars['comment']->value->approved) {?><b>ожидает модерации</b><?php }?></div>
								<div class="comment__date">
									<meta itemprop="datePublished" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['comment']->value->date,'Y-m-d');?>
">
									<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value->date,"%d %m",'',"rus");?>

								</div>
							</div>
							<div class="comment__content" itemprop="description"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>
</div>
						</div>
						<?php } ?>
					<?php } else { ?>
						<p>Пока нет комментариев</p>
					<?php }?>
				</div>
				<?php if (count($_smarty_tpl->tpl_vars['comments']->value)>$_smarty_tpl->tpl_vars['limit_visible_comments']->value) {?>
					<button type="button" class="btn btn_border btn_small comments-more-link js-comments-more-link" data-alt-text="Скрыть">Показать еще <?php echo count($_smarty_tpl->tpl_vars['comments']->value)-$_smarty_tpl->tpl_vars['limit_visible_comments']->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier((count($_smarty_tpl->tpl_vars['comments']->value)-$_smarty_tpl->tpl_vars['limit_visible_comments']->value),'отзыв','отзывов','отзыва');?>
</button>
				<?php }?>
			</div>

			<div class="add-comments-block" id="add-comments-block">
				<div class="add-comments-block__title h2">Напишите свой отзыв</div>
				<form class="add-comments-block__form js-validation-form" method="post">
					<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
						<div class="error-message">
							<?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
								Неверно введена капча
							<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
								Введите имя
							<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_comment') {?>
								Введите комментарий
							<?php }?>
						</div>
					<?php }?>
					<div class="form-row">
						<div class="b-add-comment">
							<textarea name="text" class="b-add-comment__textarea" placeholder=" " required><?php echo $_smarty_tpl->tpl_vars['comment_text']->value;?>
</textarea>
							<div class="b-add-comment__rating">
								<div class="b-add-comment__rating-title">Ваша оценка</div>
								<div class="b-add-comment__rating-stars">
									<div class="b-rating">
										<div class="b-rating__inner">
											<label class="b-rating__field is-active">
												<input type="radio" name="rating" value="5" class="b-rating__radio" checked>
												<span class="b-rating__star">5</span>
											</label>
											<label class="b-rating__field">
												<input type="radio" name="rating" value="4" class="b-rating__radio">
												<span class="b-rating__star">4</span>
											</label>
											<label class="b-rating__field">
												<input type="radio" name="rating" value="3" class="b-rating__radio">
												<span class="b-rating__star">3</span>
											</label>
											<label class="b-rating__field">
												<input type="radio" name="rating" value="2" class="b-rating__radio">
												<span class="b-rating__star">2</span>
											</label>
											<label class="b-rating__field">
												<input type="radio" name="rating" value="1" class="b-rating__radio">
												<span class="b-rating__star">1</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="form-row">
						<label class="form-label">Ваше имя или псевдноним</label>
						<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['comment_name']->value;?>
" required>
					</div>
					<div class="form-row">
						<div class="g-recaptcha" data-sitekey="6Lcxgb8UAAAAACu24hMG5je1TfPKIc_lFOhMgvN_"></div>
					</div>
					<div class="form-btn-row">
						<button type="submit" class="btn btn_small" name="comment" value="Отправить отзыв">Отправить отзыв</button>
					</div>
				</form>
				<script src='https://www.google.com/recaptcha/api.js'></script>
			</div>
		</div>
	</section>



</section>
<?php if ($_smarty_tpl->tpl_vars['related_products']->value) {?>
	<section class="similiar-catalog-section">
		<div class="wrapper">
			<div class="similiar-catalog-section__title h2">С этим товаром также заказывают</div>
		</div>
		<div class="similiar-catalog js-similiar-catalog">
			<ul class="similiar-catalog__list">
				<?php  $_smarty_tpl->tpl_vars['related_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['related_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['related_product']->key => $_smarty_tpl->tpl_vars['related_product']->value) {
$_smarty_tpl->tpl_vars['related_product']->_loop = true;
?>
					<li class="similiar-catalog__item">
						<?php echo $_smarty_tpl->getSubTemplate ("_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['related_product']->value), 0);?>

					</li>
				<?php } ?>
			</ul>
		</div>
	</section>
<?php }?>
<?php }} ?>
