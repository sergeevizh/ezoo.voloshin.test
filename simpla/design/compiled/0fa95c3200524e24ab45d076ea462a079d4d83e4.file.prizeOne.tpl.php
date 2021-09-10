<?php /* Smarty version Smarty-3.1.18, created on 2021-09-02 18:01:25
         compiled from "simpla/design/html/prizeOne.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18872837316124ebc6eb3a06-95099210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fa95c3200524e24ab45d076ea462a079d4d83e4' => 
    array (
      0 => 'simpla/design/html/prizeOne.tpl',
      1 => 1630594876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18872837316124ebc6eb3a06-95099210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6124ebc704bdd8_17338080',
  'variables' => 
  array (
    'manager' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'config' => 0,
    'prize' => 0,
    'statuses' => 0,
    'key' => 0,
    'status' => 0,
    'delivery_city' => 0,
    'city' => 0,
    'prizeCity' => 0,
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6124ebc704bdd8_17338080')) {function content_6124ebc704bdd8_17338080($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('settings',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=SettingsAdmin">Настройки</a></li><?php }?>
	<?php if (in_array('currency',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CurrencyAdmin">Валюты</a></li><?php }?>
	<?php if (in_array('delivery',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=DeliveriesAdmin">Доставка</a></li><?php }?>
	<?php if (in_array('payment',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=PaymentMethodsAdmin">Оплата</a></li><?php }?>
	<?php if (in_array('managers',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ManagersAdmin">Менеджеры</a></li><?php }?>
	<?php if (in_array('cities',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CitiesAdmin">Города доставки</a></li><?php }?>
	<?php if (in_array('bonus',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=BonusAdmin">Бонус</a></li><?php }?>
	<li class="active"><a href="index.php?module=PrizeAdmin">Призы</a></li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Призы", null, 1);
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
			// if(name == 'dilevery') { inpt = '#select_dilevery'; }
			if(name == 'cities') { inpt = '#select_cities'; }
			// if(name == 'brands') { inpt = '#select_brands'; }
			// if(name == 'products') { inpt = '#related_products'; }
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
		
		// if()
		function getSelectValue(){
			var stat = $('#status').val()
			if(stat == 2 || stat == 3){
			 $('.select_products').hide()
			}else{
				$('.select_products').show()
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
<h1><?php if ($_smarty_tpl->tpl_vars['prize']->value->id) {?>Приз №<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prize']->value->id, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>Новый Приз<?php }?></h1>
<div id=next_order>
	<a title="Назад" class=prev_order href="index.php?module=PrizeAdmin">←</a>
	</div>
</div>
<!-- Общие параметры -->
	<div class="block">
		<h2>Общие данные призов</h2>
		<h2>Текст</h2>
		<textarea name="text" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prize']->value->text, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
	</div>
	<div class="block">
	<ul>
		<li><label class=property>Активен:</label><input name="is_active" class="simpla_inp" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['prize']->value->is_active==1) {?> checked <?php }?> /></li>
	</ul>
	
	<label class=property>Статус:</label>
	<input type="hidden" id="select_status" value="<?php echo $_smarty_tpl->tpl_vars['prize']->value->status;?>
"/>
	<select name="status" id="status" onchange="getSelectValue()"  style="margin-bottom: 7px;">
		<?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['status']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['prize']->value->status) {?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</option>
		<?php } ?>
	</select>
	<br/>
	<label class=property>Количество:</label>
	<input type="number" name="quantity" value="<?php echo $_smarty_tpl->tpl_vars['prize']->value->quantity;?>
" />
	<br/>
	<label class=property style="margin-top: 7px; margin-bottom: 25px;">Осталось:</label><p style="margin-top: 10px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['prize']->value->balance;?>
</p>
</div>
	<div id="column_left">
		<ul><li style="display: flex;">
			
			<label class=property>Города:</label>
			<select name="city[]" multiple="multiple" size="20" style="height:300px;" id="select_cities">
			<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['delivery_city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
"<?php if (in_array($_smarty_tpl->tpl_vars['city']->value->id,$_smarty_tpl->tpl_vars['prizeCity']->value)) {?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['city']->value->name;?>
</option>
			<?php } ?>
			</select>
		</li></ul>
		<ul><li style="display: flex; margin-top: 19px;">
			<label class="select_products">Товары:</label>
			<select name="product_id"  class="select_products">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['product']->value->id==$_smarty_tpl->tpl_vars['prize']->value->product_id) {?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</option>
			<?php } ?>
			</select>
		</li></ul>
	</div>	
	<?php if ($_smarty_tpl->tpl_vars['prize']->value->id) {?><input class="button_red button_delete" type="submit" name="delete" value="Удалить" /><?php }?>
	<input class="button_green button_save" type="submit" name="save" value="Сохранить" />
	</div>
</form>

<script>
	var select_status = $('#select_status').val();
	if(select_status == 2 || select_status == 3){
		$('.select_products').hide()
	}
	
	console.log(select_status);
</script><?php }} ?>
