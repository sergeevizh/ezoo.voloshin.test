<?php /* Smarty version Smarty-3.1.18, created on 2021-02-01 09:19:12
         compiled from "simpla/design/html/delivery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180725065260179d60b9c608-37196195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b21f8ef926c525a996bc42860fdf4a64309d3a39' => 
    array (
      0 => 'simpla/design/html/delivery.tpl',
      1 => 1581086609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180725065260179d60b9c608-37196195',
  'function' => 
  array (
    'category_select' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'manager' => 0,
    'delivery' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'currency' => 0,
    'deliveries_discount' => 0,
    'delivery_discount' => 0,
    'payment_methods' => 0,
    'payment_method' => 0,
    'delivery_payments' => 0,
    'cities_deliver' => 0,
    'cities' => 0,
    'city' => 0,
    'city_deliver' => 0,
    'deliveries_brand' => 0,
    'delivery_brand' => 0,
    'brands' => 0,
    'brand' => 0,
    'deliveries_date' => 0,
    'delivery_date' => 0,
    'deliveries_date_brand' => 0,
    'delivery_date_brand' => 0,
    'brand_selected' => 0,
    'item' => 0,
    'categories' => 0,
    'category' => 0,
    'category_selected' => 0,
    'selected_id' => 0,
    'level' => 0,
    'product_category' => 0,
    'related_products' => 0,
    'related_product' => 0,
    'city_areas' => 0,
    'city_area' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_60179d60c5a084_59036895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60179d60c5a084_59036895')) {function content_60179d60c5a084_59036895($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('settings',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=SettingsAdmin">Настройки</a></li><?php }?>
	<?php if (in_array('currency',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CurrencyAdmin">Валюты</a></li><?php }?>
	<li class="active"><a href="index.php?module=DeliveriesAdmin">Доставка</a></li>
	<?php if (in_array('payment',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=PaymentMethodsAdmin">Оплата</a></li><?php }?>
	<?php if (in_array('managers',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ManagersAdmin">Менеджеры</a></li><?php }?>
	<?php if (in_array('cities',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CitiesAdmin">Города доставки</a></li><?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['delivery']->value->id) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['delivery']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Новый способ доставки', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<style>
		.autocomplete-suggestions{
			background-color: #ffffff;
			overflow: hidden;
			border: 1px solid #e0e0e0;
			overflow-y: auto;
		}
		.autocomplete-suggestions .autocomplete-suggestion{cursor: default;}
		.autocomplete-suggestions .selected { background:#F0F0F0; }
		.autocomplete-suggestions div { padding:2px 5px; white-space:nowrap; }
		.autocomplete-suggestions strong { font-weight:normal; color:#3399FF; }
	</style>
	<script src="design/js/autocomplete/jquery.autocomplete-min.js"></script>
	<script>

$(function(){

    // Удаление связанного товара
    $(".related_products a.delete").live('click', function() {
        $(this).closest("div.row").fadeOut(200, function() { $(this).remove(); });
        return false;
    });


    // Добавление связанного товара
    var new_related_product = $('#new_related_product').clone(true);
    $('#new_related_product').remove().removeAttr('id');

    $("input#related_products").autocomplete({
        serviceUrl:'ajax/search_products.php',
        minChars:0,
        noCache: false,
        onSelect:
            function(suggestion){
                $("input#related_products").val('').focus().blur();
                new_item = new_related_product.clone().appendTo('.related_products');
                new_item.removeAttr('id');
                new_item.find('a.related_product_name').html(suggestion.data.name);
                new_item.find('a.related_product_name').attr('href', 'index.php?module=ProductAdmin&id='+suggestion.data.id);
                new_item.find('input[name*="related_products"]').val(suggestion.data.id);
                if(suggestion.data.image)
                    new_item.find('img.product_icon').attr("src", suggestion.data.image);
                else
                    new_item.find('img.product_icon').remove();
                new_item.show();
            },
        formatResult:
            function(suggestions, currentValue){
                var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
                var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
                return (suggestions.data.image?"<img align=absmiddle src='"+suggestions.data.image+"'> ":'') + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>');
            }

    });


});
</script>


<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
<!-- Системное сообщение -->
<div class="message message_success">
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>Способ доставки добавлен<?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>Способ доставки изменен<?php }?></span>
	<?php if ($_GET['return']) {?>
	<a class="button" href="<?php echo $_GET['return'];?>
">Вернуться</a>
	<?php }?>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
<!-- Системное сообщение -->
<div class="message message_error">
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='empty_name') {?>Не указано название доставки<?php }?></span>
	<a class="button" href="">Вернуться</a>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>


<!-- Основная форма -->
<form method=post id=product enctype="multipart/form-data">
<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div id="name">
		<input class="name" name=name type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<input name=id type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"/>
		<div class="checkbox">
			<input name=enabled value='1' type="checkbox" id="active_checkbox" <?php if ($_smarty_tpl->tpl_vars['delivery']->value->enabled) {?>checked<?php }?>/> <label for="active_checkbox">Активен</label>
		</div>
	</div>

	<!-- Левая колонка свойств товара -->
	<div id="column_left">
		<!-- Параметры страницы -->
		<div class="block layer">
			<h2>Стоимость доставки</h2>
			<ul>
				<li><label class=property>Стоимость</label><input name="price" class="simpla_small_inp" type="text" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->price;?>
" /> <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</li>
				<li><label class=property>Бесплатна от</label><input name="free_from" class="simpla_small_inp" type="text" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->free_from;?>
" /> <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</li>
				<li><label class=property for="separate_payment">Оплачивается отдельно</label><input id="separate_payment" name="separate_payment" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>checked<?php }?> /></li>
			</ul>
			<h2>Скидки</h2>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['delivery_discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery_discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries_discount']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['delivery_discount']->key => $_smarty_tpl->tpl_vars['delivery_discount']->value) {
$_smarty_tpl->tpl_vars['delivery_discount']->_loop = true;
?>
				<li>
					<label class=property>Скидка от</label>
					<input type="text" class="simpla_small_inp" style="width: 100px;" name="deliveries_discount[discount_from][]" value="<?php echo $_smarty_tpl->tpl_vars['delivery_discount']->value->discount_from;?>
"> <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 -
					<input type="text" class="simpla_small_inp" style="width: 100px;" name="deliveries_discount[discount_percent][]" value="<?php echo $_smarty_tpl->tpl_vars['delivery_discount']->value->discount_percent;?>
"> %
				</li>
				<?php } ?>
			</ul>
		</div>
		<!-- Параметры страницы (The End)-->

	</div>
	<!-- Левая колонка свойств товара (The End)-->

	<!-- Левая колонка свойств товара -->
	<div id="column_right">
		<div class="block layer">
		<h2>Возможные способы оплаты</h2>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['payment_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->key => $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->_loop = true;
?>
			<li>
			<input type=checkbox name="delivery_payments[]" id="payment_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" value='<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
' <?php if (in_array($_smarty_tpl->tpl_vars['payment_method']->value->id,$_smarty_tpl->tpl_vars['delivery_payments']->value)) {?>checked<?php }?>> <label for="payment_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['payment_method']->value->name;?>
</label><br>
			</li>
		<?php } ?>
		</ul>
		</div>
	</div>
	<!-- Левая колонка свойств товара (The End)-->
	<!--Процент скидок на товары-->
	<div class="list_city layer" style="clear: both">
		<h2>Города доставки</h2>
		<ul id="list_cities_deliver">
			<?php  $_smarty_tpl->tpl_vars['city_deliver'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city_deliver']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities_deliver']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city_deliver']->key => $_smarty_tpl->tpl_vars['city_deliver']->value) {
$_smarty_tpl->tpl_vars['city_deliver']->_loop = true;
?>
				<li>
					<label class=property>Город </label>
					<select name="cities_deliver[city_id][]" class="order-block__field" required>
						<option value="">Выбрать город</option>
						<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
							<option value='<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
'
									<?php if ($_smarty_tpl->tpl_vars['city_deliver']->value->city_id==$_smarty_tpl->tpl_vars['city']->value->id) {?>selected="selected"<?php }?>
									><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php } ?>
					</select> доставка от&nbsp
					<input type="text" class="simpla_small_inp" style="width: 100px;" required name="cities_deliver[from_sum][]" value="<?php echo $_smarty_tpl->tpl_vars['city_deliver']->value->from_sum;?>
">руб, процент скидки -&nbsp
					<input type="text" class="simpla_small_inp" style="width: 80px;" name="cities_deliver[discount_percent][]" value="<?php echo $_smarty_tpl->tpl_vars['city_deliver']->value->discount_percent;?>
"> %, отключить прочие скидки -&nbsp
					<input name=cities_deliver[check_sale_other][] value='1' type="checkbox" id="city_sale_other" <?php if ($_smarty_tpl->tpl_vars['city_deliver']->value->check_sale_other) {?>checked<?php }?>/><label for="city_sale_other">Да</label>&nbsp
					<span class="delete batton" title="Удалить скидку"></span>
				</li>
			<?php } ?>
		</ul>
		<span id="add_city_deliver" class="add_batton_list">Добавить город</span>
	</div>
	<!--Процент скидок на товары End-->

	<!--Процент скидок на товары-->
	<div class="sale-block-brand layer" style="clear: both">
		<h2>Индивидуальные скидки на бренды</h2>
		<ul id="list_deliver_disconts_brand">
			<?php  $_smarty_tpl->tpl_vars['delivery_brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery_brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries_brand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['delivery_brand']->key => $_smarty_tpl->tpl_vars['delivery_brand']->value) {
$_smarty_tpl->tpl_vars['delivery_brand']->_loop = true;
?>
				<li>
					<label class=property>Скидка </label>
					<input type="text" class="simpla_small_inp" style="width: 100px;" required name="deliveries_brand[discount_percent][]" value="<?php echo $_smarty_tpl->tpl_vars['delivery_brand']->value->discount_percent;?>
"> % на бренд -&nbsp
					<select name="deliveries_brand[brands_id][]" class="order-block__field" required>
						<option value="">Выбрать бренд</option>
						<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
							<option value='<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
'
									<?php if ($_smarty_tpl->tpl_vars['delivery_brand']->value->brands_id==$_smarty_tpl->tpl_vars['brand']->value->id) {?>selected="selected"<?php }?>
									brand_name='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php } ?>
					</select> сумма -&nbsp
					<input type="text" class="simpla_small_inp" style="width: 100px;" required name="deliveries_brand[discount_from][]" value="<?php echo $_smarty_tpl->tpl_vars['delivery_brand']->value->discount_from;?>
">
					<span class="delete" title="Удалить скидку"></span>
				</li>
			<?php } ?>
		</ul>
		<span id="add_delivery_discont_brand">Добавить скидку</span>
	</div>
	<!--Процент скидок на товары End-->

	<!--Процент скидок на товары на определённую дату-->
	<?php if ($_smarty_tpl->tpl_vars['delivery']->value->id!=2) {?>
	<div class="sale-block-brand layer" style="clear: both">
		<h2>Скидка на дату</h2>
		<ul id="list_deliver_disconts_date">
			<?php  $_smarty_tpl->tpl_vars['delivery_date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery_date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries_date']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['delivery_date']->key => $_smarty_tpl->tpl_vars['delivery_date']->value) {
$_smarty_tpl->tpl_vars['delivery_date']->_loop = true;
?>
				<li>
					<label class=property>Скидка </label>
					<input type="text" class="simpla_small_inp" style="width: 100px;" required name="deliveries_date[discount_percent][]" value="<?php echo $_smarty_tpl->tpl_vars['delivery_date']->value->discount_percent;?>
"> % на дату -&nbsp
					<input type="date" class="simpla_small_inp" style="width: 200px;" required name="deliveries_date[date_sale][]" value="<?php echo $_smarty_tpl->tpl_vars['delivery_date']->value->date_sale;?>
"> сумма -&nbsp
					<input type="text" class="simpla_small_inp" style="width: 100px;" required name="deliveries_date[discount_from][]" value="<?php echo $_smarty_tpl->tpl_vars['delivery_date']->value->discount_from;?>
">
					<span class="delete" title="Удалить скидку"></span>
				</li>
			<?php } ?>
		</ul>
		<span id="add_delivery_discont_date">Добавить скидку</span>
	</div>
	<div class="sale-block-brand layer" style="clear: both">
		<h2>Скидка на дату по бренду</h2>
		<ul id="list_deliver_disconts_date_brand">
			<?php  $_smarty_tpl->tpl_vars['delivery_date_brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery_date_brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries_date_brand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['delivery_date_brand']->key => $_smarty_tpl->tpl_vars['delivery_date_brand']->value) {
$_smarty_tpl->tpl_vars['delivery_date_brand']->_loop = true;
?>
				<li>
					<label class=property>Скидка </label>
					<input type="text" class="simpla_small_inp" style="width: 100px;" required name="deliveries_date_brand[discount_percent][]" value="<?php echo $_smarty_tpl->tpl_vars['delivery_date_brand']->value->discount_percent;?>
"> % на дату -&nbsp
					<input type="date" class="simpla_small_inp" style="width: 200px;" required name="deliveries_date_brand[date_sale][]" value="<?php echo $_smarty_tpl->tpl_vars['delivery_date_brand']->value->date_sale;?>
"> сумма -&nbsp
					<input type="text" class="simpla_small_inp" style="width: 100px;" required name="deliveries_date_brand[discount_from][]" value="<?php echo $_smarty_tpl->tpl_vars['delivery_date_brand']->value->discount_from;?>
">на бренд -&nbsp
					<select name="deliveries_date_brand[brands_id][]" class="order-block__field" required>
						<option value="">Выбрать бренд</option>
						<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
							<option value='<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
'
									<?php if ($_smarty_tpl->tpl_vars['delivery_date_brand']->value->brands_id==$_smarty_tpl->tpl_vars['brand']->value->id) {?>selected="selected"<?php }?>
									brand_name='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php } ?>
					</select>
					<span class="delete" title="Удалить скидку"></span>
				</li>
			<?php } ?>
		</ul>
		<span id="add_delivery_discont_date_brand">Добавить скидку</span>
	</div>
	<?php }?>
	<!--Процент скидок на товары End-->

	<!-- Описагние товара -->
	<div class="block layer">
		<div class="delivery-disabled">
			<h2>Исключения</h2>
			<div id="product_brand" style="width: 50%;float:left;">
				<label>Бренды</label>
				<select name="brands[]" multiple size="25" style="width: 350px;margin-left: 15px;">
					<option value='0'  brand_name=''>Не указан</option>
					<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>





						<option value='<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
'

								<?php if ($_smarty_tpl->tpl_vars['brand_selected']->value) {?>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand_selected']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['item']->value->value==$_smarty_tpl->tpl_vars['brand']->value->id) {?>selected="selected"<?php }?>
									<?php } ?>
								<?php }?>





								brand_name='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>



					<?php } ?>
				</select>
			</div>


			<div id="product_categories" style="width:50%;float:left;">
				<label>Категория</label>
					<select name="categories[]" multiple size="25" style="width: 350px;margin-left: 15px;">
						<?php if (!function_exists('smarty_template_function_category_select')) {
    function smarty_template_function_category_select($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['category_select']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
							<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
								<option value='<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
'
										<?php if ($_smarty_tpl->tpl_vars['category_selected']->value) {?>
											<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_selected']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
												<?php if ($_smarty_tpl->tpl_vars['item']->value->value==$_smarty_tpl->tpl_vars['category']->value->id) {?>selected="selected"<?php }?>
											<?php } ?>
										<?php }?>


										<?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['selected_id']->value) {?>selected<?php }?> category_name='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
'><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['name'] = 'sp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total']);
?>&nbsp;&nbsp;&nbsp;&nbsp;<?php endfor; endif; ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php smarty_template_function_category_select($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'selected_id'=>$_smarty_tpl->tpl_vars['selected_id']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

							<?php } ?>
						<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

						<?php smarty_template_function_category_select($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'selected_id'=>$_smarty_tpl->tpl_vars['product_category']->value->id));?>

					</select>
			</div>
		</div>

		<div style="clear:both;margin-bottom: 25px;"></div>
		<div class="block layer">
			<label>Товары</label>
			<div id=list class="sortable related_products">
				<?php  $_smarty_tpl->tpl_vars['related_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['related_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['related_product']->key => $_smarty_tpl->tpl_vars['related_product']->value) {
$_smarty_tpl->tpl_vars['related_product']->_loop = true;
?>
					<div class="row">
						<div class="move cell">
							<div class="move_zone"></div>
						</div>
						<div class="image cell">
							<input type=hidden name=related_products[] value='<?php echo $_smarty_tpl->tpl_vars['related_product']->value->id;?>
'>
							<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('id'=>$_smarty_tpl->tpl_vars['related_product']->value->id),$_smarty_tpl);?>
">
								<img class=product_icon src='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['related_product']->value->images[0]->filename,35,35);?>
'>
							</a>
						</div>
						<div class="name cell">
							<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('id'=>$_smarty_tpl->tpl_vars['related_product']->value->id),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['related_product']->value->name;?>
</a>
						</div>
						<div class="icons cell">
							<a href='#' class="delete"></a>
						</div>
						<div class="clear"></div>
					</div>
				<?php } ?>
				<div id="new_related_product" class="row" style='display:none;'>
					<div class="move cell">
						<div class="move_zone"></div>
					</div>
					<div class="image cell">
						<input type=hidden name=related_products[] value=''>
						<img class=product_icon src=''>
					</div>
					<div class="name cell">
						<a class="related_product_name" href=""></a>
					</div>
					<div class="icons cell">
						<a href='#' class="delete"></a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<input type=text name=related id='related_products' class="input_autocomplete" placeholder='Выберите товар чтобы добавить его'>
		</div>
		<div style="clear:both;margin-bottom: 25px;"></div>
		<?php if ($_smarty_tpl->tpl_vars['delivery']->value->id==2) {?>
		<div class="list_area" style="float: none">
			<h2>Список пунктов выдачи Минск</h2>
			<br>
			<ul id="list_area_city">
				<?php  $_smarty_tpl->tpl_vars['city_area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city_area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city_area']->key => $_smarty_tpl->tpl_vars['city_area']->value) {
$_smarty_tpl->tpl_vars['city_area']->_loop = true;
?>
					<li>
						<label class=property>Название: </label>
						<input type="text" class="simpla_small_inp" style="width: 200px;" required name="city_areas[name_area][]" value="<?php echo $_smarty_tpl->tpl_vars['city_area']->value->name_area;?>
">
						<span class="delete batton" title="Удалить"></span>
					</li>
				<?php } ?>
			</ul>
			<br>
			<span id="add_city_area" class="add_batton_list">Добавить пункт</span>
		</div>
		<div style="clear:both;margin-bottom: 25px;"></div>
		<?php }?>
		<h2>Описание</h2>
		<textarea name="description" class="editor_small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
	</div>
	<!-- Описание товара (The End)-->
	<input class="button_green button_save" type="submit" name="" value="Сохранить" />
</form>
<!-- Основная форма (The End) -->
<div id="copy_li_discont" style="display: none">
	<li>
		<label class=property>Скидка </label>
		<input type="text" class="simpla_small_inp" required style="width: 100px;" name="deliveries_brand[discount_percent][]" value=""> % на бренд -&nbsp
		<select name="deliveries_brand[brands_id][]" class="order-block__field" required>
			<option value="">Выбрать бренд</option>
			<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
'
						brand_name='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
			<?php } ?>
		</select> сумма -&nbsp
		<input type="text" class="simpla_small_inp" style="width: 100px;" required name="deliveries_brand[discount_from][]" value="0">
		<span class="delete" title="Удалить скидку"></span>
	</li>
</div>
<div id="copy_li_discont_date" style="display: none">
	<li>
		<label class=property>Скидка </label>
		<input type="text" class="simpla_small_inp" style="width: 100px;" required name="deliveries_date[discount_percent][]" value=""> % на дату -&nbsp
		<input type="date" class="simpla_small_inp" style="width: 200px;" required name="deliveries_date[date_sale][]" value=""> сумма -&nbsp
		<input type="text" class="simpla_small_inp" style="width: 100px;" required name="deliveries_date[discount_from][]" value="">
		<span class="delete" title="Удалить скидку"></span>
	</li>
</div>
<div id="copy_li_discont_date_brand" style="display: none">
	<li>
		<label class=property>Скидка </label>
		<input type="text" class="simpla_small_inp" style="width: 100px;" required name="deliveries_date_brand[discount_percent][]" value=""> % на дату -&nbsp
		<input type="date" class="simpla_small_inp" style="width: 200px;" required name="deliveries_date_brand[date_sale][]" value=""> сумма -&nbsp
		<input type="text" class="simpla_small_inp" style="width: 100px;" required name="deliveries_date_brand[discount_from][]" value="">на бренд -&nbsp
		<select name="deliveries_date_brand[brands_id][]" class="order-block__field" required>
			<option value="">Выбрать бренд</option>
			<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
'
						brand_name='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
			<?php } ?>
		</select>
		<span class="delete" title="Удалить скидку"></span>
	</li>
</div>
<div id="copy_list_city_deliver" style="display: none">
	<li>
		<label class=property>Город </label>
		<select name="cities_deliver[city_id][]" class="order-block__field" required>
			<option value="">Выбрать город</option>
			<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
			<?php } ?>
		</select> доставка от&nbsp
		<input type="text" class="simpla_small_inp" style="width: 100px;" required name="cities_deliver[from_sum][]" value="">руб, процент скидки -&nbsp
		<input type="text" class="simpla_small_inp" style="width: 80px;" name="cities_deliver[discount_percent][]" value=""> %, отключить прочие скидки -&nbsp
		<input name=cities_deliver[check_sale_other][] value='1' type="checkbox" id="city_sale_other"/><label for="city_sale_other">Да</label>&nbsp
		<span class="delete batton" title="Удалить скидку"></span>
	</li>
</div>
<script>
	$('#add_delivery_discont_brand').on('click' ,function () {
		$('#copy_li_discont li').clone().appendTo('#list_deliver_disconts_brand');
	});
	$('#list_deliver_disconts_brand').on('click',function () {
		if ($(event.target).hasClass('delete')) deleteDeliverDiscont(event.target);
	});
	$('#add_delivery_discont_date').on('click' ,function () {
		$('#copy_li_discont_date li').clone().appendTo('#list_deliver_disconts_date');
	});
	$('#list_deliver_disconts_date').on('click',function () {
		if ($(event.target).hasClass('delete')) deleteDeliverDiscont(event.target);
	});
	$('#add_delivery_discont_date_brand').on('click' ,function () {
		$('#copy_li_discont_date_brand li').clone().appendTo('#list_deliver_disconts_date_brand');
	});
	$('#list_deliver_disconts_date_brand').on('click',function () {
		if ($(event.target).hasClass('delete')) deleteDeliverDiscont(event.target);
	});
	$('#add_city_deliver').on('click' ,function () {
		$('#copy_list_city_deliver li').clone().appendTo('#list_cities_deliver');
	});
	$('#list_cities_deliver').on('click',function () {
		if ($(event.target).hasClass('delete')) deleteDeliverDiscont(event.target);
	});
	function deleteDeliverDiscont(element) {
		$(element).parents('li').remove();
	};
</script>

<?php if ($_smarty_tpl->tpl_vars['delivery']->value->id==2) {?>
	<div id="copy_list_area" style="display: none">
		<li>
			<label class=property>Название: </label>
			<input type="text" class="simpla_small_inp" style="width: 200px;" required name="city_areas[name_area][]" value="">
			<span class="delete batton" title="Удалить"></span>
		</li>
	</div>
	<script>
		$('#add_city_area').on('click' ,function () {
			$('#copy_list_area li').clone().appendTo('#list_area_city');
		});
		$('#list_area_city').on('click',function () {
			if ($(event.target).hasClass('delete')) deleteDeliverDiscont(event.target);
		});
		function deleteDeliverDiscont(element) {
			$(element).parents('li').remove();
		};
	</script>
<?php }?><?php }} ?>
