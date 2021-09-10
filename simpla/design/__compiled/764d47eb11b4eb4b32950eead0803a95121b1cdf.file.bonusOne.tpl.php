<?php /* Smarty version Smarty-3.1.18, created on 2021-08-11 11:48:29
         compiled from "simpla/design/html/bonusOne.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35579918560dceb20316115-07887565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '764d47eb11b4eb4b32950eead0803a95121b1cdf' => 
    array (
      0 => 'simpla/design/html/bonusOne.tpl',
      1 => 1628362399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35579918560dceb20316115-07887565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_60dceb20350a50_49598141',
  'variables' => 
  array (
    'manager' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'config' => 0,
    'bonus' => 0,
    'times' => 0,
    'time' => 0,
    'time_dilevery' => 0,
    'delivery_city' => 0,
    'city' => 0,
    'boncity' => 0,
    'brands' => 0,
    'brand' => 0,
    'bonbrands' => 0,
    'related_products' => 0,
    'related_product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60dceb20350a50_49598141')) {function content_60dceb20350a50_49598141($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('settings',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=SettingsAdmin">Настройки</a></li><?php }?>
	<?php if (in_array('currency',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CurrencyAdmin">Валюты</a></li><?php }?>
	<?php if (in_array('delivery',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=DeliveriesAdmin">Доставка</a></li><?php }?>
	<?php if (in_array('payment',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=PaymentMethodsAdmin">Оплата</a></li><?php }?>
	<?php if (in_array('managers',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ManagersAdmin">Менеджеры</a></li><?php }?>
	<?php if (in_array('cities',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CitiesAdmin">Города доставки</a></li><?php }?>
	<li class="active"><a href="index.php?module=BonusAdmin">Бонус</a></li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Бонус", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<?php echo $_smarty_tpl->getSubTemplate ('tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<script src="design/js/autocomplete/jquery.autocomplete-min.js"></script>
	<script src="design/js/jquery/datepicker/jquery.ui.datepicker-ru.js"></script>
<script>
$(function() {
	// Удаление изображений pre
	$(".images a#del_pre").live('click', function() {
		 $(this).closest("li").fadeOut(200, function() { $(this).remove(); });
		 $("#add_img_pre").css('display','block');
		 return false;
	});
	// Удаление изображений det
	$(".images a#del_det").live('click', function() {
		 $(this).closest("li").fadeOut(200, function() { $(this).remove(); });
		 $("#add_img_det").css('display','block');
		 return false;
	});
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
		function setDisable(name) {
			var inpt = "input[name='bonus_" + name + "']";
			if(name == 'dilevery') { inpt = '#select_dilevery'; }
			if(name == 'cities') { inpt = '#select_cities'; }
			if(name == 'brands') { inpt = '#select_brands'; }
			if(name == 'products') { inpt = '#related_products'; }
			if($('#st_' + name).prop('checked')){
				$(inpt).attr('disabled', false);
			}
			else {
				$(inpt).attr('disabled', true);
			}
		}
		function setDisableTwo(name,inp) {
			var inpt_to = inp + 'to';
			var inpt_from = inp + 'from';
			if($('#st_' + name).prop('checked')){
				$("input[name='" + inpt_to + "']").attr('disabled', false);
				$("input[name='" + inpt_from + "']").attr('disabled', false);
			}
			else {				
				$("input[name='" + inpt_to + "']").attr('disabled', true);
				$("input[name='" + inpt_from + "']").attr('disabled', true);
			}
		}
</script>
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
	.conditions li{
		display: flex !important;
	}
	.condif{
		margin-right: 10px;
	}
	#product .block label.property{
		width: 150px !important;
	}
</style>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
<!-- Системное сообщение -->
<div class="message message_success">
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_success']->value=='saved') {?>Настройки сохранены<?php }?></span>
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
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='watermark_is_not_writable') {?>Установите права на запись для файла <?php echo $_smarty_tpl->tpl_vars['config']->value->watermark_file;?>
<?php }?></span>
	<a class="button" href="">Вернуться</a>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>


<!-- Основная форма -->
<form method="post" action="" enctype='multipart/form-data' id="product" >
<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
<div id="name">
<h1><?php if ($_smarty_tpl->tpl_vars['bonus']->value->id) {?>Бонус №<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value->id, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>Новый Бонус<?php }?></h1>
<div id=next_order>
	<a title="Назад" class=prev_order href="index.php?module=BonusAdmin">←</a>
	</div>
</div>
<!-- Общие параметры -->
	<div class="block">
		<h2>Общие данные бонуса</h2>
		<ul>
			<li><label class=property>Активен:</label><input name="bonus_status" class="simpla_inp" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['bonus']->value->status) {?> checked <?php }?> /></li>
			<li><label class=property>Имя Бонуса</label><input name="bonus_name" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" required /></li>
			<li style="display:none;"><label class=property>Скидка, %</label><input name="bonus_percent" class="simpla_inp" type="text" value="0" /></li>
		</ul>
		<h2>Краткое описание</h2>
		<textarea name="bonus_desc_mini" class="editor_small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value->desc_mini, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
		<h2>Полное описание</h2>
		<textarea name="bonus_description" class="editor_small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
	</div>
		
<!-- Изображения Бонуса -->
	<div class="block layer images">
		<h2>Изображения бонуса</h2>
		 <h3>Анонс</h3> 
		 <?php if ($_smarty_tpl->tpl_vars['bonus']->value->img_preview) {?>
		<ul><li>
			<a href='#' class="delete" id="del_pre"><img src='design/images/cross-circle-frame.png'></a>
			<img src="<?php echo $_smarty_tpl->tpl_vars['bonus']->value->img_preview;?>
" alt="" />
		</li></ul>
		<?php }?>
		<div id="add_image"></div>
		<span class="upload_image" id="add_img_pre" style="<?php if ($_smarty_tpl->tpl_vars['bonus']->value->img_preview) {?>display:none<?php }?>"><input id="fileToUpload" type="file" name="img_preview" multiple accept=".jpg,.jpeg,.png,.gif"></span>
		<div id="add_image"></div>
		<h3>Основное</h3>
		<?php if ($_smarty_tpl->tpl_vars['bonus']->value->img_detail) {?>
		<ul><li>
			<a href='#' class="delete" id="del_det"><img src='design/images/cross-circle-frame.png'></a>
			<img src="<?php echo $_smarty_tpl->tpl_vars['bonus']->value->img_detail;?>
" alt=""/>
		</li></ul>
		<?php }?>
		<div id="add_image"></div>
		<span class="upload_image" id="add_img_det" style="<?php if ($_smarty_tpl->tpl_vars['bonus']->value->img_detail) {?>display:none<?php }?>"><input id="fileToUpload" type="file" name="img_detail" multiple accept=".jpg,.jpeg,.png,.gif"></span>
		<div id="add_image"></div>
	</div>
<!-- Условия Бонуса -->
	<div class="block layer">
		<h2>Условия бонуса</h2>
		<ul class="conditions"><li>
				<input onchange="setDisable('summ');" name="st_summ" id="st_summ" class="simpla_inp condif" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_summ']) {?> checked <?php }?> />
				<label class=property>Сумма заказа:</label>
				<input name="bonus_summ" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value->summ, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_summ']) {?> disabled <?php }?> />
			</li><li>
				<input onchange="setDisable('date_order');" name="st_date_order" id="st_date_order" class="simpla_inp condif" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_date_order']) {?> checked <?php }?> />
				<label class=property>Дата заказа:</label>
				<input name="bonus_date_order" class="simpla_inp" type="date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value->date_order, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_date_order']) {?> disabled <?php }?>/>
			</li><li style="width: 800px;">
				<input onchange="setDisableTwo('sale','bonus_date_ac_');" name="st_sale" id="st_sale" class="simpla_inp condif" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_sale']) {?> checked <?php }?> />
				<span style="display: inline-flex;" id="" class="condif">
					<label class=property>Акция c:</label>
					<input name="bonus_date_ac_from" class="simpla_inp" type="date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value->time_from_sale, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_sale']) {?> disabled<?php }?>/>
					<label class="property" style="width: 20px !important;margin-left:10px;">по:</label>
					<input name="bonus_date_ac_to" class="simpla_inp" type="date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value->time_to_sale, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_sale']) {?> disabled<?php }?>/>
				</span>
				<label class=property style="width:110px !important">Осталось кодов:</label>
				<span style="font-size: 16px;font-weight: 600;"><?php echo $_smarty_tpl->tpl_vars['bonus']->value->count_promo;?>
</span>
			</li><li>
				<input onchange="setDisableTwo('time', 'bonus_date_');" name="st_time" id="st_time" class="simpla_inp condif" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_time']) {?> checked <?php }?> />
				<span style="display: inline-flex;" id="">
					<label class=property>Срок действия c:</label>
					<input name="bonus_date_from" class="simpla_inp" type="date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value->time_from, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_time']) {?> disabled<?php }?>/>
					<label class=property style="width: 20px !important;margin-left:10px;">по:</label>
					<input name="bonus_date_to" class="simpla_inp" type="date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value->time_to, ENT_QUOTES, 'UTF-8', true);?>
"  <?php if (!$_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_time']) {?> disabled<?php }?>/>
				</span>
			</li><li>
				<input onchange="setDisable('dilevery');" id="st_dilevery" name="st_dilevery" class="simpla_inp condif" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_dilevery']) {?> checked <?php }?> />
				<label class=property>Время доставки</label>
				<select id="select_dilevery" name="bonus_time_dilevery[]" multiple="multiple" size="20" style="height:140px;" class="order-block__field js-time" <?php if (!$_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_dilevery']) {?> disabled <?php }?>>
					<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_smarty_tpl->tpl_vars['time'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['times']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
 $_smarty_tpl->tpl_vars['time']->value = $_smarty_tpl->tpl_vars['k']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['time']->value,$_smarty_tpl->tpl_vars['time_dilevery']->value)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</option>
					<?php } ?>
				</select>
				</li>
		</ul>
		<div id="column_left">
			<ul><li style="display: flex;">
				<input onchange="setDisable('cities');" id="st_cities" name="st_cities" class="simpla_inp condif" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_cities']) {?> checked <?php }?> />
				<label class=property>Города:</label>
				<select name="city[]" multiple="multiple" size="20" style="height:300px;" id="select_cities" <?php if (!$_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_cities']) {?> disabled <?php }?> >
				<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['delivery_city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['city']->value->id,$_smarty_tpl->tpl_vars['boncity']->value)) {?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['city']->value->name;?>
</option>
				<?php } ?>
				</select>
			</li></ul>
		</div>
		<div id="column_right">
			<ul><li style="display: flex;">
			<input onchange="setDisable('brands');" id="st_brands" name="st_brands" class="simpla_inp condif" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_brands']) {?> checked <?php }?> />
			<label class=property>Бренды:</label>
			<select name="brend[]" multiple="multiple" size="20" style="height:300px;" id="select_brands" <?php if (!$_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_brands']) {?> disabled <?php }?>>
			<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['brand']->value->id,$_smarty_tpl->tpl_vars['bonbrands']->value)) {?>selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['brand']->value->name;?>
</option>
			<?php } ?>
			</select>
			</li></ul>
		</div>	
		<div style="display: inline-flex;">
			<input onchange="setDisable('products');" id="st_products" name="st_products" class="simpla_inp condif" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_products']) {?> checked <?php }?> />
			<h3>Товары</h3>
		</div>	
		<div id=list class="sortable related_products" >
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
					<input type=hidden name=related_products[] value='<?php echo $_smarty_tpl->tpl_vars['related_product']->value['id'];?>
'>
					<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('id'=>$_smarty_tpl->tpl_vars['related_product']->value['id']),$_smarty_tpl);?>
">
					<img class=product_icon src='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['related_product']->value['imgname'],35,35);?>
'>
					</a>
					</div>
					<div class="name cell">
					<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('id'=>$_smarty_tpl->tpl_vars['related_product']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['related_product']->value['name'];?>
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
			<label class=property>Добавить товар:</label>	
			<input type=text name=related id='related_products' class="input_autocomplete" placeholder='Выберите товар чтобы добавить его' <?php if (!$_smarty_tpl->tpl_vars['bonus']->value->ifstatus['st_products']) {?> disabled <?php }?> >
	</div>
<!-- Промокоды Бонуса -->
	<div class="block layer">
	<h2>Промокоды, сервис</h2>
		<ul>
			<li><label class=property>Имя сервиса</label><input name="bonus_service" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value->service, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
		</ul>
		<h2>Промокоды, файл CSV</h2>
		<div id="column_left">
			<label class=property>Выберите файл CSV</label>
			<input type="file" class="import_file" name="csv_file" id="csv_file" accept=".csv"/>
			<input type="hidden" name="csv" value="<?php echo $_smarty_tpl->tpl_vars['bonus']->value->csv;?>
"/>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['bonus']->value->csv) {?>
			<div id="column_right"><a href = "<?php echo $_smarty_tpl->tpl_vars['bonus']->value->csv;?>
" ><img src="/simpla/design/images/csv.png" alt=""/>Скачать</a></div>
		<?php }?>
	</div>
	<div>
<!-- Кнопки Бонуса -->
	<?php if ($_smarty_tpl->tpl_vars['bonus']->value->id) {?><input class="button_red button_delete" type="submit" name="delete" value="Удалить" /><?php }?>
	<input class="button_green button_save" type="submit" name="save" value="Сохранить" />
	</div>
</form><?php }} ?>
