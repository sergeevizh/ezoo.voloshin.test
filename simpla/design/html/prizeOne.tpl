{capture name=tabs}
	{if in_array('settings', $manager->permissions)}<li><a href="index.php?module=SettingsAdmin">Настройки</a></li>{/if}
	{if in_array('currency', $manager->permissions)}<li><a href="index.php?module=CurrencyAdmin">Валюты</a></li>{/if}
	{if in_array('delivery', $manager->permissions)}<li><a href="index.php?module=DeliveriesAdmin">Доставка</a></li>{/if}
	{if in_array('payment', $manager->permissions)}<li><a href="index.php?module=PaymentMethodsAdmin">Оплата</a></li>{/if}
	{if in_array('managers', $manager->permissions)}<li><a href="index.php?module=ManagersAdmin">Менеджеры</a></li>{/if}
	{if in_array('cities', $manager->permissions)}<li><a href="index.php?module=CitiesAdmin">Города доставки</a></li>{/if}
	{if in_array('bonus', $manager->permissions)}<li><a href="index.php?module=BonusAdmin">Бонус</a></li>{/if}
	<li class="active"><a href="index.php?module=PrizeAdmin">Призы</a></li>
{/capture}

{$meta_title = "Призы" scope=parent}
{* Подключаем Tiny MCE *}
{include file='tinymce_init.tpl'}
{literal}
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
{/literal}
{if $message_success}
<!-- Системное сообщение -->
<div class="message message_success">
	<span class="text">{if $message_success == 'saved'}Настройки сохранены{/if}</span>
	{if $smarty.get.return}
	<a class="button" href="{$smarty.get.return}">Вернуться</a>
	{/if}
</div>
<!-- Системное сообщение (The End)-->
{/if}

{if $message_error}
<!-- Системное сообщение -->
<div class="message message_error">
	<span class="text">{if $message_error == 'watermark_is_not_writable'}Установите права на запись для файла {$config->watermark_file}{/if}</span>
	<a class="button" href="">Вернуться</a>
</div>
<!-- Системное сообщение (The End)-->
{/if}


<!-- Основная форма -->
<form method="post" action="" enctype='multipart/form-data' id="product" >
<input type=hidden name="session_id" value="{$smarty.session.id}">
<div id="name">
<h1>{if $prize->id}Приз №{$prize->id|escape}{else}Новый Приз{/if}</h1>
<div id=next_order>
	<a title="Назад" class=prev_order href="index.php?module=PrizeAdmin">←</a>
	</div>
</div>
<!-- Общие параметры -->
	<div class="block">
		<h2>Общие данные призов</h2>
		<h2>Текст</h2>
		<textarea name="text" >{$prize->text|escape}</textarea>
	</div>
	<div class="block">
	<ul>
		<li><label class=property>Активен:</label><input name="is_active" class="simpla_inp" type="checkbox" value="1" {if $prize->is_active == 1} checked {/if} /></li>
	</ul>
	
	<label class=property>Статус:</label>
	<input type="hidden" id="select_status" value="{$prize->status}"/>
	<select name="status" id="status" onchange="getSelectValue()"  style="margin-bottom: 7px;">
		{foreach $statuses as $key => $status}
		<option value="{$key}"{if $key == $prize->status}selected {/if}>{$status}</option>
		{/foreach}
	</select>
	<br/>
	<label class=property>Количество:</label>
	<input type="number" name="quantity" value="{$prize->quantity}" />
	<br/>
	<label class=property style="margin-top: 7px; margin-bottom: 25px;">Осталось:</label><p style="margin-top: 10px; margin-bottom: 7px;">{$prize->balance}</p>
</div>
	<div id="column_left">
		<ul><li style="display: flex;">
			{* <input onchange="setDisable('cities');" id="st_cities" name="st_cities" class="simpla_inp condif" type="checkbox" value="1"/> *}
			<label class=property>Города:</label>
			<select name="city[]" multiple="multiple" size="20" style="height:300px;" id="select_cities">
			{foreach $delivery_city as $city}
				<option value="{$city->id}"{if in_array($city->id,$prizeCity)}selected {/if}>{$city->name}</option>
			{/foreach}
			</select>
		</li></ul>
		<ul><li style="display: flex; margin-top: 19px;">
			<label class="select_products">Товары:</label>
			<select name="product_id"  class="select_products">
			{foreach $products as $product}
				<option value="{$product->id}"{if $product->id == $prize->product_id}selected {/if}>{$product->name}</option>
			{/foreach}
			</select>
		</li></ul>
	</div>	
	{if $prize->id}<input class="button_red button_delete" type="submit" name="delete" value="Удалить" />{/if}
	<input class="button_green button_save" type="submit" name="save" value="Сохранить" />
	</div>
</form>

<script>
	var select_status = $('#select_status').val();
	if(select_status == 2 || select_status == 3){
		$('.select_products').hide()
	}
	
	console.log(select_status);
</script>