<?php /* Smarty version Smarty-3.1.18, created on 2021-08-11 11:31:43
         compiled from "simpla/design/html/cities.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9964995916010194d0c4072-18900443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6643ad0d58f76d8dfd4c710196c1eddfa29c6b5' => 
    array (
      0 => 'simpla/design/html/cities.tpl',
      1 => 1628362400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9964995916010194d0c4072-18900443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6010194d0e52b0_59582814',
  'variables' => 
  array (
    'manager' => 0,
    'cities' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6010194d0e52b0_59582814')) {function content_6010194d0e52b0_59582814($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('settings',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=SettingsAdmin">Настройки</a></li><?php }?>
	<?php if (in_array('currency',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CurrencyAdmin">Валюты</a></li><?php }?>
	<?php if (in_array('delivery',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=DeliveriesAdmin">Доставка</a></li><?php }?>
	<?php if (in_array('payment',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=PaymentMethodsAdmin">Оплата</a></li><?php }?>
	<?php if (in_array('managers',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ManagersAdmin">Менеджеры</a></li><?php }?>
	<li class="active"><a href="index.php?module=CitiesAdmin">Города доставки</a></li>
	<?php if (in_array('bonus',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=BonusAdmin">Бонус</a></li><?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Города доставки', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>



<div id="header">
	<h1>Города доставки</h1>
	<a class="add" href="index.php?module=CityAdmin">Добавить город</a>
</div>

<?php if ($_smarty_tpl->tpl_vars['cities']->value) {?>
<!-- Основная часть -->
<div id="main_list">
	<form id="form_list" method="post">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

		<div id="list">
			<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
			<div class="<?php if (!$_smarty_tpl->tpl_vars['m']->value->visible) {?>invisible<?php }?> row">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['m']->value->id;?>
">
				<div class="user_name cell">
					<a href="index.php?module=CityAdmin&id=<?php echo $_smarty_tpl->tpl_vars['m']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
				</div>
				<div class="icons cell">
					<a class="enable"    title="Активен"                 href="#"></a>
                    <a href="index.php?module=CityAdmin&id=<?php echo $_smarty_tpl->tpl_vars['m']->value->id;?>
">Редактировать</a>
				</div>
				<div class="clear"></div>
			</div>
			<?php } ?>
		</div>
	</form>
</div>
<?php }?>

<script>
	// Показать город
	$("a.enable").click(function() {
		var icon        = $(this);
		var line        = icon.closest("div.row");
		var id          = line.find('input[type="hidden"]').val();
		var state       = line.hasClass('invisible')?1:0;
		icon.addClass('loading_icon');
		$.ajax({
			type: 'POST',
			url: 'ajax/update_object.php',
			data: {'object': 'city', 'id': id, 'values': {'visible': state}, 'session_id': '<?php echo $_SESSION['id'];?>
'},
			success: function(data){
				icon.removeClass('loading_icon');
				if(state)
					line.removeClass('invisible');
				else
					line.addClass('invisible');
			},
			dataType: 'json'
		});
		return false;
	});
</script>

<?php }} ?>
