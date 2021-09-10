<?php /* Smarty version Smarty-3.1.18, created on 2021-05-06 15:44:18
         compiled from "simpla/design/html/orders_courier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:705968323602142cb7ffe23-77552829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd659ad511918e5227096b6f9f157da1d597f82a0' => 
    array (
      0 => 'simpla/design/html/orders_courier.tpl',
      1 => 1620304239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '705968323602142cb7ffe23-77552829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_602142cb83ec41_72067196',
  'variables' => 
  array (
    'manager' => 0,
    'status' => 0,
    'keyword' => 0,
    'label' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'courier' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602142cb83ec41_72067196')) {function content_602142cb83ec41_72067196($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('orders',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
	<li <?php if ($_smarty_tpl->tpl_vars['status']->value===0) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','status'=>0,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Новые</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['status']->value==1) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','status'=>1,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Приняты</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['status']->value==2) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','status'=>2,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Выполнены</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['status']->value==3) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','status'=>3,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Удалены</a></li>
	<?php if ($_smarty_tpl->tpl_vars['keyword']->value) {?>
	<li class="active"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','keyword'=>$_smarty_tpl->tpl_vars['keyword']->value,'id'=>null,'label'=>null),$_smarty_tpl);?>
">Поиск</a></li>
	<?php }?>
	<?php }?>
	<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersLabelsAdmin','keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Метки</a></li>
	<?php if (in_array('delivery_area',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
	<li class="active"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersCouriersAdmin','keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Курьеры</a></li>
	<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['label']->value->id) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['label']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Новый Курьер', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
<!-- Системное сообщение -->
<div class="message message_success">
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>Курьер добавлен<?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>Курьер обновлен<?php }?></span>
	<?php if ($_GET['return']) {?>
	<a class="button" href="<?php echo $_GET['return'];?>
">Вернуться</a>
	<?php }?>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="message_box message_error">
        <span><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='empty_name') {?>Имя не может быть пустым<?php }?></span>
    </div>
<?php }?>

<!-- Основная форма -->
<form method=post id=product enctype="multipart/form-data">
	<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div id="name">
		<label>Имя курьера:</label><input class="name" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['courier']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<input name=id type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['courier']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
	</div>
	<div>
		<label>Номер:</label>
		<input class="name" name="phone_courier" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['courier']->value->phone_courier, ENT_QUOTES, 'UTF-8', true);?>
"/>
	</div>
	<br>
	<div>
		<input type="checkbox" name="start" value='1' <?php if ($_smarty_tpl->tpl_vars['courier']->value->start) {?>checked<?php }?>> <label>Использовать по умолчанию</label>
	</div>
	<input class="button_green button_save" type="submit" name="" value="Сохранить" />




</form>
<!-- Основная форма (The End) -->

<?php }} ?>
