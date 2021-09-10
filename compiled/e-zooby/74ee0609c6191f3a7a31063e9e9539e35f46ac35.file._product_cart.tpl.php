<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:41:40
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_product_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11765327756139e4e43e2ea3-68399240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74ee0609c6191f3a7a31063e9e9539e35f46ac35' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_product_cart.tpl',
      1 => 1628361960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11765327756139e4e43e2ea3-68399240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addclass' => 0,
    'config' => 0,
    'product' => 0,
    'variants' => 0,
    'currency' => 0,
    'imageLazyLoad' => 0,
    'image' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e4e4432eb5_09034120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e4e4432eb5_09034120')) {function content_6139e4e4432eb5_09034120($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/Smarty/libs/plugins/modifier.truncate.php';
?><div class="cart js-cart<?php if ($_smarty_tpl->tpl_vars['addclass']->value) {?> <?php echo $_smarty_tpl->tpl_vars['addclass']->value;?>
<?php }?>">
	<div class="cart__inner">
		<div class="cart__content">
			<div class="cart__title h3">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
" class="cart__title-link"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></a>
			</div>

			<!--	<span style="display:none;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>-->

			
			<?php if ($_smarty_tpl->tpl_vars['product']->value->taste) {?>
			<div class="cart__taste"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->taste, ENT_QUOTES, 'UTF-8', true);?>
</div>
			<?php }?>
			<div class="cart__meta">
				<?php if ($_smarty_tpl->tpl_vars['product']->value->brand) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/brands/<?php echo $_smarty_tpl->tpl_vars['product']->value->brand_url;?>
" class="cart__meta-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->brand, ENT_QUOTES, 'UTF-8', true);?>
</a>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['product']->value->comments_count>0) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
#comments" class="comment-link cart__comment-link"><?php echo $_smarty_tpl->tpl_vars['product']->value->comments_count;?>
</a>
				<?php }?>
			</div>
			<div class="cart__description"><?php echo $_smarty_tpl->tpl_vars['product']->value->annotation;?>
</div>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['variants']->value===false) {?><?php }?>
		<div class="cart__price-field">
			<div class="cart__price-field-content">
				<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)==0) {?>
				<small>Нет в наличии</small>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['product']->value->price) {?>
				<!--<span class="cart__price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>-->
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['product']->value->compare_price>0) {?>
				<!--<span class="cart__old-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->compare_price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>-->
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['product']->value->compare_price>0) {?>
			<!--<div class="cart__price-field-discount">
				<span class="cart__discount">−<?php echo ceil(100-$_smarty_tpl->tpl_vars['product']->value->price/$_smarty_tpl->tpl_vars['product']->value->compare_price*100);?>
%</span>
			</div>-->
			<?php }?>

			

		</div>

		<div class="cart__image-field">
			<?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
" class="cart__image-link" itemscope
			   itemtype="http://schema.org/ImageObject">
				<?php if ($_smarty_tpl->tpl_vars['imageLazyLoad']->value) {?>
				<span style="display:none;"></span>
				<meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
					 data-echo="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,600,600);?>
" itemprop="contentUrl"
					 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" class="cart__imgae js-cart-image">
				<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
				<?php } else { ?>
				<meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
				<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,600,600);?>
" itemprop="contentUrl"
					 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" class="cart__imgae js-cart-image">
				<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
				<?php }?>
			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['product']->value->compare_price>0) {?>
			<div class="sticker cart__sticker">Акция</div>
			<?php }?>

		</div>
		<?php if (count($_smarty_tpl->tpl_vars['product']->value->images)>1) {?>
		<div class="cart__imgae-slider-field">
			<div class="cart__imgae-slider js-cart-thumbs">
				<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->images; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
				<div class="cart__imgae-slider-item js-cart-thumb<?php if ($_smarty_tpl->tpl_vars['image']->value->id==$_smarty_tpl->tpl_vars['product']->value->image->id) {?> is-active<?php }?>"
					 itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
						 data-echo="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,600,600);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
						 class="cart__imgae-slider-image js-cart-thumb-img" itemprop="contentUrl">
					<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
				</div>
				<?php } ?>
			</div>
		</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['variants']->value!==false) {?>
		<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)>=1) {?>
		<div class="product__variant-table product__variant-table-small">
			
			<div class="line-deliver-name">
				<div class="product__variant-cell product__variant-name for-desktop"></div>
				<div class="product__variant-cell product__variant-price">
					<span class="for-mobile name-variand-mobi"></span>
					<span class="price-span"></span><span
						class="text-deliver-name">online-заказ<br> на доставку</span><span class="text-deliver-name">online-заказ<br> на самовывоз</span>
				</div>
			</div>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			
			<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/cart" class="product__variant js-cart-basket-submit"
				  data-variant-name="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value->name,10);?>
"
				  data-variant-price-pickup="<?php if ($_smarty_tpl->tpl_vars['v']->value->sale['delivery']) {?><?php echo $_smarty_tpl->tpl_vars['v']->value->sale['delivery'];?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
<?php }?>"
				  data-variant-price-delivery="<?php if ($_smarty_tpl->tpl_vars['v']->value->sale['pickup']) {?><?php echo $_smarty_tpl->tpl_vars['v']->value->sale['pickup'];?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
<?php }?>">
				<input type="hidden" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
">
				<div class="product__variant-cell product__variant-name for-desktop">
					<?php if ($_smarty_tpl->tpl_vars['v']->value->name&&count($_smarty_tpl->tpl_vars['product']->value->variants)==1||count($_smarty_tpl->tpl_vars['product']->value->variants)>1) {?>
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value->name,6);?>

					<?php }?>
				</div>
				<div
					class="product__variant-cell product__variant-price<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?> product__variant-price-sale<?php }?>">
					<span class="for-mobile name-variand-mobi"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value->name,6);?>
</span><?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?><?php }?>
					<span class="price-span" content="<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
</span><span
						class="price-span not-background"
						content="<?php if ($_smarty_tpl->tpl_vars['v']->value->sale['delivery']) {?><?php echo $_smarty_tpl->tpl_vars['v']->value->sale['delivery'];?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['v']->value->sale['delivery']) {?><?php echo $_smarty_tpl->tpl_vars['v']->value->sale['delivery'];?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
<?php }?></span><span
						class="price-span not-background"
						content="<?php if ($_smarty_tpl->tpl_vars['v']->value->sale['pickup']) {?><?php echo $_smarty_tpl->tpl_vars['v']->value->sale['pickup'];?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['v']->value->sale['pickup']) {?><?php echo $_smarty_tpl->tpl_vars['v']->value->sale['pickup'];?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
<?php }?></span>
					<span style="display:none;">BYN</span>
				</div>
				<div class="product__variant-cell product__variant-amount">
					<div class="count-field js-count-field">
						<span class="count-field__control count-field__control_down js-count-field-down">-</span>
						<input type="number" class="count-field__val js-count-field-val" name="amount" value="1"
							   max="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
">
						<span class="count-field__control count-field__control_up js-count-field-up">+</span>
						<span class="for-mobile text-count">шт.</span>
					</div>
				</div>
				<div class="product__variant-cell product__variant-submit">
					<button type="submit" onclick="document.cart.submit();" class="btn btn_small basket-btn product__basket-btn js-cart-basket-btn">
					</button>
				</div>
			</form>
			
			<?php } ?>
		</div>
		<?php } else { ?>

		<?php }?>
		<?php }?>

		
	</div>
</div>










<?php }} ?>
