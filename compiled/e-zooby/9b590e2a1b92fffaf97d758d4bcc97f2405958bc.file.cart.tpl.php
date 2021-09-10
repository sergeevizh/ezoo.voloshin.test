<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:41:40
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5581420276139e4e4316f19-12604520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b590e2a1b92fffaf97d758d4bcc97f2405958bc' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/cart.tpl',
      1 => 1631172502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5581420276139e4e4316f19-12604520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'prize_cities' => 0,
    'cart' => 0,
    'product_sale_price' => 0,
    'user' => 0,
    'purchase' => 0,
    'image' => 0,
    'product' => 0,
    'currency' => 0,
    'city' => 0,
    'city_item' => 0,
    'deliveries' => 0,
    'delivery' => 0,
    'date_sale' => 0,
    'date_sale_item' => 0,
    'key_city_id' => 0,
    'sale_city' => 0,
    'nextdiscount' => 0,
    'error' => 0,
    'phone' => 0,
    'address' => 0,
    'flat_num' => 0,
    'region_short_name' => 0,
    'city_minsk' => 0,
    'city_minsk_area' => 0,
    'city_area' => 0,
    'self_discharge_time' => 0,
    'hide_time' => 0,
    'discount_hh_week' => 0,
    'price_hh_week' => 0,
    'discount_hh_ends' => 0,
    'price_hh_ends' => 0,
    'times' => 0,
    'key' => 0,
    'time' => 0,
    'payment_methods' => 0,
    'payment_method_id' => 0,
    'payment_method' => 0,
    'comment' => 0,
    'coupon_request' => 0,
    'coupon_error' => 0,
    'history' => 0,
    'featured_products' => 0,
    'featured_product' => 0,
    'date_and_time' => 0,
    'vetpreparaty' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e4e43dd573_90360388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e4e43dd573_90360388')) {function content_6139e4e43dd573_90360388($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Корзина", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<section class="section section_bg section_basket">
	
		
		
	<div class="wrapper">

		<div class="breadcrumbs">
			<div class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/" class="breadcrumbs__link" itemprop="item">
					<span itemprop="name">Главная</span>
				</a>
				<meta itemprop="position" content="1"/>
			</div>
			<div class="breadcrumbs__item">Корзина</div>
		</div>
		<h1 class="page-title">Корзина</h1>
		
		<div id="prize" style="padding-bottom: 10px;">
			<?php if (isset($_smarty_tpl->tpl_vars['prize_cities']->value)) {?>			
				<div id="prize_city" style="padding: 16px; border: ridge; margin-bottom: 20px; border-color: #3d3d3d; color: #3d3d3d;">
					<h3 style="font-size: 1.5rem; font-weight: bold;">Данный приз действителен в городах: </h3> 
					<p id="prize_city" style="font-size: 1.32rem;"><?php echo $_smarty_tpl->tpl_vars['prize_cities']->value;?>
</p>
				</div>
				<input type="text" id="prizes" name="prizes" style="font-size: 2.0rem; color: #3d3d3d; border: solid; border-color: #3d3d3d;" value="" disabled>
			<?php }?>
		</div>
		<section class="basket">
			<?php if ($_smarty_tpl->tpl_vars['cart']->value->purchases) {?>
			<div class="line-sale-text" style="display: none">Для получения скидки <span class="percent"></span>
				добавьте товаров на <span class="summ"></span> руб.
			</div>
			<script>
                console.log(<?php echo $_smarty_tpl->tpl_vars['product_sale_price']->value;?>
)
                var product_sale_price = JSON.parse('<?php echo $_smarty_tpl->tpl_vars['product_sale_price']->value;?>
');
			</script>
			<form method="post" name="cart" class="js-cart-form">
				<input type="hidden" id="suggestion_courier" name="suggestion_courier" value="0">
				<div class="basket__content">
					<div class="basket__list">
						<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
						<button class="w-show-checkboxes" type="button">
							Выбрать товары для заказа
						</button>
						<?php }?>
						<h3 class="basket__list-title">В
							корзине <?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['cart']->value->total_products,'товар','товаров','товара');?>
</h3>
						<div class="p-list">
							<?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->purchases; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
							<div class="p-item p-item_dynamic">
								<div class="p-item__category" style="display: none">
									<?php echo $_smarty_tpl->tpl_vars['purchase']->value->category;?>

								</div>
								<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
								<label for="checkbox-<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
"
									   class="w-check-label <?php if ($_smarty_tpl->tpl_vars['purchase']->value->check==1) {?>checked<?php }?>"
									   data-checkbox="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
"></label>
								<?php }?>
								<div class="p-item__inner">
									<div class="p-item__image-block">
										<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first'][0][0]->first_modifier($_smarty_tpl->tpl_vars['purchase']->value->product->images), null, 0);?>
										<?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
										<a class="p-item__image-block-content"
										   href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
"
										   itemscope
										   itemtype="http://schema.org/ImageObject">
											<meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
											<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,300,300);?>
"
												 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
"
												 class="p-item__image" itemprop="contentUrl"
												 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
											<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
										</a>
										<?php }?>
									</div>
									<div class="p-item__content-block">
										<h3 class="p-item__title">
											<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
											<div class="p-item__meta">
												<?php if ($_smarty_tpl->tpl_vars['purchase']->value->product->brand) {?>
												<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/brands/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->brand_url;?>
"
												   class="p-item__meta-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->brand, ENT_QUOTES, 'UTF-8', true);?>
</a>
												
												
												<?php }?>
												
											</div>
											<span class="p-item__title-variant"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
										</h3>
										<div class="p-item__description"><?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->annotation;?>
</div>
									</div>
									<!--									TODO start +-->
									<div class="p-item__price-block<?php if (!$_smarty_tpl->tpl_vars['purchase']->value->variant->compare_price&&$_smarty_tpl->tpl_vars['purchase']->value->check==1) {?> dinamic_price<?php }?>"
										 data-id-product="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
">
										<div class="p-item__price-field bottom-padd-10">
											<div class="p-item__price-field-content<?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->compare_price>0) {?> p-item__price-field-content-sale<?php }?>">
												<div class="p-item__price">
													<div class="left-price">Цена:</div>

													<div class="right-price default-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->variant->price));?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</div>
												</div>
											</div>
										</div>
										<?php if (!$_smarty_tpl->tpl_vars['purchase']->value->variant->compare_price) {?>
										<div class="p-item__price-field">
											<div class="p-item__price-field-content">
												<div class="p-item__price sale-price-product">
													<div class="left-price">Со скидкой:</div>
													<div class="sale_value right-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->variant->price));?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</div>
												</div>
												<div class="panel-percent">
													<div class="sale-percent">Моя скидка:-%</div>
												</div>
											</div>
										</div>
										<?php }?>
										<div class="p-item__count-field bottom-padd-10">
											<div class="left-price">Количество:</div>
											<div class="right-price-count count-field js-count-field">
												<span class="count-field__control count-field__control_down js-count-field-down">-</span>
												<input type="text"
													   class="count-field__val js-count-field-val kol"
													   name="amounts[<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
]"
													   value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
"
													   
													   defaultVal="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
"
													   data-max="<?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->stock==0) {?>1000<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->stock;?>
<?php }?>"
												>
												<span class="count-field__control count-field__control_up js-count-field-up">+</span>
											</div>
										</div>
										<div class="p-item__price-field">
											<div class="p-item__price-field-content">
												<div class="p-item__price">
													<div class="left-price"><strong>Сумма:</strong></div>
													<div class="final-summ right-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->variant->price*$_smarty_tpl->tpl_vars['purchase']->value->amount));?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</div>
												</div>
											</div>
										</div>
									</div>


								</div>
								<div class="p-item__remove-block">
									<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/cart/remove/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
"
									   class="p-item__remove-link"></a>
								</div>
							</div>
							<?php } ?>
							<!--							TODO end-->

						</div>
					</div>
				</div>
				<div class="basket__aside">
					<div class="order-block">
						<div class="order-block__form">
							<?php if ($_smarty_tpl->tpl_vars['city']->value) {?>
							<div class="block-city order-block__row">
								<select id="current-city-name" name="city" class="order-block__field js-city"
										required>
									<option value=>Выберите город</option>
									
									<?php  $_smarty_tpl->tpl_vars['city_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city_item']->key => $_smarty_tpl->tpl_vars['city_item']->value) {
$_smarty_tpl->tpl_vars['city_item']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['city_item']->value['city_id'];?>
"
											data-region_id="<?php echo $_smarty_tpl->tpl_vars['city_item']->value['region_id'];?>
"
											<?php if (($_smarty_tpl->tpl_vars['city_item']->value['delivery'][1]['active']=='1')) {?>data-active-deliver-1="1"
									data-city-min-1="<?php echo $_smarty_tpl->tpl_vars['city_item']->value['delivery'][1]['city_min'];?>
"<?php }?>
									<?php if (($_smarty_tpl->tpl_vars['city_item']->value['delivery'][2]['active']=='1')) {?>data-active-deliver-2="1" data-city-min-2="<?php echo $_smarty_tpl->tpl_vars['city_item']->value['delivery'][2]['city_min'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_item']->value['city_name'];?>
</option>
									<?php } ?>
								</select>
							</div>
							<?php }?>
							<div class="order-block__header" style="display: none">
								<div class="order-block__header-inner">
									<?php if ($_smarty_tpl->tpl_vars['deliveries']->value) {?>
									<div class="checklist deliver_modify">
										<script>
                                            var date_sale = new Array();
										</script>
										<?php  $_smarty_tpl->tpl_vars['delivery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['delivery']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->key => $_smarty_tpl->tpl_vars['delivery']->value) {
$_smarty_tpl->tpl_vars['delivery']->_loop = true;
 $_smarty_tpl->tpl_vars['delivery']->index++;
 $_smarty_tpl->tpl_vars['delivery']->first = $_smarty_tpl->tpl_vars['delivery']->index === 0;
?>
										<script>
                                            date_sale[<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
] = new Array();
                                            <?php  $_smarty_tpl->tpl_vars['date_sale_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date_sale_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['date_sale']->value[$_smarty_tpl->tpl_vars['delivery']->value->id]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date_sale_item']->key => $_smarty_tpl->tpl_vars['date_sale_item']->value) {
$_smarty_tpl->tpl_vars['date_sale_item']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['date_sale_item']->value) {?>
                                            date_sale[<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
].push([<?php echo $_smarty_tpl->tpl_vars['date_sale_item']->value[0];?>
,<?php echo $_smarty_tpl->tpl_vars['date_sale_item']->value[1];?>
,<?php echo $_smarty_tpl->tpl_vars['date_sale_item']->value[2]-1;?>
,<?php echo $_smarty_tpl->tpl_vars['date_sale_item']->value[3];?>
,<?php echo $_smarty_tpl->tpl_vars['date_sale_item']->value[4];?>
,<?php echo $_smarty_tpl->tpl_vars['date_sale_item']->value[5];?>
]);
                                            <?php }?>
                                                <?php } ?>
										</script>
										<label class="checklist__row data-id-deliver-<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
">
											<input type="radio"
												   data-payments='<?php echo json_encode($_smarty_tpl->tpl_vars['delivery']->value->payments);?>
'
												   data-percent='<?php echo $_smarty_tpl->tpl_vars['delivery']->value->discount_percent;?>
'
												   data-discount-for-order="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['delivery']->value->discount_for_order));?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
"
												   data-discount-for-order-not="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['delivery']->value->discount_for_order));?>
"
												   data-total-price-check="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['delivery']->value->total_price);?>
"
												   data-total-price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['delivery']->value->total_price);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
"
												   data-price-sum="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->total_without_discount);?>
"
												   class="checklist__input js-styler js-change-delivery"
												   name="delivery_id" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"
												   <?php if ($_smarty_tpl->tpl_vars['delivery']->value->id==1) {?>checked<?php } elseif ($_smarty_tpl->tpl_vars['delivery']->first) {?>required<?php }?>
											<?php  $_smarty_tpl->tpl_vars['sale_city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sale_city']->_loop = false;
 $_smarty_tpl->tpl_vars['key_city_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery']->value->sale_city; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sale_city']->key => $_smarty_tpl->tpl_vars['sale_city']->value) {
$_smarty_tpl->tpl_vars['sale_city']->_loop = true;
 $_smarty_tpl->tpl_vars['key_city_id']->value = $_smarty_tpl->tpl_vars['sale_city']->key;
?>
											data-city-percent-<?php echo $_smarty_tpl->tpl_vars['key_city_id']->value;?>
='<?php echo $_smarty_tpl->tpl_vars['sale_city']->value['discount_percent'];?>
'
											data-city-total_price-<?php echo $_smarty_tpl->tpl_vars['key_city_id']->value;?>
='<?php echo $_smarty_tpl->tpl_vars['sale_city']->value['total_price'];?>
'
											data-city-sale-<?php echo $_smarty_tpl->tpl_vars['key_city_id']->value;?>
='<?php echo $_smarty_tpl->tpl_vars['sale_city']->value['sale'];?>
'
											<?php } ?>
											data-next-percent="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->next_percent;?>
"
											data-next-price="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->next_price;?>
"
											>
											<span class="checklist__text">
															<?php if ($_smarty_tpl->tpl_vars['delivery']->value->id==2) {?>
																<div class="order-block__header-row order-block__header-row_second discount-cart-info">
																	<div class="order-block__header-title">Самовывоз </div>
																	<div class="order-block__header-description">
																		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['delivery']->value->total_price));?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

																	</div>
																</div>

															<?php } else { ?>

																<div class="order-block__header-row order-block__header-row_second discount-cart-info delivery-row">
																	<div class="order-block__header-title">Доставка курьером </div>
																	<div class="order-block__header-description">
																		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['delivery']->value->total_price));?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

																	</div>
																	<?php if ($_smarty_tpl->tpl_vars['nextdiscount']->value) {?>
																		<div class="order-block__header-row order-block__header-row_second get-discount"
																			 style="display: none">
																			<a href="javascript:void(0)"
																			   data-procent="<?php echo $_smarty_tpl->tpl_vars['nextdiscount']->value['procent'];?>
"
																			   data-need-coast="<?php echo $_smarty_tpl->tpl_vars['nextdiscount']->value['sum'];?>
"
																			   data-procent-week="<?php echo $_smarty_tpl->tpl_vars['nextdiscount']->value['procent_week'];?>
"
																			   data-need-coast-week="<?php echo $_smarty_tpl->tpl_vars['nextdiscount']->value['sum_week'];?>
">Получить скидку <?php echo $_smarty_tpl->tpl_vars['nextdiscount']->value['procent'];?>
%</a>
																		</div>
																	<?php }?>
																</div>
															<?php }?>
															</span>
										</label>
										<?php } ?>
									</div>
									<?php }?>
								</div>
							</div>
							<div class="bascet-inormation-block">
								<div class="summ-price-block">
									<div class="summ-count-all row-table">
										<div class="col-table">Товаров:</div>
										<div class="col-table value"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
 шт</div>
									</div>
									<div class="summ-price-all row-table">
										<div class="col-table">На сумму:</div>
										<div class="col-table value" id="summ-price-all"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->total_without_discount);?>

											&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</div>
									</div>
									<div class="js-discount row-table">
										<div class="col-table">Скидка</div>
										<div class="col-table value" id="skidka">
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['cart']->value->total_without_discount-$_smarty_tpl->tpl_vars['cart']->value->total_price));?>

											&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

										</div>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['deliveries']->value[0]->bonus_sale) {?>
									<div class="js-discount2 row-table">
										<div class="col-table">Скидка по бонусу</div>
										<div class="col-table value" id="bonus">
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['deliveries']->value[0]->bonus_sale);?>

											&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

										</div>
									</div>
									<?php }?>

								</div>
								<div class="text-basket-summ">Итого к оплате</div>
								<div class="order-block__price" data-bind-text="total_price">
									<?php if ($_smarty_tpl->tpl_vars['deliveries']->value[0]->bonus_price) {?>
									 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['deliveries']->value[0]->bonus_price);?>

									 <?php } else { ?>
									 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['deliveries']->value[0]->total_price);?>

									 <?php }?>
									&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

								</div>
							</div>

							<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
							<div class="error-message">
								<?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
								<div class="error-message__item">Введите имя</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
								<div class="error-message__item">Введите email</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
								<div class="error-message__item">Капча введена неверно</div>
								<?php }?>
							</div>
							<?php }?>


							<div class="order-block__content">
								<div class="order-block__group" style="display:none">
									
									<div class="order-block__row js-order-block-row">
										<input type="text" class="order-block__field js-input-phone"
											   placeholder="Телефон*" name="phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" required>
									</div>
									<div class="order-block__row js-order-block-row">

										<div class="y-map-search-field">
											<input type="text" name="yamap_input" id="suggestion" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" prev-val="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
"
												   placeholder="Адрес доставки*" required autocomplete="off"/>
											<span class="reset-y-map-input"></span>
										</div>
										<button type="button" class="button-check-address" id="button">Проверить
										</button>
										<p id="notice" class="notice"></p>
										<div id="map"></div>
										<div id="message"></div>
									</div>
									<div class="order-block__row js-order-block-row">
										<input type="text" class="order-block__field js-input-flat"
											   placeholder="Квартира №*" name="flat_num" value="<?php echo $_smarty_tpl->tpl_vars['flat_num']->value;?>
" required>
									</div>
									<?php if (date("H")>=9&&date("H")<18&&$_smarty_tpl->tpl_vars['region_short_name']->value=="Минск") {?>
									<div class="order-block__row js-order-block-row" id="express-div" style="text-align:center;">
										<input type="checkbox" id="express" name="express" value="1"/>
										<label for="express" style="font-size: 16px;">Доставка за 1 час</label>
									</div>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['city']->value) {?>
									<div class="order-block__row js-order-block-row city_area_block">
										<select name="city_area" class="order-block__field city_area">
											<option value="">Пункт самовывоза*</option>
											<?php  $_smarty_tpl->tpl_vars['city_minsk_area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city_minsk_area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_minsk']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city_minsk_area']->key => $_smarty_tpl->tpl_vars['city_minsk_area']->value) {
$_smarty_tpl->tpl_vars['city_minsk_area']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['city_minsk_area']->value->id;?>
"
													data-id-city="0"><?php echo $_smarty_tpl->tpl_vars['city_minsk_area']->value->name_area;?>
</option>
											<?php } ?>
											<?php  $_smarty_tpl->tpl_vars['city_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city_item']->key => $_smarty_tpl->tpl_vars['city_item']->value) {
$_smarty_tpl->tpl_vars['city_item']->_loop = true;
?>
											<?php  $_smarty_tpl->tpl_vars['city_area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city_area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_item']->value['city_area']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city_area']->key => $_smarty_tpl->tpl_vars['city_area']->value) {
$_smarty_tpl->tpl_vars['city_area']->_loop = true;
?>
											<?php if (($_smarty_tpl->tpl_vars['city_item']->value['delivery'][2]['active']=='1')) {?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['city_area']->value->id;?>
"
													data-id-city="<?php echo $_smarty_tpl->tpl_vars['city_area']->value->shipping_city_id;?>
"><?php echo $_smarty_tpl->tpl_vars['city_area']->value->name_area;?>
</option>
											<?php }?>
											<?php } ?>
											<?php } ?>
										</select>
										<div class="city_area_text"></div>
									</div>
									<?php }?>

									<div class="order-block__row js-order-block-row">
										<input type="text" class="order-block__field js-timedatepicker"
											   placeholder="Выберите дату*" name="self_discharge_time"
											   value="<?php echo $_smarty_tpl->tpl_vars['self_discharge_time']->value;?>
" required readonly>
									</div>
									<style>
										.js-time option[disabled] {
											display: none;
										}
									</style>

									<?php if (!$_smarty_tpl->tpl_vars['hide_time']->value) {?>
									<div class="order-block__row js-order-block-row">
										<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['discount_hh_week']->value;?>
"
											   name="discount_hh_week"/>
										<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['price_hh_week']->value;?>
" name="price_hh_week"/>
										<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['discount_hh_ends']->value;?>
"
											   name="discount_hh_ends"/>
										<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['price_hh_ends']->value;?>
" name="price_hh_ends"/>

										<?php $_smarty_tpl->tpl_vars['times'] = new Smarty_variable(array(10=>'10:00 - 12:00',12=>'12:00 - 14:00',15=>'14:00 - 16:00',17=>'16:00 - 18:00',19=>'18:00 - 20:00',20=>'20:00 - 22:00',21=>'22:00 - 23:00'), null, 0);?>
										<select name="time" class="order-block__field js-time" required>
											<option value="">Выберите время*</option>
											<?php  $_smarty_tpl->tpl_vars['time'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['time']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['times']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['time']->key => $_smarty_tpl->tpl_vars['time']->value) {
$_smarty_tpl->tpl_vars['time']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['time']->key;
?>
											<option data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</option>
											<?php } ?>
										</select>
									</div>
									<?php }?>
									
									<?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
									<div class="order-block__row js-order-block-row js-payment-methods">
										<div class="order-block__field js-order-block-field">Способы оплаты
										</div>
										<div class="order-block__popup js-order-block-popup">
											<button type="button"
													class="order-block__popup-close js-order-block-popup-close"></button>
											<div class="order-block__popup-title">Выберите способ оплаты</div>
											<div class="order-block__popup-checklist">
												<div class="checklist">
													<?php  $_smarty_tpl->tpl_vars['payment_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['payment_method']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->key => $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->_loop = true;
 $_smarty_tpl->tpl_vars['payment_method']->index++;
 $_smarty_tpl->tpl_vars['payment_method']->first = $_smarty_tpl->tpl_vars['payment_method']->index === 0;
?>
													<label class="checklist__row js-closest">
														<input type="radio" name="payment_method_id"
															   <?php if ($_smarty_tpl->tpl_vars['payment_method_id']->value==$_smarty_tpl->tpl_vars['payment_method']->value->id) {?>checked<?php } elseif ($_smarty_tpl->tpl_vars['payment_method']->first) {?><?php }?>
														value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
"
														class="checklist__input js-styler js-change-payment">
														<span class="checklist__text"><?php echo $_smarty_tpl->tpl_vars['payment_method']->value->name;?>
</span>
													</label>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<?php }?>
									<div class="order-block__row">
											<textarea name="comment" class="order-block__field"
													  placeholder="Комментарий к заказу"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									</div>
									<div class="order-block__row">
										<input type="text" class="order-block__field" placeholder="Промокод"
											   name="promo" value="" aria-required="false">
									</div>
									<div class="order-block__row c-cart-row">
										<input type="checkbox" name="mailing" id="mailing" checked><label
											for="mailing" class="c-label">Подписаться на новости и
											скидки</label>
									</div>
									<div class="order-block__row c-cart-row"
										 style="flex-wrap: wrap; justify-content: space-between;text-align: center">
										<input type="checkbox" name="call_back" id="call_back" value="1"
											   style="display: none;">Хотите, чтобы Вам перезвонил оператор
										интернет-магазина?
										<button type="button" id="call_back_yes" class="btn btn_full"
												style="width: calc(50% - 20px);">Да
										</button>
										<button type="button" id="call_back_no" class="btn btn_full"
												style="width: calc(50% - 20px);">Нет
										</button>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['coupon_request']->value) {?>
									<div class="order-block__row js-order-block-row">
										<?php if ($_smarty_tpl->tpl_vars['coupon_error']->value) {?>
										<div class="error-message">
											<?php if ($_smarty_tpl->tpl_vars['coupon_error']->value=='invalid') {?>
											<div class="error-message__item">Купон недействителен</div>
											<?php }?>
										</div>
										<?php }?>

										<!--<input type="text" class="order-block__field" placeholder="Промо-код, если есть" name="coupon_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->coupon->code, ENT_QUOTES, 'UTF-8', true);?>
">
						<div class="apply-coupon-btn-field">
							<button type="button" class="btn btn_small btn_full apply-coupon-btn" name="apply_coupon" onclick="document.cart.submit();">Применить купон</button>
						</div>-->


										<?php if ($_smarty_tpl->tpl_vars['cart']->value->coupon->min_order_price>0) {?>
										<div class="coupon-available-info">
											Купон <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->coupon->code, ENT_QUOTES, 'UTF-8', true);?>
 действует для заказов от&nbsp;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->coupon->min_order_price);?>

											&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

											<?php if ($_smarty_tpl->tpl_vars['cart']->value->coupon_discount>0) {?><span class="coupon-discount-info">
															(&minus;&nbsp;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->coupon_discount);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
)</span><?php }?>
										</div>
										<?php }?>


									</div>
									<?php }?>
								</div>
								<input type="hidden" name="press_check" value="">
								<button type="submit" name="checkout" value="Оформить заказ"
										class="btn btn_large order-block__btn" style="display:none">Оформить заказ
								</button>
								<div class="btn btn_large" id="cart_show_information_block" style="width: 100%;">
									Оформить заказ
								</div>
								<div class="order-block__note"></div>
							</div>
						</div>
					</div>
				</div>
			</form>
			<?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->purchases; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
			<form class="w-form-check" style="display: none" id="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
" method="post">
				<input type="hidden" name="check" value="1">
				<input type="hidden" class="variant_id" name="variant_id" value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
">
				<input type="checkbox" name="checkbox" id="checkbox-<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
" value="1"
					   <?php if ($_smarty_tpl->tpl_vars['purchase']->value->check==1) {?>checked<?php }?>>
			</form>
			<?php } ?>
			<?php } else { ?>
			<p>В корзине нет товаров</p>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['user']->value||$_smarty_tpl->tpl_vars['history']->value) {?>
			<div class="user-history">
				<div class="basket__content">
					<div class="basket__list">
						<h3>
							История покупок
						</h3>
						<div class="p-list">
							<?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
							<div class="p-item p-item_dynamic">
								<form class="history-item__add" method="post">
									<input type="hidden" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value['variant']->id;?>
">
									<input type="hidden" name="history" value="1">
									<input type="checkbox" value="1" id="h-checkbox-<?php echo $_smarty_tpl->tpl_vars['purchase']->value['variant']->id;?>
"
										   style="display: none" class="js-w-checkbox">
									<label for="h-checkbox-<?php echo $_smarty_tpl->tpl_vars['purchase']->value['variant']->id;?>
"
										   class="w-check-label w-check-label--history"></label>
								</form>
								<div class="p-item__inner">

									<div class="p-item__image-block">
										<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first'][0][0]->first_modifier($_smarty_tpl->tpl_vars['purchase']->value['images']), null, 0);?>
										<?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
										<a class="p-item__image-block-content"
										   href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value['product']->url;?>
"
										   itemscope
										   itemtype="http://schema.org/ImageObject">
											<meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
											<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,300,300);?>
"
												 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value['product']->name, ENT_QUOTES, 'UTF-8', true);?>
"
												 class="p-item__image" itemprop="contentUrl">
											<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
										</a>
										<?php }?>
									</div>
									<div class="p-item__content-block">
										<h3 class="p-item__title">
											<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value['product']->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value['product']->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
											<div class="p-item__meta">
												<?php if ($_smarty_tpl->tpl_vars['purchase']->value['brand']) {?>
												<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/brands/<?php echo $_smarty_tpl->tpl_vars['purchase']->value['product']->brand_url;?>
"
												   class="p-item__meta-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value['brand']->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
												
												

												<?php }?>


												
											</div>
											<span class="p-item__title-variant"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value['variant']->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
										</h3>
										<div class="p-item__description"><?php echo $_smarty_tpl->tpl_vars['purchase']->value['product']->annotation;?>
</div>
									</div>
									<div
										class="p-item__price-block"
										data-id-product="<?php echo $_smarty_tpl->tpl_vars['purchase']->value['product']->id;?>
">
										<div class="p-item__price-field bottom-padd-10">
											<div
												class="p-item__price-field-content<?php if ($_smarty_tpl->tpl_vars['purchase']->value['variant']->compare_price>0) {?> p-item__price-field-content-sale<?php }?>">
												<div class="p-item__price">
													<div class="left-price">Цена:</div>
													<div class="right-price default-price">
														<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value['variant']->price));?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>

			</div>
			<?php }?>
		</section>
		
		<?php if ($_smarty_tpl->tpl_vars['featured_products']->value) {?>
		<section class="similiar-catalog-section similiar-catalog-section--cart"
				 style="margin-top: 100px; background: #ffc300">

			<div class="wrapper">
				<div class="similiar-catalog-section__title h2"
					 style="margin-left: 20px; text-align: center; margin-bottom: 50px;">Мы подобрали эти товары
					специально для вас!
				</div>
			</div>
			<div class="similiar-catalog js-similiar-catalog">
				<ul class="similiar-catalog__list">
					<?php  $_smarty_tpl->tpl_vars['featured_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featured_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featured_product']->key => $_smarty_tpl->tpl_vars['featured_product']->value) {
$_smarty_tpl->tpl_vars['featured_product']->_loop = true;
?>
					<li class="similiar-catalog__item">
						<?php echo $_smarty_tpl->getSubTemplate ("_product_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['featured_product']->value), 0);?>

					</li>
					<?php } ?>
				</ul>
			</div>
		</section>
		<?php }?>

	</div>
</section>
<input type="hidden" name="dateandtime" value="<?php echo $_smarty_tpl->tpl_vars['date_and_time']->value;?>
">
<?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->purchases; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['purchase']->value->product->pickup) {?>
<div class="chPopUp-custom" id="vetpreparaty">
	<div class="close"></div>
	<div class="inner">
		<div class="need-coast"><?php echo $_smarty_tpl->tpl_vars['vetpreparaty']->value;?>
</div>
	</div>
	<div class="continue">Продолжить покупки</div>
</div>
<?php break 1?>
<?php }?>
<?php } ?>


<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;coordorder=longlat&amp;apikey=06121448-377d-4258-b280-81672bfc97b6"
		type="text/javascript"></script>
<script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>


<script>
$( document ).ready(function() {
	function getCookie(name) {
  let matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

	$("#express").click(function(){
		let summ = parseFloat($('[name="price_hh_ends"]').val());
		if(summ < 90){
			$('#modal__bonus-summ').toggleClass('--open');
			$('#express').removeAttr("checked");

		}
		if($("#express").prop('checked')){
			$('.js-time').val('10:00 - 12:00');
			$('.js-time').css('display','none');
		}else{
			$('.js-time').css('display','block');
			$('.js-time').val('');
		}
	});

	$('[name="self_discharge_time"]').click(function(){
		setInterval(function(){
			if($("#express").prop('checked')){
				$('.js-time').val('22:00 - 23:00');
				}
				/*если бонус скидка
				summ 	= parseFloat($('#summ-price-all').text());
				skidka 	= parseFloat($('#skidka').text());
				bonus 	= parseFloat($('#bonus').text());
				console.log(summ );
				console.log(skidka );
				console.log(bonus );
				price 	= summ + skidka - bonus;
				$("[data-bind-text=total_price]").text(price + " руб");*/
			},2000);
	});

	$('#current-city-name').change(function(){
		if($('#current-city-name').val() == 6){
			$('#express-div').css('display','block');
		}else{
			$('#express-div').css('display','none');
		}
	});
});
</script>
<div class="modal" id="modal__bonus-summ">
    <div class="modal__body __bonus">
		<div class="modal__content __bonus">
          <div class="modal__close close__modal"><span></span><span></span></div>
          <h3 class="modal__bonus-title">Внимание!</h3>
          <div class="modal__bonus-text">
			Доставка за час возможна при сумме заказа от 90 рублей.
          </div>
        </div>
    </div>
</div>

<?php }} ?>
