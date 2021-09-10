<?php /* Smarty version Smarty-3.1.18, created on 2021-02-01 09:20:03
         compiled from "simpla/design/html/city.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107487463460179d93348c16-82937786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a34cb91d5230db838183e103c99879b53ba22d4c' => 
    array (
      0 => 'simpla/design/html/city.tpl',
      1 => 1609748604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107487463460179d93348c16-82937786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'city' => 0,
    'regions' => 0,
    'region' => 0,
    'city_areas' => 0,
    'city_area' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_60179d93363826_51400483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60179d93363826_51400483')) {function content_60179d93363826_51400483($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('settings',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=SettingsAdmin">Настройки</a></li><?php }?>
	<?php if (in_array('currency',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CurrencyAdmin">Валюты</a></li><?php }?>
	<?php if (in_array('delivery',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=DeliveriesAdmin">Доставка</a></li><?php }?>
	<?php if (in_array('payment',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=PaymentMethodsAdmin">Оплата</a></li><?php }?>
	<?php if (in_array('managers',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ManagersAdmin">Менеджеры</a></li><?php }?>
	<li class="active"><a href="index.php?module=CitiesAdmin">Города доставки</a></li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['city']->value) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['city']->value->name, null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Новый город', null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['city']->value) {?>
	<h1 style="float: none">Редактировать город</h1>
<?php } else { ?>
	<h1 style="float: none">Добавить город</h1>
<?php }?>
<!-- Основная форма -->
<br>
<form method=post id=city enctype="multipart/form-data" style="float: none">
<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div style="display: block">
		Название города:
		<input class="name" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" maxlength="160"/>
		<input name="city_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
"/>
		<label for="visible" style="margin-left: 50px;">Активен</label>
		<input type="checkbox" class="simpla_small_inp" style="width: 20px;" id="visible" name="visible" value="1" <?php if ($_smarty_tpl->tpl_vars['city']->value->visible) {?>checked<?php }?>>
		<label for="hide_time" style="margin-left: 50px;">Скрыть временные периоды</label>
		<input type="checkbox" class="simpla_small_inp" style="width: 20px;" id="hide_time" name="hide_time" value="1" <?php if ($_smarty_tpl->tpl_vars['city']->value->hide_time) {?>checked<?php }?>>
		<input class="button_red button_save" type="submit" name="delete" value="Удалить город" />
	</div>
	<br>
	<div style="margin-bottom: 30px;">
		<h2>Связать со складом</h2>
		<select name="region_id">
			<option value="0" <?php if ($_smarty_tpl->tpl_vars['city']->value->region_id=='0') {?>selected<?php }?>>Выберите склад</option>
			<option value="1067" <?php if ($_smarty_tpl->tpl_vars['city']->value->region_id=='1067') {?>selected<?php }?>>Минск</option>
			<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['regions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['region']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['city']->value->region_id==$_smarty_tpl->tpl_vars['region']->value->id) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['region']->value->name;?>
</option>
			<?php } ?>
		</select>
	</div>
	<br>
	<div style="margin-bottom: 30px;">
		<h2>Название латиницей</h2>
		<input type="text" class="simpla_small_inp" style="width: 200px;" name="latin_name" value="<?php echo $_smarty_tpl->tpl_vars['city']->value->latin_name;?>
">
	</div>
	<div class="list_area" style="float: none">
		<h2>Список пунктов выдачи</h2>
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
	<div style="clear: both"></div>
	<input class="button_green button_save" type="submit" name="save" value="Сохранить" />
</form>
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
<!-- Основная форма (The End) -->
<?php }} ?>
